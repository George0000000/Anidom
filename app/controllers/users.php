<?php
include "app/database/db.php";

$errMsg = '';



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reg-button'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $passwordFirst = trim($_POST['password-first']);
    $passwordSecond = trim($_POST['password-second']);
    $admin = 0;
    $about = $_POST['about'];



    if ($name === '' || $email === '' || $passwordFirst === '') {
        $errMsg = "Not all fields are filled!";
    } elseif (mb_strlen($name, 'UTF8') < 4) {
        $errMsg = "Name must be at least 4 characters";
    } elseif (mb_strlen($passwordFirst, 'UTF8') < 6) {
        $errMsg = "Password must contain at least 6 characters";

    } elseif (mb_strlen($about, 'UTF8') < 15) {
        $errMsg = "The 'About Me' field must contain at least 15 characters";
    } elseif ($passwordFirst !== $passwordSecond) {
        $errMsg = "Passwords do not match";
    } else {
        $existence = selectOne('users', ['email_user' => $email]);
        if ($existence['email_user'] === $email) {
            $errMsg = "User with this email already exists";
        } else {
            $password = password_hash($passwordFirst, PASSWORD_DEFAULT);
            $post = [
                'admin_user' => $admin,
                'name_user' => $name,
                'email_user' => $email,
                'password_user' => $password,
                'about_user' => $about
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id_user' => $id]);

            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['name_user'] = $user['name_user'];
            $_SESSION['admin_user'] = $user['admin_user'];
            $_SESSION['created'] = $user['created'];
            $_SESSION['about_user'] = $user['about_user'];

            header('location: ' . BASE_URL);
        }
    }
    //    $last_row = selectOne('users', ['id_user' => $id]);

} else {
    $name = '';
    $email = '';
}
//
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['log-button'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($email === '' || $password === '') {
        $errMsg = "Not all fields are filled!";
    } else {
        $existence = selectOne('users', ['email_user' => $email]);
        if ($existence && password_verify($password, $existence['password_user'])) {
            $_SESSION['about_user'] = $existence['about_user'];
            $_SESSION['id_user'] = $existence['id_user'];
            $_SESSION['name_user'] = $existence['name_user'];
            $_SESSION['admin_user'] = $existence['admin_user'];
            $_SESSION['created'] = $existence['created'];

            header('location: ' . BASE_URL);
        } else {
            $errMsg = "Данные введены неверно";
        }
    }
} else {
    $email = '';
}
