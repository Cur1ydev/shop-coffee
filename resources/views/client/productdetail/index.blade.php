{{--{{dd($getAll->attribute)}}--}}
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
                        <h2 class="page-title">Product Details</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="index.html"><span>Home</span></a>
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

        <!-- product details area start -->
        <div class="product-details__area pt-120 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="product-details__wrapper">
                            <div class="pd-img">
                                <div class="tab-content" id="pdContent">
                                    <div class="tab-pane fade show active" id="pd-1" role="tabpanel"
                                         aria-labelledby="pd-1-tab">
                                        <div class="big-img">
                                            <img src="{{$getAll->image}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pd-2" role="tabpanel" aria-labelledby="pd-2-tab">
                                        <div class="big-img">
                                            <img src="{{asset('client/assets/images/products/pp-2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pd-3" role="tabpanel" aria-labelledby="pd-3-tab">
                                        <div class="big-img">
                                            <img src="{{asset('client/assets/images/products/pp-3.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pd-4" role="tabpanel" aria-labelledby="pd-4-tab">
                                        <div class="big-img">
                                            <img src="{{asset('client/assets/images/products/pp-1.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pd-5" role="tabpanel" aria-labelledby="pd-5-tab">
                                        <div class="big-img">
                                            <img src="{{asset('client/assets/images/products/pp-2.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-tab">
                                <nav>
                                    <div class="nav" id="shop-filter-tab" role="tablist">
                                        <a class="nav-link active" id="pd-1-tab" data-bs-toggle="tab" href="#pd-1"
                                           role="tab" aria-controls="pd-1" aria-selected="true">
                                            <img src="{{asset('client/assets/images/products/shop/s-p-1.png')}}" alt="">
                                        </a>
                                        <a class="nav-link" id="pd-2-tab" data-bs-toggle="tab" href="#pd-2" role="tab"
                                           aria-controls="pd-2" aria-selected="true">
                                            <img src="{{asset('client/assets/images/products/shop/s-p-2.png')}}" alt="">
                                        </a>
                                        <a class="nav-link" id="pd-3-tab" data-bs-toggle="tab" href="#pd-3" role="tab"
                                           aria-controls="pd-3" aria-selected="true">
                                            <img src="{{asset('client/assets/images/products/shop/s-p-3.png')}}" alt="">
                                        </a>
                                        <a class="nav-link" id="pd-4-tab" data-bs-toggle="tab" href="#pd-4" role="tab"
                                           aria-controls="pd-4" aria-selected="true">
                                            <img src="{{asset('client/assets/images/products/shop/s-p-4.png')}}" alt="">
                                        </a>
                                        <a class="nav-link" id="pd-5-tab" data-bs-toggle="tab" href="#pd-5" role="tab"
                                           aria-controls="pd-5" aria-selected="true">
                                            <img src="{{asset('client/assets/images/products/shop/s-p-5.png')}}" alt="">
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="product-details__content">
                            <div class="tr-wrapper d-flex align-items-center justify-content-between">
                                <h2 class="title">{{$getAll->name}}</h2>
                                <div class="rating-wrapper d-flex align-items-center justify-content-center">
                                    <div class="rattings d-flex align-items-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </div>
                                    <span class="rt-number">04 - Customar Review</span>
                                </div>
                            </div>
                            <p>{{$getAll->description}}</p>
                            <span class="in-stock">
                                <i class="fal fa-check"></i> In Stock
                            </span>
                            <h3 class="price">{{number_format($getAll->price)}} đ</h3>
                            <br>
                            <h4 id="title">Chọn size</h4>
                            <div class="popular-menu__wrapper m-auto d-inline-block">
                                <div class="popular-menu__filter d-flex mb-45">
                                    @foreach($getAll->attribute as $value)
                                        @if($value->name=='size')
                                            <button dt-size="{{$value->value}}" dt-price="{{$value->price}}"
                                                    class="button-size {{$value->value=='Nhỏ'?'active':''}}"
                                            >{{$value->value ." + ". number_format($value->price)}}đ</button>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <br>
                            <h4 id="title">Chọn Topping</h4>
                            <div class="popular-menu__wrapper m-auto d-inline-block">
                                <div class="popular-menu__filter1 d-flex mb-45">
                                    @foreach($getAll->attribute as $value)
                                        @if($value->name=='topping')
                                            <button dt-topping="{{$value->value}}"
                                                    class="button-topping">{{$value->value}}</button>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <p style="color: red">Lưu ý: Topping sẽ chiếm 10,000đ cho mỗi loại</p>
                            <div class="product-quantity d-flex align-items-center">
                                <span>Quantity</span>
                                <input type="number" id="quantity" value="1">
                                <button class="site-btn addToCart">add to cart</button>
                            </div>
                            <a href="#0" class="wishlist"><i class="fas fa-heart"></i> Add to watch list</a>
                            <div class="pd-social-wrapper">
                                <span class="share"><i class="fas fa-share"></i> Share</span>
                                <div class="social-links d-flex align-items-center">
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
            </div>
        </div>
        <!-- product details area end -->

        <!-- product info start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="pinfo-tab">
                        <nav>
                            <div class="nav d-flex align-items-center justify-content-center" id="pinfo-tab"
                                 role="tablist">
                                <a class="nav-link active" id="pinfo-1-tab" data-bs-toggle="tab" href="#pinfo-1"
                                   role="tab" aria-controls="pinfo-1" aria-selected="true">
                                    Product Details
                                </a>
                                <a class="nav-link" id="pinfo-2-tab" data-bs-toggle="tab" href="#pinfo-2" role="tab"
                                   aria-controls="pinfo-2" aria-selected="true">
                                    additional imformation
                                </a>
                                <a class="nav-link" id="pinfo-3-tab" data-bs-toggle="tab" href="#pinfo-3" role="tab"
                                   aria-controls="pinfo-3" aria-selected="true">
                                    (04) Review
                                </a>
                            </div>
                        </nav>
                    </div>
                    <div class="tab-content pinfo-content" id="pinfoContent">
                        <div class="tab-pane fade show active" id="pinfo-1" role="tabpanel"
                             aria-labelledby="pinfo-1-tab">
                            <p>Rrem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                ratione voluptatem sequi nesciunt. Neque porro quisquam est,</p>
                        </div>
                        <div class="tab-pane fade" id="pinfo-2" role="tabpanel" aria-labelledby="pinfo-2-tab">
                            <ul class="adi-info list-unstyled mb-0">
                                <li>Weight</li>
                                <li>1.4 oz</li>
                                <li>Dimensions</li>
                                <li>62 × 56 × 12 in</li>
                                <li>Size</li>
                                <li>XL, XXL, LG, SM, MD</li>
                                <li>Fabric</li>
                                <li>Cotton, Silk &amp; Synthetic</li>
                                <li>Warranty</li>
                                <li>3 Months</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pinfo-3" role="tabpanel" aria-labelledby="pinfo-3-tab">
                            <div class="pp-comments">
                                <div class="comment d-flex">
                                    <div class="thumb">
                                        <img src="{{asset('client/assets/images/author/c-author-1.png')}}" alt="img">
                                    </div>
                                    <div class="content pl-20">
                                        <h5 class="name">Roger West -<span class="date">June 5, 2021</span></h5>
                                        <div class="review d-flex">
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation.</p>
                                    </div>
                                </div>
                                <div class="comment d-flex">
                                    <div class="thumb">
                                        <img src="{{asset('client/assets/images/author/c-author-2.png')}}" alt="img">
                                    </div>
                                    <div class="content pl-20">
                                        <h5 class="name">Aayat West -<span class="date">June 9, 2021</span></h5>
                                        <div class="review d-flex">
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-comments-form mt-50">
                                <h4 class="title">Add a Review</h4>
                                <div class="rev-top d-flex align-items-center mb-40">
                                    <span>Your Rating:</span>
                                    <div class="review d-flex align-items-center">
                                        <a href="#0"><i class="fal fa-star"></i></a>
                                        <a href="#0"><i class="fal fa-star"></i></a>
                                        <a href="#0"><i class="fal fa-star"></i></a>
                                        <a href="#0"><i class="fal fa-star"></i></a>
                                        <a href="#0"><i class="fal fa-star"></i></a>
                                    </div>
                                </div>
                                <form action="https://xpressrow.com/html/cafena/cafena/index.html">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-15">
                                                <label for="message">YOUR REVIEW</label>
                                                <textarea name="message" id="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-30">
                                                <label for="message">Name</label>
                                                <input type="text" name="name" id="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-30">
                                                <label for="email2">Email</label>
                                                <input type="email" name="email2" id="email2">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="site-btn">submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product info end -->

        <!-- releted products area start -->
        <div class="releted-product__area pt-100 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h2 class="rp-title mb-30">
                            các sản phẩm liên quan
                        </h2>
                    </div>
                </div>
                <div class="row mt-none-30">
                    @foreach($relateProduct->product as $value)
                    <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                        <div class="pp__item pp__item--2 text-center pt-20 pb-20">

                            <div class="pp__thumb pp__thumb--2 mt-35">
                                <img src="{{$value->image}}" alt="">
                            </div>
                            <div class="pp__content pp__content--2 mt-25">
                                <h4 class="pp__title pp__title--2">
                                    <a href="{{route('client.product',['slug'=> $value->slug])}}">{{$value->name}}</a>
                                </h4>
                                <div class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                    <h6 class="label">Price - </h6>
                                    <span class="price">{{number_format($value->price)}}</span>đ
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- releted products area end -->
    </main>
    <script>
        $(document).ready(function () {
            let dtSize = $("button[dt-size]").attr("dt-size");
            let dtTopping = "";
            let array_topping = [];
            let price = {{$getAll->price}};
            $('.button-size').click(function () {
                dtSize = $(this).attr('dt-size');
                price += parseInt($(this).attr('dt-price'))
            })
            $('.button-topping').click(function () {
                dtTopping = $(this).attr('dt-topping')
                if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                    const index = array_topping.indexOf(dtTopping);
                    if (index !== -1) {
                        array_topping.splice(index, 1);
                    }
                } else {
                    $(this).addClass('active')
                    array_topping.push(dtTopping)
                }
            })
            $('#quantity').change(function () {
                if ($(this).val() < 1) {
                    alert('Số lượng không được phép nhỏ hơn 1')
                    $(this).val(1)
                }
            })
            $('.addToCart').click(function () {
                const name_product = "{{$getAll->name}}";
                const image = "{{$getAll->image}}";
                const attribute = {
                    size: dtSize,
                    topping: array_topping
                };
                const quantity = $('#quantity').val();
                const id = {{$getAll->id}};
                $.ajax({
                    url: '{{route('client.addtocart')}}',
                    method: "Post",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        id: id,
                        name_product: name_product,
                        image: image,
                        attribute: attribute,
                        price: price,
                        quantity: quantity
                    },
                    success: function (data) {
                        // alert(data.success);
                        // console.log(data.data)
                        window.location.href = '{{route('client.cart')}}';
                    },
                    error: function (error) {
                        console.error(error)
                    }
                })
            })
        })
    </script>
@endsection

