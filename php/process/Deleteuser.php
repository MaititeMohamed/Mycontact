<?php
include_once('ConnectDB.php');
include_once('User.php');
//Delete Cotact
$Cont=new User();
$id=$_GET['iduser'];
$Cont->DeleteUser($id);
session_reset();
#unset
session_unset();
#destroy
session_destroy();
