<?php


require_once __DIR__ . '/const.php';



try {
    $db = new PDO(DSN, DB_USER, DB_PASS);

//    function tableIsset($isset)
//    {
//        if ()
//    }

    $sql = "SELECT 1 FROM users LIMIT 1";


    $sql = $db->prepare($sql);
    $sql->execute();

    $sql = $sql->fetchAll();

    $exist = array_key_exists(0, $sql);

    if ($exist = false){
        echo "create table";
    }

    echo '<pre>';
    var_dump($sql);
//
//    header('Location: /');


} catch (PDOException $e) {
    die($e);
}