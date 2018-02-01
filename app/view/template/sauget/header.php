<!doctype html>
<html lang="en">
	<head>
		<!-- Basic page needs
		============================================ -->
		<title>Sauget | Product Grid View</title>
		<meta charset="utf-8">
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">

		<!-- Mobile specific metas
		============================================ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php template_url('img/favicon.ico');?>">

		<!-- Google web fonts
		============================================ -->
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,900' rel='stylesheet' type='text/css'>
		

		<!-- Bootstrap CSS
		============================================ -->
		<link rel="stylesheet" href="<?php template_url('css/bootstrap.min.css');?>">
		
		<!-- Libs CSS
		============================================ -->
		<link rel="stylesheet" href="<?php template_url('css/animate.css');?>">
		<link rel="stylesheet" href="<?php template_url('lib/flexslider/flexslider.css');?>">
		<link href="<?php template_url('lib/rs-plugin/css/settings.css');?>" rel="stylesheet" />
		
		<!-- jQuery ui css
		============================================ -->
		<link href="<?php template_url('css/jquery-ui.css');?>" rel="stylesheet">
		
		<!-- Theme CSS
		============================================ -->
		<link rel="stylesheet" href="<?php template_url('css/font-awesome.min.css');?>">
		<link rel="stylesheet" href="<?php template_url('css/style.css');?>">
		
		<!-- Old IE stylesheet
		============================================ -->
		<!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="css/oldie.css">
		<![endif]-->
		
	</head>
	<body class="home-1 top-btn-color">
		<!-- HEADER -->
        <header id="header">
		
			<div class="topbar">
			<!-- HEADER TOP -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
							<!-- HEADER TOP MENU -->
                            <div class="header-top-menu">
                                <ul class="list-unstyled list-inline">
                                    <li class="dropdown dropdown-small">
                                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#">English <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dutch</a></li>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">German</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="dropdown dropdown-small">
                                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#">USD <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">AUS</a></li>
                                            <li><a href="#">INR</a></li>
                                            <li><a href="#">GBP</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=""><i class="fa fa-heart"></i> Wishlist</a></li>
                                    <li><a href="checkuot.html"><i class="fa fa-heart"></i> Check out</a></li>
                                    <li><a href="index.php?c=user&a=login"><i class="fa fa-lock"></i> Login</a></li>
                                </ul>
                            </div>
							<!-- HEADER TOP MENU -->
                        </div>
                        
                        <div class="col-md-4 col-sm-4">
							<!-- SECRCH FORM -->
                            <!-- <div class="header-search-form text-right">
                                <form>
                                    <input type="text" placeholder="Enter your keyword...">
                                    <button type="submit" ><i class="fa fa-search"></i></button>
                                </form>
                            </div> -->
							<!-- SECRCH FORM -->
                        </div> 
                    </div>
                </div>
            </div>
            <!-- HEADER TOP -->
			</div>			
			<a href="#" class="topbar-btn" onclick="return false;"></a>		
			<!-- HEADER -->
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="logo">
                                <a href="index.html"><img src="<?php template_url('img/logo.png'); ?>" alt=""></a>
                            </div>
                        </div>
                        
                        <div class="col-md-9 col-sm-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
									<!-- SHOPPING CART -->
                                    <div class="shopping-cart floatright">
                                        <span class="cart-count">1</span>
                                        <p>Shopping cart: <span class="cart-amount">$0.00</span></p>
                                    </div>
									<!-- SHOPPING CART -->
                                </div>
                                <div class="col-md-12 col-sm-12">
									<!-- DESKTOP NAVIGATION -->
									<nav role="navigation" class="navbar sauget  navbar-main">
										<div class="bigmenu">
											<div class="navbar-collapse collapse" id="navbar-collapse-1">
												<ul class="nav navbar-nav navbar-right">
													<!-- Classic list -->
													<li class="menuBB"><a href="index.html">Home</a></li>																
													<!-- <li class="dropdown sauget-fw menuBB"><a class="dropdown-toggle" data-toggle="dropdown" href="list.html">women <i class="fa fa-caret-right fa-rotate-45"></i></a>
														<ul class="dropdown-menu list-unstyled  fadeInUp animated">
															<li>
																<div class="sauget-content">
																	<div class="row">
																		<div class="col-md-3 col-sm-3">
																			<div class="header-menu">
																				<h4>women bag</h4>
																			</div> 
																			<ul class="list-unstyled">
																				<li><a href="list.html"> bag items </a></li>
																				<li><a href="list.html"> bag items </a></li>
																				<li><a href="list.html"> bag items </a></li>
																				<li><a href="list.html"> bag items </a></li>
																				<li><a href="list.html"> bag items </a></li>
																				<li><a href="list.html"> bag items </a></li>
																			</ul>
																		</div>


																		<div class="col-md-3 col-sm-3">
																			<div class="header-menu">
																				<h4>Accessories</h4>
																			</div>
																			<ul class="list-unstyled">
																				<li><a href="gird.html"><i class="fa fa-angle-right"></i> Accessories 1 </a></li>
																				<li><a href="gird.html"><i class="fa fa-angle-right"></i> Accessories 2 </a></li>
																				<li><a href="gird.html"><i class="fa fa-angle-right"></i> Accessories 3 </a></li>
																				<li><a href="gird.html"><i class="fa fa-angle-right"></i> Accessories 4<span>New</span></a></li>
																			</ul>
																		</div>
																		<div class="col-md-3 col-sm-3">
																			<div class="header-menu">
																				<h4>Woman Dresses</h4>
																			</div>
																			<ul class="list-unstyled">
																				<li>
																					<a href="gird.html"><i class="fa fa-shopping-cart"></i> Dresses 1 </a>
																				</li>
																				<li>
																					<a href="gird.html"><i class="fa fa-check"></i> Dresses 2 </a>
																				</li>
																				<li>
																					<a href="gird.html"><i class="fa fa-tasks"></i> Dresses 3 </a>
																				</li>
																				<li>
																					<a href="gird.html"><i class="fa fa-random"></i> Dresses 4 </a>
																				</li>
																				<li>
																					<a href="gird.html"><i class="fa fa-heart"></i>  Dresses 5 </a>
																				</li>
																			</ul>
																		</div>
																		<div class="col-md-3 col-sm-3">
																			<div class="banner">
																				<a href="#">
																					<img alt=""  src="<?php template_url('img/widget/1.jpg'); ?>">
																				</a> 
																			</div>
																		</div>
																	</div>

																</div>
															</li>
														</ul>
													</li> -->

													<!-- With content -->
													
													
													
													<li class="menuBB"><a href="index.php?c=product&a=front.view">Products</a></li>
													<li class="menuBB"><a href="about.html">about</a></li>
													<li class="menuBB"><a href="contact.html">contact us</a></li>
													<li class="menuBB"><a href="blog-one.html">Blog</a></li>
												</ul>
											</div>
										</div>
									</nav>
									<!-- DESKTOP NAVIGATION -->
									
									<!-- MOBILE ONLY CONTENT -->
									<div class="only-for-mobile">
										<ul class="ofm">
											<li class="m_nav"><i class="fa fa-bars"></i> Menu</li>
											<li>
												<div class="shopping-cart floatright">
													<span class="cart-count">1</span>
													<p>Shopping cart: <span class="cart-amount">$0.00</span></p>
												</div>  
											</li>
										</ul>

										<!-- MOBILE MENU -->
										<div class="mobi-menu">
											<div id='cssmenu'>
												<ul>
													<li><a href="index.html"><span>Home</span></a></li>
													<li><a href="gird.html"><span>Man</span></a></li>
													<li class='has-sub'>
														<a href='#'><span>women</span></a>
														<ul>
															<li class='has-sub'>
																<a href='#'><span>women bag</span></a>
																<ul>
																	<li><a href="list.html"><span>bag items</span></a></li>
																	<li><a href="list.html"><span>bag items</span></a></li>
																	<li><a href="list.html"><span>bag items</span></a></li>
																	<li><a href="list.html"><span>bag items</span></a></li>
																	<li><a href="list.html"><span>bag items</span></a></li>
																	<li class="last"><a href="list.html"><span>bag items</span></a></li>
																</ul>
															</li>
															<li class='has-sub'>
																<a href='#'><span>Accessories</span></a>
																<ul>
																	<li><a href="./portfolio_4col.html"><span>Accessories 1</span></a></li>
																	<li><a href="./portfolio_3col.html"><span>Accessories 2</span></a></li>
																	<li><a href="./portfolio_2col.html"><span>Accessories 3</span></a></li>
																	<li class='last'><a href="./404.html"><span>Accessories 5</span></a></li>
																</ul>
															</li>
															<li class='has-sub'>
																<a href='#'><span>Woman Dresses</span></a>
																<ul>
																	<li><a href="./category-page1.html"><span>Dresses 1</span></a></li>
																	<li><a href="./category-page2.html"><span>Dresses 2</span></a></li>
																	<li><a href="./product-page.html"><span>Dresses 3</span></a></li>
																	<li><a href="./shopping_cart.html"><span>Dresses 4</span></a></li>
																	<li class='last'><a href="./shop_checkout.html"><span>Dresses 5</span></a></li>
																</ul>
															</li>
															<li class="img-nav">
																<div class="in1">
																	<div class="col-md-6">
																		<a href="./index.html"><img src="<?php template_url('img/widget/1.jpg');?>"  alt=""/></a>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li class='has-sub'>
														<a href='#'><span>fashion</span></a>
														<ul>
															<li class='has-sub'>
																<a href='#'><span>Women</span></a>
																<ul>
																	<li><a href="list.html"><span>Dresses</span></a></li>
																	<li><a href="list.html"><span>Bags</span></a></li>
																	<li><a href="list.html"><span>Jeans</span></a></li>
																	<li><a href="list.html"><span>Shirts</span></a></li>
																	<li><a href="list.html"><span>T-shirts</span></a></li>
																	<li><a href="list.html"><span>Wallets</span></a></li>
																	<li><a href="list.html"><span>Hair Accessories</span></a></li>
																	<li class="last"><a href="list.html"><span>Short dresses</span></a></li>
																</ul>
															</li>
															<li class='has-sub'>
																<a href='#'><span>Man</span></a>
																<ul>			
																	<li><a href="./portfolio_4col.html"><span>Jeans</span></a></li>
																	<li><a href="./portfolio_3col.html"><span>Shirts</span></a></li>
																	<li><a href="./portfolio_2col.html"><span>T-shirts</span></a></li>
																	<li><a href="./portfolio_2col.html"><span>Blazers</span></a></li>
																	<li><a href="./portfolio_2col.html"><span>Sport Bags</span></a></li>
																	<li><a href="./portfolio_2col.html"><span>Coats</span></a></li>
																	<li class='last'><a href="./404.html"><span>Sandals</span></a></li>
																</ul>
															</li>
															<li class="img-nav">
																<div class="in1">
																	<div class="col-md-6">
																		<a href="./index.html"><img src="<?php template_url('img/widget/2.jpg');?>"  alt=""/></a>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li class='has-sub'>
														<a href='#'><span>accessories</span></a>
														<ul>
															<li class='has-sub'>
																<a href='#'><span>Women</span></a>
																<ul>
																	<li><a href="list.html"><span>Dresses</span></a></li>
																	<li><a href="list.html"><span>Bags</span></a></li>
																	<li><a href="list.html"><span>Jeans</span></a></li>
																	<li><a href="list.html"><span>Shirts</span></a></li>
																	<li><a href="list.html"><span>T-shirts</span></a></li>
																	<li><a href="list.html"><span>Wallets</span></a></li>
																	<li><a href="list.html"><span>Hair Accessories</span></a></li>
																	<li class="last"><a href="list.html"><span>Short dresses</span></a></li>
																</ul>
															</li>
															<li class='has-sub'>
																<a href='#'><span>Man</span></a>
																<ul>			
																	<li><a href="./portfolio_4col.html"><span>Jeans</span></a></li>
																	<li><a href="./portfolio_3col.html"><span>Shirts</span></a></li>
																	<li><a href="./portfolio_2col.html"><span>T-shirts</span></a></li>
																	<li><a href="./portfolio_2col.html"><span>Blazers</span></a></li>
																	<li><a href="./portfolio_2col.html"><span>Sport Bags</span></a></li>
																	<li><a href="./portfolio_2col.html"><span>Coats</span></a></li>
																	<li class='last'><a href="./404.html"><span>Sandals</span></a></li>
																</ul>
															</li>
															<li class="img-nav">
																<div class="in1">
																	<div class="col-md-6">
																		<a href="./index.html"><img src="<?php template_url('img/widget/2.jpg');?>"  alt=""/></a>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li><a href="about.html"><span>About</span></a></li>
													<li><a href="contact.html"><span>Contact us</span></a></li>
													<li><a href="blog-one.html"><span>Blog</span></a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- MOBILE ONLY CONTENT -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER -->