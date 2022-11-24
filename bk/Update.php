<?php

session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true)
{
    header("location: Admin_login.php");
    exit;
}

if(isset($_POST['Email'])){
$server='localhost';
$username='root';
$password='';
$database='users';
$connect=mysqli_connect($server,$username,$password,$database);
if(!$connect){
  echo "DB Not Connected";
  die(mysqli_connect_error());
}
else{
  include 'lg/partial/_dbconnect.php';
  $name=$_POST["username"];
  $email=$_POST["Email"];
  $Country=$_POST["Country"];
  $State=$_POST["State"];
  $password=$_POST["password"];
  // echo "db connected";
  // Database Query
  
  do{
    
    $sql= "UPDATE users SET Email='$email', Country='$Country',State='$State',password='$password' WHERE username='$name'";
    $result=$connect->query($sql);

    if(!$result)
    {
        echo "Inavlid Query";
        break;
    }
    
    // $successMessage="Client Updated Correctly";
    echo '<script type="text/javascript"> alert("Data Updated !") </script>';
    header("location: Admin.php");
    
    exit;
  }while(true);
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
></script>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
    <div>
      <br>
      <br>
      <br>
      <h2 style="text-align:center;">Update By Entering the Name</h2>
    </div>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update</p>
      
                      <form class="mx-1 mx-md-4" action="update.php" method="post" >
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example1c" name="username" class="form-control" />
                            <label class="form-label" for="form3Example1c">Your Name</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="form3Example3c" name="Email" class="form-control" />
                            <label class="form-label" for="form3Example3c">Your Email</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4c" name="password" class="form-control" />
                            <label class="form-label" for="form3Example4c">Password</label>
                          </div>
                        </div>
                        
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example4c" name="Country" class="form-control" />
                            <label class="form-label" for="form3Example4c">Country</label>
                          </div>
                        </div>

                        
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example4c" name="State" class="form-control" />
                            <label class="form-label" for="form3Example4c">State</label>
                          </div>
                        </div>
        
                          <!-- <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <input type="password" id="form3Example4cd" class="form-control" />
                              <label class="form-label" for="form3Example4cd">Repeat your password</label>
                            </div>
                          </div> -->
        
                          <!-- <div class="form-check d-flex justify-content-center mb-5">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                            <label class="form-check-label" for="form2Example3">
                              I agree all statements in <a href="#!">Terms of service</a>
                            </label>
                          </div> -->
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit"  class="btn btn-primary btn-lg">Update</button>
                        </div>
                        
                      </form>
          
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
          
                            <!-- <img src="https://www.elegantthemes.com/blog/wp-content/uploads/2018/12/top11.png" -->
                            <!-- class="img-fluid" alt="Sample image" style="border-radius:20px;" > -->
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>