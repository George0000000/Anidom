<?php
include "app/database/db.php";

$errMsg = '';

$posts = selectAll('post', ['id_user' => $_SESSION['id_user']]);
//tt($posts);
//exit();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post-button'])) {
    $title = $_POST['title'];
    $text = $_POST['text'];

    if ($title === '' || $text === '') {
        $errMsg = "Not all fields are filled!";
    } elseif (mb_strlen($title, 'UTF8') > 39) {
        $errMsg = "Title is too long (no more than 40 characters)";
    } elseif (mb_strlen($text, 'UTF8') > 300) {
        $errMsg = "Text is too large (no more than 300 characters)";
    } else {
        $post = [
            'id_user' => $_SESSION['id_user'],
            'title_post' => $title,
            'text_post' => $text,
        ];
        insert('post', $post);
        header('location: ' . BASE_URL . 'page.php');
    }
}
