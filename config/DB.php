<?php

class DB
{
private static PDO $ins;

public static function connect()
{
    if (!isset(self::$ins)){
        try {
            self::$ins = new PDO(
                DSN,
                DB_USER,
                DB_PASS,
                [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
            );
        }catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    return self::$ins;
}
}