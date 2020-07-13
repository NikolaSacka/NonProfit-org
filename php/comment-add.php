<?php
$name = $_REQUEST['name'];
$comment = $_REQUEST['comment'];
$createdAt = date("Y-m-d");
$uuid = uniqid()+1;
if(empty($name))
{
    $_SESSION['nameErr'] = "Field can't be empty";
    header("Location: comment.php");
    exit();
}
if(empty($comment))
{
    $_SESSION['commErr'] = "Field can't be empty";
    header("Location: comment.php");
    exit();
}

require_once 'connection.php';

$stmt = $connection->prepare("INSERT INTO comments (uuid, name, comment, createdAt)
                    VALUES (:uuid, :name, :comment, :createdAt)"
);


$stmt->execute([

    'uuid'=> $uuid,
    'name' => $name,
    'comment' => $comment,
    'createdAt' => $createdAt
]);
//var_dump($stmt);
header("Location: ../comment.php");
