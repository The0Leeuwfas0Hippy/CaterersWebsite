<?php
    require ('/Applications/Ampps/www/WIL_Web30/public/php_scripts/DB_Connect.php');

    $FirstName =  trim($_POST['First_Name_Registration']);
    $LastName = trim($_POST['Surname_Registration']);
    $User_username = $_POST['Username_Registration'];
    $Email = trim($_POST['Email_Registration']);
    $Password = trim($_POST['Password_Registration']);
        //$hash_Password = password_hash($Password, PASSWORD_DEFAULT);

    $RegisterUser = "INSERT INTO tbl_User (First_Name, Last_Name, Username, Email, UserPassword) 
                        VALUES ('$FirstName', '$LastName', '$User_username', '$Email', ' $Password ')";



    if(mysqli_query($connect, $RegisterUser))
    {
        
        session_start();
        $_SESSION['username'] = $User_username;
       
        header('Location: /WIL_Web30/public/home_Page.html');
    }
    else       
        {
            echo "Some shit went down" . $connect -> error;
        }

        $connect -> close();

?>