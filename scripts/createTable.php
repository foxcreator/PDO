<?php

require_once '../config/const.php';

$db = DB::connect();

$check = $db->query('SHOW TABLES LIKE "users"');
$check = $check->rowCount();

if ($check == 0){

    $sql = "Create table users (
           id int auto_increment primary key,
           name varchar(50) not null,
           surname varchar(50) not null,
           email varchar(120) not null unique,
           age int not null
)";

    $sql = $db->prepare($sql);
    $sql->execute();

    header('Location: /');
}else echo 'Table Users is exist';

