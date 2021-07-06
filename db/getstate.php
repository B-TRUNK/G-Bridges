<?php

$id = $_GET['country_id'];

require_once('config.php');

    $result = mysqli_query($db, "SELECT * FROM states where country_id=$id");
    $json_array = array();

        while ($row = mysqli_fetch_assoc($result))
        {
            $json_array[] = $row ;
        }

print(json_encode($json_array));
mysqli_close($db);