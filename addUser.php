<?php

    require_once __DIR__ . '/const.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$age = $_POST['age'];



try {
    $db = new PDO(DSN, DB_USER, DB_PASS);

    $sql = "INSERT INTO users (name, surname, email, age) values (:name, :surname, :email, :age)";

    $sql = $db->prepare($sql);

    $sql->execute([
        'name' => $name,
        'surname' => $surname,
        'email' => $email,
        'age' => $age
    ]);


    header('Location: /');

}catch (PDOException $e) {
    die($e);
}
