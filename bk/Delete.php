<?php

session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true)
{
    header("location: Admin_login.php");
    exit;
}

if(isset($_POST['Sno'])){
include 'lg/partial/_dbconnect.php';
$id=$_POST['Sno'];
$sql = "DELETE FROM users WHERE Sno='$id'";
$result=$conn->query($sql);
if(!$result){
    echo "Invaid Query".mysqli_connect_error();
}
else{
    // echo "Deleted";
    header("location: Admin.php");
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete a Record</title>
</head>
<body>
    <form action="#" method="post">
        <div style="margin-left:250px; margin-top:10%;">
            <label for="ID">Enter Id Number To Delete a Record :</label>   <input type="Number" name="Sno" style="text-align:Center; width:500px; border-radius:5px;" placeholder="Enter ID Number to Delete a Record" ><br>
            <br>
            <br>
            <button style="margin-left:400px;" type="submit" name="Delete">Delete</button>
        </div>
    </form>
</body>
</html>