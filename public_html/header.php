<?php 
$search = ['/qsync/'];
$pagename = str_replace($search, '', $_SESSION['rdurl']);
?>
	<div class="full-width-header">
	<!--Header Start-->
	<header id="rs-header" class="rs-header">
		<!-- Topbar Area Start -->
		<div class="topbar-area">
			<div class="container">
				<div class="row rs-vertical-middle">
					<div class="col-lg-2">
						<div class="logo-part">
							<a href="index"><img src="assets/images/logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-lg-10 text-right">
					<ul style="display: flex; justify-content: space-between; align-items: center;">
						<li class="contact-part" style="display: flex; align-items: center;">
							<img src="assets/images/phone.gif" alt="Phone Icon" style="width:48px;height:48px;margin-right:10px;"/>
							<span class="contact-info">
							+919538191681
							</span>
						</li>
						<li class="contact-part" style="display: flex; align-items: center;">
							<img src="assets/images/location.gif" alt="Address Icon" style="width:48px;height:48px;margin-right:10px;"/>
							<span class="contact-info">
							1st mark daisy apartment, 1st cross, yashodamma layout,<br>kudlu, Bengaluru. 560068
							</span>
						</li>
						<li class="contact-part" style="display: flex; align-items: center;">
							<img src="assets/images/email.gif" alt="Email Icon" style="width:48px;height:48px;margin-right:10px;"/>
							<span class="contact-info">
							<a href="mailto:mithun@powerculture.in">mithun@powerculture.in</a>
							</span>
						</li>
						</ul>

					</div>
				</div>
			</div>
		</div>
		<!-- Topbar Area End -->
		
		<!-- Menu Start -->
		<div class="menu-area menu-sticky">
			<div class="container">
				<div class="logo-area">
					<a href="index">
						<img class="sticky-logo" src="assets/images/logo.png" alt="logo">
					</a>
				</div>
				<div class="rs-menu-area">
					<div class="main-menu">
						<div class="mobile-menu">
							<a href="index" class="mobile-logo">
								<img src="assets/images/logo.png" alt="logo">
							</a>
							<a href="#" class="rs-menu-toggle rs-menu-toggle-close">
								<i class="fa fa-bars"></i>
							</a>
						</div>
						<nav class="rs-menu">
							<ul class="nav-menu">
								<li class="<?php if(($pagename == 'index') || ($pagename == '')){ ?>current-menu-item<?php } ?>"> 
									<a href="index">Home</a>
								</li>
								<li class="<?php if($pagename == 'about'){ ?>current-menu-item<?php } ?>">
									<a href="about.php">About Us</a>
								</li>
								<li class="menu-item-has-children <?php if(($pagename == 'professionalServices') || ($pagename == 'datecentrebuild')  || ($pagename == 'datacentrerelocate') || ($pagename == 'poweraudit')){ ?>current-menu-item<?php } ?>">
									<a href="#">Services</a>
									<ul class="sub-menu">
										<li class="<?php if($pagename == 'datacentre.php'){ ?>current-menu-item<?php } ?>"><a href="consulting">Professional Services</a></li>
										<li class="<?php if($pagename == 'it-staffing'){ ?>current-menu-item<?php } ?>"><a href="it-staffing">Data Centre Build Services</a></li>
										<li class="<?php if($pagename == 'product-development'){ ?>current-menu-item<?php } ?>"><a href="product-development">Data Centre relocation Services</a></li>
										<li class="<?php if($pagename == 'corporate-training'){ ?>current-menu-item<?php } ?>"><a href="corporate-training">Power Audit</a></li>
									</ul>
								</li>
								<!-- <li class="<?php if($pagename == 'clients'){ ?>current-menu-item<?php } ?>">
									<a href="clients">Clients</a>
								</li> -->
								<li class="<?php if($pagename == 'contact'){ ?>current-menu-item<?php } ?>">
									<a href="contact.php">Contact Us</a>
								</li>
							</ul> <!-- //.nav-menu -->
						</nav>                                        
					</div> <!-- //.main-menu -->                                
				</div>
				<div class="expand-btn-inner search-icon hidden-sticky hidden-md">
					<!-- <div class="toolbar-sl-share">
						<ul class="social">
							<li> 
							  <a href="https://www.facebook.com/qsync3090/" target="_blank"><span><i class="fa fa-facebook"></i></span></a> 
						  </li>
						  <li> 
							  <a href="https://twitter.com/qsyncindia" target="_blank"><span><i class="fa fa-twitter"></i></span></a> 
						  </li>						  						  
						  <li> 
							  <a href="https://www.linkedin.com/in/qsync-software-607326174/" target="_blank"><span><i class="fa fa-linkedin"></i></span></a> 
						  </li>			
						</ul>
					</div> -->
				</div>
			</div>
		</div>
		<!-- Menu End -->
	</header>
	<!--Header End-->
</div>