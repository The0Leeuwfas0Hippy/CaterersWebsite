<?php

    $db_Server = "localhost";
    $db_Username = "root";
    $db_Password = "mysql";
    $db_name = "db_Care_Caterers";

    $connect = mysqli_connect($db_Server, $db_Username, $db_Password,$db_name);

    if(!$connect)
    {
        echo 'Failed to connect to MySQLeses: '.'_' .mysqli_connect_error();
    };

?>