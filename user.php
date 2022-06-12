<?php
require_once __DIR__ . '/listUsers.php';
//$user_array = CurrentUser($_GET['id']);
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
       <?php CurrentUser($_GET['id']); ?>

    </tr>
</table>