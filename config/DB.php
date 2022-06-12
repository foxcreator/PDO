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

    public function LoadDataUsers()
    {
        $db = DB::connect();
        $query = "SELECT * FROM users";
        $query = $db->prepare($query);
        $query->execute();

        $query = $query->fetchAll();

        foreach ($query as $key)
        {
            echo "<tr><td><a href=\"scripts/user.php?id=".$key['id']."\">
        ".$key['id'].". ".$key['name']. "
        </a>
        <form action='scripts/deleteUser.php' method='post'>
        <input type='checkbox' name='check[]' value='" .$key['id']."'>
        </td>
";
        }

    }

    public function CurrentUser($id_user)
    {
        $db = DB::connect();
        if(empty($id_user))
        {
            echo "Юзер не выбран";
        }
        else
        {
            $id_user = $_GET['id'];
            $query = "SELECT * FROM users WHERE id='$id_user'";
            $array = $db->prepare($query);
            $array->execute();
            $array = $array->fetchAll();


            printf ("
                <td>".$array['0']['id']."</td>
                <td>".$array['0']['name']."</td>
                <td>".$array['0']['surname']."</td>
                <td>".$array['0']['email']."</td>
                <td>".$array['0']['age']."</td>
            ");
        }
    }

    public function deleteUser($item)
    {
        $db = DB::connect();

        $sql = "DELETE FROM users WHERE id='$item'";
        $sql = $db->prepare($sql);
        $sql->execute();

        header('Location: /');
    }


}
