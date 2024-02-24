<?php

require_once __DIR__ . '/GetConnection.php';
require_once __DIR__ . '/Model/Comment.php';
require_once __DIR__ . '/Repository/CommentRepository.php';

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

$comment = new Comment(email: "test@gmail.com", comment: "hello");
$newComment = $repository->insert($comment);

var_dump($newComment->getId());

$connection = null;
