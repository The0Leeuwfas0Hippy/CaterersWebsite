<php
    $Server = ' ';
    $Database = ' ';
    $Password= ' ';


    $sqli_connect = new mysqli();

    if($mysqli_connect != true)
    {
        die( error: Could not connect. + . $mysqli->connect_error);
    }
?>