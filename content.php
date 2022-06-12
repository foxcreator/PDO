<?php
$db = new DB();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="float: left">
<form action="/scripts/createTable.php" method="post">
    <button type="submit" name="create_table">Create Table 'Users'</button>
</form>
<br>
</div>
<div style="float: left; margin-left: 30px">
<form action="scripts/addUser.php" method="post">
    <input type="text" name="name" id="name" placeholder="Your name" required><br><br>
    <input type="text" name="surname" id="surname" placeholder="Your surname" required><br><br>
    <input type="text" name="age" id="age" placeholder="Your age" required><br><br>
    <input type="email" name="email" id="email" placeholder="Your email" required><br><br>
    <button type="submit" name="add_user">Create User</button>
</form>
</div>
<div style="float: left; margin-left: 30px; width: 200px">
    <table width=80% align="center">
        <?php
        $db->LoadDataUsers();
        ?>
        <td>
        <button type="submit" name="delete">Delete Users</button>
        </td>
            </form>
    </table>

</div>
</body>
</html>
