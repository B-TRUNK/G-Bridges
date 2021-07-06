<?php

    require_once('config.php');

    $result = mysqli_query($db, "SELECT * FROM countries");
    $json_array = array();

    while($row = mysqli_fetch_assoc($result)) {
        $json_array[] = $row;
    }

    print(json_encode($json_array));
    