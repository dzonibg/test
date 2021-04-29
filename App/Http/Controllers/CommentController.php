<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Gates\AdminGate;

class CommentController {

    public function index() {
        if (AdminGate::open()) {
            $comments = new Comment();
            $comments = $comments->fetchAll();
            return view("comment/index", compact("comments"));
        } else return unauthorized();
    }

    public function store() {
        $comment = new Comment();
        $comment->product_id = $_POST['product_id'];
        $comment->name = $_POST['name'];
        $comment->email = $_POST['email'];
        $comment->body = $_POST['body'];
        $comment->store($comment);
    }

    public function approve($id) {
        if (AdminGate::open()) {
            $comment = new Comment();
            $comment->approve($id);

            return redirect("comment");

            } else return unauthorized();
    }

    public function delete($id) {
        if (AdminGate::open()) {
            $comment = new Comment();
            $comment->delete($id);
            return redirect("comment");


        } else return unauthorized();
    }

    public function unapproved() {
        if (AdminGate::open()) {
            $comments = new Comment();
            $comments = $comments->getUnapproved();

            return view("comment/unapproved", compact("comments"));
        }
    }

}