<?php
session_start();

include "path.php";

unset($_SESSION['id_user']);
unset($_SESSION['name_user']);
unset($_SESSION['admin_user']);

header('location: ' . BASE_URL);