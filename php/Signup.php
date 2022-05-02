<?php
include "./process/Proces.php";
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

    <title>Signup</title>
    
  </head>
  <body>
     <!-- Start navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
              
              
          </div>
        </div>
    </nav>
    <!-- End  navbar -->
      <main>
      
        <section class="vh-100">
            <div class="container py-5 h-100">
              <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                  <img src="../img/Signup.svg"
                    class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                   <!-- error acount exist  -->
                  <?php
                  echo @$_SESSION['error'];
                    $_SESSION['error']='';
                    echo $_SESSION['error'];
                  ?>
                    <h1 >Welcome</h1>
                  <form method="post" action="./process/Proces.php">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example14">UserName</label>
                      <input type="text" id="UserNameS" name="UserName" class="form-control form-control-lg" />
                    </div>
          
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example24">Password</label>
                      <input type="password" id="PasswordS" name="Password" class="form-control form-control-lg" />
                    </div>
                    
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example24">ConfermPassword</label>
                        <input type="password" id="ConfermPassword" class="form-control form-control-lg" />
                      </div>
                   
                    <!-- Submit button -->
                    <button type="submit" id="Signup" name="Signup" class="btn btn-primary btn-lg btn-block container-fluid" disabled>Signup</button>
          
                    <div class="d-flex justify-content-center mt-3">
                        <p class="text-secondary">if you have acount?<span> <a href="login.php">login</a> </span> </p>

                    </div>
          
          
                  </form>
                </div>
              </div>
            </div>
          </section>









      </main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="../js/Signup.js"></script>
    </body>
</html>