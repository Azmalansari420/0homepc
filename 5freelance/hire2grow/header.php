<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hire 2 Grow </title>
<link rel="shortcut icon" href="images/logo.png">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">
</head>
<body>

<style>
  @media (min-width: 992px) {
    .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
        justify-content: center;
    }

    .navbar-expand-lg .navbar-nav {
        flex-direction: row;
        gap: 32px;
    }

}
.header-wrap .logo {
    padding-top: 5px;
    padding-bottom: 5px;
}

 .logo>a>img {
    height: 75px;
}

/* Mobile (0–768px) */
@media only screen and (max-width: 768px) {
     .logo>a>img {
    width: 100px;
}
}

</style>

<!--header start-->
<div class="header-wrap">
  <div class="container"> 
    <!--row start-->
    <div class="row"> 
      <!--col-lg-3 start-->
      <div class="col-lg-3 col-md-3 navbar-light">
        <div class="logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      </div>
      <!--col-lg-3 end--> 
      <!--col-lg-7 end-->
      <div class="col-lg-5 col-md-9"> 
        <!--Navegation start-->
        <div class="navigationwrape">
          <div class="navbar navbar-expand-lg navbar-default navbar-light" role="navigation">
            <div class="navbar-header"> </div>
            <div class="navbar-collapse collapse" id="navbarScroll">
              <ul class="nav navbar-nav">


                <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"> <a href="index.php" > Home</a></li>

                <li class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>"> <a href="about.php" > About Us</a></li>

                <li class="<?php echo ($current_page == 'job-list.php') ? 'active' : ''; ?>"> <a href="job-list.php" > Jobs</a></li>

                
               <!--  <li class="dropdown"> <a href="blog.html"> Blog <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li> <a href="blog-grid.html"> Blog Grid sidebar</a></li>
                    <li> <a href="blog.html"> Blog List sidebar</a></li>
                    <li> <a href="blog-grid-full-width.html"> Blog full width </a></li>
                    <li> <a href="blog-details.html"> Blog Details with sidebar </a></li>
                    <li> <a href="blog-details-full-width.html"> Blog Details </a></li>
                  </ul>
                </li> -->

                <li> <a href="contact.php"> Contact us </a></li>
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <!--Navegation start--> 
      </div>
      <!--col-lg-3 end--> 
      <!--col-lg-2 start-->
      <div class="col-lg-4 col-md-12">
        <div class="header-right">
          <!-- <div class="post-btn"><a href="post-job.html">Post a Job</a></div> -->
          <div class="user-wrap">
            <div class="login-btn"><a href="login.php">Login</a></div>
            <div class="register-btn"><a href="register.php">Register</a></div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!--col-lg-2 end--> 
    </div>
    <!--row end--> 
  </div>
</div>
<!--header start end--> 