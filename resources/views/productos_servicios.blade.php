@include('layout.app')

<body>

	<!-- banner -->
	<div class="w3l-hear-top">
		<!-- header -->
		<header>
			<!-- logo -->
			<div class="logo">
				<h1>
					<a href="index.html" class="text-center">
						Belleza
						<span class="d-block"></span>
					</a>
				</h1>
			</div>
			<!-- //logo -->
			<!-- search -->
			<div class="w3ls_search">
				<div class="cd-main-header">
					<ul class="cd-header-buttons">
						<li>
							<a class="cd-search-trigger" href="#cd-search">
								<span></span>
							</a>
						</li>
					</ul>
					<!-- cd-header-buttons -->
				</div>
				<div id="cd-search" class="cd-search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="search site">
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- //search -->
			@yield('content')
		</header>
		<!-- //header -->
	</div>
	<!-- inner banner -->
	<section class="diagonal-stripe-one inner-bg">
		<div class="container">
			<div class="ml-md-5 pl-md-5">
			</div>
		</div>
	</section>
	<!-- inner banner -->
	<!-- breadcrumbs -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Producto y Servicios</li>
		</ol>
	</nav>
	<!-- //breadcrumbs -->
	<!-- banner bottom -->
	<section class="banner-sec py-sm-5 pt-3 pb-5">
		<div class="container">
			<div class="row pt-md-5">
				<div class="col-lg-3">
					<div class="card">
						<img class="img-fluid" src="images/g1.jpg" alt="" />
						<div class="card-img-overlay">
							<span class="badge-pill badge-pos">Tips</span>
						</div>
						<div class="card-body">
							<div class="news-title">
								<h4 class="title-small">
									<a href="single.html" class="text-dark">Quisque velit nisi, pretium ut lacinia in elementum.</a>
								</h4>
							</div>
							<p class="card-text">
								<small class="text-time">
									<em>3 mins ago</em>
								</small>
							</p>
						</div>
					</div>
					<div class="card mt-5">
						<img class="img-fluid" src="images/g2.jpg" alt="" />
						<div class="card-img-overlay">
							<span class="badge-pill badge-pos">Reviews</span>
						</div>
						<div class="card-body">
							<div class="news-title">
								<h4 class="title-small">
									<a href="single.html" class="text-dark">Quisque velit nisi, pretium ut lacinia in elementum.</a>
								</h4>
							</div>
							<p class="card-text">
								<small class="text-time">
									<em>10 mins ago</em>
								</small>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 mt-lg-0 mt-5">
					<div class="card">
						<img class="img-fluid" src="images/g3.jpg" alt="" />
						<div class="card-img-overlay">
							<span class="badge-pill badge-pos">Travel</span>
						</div>
						<div class="card-body">
							<div class="news-title">
								<h4 class="title-small">
									<a href="single.html" class="text-dark">Quisque velit nisi, pretium ut lacinia in elementum.</a>
								</h4>
							</div>
							<p class="card-text">
								<small class="text-time">
									<em>14 mins ago</em>
								</small>
							</p>
						</div>
					</div>
					<div class="card mt-5">
						<img class="img-fluid" src="images/g4.jpg" alt="" />
						<div class="card-img-overlay">
							<span class="badge-pill badge-pos">News</span>
						</div>
						<div class="card-body">
							<div class="news-title">
								<h4 class="title-small">
									<a href="single.html" class="text-dark">Quisque velit nisi, pretium ut lacinia in elementum.</a>
								</h4>
							</div>
							<p class="card-text">
								<small class="text-time">
									<em>23 mins ago</em>
								</small>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 top-slider mt-lg-0 mt-5">
					<!-- carousel -->
					<div id="carousel-example-generic" class="carousel slide bg-light" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<div class="news-block p-3">
									<div class="news-media">
										<img class="img-fluid" src="images/g6.jpg" alt="" />
									</div>
									<div class="news-title">
										<h4 class="title-large border-bottom">
											<a href="single.html" class="text-theme text-dark">Quisque velit nisi, pretium ut lacinia in, elementum id enim.</a>
										</h4>
									</div>
									<div class="news-des my-3">
										<p>Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes
											vel. Mauris nam suspendisse consectetur mus...</p>
									</div>
									<small class="text-time">
										<em>
											<i class="far fa-clock mr-2"></i>1hr ago</em>
									</small>
								</div>
							</div>
							<div class="carousel-item">
								<div class="news-block p-3">
									<div class="news-media">
										<img class="img-fluid" src="images/g5.jpg" alt="" />
									</div>
									<div class="news-title">
										<h4 class="title-large border-bottom">
											<a href="single.html" class="text-theme text-dark">Quisque velit nisi, pretium ut lacinia in, elementum id enim.</a>
										</h4>
									</div>
									<div class="news-des my-3">
										<p>Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes
											vel. Mauris nam suspendisse consectetur mus...</p>
									</div>
									<small class="text-time">
										<em>
											<i class="far fa-clock mr-2"></i>2 hrs ago</em>
									</small>
								</div>
							</div>
							<div class="carousel-item">
								<div class="news-block p-3">
									<div class="news-media">
										<img class="img-fluid" src="images/g4.jpg" alt="" />
									</div>
									<div class="news-title">
										<h4 class="title-large border-bottom">
											<a href="single.html" class="text-theme text-dark">Quisque velit nisi, pretium ut lacinia in, elementum id enim.</a>
										</h4>
									</div>
									<div class="news-des my-3">
										<p>Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes
											vel. Mauris nam suspendisse consectetur mus...</p>
									</div>
									<div class="time-text">
										<small class="text-time">
											<em>
												<i class="far fa-clock mr-2"></i>yesterday</em>
										</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //carousel -->
				</div>
			</div>
		</div>
	</section>
	<!-- //banner bottom -->
	<!-- slide -->
	<section class="diagonal-stripe-one">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<img src="images/slide.png" alt="beauty_img" class="img-fluid" />
				</div>
				<div class="col-md-8 d-flex flex-column  my-auto">
					<h4 class="slide-text align-self-center">click here to find out more</h4>
					<a href="pene" class="w3ls-button mx-auto">
						<span>read more</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- //slide -->
	<!-- slide bottom -->
	<section class="section-01 py-sm-5 pt-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-6 mt-sm-5">
							<div class="card">
								<img class="img-fluid" src="images/g1.jpg" alt="" />
								<div class="card-body">
									<div class="news-title">
										<a href="single.html">
											<h4 class="title-small">Vivamus suscipit tortor eget felis porttitor volutpat.</h4>
										</a>
									</div>
									<p class="card-text">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.</p>
									<p class="card-text">
										<small class="text-time">
											<em>3 mins ago</em>
										</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 mb-lg-5 mt-5">
							<div class="card">
								<img class="img-fluid" src="images/g3.jpg" alt="" />
								<div class="card-body">
									<div class="news-title">
										<a href="single.html">
											<h4 class="title-small">Vivamus suscipit tortor eget felis porttitor volutpat.</h4>
										</a>
									</div>
									<p class="card-text">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.</p>
									<p class="card-text">
										<small class="text-time">
											<em>3 mins ago</em>
										</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 my-lg-0 mt-5">
							<div class="card">
								<img class="img-fluid" src="images/g2.jpg" alt="" />
								<div class="card-body">
									<div class="news-title">
										<a href="single.html">
											<h4 class="title-small">Vivamus suscipit tortor eget felis porttitor volutpat.</h4>
										</a>
									</div>
									<p class="card-text">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.</p>
									<p class="card-text">
										<small class="text-time">
											<em>3 mins ago</em>
										</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 my-lg-0 my-5">
							<div class="card">
								<img class="img-fluid" src="images/g7.jpg" alt="">
								<div class="card-body">
									<div class="news-title">
										<a href="single.html">
											<h4 class="title-small">Vivamus suscipit tortor eget felis porttitor volutpat.</h4>
										</a>
									</div>
									<p class="card-text">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.</p>
									<p class="card-text">
										<small class="text-time">
											<em>3 mins ago</em>
										</small>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- tabs -->
				<aside class="col-lg-4 side-bar col-md-12 mt-sm-5">
					<ul class="nav nav-tabs" role="tablist" id="myTab">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home" role="tab">Latest</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile" role="tab">Top</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#messages" role="tab">Featured</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content sidebar-tabing mt-3" id="nav-tabContent">
						<div class="tab-pane active" id="home" role="tabpanel">
							<div class="media">
								<a href="single.html">
									<img class="d-flex mr-3 img-fluid" src="images/g5.jpg" alt="Generic placeholder image" />
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>10 mins ago</em>
										</small>
									</div>
								</div>
							</div>
							<div class="media">
								<a href="single.html">
									<img class="d-flex mr-3 img-fluid" src="images/g7.jpg" alt="Generic placeholder image" />
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>20 mins ago</em>
										</small>
									</div>
								</div>
							</div>
							<div class="media">
								<a href="single.html">
									<img class="d-flex mr-3 img-fluid" src="images/g2.jpg" alt="Generic placeholder image" />
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>30 mins ago</em>
										</small>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="profile" role="tabpanel">
							<div class="media">
								<a href="single.html">
									<img class="d-flex mr-3 img-fluid" src="images/g2.jpg" alt="Generic placeholder image" />
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>10 mins ago</em>
										</small>
									</div>
								</div>
							</div>
							<div class="media">
								<a href="single.html">
									<img class="d-flex mr-3 img-fluid" src="images/g5.jpg" alt="Generic placeholder image" />
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>13 mins ago</em>
										</small>
									</div>
								</div>
							</div>
							<div class="media">
								<a href="single.html">
									<img class="d-flex mr-3 img-fluid" src="images/g4.jpg" alt="Generic placeholder image" />
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>30 mins ago</em>
										</small>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="messages" role="tabpanel">
							<div class="media">
								<a href="single.html">
									<img class="d-flex mr-3 img-fluid" src="images/g5.jpg" alt="Generic placeholder image">
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>40 mins ago</em>
										</small>
									</div>
								</div>
							</div>
							<div class="media">
								<a href="single.html">
									<img class="d-flex mr-3 img-fluid" src="images/g1.jpg" alt="Generic placeholder image">
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>1hr ago</em>
										</small>
									</div>
								</div>
							</div>
							<div class="media">
								<a href="single.html">
									<img class="d-flex mr-3 img-fluid" src="images/g2.jpg" alt="Generic placeholder image">
								</a>
								<div class="media-body">
									<div class="news-title">
										<h4 class="title-small">
											<a href="single.html" class="text-black">Praesent sapien massa, convallis a pellentesque nec.</a>
										</h4>
									</div>
									<div class="news-auther">
										<small class="text-time">
											<em>2 hrs ago</em>
										</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="bc_sub mt-3 my-4">
						<h4>Sign up to our newsletter</h4>
						<p>Praesent sapien masspien aco nvallis </p>
						<form action="#" method="post">
							<input type="email" placeholder="Email" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
					<div class="video-sec bc_sub">
						<h4>Featured Video</h4>
						<div class="video-block">
							<div class="embed-responsive embed-responsive-4by3">
								<iframe width="460" height="250" src="https://www.youtube.com/embed/aI-QmC5asnA" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</aside>
				<!-- //tabs -->
			</div>
		</div>
	</section>
	<!-- //slide bottom -->
	<!-- footer -->
	<div class="footer pt-lg-5 text-center">
		<div class="container">
			<!-- logo -->
			<div class="logo">
				<h2>
					<a href="index.html" class="text-center">
						beauty
						<span class="d-block">Blog</span>
					</a>
				</h2>
			</div>
			<!-- //logo -->
			<ul class="list-agileits py-4 border-bottom">
				<li>
					<a href="index.html">
						Home
					</a>
				</li>
				<li class="my-3">
					<a href="about.html" class="mx-4">
						About Us
					</a>
				</li>
				<li class="mb-3">
					<a href="blog.html" class="mr-4">
						Blog
					</a>
				</li>
				<li>
					<a href="contact.html">
						Contact Us
					</a>
				</li>
			</ul>
			<div class="footerv2-w3ls pt-4">
				<h3 class="w3f_title">Socialize with Us</h3>
				<ul class="social-iconsv2 agileinfo pt-3">
					<li>
						<a href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="footer-top my-3">
				<p class="mx-auto">Donec consequat sapien ut leo cursus rhoncus.Curabitur aliquet quam id dui posuere blandit. Nullam dui mi.
				</p>
			</div>
		</div>
		<div class="p-sm-5 px-3 py-5">
			<!-- footer right -->
			<div class="col-md-8 mx-auto">
				<h3 class="mb-3 w3f_title">Contact Us</h3>
				<div class="row">
					<div class="col-lg-4 fv3-contact">
						<span class="fas fa-envelope-open mr-2 my-3"></span>
						<p>
							<a href="mailto:example@email.com">info@example.com</a>
						</p>
						<p>
							<a href="mailto:example@email.com">info@example.com</a>
						</p>
					</div>
					<div class="col-lg-4 fv3-contact my-lg-0 my-4">
						<span class="fas fa-phone-volume mr-2 my-3"></span>
						<p>+456 123 7890</p>
						<p>+456 123 7890</p>
					</div>
					<div class="col-lg-4 fv3-contact">
						<span class="fas fa-home mr-2 my-3"></span>
						<address>71 Pilgrim Avenue ,44 Shirley Ave. Goldfield Rd. Broome St, California.</address>
					</div>
				</div>
				<!-- //footer right -->
			</div>
			<!-- //footer row -->
		</div>
		<!-- copyright -->
		<div class="cpy-right text-center py-3 bg-theme">
			<p class="text-white">© 2018 Beauty Blog. All rights reserved | Design by
				<a href="http://w3layouts.com" class="text-white"> W3layouts.</a>
			</p>
		</div>
		<!-- //copyright -->
		<!-- //footer container -->
	</div>
	<!-- //footer -->

	
</body>

</html>