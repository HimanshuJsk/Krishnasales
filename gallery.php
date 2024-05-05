<html>

<head>
    <title>Gallery</title>
    <!--Css-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Font-awesome -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="img/nav/kss2.png">
    <!--Script-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
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
    }

    .footer-col h4 {
        font-size: 18px;
        color: #ffffff;
        text-transform: capitalize;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;
    }
    * footer h6{
			font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; 
			text-decoration: none;
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
        color: rgb(54, 250, 4);
    }

    .fa-facebook:hover {
        background: white;
        color: rgb(28, 4, 243);
    }

    .fa-instagram:hover {
        background: white;
        color: #e84393;
    }

    .fa-youtube:hover {
        background: white;
        color: #FF0000;
    }

    .flex-container {
        display: flex;
        flex-wrap: nowrap;
        background-color: rgb(255, 255, 255);
    }

    .flex-container>div {
        background-color: white;
        width: 220px;
        height: 150px;
        margin: 5px;
        line-height: 75px;
        font-size: 30px;
    }

    div p {
        position: absolute;
        top: 118px;
        right: -8px;
        color: black;
        font-size: 18px;
        line-height: 25px;
        padding: 4px 12px;
        border-radius: 9px;
    }
</style>

<body>
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
        <div class="container-fluid">
            <a href="index.php"><img src="img/nav/kss2.png" alt="klogopng" style="height: 60px;"></a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about.php">About Us</a>
                    </li>
                    <li class="nav-item Active">
                        <a class="nav-link " href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="service.php">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="certificate.php">Certificate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    <!--end navbar-->
    <div class="container">
        <div class="flex-container"  style="justify-content: center;">
            
            <!--
            <div style="border: double black; border-radius: 10px; position: relative;" ng-controller="mycontrol">
                <div class="inner"><img src="img/gallery/wf33.jpg" width="214px;" height="143px;"
                        style="border-radius: 5px;">
                    <p>Ro Plan, Preser Tank</p>
                </div>
            </div>
            <div style="border: double black; border-radius: 10px; position: relative;">
                <div class="inner"><img src="img/gallery/gg1.jpg" width="210px;" height="143px;"
                        style="border-radius: 5px;">
                    <p>Gas geyser</p>
                </div>
            </div>
            <div style="border: double black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><img src="img/gallery/wf4.jpg" width="150px;" height="140px;"></center>
                    <p>Dolphin</p>
                </div>
            </div>
            <div style="border: double black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><img src="img/gallery/wf2.jpg" width="150px;" height="140px;"></center>
                    <p>Dolphin</p>
                </div>
            </div>
            -->
        </div>
        <div class="flex-container" style="justify-content: center;">
            <div style="border: double black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><img src="img/gallery/gg5.jpg" width="120px;" height="144px;"></center>
                    <p>Gas geyser</p>
                </div>
            </div>
            <div style="border: double black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><img src="img/gallery/wf5.jpg" width="150px;" height="140px;"></center>
                    <p>Dolphin</p>
                </div>
            </div>
            <div style="border: double black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><img src="img/gallery/gg6.jpg" width="110px;" height="144px;"></center>
                    <p>Gas geyser</p>
                </div>
            </div>
            <div style="border: double black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><img src="img/gallery/gg4.jpg" width="110px;" height="144px;"></center>
                    <p>Gas geyser</p>
                </div>
            </div>
        </div>
        <div class="flex-container" style="justify-content: center;">
            <div style="border: double black; border-radius: 10px; height: 200px;">
                <div class="inner"><img src="img/gallery/g1.JPG" width="212px;" height="194px;"
                        style="border-radius: 5px;"></div>
            </div>
            <div style="border: double black; border-radius: 10px; height: 200px;">
                <div class="inner"><img src="img/gallery/g2.JPG" width="212px;" height="194px;"
                        style="border-radius: 5px;"></div>
            </div>
            <div style="border: double black; border-radius: 10px; height: 200px;">
                <div class="inner"><img src="img/gallery/g3.JPG" width="212px;" height="194px;"
                        style="border-radius: 5px;"></div>
            </div>
            <div style="border: double black; border-radius: 10px; height: 200px;">
                <div class="inner"><img src="img/gallery/g4.JPG" width="212px;" height="194px;"
                        style="border-radius: 5px;"></div>
            </div>
        </div>
        <div class="flex-container" style="justify-content: center;">
            <div style="border: double black; border-radius: 10px; height: 200px;">
                <div class="inner"><img src="img/gallery/g6.JPG" width="212px;" height="194px;"
                        style="border-radius: 5px;"></div>
            </div>
            <div style="border: double black; border-radius: 10px; height: 200px;">
                <div class="inner"><img src="img/gallery/g7.JPG" width="212px;" height="194px;"
                        style="border-radius: 5px;"></div>
            </div>
            <div style="border: double black; border-radius: 10px; height: 200px;">
                <div class="inner"><img src="img/gallery/g8.JPG" width="212px;" height="194px;"
                        style="border-radius: 5px;"></div>
            </div>
            <div style="border: double black; border-radius: 10px; height: 200px;">
                <div class="inner"><img src="img/gallery/g9.JPG" width="212px;" height="194px;"
                        style="border-radius: 5px;"></div>
            </div>
        </div>
    </div>
    <br>
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
              		<h6 style="color: white;">
					<h6 style="margin-top:17px;">📱 <a href="tel:98253-17045" style="color: white;">98253-17045</h6></a></h6>
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