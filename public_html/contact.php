<?php 
session_start();
$_SESSION['rdurl'] = $_SERVER['REQUEST_URI'];

if(isset($_POST['submit']))
{	
	$name 	= 	$_POST['name'];
	$email 	= 	$_POST['email'];
	$phone 	= 	$_POST['phone'];
	$website= 	$_POST['website'];
	$message= 	$_POST['message'];
	
	$to      = 	"info@qsync.in"; 
	$subject =	"QSYNC Enquiry";	
	$msg	=	"Name: $name\n" ."Email: $email\n" ."Mobile: $phone\n" . "Website: $website\n" ."Message: $message\n";
					
	if(mail($to, $subject, $msg, 'From: QSYNC Enquiry Form <'.$email.'>')) 
	{
		$success_msg = 'Your Message Has Been Successfully Sent. We will send you a reply as soon as possible.';		
	} 
	else 
	{
		$error_msg = "Problem in Sending Mail.";
	}
}
?>
<!DOCTYPE html>
<html lang="zxx"> 
    
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Contact Us</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
        <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/rsmenu-main.css">
        <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
		
    </head>
    <body class="defult-home">
             
		<!-- Main content Start -->
        <div class="main-content">
            <?php include("header.php"); ?>
         
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs" style="background: url(assets/images/contact.jpg);">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Contact Us</h1>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Contact Section Start -->
            <div class="rs-contact pt-120 md-pt-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 md-mb-60">
                           <div class="contact-box">
                                <div class="sec-title mb-45">
                                    <span class="sub-text new-text white-color">Let's Talk</span>
                                    <h2 class="title white-color">Speak With Expert Engineers.</h2>
                                </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-envelope"></i>
                                   </div>
                                   <div class="address-text">
                                        <span class="label">Email:</span>
                                        <a href="mail:info@qsync.in">info@qsync.in</a>
                                   </div>
                               </div>
                               <div class="address-box">
                                   <div class="address-icon">
                                       <i class="fa fa-map-marker"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Address:</span>
                                       <div class="desc">									#334, 4th Floor, 27th Main Road,1st Sector, HSR Layout, Bengaluru.560102</div>
                                   </div>
                               </div>
                           </div>
                        </div> 
                        <div class="col-lg-8 pl-70 md-pl-15">
                            <div class="contact-widget">
                               <div class="sec-title2 mb-40">
                                   <span class="sub-text contact mb-15">Get In Touch</span>
                                   <h2 class="title testi-title">Fill The Form Below</h2>
								   <?php if($success_msg) { ?>
									<p style="color:green;"><?php echo $success_msg ?></p> 
									<?php } ?>
									<?php if($error_msg) { ?>
									<p style="color:red;"><?php echo $error_msg ?></p>
									<?php } ?>
                               </div>
                                <form method="post" action="">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required>
                                            </div> 
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="email" id="email" name="email" placeholder="E-Mail" required>
                                            </div>   
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" maxlength="10" minlength="10" type="text" id="phone" name="phone" placeholder="Phone Number" required>
                                            </div>   
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="website" name="website" placeholder="Your Website">
                                            </div>
                                      
                                            <div class="col-lg-12 mb-30">
                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">                                            
                                            <div class="form-group mb-0">
                                                <input name="submit" class="readon learn-more submit" type="submit" value="Submit Now">
                                            </div>
                                        </div> 
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map-canvas pt-120 md-pt-80">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7777.625451325959!2d77.670182!3d12.919755!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac1c4a1b537426f7!2sQsync%20Software%20pvt.ltd...!5e0!3m2!1sen!2sin!4v1656262423787!5m2!1sen!2sin" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
            <!-- Contact Section Start -->

        </div> 
        <!-- Main content End -->
     
        <!-- Footer Start -->
        <?php include("footer.php"); ?>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <script src="assets/js/modernizr-2.8.3.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/rsmenu-main.js"></script> 
        <script src="assets/js/jquery.nav.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/skill.bars.jquery.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script> 
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/swiper.min.js"></script>   
        <script src="assets/js/particles.min.js"></script>  
        <script src="assets/js/jquery.magnific-popup.min.js"></script>      
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/pointer.js"></script>
        <script src="assets/js/contact.form.js"></script>
        <script src="assets/js/appointment.form.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

</html>