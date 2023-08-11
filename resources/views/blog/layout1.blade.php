<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="AfyaForever ,Wellness">
    <meta name="keywords" content="AfyaForever,  Healthy Living, ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AfyaForever </title>

    
    <meta content="{{ $title }}" name="keywords">
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $title }}" />
    <meta property="og:url" content="{{ $currentURL }}" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta name="author" content="Tony" />
    <meta name="Googlebot" content="index, follow" />
    <meta name="robots" content="index, follow" />



    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('/assets/lib/owlcarousel/assets/owl.carousel.min.css' )}}" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css' )}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css' )}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css' )}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css' )}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css' )}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css' )}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css' )}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css' )}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css' )}}" type="text/css">

    <style>
        #social-links ul {
            padding-left: 0;
        }

        #social-links ul li {
            display: inline-block;
        }

        #social-links ul li a {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 1px;
            font-size: 25px;
        }

        #social-links .fa-facebook {
            color: #0d6efd;
        }

        #social-links .fa-twitter {
            color: deepskyblue;
        }

        #social-links .fa-linkedin {
            color: #0e76a8;
        }

        #social-links .fa-whatsapp {
            color: #25D366
        }

        #social-links .fa-reddit {
            color: #FF4500;
            ;
        }

        #social-links .fa-telegram {
            color: #0088cc;
        }

    </style>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="/"><img src="img/mylogo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn">
            <a href="/contact-us" class="primary-btn">Talk To Us</a>
        </div>
        <ul class="offcanvas__widget">

            <li><i class="fa fa-map-marker"></i> info@afyaforever.com</li>
            <li><i class="fa fa-envelope"></i> Support@afyaforever.com</li>
        </ul>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="header__top__left">
                            <li><i class="fa fa-map-marker"></i> info@afyaforever.com</li>
                            <li><i class="fa fa-envelope"></i> Support@afyaforever.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="header__top__right">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="/"><img src="img/mylogo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__menu__option">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="/">Home</a></li>



                                {{-- <li><a href="/services.html">Services</a></li> --}}

                               <li><a href="/blog">Blog</a></li>
                                <li><a href="/contact-us">Contact</a></li>

                               <li><a href="/blog">News</a></li>

                            </ul>
                        </nav>
                        <div class="header__btn">
                            <a href="/contact-us" class="primary-btn">Talk To Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('content')


    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer__logo">
                            <a href="#"><img src="img/mylogo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="footer__newslatter">
                            <form action="{{ route('client.contact.create') }}" method="POST">
                                @csrf
                                <input type="text" placeholder="Email" name="email">
                                <button type="submit" class="site-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/contact-us">Contact Us</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Quick links</h5>
                        <ul>
                            <li><a href="/contact-us">Talk To Us</a></li>
                            <li><a href="/contact-us">About Us</a></li>


                            <li><a href="/">Home</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__address">
                        <h5>Contact Us</h5>
                        <ul>
                            <li><i class="fa fa-envelope"></i> info@afyaforever.com</li>

                            <li><i class="fa fa-envelope"></i> Support@afyaforever.com</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved
                            </p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    {{-- <div class="col-lg-5">
                        <ul>
                            <li>All Rights Reserved</li>

                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js' )}}"></script>
    <script src="{{ asset('js/bootstrap.min.js' )}}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js' )}}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js' )}}"></script>
    <script src="{{ asset('js/jquery-ui.min.js' )}}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js' )}}"></script>
    <script src="{{ asset('js/jquery.slicknav.js' )}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js' )}}"></script>
    <script src="{{ asset('js/main.js' )}}"></script>



</body>

</html>
