<?php

session_start();

require('connect.php');

function tt($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
};

$errMsg = '';

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


//Запись данных в таблице
function insert($table, $param) {
    global $pdo;
    $i = 0;
    $col = '';
    $mask = '';
    foreach ($param as $key => $value) {
        if ($i === 0) {
            $col = $col . "$key";
            $mask = $mask ."'" . "$value"."'";
        } else {
            $col = $col . ", $key";
            $mask = $mask . ", '" . "$value"."'";
        }
        $i++;
    }

    $sql = "INSERT INTO $table ($col) VALUES ($mask)";



    $query = $pdo->prepare($sql);
    $query->execute($param);
    dbCheckError($query);

    return $pdo->lastInsertId();
}

//ОБновление строки в таблице
function update($table, $id, $param) {
    global $pdo;
    $i = 0;
    $str = '';
    foreach ($param as $key => $value) {
        if ($i === 0) {
            $str = $str . $key . "='" . "$value" . "'";
        } else {
            $str = $str . ", " . $key . "= '" . "$value"."'";
        }
        $i++;
    }

    $sql = "UPDATE $table SET $str WHERE id_user = $id";

    $query = $pdo->prepare($sql);
    $query->execute($param);
    dbCheckError($query);
}

//Удаления строки в таблице
function delete($table, $id) {
    global $pdo;

    $sql = "DELETE FROM $table WHERE id_user = $id ";

//    tt($sql);
//    exit();

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}






