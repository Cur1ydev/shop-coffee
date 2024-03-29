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
                        <h2 class="page-title">Cafena Story</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="{{route('client.home')}}"><span>Home</span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>Story</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- about area start -->
        <section class="about__area about__area--2 position-relative pt-120 pb-105">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="wwa-wrapper">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="about__right about__right--2 about__right--5 pl-45 pt-45">
                                        <div class="section-heading section-heading__black">
                                            <span class="sub-title">who we are</span>
                                            <h2 class="title mb-25">More than 27 years of
                                                experience</h2>
                                            <p>Mauris rhoncus orci in imperdiet placerat. Vestibulum euismod nisl suscipit ligula volutpat, a feugiat urna maximus. Cras massa nibhtincidunt.</p>
                                        </div>
                                        <ul class="about__list list-unstyled mt-25">
                                            <li><span class="icon"><i class="fal fa-check"></i></span> What is Lorem Ipsum Lorem Ipsum is simply.</li>
                                            <li><span class="icon"><i class="fal fa-check"></i></span> Dummy text of the printing text.</li>
                                            <li><span class="icon"><i class="fal fa-check"></i></span> Typesetting industry Lorem Ipsum has been the industry's</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="wwa-wrapper__img">
                                <img src="{{asset('client/assets/images/bg/wwa-1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->

        <!-- wcu section start -->
        <section class="wcu__area pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="section-heading section-heading__black mb-60">
                            <span class="sub-title">who we are</span>
                            <h2 class="title">Make A new Story with us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="story-list">
                            <span class="plus"><i class="fal fa-plus"></i></span>
                            <div class="story-list__box">
                                <span class="count">01</span>
                                <div class="story-list__box--inner">
                                    <div class="thumb">
                                        <img src="{{asset('client/assets/images/story/story-1.jpg')}}" alt="">
                                        <span class="year">1987</span>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">Future Goal With Coffee</h2>
                                        <p>Donec et nibh maximus, congue est eu, mattis Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="story-list__box">
                                <span class="count">02</span>
                                <div class="story-list__box--inner">
                                    <div class="thumb">
                                        <img src="{{asset('client/assets/images/story/story-2.jpg')}}" alt="">
                                        <span class="year">1987</span>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">Future Goal With Coffee</h2>
                                        <p>Donec et nibh maximus, congue est eu, mattis Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="story-list__box">
                                <span class="count">03</span>
                                <div class="story-list__box--inner">
                                    <div class="thumb">
                                        <img src="{{asset('client/assets/images/story/story-3.jpg')}}" alt="">
                                        <span class="year">2014</span>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">Future Goal With Coffee</h2>
                                        <p>Donec et nibh maximus, congue est eu, mattis Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="story-list__box">
                                <span class="count">04</span>
                                <div class="story-list__box--inner">
                                    <div class="thumb">
                                        <img src="{{asset('client/assets/images/story/story-4.jpg')}}" alt="">
                                        <span class="year">2019</span>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">Future Goal With Coffee</h2>
                                        <p>Donec et nibh maximus, congue est eu, mattis Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- wcu section end -->

        <!-- blog area start -->
        <div class="blog__area blog__area--2 position-relative pt-120 pb-115">
            <div class="container">
                <div class="row align-items-end mb-60">
                    <div class="col-lg-8">
                        <div class="section-heading section-heading__black">
                            <span class="sub-title">News & Blog</span>
                            <h2 class="title">Latest news & Blog</h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="btns-wrapper text-center text-lg-end">
                            <a href="about.html" class="site-btn">learn more</a>
                        </div>
                    </div>
                </div>
                <div class="row mt-none-30">
                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                        <article class="blog__item blog__item--2">
                            <div class="thumb position-relative">
                                <div class="img">
                                    <img src="{{asset('client/assets/images/blog/blog-2-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="content content__2">
                                <ul class="blog__meta blog__meta--2 list-unstyled d-flex align-items-center justify-content-start">
                                    <li><span>By: </span> Rasalina</li>
                                </ul>
                                <h3 class="blog__title blog__title--2 border-effect">
                                    <a href="blog-details.html">Build a cool mornig with cafena Coffee</a>
                                </h3>
                                <div class="btn-wrapper mt-15 d-flex justify-content-between">
                                    <a href="blog-details.html" class="read-more read-more__2">Read more <i class="fa fa-long-arrow-right"></i></a>
                                    <a href="#0" class="share-btn"><i class="fal fa-share-alt"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                        <article class="blog__item blog__item--2">
                            <div class="thumb position-relative">
                                <div class="img">
                                    <img src="{{asset('client/assets/images/blog/blog-2-2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="content content__2">
                                <ul class="blog__meta blog__meta--2 list-unstyled d-flex align-items-center justify-content-start">
                                    <li><span>By: </span> Rasalina</li>
                                </ul>
                                <h3 class="blog__title blog__title--2 border-effect">
                                    <a href="blog-details.html">ideal cocktails from our barmen for pefect mood</a>
                                </h3>
                                <div class="btn-wrapper mt-15 d-flex justify-content-between">
                                    <a href="blog-details.html" class="read-more read-more__2">Read more <i class="fa fa-long-arrow-right"></i></a>
                                    <a href="#0" class="share-btn"><i class="fal fa-share-alt"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                        <article class="blog__item blog__item--2">
                            <div class="thumb position-relative">
                                <div class="img">
                                    <img src="{{asset('client/assets/images/blog/blog-2-3.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="content content__2">
                                <ul class="blog__meta blog__meta--2 list-unstyled d-flex align-items-center justify-content-start">
                                    <li><span>By: </span> Rasalina</li>
                                </ul>
                                <h3 class="blog__title blog__title--2 border-effect">
                                    <a href="blog-details.html">Questions business must be able to answers</a>
                                </h3>
                                <div class="btn-wrapper mt-15 d-flex justify-content-between">
                                    <a href="blog-details.html" class="read-more read-more__2">Read more <i class="fa fa-long-arrow-right"></i></a>
                                    <a href="#0" class="share-btn"><i class="fal fa-share-alt"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->

    </main>
@endsection
