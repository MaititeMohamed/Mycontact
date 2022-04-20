<?php
//include_once "ConnectDB.php";
class User extends Dbconnect{
    

  
        function loginUser($UserName , $Password){
          
          // $date = date('Y-m-d');
          // $time = date('h:i:sa');
          // $date_and_time = $date.' '.$time;
         
         $sql = $this->connect()->prepare("SELECT * FROM `users` WHERE `UserName` = ? AND `Password` = ?");// 
         $sql->bindParam(1, $UserName, PDO::PARAM_STR);
         $sql->bindParam(2, $Password, PDO::PARAM_STR);
          try {
          $sql->execute();
          } catch(EXCEPTION $e){
              echo "Invalid username and Password : ". $e->getMessage();
          }
          $count = $sql->rowCount();
          if($count > 0){
              $row = $sql->fetch();
              //setcookie('UserName', $row['UserName'], time() + (3600 * 24), "/"); 
             // setcookie('Password', $row['Password'], time() + (3600 * 24), "/"); 
              session_start();
              $_SESSION['UserName'] = $row['UserName'];
              $_SESSION['Password'] = $row['Password'];
              $_SESSION['Userid'] = $row['Userid'];
              
             
              header('location: ../Profile.php');//redairect to profile
          }
              }

            function signupUser($UserName,$Password){
          
                    $sql = $this->connect()->prepare("INSERT INTO `users`(`UserName`,`Password`) VALUES (?,?)");// 
                    $sql->bindParam(1, $UserName, PDO::PARAM_STR);
                    $sql->bindParam(2, $Password, PDO::PARAM_STR);
                    try {
                        $sql->execute();
                        //setcookie('UserName', $UserName, time() + (3600 * 24), "/"); 
                        //setcookie('Password', $Password, time() + (3600 * 24), "/"); 
                        // session_start();
                        
                        $date = date('Y-m-d');
                        $time = date('h:i:sa');
                        $date_and_time = $date.' '.$time;
                        $_SESSION['lasttime'] = $date_and_time;
                        session_write_close();
                        header('location: ../index.php');
                        } catch(EXCEPTION $e){
                            echo "check of username or password : ". $e->getMessage();
                        }
             } 
              
          }
      
  