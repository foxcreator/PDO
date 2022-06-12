<?php

require_once '../config/const.php';
require_once '../config/DB.php';
$db = new DB();
foreach ($_POST['check'] as $item){
    $db->deleteUser($item);
}







