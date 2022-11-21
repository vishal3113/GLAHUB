<?php
session_start();
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'partial\_dbconnect.php';
    $username = $_POST["username"];     
    $password = $_POST["password"];
    
    $exists=false;  
  
        $sql = "Select * from `users`.`users` where username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        $num=mysqli_num_rows($result);
        if ($num==1)
        {
            $login=true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: welcome.php");
        }
        else
        {
            echo "Invalid Credentials";
            $showError = "Invalid Credentials";
        }
    

}
    
 ?>
 <!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">


<head>
	<!-- Basic need -->
	<title>Open Pediatrics</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="../../../css/plugins.css">
	<link rel="stylesheet" href="../../../css/style.css">
    <style>
        body{
            background-image:url('https://images.pexels.com/photos/3648850/pexels-photo-3648850.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
        }
        .login-parent{
            
        }
        section{
            text-align:center;
            margin-top:180px;
            height:22   0px;
            width:400px;
            border-radius:10px;
            border:solid white 1px;
            padding:20px;
            margin-left:490px;
            background-color:black;
        }
        input{
            padding:5px;
            border-radius:5px;
            width:250px;

        }
        label{
            color:white;
        }
        button{
            padding:5px;
            border-radius:5px;
            width:90px;

        }
        button:hover{
            background-color:black;
            color:white;
            font-size:15px;
            border:solid white 1px;
            padding:5px;
        }
        input:hover{
            background-color:black;
            color:white;
            border:solid white 1px;
        }
        
    </style>
</head>
<body>
    <span > <a href="../../index.html" style="color:white;">Home </a><span style="color:white;"> > Login</span></span>
    <section>
            <h1> <span style="color:white; font-weight:20px;">Login &nbsp;</span> <span style="color: red;"> GLAHUB</span></h1>
            <br>
            
            <form method="post" action="login.php">
                <div class="row">
                    <label for="username">
                        Username :
                        <input type="text" name="username" id="username" placeholder="Username"  required="required" />
                    </label>
                </div>
                <br>
                <div class="row">
                    <label for="password">
                        Password :
                        <input type="password" name="password" id="password" placeholder="* * * * * *"  required="required" />
                    </label>
                </div>
                <br>
                <br>
            <div class="row">
                <button type="submit">Login</button>
                <br>
                <br>
            </div>
            </form>
    
    </section>
 </body>
 </html>