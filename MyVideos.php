<?php

    session_start();
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true)
    {
        header("location: /GLAHUB/GLAHUB-main/bk/lg/login.php");
        exit;
    }
	

// 	if(isset($_POST['Email'])){

// 		$us=$_SESSION['username'];
// 	include 'bk/lg/partial/_dbconnect.php';
// 	// Fetching
	
// 	$email=$_POST["Email"];
// 	$Country=$_POST["Country"];
// 	$state=$_POST["State"];
// 	$sl= "UPDATE users.users SET Email='$email',Country='$Country' ,State='$state' WHERE username='$us'";
// 	$result->$con->query($sl);
// }	
// if(!$sl){
// 	die("Error". mysqli_connect_error());
// }
// else{
// 	echo "success";
// }

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
	<title>My Videos || <?php echo $_SESSION['username']; ?></title>
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
	<style>
		label{
			margin-left:34%;
			text-align:center;
			font-size:22px;
		}
		form{
			/* text-align:center; */
			/* margin-left:40%; */
			color:red;
			font-weight:bolder;
			/* font-size: 22px; */
			
		}
		#chn{
			border-radius:5px;
			width:270px;
			margin-left:40%;
		}
		#btn_C{
			width:100px;
			text-align:center;
			margin-left:46%;
			background-color:red;
			color:white;
			border-radius:5px;
			border:solid white 1px;
		}
		#btn_C:hover{
			width:100px;
			text-align:center;
			margin-left:10%;
			background-color:black;
			color:white;
			border-radius:5px;
			border:solid white 1px;
		}
		body{
			background-color:black;
		}
	</style>
</head>
<body>

<!--preloading-->
<!-- <div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div> -->
<!--end of preloading-->


<!-- BEGIN | Header -->


        
	
<header class="ht-header" style="background-color:black;" >
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
				    <a href="index.html"><img class="logo"  style="width:70px;" src="./images/logo1.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<!-- <li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown">
							Home <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="index-2.html">Home 01</a></li>
								<li><a href="homev2.html">Home 02</a></li>
								<li><a href="homev3.html">Home 03</a></li>
							</ul>
						</li> -->
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
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							celebrities <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="celebritygrid01.html">Motivatinal celebrities</a></li>
								<li><a href="celebritygrid02.html">Educational celebrities</a></li>
								<li><a href="celebritylist.html">Entertainment celebrities</a></li>
								<!-- <li class="it-last"><a href="celebritysingle.html">celebrity single</a></li> -->
							</ul>
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
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							Contact
							</a>
							<!-- <ul class="dropdown-menu level1">
								<li><a href="userfavoritegrid.html">user favorite grid</a></li>
								<li><a href="userfavoritelist.html">user favorite list</a></li>
								<li><a href="userprofile.html">user profile</a></li>
								<li class="it-last"><a href="userrate.html">user rate</a></li>
							</ul> -->
						</li>
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<!-- <li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							pages <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="landing.html">Landing</a></li>
								<li><a href="404.html">404 Page</a></li>
								<li class="it-last"><a href="comingsoon.html">Coming soon</a></li>
							</ul>
						</li>                 -->
						<li><a href="#">Help</a></li>
						<li class="btn"><a href="#">My Videos</a></li> &nbsp;&nbsp;
						<li class="btn"><a href="userprofile.php" style="background-color:green;">My Profile</a></li> &nbsp;&nbsp;
						<li class="btn"><a href="bk/lg/logout.php">Log Out</a></li>
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
	    
	    <!-- top search form -->
	    <div class="top-search">
	    	<select>
				<option value="united">TV show</option>
				<option value="saab">Others</option>
			</select>
			<input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
	    </div>
	</div>
</header>
<!-- END | Header -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div>
	<div>
		<form action="" id="form">
		 	<label for="">	C r e a t e &nbsp;&nbsp; Y o u r &nbsp;&nbsp;  C h a n n e l &nbsp;&nbsp;  N o w  </label>
			&nbsp; 
			&nbsp; 
			&nbsp; 
			
			<br>
			&nbsp; 
			<input type="text" id="chn" placeholder="Enter your Channel Name Here">
			
			<br>
			<button type="submit" id="btn_C" value="save" >Create</button>
		</form>
	</div>
</div>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<!-- footer section-->
<footer class="ht-footer">
	<div class="container">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="index-2.html"><img class="logo" src="images/logo1.png" alt=""></a>
				 <p>5th Avenue st, manhattan<br>
				New York, NY 10001</p>
				<p>Call us: <a href="#">(+01) 202 342 6789</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="#">About</a></li> 
					<li><a href="#">Blockbuster</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Help Center</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>Legal</h4>
				<ul>
					<li><a href="#">Terms of Use</a></li> 
					<li><a href="#">Privacy Policy</a></li>	
					<li><a href="#">Security</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Account</h4>
				<ul>
					<li><a href="#">My Account</a></li> 
					<li><a href="#">Watchlist</a></li>	
					<li><a href="#">Collections</a></li>
					<li><a href="#">User Guide</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				<form action="#">
					<input type="text" placeholder="Enter your email...">
				</form>
				<a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
	</div>
	<div class="ft-copyright">
		<div class="ft-left">
			<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
		</div>
		<div class="backtotop">
			<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- end of footer section-->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>'
</body>

<!-- userprofile14:04-->
</html>