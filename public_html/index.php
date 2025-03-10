<?php
 
session_start();
$_SESSION['rdurl'] = $_SERVER['REQUEST_URI'];

if(isset($_POST['submit']))
{	
	$name 	= 	$_POST['name'];
	$email 	= 	$_POST['email'];
	$phone 	= 	$_POST['phone'];
	$website= 	$_POST['website'];
	
	$to      = 	"ajay@qsync.in"; 
	$subject =	"QSYNC Enquiry";	
	$msg	=	"Name: $name\n" ."Email: $email\n" ."Mobile: $phone\n" . "Website: $website\n";
					
	if(mail($to, $subject, $msg, 'From: Power Culture Enquiry Form <'.$email.'>')) 
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
        <title>Welcome to Power Culture</title>
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
         
            <!-- Banner Section Start -->
            <div class="rs-banner main-home pt-100 pb-100  md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 pr-140 md-mb-140 md-pr-15">
                            <div class="content-wrap">
                                <h1 class="it-title">Your Trusted Provider of IT Hardware and Power Solutions</h1>
                                <div class="description">
                                    <p class="desc">
                                    Power Culture specializes in delivering cutting-edge IT hardware and power solutions, ensuring reliability and efficiency for your critical operations. Our expertise spans UPS, AI Data Centers, Precision Air Conditioning, and advanced battery technologies.
                                    </p>
                                </div>
                                <!-- <div class="rs-videos">
                                    <div class="animate-border main-home">
                                        <a class="popup-border popup-videos">
                                            <img src="assets/images/Hardware.jpg" alt="Video Thumbnail" />
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 pl-70 md-pl-15">
                            <div class="rs-contact">
                                <div class="contact-wrap">
                                   <div class="content-part mb-25">
                                       <h2 class="title mb-15">Let's Talk</h2>
                                       <p class="desc">We are here to help you 24/7 with experts</p>
                                   </div>
                                    <!-- <?php if($success_msg) { ?>
									<p style="color:green;"><?php echo $success_msg ?></p> 
									<?php } ?>
									<?php if($error_msg) { ?>
									<p style="color:red;"><?php echo $error_msg ?></p>
									<?php } ?> -->
                                    <form method="post" action="">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-lg-12 mb-15">
                                                    <input class="from-control" type="text" id="appointment_name" name="name" placeholder="Name" required>
                                                </div> 
                                                <div class="col-lg-12 mb-15">
                                                    <input class="from-control" type="email" id="appointment_email" name="email" placeholder="E-Mail" required>
                                                </div>   
                                                <div class="col-lg-12 mb-15">
                                                    <input class="from-control" maxlength="10" minlength="10" type="text" id="appointment_phone" name="phone" placeholder="Phone Number" required>
                                                </div>   
                                                <div class="col-lg-12 mb-25">
                                                    <input class="from-control" type="text" id="appointment_company" name="company" placeholder="Your Company Name" required>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <input name="submit" class="submit-btn" type="submit" value="Submit Now">
                                            </div>
                                        </fieldset>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style1 pt-130 pb-50 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                    <div class="rs-videos">
                        <div class="animate-border main-home">
                            <img src="assets/images/STS.png" alt="Static Image" />
                        </div>
                    </div>
                        <div class="col-lg-7 col-md-12 pl-40 md-pl-15 md-pt-500 sm-pt-0">
                            <div class="sec-title mb-30">
                                <div class="sub-text">Welcome To Power Culture</div>
                                <h2 class="title pb-20">
                                    IT Hardware, Power Solutions, and Auditing Services
                                </h2>
                                <div style="text-align:justify;">
                                Power Culture is a leading technology company specializing in providing innovative and reliable power and infrastructure solutions. 
                                <br>Our expertise spans across critical areas such as Uninterruptible Power Supply (UPS), AI Data Centers, Precision Air Conditioning, 
                                Server Racks, KVM & rPDU, STS & ATS, and advanced battery technologies including Lithium Ion and Sealed Maintenance Free (SMF) Batteries. 
                                <br>Our commitment to excellence and customer satisfaction drives us to deliver high-quality products and services that ensure operational efficiency, reliability, and sustainability.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Services Section Start -->
            <div class="rs-services main-home gray-color pt-120 pb-120 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <h2 class="title">
                            We Offer Comprehensive IT Hardware and Power Solutions
                        </h2>
                        <div class="heading-line"></div>
                    </div>
                    <div class="row" style="text-align:justify;">
                        <div class="col-lg-4 col-md-6 mb-25">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="assets/images/industrial_ups.png" alt=""> 
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="ups">Industrial UPS</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                           Testing is treated as an integral part of any software development lifecycle and is an essential part of the development phase.
                                       </p>
                                   </div>
                               </div>
                           </div> 
                        </div>
                        <div class="col-lg-4 col-md-6 mb-25">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="assets/images/DataCenter.png" alt=""> 
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="datacenter">Data Center</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                           If you are looking for a cross platform, dynamic and highly secure software then we have the right kind of solution for you.
                                       </p>
                                   </div>
                               </div>
                           </div> 
                        </div>
                        <div class="col-lg-4 col-md-6 mb-25">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="assets/images/Industrial_AC.png" alt=""> 
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="AC">Perpetual AC</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                           .Net technologies framework and assist your enterprise in building web based applications and robust websites.
                                       </p>
                                   </div>
                               </div>
                           </div> 
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-25">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="assets/images/server_rack.png" alt=""> 
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="server_rack">Server Rack</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                           In today’s competitive world, small to large organisations are finding it tough to keep up with the demands of customers and specific requirements anytime, anywhere.
                                       </p>
                                   </div>
                               </div>
                           </div> 
                        </div>
                        <div class="col-lg-4 col-md-6 sm-mb-25">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="assets/images/lithiumion_Battery.png" alt=""> 
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="Lithium Batter">Lithium-Ion Battery</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                           Some of the most popular and powerful ERP packages that are mostly used in high end enterprises. We have technical expertise in ABAP, CRM and more.
                                       </p>
                                   </div>
                               </div>
                           </div> 
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="assets/images/STS.png" alt=""> 
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="STS">STS</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                           Data warehousing strategies to maintain and store data. We also process recruitment for experts in ETL, Informatica, Congos, Business Intelligence and Teradata.​
                                       </p>
                                   </div>
                               </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-25">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="assets/images/ATS.png" alt=""> 
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="ATS">ATS</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                           In today’s competitive world, small to large organisations are finding it tough to keep up with the demands of customers and specific requirements anytime, anywhere.
                                       </p>
                                   </div>
                               </div>
                           </div> 
                        </div>
                        <div class="col-lg-4 col-md-6 sm-mb-25">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="assets/images/energy_audit.png" alt=""> 
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="energy_audit">Energy Audit</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                           Some of the most popular and powerful ERP packages that are mostly used in high end enterprises. We have technical expertise in ABAP, CRM and more.
                                       </p>
                                   </div>
                               </div>
                           </div> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->
         
            <!-- Call Us Section Start -->
            <div class="rs-call-us bg1 pt-120 md-pt-70 md-pb-80">                
                <div class="container">
                    <div class="row rs-vertical-middle">
                        <div class="col-lg-6">
                            <div class="image-part">
                              <img src="assets/images/call-us/contact-here.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rs-contact-box text-center">
                                <div class="sec-title3">
                                    
                                    <p class="desc">Have questions or need assistance? Get in touch with us today at mithun@powerculture.in</p>
                                </div>
                                <div class="btn-part mt-40">
                                    <a class="readon lets-talk" href="contact.php">Let's Talk</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div>
            <!-- Call Us Section Start -->

            <!-- Counter Section Start -->
            <!-- <div class="rs-counter">
                 <div class="counter-top-area text-center bg2">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="counter-list">
                                 <div class="counter-text">
                                     <div class="count-number">
                                         <span class="rs-count k">80</span>
                                     </div>
                                     <h3 class="title">Happy Clients</h3>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4 sm-mt-40 sm-mb-40">
                             <div class="counter-list">
                                 <div class="counter-text">
                                     <div class="count-number">
                                         <span class="rs-count plus">50</span>
                                     </div>
                                     <h3 class="title">Companies</h3>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="counter-list">
                                 <div class="counter-text">
                                     <div class="count-number">
                                         <span class="rs-count plus">230</span>
                                     </div>
                                     <h3 class="title">Projects Done</h3>
                                 </div>
                             </div>
                         </div>     
                     </div> 
                 </div>
            </div> -->
            <!-- Counter Section End -->

            <!-- Process Section Start -->
            <!-- <div class="rs-process pt-180 pb-120 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4  md-mb-40">
                            <div class="process-wrap bg3">
                                <div class="sec-title mb-30">
                                    <div class="sub-text new">Working Process</div>
                                    <h2 class="title white-color">
                                        Our Working Process -  How We Work For Our Customers
                                    </h2>
                                </div>
                                <div class="btn-part mt-40">
                                    <a class="readon learn-more contact-us" href="contact">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pl-30 md-pl-15">
                            <div class="row" style="text-align:justify;">
                                <div class="col-md-6 mb-40">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                1.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title"> Discovery</h3>
                                            </div>
                                            <p class="number-txt">The goal of project initiation is to broadly define the project. This process usually begins with a business case or project charter.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-40">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                2.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Planning</h3>
                                            </div>
                                            <p class="number-txt">The planning phase is key to successful project management and focuses on developing a roadmap for the team to follow.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 sm-mb-40">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                3.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Execute</h3>
                                            </div>
                                            <p class="number-txt">This phase begins with a meeting, is marked by the onset of status reports and updates, and transitions into performance and monitoring as the project progresses.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                4.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Deliver</h3>
                                            </div>
                                            <p class="number-txt">Once a project is complete, the team must formally close it. they will need to collect all project documents and deliverables and store them in a single place.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Process Section End -->

            <!-- Project Section Start -->
            <!-- <div class="rs-project bg5 style1 pt-110 md-pt-80">
                <div class="container">
                   <div class="sec-title2 text-center mb-45 md-mb-30">
                       <span class="sub-text white-color">Services</span>
                       <h2 class="title white-color">
                          We Are Offering All Kinds of IT Solutions Services
                       </h2>                       
                   </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                        <div class="project-item">
                            <div class="project-img">
                                <a href="consulting"><img src="assets/images/services/consulting1.jpg" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title" style="margin-bottom:0px;"><a href="consulting">Consulting</a></h3>
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="project-img">
                                <a href="it-staffing"><img src="assets/images/services/itstaffing.jpg" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title" style="margin-bottom:0px;"><a href="it-staffing">It Staffing</a></h3>
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="project-img">
                                <a href="product-development"><img src="assets/images/services/specialties1.jpg" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title" style="margin-bottom:0px;"><a href="product-development">Product Development</a></h3>
                            </div>
                        </div>
						<div class="project-item">
                            <div class="project-img">
                                <a href="corporate-training"><img src="assets/images/services/corporate_training.jpg" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title" style="margin-bottom:0px;"><a href="corporate-training">Corporate Training</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Project Section End -->

            <!-- Testimonial Section Start -->
            <!-- <div class="rs-testimonial main-home gray-color pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                  <div class="sec-title2 text-center mb-45">
                      <span class="sub-text">Testimonial</span>
                      <h2 class="title testi-title">
                         What Saying Our Customers
                      </h2>
                      <div class="heading-line">

                      </div>
                  </div>
                    <div class="rs-carousel owl-carousel" 
                        data-loop="true" 
                        data-items="3" 
                        data-margin="30" 
                        data-autoplay="true" 
                        data-hoverpause="true" 
                        data-autoplay-timeout="5000" 
                        data-smart-speed="800" 
                        data-dots="true" 
                        data-nav="false" 
                        data-nav-speed="false" 

                        data-md-device="3" 
                        data-md-device-nav="false" 
                        data-md-device-dots="true" 
                        data-center-mode="false"

                        data-ipad-device2="1" 
                        data-ipad-device-nav2="false" 
                        data-ipad-device-dots2="true"

                        data-ipad-device="2" 
                        data-ipad-device-nav="false" 
                        data-ipad-device-dots="true" 

                        data-mobile-device="1" 
                        data-mobile-device-nav="false" 
                        data-mobile-device-dots="false">
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/quote2.png" alt="">QSync Software Pvt. Ltd. Great consultancy services provided and made our wishes comes true! Keep rocking and provide good services for all the hidden talented employees..</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/logo.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Parkavi P</a>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/quote2.png" alt="">Great place to start your career, Very supportive management, Quick response from the management if we have any concerns.Good to choose this platform.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/logo.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Shireesha A</a>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/quote2.png" alt="">It was great working with QSync Software Pvt. Ltd. for a major MNC. Very transparent process and smooth affairs kept me happy as an employee. I wish them all the luck.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/logo.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Anubhav Joshi</a>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/quote2.png" alt="">"Good support from the management. Good place to work and learning .Good environment and policies are good for customers. & Amazing Experience to be a part of Make Positive"</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/logo.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Santhosh J</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Testimonial Section End -->

            <!-- Partner Start -->
            <!-- <div class="rs-partner pt-80 pb-70">
                <div class="container">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/1.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/2.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/3.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/3.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                             <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/4.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/4.png" alt="">
                                </a>
                            </div> -->
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/5.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/5.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/6.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/6.png" alt="">
                                </a>
                            </div>
                        </div>
						<div class="partner-item">
                            <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/7.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/7.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/8.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/8.png" alt="">
                                </a>
                            </div>
                        </div>						
						<div class="partner-item">
                            <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/19.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/19.png" alt="">
                                </a>
                            </div>
                        </div>	
						<div class="partner-item">
                            <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/20.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/20.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/11.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/11.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/9.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/9.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/10.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/10.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="">
                                    <img class="hover-logo" src="assets/images/partner/12.png" alt="">
                                    <img class="main-logo" src="assets/images/partner/12.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner End -->
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