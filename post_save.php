<?php
    session_start();
    $comment = $_POST['comment'];
    $post_id = $_POST['post_id'];
    $user_id = $_SESSION['user_id'];
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root", "");

    $sql = "INSERT Into comment(content, post_date, user_id, post_id) Values ('$comment', NOW(), $user_id, $post_id)";

    $conn->exec($sql);
    $conn = null;
    header("location: post.php?id=$post_id");
?>