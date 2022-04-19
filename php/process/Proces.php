<?php
include_once('ConnectDB.php');
include_once('User.php');
//login
     $fuser = new User();
    if(isset($_POST['SignIn'])){
        $UserName = $_POST['UserName'];
        $Password = $_POST['Password'];
        $fuser = new User();
        $fuser->loginUser($UserName,$Password);
        
    }
    //signup
    if(isset($_POST['Signup'])){
        $UserName = $_POST['UserName'];
        $Password = $_POST['Password'];
       
        
        $fuser->signupUser($UserName,$Password);
    }
    session_start();


 
?>