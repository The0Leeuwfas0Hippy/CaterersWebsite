<?php
    require('/Applications/Ampps/www/WIL_Web30/public/php_scripts/DB_Connect.php');

    $Usernames = $_POST['Username_Login'];
    $PAsswords = $_POST['Password_Login'];

    $SQuery = "INSERT INTO mock_user (username, password) values ('$Usernames', '$PAsswords')";

    $the_query = mysqli_query($connect, $SQuery);

    if($the_query)
    {
        
        session_start();
        $_SESSION['username'] = $User_username;
       
        header('Location: /WIL_Web30/public/home_Page.html');
    }
    else       
        {
            echo "Some shit went down" . $connect -> error;
        }


?>