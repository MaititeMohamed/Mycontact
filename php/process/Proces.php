<?php
include_once('ConnectDB.php');
include_once('User.php');
include_once('Contact.php');
session_start();
//login
     $user = new User();
    if(isset($_POST['SignIn'])){
        $UserName = $_POST['UserName'];
        $Password = $_POST['Password'];
        $user = new User();
        $user->loginUser($UserName,$Password);
        
        
    }
    //signup
    if(isset($_POST['Signup'])){
        $UserName = $_POST['UserName'];
        $Password = $_POST['Password'];
       
        
        $user->signupUser($UserName,$Password);
    }
    //Add contact
     $Contact=new Contact();
    if(isset($_POST['add'])){
         $Avatar = $_POST['Avatar'];
        $Name = $_POST['Name']; 
        $PhoneNumber = $_POST['PhoneNumber'];
        $email = $_POST['email'];
        $Address = $_POST['Address'];
        $Contact->AddContact($Avatar,$Name,$PhoneNumber,$email,$Address,$FK_Userid);
      }
      

 
?>