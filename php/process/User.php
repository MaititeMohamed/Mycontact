<?php

//include_once "ConnectDB.php";
class User extends Dbconnect{
    

      //logiUser
        function loginUser($UserName , $Password){ 
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
              session_start();
              $_SESSION['UserName'] = $row['UserName'];
              $_SESSION['Password'] = $row['Password'];
              $_SESSION['DateSignup'] = $row['DateSignup'];
              $_SESSION['Userid'] = $row['Userid'];
                         date_default_timezone_set("Africa/Casablanca");
                         $date = date("l , d M  Y H:i:s A");
                         $_SESSION['lastlogin'] = $date;
             
               header('location: ../Profile.php');//redairect to profile
               }else
               {
                header('location: ../login.php');//redairect to profile

               }

              }
           //signupUser
            function signupUser($UserName,$Password){
          
                    $sql = $this->connect()->prepare("INSERT INTO `users`(`UserName`,`Password`) VALUES (?,?)");//
                    if(empty($UserName) || empty($Password)   ){
                        echo "<script>alert('fill all input')</script>";
                        header('location: ../Signup.php');
                    }else{ 
                    $sql->bindParam(1, $UserName, PDO::PARAM_STR);
                    $sql->bindParam(2, $Password, PDO::PARAM_STR);
                    try {
                        $sql->execute(); 
                        header('location: ../login.php');
                        } catch(EXCEPTION $e){
                            echo "check of username or password : ". $e->getMessage();
                 
                        }
                    }
             } 
              //delet user
              public function DeleteUser($id){
                $sql = $this->connect()->prepare("DELETE FROM `users` WHERE Userid = ? ");
                $sql->bindParam(1, $id, PDO::PARAM_STR);
                try {
                    $sql->execute();
                    header('location: ../index.php');
                } catch (EXCEPTION $e) {
                    echo "Error : " . $e->getMessage();
                }
              }
          }
      
  