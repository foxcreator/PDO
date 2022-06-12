<?php

require_once '../config/const.php';
require_once '../config/helper.php';

foreach ($_POST['check'] as $item){
    deleteUser($item);
}

//function deleteUser($item)
//{
//    $db = DB::connect();
//
//    $sql = "DELETE FROM users WHERE id='$item'";
//    $sql = $db->prepare($sql);
//    $sql->execute();
//
//    header('Location: /');
//}





