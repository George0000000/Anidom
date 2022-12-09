<?php
require('connect.php');

function tt($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
};

//Проверка выполнения запроса БД
function dbCheckError($query) {
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}

function selectAll($table, $param = []) {
    global $pdo;
    $sql = "SELECT * FROM $table WHERE admin_user = 1";
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    return $query->fetchAll();
}

tt(selectAll('users'));


