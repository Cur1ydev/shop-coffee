<header class="site-header">
    <div class="header-top header-top__2">
        <div class="container-fluid custom-width">
            <div class="row">
                <div class="col-xl-6 col-lg-12 align-self-center">
                    <div class="header-top__left d-flex align-items-center">
                        <div class="logo">
                            <a href="{{route('client.home')}}">
                                <img src="{{asset('client/assets/images/logo/logo-black.png')}}" alt="img">
                            </a>
                        </div>
                        <ul class="header-top__infos pl-75 list-unstyled d-flex align-items-center mb-0">
                            <li><a href="tel:91800458568"><i class="fas fa-phone-square"></i> 91 800 458 568</a></li>
                            <li><i class="fa fa-map-marker-alt"></i>{{!empty(session()->get('address'))?session()->get('address'):'Chưa có địa chỉ nào được chọn'}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12  align-self-center">
                    <div class="header-top__right header-top__right--2 d-flex justify-content-xl-end justify-content-center align-items-center">
                        <div class="social-links social-links__2 d-flex align-items-center justify-content-md-start justify-content-center">
                            <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <a href="#0" class="site-btn">testy Coffee</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-area menu-area-2 custom-padding">
        <div class="container-fluid custom-width">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-6">
                    <div class="logo mm-only d-md-block d-lg-none">
                        <a href="{{route('client.home')}}">
                            <img src="{{asset('client/assets/images/logo/logo-black.png')}}" alt="img">
                        </a>
                    </div>
                    <div class="main-menu main-menu__2">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="menu-item-has-children active"><a href="{{route('client.home')}}">Home</a>
                                </li>
                                <li><a href="{{route('client.menu')}}">Menu</a></li>
                                <li><a href="{{route('client.shop')}}">Shop</a>
                                </li>
                                <li><a href="#0">pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('client.blog')}}">Blog</a></li>
                                        <li><a href="{{route('client.faq')}}">Faq</a></li>
                                        <li><a href="{{route('client.story')}}">Story</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('client.about')}}">About</a></li>
                                <li><a href="{{route('client.contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-6 align-self-center">
                    <div class="menu-area__right menu-area__right--2 d-flex justify-content-end align-items-center">
                        <div class="search">
                            <div class="search__trigger item">
                                <span class="close"><i class="fal fa-times"></i></span>
                            </div>
                        </div>
                        <div class="hamburger-trigger item">
                            <i class="far fa-bars"></i>
                        </div>
                        <div class="cart cart-trigger item position-relative">
                            <i class="fa fa-shopping-basket"></i>
                            <span class="cart__count">{{session()->get('cart')==null?0:count(session()->get('cart'))}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
