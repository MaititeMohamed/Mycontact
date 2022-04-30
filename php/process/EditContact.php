<?php
$id=$_GET['updateid'];
include_once('ConnectDB.php');
include_once('Contact.php');
//get info contact

$Cont=new Contact();
$infocontact=$Cont->getcotactinfo($id);
   if(isset($_POST['Edit'])){
    $Avatar = $_POST['Avatar'];
    $Name = $_POST['Name']; 
    $PhoneNumber = $_POST['PhoneNumber'];
    $email = $_POST['email'];
    $Address = $_POST['Address'];
   $Cont->UpdateCotact($Avatar,$Name,$PhoneNumber,$email,$Address,$id);
  }
  
  

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">

    <title>update</title>


  </head>
  <body>
    
               <div class="container mt-5">
                            
                   <form action="" method="post" >
                    <div class="form-outline mb-2">
                    <label class="form-label"  for="form1Example13">Avatar</label>
                      <input type="file" name="Avatar" id="Avatar" value="<?php echo $infocontact['Avatar'];?>" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-2">
                    <label class="form-label"  for="form1Example13">Name</label>
                      <input type="text" name="Name" id="Name" value="<?php echo $infocontact['Name'];?>" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-2">
                    <label class="form-label"  for="form1Example13">PhoneNumber</label>
                      <input type="text" name="PhoneNumber" id="PhoneNumber" value="<?php echo $infocontact['PhoneNumber'];?>"  class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-2">
                    <label class="form-label"  for="form1Example13">email</label>
                      <input type="text" name="email" id="email" value="<?php echo $infocontact['email'];?>" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-2">
                    <label class="form-label"  for="form1Example13">Addres</label>
                      <input type="text" name="Address" id="Addres" value="<?php echo $infocontact['Address'];?>" class="form-control form-control-lg" />
                    </div>
                    
                     
                      <div class="modal-footer">
                        <input type="submit"   id="Edit" name="Edit" class="btn btn-primary "  value="Edit">
                      </div>
                  
                </form>
                </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="../../js/contactList.js"></script>
</body>
</html>