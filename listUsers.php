<?php

require_once __DIR__ . '/const.php';



function LoadDataUsers() // Загрузка списка юзеров
{
    $db = DB::connect();
    $query = "SELECT * FROM users";
    $query = $db->prepare($query);
    $query->execute();

    $query = $query->fetchAll();

    foreach ($query as $key)
    {
        echo "<tr><td><a href=\"user.php?id=".$key['id']."\">".$key['id'].". ".$key['name']."</a></td></tr>";
    }

}


function CurrentUser($id_user) //Вывод инфы по конкретному пользователю
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