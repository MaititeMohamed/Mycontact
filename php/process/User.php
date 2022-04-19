<?php

class User extends Dbconnect{
    

  
      function loginUser($UserName , $Password){
          
          // $date = date('Y-m-d');
          // $time = date('h:i:sa');
          // $date_and_time = $date.' '.$time;
         
         $stmt = $this->connect()->prepare("SELECT * FROM `users` WHERE `UserName` = ? AND `Password` = ?");// 
         $stmt->bindParam(1, $UserName, PDO::PARAM_STR);
         $stmt->bindParam(2, $Password, PDO::PARAM_STR);
          try {
          $stmt->execute();
          } catch(EXCEPTION $e){
              echo "Invalid username and Password : ". $e->getMessage();
          }
          $count = $stmt->rowCount();
          if($count > 0){
              $row = $stmt->fetch(PDO::FETCH_ASSOC);
              setcookie('UserName', $row['UserName'], time() + (3600 * 24), "/"); 
              setcookie('Password', $row['Password'], time() + (3600 * 24), "/"); 
              session_start();
              $_SESSION['UserName'] = $row['UserName'];
              $_SESSION['Password'] = $row['Password'];
              session_write_close();
              header('location: ../Profile.php');//redairect to profile
          }
              }

      function signupUser($UserName,$Password){
          
          $stmt = $this->connect()->prepare("INSERT INTO `users`(`UserName`,`Password`) VALUES (?,?)");// 
          $stmt->bindParam(1, $UserName, PDO::PARAM_STR);
          $stmt->bindParam(2, $Password, PDO::PARAM_STR);
          try {
              $stmt->execute();
  
              
              setcookie('UserName', $UserName, time() + (3600 * 24), "/"); 
              setcookie('Password', $Password, time() + (3600 * 24), "/"); 
              session_start();
          
              $_SESSION['UserName'] = $UserName;
              $_SESSION['Password'] = $Password;
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
      
  