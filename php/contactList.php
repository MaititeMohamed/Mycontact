<?php 
session_start();
  
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

    <title>ContactList</title>


  </head>
  <body>
    <!-- Start navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">e
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Mycontact</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/login.php">Log in</a>
              </li>


              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/Signup.php">Sing up</a>
              </li>
               
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/Profile.php">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/contactList.php">contactList</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active " aria-current="page" href="index.php">logout</a>
              </li>

          </div>
        </div>
    </nav>
    <!-- End  navbar -->
    <div class="container  mt-4 h-100">
  
    <!-- start modal -->

    <div class="container  mt-4 h-100">
  
    <!-- Modal -->
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Add New
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New contact </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="./process/Proces.php" >

              <div class="form-outline mb-2">
              <label class="form-label"  for="form1Example13">Avatar</label>
                <input type="file" name="Avatar" id="AvatarA" class="form-control form-control-lg" />
              </div>
              <div class="form-outline mb-2">
              <label class="form-label"  for="form1Example13">Name</label>
                <input type="text" name="Name" id="NameA" class="form-control form-control-lg" />
              </div>
              <div class="form-outline mb-2">
              <label class="form-label"  for="form1Example13">PhoneNumber</label>
                <input type="text" name="PhoneNumber" id="PhoneNumberA" class="form-control form-control-lg" />
              </div>
              <div class="form-outline mb-2">
              <label class="form-label"  for="form1Example13">email</label>
                <input type="text" name="email" id="emailA" class="form-control form-control-lg" />
              </div>
              <div class="form-outline mb-2">
              <label class="form-label"  for="form1Example13">Addres</label>
                <input type="text" name="Address" id="AddresA" class="form-control form-control-lg" />
              </div>
              <div class="modal-footer">
                <input type="submit" name="add" class="btn btn-primary " id="Add"  value="Add">
              </div>
              </form>
      </div>
     
    </div>
  </div>
</div>

 <!-- end  modal -->

 <!-- end  modal -->
 <div class="row ">
 <?php 
 include "./process/Contact.php";

    $data=new Contact();
   $contactlist=$data->ShowData();
   
  //echo '<pre>'; 
  //var_dump($contactlist);
  //echo '</pre>';
  
  foreach($contactlist as $contact):
    $id=$contact['id'];
 ?>
     
        <div class="mt-4 col-md-12 col-xl-4">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body ">
                <div class="text-center">
              <div class="mt-3 mb-4">
                <img
                  src="../img/test.png"
                  class="rounded-circle img-fluid" style="width: 100px;"
                />
              </div>
              <h4 class="mb-2"><?php echo $contact['Name']; ?></h4>
              <p class="text-muted mb-4 "> </p>
            </div>
           
              <div class="d-block justify-content-start">
                <p><?php echo $contact['PhoneNumber']; ?></p>
                <p><?php echo $contact['email']; ?></p>
                <p><?php echo $contact['Address']; ?></p>
                <!--<p><?php echo $contact['id']; ?></p> -->
              </div>
              <div class="d-flex justify-content-between">
              
               
             

      <a class="btn btn-primary btn-rounded btn-lg" href="./process/DeleteContact.php?Deleteid=<?php echo $id;?>"> Delete</a>
      <a class="btn btn-primary btn-rounded btn-lg" href="./process/EditContact.php?updateid=<?php echo $id;?>"> Edit</a>
             

                 
                </div>
            </div>
          </div>
        </div>
     
<?php endforeach; ?>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="../js/contactList.js"></script>
</body>
</html>