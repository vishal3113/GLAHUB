<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    // echo "success";
 }
else{
    // echo "Database Error";
    // die("Error". mysqli_connect_error());
    // echo "<script>alert("Data Saved");</script>;
    // header("location: ../../index.html");
}

?>  
