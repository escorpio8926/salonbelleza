
@include('layout.app')
@yield('head')
<body>
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
    <!-- banner-slider -->
    <section class="diagonal-stripe-one inner-bg">
        <div class="container">
            <div class="ml-md-5 pl-md-5">
            </div>
        </div>
    </section>
    <!-- banner-slider -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="wthree-row w3-contact" id="contact">
        <div class="container py-sm-5 py-4">
            <!-- contact details -->
            <div class="row contact-form">
                <!-- contact left grid -->
                <div class="col-lg-6 map contact-right">
                    <div class="mx-auto">
                        <h3 class="mb-3 w3f_title my-sm-3">Contactanos</h3>
                        <div class="row fv3-contact pt-lg-5 pt-3">
                            <div class="col-sm-2">
                                <span class="fas fa-envelope-open"></span>
                            </div>
                            <div class="col-sm-10 mt-sm-0 mt-4">
                                <p>
                                    <a href="mailto:example@email.com" class="text-dark">info@example.com</a>
                                </p>
                                <p>
                                    <a href="mailto:example@email.com" class="text-dark">info@example.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="row fv3-contact my-4">
                            <div class="col-sm-2">
                                <span class="fas fa-phone-volume"></span>
                            </div>
                            <div class="col-sm-10 mt-sm-0 mt-4">
                                <p>+456 123 7890</p>
                                <p>+456 123 7890</p>
                            </div>
                        </div>
                        <div class="row fv3-contact">
                            <div class="col-sm-2">
                                <span class="fas fa-home"></span>
                            </div>
                            <div class="col-sm-10 mt-sm-0 mt-4">
                                <address>71 Pilgrim Avenue ,44 Shirley Ave,
                                    <br>Broome St, California.</address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wthree-form-left mt-lg-0 mt-3">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                        <h3 class="my-3 w3f_title">send us a message</h3>
                        <form action="#" method="get" class="f-color pt-3">
                            <div class="form-group">
                                <label for="contactusername">Nombre y Apellido</label>
                                <input type="text" class="form-control" id="contactusername" required>
                            </div>
                            <div class="form-group my-4">
                                <label for="contactemail">Email</label>
                                <input type="email" class="form-control" id="contactemail" required>
                            </div>
                            <div class="form-group">
                                <label for="contactcomment">Tu mensaje</label>
                                <textarea class="form-control" rows="5" id="contactcomment" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- //contact details  -->
        </div>
    </section>
    <!-- //contact -->
    <!-- map -->
    <div class="map px-2 pb-lg-0 pb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
            allowfullscreen></iframe>
    </div>
    <!--// map-->
    <!-- footer -->
    <div class="footer pt-lg-5 text-center">
        <div class="container">
            <!-- logo -->
            <div class="logo">
                <h2>
                    <a href="index.html" class="text-center">
                     
                        <span class="d-block">Belleza</span>
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
                    <div class="col-lg-4 fv3-contact  my-lg-0 my-4">
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
    <!-- js-->

</body>
@yield('script')
</html>