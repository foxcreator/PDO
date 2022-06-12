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
<form action="/createTable.php" method="post">
    <button type="submit" name="create_table">Create Table 'Users'</button>
</form>
<br>
</div>
<div style="float: left; margin-left: 30px">
<form action="addUser.php" method="post">
    <input type="text" name="name" id="name" placeholder="Your name"><br><br>
    <input type="text" name="surname" id="surname" placeholder="Your surname"><br><br>
    <input type="text" name="age" id="age" placeholder="Your age"><br><br>
    <input type="email" name="email" id="email" placeholder="Your email"><br><br>
    <button type="submit" name="add_user">Create User</button>
</form>
</div>
<div>
    <table width=60% align="center">
        <?php LoadDataUsers(); // Вызываешь функцию чтобы выпал список с юзерами ?>
    </table>
</div>
</body>
</html>
