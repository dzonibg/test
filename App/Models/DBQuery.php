<?php

namespace App\Models;

use PDO;

/*
    Taken partially from my repo: https://github.com/dzonibg/mfwork/blob/master/Framework/DBQuery.php
    so I don't rewrite the code from scratch. Methods are written from scratch.
*/
class Model
{

    public $tableName;

    public function db()
    {
        $host = $GLOBALS['db_hostname'];
        $db = $GLOBALS['db_name'];
        $user = $GLOBALS['db_username'];
        $pass = $GLOBALS['db_password'];

        $dsn = "mysql:host=$host;dbname=$db;";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
            return $pdo;
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function fetchAll()
    {
        return $this->db()->query("SELECT * FROM " . $this->tableName)->fetchAll();
    }

    public function index()
    {
        return $this->db()->query("SELECT * FROM " . $this->tableName)->fetchAll();
    }

    public function insert($values) {
        $this->db()->query("INSERT INTO " . $this->tableName . " VALUES (" . $values . ");");
    }

    public function findById($id) {
        return $this->db()->query("SELECT * FROM " . $this->tableName . " WHERE id=" . $id)->fetch();
    }

    public function findByParameter($parameter, $value) {
        $st = "SELECT * FROM $this->tableName WHERE $parameter = ?";
        $statement = $this->db()->prepare($st);
        $statement->execute([$value]);
        return $statement->fetch();

    }
}