<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Beauty Blog - Blog Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Beauty Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom CSS -->
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- side nav css file -->
	<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
	<!-- //side nav css file -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
</head>

@section('content')
		<!-- menu -->
			<div class="side_menu">
				<div class="burger_box">
					<div class="menu-icon-container">
						<a href="#" class="menu-icon js-menu_toggle closed">
							<span class="menu-icon_box">
								<span class="menu-icon_line menu-icon_line--1"></span>
								<span class="menu-icon_line menu-icon_line--2"></span>
								<span class="menu-icon_line menu-icon_line--3"></span>
							</span>
						</a>
					</div>
				</div>
				<div class="container">
					<ul class="sidebar-menu">
						<li class="treeview   active">
							<a href="index.html">
								<span>Home</span>
							</a>
						</li>
						<li class="treeview">
							<a href="about.html">
								<span>About</span>
							</a>
						</li>
						<li class="treeview">
							<a href="blog.html">
								<span>Default Blog</span>
							</a>
						</li>
						<li class="treeview">
							<a href="#">
								<span>Blog styles</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li class="treeview">
									<a href="#">
										<span>variant1</span>
										<i class="fa fa-angle-left pull-right"></i>
									</a>
									<ul class="treeview-menu">
										<li>
											<a href="blog_col_style1.html">
												<i class="fa fa-angle-right"></i>style 1</a>
										</li>
										<li>
											<a href="blog_col_style2.html">
												<i class="fa fa-angle-right"></i>Style 2 </a>
										</li>
										<li>
											<a href="blog_col_style3.html">
												<i class="fa fa-angle-right"></i>style 3</a>
										</li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#">
										<span>variant 2</span>
										<i class="fa fa-angle-left pull-right"></i>
									</a>
									<ul class="treeview-menu">
										<li>
											<a href="blog_row_style1.html">
												<i class="fa fa-angle-right"></i>style 1</a>
										</li>
										<li>
											<a href="blog_row_style2.html">
												<i class="fa fa-angle-right"></i>Style 2 </a>
										</li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#">
										<span>variant 3</span>
										<i class="fa fa-angle-left pull-right"></i>
									</a>
									<ul class="treeview-menu">
										<li>
											<a href="blog2_style1.html">
												<i class="fa fa-angle-right"></i>style 1</a>
										</li>
										<li>
											<a href="blog2_style2.html">
												<i class="fa fa-angle-right"></i>Style 2 </a>
										</li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#">
										<span>variant 4</span>
										<i class="fa fa-angle-left pull-right"></i>
									</a>
									<ul class="treeview-menu">
										<li>
											<a href="single_col_1.html">
												<i class="fa fa-angle-right"></i>Style 1</a>
										</li>

										<li>
											<a href="single_col_2.html">
												<i class="fa fa-angle-right"></i>Style 2</a>
										</li>
										<li>
											<a href="single_col_3.html">
												<i class="fa fa-angle-right"></i>Style 3</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="treeview">
							<a href="typo.html">
								<span>Typography</span>
							</a>
						</li>
						<li class="treeview">
							<a href="contact.html">
								<span>Contact</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- //menu -->
@show

		<script src="js/jquery-2.2.3.min.js"></script>
	<!-- menu -->
	<script src="js/menu.js"></script>
	<!-- //menu -->
	<!-- banner responsiveslides -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner responsiveslides -->
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js'></script>
	<script>
		$('.sidebar-menu').SidebarNav()
	</script>
	<!-- //side nav js -->
	<!-- search-bar -->
	<script src="js/main.js"></script>
	<!-- //search-bar-->
	<!-- flexisel -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});
		});
	</script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo2").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 736,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<script src="js/jquery.flexisel.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/Beautyblog.js"></script>
	<!-- smooth scroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js "></script>


