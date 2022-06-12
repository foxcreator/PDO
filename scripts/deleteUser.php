<?php

require_once '../config/const.php';
require_once '../config/helper.php';
$db = new DB();
foreach ($_POST['check'] as $item){
    $db->deleteUser($item);
}







