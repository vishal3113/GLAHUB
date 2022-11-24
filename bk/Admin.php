




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" conntent="IE=edge">
    <meta name="viewport" conntent="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
  <br>
    <h1 style="text-align:center;">ADMIN PANEL</h1>
    <h5  style="text-align:center;">REGISTRATION SUBMISSIONS</h5><br>
    <hr>
    <br>
    
    <br>
    <table class="table">
    <tr>
      <th>S No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Country</th>
      <th>State</th>
      <th>Operation</th>
    </tr>
    <?php
  

  // Database connnection
  // $conn=mysqli_connect($server,$username,$password,$database);
  
  

    // Database Query 
   
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "users";
  
  $conn = mysqli_connect($server, $username, $password, $database);
  if (!$conn){
     // echo "Database Error";
      // die("Error". mysqli_connect_error());
      
   }

      
  
    $sql="SELECT * FROM users";
    $result=$conn->query($sql);  
    if(!$result){
      die ("Invalid Query" . $conn->error);
    }
    
    while($row=$result->fetch_assoc()){

    echo "
    <tr>
      <td>".$row["S no"]."</td>
      <td>".$row["username"]."</td>
      <td>".$row["Email"]."</td>
      <td>".$row["password"]."</td>
      <td>".$row["Country"]."</td>
      <td>".$row["State"]."</td>
      
      
      <td>
        <a class='btn btn-primary btn-sm' href='update.php'>Update</a>
        <a class='btn btn-danger btn-sm' href='Delete.php'>Delete</a>
      </td>
    </tr>
    ";
}



?>

</table>
   
</body>
</html>