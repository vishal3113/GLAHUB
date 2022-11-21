<?php
  // Bug Resolve Here
  // No Need Of the or condition here
  // ERROR OF THE GLOBAL VARIABLE HERE!!!!
  if(isset($_SESSION['loggedin']))
    {
        $loggedin=true;
    }
    else{
      $loggedin=false;
    }
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-size:25px; font-weigth:bolder;"; href="#">Vishal Developers
    <small style="color:white; font-size:7px; margin-top:40px; padding-left:0px; font-weight:bold;";>Login Panel</small></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/loginsystem/login.php">Home</a>
        </li>';
        if(!$loggedin)
        {
        echo '<li class="nav-item">
          <a class="nav-link" href="/loginsystem/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/loginsystem/signup.php">Sign Up</a>
        </li>';
        }
        if($loggedin)
        {
         echo '<li class="nav-item">
          <a class="nav-link" href="/loginsystem/logout.php">Log Out</a>
        </li>';
        }
echo '</ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>';

?>