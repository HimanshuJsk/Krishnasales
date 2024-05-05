<html>

<head>
	<title>Home</title>
	<!--Css-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- font-awesome -->
	<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--Favicon-->
	<link rel="icon" type="image/x-icon" href="img/nav/kss2.png">
	<!--Script-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<!--Angular js-->
	<script src="ang.js"></script>
</head>
<style>
	.last {
		color: white;
		border: 2px double blue;
		background-color: black;
		font-size: 18px;
	}

	.login_btn {
		opacity: 0.5;
	}

	.inner {
		overflow: hidden;
	}

	.inner img {
		transition: all 1.2s ease;
	}

	.inner:hover img {
		transform: scale(1.2);
	}

	/*footer*/
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

	body {
		line-height: 1.5;
		font-family: 'Poppins', sans-serif;
	}

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	.container {
		max-width: 1170px;
	}

	.row {
		display: flex;
		flex-wrap: wrap;
	}

	ul {
		list-style: none;
	}

	.footer {
		background-color: #24262b;
		padding: 70px 0;
	}

	.footer-col {
		width: 25%;
		padding: 0 15px;
		font-family: Helvetica, "Trebuchet MS", Verdana, sans-serif;
	}
	* footer p{
			font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; 
			text-decoration: none;
		}
	.footer-col h4 {
		font-size: 18px;
		color: #ffffff;
		text-transform: capitalize;
		margin-bottom: 35px;
		font-weight: 500;
		position: relative;
	}

	.footer-col h4::before {
		content: '';
		position: absolute;
		left: 0;
		bottom: -10px;
		background-color: #e91e63;
		height: 2px;
		box-sizing: border-box;
		width: 50px;
	}

	.footer-col h6{
		line-height:20px;
	}

	.footer-col ul li:not(:last-child) {
		margin-bottom: 10px;
	}

	.footer-col ul li a {
		font-size: 16px;
		text-transform: capitalize;
		color: #ffffff;
		text-decoration: none;
		font-weight: 300;
		color: #bbbbbb;
		display: block;
		transition: all 0.3s ease;
	}

	.footer-col ul li a:hover {
		color: #ffffff;
		padding-left: 8px;
	}

	/*responsive*/
	@media(max-width: 767px) {
		.footer-col {
			width: 50%;
			margin-bottom: 30px;
		}
	}

	@media(max-width: 574px) {
		.footer-col {
			width: 100%;
		}
	}

	.social-icons {
		list-style: none;
		display: flex;
		justify-content: center;
		padding: 15px 0;
		margin-top: 10px;
		margin-bottom: 20px;

	}

	.social-icons li {
		margin: 0 30px;
		width: 50px;
		height: 50px;
		background: #f0ecec;
		border-radius: 50%;
		transition: var(--transition);
		cursor: pointer;
		margin-top: 5px;
		box-shadow: 1px 2px 2px 2px #dcdde1;
	}

	.social-icons li i {
		transition: all 0.1s linear;
	}

	.social-icons li:hover {
		transform: scale(1.2);
		background: #fff;
	}

	.fa-whatsapp:hover {
		background: white;
		color: rgb(2, 248, 2);
	}

	.fa-facebook:hover {
		background: white;
		color: rgb(2, 6, 247);
	}

	.fa-instagram:hover {
		background: white;
		color: #e84393;
	}

	.fa-youtube:hover {
		background: white;
		color: #FF0000;
	}
    .dropdown-item:hover{
        color:white;
        background:red;
        transition: 0.5s;
    }
</style>

<body ng-app="">
	<!--start navbar -->
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark " style="background-color:black;">
		<div class="container-fluid">
			<a href="index.php"><img src="img/nav/kss2.png" alt="klogopng" style="height: 60px;"></a>
			<button class="navbar-toggler " type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mb-2 mb-lg-0">
					<li class="nav-item Active">
						<a class="nav-link  " aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="l1.php">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="l1.php">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="l1.php">Service</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="l1.php">Certificate</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="l1.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="adminlogin.php">Admin</a>
					</li>
					<li class="nav-item dropdown mr-3">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          					<i class="fa-solid fa-user fa-xl"></i>
        				</a>
        				<div class="dropdown-menu mr-5" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="s1.php">sign up</a>
							<a class="dropdown-item" href="login.php">Login</a>
						</div>
					</li>
				</ul>
			</div>
	</nav>
	<!--end navbar--> 
	<div id="mycarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active" data-interval="1000">
				<img src="img/home/kss2.png" class="d-block w-100" alt="" style="height: 768;">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/w1.jpg" class="d-block w-100" alt="" style="" width="800">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/w2.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/w3.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/w5.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/w4.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/gijer2.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/gijer3.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/gijer1.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/gj12.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/gj13.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/gj14.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/gj15.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/gj16.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/home/gj17.jpg" class="d-block w-100" alt="" style="">
			</div>
		</div>
	</div>
	<div class="container my-4 my-5">
		<div class="row featurette d-flex justify-contect-center align-items-center" style="border: double black;">
			<div class="col-md-7">
				<strong class="d-inline-block mb-2 text-primary">World</strong>
				<h3 class="mb-0">Krishna Sales & Service Detail's</h3>
				<div class="mb-1 text-muted">Aug 26</div>
				<p class="mb-auto">Krishna Sales & Service Best Service of Water Filters, Gas Geyser & Gharghanti.</p>
				<a href="#" class="stretched-link">Continue reading</a>
			</div>
			<div class="col-md-5">
				<div class="inner" ng-init="myvar = 'img/home/kss2.png'">
					<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
						height="500" ng-src="{{myvar}}" alt="" srcset="">
				</div>
			</div>
		</div>
		<br>
		<div class="row featurette d-flex justify-contect-center align-items-center" style="border: double black;">
			<div class="col-md-7 order-md-2">
				<strong class="d-inline-block mb-2 text-success">World</strong>
				<h3 class="mb-0">Jagruti Company Detail's</h3>
				<div class="mb-1 text-muted">Nov 26</div>
				<p class="mb-auto">The Makers of India’s No.1 Atta Chakki.</p>
				<a href="#" class="stretched-link">Continue reading</a>
			</div>
			<div class="col-md-5 order-md-1">
				<div class="inner" ng-init="myvar1 = 'img/home/jagruti1.jpg'">
					<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400"
						height="500" ng-src="{{myvar1}}" alt="" srcset="">
				</div>
			</div>
		</div>
	</div>
	<!--start footer-->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col">
					<h4>Quick links</h4>
					<ul>
            <li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="service.php">Service</a></li>
						<li><a href="certificate.php">Certificate</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Shooping</h4>
					<ul>
						<li><a href="#">Pipispon</a></li>
						<li><a href="#">Membran</a></li>
            <li><a href="#">Booster Pump</a></li>
						<li><a href="#">All RO & Geyser Spar</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Contact</h4>
					<h6 style="color: white;">Bipin Parmar</h6>
					<h6 style="color: white;"><p class="footloc">🧭 D - 102, 
						Varniraj Aparment,
							<br>Near Aarti Agarbati, L.H.Road,<br> Varachha, Surat. </p></h6>
              		<h6 style="color: white;">
					<p>📱 <a href="tel:98253-17045" style="color: white;">98253-17045</p></a></h6>
					<br>
				</div>
				<div class="footer-col"> 
					<ul>
						<li>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.706425268245!2d72.84779237431123!3d21.20381818174476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04fb96892614b%3A0x578b012b7600e51b!2sVarniraj%20Apartment!5e0!3m2!1sen!2sin!4v1714716104211!5m2!1sen!2sin" width="215" height="200" style="border:0;" allowfullscreen="" loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"></iframe>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div>
			<ul class="social-icons">
				<li class="flex">
					<a href="https://api.whatsapp.com/send?phone=9825317045&text=Hi" style="color:black;"><i
							class="fa fa-whatsapp fa-2x" style="margin-left: 10px; margin-top: 10px;"></i></a>
				</li>
				<li class="flex">
					<a href="https://www.facebook.com/bipin.parmar.16568?mibextid=ZbWKwL" style="color:black;"><i
							class="fa fa-facebook fa-2x" style="margin-left: 15px; margin-top: 10px;"></i></a>
				</li>
				<li class="insta">
					<a href="https://www.instagram.com/Krishna_sales_service/?igshid=ZDdkNTZiNTM%3D"
						style="color:black;"><i class="fa fa-instagram fa-2x"
							style="margin-left: 11px; margin-top: 9px;"></i></a>
				</li>
				<li class="yout">
					<a href="#" style="color:black;"><i class="fa fa-youtube fa-2x"
							style="margin-left: 7px; margin-top: 10px;"></i></a>
				</li>
			</ul>
		</div>
	</footer>
	<footer>
		<p style="color:white; text-align: center; background-color: rgb(66, 66, 66); padding: 15px 0;">&copy; Copyright
      2023 <a href="index.php" style="color: white;">Kss</a></p>
	</footer>
	<!--end footer-->
</body>

</html>