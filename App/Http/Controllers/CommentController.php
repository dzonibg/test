<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class CommentController {

    public function index() {
        echo "Comment index.";
    }

    public function store() {
        $comment = new Comment();
        $comment->product_id = $_POST['product_id'];
        $comment->name = $_POST['name'];
        $comment->email = $_POST['email'];
        $comment->body = $_POST['body'];
        $comment->store($comment);
    }

}