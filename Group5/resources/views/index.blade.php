<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Hire Lab&Co. - Job Portal</title>
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Hire Lab&Co." />
    <meta property="og:description" content="Online Job Management / Job Portal" />

	<link rel="shortcut icon" href="images/logo.png">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

	<link href="resources/css/style.css" rel="stylesheet">

	
</head>

  <style>
  
    .autofit2 {
	height:70px;
	width:400px;
    object-fit:cover; 
  }
  
      .autofit3 {
	height:80px;
	width:100px;
    object-fit:cover; 
  }
  
.nav-mini-wrapper ul li a{
   
    position: absolute;
    padding: auto;
    
    
}
.nav-mini-wrapper ul{
    list-style-type: none;
}


#login{
   right: 60px;
}
  </style>
<body class="home">


	<div id="introLoader" class="introLoading"></div>

	<div class="container-wrapper">

		<header id="header">

			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
							<a href="./"><img src="images/logo.png" alt="Logo" width="100" height = "100"/></a>
						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
						
							<li>
							
								<a href="./">Home</a>
								
							</li>
							
							<li>
								<a href="{{ route('applicant.index') }}">Job List</a>

							</li>


							<li>
								<a href="{{ route('aboutus') }}">About Us</a>
							</li>
							
							<li>
								<a href="{{ route('contact') }}">Contact</a>
							</li>

						</ul>
				
					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
						
							<li id = "login"><a href="/login-view">login</a></li>
							<li><a href= "/register-view">register</a></li>		

						</ul>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>
		</div>

			
		</header>

		<div class="main-wrapper">
		
			<div class="hero" style="background-image:url('images/hero-header/01.jpg');">
				<div class="container">

					<h1>connecting dreams, one click at a time</h1>
					<p>Your path to career success starts at Hire Lab&Co.</p>

				</div>
				
			</div>

			
			<div class="post-hero bg-light">
			
				<div class="container">

					<div class="process-item-wrapper mt-20">
							
						<div class="row">
						
							<div class="col-sm-4">
								
								<div class="process-item clearfix">
									
									<div class="icon">
										<i class="flaticon-line-icon-set-magnification-lens"></i>
									</div>
									
									<div class="content">
										<h5>01 / Search for jobs</h5>
									</div>
									
								</div>
								
							</div>
							
							<div class="col-sm-4">
							
								<div class="process-item clearfix">
									
									<div class="icon">
										<i class="flaticon-line-icon-set-pencil"></i>
									</div>
									
									<div class="content">
										<h5>02 / Apply a Job</h5>
									</div>
									
								</div>
								
							</div>
							
							<div class="col-sm-4">
								
								<div class="process-item clearfix">
									
									<div class="icon">
										<i class="flaticon-line-icon-set-calendar"></i>
									</div>
									
									<div class="content">
										<h5>03 / Start Working</h5>
									</div>
									
								</div>
								
							</div>
							
						</div>
					
					</div>
					
				</div>
			
			</div>
			
			<div class="bg-light pt-80 pb-80">
			
			
            <div class="container">

<div class="row">

    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    
        <div class="section-title">
        
            <br><h2 style="text-align: center;">Latest Jobs</h2>
            
        </div>
    
    </div>

</div>
<div class="career-subtitle">
    <p> Your Gateway to IT Excellence</p>
</div>
         <div class="column">
         <div class="career-wrapper">
            <div class="career-card">
                <img class="career-image"  src="images/interview.jpg"/>
                <div class="career-detail">
                    <h4>UI/UX Designer</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <hr class="divider">
                </div>
            </div>
         </div>
        </div>
        <div class="column">
         <div class="career-wrapper">
            <div class="career-card">
                <img class="career-image"  src="images/advice.jpg"/>
                <div class="career-detail">
                    <h4>Full-stack Developer</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <hr class="divider">
                </div>
            </div>
         </div>
    </div>
    <div class="column">
         <div class="career-wrapper">
            <div class="career-card">
                <img class="career-image"  src="images/boost.jpg"/>
                <div class="career-detail">
                    <h4>Quality Assurance</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <hr class="divider">
                </div>
            </div>
         </div>
    </div>
    <div class="column">
         <div class="career-wrapper">
            <div class="career-card">
                <img class="career-image"  src="images/switch.png"/>
                <div class="career-detail">
                    <h4>System Engineer</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <hr class="divider">
                </div>
            </div>
         </div>
    </div>
</div>
							</div>

							<div class="btn-holder">
								<button class="btn-more" type="submit"><a href="{{ route('applicant.index') }}">MORE</a></button>
							</div>	
					</div>
					
				</div>
			
			</div>
        <div class="index-desc">
            <img class="index-desc" width="1492px" height="900px" src="{{ URL::to('/images/index-content.png') }}">
        </div>
			
			<footer class="footer-wrapper">
			
				<div class="main-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-12 col-md-9">
							
								<div class="row">
								
									<div class="col-sm-6 col-md-4">
									
										<div class="footer-about-us">
											<h5 class="footer-title">About Hire Lab&Co.</h5>
											<p>Hire Lab&Co. is an online community that connects job seekers to employers.</p>
										
										</div>

									</div>
									
									<div class="col-sm-6 col-md-5 mt-30-xs">
										<h5 class="footer-title">Quick Links</h5>
										<ul class="footer-menu clearfix">
											<li><a href="./">Home</a></li>
											<li><a href="job-list.php">Job List</a></li>
											<li><a href="employers.php">Employers</a></li>
											<li><a href="employees.php">Employees</a></li>
											<li><a href="contact.php">Contact Us</a></li>
											<li><a href="#">Go to top</a></li>

										</ul>
									
									</div>

								</div>

							</div>
							
							<div class="col-sm-12 col-md-3 mt-30-sm">
							
								<h5 class="footer-title">Contact Us</h5>
								
								<p>Address : España Blvd, Sampaloc, Manila, 1000 Metro Manila</p>
								<p>Email : <a href="mailto:example@gmail.com">example@gmail.com</a></p>
								<p>Phone : <a href="tel:+639123456789">+63 9123456789</a></p>
								

							</div>

							
						</div>
						
					</div>
					
				</div>
				
				<div class="bottom-footer">
				
					<div class="container">
					
						<div class="row">
							<div class="col-sm-7 col-md-7">
								<ul class="bottom-footer-menu for-social">
									<li><a href="#"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
									<li><a href="#"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
									<li><a href="#"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="instagram"></i></a></li>
								</ul>
							</div>
						
						</div>

					</div>
					
				</div>
			
			</footer>
			
		</div>


	</div>

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>


<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/handlebars.min.js"></script>
<script type="text/javascript" src="js/jquery.countimator.js"></script>
<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/easy-ticker.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/customs.js"></script>


</body>
<style>
/**
 * Header
 */

 .navbar-default {
    background: transparent;
}

.navbar {
    border-bottom: 0;
    padding: 0;
    -webkit-transition: all 0.1s ease-in-out 0s;
    -moz-transition: all 0.1s ease-in-out 0s;
    -ms-transition: all 0.1s ease-in-out 0s;
    -o-transition: all 0.1s ease-in-out 0s;
    transition: all 0.1s ease-in-out 0s;
    min-height: 30px;
}

.navbar.navbar-default {
    margin: 0;
    padding: 20px 0;
    height: auto;
}

.logo-wrapper {
    min-height: 20px;
    float: left;
    margin: 0;
}

.logo-wrapper .logo {
    padding: 0;
    -webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -ms-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
}

.not-transparent-header .navbar-default {
    background: #051923;
}

.logo-wrapper,
.navbar-nav-wrapper,
.nav-mini-wrapper {
    float: left;
}

.logo-wrapper {
    width: 10%;
    margin-top: -25px;
}

.navbar-nav-wrapper {
    width: 70%;
}

.nav-mini-wrapper {
    width: 15%;
}


/* Main Menu Dropdown */

ul.nav-mini li {
    position: relative;
}

ul.nav-mini li:after {
    content: "/";
    color: #FFF;
    margin-left: 10px;
}

ul.nav-mini li:last-child:after {
    display: none;
}

ul.nav-mini li a {
    font-weight: 600;
}

ul.nav-mini.sign-in {
    margin-top: 1px;
}

ul.nav-mini.sign-in li:after {
    display: none;
}

ul.nav-mini.sign-in li a {
    border: 1px solid rgba(255, 255, 255, 0.8);
    line-height: 1;
    border-radius: 2px;
    font-weight: 600;
    padding: 3px 8px 4px;
    font-size: 12px;
    letter-spacing: 0.5px;
}

ul.nav-mini.sign-in li a:hover {
    color: #FFF;
    background: #2991A2;
    border-color: #2991A2;
}

.nav.navbar-nav {
    text-align: center;
    float: none;
}

.nav.navbar-nav li {
    position: relative;
    float: none;
    display: inline-block;
}

.nav.navbar-nav li a {
    color: #FFF;
    font-weight: 600;
}

.nav.navbar-nav > li > a {
    line-height: 36px;
    font-size: 16px;
    padding-top: 0;
    padding-bottom: 0;
    -webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -ms-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
    text-transform: lowercase;
    letter-spacing: 1px;
    padding-left: 14px;
    color: #FFF;
}

.nav.navbar-nav > li:last-child > a {
    padding-right: 0;
}

.nav.navbar-nav li ul {
    z-index: 9999;
    padding: 0;
    margin: 0;
    position: absolute;
    top: 36px;
    left: 0;
    width: 190px;
    display: none;
    background-color: #FFF;
    border: 1px solid #EEE;
    border-top: 2px solid #2991A2;
    -webkit-box-shadow: 0px 0px 12px -3px rgba(0, 0, 0, 0.4);
    -moz-box-shadow: 0px 0px 12px -3px rgba(0, 0, 0, 0.4);
    box-shadow: 0px 0px 12px -3px rgba(0, 0, 0, 0.4);
}


/*.nav.navbar-nav li:last-child ul, .nav.navbar-nav li:nth-last-child(2) ul  { left: auto; right:0; } */

.nav.navbar-nav li ul li a {
    border-bottom: 1px solid #E0E0E0;
    display: block;
    padding: 8px 15px;
    font-size: 13px;
    -webkit-transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -ms-transition: all 0.2s ease-in-out 0s;
    -o-transition: all 0.2s ease-in-out 0s;
    transition: all 0.2s ease-in-out 0s;
    color: #636363;
    text-transform: capitalize;
}

.nav.navbar-nav li > ul > li:last-child > a,
.navbar-nav li > ul > li > ul > li:last-child > a {
    border-bottom: 0;
}

.nav.navbar-nav li ul li:hover a {
    padding-left: 20px;
    padding-right: 10px;
}

.nav.navbar-nav li ul li ul {
    position: absolute;
    left: 188px;
    top: -2px;
}

.nav.navbar-nav li ul li:hover ul li a {
    padding-left: 15px;
    padding-right: 15px;
}

.nav.navbar-nav li ul li ul li:hover a {
    padding-left: 20px;
    padding-right: 10px;
}

.nav.navbar-nav li ul li {
    display: block;
    text-align: left;
}


/* Mega Menu */

.navbar-nav > li.mega-menu {
    position: inherit!important;
    left: 0;
}

.navbar-nav > li.mega-menu ul {
    left: 0%;
    width: 100%;
    top: 36px;
    padding-top: 30px;
    padding-bottom: 30px;
}

.navbar-nav > li.mega-menu:hover > a,
.navbar-nav > li.mega-menu > a:hover,
.navbar-nav > li.dropdown:hover > a,
.navbar-nav > li.dropdown > a:hover,
.navbar-nav > li.dropdown.active > a,
.navbar-nav > li.dropdown.active > a:hover,
.navbar-nav > li:hover > a,
.navbar-nav > li.active > a {
    color: rgba(255, 255, 255, 0.8) !important;
    background: transparent !important;
}

.mega-menu-inner {
    padding: 0 20px;
}


/* Arrow for Mega Menu */

.navbar-arrow > ul > li .arrow-indicator {
    margin-left: 7px;
    color: #CCC;
}

.navbar-arrow ul ul > li .arrow-indicator {
    position: absolute;
    top: 50%;
    right: 15px;
    margin-top: -8px;
    font-size: 16px;
    color: #CCC;
}

.megamenu-container .arrow-indicator {
    display: none !important;
}


/* Navbar Mini */

ul.nav-mini {
    float: right;
}

ul.nav-mini li {
    float: left;
    line-height: 36px;
    margin-left: 10px;
}

ul.nav-mini li a {
    color: #FFF;
    -webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -ms-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
    text-transform: lowercase;
    letter-spacing: 1px;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {
    .logo-wrapper {
        width: 50%;
    }
    .navbar-nav-wrapper {
        width: 0%;
    }
    .nav-mini-wrapper {
        width: 50%;
    }
    .navbar {
        margin: 0;
        padding: 0;
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none;
    }
    .navbar-brand {
        line-height: 30px;
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none;
    }
    .navbar-arrow > ul > li .arrow-indicator,
    .navbar-arrow ul ul > li .arrow-indicator {
        display: none !important;
    }
    ul.nav-mini {
        margin-right: 36px;
    }
}

@media (max-width: 767px) {
    .navbar-nav .open .dropdown-menu > li > a {
        line-height: 23px;
    }
}

@media (max-width: 479px) {
    ul.nav-mini.sign-in {
        margin-top: -2px;
    }
    ul.nav-mini.sign-in li a {
        padding: 1px 2px 2px;
        font-size: 10px;
        letter-spacing: 0.5px;
    }
}

@media (min-width: 768px) {
    .navbar-nav {
        margin: 0;
    }
}


/**
 * Sticky Header
 */

.navbar-sticky {
    background-color: rgba(0, 0, 0, 0.8);
    padding: 10px 0;
}

.navbar-sticky.navbar-default {
    padding: 0;
}

.navbar-sticky .navbar-nav > li > a {}

.navbar-sticky .navbar-nav > li > a:hover,
.navbar-sticky .navbar-nav > li > a:focus {
    color: #4D82B8;
    background-color: transparent
}

.navbar-sticky .navbar-nav > .active > a,
.navbar-sticky .navbar-nav > .active > a:hover,
.navbar-sticky .navbar-nav > .active > a:focus {
    color: #4D82B8;
    background-color: transparent
}

.navbar-sticky .navbar-nav > .disabled > a,
.navbar-sticky .navbar-nav > .disabled > a:hover,
.navbar-sticky .navbar-nav > .disabled > a:focus {
    color: #444444;
    background-color: transparent
}

.navbar-sticky .navbar-nav > li > ul {
    top: 48px;
}

.navbar-sticky .navbar-nav > li.mega-menu ul {
    top: 50px;
}

.navbar-sticky .logo-wrapper .logo {}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {
    .navbar-fixed-top {
        position: absolute !important;
        top: 0;
        left: 0;
        right: 0;
        clear: both;
    }
}

@media (max-width: 767px) {}

@media (max-width: 479px) {}


/**
 * Hero
 */

.hero {
    position: relative;
    padding: 170px 0 140px;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.hero::before {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.2);
    content: "";
}

.hero.stellar-parallax-bg {
    background-position: bottom center;
}

.hero h1 {
    color: #FFF;
    font-weight: 400;
    text-transform: capitalize;
    text-align: center;
    font-size: 35px;
    line-height: 1.2;
}

.hero p {
    color: #FFF;
    text-align: center;
    font-size: 20px;
    margin: 44px 0 65px;
    line-height: 1.2;
}

.hero .form-group {
    width: 640px;
    margin: 0 auto;
    position: relative;
}

.hero .form-group .btn {
    background: none;
    color: #FFF;
    position: absolute;
    top: 1px;
    right: 5px;
    font-size: 20px;
}

.hero .form-group .btn:hover {
    color: #00B140;
}

.hero .form-group .form-control {
    background: none;
    color: #FFF;
    height: 50px;
    border-width: 2px;
    border-radius: 50px;
    padding-left: 25px;
    padding-right: 60px;
    font-size: 16px;
}

.hero .form-group .form-control::-moz-placeholder {
    color: rgba(255, 255, 255, 0.9);
}

.hero .form-group .form-control:-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.9);
}

.hero .form-group .form-control::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.9);
}

.hero.alt-pb {
    padding-bottom: 170px;
}

@media only screen and (max-width: 1199px) {
    .hero {
        background-size: auto;
    }
}

@media only screen and (max-width: 991px) {
    .hero h1 {
        font-size: 48px;
    }
}

@media only screen and (max-width: 767px) {
    .hero {
        padding: 92px 0 70px;
    }
    .hero .form-group {
        width: 400px;
    }
    .hero h1 {
        font-size: 40px;
    }
    .hero p {
        font-size: 21px;
        margin: 24px 0 35px;
        line-height: 1.4;
    }
}

@media (max-width: 479px) {
    .hero .form-group {
        width: 280px;
    }
    .hero {
        padding: 144px 0 122px;
    }
    .hero h1 {
        font-size: 34px;
    }
    .hero p {
        font-size: 18px;
    }
}


/**
 * Search Form
 */

.main-search-form-wrapper {
    z-index: 5;
    width: 55%;
    margin: 0 auto;
    position: relative;
    border: 2px solid rgba(255, 255, 255, 0.9);
    border-radius: 50px;
    padding: 0 20px;
}

.main-search-form-wrapper .form-control {
    background: none;
    color: #FFF;
    border: 0;
    border-radius: 0;
    padding: 12px 0;
    height: 80px;
}

.main-search-form-wrapper form .form-holder .col-xss-10 input {
    background: none;
    border: none;
    outline: none;
    width: 115%;
}

.main-search-form-wrapper .row > div:last-child .form-control {
    padding-right: 25px;
    border-left: 1px solid rgba(255, 255, 255, 0.7);
    padding-left: 20px;
}

.main-search-form-wrapper .form-control::-moz-placeholder {
    color: rgba(255, 255, 255, 0.8);
}

.main-search-form-wrapper .form-control:-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.8);
}

.main-search-form-wrapper .form-control::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.8);
}

.main-search-form-wrapper .form-holder {
    margin-right: 10px;
}

.btn-holder {
    display: flex;
    justify-content: center;
  }

  .btn-search {
    font-weight: bold;
    background-color: #00A6FB;
    color: #003554;
    border: none;
    border-radius: 20px;
    width: 100px;
    height: 40px;
    margin-top: 2%;
    cursor: pointer;
  }

  .btn-search:hover{
    background-color: #051923;
    color: #00A6FB;
    transition: 0.5s ease;
  }

  .btn-more {
    font-weight: bold;
    background: transparent;
    border: 2px solid #003554; /* Set border width and color */
    border-radius: 3px;
    color: #003554;
    width: 100px;
    height: 40px;
    margin-top: 5%;
    margin-bottom: 50px;
    cursor: pointer;
  }
  
  .btn-more:hover {
    color: #00A6FB;
    transition: 0.5s ease;
  }


.main-search-wrapper {
    width: 100%;
    z-index: 9;
}

.main-search-wrapper .inner {
    background: rgba(0, 0, 0, 0.4);
    padding: 30px;
    margin-top: 30px;
}

.main-search-wrapper .form-control {
    border-color: #FFF;
}

.main-search-wrapper label {
    text-transform: uppercase;
    color: #FFF;
    font-weight: 400;
    font-family: 'Lato', sans-serif;
    margin: 0 0 8px;
    text-align: left !important;
}

.main-search-wrapper .btn .icon {
    font-size: 12px;
    padding-top: 10px;
}

.second-search-result-wrapper {
    background: #33B6CB;
    padding-top: 30px;
    padding-bottom: 20px;
}

.second-search-result-inner {
    position: relative;
    padding-left: 220px;
}

.second-search-result-inner .labeling {
    position: absolute;
    top: 9px;
    left: 0;
    color: #FFF;
    text-transform: uppercase;
    font-weight: 400;
    line-height: 1;
    font-family: 'Montserrat', sans-serif;
    font-size: 25px;
}

.second-search-result-inner .form-control {}

.second-search-result-inner .btn {
    font-size: 14px;
    line-height: 1.42857143;
    padding-top: 10px;
    padding-bottom: 10px;
    background: #505F6B;
    color: #FFF;
}

ul.quick-search-keyword {
    margin-left: 220px;
}

ul.quick-search-keyword li {
    display: inline-block;
    color: #FFF;
    font-weight: 600;
    margin-right: 20px;
    line-height: 1.2;
}

ul.quick-search-keyword li a {
    color: rgba(255, 255, 255, 0.9);
    font-weight: 400;
    display: block;
    position: relative;
    padding-right: 20px;
}

ul.quick-search-keyword li a:after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 1px;
    height: 16px;
    background: rgba(255, 255, 255, 0.6);
}

ul.quick-search-keyword li a:hover {
    color: rgba(255, 255, 255, 1);
}

ul.quick-search-keyword li:last-child {
    margin-right: 0;
}

ul.quick-search-keyword li:last-child a {
    padding-right: 0;
}

ul.quick-search-keyword li:last-child a:after {
    display: none;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {
    .main-search-form-wrapper {
        width: 80%;
    }
    ul.quick-search-keyword {
        margin-top: 10px;
    }
}

@media only screen and (max-width: 767px) {
    .main-search-form-wrapper {
        width: 95%;
    }
    .second-search-result-inner {
        padding-left: 0;
    }
    .second-search-result-inner .labeling {
        position: relative;
        top: 0;
        padding-bottom: 10px;
        display: block;
    }
    ul.quick-search-keyword {
        margin-left: 0;
    }
}

@media (max-width: 479px) {
    .main-search-form-wrapper {
        width: 100%;
    }
}


/**
 * Featured
 */

.featured-icon-png {
    text-align: center;
    border: 1px solid #DDDDDD;
    padding: 40px 30px 30px;
    border-radius: 5px;
}

.featured-icon-png img {
    display: inline;
}

.featured-icon-png h5 {
    font-size: 20px;
    margin: 20px 0 17px;
}

.featured-icon-png p {
    font-size: 15px;
    line-height: 27px;
}

.featured-icon-png a {
    border-radius: 3px;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
    text-transform: uppercase;
    font-size: 11px;
    letter-spacing: 2px;
    padding: 12px 15px;
    border: 2px solid #33B6CB;
    font-weight: 600;
    line-height: 1;
    display: inline-block;
    margin: 18px 0 8px;
}

.featured-icon-png a:hover {
    border: 2px solid #2991A2;
}

.featured-bg {
    position: relative;
    padding: 80px 0 50px;
    background-position: bottom center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
}

.featured-bg::before {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.2);
    content: "";
}

.featured-bg.stellar-parallax-bg {
    background-position: bottom center;
}

.featured-bg h5 {
    color: #FFF;
    margin: 0 0 50px;
    font-size: 34px;
}

.featured-bg p {
    color: #FFF;
    font-size: 16px;
    line-height: 30px;
    padding-top: 15px;
}

.featured-bg p a {
    color: #FFF;
    border: 2px solid #FFF;
    padding: 7px 20px;
    font-family: 'Open Sans', 'rsu_textbold', sans-serif;
    font-weight: 700;
}

.featured-bg p a:hover {
    color: #11C4F7;
    border-color: #11C4F7;
}

.featured-icon-item {
    margin: 50px 15px 0;
}

.featured-icon-item .icon {
    font-size: 54px;
    color: #00AFF1;
    margin: 0 0 25px;
    width: 90px;
    height: 90px;
    line-height: 95px;
    text-align: center;
    border: 2px solid #00AFF1;
    border-radius: 50%;
}

.featured-icon-item h4 {
    text-transform: uppercase;
    font-weight: 300;
    line-height: 1.2;
    margin: 0 0 20px;
}

.featured-icon-01 {
    text-align: center;
    margin: 15px 0;
}

.featured-icon-01 .icon {
    font-size: 60px;
    margin: 0 0 25px;
    line-height: 60px;
}

.featured-icon-01 h5 {
    line-height: 1.2;
    margin: 20px 0 15px;
}

.col-sm-6 .featured-icon-01,
.col-md-6 .featured-icon-01 {
    padding: 0 95px;
    margin: 25px 0 0;
}

.featured-icon-02 {
    text-align: center;
    margin: 15px 0;
}

.featured-icon-02 .icon {
    color: #20B3E8;
    font-size: 32px;
    background: #20B3E8;
    width: 80px;
    height: 80px;
    margin: 0 auto;
    padding: 10px;
    border-radius: 2px;
}

.featured-icon-02 .icon > div {
    background: #FFF;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    line-height: 68px;
}

.featured-icon-02 h5 {
    line-height: 1.2;
    margin: 20px 0 15px;
}

.featured-icon-02.with-border {
    border: 2px solid #20B3E8;
    padding: 30px 20px;
}

.featured-icon-03 {
    text-align: center;
    margin: 15px 0;
    border: 2px solid #E5E5E5;
    padding: 30px 20px;
}

.featured-icon-03 .icon {
    color: #20B3E8;
    font-size: 32px;
    border-bottom: 2px dashed #E5E5E5;
    padding-bottom: 25px;
}

.featured-icon-03 h5 {
    line-height: 1.2;
    margin: 20px 0 15px;
}

.featured-icon-03 .content a {
    display: inline-block;
    width: 20px;
    height: 20px;
    padding-left: 1px;
    border-radius: 50%;
    line-height: 18px;
    border: 1px solid #20B3E8;
}

.featured-icon-03 .content a:hover {
    background: #20B3E8;
    color: #FFF;
}

.featured-icon-04 {
    margin: 15px 0;
}

.featured-icon-04 .icon {
    color: #20B3E8;
    font-size: 32px;
    border-bottom: 2px solid #E5E5E5;
    padding-bottom: 25px;
}

.featured-icon-04 h5 {
    line-height: 1.2;
    margin: 20px 0 15px;
}

.featured-icon-04 .content a {
    display: inline-block;
    text-align: center;
    width: 20px;
    height: 20px;
    padding-left: 1px;
    border-radius: 50%;
    line-height: 18px;
    border: 1px solid #20B3E8;
}

.featured-icon-04 .content a:hover {
    background: #20B3E8;
    color: #FFF;
}

.featured-icon-04.with-bg {
    background: #FAF9F9;
}

.featured-icon-04.with-bg .icon {
    padding: 25px;
    border-bottom: 2px solid #E5E5E5;
}

.featured-icon-04.with-bg .content {
    padding: 0 25px 25px;
}

.featured-icon-05 {
    margin: 0 0 25px;
}

.featured-icon-05 .icon {
    font-size: 30px;
    width: 50px;
    float: left;
}

.featured-icon-05 .content {
    margin-left: 50px;
}

.featured-icon-05 h5 {
    line-height: 1.2;
    margin: 0 0 10px;
}

.featured-icon-05 .content a {
    display: inline-block;
    text-align: center;
    width: 20px;
    height: 20px;
    padding-left: 1px;
    border-radius: 50%;
    line-height: 18px;
    border: 1px solid #20B3E8;
}

.featured-icon-05 .content a:hover {
    background: #20B3E8;
    color: #FFF;
}

.featured-icon-06 {
    margin: 15px 0;
    background: #FAF9F9;
    padding: 0 30px;
}

.featured-icon-06 .icon {
    color: #20B3E8;
    font-size: 42px;
    width: 60px;
    float: left;
    padding: 30px 0;
}

.featured-icon-06 .content {
    margin-left: 60px;
    border-left: 2px dashed #E5E5E5;
    padding: 30px 0;
    padding-left: 20px;
}

.featured-icon-06 h5 {
    line-height: 1.2;
    margin: 0 0 15px;
}

.featured-icon-06 .content a {
    display: inline-block;
    text-align: center;
    width: 20px;
    height: 20px;
    padding-left: 1px;
    border-radius: 50%;
    line-height: 18px;
    border: 1px solid #20B3E8;
}

.featured-icon-06 .content a:hover {
    background: #20B3E8;
    color: #FFF;
}

.featured-sm-wrapper {
    margin-bottom: -15px;
}

.featured-sm-item {
    margin-bottom: 15px;
    color: #666;
}

.featured-sm-item .icon {
    width: 45px;
    float: left;
    font-size: 34px;
    padding-top: 9px;
}

.featured-sm-item .content {
    margin-left: 45px;
    line-height: 1.7;
    letter-spacing: 1.5px;
    font-size: 13px;
}

.process-item-wrapper {
    margin-bottom: -15px;
}

.process-item {
    margin-bottom: 15px;
    color: #666;
}

.process-item .icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    float: left;
    font-size: 26px;
    text-align: center;
    background: #E0E0E0;
    line-height: 60px;
}

.process-item .content {
    margin-left: 80px;
    line-height: 1.7;
    font-size: 13px;
}

.process-item .content h4,
.process-item .content h5,
.process-item .content h6 {
    color: #33B6CB;
    line-height: 1.2;
    border-bottom: 2px solid #33B6CB;
    padding-bottom: 15px;
    letter-spacing: 1px;
}

.promo-box {
    text-align: center;
}

.promo-box h2,
.promo-box h3 {
    margin-top: 0;
}

.promo-box.bg-light {
    padding: 50px 0;
}


/**
 * Team
 */

.team-item {
    text-align: center;
    margin-bottom: 25px;
}

.team-item .image {
    width: 100%;
    padding: 0 5px;
}

.team-item h4,
.team-item h5,
.team-item h6 {
    margin: 25px 0 10px;
    line-height: 1.1;
}

.team-item p {
    margin: 0 0 8px;
    line-height: 1.1;
}

.team-item ul.social {
    margin: 0;
}

.team-item ul.social li {
    display: inline-block;
    margin: 0 5px;
}

.team-item ul.social li a {
    color: #999;
}

.team-item ul.social li a:hover {
    color: #2991A2;
}


/**
 * Tab
 */

.tab-style-01 {
    margin-top: 50px;
}

.tab-style-01 ul.nav {
    border-bottom: 1px solid #CCC;
}

.tab-style-01 ul.nav li {
    display: inline-block;
}

.tab-style-01 ul.nav li h4 {
    margin: 0;
    text-transform: lowercase;
    line-height: 1;
    padding: 18px 25px 14px;
    border-radius: 3px 3px 0 0;
    border: 1px solid transparent;
    border-top-width: 2px;
    margin-bottom: -1px;
}

.tab-style-01 ul.nav li h4 a {
    color: #333;
}

.tab-style-01 ul.nav li h4 a:hover {
    color: #33B6CB;
}

.tab-style-01 ul.nav li.active h4 {
    border-color: #CCC;
    border-top-color: #33B6CB;
    border-bottom: 1px solid #FFF;
}

.tab-style-01 ul.nav li.active h4 a:hover {
    color: #333;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {}

@media only screen and (max-width: 767px) {
    .tab-style-01 ul.nav li h4 {
        padding: 14px 15px 10px;
        font-size: 13px;
    }
}

@media (max-width: 479px) {}


/**
 * Counting
 */

.counting-wrapper {
    padding-top: 80px;
    padding-bottom: 70px;
}

.counting-item {
    text-align: center;
    font-size: 18px;
    margin-bottom: 30px;
}

.counting-number {
    letter-spacing: 1px;
    font-size: 62px;
    font-weight: 700;
    margin: 0 0 25px;
    line-height: 1;
    position: relative;
}

.counting-number:after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: -15px;
    width: 70px;
    height: 1px;
    background: #AAA;
    margin-left: -35px;
}

.counting-item.alt-number-sm {
    font-size: 14px;
}

.counting-item.alt-number-sm .counting-number {
    font-size: 32px;
}

.image-bg-wrapper .counting-number {
    color: #FFF;
}

.image-bg-wrapper .counting-number:after {
    background: #FFF;
}

.bg-primary .counting-number:after {
    background: rgba(255, 255, 255, 0.7);
}

.counting-item-wrapper-02 {
    margin-bottom: -25px;
}

.counting-item-02 {
    font-size: 14px;
    margin-bottom: 25px;
    font-weight: 400;
}

.counting-item-02 a {
    display: block;
    font-weight: 400;
}

.counting-item-02 a:hover {
    opacity: 0.8;
}

.counting-number-02 {
    letter-spacing: 1px;
    font-size: 52px;
    font-weight: 400;
    margin: 0 0 5px;
    line-height: 1;
    position: relative;
}

.counting-item-02 .counting-item-name {
    display: block;
    font-size: 16px;
    font-weight: 600;
}

.counting-item-02 .bt {
    border-color: rgba(255, 255, 255, 0.7);
    margin-top: 10px;
    padding-top: 10px;
    font-size: 12px;
    letter-spacing: 1.5px;
    position: relative;
}

.counting-item-02 .bt:after {
    font-family: 'FontAwesome';
    content: "\f105";
    position: absolute;
    top: 7px;
    right: 0;
    opacity: 0.8;
}


/**
 * 404 page
 */

.error-page-wrapper {
    text-align: center;
    padding-top: 70px;
    padding-bottom: 80px;
}

.error-404 {
    display: block;
    font-size: 150px;
    line-height: 150px;
    color: #333;
    margin-bottom: 20px;
    text-shadow: 5px 5px 1px rgba(0, 0, 0, .1);
    font-family: 'Montserrat', sans-serif;
}


/**
 * Sorting
 */

.sorting-header {
    border-bottom: 1px solid #CCC;
    padding-bottom: 10px;
    margin-bottom: 25px;
}

.sorting-title {
    line-height: 1;
    margin: 0 0 15px;
}

.job-type-checkbox-wrapper {
    float: right;
}

.job-type-checkbox + .job-type-checkbox {
    margin-top: 0;
}

.sorting-content {
    border-bottom: 1px solid #CCC;
    padding-bottom: 15px;
    margin-bottom: 15px;
}

.checkbox-block.job-type-checkbox {
    float: right;
    border: 1px solid #E7E7E7;
    border-radius: 3px;
    margin-left: 10px;
}

.checkbox-block.job-type-checkbox input[type='checkbox'] + label {
    padding: 11px 15px 9px;
    padding-left: 28px;
    color: #9C9C9C;
    border-radius: 3px;
    line-height: 1.2;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 12px;
    font-family: 'Montserrat', sans-serif;
}

.checkbox-block.job-type-checkbox input[type='checkbox'] + label:before {
    left: 10px;
    top: 10px;
    color: #9C9C9C;
}

.checkbox-block.job-type-checkbox input[type='checkbox'] + label:hover {
    background: #F5F5F5;
}

.checkbox-block.job-type-checkbox input[type='checkbox']:checked + label {
    background: #33B6CB;
    color: #FFF;
}

.checkbox-block.job-type-checkbox input[type='checkbox']:checked + label:before {
    color: #FFF;
}

.checkbox-block.job-type-checkbox.full-time-checkbox input[type='checkbox']:checked + label {
    background: #F0AD4E;
}

.checkbox-block.job-type-checkbox.part-time-checkbox input[type='checkbox']:checked + label {
    background: #D9534F;
}

.checkbox-block.job-type-checkbox.freelance-checkbox input[type='checkbox']:checked + label {
    background: #5CB85C;
}

.collapse-inner .checkbox-block.job-type-checkbox {
    margin-bottom: 15px;
}

.btn-toggle.btn-refine {
    background: none;
    padding: 0;
    position: relative;
    padding-right: 27px;
    color: #33B6CB;
    text-transform: capitalize;
    font-size: 14px;
    font-weight: 600;
    margin-top: -4px;
    margin-bottom: 9px;
}

.btn-toggle.btn-refine:after {
    font-family: "Ionicons";
    content: "\f2d7";
    position: absolute;
    top: 0;
    right: 4px;
    font-size: 14px;
}

.btn-toggle.btn-refine.collapsed {
    color: #33B6CB;
}

.btn-toggle.btn-refine.collapsed:after {
    content: '\f4a6';
    font-size: 20px;
    top: -5px;
    right: 0;
}

.btn-toggle.btn-refine.collapsed:hover,
.btn-toggle.btn-refine {
    color: #2991A2;
}

.sorting-wrappper.alt {
    border-bottom: 1px solid #CCC;
    padding-bottom: 10px;
    margin-bottom: 40px;
}

.sorting-wrappper.alt .sorting-header,
.sorting-wrappper.alt .sorting-content {
    border-bottom: 0;
    padding-bottom: 0;
    margin-bottom: 0;
}

.sorting-wrappper.alt .GridLex-gap-10-wrappper label {
    display: block;
    text-align: right;
    margin: 0;
}

.sorting-wrappper.alt .GridLex-gap-10-wrappper {
    margin-right: 0;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {
    .checkbox-block.job-type-checkbox {
        margin-bottom: 15px;
    }
}

@media only screen and (max-width: 767px) {
    .sorting-wrappper.alt .GridLex-gap-10-wrappper label {
        text-align: left;
        margin: 0 0 10px;
    }
    .sorting-content .form-group.GridLex-gap-10-wrappper {
        margin-left: 0;
        margin-right: 0;
    }
}

@media (max-width: 479px) {}

/**
 * Career
 */
.career-subtitle{
    text-align: center;
    padding-bottom: 3%;
}
 .career {
    width: 100%;
    max-height: auto;
    text-align: center;
    padding: 5rem 1rem;
 }

 .career-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    width: 100%;
    padding: 1rem;
 }

 .career-card {
    width: 300px;
    height: auto;
    margin: 1rem;
    box-shadow: 0 1px 6px 0 rgb(49 53 59 / 12%);
    cursor: pointer;
 }

 .career-card:hover{
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
 }

 .career-image {
    width: 100%;
    height: 150px;
    object-fit: cover;
 }

 .career-detail {
    padding: 20px;
 }

 .career-detail span{
    color: #006494;
 }

 .career-detail h4{
    padding: 10px 0;
 }

 .divider {
    margin: 1rem 0;
    border: 0.5px solid var(--greyColor);
 }
 
.career-more {
    color: #00AFF1;
    text-decoration: none;
    font-size: 0.9rem;
}

/** Cardd */

.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #051923;
  color: #00eaff;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/**
 * Post Hero
 */

.post-hero {
    border-bottom: 1px solid #E6E6E6;
    padding: 8px 0;
}

.post-hero.alt-height { 
	padding-top: 50px; 
	padding-bottom: 48px; 
}

.post-hero-texting {
    border: 1px solid #33B6CB;
    border-radius: 3px;
    color: #33B6CB;
    font-size: 12px;
    font-weight: 600;
    padding: 4px 10px;
    margin-right: 10px;
}

.post-hero-item {}

.post-hero-item a,
a.post-hero-item {
    color: #939393;
    font-size: 13px;
    font-weight: 500;
    letter-spacing: 1px;
}

.post-hero.no-bb {
    border-bottom: 0;
}

.post-hero-inner-shahow {
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.21);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.21);
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.21);
    border-radius: 3px;
    background: #FFF;
    margin-top: -102px;
}


/**
 * Latest Job Ticker
 */

.ticker-wrapper {
    overflow: hidden;
    height: 26px;
}

.ticker-inner {
    text-align: center;
    width: 100%;
    position: relative;
    line-height: 1.2;
}

ul.ticker-list {
    list-style: none;
    display: block;
    width: 100%;
    position: relative;
    height: 26px;
}

ul.ticker-list li,
ul.ticker-list li a {
    color: #939393;
    font-size: 13px;
    font-weight: 500;
    letter-spacing: 1px;
    padding: 1px 0;
    display: inline-block;
    height: 26px;
}

ul.ticker-list li a {
    padding-right: 7px;
}

ul.ticker-list li a .labeling {
    border: 1px solid #33B6CB;
    border-radius: 3px;
    color: #33B6CB;
    font-size: 12px;
    font-weight: 600;
    padding: 3px 10px;
    line-height: 1.2;
    display: inline-block;
    margin-right: 7px;
}

ul.ticker-list li a:after {
    font-family: 'FontAwesome';
    content: "\f178";
    color: #33B6CB;
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    opacity: 0;
}

ul.ticker-list li a:hover:after {
    opacity: 1;
}


/**
 * Breadcrumb
 */

.breadcrumb-wrapper {
    padding: 10px 0;
    background: #F5F5F5;
    border-bottom: 1px solid #E6E6E6;
}

ol.breadcrumb-list li {
    display: inline-block;
    line-height: 1;
    font-size: 12px;
}

ol.breadcrumb-list li a:after {
    content: "/";
    margin: 0 7px;
    color: #AAA;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {}

@media only screen and (max-width: 767px) {}

@media (max-width: 479px) {}


/**
 * Category
 */

.category-group-wrapper {
    margin-bottom: -5px;
}

.category-group {
    text-align: center;
    padding: 0 30px 50px;
}

.category-group .icon {
    font-size: 45px;
    color: #646464;
    margin: 0;
    padding: 0;
    line-height: 45px;
}

.category-group h4,
.category-group h5 {
    margin: 25px 0 8px;
    line-height: 1;
}

.category-group p {
    font-size: 13px;
    line-height: 1.6;
}

.category-group p.sub-category,
.sub-category {
    font-size: 12px;
    margin: 0;
}

.category-group p.sub-category a,
.sub-category a {
    color: #939393;
    border: 1px solid #CCC;
    border-radius: 3px;
    padding: 5px 12px;
    display: inline-block;
    line-height: 1;
    font-weight: 400;
    margin-bottom: 3px;
}

.sub-category a {
    padding: 5px 10px;
}

.category-group p.sub-category a:hover,
.sub-category a:hover {
    color: #2991A2;
    border-color: #2991A2;
}

.sidebar-module .sub-category a {
    margin-bottom: 2px;
}

.category-group-wrapper.with-border {
    margin-bottom: -30px;
}

.category-group-wrapper.with-border .category-group {
    border: 1px solid #CCC;
    margin-bottom: 30px;
    padding: 40px 30px 35px;
    border-radius: 3px;
}

.category-group-wrapper.with-background {
    margin-bottom: -30px;
}

.category-group-wrapper.with-background .category-group {
    background: #EDF2F2;
    margin-bottom: 30px;
    padding: 40px 30px 35px;
    border-radius: 3px;
}

.grid-category-item {
    border-radius: 3px;
}

.category-item-08 {
    overflow: hidden;
    position: relative;
    width: 100%;
    height: 100%;
    color: #FFF;
}

.category-item-08 .icon {
    font-size: 140px;
    color: rgba(0, 0, 0, 0.15);
    position: absolute;
    right: -25px;
    bottom: -25px;
    width: 150px;
    height: 150px;
    line-height: 140px;
}

.category-item-08 .heading {
    padding: 30px 30px 0;
}

.category-item-08 h3,
.category-item-08 h4,
.category-item-08 h5,
.category-item-08 h6 {
    margin: 2px 0 5px;
    line-height: 1.2;
}

.category-item-08 h3 a,
.category-item-08 h4 a,
.category-item-08 h5 a,
.category-item-08 h6 a {
    font-weight: 400;
    display: block;
    position: relative;
}

.category-item-08 h3 a:after,
.category-item-08 h4 a:after,
.category-item-08 h5 a:after,
.category-item-08 h6 a:after {
    font-family: 'FontAwesome';
    content: "\f08e";
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    opacity: 0;
    margin-right: -12px;
    font-size: 16px;
    color: #FFF;
    position: absolute;
    top: 5px;
    right: 0;
    color: #FFF;
}

.category-item-08:hover h3 a:after,
.category-item-08:hover h4 a:after,
.category-item-08:hover h5 a:after,
.category-item-08:hover h6 a:after {
    opacity: 1;
    margin-right: 0;
}

.category-item-08 .sub-category {
    line-height: 1.2;
    padding: 20px 30px 0;
    padding-right: 30%;
}

.category-item-08 .sub-category a {
    font-weight: 400;
    font-size: 14px;
    letter-spacing: 0.5px;
    color: rgba(255, 255, 255, 0.9);
    display: inline-block;
    margin: 7px 0;
    margin-right: 10px;
    border: 0;
    padding: 0;
}

.category-item-08 .sub-category a:after {
    content: ",";
}

.category-item-08 .sub-category a:hover {
		color: rgba(255, 255, 255, 0.7);
}

.category-item-08 .sub-category-more {
    margin-top: 10px;
}

.category-item-08 .sub-category-more a {
    background: rgba(0, 0, 0, 0.15);
    padding: 5px 15px;
}

.category-item-08 .sub-category-more a:after {
    content: "";
}

.category-item-09-wrapper {}

.category-item-09-wrapper .grid-category-wrapper {}

.category-item-09 {
    width: 100%;
    position: relative;
    background-size: cover;
    background-position: center center;
    line-height: 1.2;
    color: #FFF;
}

.category-item-09 > a .heading h3,
.category-item-08 > a .heading h4,
.category-item-08 > a .heading h5 {
    color: #FFF;
    margin-bottom: 10px;
}

.category-item-09 a {
    color: #FFF;
    font-weight: 400;
}

.category-item-09:before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.4);
}

.category-item-09 a:hover {
		color: rgba(255,255,255,0.7);
}

.category-item-09 .heading {
    position: relative;
    padding: 30px 20px 25px;
}

.category-item-09 .heading .pre-heading,
.category-item-09 .heading .post-heading {
    background: #33B6CB;
    color: #FFF;
    display: inline-block;
    font-size: 12px;
    letter-spacing: 0.5px;
    padding: 5px 10px;
    line-height: 1;
    margin-bottom: 7px;
    border-radius: 3px;
}

.category-item-09 .heading .post-heading {
    margin: 7px 0 0;
}

.category-item-09 .heading h3,
.category-item-09 .heading h4 {
    margin: 0;
    line-height: 1.2;
    position: relative;
}

.category-item-09 .heading h3:after,
.category-item-09 .heading h4:after {
    font-family: 'FontAwesome';
    content: "\f08e";
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    opacity: 0;
    margin-right: -12px;
    font-size: 12px;
    color: #FFF;
    position: absolute;
    top: 11px;
    right: 0;
    color: #FFF;
}

.category-item-09:hover .heading h3:after,
.category-item-09:hover .heading h4:after {
    opacity: 1;
    margin-right: 0;
}

.category-item-09 .heading h3 a,
.category-item-09 .heading h4 a {
    color: #FFF;
}

.category-item-09 .content {
    height: 350px;
    padding: 30px 20px 20px;
    display: table;
    position: relative;
}

.category-item-09 .vertical-bottom {
    display: table-cell;
    vertical-align: bottom;
}

.category-item-09 .content .texting {
    font-weight: 700;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 0.5px;
}

.category-item-09 .categroy-inside {
    margin-top: 10px;
    font-size: 13px;
}

.category-item-09 .categroy-inside a {
    margin: 4px 0;
    display: inline-block;
}

.category-item-09 .categroy-inside a:not(:last-child):after {
    content: ",";
    margin-right: 5px;
}

.category-item-09 .categroy-inside.with-border a {
    border: 2px solid #FFF;
    border-radius: 15px;
    padding: 1px 10px;
    display: inline-block;
    margin-bottom: -1px;
}

.category-item-09 .categroy-inside.with-border a:after {
    display: none;
}

.category-item-09-wrapper .slick-prev {
    left: -40px
}

.category-item-09-wrapper .slick-next {
    right: -40px
}

@media only screen and (max-width: 1199px) {
    .category-item-09-wrapper .slick-prev {
        left: -20px
    }
    .category-item-09-wrapper .slick-next {
        right: -20px
    }
}

@media only screen and (max-width: 991px) {
    .category-item-09-wrapper .slick-prev {
        left: 0
    }
    .category-item-09-wrapper .slick-next {
        right: 0
    }
    .category-item-09-wrapper .slick-prev:before,
    .category-item-09-wrapper .slick-next:before {
        background: rgba(51, 184, 204, 0.8);
    }
}


/**
 * Sidebar
 */

.sidebar {}

.sidebar-inner {}

.sidebar-inner.no-border {
    border: 0;
    padding: 0;
}

.sidebar-inner.for-blog a {
    color: #777;
    font-weight: 400;
}

.sidebar-inner.for-blog a:hover {
    color: #2991A2;
}

.sidebar-module {
    padding: 0 0 40px;
}

.sidebar-box {
    padding: 30px 0 0;
}

.sidebar-title {
    color: #333;
    margin-top: 0;
}

.sidebar-title.text-primary {
    text-transform: uppercase;
}

.sidebar-header {
    clear: both;
}

.sidebar-header h4 {
    float: left;
    text-transform: uppercase;
    margin: 0 0 12px;
}

.sidebar-reset-filter {
    float: right;
    color: #999;
    font-size: 12px;
}

.sidebar-search-wrapper {
    padding: 20px;
    margin: 0 0 30px;
    border-radius: 3px;
}

.sidebar-search-header h4 {
    text-transform: uppercase;
    margin: 0 0 12px;
}

.btn-more-less {
    background: none;
    padding: 0;
    font-size: 10px;
    font-weight: 600;
}

.btn-more-less.collapsed:before {
    content: '+ ';
}

.btn-more-less:before {
    content: '- ';
}

.more-less-inner {
    margin: 0;
}

.read-more-div-open {
    display: block;
}

.read-more-div-close {}

ul.sidebar-category,
ul.sidebar-archives {
    margin-top: 15px;
}

ul.sidebar-category li,
ul.sidebar-archives li {
    border-bottom: 1px solid #F0F0F1;
    padding-bottom: 10px;
    margin-bottom: 10px;
    line-height: 1.4;
}

ul.sidebar-category li:last-child,
ul.sidebar-archives li:last-child {
    margin-bottom: 0;
}

ul.sidebar-category li a,
ul.sidebar-archives li a {
    display: block;
    font-size: 13px;
    letter-spacing: 0.7px;
}

ul.sidebar-category li a span,
ul.sidebar-archives li a span {
    float: right;
    font-size: 12px;
    color: #A8A8A8;
    font-style: italic;
    letter-spacing: 0;
}

ul.sidebar-category li a:hover,
ul.sidebar-archives li a:hover {
    padding-left: 5px;
}

ul.sidebar-post {
    margin-top: 15px;
}

ul.sidebar-post li {
    border-bottom: 1px solid #F0F0F1;
    padding-bottom: 15px;
    margin-bottom: 10px;
    line-height: 1.4;
}

ul.sidebar-post li:last-child {
    margin-bottom: 0;
}

ul.sidebar-post li h6 {
    margin: 0 0 5px;
}

ul.sidebar-post li h6 {
    color: #333;
    font-weight: 400;
}

ul.sidebar-post li a:hover h6 {
    color: #2991A2;
}

ul.sidebar-post li .image {
    width: 80px;
    float: left;
    margin-top: 5px;
}

ul.sidebar-post li .image img {
    display: block;
}

ul.sidebar-post li .content {
    margin-left: 90px;
}

ul.sidebar-post li .recent-post-sm-meta {
    margin: 10px 0 0;
    color: #A8A8A8 !important;
    font-size: 12px;
    font-style: italic;
}

.tag-cloud {
    margin-top: 15px;
    margin-bottom: -5px;
}

.tag-cloud span {
    display: block;
    float: left;
    line-height: 1.2;
    padding: 5px 7px;
    padding-left: 0;
    margin-left: 0;
    margin-bottom: 5px;
}

.tag-cloud a {
    border: 1px solid #E3E3E3;
    line-height: 1.2;
    font-size: 12px;
    padding: 5px 7px;
    margin-left: 3px;
    margin-bottom: 5px;
    display: block;
    float: left;
    color: #777;
    border-radius: 3px;
}

.tag-cloud a:hover {
    background: #2991A2;
    color: #FFF !important;
    border-color: #2991A2;
}

.tag-cloud-wrapper {
    border-top: 1px solid #EFEFEF;
    position: relative;
    margin: 20px 0 0;
    padding: 20px 0 0;
}

.tag-cloud-wrapper .tag-cloud-heading {
    float: left;
}

.tag-cloud-wrapper .tag-cloud {
    margin-left: 50px;
    margin-top: 5px;
}

.sidebar-text-widget ul {
    margin: 0;
    margin-left: 25px;
    padding: 0;
}

.sidebar-text-widget ul li {
    list-style: circle;
}

h4.sidebar-title {
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-top: 0;
}

.sidebar-link-list a {
    color: #939393;
    display: block;
    font-weight: 400;
}

ul.sidebar-link-list li {
    line-height: 1.2;
    margin-bottom: 12px;
    position: relative;
}

ul.sidebar-link-list li ul {
    margin-top: 12px;
    padding-left: 15px;
    border-left: 1px dotted #CCC;
    margin-left: 5px;
}

ul.sidebar-link-list li ul li {
    margin-bottom: 8px;
    font-size: 13px;
}

ul.sidebar-link-list li ul li:before {
    content: "";
    position: absolute;
    top: 8px;
    left: -15px;
    width: 8px;
    height: 2px;
    border-top: 1px dotted #CCC;
}

ul.sidebar-link-list li span {
    display: inline-block;
    margin-left: 7px;
    font-size: 11px;
    color: #A7A7A7;
    letter-spacing: 0.3px;
}

ul.sidebar-menu > li + li {
    margin-top: 20px;
}

ul.sidebar-menu > li > a {
    color: #939393;
    font-weight: 400;
    letter-spacing: 0.7px;
    line-height: 1.2;
    display: block;
    position: relative;
    overflow: hidden;
}

ul.sidebar-menu > li > a:after {
    font-family: "Ionicons";
    content: "\f10b";
    position: absolute;
    top: 0;
    left: 0;
    font-size: 16px;
    left: -15px;
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
}

ul.sidebar-menu > li.active > a {
    font-weight: 600;
    padding-left: 20px;
    color: #33B6CB;
}

ul.sidebar-menu > li.active > a:after {
    left: 0;
    color: #33B6CB;
}

ul.sidebar-menu > li > a:hover {
    color: #33B6CB;
    font-weight: 600;
}

ul.sidebar-menu > li ul {
    margin-top: 12px;
    padding-left: 25px;
    border-left: 1px dotted #CCC;
    margin-left: 0;
}

ul.sidebar-menu > li ul li {
    margin-bottom: 8px;
    font-size: 13px;
    position: relative;
}

ul.sidebar-menu > li ul li a {
    font-weight: 400;
    line-height: 1.4;
    color: #939393;
    position: relative;
}

ul.sidebar-menu > li ul li:before {
    content: "";
    position: absolute;
    top: 11px;
    left: -25px;
    width: 11px;
    height: 3px;
    border-top: 1px dotted #CCC;
    border-bottom: 1px dotted #CCC;
}

ul.sidebar-menu > li ul li.active a {
    font-weight: 600;
    color: #33B6CB;
}

ul.sidebar-menu > li ul li.active:before {
    border-top: 1px dotted #33B6CB;
    border-bottom: 1px dotted #33B6CB;
}

.sidebar-menu-title {
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-top: 0;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {}

@media only screen and (max-width: 767px) {
    .sidebar {
        margin-bottom: 30px;
    }
    .sidebar-module {
        padding: 0 0 30px;
    }
    .sidebar-module:last-child {
        padding: 0;
    }
}

@media (max-width: 479px) {}


/**
 * Blog
 */

.blog-wrapper {
    padding-right: 10px;
}

.blog-item {
    display: block;
    margin-bottom: 50px;
    background: #FFF;
    overflow: hidden;
    border-bottom: 1px solid #EBE8E6;
    padding: 0
}

.blog-item.blog-single {
    border-bottom: 0;
}

.blog-item:last-child {
    margin-bottom: 0
}

.blog-item.single {
    border-bottom: 0;
    margin-bottom: 30px
}

.blog-media {
    position: relative;
    background: #eee;
}

.blog-media a {
    display: block;
}

.blog-content {
    padding: 30px 0;
    position: relative
}

.blog-content h3,
.blog-content h4 {
    line-height: 1.4;
    margin-top: 0;
    margin-bottom: 15px;
}

.blog-content h3 a,
.blog-content h4 a {
    color: #333;
}

.blog-content h3 a:hover,
.blog-content h4 a:hover {
    color: #2991A2;
}

.blog-entry {
    margin-bottom: 15px;
}

.blog-entry ul,
.blog-entry ol {
    list-style: disc;
    margin-left: 20px;
    line-height: 25px;
}

.blog-entry ul li,
.blog-entry ol li {
    margin-bottom: 7px;
}

.blog-entry ul ul,
.blog-entry ol ol {
    margin-top: 7px;
}

.blog-entry > ul,
.blog-entry > ol {
    margin-bottom: 15px;
}

.blog-entry ol {
    list-style: decimal;
}

ul.blog-meta {
    list-style: none;
    padding: 0;
    margin: 0 0 15px;
    font-style: italic;
    color: #A8A8A8;
    letter-spacing: 0.5px;
}

ul.blog-meta li {
    display: inline;
    position: relative;
    margin-right: 30px;
}

ul.blog-meta li:after {
    content: "";
    color: #BBB4AB;
    width: 5px;
    height: 2px;
    background: #33B6CB;
    display: block;
    position: absolute;
    top: 10px;
    right: -20px;
}

ul.blog-meta li:last-child {
    margin-right: 0;
}

ul.blog-meta li:last-child:after {
    display: none;
}

.btn-blog {
    font-size: 12px;
    letter-spacing: 1px;
}

.blog-extra {
    background: #FAFAFA;
    padding: 22px 20px 18px;
    margin: 0
}

.share-it {
    float: right
}

.share-it span {
    float: left;
    text-align: left;
    margin-right: 5px
}

.share-it .social {
    float: right;
    margin-top: -5px
}

.blog-extra ul.tag-cluod li {
    margin: 0 3px 0 0;
    line-height: 20px
}

.blog-author {
    padding: 0;
    position: relative;
    border: 1px solid #DCE0E0;
    border-radius: 3px;
}

.author-details {
    margin-left: 140px;
    padding: 20px;
    position: relative;
    border-left: 1px solid #DCE0E0
}

.author-label {
    position: absolute;
    width: 140px;
    left: 0;
    right: 0;
    top: 0;
    padding: 15px;
}

.author-label img {
    width: 100%
}

.blog-author .social {
    float: right;
    margin-top: -5px
}

#comment-wrapper {
    background: #FFF;
    padding: 0 0 20px;
    position: relative
}

ul.comment-item {
    list-style: none;
    padding: 0;
    margin: 0
}

ul.comment-item li {
    position: relative;
    display: block;
    padding-left: 65px;
    padding-bottom: 30px;
    margin-bottom: 40px;
    border-bottom: 1px solid #DCE0E0
}

ul.comment-item li li:last-child,
ul.comment-item li li li:last-child {
    border-bottom: 0;
    padding-bottom: 0;
    margin-bottom: 0;
}

ul.comment-item ul {
    margin-top: 20px;
    padding-top: 30px;
    border-top: 1px solid #DCE0E0;
    margin-left: -20px;
}

.comment-item h6 {
    margin-bottom: 5px;
}

.comment-item .comment-avatar {
    position: absolute;
    top: 0;
    left: 0;
    width: 50px;
    height: 50px;
    border-radius: 50%
}

.comment-item .comment-avatar img {
    width: 100%;
    width: 100%;
    border-radius: 50%
}

.comment-item .comment-time {
    display: block;
    font-style: italic;
    font-size: 12px;
    color: #999;
    margin-bottom: 10px;
    line-height: 1.2;
}

.comment-item a.comment-reply {
    float: right;
    font-size: 10px;
    line-height: 1;
    padding: 3px 7px;
    text-transform: uppercase;
    border: 1px solid #DCE0E0;
    border-radius: 3px;
    -webkit-transition: all .3s;
    transition: all .3s;
    display: block
}

.comment-item a.comment-reply:hover {
    color: #FFF;
    border-color: #2991A2;
    background: #2991A2;
}

.comment-form .form-control:-moz-placeholder {
    color: #FFF
}

.comment-form .form-control::-moz-placeholder {
    color: #FFF
}

.comment-form .form-control:-ms-input-placeholder {
    color: #FFF
}

.comment-form .form-control::-webkit-input-placeholder {
    color: #FFF
}

.post-grid-item .image {
    position: relative;
}

.post-grid-item .post-grid-meta {
    position: absolute;
    left: 15px;
    right: 0;
    bottom: 0;
    background: #33B6CB;
    color: #FFF;
    font-size: 12px;
    letter-spacing: 1px;
    border-left: 2px solid #FFF;
    border-top: 2px solid #FFF;
    line-height: 1.2;
    padding: 10px 15px;
    z-index: 3;
}

.post-grid-item .post-grid-meta > div {
    display: inline-block;
}

.post-grid-item .post-grid-meta > div:after {
    content: "|";
    margin-left: 7px;
    margin-right: 5px;
}

.post-grid-item .post-grid-meta > div:last-child:after {
    display: none;
}

.post-grid-item .content {
    padding-left: 15px;
}

.post-grid-item .content h3,
.post-grid-item .content h4 {
    line-height: 1.2;
    margin: 20px 0 15px;
}

.post-grid-item .content h3 a,
.post-grid-item .content h4 a {
    font-weight: 400;
    color: #333;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {}

@media only screen and (max-width: 767px) {
    .blog-wrapper {
        padding-right: 0;
    }
}

@media (max-width: 479px) {}


/**
 * Social Share
 */

ul.social-share-sm {
    position: relative;
    display: inline-block;
    line-height: 1;
    float: left;
}

ul.social-share-sm li {
    display: inline-block;
    margin: 0 0 5px;
}

ul.social-share-sm li span,
ul.social-share-sm li a {
    position: relative;
    display: inline-block;
    padding-right: 10px;
    margin-right: 10px;
}

ul.social-share-sm:after,
ul.social-share-sm li span:after,
ul.social-share-sm li a:after {
    content: "";
    position: absolute;
    right: 0;
    top: 1px;
    width: 1px;
    height: 13px;
    background: #E3E3E3;
}

ul.social-share-sm.pull-right {
    margin-right: -10px;
}

ul.social-share-sm.pull-right:after {
    display: none;
}

ul.social-share-sm li a:after {
    width: 4px;
    height: 4px;
    border-radius: 50%;
    top: 6px;
    right: -3px;
}

ul.social-share-sm li:last-child a {
    margin-right: 0;
}

ul.social-share-sm li:last-child a:after {
    display: none;
}

ul.social-share-sm li a {
    font-weight: 400;
    color: #999;
}

ul.social-share-sm li a:hover {
    color: #2991A2;
}

ul.social-share-sm.for-useful {
    float: right;
}

ul.social-share-sm.for-useful:after {
    display: none;
}

ul.social-share-sm.for-useful li:not(:last-child) {
    margin-right: 10px;
}

ul.social-share-sm.for-useful li span {
    margin-right: 0;
}

ul.social-share-sm.for-useful li a {
    margin-right: 0;
    padding-right: 0;
}

ul.social-share-sm.for-useful li a:after {
    display: none;
}

.review-list ul.social-share-sm {
    margin-top: 20px;
}


/**
 * Pager
 */

.pager-wrapper {
    margin-top: 30px;
}

.pager-wrapper.mmt {
    margin-top: -20px;
}

ul.pager-list {
    text-align: center;
    margin: 0;
    padding: 0;
}

ul.pager-list.mt {
    margin-top: 11px;
}

ul.pager-list li {
    display: inline-block;
    margin: 0 3px;
    font-weight: 600;
    color: #5D5D5D;
}

ul.pager-list li a {
    color: #5D5D5D;
    display: block;
}

ul.pager-list li .form-control {
    width: 40px;
    text-align: center;
    height: 28px;
    display: block;
    float: left;
    margin: 0;
    margin-bottom: -10px;
}

ul.pager-list li.paging-nav a {
    background: #EDF2F2;
    height: 28px;
    line-height: 24px;
    padding: 0 10px;
    text-align: center;
    display: block;
    border: 2px solid #EDF2F2;
    border-radius: 3px;
}

ul.pager-list li.paging-nav a:hover {
    background: #2991A2;
    border-color: #2991A2;
    color: #FFF;
}

ul.pager-list li.grid-type a {
    font-size: 14px;
    padding-top: 2px;
}

ul.pager-list li.btn-wrapper {
    margin-right: 15px;
}

ul.pager-list li.btn-wrapper .text {
    font-weight: 400;
}

ul.pager-list.pull-right {
    text-align: left;
    margin-bottom: 0;
}

ul.pager-list.pull-right li {
    display: block;
    float: left;
    margin-left: 5px;
}

.pager-wrapper .form-control {
    height: 34px;
}

.pager-inner {
    line-height: 1;
    display: table;
}

.pager-label {
    vertical-align: middle;
    display: table-cell;
    font-weight: 400;
}

.pager-middle-holder {
    display: inline-block;
    margin: 0;
    margin-left: 7px;
    line-height: 1;
    white-space: nowrap;
    vertical-align: middle;
}

.pager-right {
    float: right;
}

.pagination {
    margin: 9px 0 0;
}

.pagination > li > a,
.pagination > li > span {
    padding: 0;
    margin: 0 3px;
    color: #337ab7;
    border: 0;
    display: block;
    width: 24px;
    height: 24px;
    line-height: 23px;
    border-radius: 50% !important;
    text-align: center;
    color: #666;
}

.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
    color: #33B6CB;
    background-color: #EDF2F2;
}

.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
    background-color: #33B6CB;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {
    .pager-right {
        float: left;
    }
}

@media only screen and (max-width: 767px) {}

@media (max-width: 479px) {}


/**
 * Job 
 */

.recent-job-wrapper {
    border: 1px solid #CCC;
    border-radius: 3px;
}

.recent-job-item {
    padding: 13px 15px 10px 20px;
    border-bottom: 1px solid #CCC;
    width: 100%;
}

.recent-job-item:first-child {
    border-radius: 3px 3px 0 0;
}

.recent-job-item:last-child {
    border-bottom: 0;
}

.recent-job-item.highlight {
    background: #EDF2F2;
    position: relative;
}

.recent-job-item.highlight > div {
    position: relative;
}

.recent-job-item.highlight > div:before {
    content: "";
    position: absolute;
    top: -14px;
    bottom: -11px;
    left: -14px;
    width: 3px;
    background: #33B6CB;
}

.recent-job-item.highlight:first-child > div:before {
    border-radius: 3px 0 0 0;
}

.recent-job-item.highlight:last-child > div:before {
    border-radius: 0 0 0 3px;
}

.recent-job-item .image {
    float: left;
    width: 60px;
}

.recent-job-item .content {
    margin-left: 80px;
}

.recent-job-item .content h4 {
    line-height: 1.15;
    margin: 0 0 5px;
}

.recent-job-item .content p {
    font-size: 15px;
    font-weight: 600;
    margin: 0;
    line-height: 1;
}

.recent-job-item .job-location {
    font-size: 16px;
}

.job-label {
    width: 100%;
    display: block;
    text-align: center;
    padding: 8px;
    font-size: 13px;
    text-transform: uppercase;
    line-height: 1;
    margin-top: 7px;
    margin-bottom: -3px;
    font-weight: 600;
}

a.recent-job-item {
    display: block;
    color: #939393;
}

a.recent-job-item:hover {
    background: #EDF2F2;
}

.tab-content-inner .recent-job-wrapper {
    margin: 0;
}

.alt-stripe .recent-job-item:nth-child(even) {
    background: #EDF2F2;
}

.alt-stripe .recent-job-item:hover {
    background: #EEE;
}

.job-item-list {
    position: relative;
    padding: 30px 20px;
    padding-left: 160px;
    line-height: 19px;
    background: #EDF2F2;
    border-radius: 3px;
    margin-bottom: 20px;
}

.job-item-list .image {
    position: absolute;
    top: 20px;
    left: 20px;
    width: 120px;
}

.job-item-list .image img {}

.job-item-list .content {
    border-left: 1px solid #E3E3E3;
    border-radius: 3px;
    padding-left: 20px;
}

.job-item-list .content h4 {
    margin: 0 0 5px;
}

.job-item-list .sub-category {
    margin-bottom: -5px;
    margin-top: 10px;
}

.job-item-list .meta-div {
    margin-top: 10px;
}

.job-item-list .meta-div > span {
    display: block;
    float: left;
}

.job-item-list .job-label {
    width: auto;
    padding: 5px 8px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.5px;
    margin-left: 10px;
    margin-top: -4px;
}

.job-item-list .texing {
    font-size: 13px;
}

.job-item-list .meta-list,
.job-item-list .btn {
    margin-left: 15px;
}

.job-item-list .texing {
    margin: 0 0 12px;
}

.meta-div {
    font-size: 15px;
    font-weight: 600;
    margin: 0;
    line-height: 1;
}

ul.meta-list li {
    margin: 7px 0;
}

ul.meta-list li span {
    font-weight: 600;
}

.job-item-list.featured .featured-label {
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 70px 70px 0;
    border-color: transparent #BC3033 transparent transparent;
    color: #FFF;
    position: absolute;
    top: -1px;
    right: -1px;
}

.job-item-list.featured .featured-label span {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    display: block;
    margin-top: 0px;
    margin-left: 30px;
    font-size: 11px;
    font-weight: 600;
    text-transform: lowercase;
}

.job-item-grid-wrapper {
    margin-bottom: -30px;
}

.job-item-grid {
    line-height: 1.4;
    border-radius: 3px;
}

.job-item-grid > a {
    color: #939393;
    font-weight: 400;
}

.job-item-grid .fav-save {
    position: absolute;
    left: 15px;
    top: 130px;
}

.job-item-grid .fav-save a {
    display: inline-block;
    line-height: 1;
    width: 26px;
    height: 26px;
    line-height: 26px;
    background: #33B6CB;
    color: #FFF;
    text-align: center;
}

.job-item-grid .labeling {
    position: absolute;
    left: auto;
    right: 15px;
    top: 130px;
}

.job-item-grid .labeling .label {
    text-transform: uppercase;
    font-size: 10px;
    letter-spacing: 1px;
    line-height: 1.2;
}

.job-item-grid {
    background: #EDF2F2;
    width: 100%;
    position: relative;
}

.job-item-grid .image {
    padding: 2px;
    height: 140px;
    display: table;
    width: 100%;
}

.job-item-grid .image .vertical-middle {
    display: table-cell;
    vertical-align: middle;
    background: #FFF;
    height: 100%;
}

.job-item-grid .image img {
    width: 150px;
    display: block;
    margin: 0 auto;
}

.job-item-grid .content {
    padding: 35px 15px 15px;
}

.job-item-grid .content h4,
.job-item-grid .content h5,
.job-item-grid .content h6 {
    line-height: 1.2;
    margin: 0 0 5px;
    position: relative;
}

.job-item-grid .content h4:before,
.job-item-grid .content h5:before,
.job-item-grid .content h6:before {
    font-family: 'FontAwesome';
    content: "\f08e";
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    opacity: 0;
    margin-right: -12px;
    font-size: 14px;
    position: absolute;
    right: 0;
    top: 5px;
}

.job-item-grid:hover h4:before,
.job-item-grid:hover h5:before,
.job-item-grid:hover h6:before {
    margin-right: 0;
    opacity: 1;
}

.job-item-grid .content .location {
    margin-bottom: 15px;
}

.job-item-grid .content .date {
    letter-spacing: 1px;
}

.job-item-grid .content-bottom {
    border-top: 1px solid #FFF;
    padding: 20px 15px 15px;
}

.job-item-grid .content-bottom .sub-category a {
    font-size: 11px;
    letter-spacing: 1px;
    padding: 3px 7px;
    border-color: #DDD;
}

.job-item-grid-wrapper .slick-prev {
    left: -40px
}

.job-item-grid-wrapper .slick-next {
    right: -40px
}

@media only screen and (max-width: 1199px) {
    .recent-job-item .job-location {
        font-size: 14px;
    }
    .job-label {
        font-size: 11px;
    }
    .job-item-list .meta-list {
        margin-bottom: 15px;
    }
    .job-item-grid-wrapper .slick-prev {
        left: -20px
    }
    .job-item-grid-wrapper .slick-next {
        right: -20px
    }
}

@media only screen and (max-width: 991px) {
    .job-item-grid-wrapper .slick-prev {
        left: 0
    }
    .job-item-grid-wrapper .slick-next {
        right: 0
    }
    .job-item-grid-wrapper .slick-prev:before,
    .job-item-grid-wrapper .slick-next:before {
        background: rgba(51, 184, 204, 0.8);
    }
    .job-item-list {
        padding: 20px 20px;
    }
    .job-item-list .image {
        position: relative;
        top: 0;
        left: 0;
        width: 100px;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #DDD;
        border-radius: 3px;
    }
    .job-item-list .content {
        border: 0;
        padding: 0;
    }
}

@media only screen and (max-width: 767px) {
    .job-item-list .meta-list,
    .job-item-list .btn {
        margin-left: 0;
    }
    .job-item-list .sub-category {
        margin-bottom: 10px;
    }
}

@media (max-width: 479px) {}


/**
 * Job Detail
 */

.job-detail-company-overview {
    margin-top: 40px;
}

.job-detail-wrapper {
    padding-left: 10px;
}

.job-detail-header {
    margin-top: -10px;
}

.job-detail-header .meta-div {
    margin-top: 10px;
}

.job-detail-header .meta-div > span {
    display: inline-block;
}

.job-detail-header .job-label {
    width: auto;
    padding: 5px 8px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.5px;
    margin-left: 3px;
    margin-top: -4px;
}

.job-detail-header .meta-list {
    text-align: left !important;
    margin: 50px 0 20px;
    border-top: 1px solid #CCC;
    border-bottom: 1px solid #CCC;
    padding: 15px 0;
}

.job-detail-header .meta-list li {
    width: 25%;
    float: left;
    line-height: 1.2;
    font-size: 13px;
}

.job-detail-header .meta-list li h4,
.job-detail-header .meta-list li h5 {
    margin-bottom: 5px;
}

.job-detail-company-overview .image {
    width: 200px;
    float: left;
    background: #F7FCFC;
    padding: 20px;
    margin-right: 30px;
}

.job-detail-company-overview .image img {
    display: block;
    margin-top: 13px;
}

.job-detail-content ul {
    list-style: disc;
    margin-left: 25px;
    margin-bottom: 18px;
}

.job-detail-content ul li:not(:last-child) {
    margin-bottom: 7px;
}

.job-detail-sidebar {
    background: #F5F5F5;
    border: 1px solid #E6E6E6;
    padding: 20px 30px 40px;
    padding-top: 40px;
    margin-top: -51px;
}

.job-detail-sidebar .meta-list {
    margin-top: 10px;
}

.job-detail-sidebar .meta-list li {
    line-height: 1.2;
    font-size: 13px;
    margin: 0 0 15px;
}

.job-detail-sidebar .meta-list li h4,
.job-detail-sidebar .meta-list li h5 {
    margin-bottom: 5px;
}

.job-detail-sidebar .job-detail-company-overview {
    margin-top: 30px;
    line-height: 1.4;
    font-size: 13px;
}

.job-detail-sidebar .job-detail-company-overview .image {
    float: none;
    margin-bottom: 15px;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {}

@media only screen and (max-width: 767px) {
    .job-detail-header .meta-list li {
        width: 50%;
    }
    .job-detail-sidebar {
        margin-top: 0;
        margin-bottom: 30px;
        padding: 20px 25px 40px;
    }
}

@media (max-width: 479px) {
    .job-detail-header .meta-list li {
        width: 100%;
    }
}


/**
 * Resume
 */

.resume-list-item {
    background: #EDF2F2;
    border-radius: 3px;
    padding: 30px 20px 27px;
    line-height: 1.4;
}

.resume-list-item + .resume-list-item {
    margin-top: 20px;
}

.resume-list-item .content a {
    color: #939393;
    font-weight: 400;
    display: block;
    position: relative;
    padding-left: 70px;
    min-height: 70px;
}

.resume-list-item .content a .image {
    width: 54px;
    height: 54px;
    position: absolute;
    top: 2px;
    left: 0;
}

.resume-list-item .content a h3,
.resume-list-item .content a h4,
.resume-list-item .content a h5 {
    line-height: 1.2;
    margin-top: 0;
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
}

.resume-list-item .content a:hover h3,
.resume-list-item .content a:hover h4,
.resume-list-item .content a:hover h4 {
    color: #33B6CB;
}

.resume-list-btn {
    text-align: right;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {
    .resume-list-btn {
        text-align: left;
        padding-left: 70px;
        margin-top: 10px;
    }
}

@media only screen and (max-width: 767px) {}

@media (max-width: 479px) {}


/**
 * Browse Job
 */

.browse-job-wrapper {
    margin-top: 50px;
}

.browse-job-box + .browse-job-box {
    margin-top: 50px;
}

.browse-job-title {
    line-height: 1.2;
    padding-top: 5px;
    margin-bottom: 14px;
}

.browse-job-title h3,
.browse-job-title h4 {
    line-height: 1.2;
    margin: 0 0 30px
}

.browse-job-content {
    border-left: 1px solid #CCC;
    padding-left: 30px;
}

.browse-job-inner a {
    line-height: 1.2;
    display: block;
    font-weight: 400;
    color: #939393;
    letter-spacing: 1px;
    margin: 5px 0;
}

.browse-job-inner a span {
    letter-spacing: 0.5px;
    font-size: 12px;
}

.browse-job-inner a:before {
    font-family: 'FontAwesome';
    content: "\f08e";
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    opacity: 0;
    margin-right: -12px;
    font-size: 10px;
}

.browse-job-inner a:hover {
    color: #2991A2;
}

.browse-job-inner a:hover:before {
    margin-right: 5px;
    opacity: 1;
}

.browse-job-category + .browse-job-category {
    margin-top: 15px;
}

.browse-job-category h5,
.browse-job-category h6 {
    line-height: 1.2;
    margin: 0;
    letter-spacing: 1;
}

.browse-job-category h5 a,
.browse-job-category h6 a {
    color: #333;
}

.browse-job-category h5 a:hover,
.browse-job-category h6 a:hover {
    color: #33B6CB;
}

.browse-job-sub-category a {
    line-height: 1.2;
    display: inline-block;
    font-weight: 400;
    letter-spacing: 1px;
    margin: 5px 0;
    font-size: 12px;
    letter-spacing: 0.7px;
}

.browse-job-sub-category a:before {
    font-family: 'FontAwesome';
    content: "\f08e";
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    opacity: 0;
    margin-right: -12px;
    font-size: 10px;
}

.browse-job-sub-category a:hover {
    color: #2991A2;
}

.browse-job-sub-category a:hover:before {
    margin-right: 5px;
    opacity: 1;
}

.browse-job-menu a {
    text-transform: uppercase;
    display: inline-block;
    font-size: 16px;
    font-weight: 700;
    margin-right: 15px;
}

.how-it-work-wrapper {
    margin-top: 30px;
}

.how-it-work-box + .how-it-work-box {
    margin-top: 50px;
    border-top: 1px solid #CCC;
    padding-top: 50px;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {}

@media only screen and (max-width: 767px) {}

@media (max-width: 479px) {}


/**
 * Apply Job
 */

.apply-job-wrapper {
    margin-top: 20px;
}

.apply-job-wrapper .btn.btn-hidden {
    display: none;
}

.apply-job-wrapper .btn.collapsed {
    display: block;
}


/**
 * Employer
 */

.top-company-wrapper {
    margin-bottom: -30px;
}

.top-company {
    text-align: center;
    margin-bottom: 30px;
    font-size: 12px;
}

.top-company .image {
    width: 120px;
    margin: 0 auto;
}

.top-company a {
    color: #939393;
    border: 1px solid #CCC;
    border-radius: 3px;
    padding: 3px 15px;
    display: inline-block;
    line-height: 1;
    font-weight: 400;
}

.top-company a:hover {
    color: #2991A2;
    border-color: #2991A2;
}

.top-company h5 {
    margin: 15px 0 8px;
    line-height: 1;
}

.top-company-wrapper.mmt {
    margin-top: -16px;
}

.top-company-wrapper.alt-item-mb {
    margin-bottom: -40px;
}

.top-company-wrapper.alt-item-mb .top-company {
    margin-bottom: 40px;
}

.top-company-wrapper.with-border .top-company {
    border: 1px solid #CCC;
    border-radius: 3px;
    padding: 35px 20px 25px;
}

.top-company-wrapper.with-bg .top-company {
    background: #EDF2F2;
    border-radius: 3px;
    padding: 35px 20px 25px;
}

.top-company-2 {
    border: 1px solid #DDD;
    border-radius: 3px;
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
}

.top-company-2 + .top-company-2 {
    margin-top: 10px;
}

.top-company-2 a {
    color: #939393;
    font-weight: 400;
}

.top-company-2 .image {
    border-bottom: 1px solid #DDD;
    padding: 20px 30px;
    background: #F7FCFC;
    border-radius: 3px 3px 0 0;
}

.top-company-2 .image img { 
		width: 100%; 
}

.top-company-2 .content {
    padding: 20px 15px;
    line-height: 1.2;
}

.top-company-2 .content h5 {
    margin-bottom: 10px;
}

.top-company-2 .content .texting {
    margin: 0 0 15px;
}

.top-company-2:hover {
    -webkit-box-shadow: 0px 0px 9px -2px rgba(0, 0, 0, 0.37);
    -moz-box-shadow: 0px 0px 9px -2px rgba(0, 0, 0, 0.37);
    box-shadow: 0px 0px 9px -2px rgba(0, 0, 0, 0.37);
}

.company-grid-wrapper.top-company-2-wrapper .GridLex-gap-20-wrappper {
    margin-bottom: -20px;
    margin-top: 55px;
}

.company-grid-wrapper.top-company-2-wrapper .GridLex-gap-20-wrappper .top-company-2 {
    margin-bottom: 20px;
}

.company-grid-wrapper.top-company-2-wrapper .GridLex-gap-30-wrappper {
    margin-bottom: -30px;
    margin-top: 55px;
}

.company-grid-wrapper.top-company-2-wrapper .GridLex-gap-30-wrappper .top-company-2 {
    margin-bottom: 30px;
}

.company-detail-company-overview {
    margin-top: 40px;
}

.company-detail-header {}

.company-detail-wrapper {
    padding-left: 10px;
    margin-top: -10px;
}

.company-detail-header .image {
    width: 200px;
    margin: 0 auto 30px;
    background: #F7FCFC;
    padding: 20px;
}

.company-detail-header .location {
    font-weight: 600;
}

.company-detail-header .meta-list {
    text-align: left !important;
    margin: 45px 0 20px;
    border-top: 1px solid #CCC;
    border-bottom: 1px solid #CCC;
    padding: 15px 0;
}

.company-detail-header .meta-list li {
    width: 25%;
    float: left;
    line-height: 1.2;
    font-size: 13px;
}

.company-detail-header .meta-list li h4,
.job-detail-header .meta-list li h5 {
    margin-bottom: 5px;
}

.company-detail-sidebar {
    background: #F5F5F5;
    border: 1px solid #E6E6E6;
    padding: 20px 30px 40px;
    padding-top: 40px;
    margin-top: -51px;
}

.company-detail-sidebar .image {
    width: 200px;
    background: #F7FCFC;
    border: 1px solid #E6E6E6;
    padding: 10px 20px;
    margin-bottom: 15px;
}

.company-detail-sidebar .meta-list li {
    line-height: 1.2;
    font-size: 13px;
    margin: 0 0 15px;
}

.company-detail-sidebar .meta-list li h4,
.job-detail-sidebar .meta-list li h5 {
    margin-bottom: 5px;
}

ul.multiple-sticky-nav.company-directory-menu {
    text-align: center;
    padding: 0;
    border: 0;
    border-bottom: 2px solid #CCC;
    background: none;
}

.company-directory-wrapper {
    padding-top: 50px;
}

.company-directory-wrapper.mmb {
    margin-bottom: -50px;
}

.company-directory-box + .company-directory-box {
    margin-top: 50px;
}

.company-directory-title {
    margin: 0 0 15px;
    line-height: 1.2;
    border-bottom: 1px solid #33B6CB;
    font-size: 18px;
}

.company-directory-title span {
    background: #33B6CB;
    color: #FFF;
    text-transform: uppercase;
    display: inline-block;
    padding: 7px 12px 3px;
    border-radius: 3px 3px 0 0;
}

.company-directory-list-wrapper {
    margin-left: -15px;
    margin-right: -15px;
}

ul.company-directory-list {
    margin: 0;
}

ul.company-directory-list li {
    width: 33.333333333%;
    float: left;
    padding: 0 15px;
}

ul.company-directory-list.col-4 li {
    width: 25%;
}

ul.company-directory-list.col-5 li {
    width: 20%;
}

.company-directory-item-wrapper {
    margin-top: 30px;
    margin-bottom: 20px;
}

.company-directory-item a {
    font-weight: 400;
    font-size: 12px;
    letter-spacing: 0.7px;
    line-height: 1.2;
    display: block;
}

.company-directory-item h5,
.company-directory-item h6 {
    font-weight: 700;
    line-height: 1.2;
    margin-top: 15px;
    margin-bottom: 7px;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    text-transform: capitalize;
}

.company-directory-item a:hover h5,
.company-directory-item a:hover h6 {
    color: #33B6CB;
}

.company-directory-item.alt a {
    color: #939393;
    font-size: 14px;
    letter-spacing: 1px;
}

.company-directory-item.alt h5,
.company-directory-item.alt h6 {
    font-weight: 700;
    color: #33B6CB;
    letter-spacing: 0;
}

.GridLex-wrapper .company-directory-box {
    width: 100%;
}

.company-directory-item-wrapper.alt-mb {
    margin-bottom: -20px;
}

.company-directory-item-wrapper.alt-mb .company-directory-item {
    margin-bottom: 20px;
}

@media only screen and (max-width: 1199px) {
    ul.company-directory-list.col-5 li {
        width: 25%;
    }
    ul.multiple-sticky-nav.company-directory-menu > li a {
        padding: 15px 7px;
        font-size: 12px;
    }
}

@media only screen and (max-width: 991px) {
    .top-company .image {
        width: 100%;
        max-width: 80px;
    }
    .company-directory-wrapper {
        padding-top: 0;
    }
}

@media only screen and (max-width: 767px) {
    ul.company-directory-list li {
        width: 100%;
    }
    ul.company-directory-list.col-5 li {
        width: 50%;
    }
    .company-detail-wrapper {
        padding-left: 0;
    }
    .company-detail-header .meta-list li {
        width: 50%;
    }
    .company-detail-sidebar {
        margin-top: 0;
        margin-bottom: 30px;
        padding: 20px 25px 40px;
    }
}

@media (max-width: 479px) {
    ul.company-directory-list.col-5 li {
        width: 100%;
    }
    .company-detail-header .meta-list li {
        width: 100%;
    }
}


/**
 * Employee
 */

.employee-grid-wrapper {
    margin-top: 40px;
}

.employee-grid-item {
    text-align: center;
    border: 1px solid #DDD;
    border-radius: 3px;
    width: 100%;
    padding: 30px 5px 15px;
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    position: relative;
}

.employee-grid-item:hover {
    border-color: #2991A2;
    background: #F5F5F5;
}

.employee-grid-item a {
    font-size: 14px;
    line-height: 25px;
    font-weight: 400;
    color: #939393;
    display: block;
}

.employee-grid-item .action {
    line-height: 1;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
}

.employee-grid-item .image {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    border: 6px double #33B6CB;
    padding: 3px;
    border-radius: 50%;
}

.employee-grid-item .image img {
    display: inline;
    margin: 0;
}

.employee-grid-item h4 {
    margin: 0;
}

.employee-grid-item h6 {
    line-height: 1;
    margin: 0 0 5px;
}

.employee-grid-item ul.employee-skill {
    margin: 0 0 10px;
}

.employee-grid-item ul.employee-skill li {
    display: inline-block;
    font-size: 12px;
}

.employee-grid-item ul.employee-skill li span {
    color: #939393;
    border: 1px solid #DDD;
    border-radius: 3px;
    padding: 3px 15px;
    display: block;
    line-height: 1;
    font-weight: 400;
}

.employee-grid-item .btn {
    background: none;
    font-size: 20px;
}

.employee-grid-item .btn:hover {
    color: #D9534F;
}

.employee-grid-wrapper .GridLex-gap-15-wrappper {
    margin-bottom: -30px;
}

.employee-grid-wrapper .GridLex-gap-15-wrappper .employee-grid-item {
    margin-bottom: 30px;
}

.employee-detail-header {}

.employee-detail-header .image {
    width: 130px;
    margin: 0 auto 20px;
    border: 6px double #33B6CB;
    padding: 5px;
    border-radius: 50%;
}

.employee-detail-header .location {
    font-weight: 600;
}

.employee-detail-header .meta-list {
    text-align: left !important;
    margin: 45px 0 20px;
    border-top: 1px solid #DDD;
    border-bottom: 1px solid #DDD;
    padding: 15px 0;
}

.employee-detail-header .meta-list li {
    width: 25%;
    float: left;
    line-height: 1.2;
    font-size: 13px;
}

.employee-detail-header .meta-list li h4,
.job-detail-header .meta-list li h5 {
    margin-bottom: 5px;
}

.work-expereince-wrapper {
    position: relative;
    margin: 30px 0
}

.work-expereince-wrapper h5 {
    margin: 0 0 5px;
    line-height: 1.2
}

.work-expereince-wrapper .font-italic {
    line-height: 1.2;
}

.work-expereince-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    height: 100%;
    width: 4px;
    background: #CCCCCC;
    left: 50%;
    margin-left: -2px
}

.work-expereince-content {
    position: relative;
    text-align: right;
    width: 45%;
    border: 1px solid #CCC;
    padding: 30px;
    border-radius: 3px;
    padding-right: 40px;
    background: #FFF;
}

.work-expereince-content:after {
    content: "";
    display: table;
    clear: both;
}

.work-expereince-content:before {
    content: "";
    position: absolute;
    top: 15px;
    right: -11px;
    width: 20px;
    height: 20px;
    display: block;
    border: 1px solid #CCC;
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    background: #FFF;
    border-bottom: 0;
    border-left: 0;
}

.work-expereince-block {
    position: relative;
    margin: 50px 0
}

.work-expereince-block:before {
    content: "";
    position: absolute;
    top: 15px;
    left: 50%;
    margin-left: -10px;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    display: block;
    background: #33B6CB;
    border: 2px solid #FFF;
}

.work-expereince-block:after {
    content: "";
    display: table;
    clear: both
}

.work-expereince-block:first-child {
    margin-top: 0
}

.work-expereince-block:last-child {
    margin-bottom: 0
}

.work-expereince-block:nth-child(even) .work-expereince-content {
    float: right;
    text-align: left;
}

.work-expereince-block:nth-child(even) .work-expereince-content:before {
    left: -11px;
    right: auto;
    border: 1px solid #CCC;
    border-top: 0;
    border-right: 0;
}

ul.employee-detail-list {
    border-left: 1px solid #DDD;
}

ul.employee-detail-list li {
    position: relative;
    padding-left: 30px;
    margin: 35px 0;
}

ul.employee-detail-list li:before {
    content: "";
    position: absolute;
    top: 0;
    left: -5px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    display: block;
    background: #33B6CB;
    border: 2px solid #FFF;
}

ul.employee-detail-list li h5 {
    line-height: 1.2;
    margin: 0 0 5px;
}

ul.employee-detail-list li .font-italic {
    line-height: 1.3;
}

ul.work-expereince-interest {
    margin-left: -15px;
}

ul.work-expereince-interest li {
    float: left;
    text-align: center;
    width: 100px;
    margin-bottom: 15px;
}

ul.work-expereince-interest li .icon {
    width: 70px;
    height: 70px;
    border: 2px solid #33B6CB;
    border-radius: 50%;
    display: block;
    color: #33B6CB;
    font-size: 34px;
    line-height: 70px;
    text-align: center;
    margin: 0 auto;
}

.employee-detail-sidebar {
    background: #F5F5F5;
    border: 1px solid #E6E6E6;
    padding: 20px 30px 40px;
    padding-top: 40px;
    margin-top: -51px;
}

.employee-detail-sidebar .image {
    width: 100px;
    margin-bottom: 15px;
    border-radius: 50%;
    border: 6px double #33B6CB;
    padding: 2px;
}

.employee-detail-sidebar .meta-list li {
    line-height: 1.2;
    font-size: 13px;
    margin: 0 0 15px;
}

.employee-detail-sidebar .meta-list li h4,
.job-detail-sidebar .meta-list li h5 {
    margin-bottom: 5px;
}

.person-long-item {}

.person-long-item .content-left {
    width: 250px;
    text-align: center;
    float: left;
    line-height: 1.2;
}

.person-long-item .content-left .image {
    width: 80px;
    margin: 7px auto;
}

.person-long-item .content-left h3,
.person-long-item .content-left h4,
.person-long-item .content-left h5 {
    line-height: 1.2;
    margin: 15px 0 5px;
}

.person-long-item .content {
    margin-left: 270px;
    border-bottom: 1px solid #DDD;
    padding-bottom: 40px;
    margin-bottom: 50px;
}

.person-long-item ul.person-long-item-meta li {
    line-height: 1.2;
    display: inline-block;
    position: relative;
    letter-spacing: 1.5px;
    font-size: 13px;
}

.person-long-item ul.person-long-item-meta li.texting {
    color: #33B6CB;
    font-weight: 700;
}

.person-long-item ul.person-long-item-meta li {
    margin-right: 30px;
}

.person-long-item ul.person-long-item-meta li:first-child {
    margin-right: 15px;
}

.person-long-item ul.person-long-item-meta li:last-child {
    margin-right: 0;
}

.person-long-item ul.person-long-item-meta li:after {
    content: "";
    width: 4px;
    height: 4px;
    border-radius: 10px;
    background: #CCC;
    display: block;
    position: absolute;
    top: 7px;
    right: -17px;
}

.person-long-item ul.person-long-item-meta li:first-child:after,
.person-long-item ul.person-long-item-meta li:last-child:after {
    display: none;
}

.employee-grid-item-01 a {
    color: #939393;
    font-size: 12px;
    font-weight: 400;
    display: block;
    line-height: 1.2;
}

.employee-grid-item-01 .image {
    position: relative;
}

.employee-grid-item-01 .location {
    line-height: 1.2;
    background: rgba(0, 0, 0, 0.4);
    color: #FFF;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 5px 10px;
    font-weight: 600;
}

.employee-grid-item-01 h5 {
    line-height: 1.2;
    margin: 15px 0 7px;
    color: #33B6CB;
}

.employee-grid-item-01 ul.skill-list li {
    display: inline-block;
}

.employee-grid-item-01 ul.skill-list li span {
    display: inline-block;
    line-height: 1;
    font-size: 12px;
    letter-spacing: 1px;
    border-radius: 3px;
    position: relative;
    margin-right: 10px;
}

.employee-grid-item-01 ul.skill-list li:last-child span {
    margin-right: 0;
}

.employee-grid-item-01 ul.skill-list li span:after {
    content: "";
    width: 3px;
    height: 3px;
    border-radius: 10px;
    background: #CCC;
    display: block;
    position: absolute;
    top: 5px;
    right: -8px;
}

.employee-grid-item-01 ul.skill-list li:last-child span:after {
    display: none;
}

@media only screen and (max-width: 767px) {
    .work-expereince-wrapper {
        padding: 0
    }
    .work-expereince-content {
        padding-right: 30px
    }
    .work-expereince-block:nth-child(even) .work-expereince-content {
        padding-right: 0;
        padding-left: 30px
    }
    .employee-detail-header .meta-list li {
        width: 50%;
    }
    .employee-detail-sidebar {
        margin-top: 0;
        margin-bottom: 30px;
        padding: 20px 25px 40px;
    }
}

@media (max-width: 479px) {
    .work-expereince-wrapper::before {
        left: 35px;
        margin-left: 0
    }
    .work-expereince-content {
        text-align: left;
        width: 100%;
        padding-right: 0!important;
        padding-left: 80px!important
    }
    .employee-detail-header .meta-list li {
        width: 100%;
    }
}


/**
 * Location
 */

.location-grid-wrapper {
    margin-bottom: -30px;
}

.location-grid-item {
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    margin-bottom: 30px;
}

.location-grid-item:hover {
    border-color: #2991A2;
    background: #F5F5F5;
}

.location-grid-item {
    border: 1px solid #CCC;
    padding: 5px 5px 20px;
    border-radius: 3px;
    text-align: center;
    line-height: 1.2;
}

.location-grid-item .image img {
		width: 100%;
}

.location-grid-item h4 {
    line-height: 1;
    margin: 20px 0 5px;
}


/**
 * Testimonial
 */

.testimonial-grid-item {}

.testimonial-grid-item .heading {
    position: relative;
    margin: 0 0 20px;
}

.testimonial-grid-item .heading .image {
    width: 60px;
    float: left;
    border: 2px solid #FFF;
    border-radius: 50%;
    margin-left: -2px;
}

.testimonial-grid-item .heading h3,
.testimonial-grid-item .heading h4,
.testimonial-grid-item .heading h5 {
    border-bottom: 2px solid #33B6CB;
    line-height: 1.2;
    padding-bottom: 10px;
    margin: 1px 0 5px;
    margin-left: 65px;
    color: #33B6CB;
}

.testimonial-grid-item .heading span {
    font-size: 13px;
    letter-spacing: 0.7px;
    display: block;
    margin-left: 65px;
}

.testimonial-grid-item .content {
    position: relative;
}

.testimonial-grid-item .content .saying {
    font-size: 15px;
    font-style: italic;
    font-weight: 400;
    font-family: 'Raleway', sans-serif;
    line-height: 1.6;
    position: relative;
    letter-spacing: 1.5px;
}

.testimonial-grid-item .content:before {
    font-family: "Flaticon Thick";
    content: "\f138";
    position: absolute;
    top: 0px;
    left: 0;
    font-size: 36px;
    color: #E6E6E6;
}

.bg-light .testimonial-grid-item .heading .image {
    border-color: #BBB;
}


/**
 * Popular Ralated
 */

.popular-search-box {
    width: 100%;
    position: relative;
    padding-bottom: 50px;
}

.popular-search-box .content a {
    font-size: 14px;
    font-weight: 400;
    display: inline-block;
    position: relative;
    margin: 7px 0;
    margin-right: 30px;
    line-height: 1.2;
}

.popular-search-box .content a:last-child {
    margin-right: 0;
}

.popular-search-box .content a:after {
    content: "";
    width: 4px;
    height: 4px;
    border-radius: 10px;
    background: #CCC;
    display: block;
    position: absolute;
    top: 7px;
    right: -17px;
}

.popular-search-box .content a:last-child:after {
    display: none;
}

.popular-search-box .absolute-bottom {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
}

.popular-search-box .absolute-bottom a {
    font-size: 16px;
    line-height: 1.2;
    letter-spacing: 0.5px;
}

.popular-search-box .absolute-bottom a i {
    margin-right: 10px;
    font-size: 20px;
}

.trending-box {
    width: 100%;
    position: relative;
    padding-bottom: 60px;
}

.trending-box .heading {
    border-bottom: 2px solid #DDD;
    padding-bottom: 10px;
}

.trending-box .absolute-bottom {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    border-top: 2px solid #DDD;
    padding-top: 20px;
}

.trending-box .heading.with-icon {
    padding-left: 50px;
    position: relative;
}

.trending-box .heading.with-icon .icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #33B6CB;
    color: #FFF;
    text-align: center;
    line-height: 40px;
    position: absolute;
    top: -9px;
    left: 0;
    font-size: 20px;
}

.trending-box.alt-pb {
    padding-bottom: 80px;
}


/**
 * Newsletter
 */

.newsletter-wrapper-02 {
    background: #E8E8E8;
    padding: 50px 30px;
    padding-left: 40px;
    margin: 50px 0 60px;
}

.newsletter-wrapper-02 h5 {
    font-size: 20px;
    letter-spacing: 1px;
    line-height: 1.2;
    margin: 0;
}

.newsletter-02 {
    margin: 0;
}

.newsletter-02 .form-group {
    position: relative;
    margin: 0;
}

.newsletter-02 .form-control {
    background: none;
    height: 44px;
    border-radius: 22px;
    border: 2px solid #CCCCCC;
    padding-left: 20px;
    padding-right: 100px;
    color: #FFF;
    margin: 0;
}

.newsletter-02 .form-control:focus {
    border-color: #FFF;
}

.newsletter-02 .btn {
    position: absolute;
    top: 4px;
    right: 4px;
    border-radius: 22px;
    line-height: 16px;
    padding-left: 23px;
    padding-right: 20px;
    padding-top: 9px;
    padding-bottom: 7px;
}


/**
 * Footer
 */

.main-footer {
    background: #051923;
    padding-top: 60px;
    padding-bottom: 50px;
    color: rgba(255, 255, 255, 0.5);
    line-height: 22px;
    font-size: 15px;
    font-weight: 400;
}

.main-footer a {
    color: rgba(255, 255, 255, 0.5);
    font-weight: 400;
}

.main-footer a:hover {
    color: #0582CA;
}

h5.footer-title {
    font-size: 20px;
    letter-spacing: 2px;
    margin: 0 0 25px;
    color: #FFF;
    position: relative;
}

.footer-about-us {
    margin-right: 40px;
    font-size: 14px;
    line-height: 24px;
}

.footer-about-us a {
    border: 2px solid #00A6FB;
    color: #00A6FB;
    text-transform: uppercase;
    margin-top: 10px;
    padding: 4px 12px;
    display: inline-block;
    border-radius: 3px;
    font-size: 11px;
    letter-spacing: 2px;
}

.footer-about-us a:hover {
    border-color: #2991A2;
}

ul.footer-menu li {
    width: 50%;
    float: left;
    margin-bottom: 12px;
}

.footer-newsletter {
    margin-top: 23px
}

.footer-newsletter .form-group {
    position: relative;
}

.footer-newsletter .form-control {
    background: none;
    height: 44px;
    border-radius: 22px;
    border: 2px solid rgba(255, 255, 255, 0.7);
    padding-left: 20px;
    padding-right: 100px;
    color: #FFF;
}

.footer-newsletter .form-control:focus {
    border-color: #FFF;
}

.footer-newsletter .btn {
    position: absolute;
    top: 4px;
    right: 4px;
    border-radius: 22px;
    line-height: 16px;
    padding-top: 9px;
    padding-bottom: 7px;
    padding-left: 15px;
}

.bottom-footer {
    background: #051923;
    color: rgba(255, 255, 255, 0.5);
    line-height: 22px;
    font-size: 13px;
    padding-top: 30px;
    padding-bottom: 20px;
}

.bottom-footer a {
    color: rgba(255, 255, 255, 0.5);
}

.bottom-footer a:hover {
    color: #2991A2;
}

ul.bottom-footer-menu {
    text-align: center;
}

ul.bottom-footer-menu li {
    display: inline-block;
    position: relative;
    font-size: 12px;
}

ul.bottom-footer-menu li + li {
    margin-left: 30px;
}

ul.bottom-footer-menu li:after {
    content: "";
    position: absolute;
    top: 10px;
    right: -20px;
    width: 4px;
    height: 4px;
    background: #33B6CB;
    border-radius: 50%;
}

ul.bottom-footer-menu li:last-child:after {
    display: none;
}

ul.bottom-footer-menu.for-social {
    float: right;
}

ul.bottom-footer-menu.for-social li + li {
    margin-left: 20px;
}

ul.bottom-footer-menu.for-social li a {
    font-size: 16px;
}

ul.bottom-footer-menu.for-social li:after {
    display: none;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {}

@media only screen and (max-width: 767px) {
    ul.bottom-footer-menu {
        text-align: left;
        margin: 10px 0;
    }
    ul.bottom-footer-menu.for-social {
        float: left;
        margin: 0;
    }
}

@media (max-width: 479px) {}


/**
 * Admin
*/

.admin-container-wrapper {
    padding-top: 50px;
}

.admin-content-wrapper {
    margin-bottom: 50px;
    width: 100%;
    padding-left: 10px;
}

.admin-sidebar {
    background: #F5F5F5;
    border: 1px solid #E6E6E6;
    padding: 0;
    padding-top: 60px;
    margin-top: -51px;
    padding-bottom: 50px;
    margin-bottom: -10px;
    width: 100%;
}

.admin-user-item {
    text-align: center;
    border-bottom: 1px solid #E1E1E1;
    line-height: 1.2;
    padding-bottom: 30px;
}

.admin-user-item .image {
    width: 100px;
    margin: 0 auto 15px;
    border-radius: 50%;
    border: 6px double #33B6CB;
    padding: 2px;
}

.admin-user-item h4,
.admin-user-item h5 {
    line-height: 1.2;
    margin: 0 0 5px;
}

.admin-user-item .user-role {
    font-weight: 600;
}

.admin-user-action {
    border-bottom: 1px solid #E1E1E1;
    padding-top: 20px;
    padding-bottom: 20px;
}

.admin-user-item.for-employer .image {
    width: 200px;
    margin: 0 auto 15px;
    border-radius: 0;
    border: 1px double #E6E6E6;
    padding: 10px 20px;
    background: #F7FCFC;
}

ul.admin-user-menu {
    padding: 20px;
    margin-top: -10px;
}

ul.admin-user-menu li {
    border-bottom: 1px dotted #E1E1E1;
}

ul.admin-user-menu li a {
    display: block;
    font-weight: 400;
    color: #939393;
    line-height: 1.2;
    margin: 12px 0;
    position: relative;
    padding-left: 20px;
    font-size: 13px;
    letter-spacing: 1px;
}

ul.admin-user-menu li a i {
    position: absolute;
    top: 1px;
    left: 0;
}

ul.admin-user-menu li a:hover {
    color: #2991A2;
    padding-left: 25px;
}

ul.admin-user-menu li.active a {
    font-weight: 600;
    color: #33B6CB;
}

.admin-section-title {
    border-bottom: 1px solid #CCCCCC;
    margin: 0 0 30px;
    font-weight: 600;
    padding-bottom: 24px;
}

.admin-section-title h2 {
    line-height: 1.2;
    margin-bottom: 15px;
    text-transform: lowercase;
    font-size: 34px;
    color: #656565;
}

.admin-section-title p {
    margin-top: 15px;
    font-size: 17px;
    font-weight: 400px;
    letter-spacing: 0.5px;
}

.admin-empty-dashboard {
    background: #EDF2F2;
    border-radius: 3px;
    text-align: center;
    padding: 200px 30px;
    margin: 40px 0 20px;
}

.admin-empty-dashboard .icon {
    width: 80px;
    height: 80px;
    line-height: 80px;
    font-size: 47px;
    color: #FFF;
    background: #33B6CB;
    border-radius: 50%;
    margin: 0 auto;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {}

@media only screen and (max-width: 767px) {
    .admin-sidebar {
        margin-top: -30px;
        padding-top: 30px;
        padding-bottom: 10px;
        margin-bottom: 30px;
    }
}

@media (max-width: 479px) {}


/**
 * Pricing
*/

.pricing-wrapper .GridLex-gap-30-wrappper {}

.pricing-item {
    margin: 30px 0 10px;
    width: 100%;
    border: 1px solid #CCC;
    border-radius: 3px;
    background: #EDF2F2;
    border-top: 5px solid #20262F;
    position: relative;
}

.pricing-item-best-label {
    position: absolute;
    top: 0;
    right: 0;
    font-size: 12px;
    line-height: 1;
    letter-spacing: 1.5px;
    width: 0px;
}

.pricing-item-best-label:before {
    content: "";
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 80px 80px 0;
    border-color: transparent #33B6CB transparent transparent;
    position: absolute;
    top: 0;
    right: 0;
}

.pricing-item-best-label span {
    text-align: center;
    color: #FFF;
    z-index: 1;
    display: block;
    -ms-transform: rotate(-45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    position: absolute;
    top: 15px;
    right: 5px;
    text-transform: uppercase;
    font-size: 10px;
}

.pricing-item.best {
    border-color: #33B6CB;
    padding: 30px 0 0;
    margin: 0;
}

.pricing-item-header {
    font-size: 12px;
    padding: 30px 25px;
    line-height: 1.2;
}

.pricing-item-header h4 {
    font-weight: 700;
    letter-spacing: 0.5px;
    line-height: 1;
    margin: 30px 0 5px;
    text-transform: capitalize;
}

.pricing-item-price {
    text-align: right;
    font-size: 13px;
}

.pricing-item-price span {
    display: block;
    font-size: 44px;
    font-weight: 700;
    color: #333;
}

.pricing-item-price span small {
    font-size: 24px;
    font-weight: 600;
    margin-right: 2px;
}

.pricing-item-content {
    padding: 0 25px 30px;
}

ul.pricing-item-list li {
    position: relative;
    padding-left: 30px;
    margin-bottom: 7px;
}

ul.pricing-item-list li i {
    position: absolute;
    top: 0;
    left: 2px;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {
    .pricing-item.best {
        border-color: #33B6CB;
        margin: 20px 30px 0;
    }
}

@media only screen and (max-width: 767px) {}

@media (max-width: 479px) {}


/**
 * Contact Us
 */

.contact-form-wrapper .help-block {
    line-height: 1.2;
    font-size: 12px;
}

.contact-text-featured-item .content p {}

.contact-social a {
    margin-right: 5px;
}

ul.contact-list {
    margin-top: 30px;
}

ul.contact-list li {
    line-height: 1;
    margin: 0 0 25px;
}

ul.contact-list li .icon {
    width: 20px;
    float: left;
}

ul.contact-list li .content {
    margin-left: 20px;
}

ul.contact-list li h6 {
    line-height: 1;
    margin: 0 0 10px;
}

ul.address-list li {
    margin: 0;
    position: relative;
    padding-left: 15px;
    line-height: 1.4;
}

ul.address-list li + li {
    margin-top: 25px;
}

ul.address-list li a {
    font-weight: 400;
}

ul.address-list li h5 {
    line-height: 1.2;
    margin: 0 0 10px;
}

ul.address-list li > i {
    position: absolute;
    top: 0;
    left: 0;
}

.contact-map .infoBox {
    background: #fff!important;
    border: 1px solid #33B6CB;
    border-radius: 3px;
    font-size: 14px;
    line-height: 1.2;
    width: 120px!important;
    margin-left: -60px;
    padding: 10px;
    text-align: center;
}

.contact-map .infoBox:after {
    top: 100%;
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-top-color: #33B6CB;
    border-width: 10px;
    margin-left: -10px;
}

.contact-map .infoBox > img {
    height: 16px;
    width: 16px;
    overflow: hidden;
    position: absolute!important;
    top: -8px;
    right: -8px;
    display: block;
    background: #FFF;
    border-radius: 50%;
    border: 1px solid #FFF;
}

.contact-map .infoBox > img:hover {}

.contact-map .infoBox h4,
.contact-map .infoBox h5,
.contact-map .infoBox h6 {
    margin: 0;
    line-height: 1;
}

.contact-map .infoBox #infobox {
    position: relative
}

.contact-map.shorter-infobox .infoBox {
    width: 80px!important;
    margin-left: -40px;
}

.infobox-wrapper {
    display: none
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {
    ul.address-list li {
        padding-left: 0;
    }
}

@media only screen and (max-width: 767px) {}

@media (max-width: 479px) {}


/**
 * Faq
 */

.faq-wrapper {
    padding-left: 10px;
}

.faq-wrapper h3 {
    margin: 0 0 25px;
}

.faq-wrapper h1:first-child,
.faq-wrapper h2:first-child,
.faq-wrapper h3:first-child,
.faq-wrapper h4:first-child {
    margin-top: 0;
}

.faq-section {
    border-bottom: 1px solid #E3E3E3;
    margin: 0 0 40px;
}

.faq-section h4 {
    margin: 8px 0 0;
}

.faq-section .panel-body {
    padding-top: 0;
    padding-bottom: 5px;
}

.faq-thread {
    border-bottom: 1px solid #E5E9EA;
    padding-bottom: 30px;
    margin-bottom: 40px;
}

.faq-thread ul {
    list-style: disc !important;
    margin-left: 20px !important;
}

.faq-thread ul {
    margin-left: 15px;
}

.faq-thread ol {
    list-style: decimal !important;
    margin-left: 20px !important;
}

.faq-thread ol ol {
    margin-left: 15px;
}

.panel-group.bootstarp-accordion .faq-thread {
    border-bottom: 0;
    padding-bottom: 15px;
    margin-bottom: 0;
}

.alt-no-bb .faq-section {
    border-bottom: 0;
    margin: 0 0 40px;
}

.faq-wrapper.mmt {
    margin-top: -5px;
}

.faq-wrapper .panel {
    margin-bottom: 5px;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {}

@media only screen and (max-width: 767px) {
    .faq-wrapper {
        padding-left: 0;
    }
}

@media (max-width: 479px) {}


/**
 * Static Page
 */

.for-static-page .sidebar-module {
    margin-right: 30px;
}

ul.static-page-menu li a {
    display: block;
    color: #636363;
    padding: 8px 20px;
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    line-height: 1;
    padding-left: 0;
    border-left: 4px solid #FFF !important;
    border-right: 4px solid #FFF;
    margin-right: -4px;
    margin-left: -4px;
    margin-bottom: 1px;
    font-size: 12px;
}

ul.static-page-menu li a:hover,
ul.static-page-menu li.active a {
    border-right: 4px solid #F56961;
    color: #F56961;
}

.static-wrapper h1:first-child,
.static-wrapper h2:first-child,
.static-wrapper h3:first-child,
.static-wrapper h4:first-child,
.static-wrapper h5:first-child,
.static-wrapper h6:first-child {
    margin-top: 0;
}

.static-wrapper {
    padding-left: 10px;
}

.static-wrapper ul,
.static-wrapper ol {
    list-style: disc;
    margin-left: 20px;
    line-height: 25px;
}

.static-wrapper ul li,
.static-wrapper ol li {
    margin-bottom: 7px;
}

.static-wrapper ul ul,
.static-wrapper ol ol {
    margin-top: 7px;
}

.static-wrapper > ul,
.static-wrapper > ol {
    margin-bottom: 15px;
}

.static-wrapper ol {
    list-style: decimal;
}

.static-wrapper hr {
    margin-top: 30px;
    margin-bottom: 40px;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {
    .for-static-page .sidebar-module {
        margin-right: 15px;
    }
}

@media only screen and (max-width: 767px) {
    .for-static-page .sidebar-module {
        margin-right: 0;
    }
    .static-wrapper {
        padding-left: 0;
    }
}

@media (max-width: 479px) {}


/**
 * Login and Register
 */

.login-box-wrapper .modal-header,
.login-box-wrapper .modal-footer {
    background: #EEE;
}

.login-box-wrapper .modal-body {
    padding: 25px 25px 20px;
}

.login-box-wrapper .modal-title {
    line-height: 1;
    margin: 0;
    text-transform: lowercase;
    font-weight: 700;
}

.login-modal-or {
    margin: 45px 0 25px;
    text-align: center;
    font-weight: 600;
}

.login-modal-or > div {
    border-top: 1px solid #DDD;
    position: relative;
    height: 14px;
}

.login-modal-or > div > span {
    display: block;
    width: 40px;
    height: 40px;
    background: red;
    border-radius: 50%;
    line-height: 38px;
    font-size: 10px;
    letter-spacing: 1px;
    position: absolute;
    top: 0;
    left: 50%;
    margin-left: -20px;
    margin-top: -20px;
    text-transform: uppercase;
    border: 1px solid #DDD;
    background: #FFF;
}

.login-box-link-action {
    text-align: right;
}

.login-box-box-action {
    margin-top: 10px;
}

.btn-facebook,
.btn-google-plus {
    color: #FFF !important;
}

.btn-facebook {
    background: #3b5998;
}

.btn-google-plus {
    background: #d34836;
}

.btn-facebook:hover,
.btn-google-plus:hover {
    opacity: 0.8;
}

.login-container-wrapper {
    padding: 70px 0;
}

.login-container-wrapper .login-box-wrapper {
    border: 1px solid #DDD;
    border-radius: 3px;
    -webkit-box-shadow: 0px 0px 11px -1px rgba(0, 0, 0, 0.16);
    -moz-box-shadow: 0px 0px 11px -1px rgba(0, 0, 0, 0.16);
    box-shadow: 0px 0px 11px -1px rgba(0, 0, 0, 0.16);
}

.modal.login-box-wrapper {
    width: 600px !important;
    margin-left: -300px !important;
}

@media only screen and (max-width: 1199px) {}

@media only screen and (max-width: 991px) {
    .login-modal-or {
        margin-top: 80px;
    }
}

@media only screen and (max-width: 767px) {
    .modal.login-box-wrapper {
        width: auto !important;
        margin-left: auto !important;
    }
    .login-box-link-action {
        text-align: left;
        margin-top: 10px;
    }
    .login-modal-or {
        margin-top: 45px;
    }
}

@media (max-width: 479px) {}	
</style>

</html>