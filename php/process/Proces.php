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
            $chekuser= $user->checkIfUserExist($UserName ,$Password);
           if($chekuser){

           $error= '
           <div class="modal" tabindex="-1">
         <div class="modal-dialog">
        <div class="modal-content">
         <div class="modal-header">
        <h5 class="modal-title">worning</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>this acount already exist</p>
       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       </div>
       </div>
       </div>
       </div>
           ';
           header("location: ../Signup.php");

           }else{
            $user->signupUser($UserName,$Password);
        }
        
        
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
