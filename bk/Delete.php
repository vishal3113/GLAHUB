<?php
if(isset($_POST['id'])){
include_once "Database.php";
$id=$_POST['id'];
$sql = "DELETE FROM `registration` WHERE `SNo`='$id'";
$result=$conn->query($sql);
if(!$result){
    echo "Invaid Query".mysqli_connect_error();
}
else{
    // echo "Deleted";
    header("location: /CRUD/Admin.php");
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
    <form action="Delete.php" method="post">
        <div style="margin-left:250px; margin-top:10%;">
            <label for="ID">Enter Id Number To Delete a Record :</label>   <input type="Number" name="id" style="text-align:Center; width:500px; border-radius:5px;" placeholder="Enter ID Number to Delete a Record" ><br>
            <br>
            <br>
            <button style="margin-left:400px;" type="submit" name="Delete">Delete</button>
        </div>
    </form>
</body>
</html>