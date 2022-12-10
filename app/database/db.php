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

// Запрос на получение данных с одной таблицы
function selectAll($table, $param = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($param)) {
        $i = 0;
        foreach ($param as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'".$value."'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key=$value";
            } else {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }

//    tt($sql);
//    exit();

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    return $query->fetchAll();
}

// Запрос на получение одной строки с таблицы
function selectOne($table, $param = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($param)) {
        $i = 0;
        foreach ($param as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'".$value."'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key=$value";
            } else {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }

    $sql = $sql . " LIMIT 1";

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    return $query->fetch();
}

$param = [
    'admin_user' => 1,
    'name_user' => 'George'
];

//tt(selectAll('users', $param));

tt(selectOne('users'));


