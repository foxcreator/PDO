<?php
require_once '../config/helper.php';
$db = new DB();
?>

<table width="60%">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Surname</td>
        <td>Email</td>
        <td>Age</td>
    </tr>
    <tr>
       <?php $db->CurrentUser($_GET['id']); ?>

    </tr>
</table>