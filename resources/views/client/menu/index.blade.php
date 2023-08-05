@extends('client.layout')
@section('content')
    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area pt-140 pb-140 bg_img" data-background="{{asset('client/assets/images/bg/breadcrumb-bg-1.jpeg')}}" data-overlay="dark" data-opacity="5">
            <div class="shape shape__1"><img src="{{asset('client/assets/images/shape/breadcrumb-shape-1.png')}}" alt=""></div>
            <div class="shape shape__2"><img src="{{asset('client/assets/images/shape/breadcrumb-shape-2.png')}}" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h2 class="page-title">cafena menu</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="{{route('client.home')}}"><span>Home</span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>menu</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- populer menu area start -->
        <section class="popular-menu__area position-relative pb-120 pt-115">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="section-heading section-heading__black mb-40">
                            <span class="sub-title">menu</span>
                            <h2 class="title">Our Popular Menu</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="popular-menu__wrapper m-auto d-inline-block">
                            <div class="popular-menu__filter d-flex justify-content-center align-items-center mb-45">
                                <button class="active" data-filter="*">All</button>
                                @foreach($category as $value)
                                <button data-filter=".cat{{$value->id}}">{{$value->name}}</button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div id="popular-menu-grid-2" class="row popular-menu__grid popular-menu__lists mt-none-30">
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-sizer"></div>
                    @foreach($product as $value)
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat{{$value->category_id}}">
                        <div class="popular-menu__list">
                            <div class="thumb">
                                <img src="{{$value->image}}" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title border-effect"><a href="{{route('client.product',['slug'=>$value->slug])}}">{{$value->name}}</a></h3>
                                <span class="price">{{number_format($value->price)}} đ</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <a href="#0" class="site-btn mt-60">load more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- populer menu area end -->

    </main>
@endsection
