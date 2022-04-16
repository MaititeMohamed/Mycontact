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
                <a class="nav-link active" aria-current="page" href="../php/Home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/index.php">Log in</a>
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
                <a class="nav-link active " aria-current="page" href="">logout</a>
              </li>

          </div>
        </div>
    </nav>
    <!-- End  navbar -->
    <div class="container  mt-4 h-100">
  
    <!-- start modal -->
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Add New
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New contact </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                   <form action="">
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
                      <input type="text" name="Addres" id="AddresA" class="form-control form-control-lg" />
                    </div>
                    </form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary " id="Add" disabled>Add</button>
      </div>
    </div>
  </div>
</div>
 <!-- end  modal -->

      <div class="row ">
        <div class="mt-4 col-md-12 col-xl-4">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body ">
                <div class="text-center">
              <div class="mt-3 mb-4">
                <img
                  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                  class="rounded-circle img-fluid" style="width: 100px;"
                />
              </div>
              <h4 class="mb-2">Maitite Mohamed</h4>
              <p class="text-muted mb-4 ">Programmer </p>
            </div>
              <div class="d-block justify-content-start">
                <p>0615234567</p>
                <p>MaititeMohamed@gmaile.com</p>
                <p>Youssoufia</p>
              </div>
              <div class="d-flex justify-content-between">
              <button type="button" class="btn btn-primary btn-rounded btn-lg">
                Delete
              </button>
                          <!-- End modal --> 
                                                      
                               
                                    <!-- start modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                      Edit
                      </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel2"> edit contact </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                   <form action="">
                    <div class="form-outline mb-2">
                    <label class="form-label"  for="form1Example13">Avatar</label>
                      <input type="file" name="Avatar" id="Avatar" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-2">
                    <label class="form-label"  for="form1Example13">Name</label>
                      <input type="text" name="Name" id="Name" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-2">
                    <label class="form-label"  for="form1Example13">PhoneNumber</label>
                      <input type="text" name="PhoneNumber" id="PhoneNumber" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-2">
                    <label class="form-label"  for="form1Example13">email</label>
                      <input type="text" name="email" id="email" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-2">
                    <label class="form-label"  for="form1Example13">Addres</label>
                      <input type="text" name="Addres" id="Addres" class="form-control form-control-lg" />
                    </div>
                    </form>
      
                      </div>
                      <div class="modal-footer">
                        <button type="submit" id="Edit"  class="btn btn-primary" disabled>Edit</button>
                      </div>
                    </div>
                  </div>
                </div>
 <!-- end  modal -->
                          <!-- End modal --> 
                </div>
            </div>
          </div>
        </div>
         
        
          
           
         

      </div>

    </div> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="../js/contactList.js"></script>
</body>
</html>