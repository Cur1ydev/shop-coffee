<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from xpressrow.com/html/cafena/cafena/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 22:37:41 GMT -->
<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Coffee</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="{{asset('client/assets/images/logo/favicon.ico')}}" type="images/x-icon"/>

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="{{asset('client/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/main.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="light-bg">

<!-- preloader  -->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                <span data-text-preloader="F" class="letters-loading">
                        F
                    </span>
                <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
            </div>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- preloader end -->

<!-- header start -->
@include('client.components.header')
<!-- header end -->

<!-- side info for mobile view -->
<aside class="side-info-wrapper mm-only">
    <nav>
        <div class="nav" id="nav-tab" role="tablist">
            <a class="nav-link active" id="menu-tab-1-tab" data-bs-toggle="tab"
               href="#menu-tab-1" role="tab" aria-controls="menu-tab-1"
               aria-selected="true">Menu</a>
            <a class="nav-link" id="menu-tab-2-tab" data-bs-toggle="tab" href="#menu-tab-2"
               role="tab" aria-controls="menu-tab-2" aria-selected="false">Info</a>
        </div>
    </nav>
    <div class="side-info__wrapper d-flex align-items-center justify-content-between">
        <div class="side-info__logo">
            <a href="{{route('client.home')}}">
                <img src="{{asset('client/assets/images/logo/logo-black.png')}}" alt="logo">
            </a>
        </div>
        <div class="side-info__close">
            <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
        </div>
    </div>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel"
             aria-labelledby="menu-tab-1-tab">
            <div class="mobile-menu"></div>
        </div>
        <div class="tab-pane fade" id="menu-tab-2" role="tabpanel"
             aria-labelledby="menu-tab-2-tab">
            <div class="side-info">
                <div class="side-info__content mb-35">
                    <h4 class="title mb-5">About us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea
                        commodo consequat.</p>
                    <a class="site-btn mt-20" href="{{route('client.contact')}}">Contact us</a>
                </div>
                <div class="contact__info--wrapper mt-15">
                    <h4 class="title mb-10">Contact us</h4>
                    <ul class="contact__info list-unstyled">
                        <li>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <p>Bowery St., New York, NY 10013, USA</p>
                        </li>
                        <li>
                            <span><i class="fas fa-phone"></i></span>
                            <p>+1255-568-6523</p>
                        </li>
                        <li>
                            <span><i class="fas fa-envelope-open-text"></i></span>
                            <p>information@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#0"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</aside>

<!-- side info for desktop view -->
<aside class="side-info-wrapper show-all">
    <div class="side-info__wrapper d-flex align-items-center justify-content-between">
        <div class="side-info__logo">
            <a href="{{route('client.home')}}">
                <img src="{{asset('client/assets/images/logo/logo-black.png')}}" alt="logo">
            </a>
        </div>
        <div class="side-info__close">
            <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
        </div>
    </div>
    <div class="side-info">
        <div class="side-info__content mb-35">
            <h4 class="title mb-5">About us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
            <a class="site-btn mt-20" href="{{route('client.contact')}}">Contact us</a>
        </div>
        <div class="contact__info--wrapper mt-15">
            <h4 class="title mb-10">Contact us</h4>
            <ul class="contact__info list-unstyled">
                <li>
                    <span><i class="fas fa-map-marker-alt"></i></span>
                    <p>Bowery St., New York, NY 10013, USA</p>
                </li>
                <li>
                    <span><i class="fas fa-phone"></i></span>
                    <p>+1255-568-6523</p>
                </li>
                <li>
                    <span><i class="fas fa-envelope-open-text"></i></span>
                    <p>information@gmail.com</p>
                </li>
            </ul>
        </div>
        <div class="social-links mt-20 d-flex justify-content-start align-items-center">
            <a href="#0"><i class="fab fa-facebook-f"></i></a>
            <a href="#0"><i class="fab fa-twitter"></i></a>
            <a href="#0"><i class="fab fa-google-plus-g"></i></a>
            <a href="#0"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</aside>

<!-- cart list -->
<aside class="cart-bar-wrapper">
    <div class="cart-bar__close">
        <a class="d-flex align-items-center justify-content-center" href="javascript:void(0);"><i
                class="fal fa-times"></i></a>
    </div>
    <div class="cart-bar">
        <h4 class="cart-bar__title">Cart Items -
            <span>{{session()->get('cart')==null?0:count(session()->get('cart'))}}</span></h4>
        <div class="cart-bar__lists">
            @php $cart = session()->get('cart') @endphp
            @if(isset($cart) && $cart != null)
                @foreach($cart as $key => $value)
                    <div class="cart-bar__item position-relative d-flex">
                        <div class="thumb">
                            <img src="{{$value['image']}}" alt="image_not_found">
                        </div>
                        <div class="content">
                            <h4 class="title">
                                <a>{{$value['name_product']}}</a>
                            </h4>
                            <span class="price">{{number_format($value['price'])}}</span>
                        </div>
                    </div>
                @endforeach
            @else
                <p align="center">Giỏ hàng hiện đang trống</p>
            @endif
        </div>
        <hr>
        <br>

        <div class="btns d-flex align-items-center justify-content-center">
            <a href="{{route('client.cart')}}" class="site-btn">View Cart</a>
        </div>
    </div>
</aside>
<div class="overlay"></div>

@yield('content')

<footer class="site-footer dark-bg pt-125 position-relative">
    <div class="footer__top">
        <a href="#" class="go-top go-top__white position-absolute d-flex align-items-center justify-content-center">
            <i class="fal fa-long-arrow-up"></i>
        </a>
        <div class="container">
            <div class="row justify-content-center mt-none-30">
                <div class="col-xl-3 col-lg-6 mt-30">
                    <div class="footer__widget footer__info">
                        <div class="item d-flex align-items-center justify-content-center">
                            <img src="{{asset('client/assets/images/icons/ft-phone.png')}}" alt="">
                            <span>Phone :</span>
                            <a href="tel:88019339702520">+88019 339 702 520</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30 pl-55">
                    <div class="footer__widget footer__info">
                        <div class="item d-flex align-items-center justify-content-start">
                            <img src="{{asset('client/assets/images/icons/ft-map-marker.png')}}" alt="">
                            <span>Address :</span>
                            <p>30 North West New</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-8 mt-30 pl-55">
                    <div class="footer__widget">
                        <div class="subscribe">
                            <form action="https://xpressrow.com/html/cafena/cafena/index.html">
                                <input type="email" name="email" id="email" placeholder="Enter your email">
                                <button type="submit" class="subscribe__btn">Subscribe <i class="fa fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__middle mt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="footer__logo--content">
                        <img class="mb-15" src="{{asset('client/assets/images/logo/logo.png')}}" alt="">
                        <p>Donec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis
                            fringilla. Morbi vestibulum</p>
                    </div>
                </div>
                <div class="col-lg-5 align-self-end">
                    <div class="social-links d-flex align-items-center justify-content-lg-end">
                        <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#0" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="#0" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#0" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__menu-area mt-30 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-lg-end">
                    <a href="#" class="go-top go-top__bottom">
                        <span>go top</span>
                        <i class="fal fa-long-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--========= JS Here =========-->
<script src="{{asset('client/assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('client/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('client/assets/js/jquery.meanmenu.min.js')}}"></script>
<script src="{{asset('client/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('client/assets/js/lightcase.js')}}"></script>
<script src="{{asset('client/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('client/assets/js/tilt.jquery.min.js')}}"></script>
<script src="{{asset('client/assets/js/wow.min.js')}}"></script>
<script src="{{asset('client/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('client/assets/js/scrollwatch.js')}}"></script>
<script src="{{asset('client/assets/js/sticky-header.js')}}"></script>
<script src="{{asset('client/assets/js/waypoint.js')}}"></script>
<script src="{{asset('client/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('client/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfpGBFn5yRPvJrvAKoGIdj1O1aO9QisgQ"></script>
<script src="{{asset('client/assets/js/jquery-ui-slider-range.js')}}"></script>
<script src="{{asset('client/assets/js/main.js')}}"></script>
</body>


<!-- Mirrored from xpressrow.com/html/cafena/cafena/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 22:38:18 GMT -->
</html>
