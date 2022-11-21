<?php
session_start();
$shoxwAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'partial/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["confirmpassword"];
    $exists=false;
    // Checking whether the username Exists or Not
    // by this Query
    $existsSql="Select * From `users` Where username ='$username'";
    $result=mysqli_query($conn,$existsSql);
    $numExistsrow=mysqli_num_rows($result);
    if($numExistsrow>0)
    {
        $showError="Username Already Exists";
    }
    else
    {
        if(($password == $cpassword) )
        {
            // $hash=password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users`.`users` ( `username`, `password`) VALUES ('$username', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result)
            {
                $showAlert = true;
            }
        }
        else
        {
            $showError = "Passwords do not match";
        }
    }
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SIGNUP || GITHUB</title>
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
            width:450px;
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
<span > <a href="../../index.html" style="color:white;">Home </a><span style="color:white;"> > Signup</span></span>
    <section>
    <h1> <span style="color:white; font-weight:20px;">SIGNUP &nbsp;</span> <span style="color: red;"> GLAHUB</span></h1>
    <br>
    <form method="post" action="signup.php">
            <div class="row">
                 <label for="username-2">
                    Username:
                    <input type="text" name="username" id="username-2" placeholder="Username"  required="required" />
                </label>
            </div>
            <br>
            <div class="row">
                <label for="password-2">
                    Password:
                    <input type="password" name="password" id="password-2" placeholder="password"  required="required" />
                </label>
            </div>
            <br>
             <div class="row">
                <span style="color:white; margin-right:55px;">
                    Confirm Password:
                    <input  type="password" name="confirmpassword" id="repassword-2" placeholder="re-type password" required="required" />
                </span>
            </div>
            <br>
           <div class="row">
             <button type="submit">sign up</button>
           </div>
        </form>
    </section>
</body>
</html>