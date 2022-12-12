<?php
include "app/database/db.php";

$errMsg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $passwordFirst = trim($_POST['password-first']);
    $passwordSecond = trim($_POST['password-second']);
    $admin = 0;



    if ($name === '' || $email === '' || $passwordFirst === '') {
        $errMsg = "Not all fields are filled!";
    } elseif (mb_strlen($name, 'UTF8') < 4) {
        $errMsg = "Name must be at least 4 characters";
    } elseif (mb_strlen($passwordFirst, 'UTF8') < 6) {
        $errMsg = "Password must contain at least 6 characters";
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
                'password_user' => $password
            ];
            $id = insert('users', $post);
            $errMsg = "<p style='color: green'>" . "User $name  successfully registered" . "</p>";
        }
    }
    //    $last_row = selectOne('users', ['id_user' => $id]);

} else {
    echo  'GET';
    $name = '';
    $email = '';
}
