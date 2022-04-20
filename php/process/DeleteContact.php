<?php
include_once('ConnectDB.php');
include_once('Contact.php');
//Delete Cotact
$Cont=new Contact();
$id=$_GET['Deleteid'];
$Cont->DeleteContact($id);