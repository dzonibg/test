<?php

namespace App\Models;

class Comment extends Model {

    public function __construct() {
        $this->tableName = "comments";
    }

    public function store(Comment $comment) {

        $st = "INSERT INTO comments (product_id, name, email, body, is_approved)
        VALUES( :product_id, :name, :email, :body, :is_approved)";

        $statement = $this->db()->prepare($st);
        $statement->execute([
            "product_id" => $comment->product_id,
            "name" => $comment->name,
            "email" => $comment->email,
            "body" => $comment->body,
            "is_approved" => 0
        ]);
    }

    public function approve($id) {
        $st = "UPDATE comments SET is_approved=1 WHERE id=?";
        $statement = $this->db()->prepare($st);
        $statement->execute([$id]);

    }

    public function delete($id) {
        $st = "DELETE FROM comments WHERE id=?";
        $statement = $this->db()->prepare($st);
        $statement->execute([$id]);

    }

    public function approvedOnly($id) {
        $st = "SELECT * FROM comments WHERE product_id=? AND is_approved=1";
        $statement = $this->db()->prepare($st);
        $statement->execute([$id]);
        return $statement->fetchAll();
    }

}