<?php
include_once('ConnectDB.php');
include_once('User.php');
include_once('Contact.php');
session_start();
//login
$user = new User();
if (isset($_POST['SignIn'])) {
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
    $user = new User();
    $user->loginUser($UserName, $Password);
}
//signup
if (isset($_POST['Signup'])) {
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
    $chekuser = $user->checkIfUserExist($UserName, $Password);
    if ($chekuser) {
        // create session for error 
        $_SESSION['error'] = '<div class="alert alert-danger" role="alert">
            this account is already exists  
          </div>';
        header("location: ../Signup.php");
    } else {
        $user->signupUser($UserName, $Password);
    }
}
//Add contact
$Contact = new Contact();
if (isset($_POST['add'])) {
    $Avatar = $_POST['Avatar'];
    $Name = $_POST['Name'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $email = $_POST['email'];
    $Address = $_POST['Address'];
     
    $chekcontact=$Contact->checkIfContactExists($Name,$PhoneNumber,$email);
    if($chekcontact){
        $_SESSION['cerror'] = '<div class="alert alert-danger mt-3" role="alert">
        this contact is already exists  
      </div>';
     header("location: ../contactList.php");
     
    }else{
        $Contact->AddContact($Avatar, $Name, $PhoneNumber, $email, $Address, $FK_Userid);

    }
}
