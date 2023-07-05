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
