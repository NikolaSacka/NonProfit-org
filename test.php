<?php
require_once 'php/comment-add.php';

$row = $stmt;

foreach ($row as $rows){

    echo "<li>"; $rows['name']; "<br>";
               $comment['comment'];"</li>";

}
var_dump($row);
