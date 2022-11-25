<?php
	
    session_start();
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true)
    {
        header("location: /GLAHUB/GLAHUB-main/bk/lg/login.php");
        exit;
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
	<title>GLA HUB || HOME</title>
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
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="index.html"><img class="logo"  style="width:200px;" src="./images/logo1.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							Videos<i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
										
								<li><a href="Motivational.php">Motivational Videos</a></li>
								<li><a href="Educational.php">Educational Videos</a></li>
								<li class="it-last"><a href="Entertainment.php">Entertainment Videos</a></li>
							</ul>
						</li>
						<li class="dropdown first">
						<a class="btn btn-default dropdown-toggle lv1" href="Educational.php" >
							Study Content
							</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" href="About.html" >
							About Us
							</a>
							<!-- <ul class="dropdown-menu level1">
								<li><a href="bloglist.html">blog List</a></li>
								<li><a href="bloggrid.html">blog Grid</a></li>
								<li class="it-last"><a href="blogdetail.html">blog Detail</a></li>
							</ul>
						</li> -->
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" href="help_login.html">
							Contact
							</a>
							
						</li>
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						              
						<li><a href="help_login.html">Help</a></li>
						<li class="btn"><a href="Motivational.php">Explore Videos</a></li> &nbsp;&nbsp;
						<li class="btn"><a href="userprofile.php" style="background-color:green;">My Profile</a></li> &nbsp;&nbsp;
						<li class="btn"><a href="bk/lg/logout.php">Log Out</a></li>
					</ul>
				</div>
			<!-- /.navbar-collapse -->
			
			
	    </nav>
		<div>
				<h1 style="text-align:center;">W e l c o m e &nbsp;&nbsp; T o  &nbsp;&nbsp; G L A H U B &nbsp;&nbsp;  U s e r  &nbsp;&nbsp; D a s h b o a r d  </h1>
			</div>
	</div>
</header>
<!-- END | Header -->


<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">

		<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Profile</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="user-information">
					<div class="user-img">
						<a href="#"><img src="images/uploads/user-img.png" style="border-radius:100%; width:100px;" alt=""><br></a>
						<a href="#" class="redbtn"><?php echo $_SESSION['username']; ?></a>
					</div>
					<div class="user-fav">
						<p>Account Details</p>
						<ul>
							<li  class="active"><a href="userprofile.php">Profile</a></li>
					</div>
					<div class="user-fav">
						<p>Others</p>
						<ul>
							<li><a href="#">Change password</a></li>
							<li><a href="bk/lg/logout.php">Log out</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="col-md-9 col-sm-12 col-xs-12">
			<h1 style="font-size:28px; margin:40px; color:white;">Hy <?php echo $_SESSION['username']; echo ", Welcome to GLAHUB :)"; ?></span></h1> 
				<div class="form-style-1 user-pro" action="#">
				
					<form action="userprofile.php" Method="post" class="user">
						<h4>P r o f i l e &nbsp;&nbsp; d e t a i l s</h4>
						<div class="row">
							<?php
							include 'bk/lg/partial/_dbconnect.php';
							  $currentUser = $_SESSION['username'];
							  $sql = "SELECT * FROM users WHERE username ='$currentUser'";
	  
							  $gotResuslts = mysqli_query($conn,$sql);
	  						if($gotResuslts){
								if(mysqli_num_rows($gotResuslts)>0){
									while($row=mysqli_fetch_array($gotResuslts)){
										// print_r($row['username']);
									?>
							<div class="col-md-6 form-it">
								<label>Username</label>
								<input type="text" style="background-color:black;" name="username" disabled placeholder="<?php echo $_SESSION['username'] ?>">
							</div>
							<div class="col-md-6 form-it">
								<label>Email Address</label>
								<input style="background-color:black;" type="text" name="Email" disabled placeholder="<?php  echo $row['Email'];  ?>">
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Country</label>
								<select name="Country" >
								  <option  value="united"> <?php  echo  $row['Country']?></option>
								  <option value="saab" disabled >Others</option>
								</select>
							</div>
							<div class="col-md-6 form-it">
								<label>State</label>
								<select name="State" >
								  <option value="united"> <?php echo $row['State']; ?></option>
								  <option value="saab" disabled	>Others</option>
								</select>
							</div>
						</div>
						
						<?php
					}
				}
			}

	?>

<br>
<!-- Update User Details -->
<hr>
<br>
			<form action="userprofile.php" Method="post" class="user">
						<h4>U p d a t e &nbsp;&nbsp; P r o f i l e &nbsp;&nbsp; D e t a i l s </h4>
						<div class="row">
							<?php
								// session_start();
								if(isset($_POST['username'])){
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
								$loggeduser=$_SESSION['username'];

								$UserName=$_POST['username'];
								$password=$_POST['password'];
								$Email=$_POST['Email'];
								$Country=$_POST['Country'];
								$State=$_POST['State'];

								$update_q="UPDATE users SET username='$UserName' ,Email='$Email',Country='$Country',password='$password',State='$State' WHERE username='$loggeduser'";
								$results = mysqli_query($conn,$update_q);
								if($results){
									echo "success";
								}

							}
                        // header('Location:../pages/userProfile.php?success=userUpdated');
                    // exit;	
							?>
							<div class="col-md-6 form-it">
								<label>Username</label>
								<input type="text" name="username" placeholder="">
							</div>
							<div class="col-md-6 form-it">
								<label>Email Address</label>
								<input type="text" name="Email" >
							</div>
							<div class="col-md-6 form-it">
								<label>Change Password</label>
								<input type="password" name="password">
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Country</label>
								<select name="Country">
								<option value="united"> Select</option>
								  <option  value="India">India</option>
								  <option value="saab" >Others</option>
								</select>
							</div>
							<div class="col-md-6 form-it">
								<label>State</label>
								<select name="State" >
								  <option value="united"> Select</option>
								  <option value="India"> india</option>
								  <option value="saab">Others</option>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-2">
								<input class="submit" type="submit" value="save">
							</div>
						</div>	
						
					</form>
					<br>
					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- footer section-->
<footer class="ht-footer">
	<div class="container">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="index"><img width="330px"class="logo" src="images/logo1.png" alt=""></a>
			</div>
			<div class="flex-child-ft item2">
				<h4>Quick Links</h4>
				<ul>
					<li><a href="About.html">About</a></li> 
					<li><a href="help.html">Contact Us</a></li>
					<li><a href="Motivational.php">Motivational</li>
					<li><a href="Entertainment.php">Entertainment</a></li>
					<li><a href="Educational.php">Educational</a></li>
				</ul>
			</div>
			
			
		</div>
	</div>
	
</footer>
<!-- end of footer section-->

			<!-- <div class="flex-child-ft item5">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				<form action="#">
					<input type="text" placeholder="Enter your email...">
				</form>
				<a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
	</div> -->
	<!-- <div class="ft-copyright">
		<div class="ft-left">
			<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
		</div>
		<div class="backtotop">
			<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div> -->

<!-- end of footer section-->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>'
</body>

<!-- userprofile14:04-->
</html>