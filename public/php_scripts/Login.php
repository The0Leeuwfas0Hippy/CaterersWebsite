<?php
   include ('/Applications/Ampps/www/WIL_Web30/public/php_scripts/DB_Connect.php');
   
          
               $User_Username = trim($_POST['Username_Login']);
              $User_Password= trim($_POST['Password_Login']);
                      //$hashed_User_Password = password_hash($User_Password, PASSWORD_DEFAULT);

          if(empty($User_Username))
          {
               echo "Username Field is Empty: Enter Username";
          }
          else if(empty($User_Password))
               {
                    echo "Password Field is Empty: Enter Password";
               }
               else if(empty($User_Username) && empty($User_Password))
                    {
                         echo "Both Username and Password Fields are Empty: Enter Username and Password";
                    }
                    else
                         {
                              if($_SERVER['REQUEST_METHOD'] == 'POST')
                              {
                                   logUserIn($connect);
                              }
                              else
                                   {
                                        echo "your login creds couldn't be sent server";
                                   }
                         }
            

          function logUserIn(mysqli $con)
          {
               $SQL_query = "SELECT Username FROM tbl_User WHERE Username= '$User_Username' and UserPassword='$User_Password'";
            
               $query_result = mysqli_query($con, $SQL_query);

               $row = mysqli_fetch_array($query_result,MYSQLI_ASSOC);

               $Active = $row['active'];

               $row_count = mysqli_num_rows($query_result);

               if($row_count == 1)
               {
                    session_start();
                    $_SESSION['username'] = $User_username;
       
                     header('Location: /WIL_Web30/public/home_Page.html');
               }
               else
                    {
                         echo "it ain't your day! <br> <br> row: " . $row_count;
                    }
                     
          }

         
         

                    mysqli_close($connect);

   
?>