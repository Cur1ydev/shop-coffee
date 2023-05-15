@extends('client.layout')
@section('content')
    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area pt-140 pb-140 bg_img"
                 data-background="{{asset('client/assets/images/bg/breadcrumb-bg-1.jpeg')}}" data-overlay="dark"
                 data-opacity="5">
            <div class="shape shape__1"><img src="{{asset('client/assets/images/shape/breadcrumb-shape-1.png')}}"
                                             alt=""></div>
            <div class="shape shape__2"><img src="{{asset('client/assets/images/shape/breadcrumb-shape-2.png')}}"
                                             alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h2 class="page-title">Cafena Product</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="{{route('client.home')}}"><span>Home</span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>Product</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- product popup start -->
        <div class="product-popup product-popup-1">
            <div class="view-background">
                <div class="row">
                    <div class="col-md-4 align-self-center">
                        <div class="quickview d-flex align-items-center justify-content-center">
                            <div class="quickview__thumb">
                                <img src="{{asset('client/assets/images/products/pp-1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="viewcontent">
                            <div class="viewcontent__header">
                                <h2>VICARAGUA COFFEE BEANS</h2>
                                <a class="view_close product-p-close" href="javascript:void(0)"><i
                                        class="fal fa-times"></i></a>
                            </div>
                            <div class="viewcontent__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fal fa-star"></i>
                            </div>
                            <div class="viewcontent__price">
                                <h4><span>$</span>99.00</h4>
                            </div>
                            <div class="viewcontent__stock">
                                <h4>Available :<span> In stock</span></h4>
                            </div>
                            <div class="viewcontent__details">
                                <p>Anlor sit amet, consectetur adipiscing elit. Fusce condimentum est lacus, non pretium
                                    risus lacinia vel. Fusce eget turpis orci.</p>
                            </div>
                            <div class="viewcontent__action">
                                <span>Qty</span>
                                <input type="number" placeholder="1">
                                <a class="site-btn" href="#">add to cart</a>
                            </div>
                            <div class="viewcontent__footer">
                                <ul class="list-unstyled">
                                    <li>Category:</li>
                                    <li>SKU:</li>
                                    <li>Brand:</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li>Watches</li>
                                    <li>2584-MK63</li>
                                    <li>Brenda</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product popup end -->

        <!-- blog area start -->
        <div class="blog-area pt-120 pb-105">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="shop-filter-wrapper d-flex justify-content-between align-items-center mb-30">
                            <div class="sf-left">
                                <div class="show-text">
                                    <span>Showing 1–12 of 54 results</span>
                                </div>
                            </div>
                            <div class="sf-right d-flex justify-content-end align-items-center">
                                <nav>
                                    <div class="nav" id="shop-filter-tab" role="tablist">
                                        <a class="nav-link active" id="shop-tab-1-tab" data-bs-toggle="tab"
                                           href="#shop-tab-1" role="tab" aria-controls="shop-tab-1"
                                           aria-selected="true"><i class="fas fa-th"></i></a>
                                        <a class="nav-link" id="shop-tab-2-tab" data-bs-toggle="tab" href="#shop-tab-2"
                                           role="tab" aria-controls="shop-tab-2" aria-selected="false"><i
                                                class="fas fa-list-ul"></i></a>
                                    </div>
                                </nav>
                                <div class="sort-wrapper ml-45">
                                    <select name="select" id="select">
                                        <option value="1">Short By New</option>
                                        <option value="2">Short By New</option>
                                        <option value="3">Short By New</option>
                                        <option value="4">Short By New</option>
                                        <option value="5">Short By New</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="tab-content" id="shop-tabContent">
                            <div class="tab-pane fade show mt-none-30 active" id="shop-tab-1" role="tabpanel"
                                 aria-labelledby="shop-tab-1-tab">
                                <div class="row">
                                    @foreach($allProduct as $value)
                                        <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                            <div class="pp__item pp__item--2 active text-center pt-20 pb-20">
                                                <div
                                                    class="pp__action pp__action--2 d-flex align-items-center justify-content-center">
                                                    <div class="cart d-flex align-items-center justify-content-center">
                                                        <a href="#0"><i class="fal fa-shopping-basket"></i></a>
                                                    </div>
                                                    <div
                                                        class="wishlist d-flex align-items-center justify-content-center">
                                                        <a href="#0"><i class="fal fa-heart"></i></a>
                                                    </div>
                                                    <div class="view d-flex align-items-center justify-content-center">
                                                        <a href="#0"><i class="fal fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="pp__thumb pp__thumb--2 mt-35">
                                                    <img src="{{$value->image}}" alt="">
                                                </div>
                                                <div class="pp__content pp__content--2 mt-25">

                                                    <h4 class="pp__title pp__title--2">
                                                        <a href="{{route('client.product',['slug' => $value->slug])}}">{{$value->name}}</a>
                                                    </h4>
                                                    <div
                                                        class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                                        <h6 class="label">Price - </h6>
                                                        <span class="price"> {{number_format($value->price)}} đ</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade mt-none-30" id="shop-tab-2" role="tabpanel"
                                 aria-labelledby="shop-tab-2-tab">
                                <div class="row">
                                    @foreach($allProduct  as $value)
                                        <div class="col-xl-12 mt-30">
                                            <div
                                                class="pp__item pp__item--2 pp__item--list active text-center pt-30 pb-25">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div
                                                            class="pp__thumb pp__thumb--2 pp__thumb--list m-0">
                                                            <img src="{{$value->image}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <div
                                                            class="pp__content pp__content--2 pp__content--list m-0">
                                                            <h4 class="pp__title pp__title--2 pp__title--list">
                                                                <a href="{{route('client.product',['slug'=> $value->slug])}}">{{$value->name}}</a>
                                                            </h4>
                                                            <div
                                                                class="pp__price pp__price--2 pp__price--list d-flex align-items-center">
                                                                <h6 class="label">Price - </h6>
                                                                <span
                                                                    class="price">{{number_format($value->price)}} đ</span>
                                                            </div>
                                                            <div
                                                                class="pp__action pp__action--2 pp__action--list d-flex align-items-center mt-15">
                                                                <div
                                                                    class="cart d-flex align-items-center justify-content-center">
                                                                    <a href="#0"><i
                                                                            class="fal fa-shopping-basket"></i></a>
                                                                </div>
                                                                <div
                                                                    class="wishlist d-flex align-items-center justify-content-center">
                                                                    <a href="#0"><i
                                                                            class="fal fa-heart"></i></a>
                                                                </div>
                                                                <div
                                                                    class="view d-flex align-items-center justify-content-center">
                                                                    <a href="#0"><i
                                                                            class="fal fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="cafena-pagination mt-60">
                            <ul>
                                <li><a href="{{$allProduct->previousPageUrl()}}"><span><i
                                                class="far fa-angle-double-left"></i></span></a>
                                </li>
                                <li><a href="{{$allProduct->nextPageUrl()}}"><span><i
                                                class="far fa-angle-double-right"></i></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog__sidebar blog__sidebar--shop mt-none-30">
                            <div class="widget mt-30">
                                <h2 class="title">Search Here</h2>
                                <form action="" method="get" class="search-widget">
                                    <input type="text" name="search" id="search"
                                           placeholder="Serach Product" }}">
                                    <button><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                            <div class="widget mt-30">
                                <h2 class="title">Categories</h2>
                                <ul>
                                    @foreach($allCategory as $value)
                                        <li class="cat-item"><a href="#0">{{$value->name}}</a>
                                            <span>{{count($value->product)}}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget mt-30">
                                <h2 class="title">top Product</h2>
                                <div class="recent-posts top-products">
                                    @foreach($topProduct as $value)
                                        <div class="item d-flex align-items-center">
                                            <div class="thumb">
                                                <img src="{{$value->image}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div
                                                    class="rating d-flex align-items-center justify-content-center">
                                                    <a href="#0"><i class="fal fa-star"></i></a>
                                                    <a href="#0"><i class="fal fa-star"></i></a>
                                                    <a href="#0"><i class="fal fa-star"></i></a>
                                                    <a href="#0"><i class="fal fa-star"></i></a>
                                                    <a href="#0"><i class="fal fa-star"></i></a>
                                                </div>
                                                <h5 class="rp-title border-effect"><a
                                                        href="{{route('client.product',['slug' => $value->slug])}}">{{$value->name}}</a>
                                                </h5>
                                                <div class="pp__price">
                                                                <span
                                                                    class="price">{{number_format($value->price)}} đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->


    </main>
@endsection
