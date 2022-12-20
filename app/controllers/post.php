<?php
include "app/database/db.php";

$errMsg = '';

$posts = selectAll('post', ['id_user' => $_SESSION['id_user']]);
//tt($posts);
//exit();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post-button'])) {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $season = $_POST['post-hs'];

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
            'season_post' => $season,
            'author_post' => $_SESSION['name_user']
        ];
        insert('post', $post);
        header('location: ' . BASE_URL . 'page.php');
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['s1-button'])) {
    $posts = selectAll('post', ['season_post' => 1]);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['s2-button'])) {
    $posts = selectAll('post', ['season_post' => 2]);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['s3-button'])) {
    $posts = selectAll('post', ['season_post' => 3]);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['s4-button'])) {
    $posts = selectAll('post', ['season_post' => 4]);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['s5-button'])) {
    $posts = selectAll('post', ['season_post' => 5]);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['s6-button'])) {
    $posts = selectAll('post', ['season_post' => 6]);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sa-button'])) {
    $posts = selectAll('post', ['season_post']);
}
