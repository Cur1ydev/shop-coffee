@extends('client.layout')
@section('content')
    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area pt-140 pb-140 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.jpeg"
                 data-overlay="dark" data-opacity="5">
            <div class="shape shape__1"><img src="{{asset('client/assets/images/shape/breadcrumb-shape-1.png')}}"
                                             alt=""></div>
            <div class="shape shape__2"><img src="{{asset('client/assets/images/shape/breadcrumb-shape-2.png')}}"
                                             alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h2 class="page-title">Cafena Checkout</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="{{route('client.home')}}"><span>Home</span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>Faq</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- cart area start -->
        <div class="checkout-area pt-120 pb-120">
            <div class="container">
                <div class="row">

                    <div class="col-xl-12">

                        <div class="cart-wrapper checkout-wrapper">
                            <form action="{{route('client.payment')}}" method="post">
                                <div class="row">
                                    <h1 class="title" align="center">Xác nhận đơn hàng</h1>
                                    <div class="col-xl-5">
                                        <div class="checkout-top">
                                            <div class="tab-content" id="pdContent">
                                                <h2 class="title text-start">Thông Tin Khách Hàng</h2>
                                                <div class="tab-pane fade show active" id="pd-1" role="tabpanel"
                                                     aria-labelledby="pd-1-tab">
                                                    <div class="cart-form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <input type="text" name="name" id="name"
                                                                           placeholder="Tên người nhận">
                                                                </div>
                                                                @error('name')
                                                                <p align="center" style="color: red">{{$message}}</p>
                                                                @enderror
                                                            </div>

                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <input type="text" name="phone_number" id="tel"
                                                                           placeholder="Số điện thoại">
                                                                </div>
                                                                @error('phone_number')
                                                                <p align="center" style="color: red">{{$message}}</p>
                                                                @enderror
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="from-group mt-30">
                                                                    <textarea name="note" id="ainfo"
                                                                              placeholder="Ghi chú"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-6">
                                        <div class="row" align="center">
                                            <div class="col-xl-12">
                                                <div class="cart-wrapper">
                                                    <div class="table-content table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th class="product-thumbnail">Product Image</th>
                                                                <th class="cart-product-name">Product Name</th>
                                                                <th class="product-price">Price</th>
                                                                <th class="product-quantity">Quantity</th>
                                                                <th class="product-subtotal">subTotal</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach(session()->get('cart') as $number => $value)
                                                                <tr>
                                                                    <td class="product-thumbnail">
                                                    <span>
                                                        <img class="img" src="{{$value['image']}}" alt="">
                                                    </span>

                                                                    </td>
                                                                    <td class="product-name"><a
                                                                            href="#">{{$value['name_product']}}</a><br>
                                                                        @if($value['attribute'])
                                                                            @if($value['attribute']['size'])
                                                                                <p>
                                                                                    Size: {{$value['attribute']['size']}}</p>
                                                                            @endif
                                                                            @if(isset($value['attribute']['topping']))
                                                                                @php $countTopping= count($value['attribute']['topping']) @endphp
                                                                                <p>Topping đi
                                                                                    kèm: @foreach($value['attribute']['topping'] as $key => $item)
                                                                                        {{$item}}@if($key<$countTopping-1)
                                                                                            {{","}}
                                                                                        @endif
                                                                                    @endforeach</p>
                                                                            @endif
                                                                        @endif
                                                                    </td>
                                                                    @if(isset($value['attribute']['topping']))
                                                                        <td class="product-price"><span
                                                                                class="amount amount_price">{{number_format(count($value['attribute']['topping'])*10000 + $value['price'])}}</span>
                                                                            đ
                                                                        </td>
                                                                    @else
                                                                        <td class="product-price"><span
                                                                                class="amount amount_price">{{number_format($value['price'])}}</span>
                                                                            đ
                                                                        </td>
                                                                    @endif
                                                                    <td class="product-quantity">
                                                                        <input type="number" data-id="{{$number}}"
                                                                               class="quantityCart"
                                                                               value="{{$value['quantity']}}">
                                                                    </td>
                                                                    @if(isset($value['attribute']['topping']))
                                                                        <td class="product-subtotal"><span
                                                                                class="amount amount_total">{{number_format((count($value['attribute']['topping'])*10000 + $value['price'])*$value['quantity'])}}</span>
                                                                            đ
                                                                        </td>
                                                                    @else
                                                                        <td class="product-subtotal"><span
                                                                                class="amount amount_total">{{number_format($value['total_price'])}}</span>
                                                                            đ
                                                                        </td>
                                                                    @endif
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-total mt-45 text-end">
                                            <h2 class="title text-start">Tổng Tiền</h2>
                                            <div class="ct-sub ct-sub__total">
                                                <span>Total</span>
                                                <span>{{number_format(session()->get('allPrice'))}}đ</span>
                                            </div>
                                            <input type="text" name="total_price" value="{{session()->get('allPrice')}}"
                                                   hidden>
                                            <button type="submit" name="payvnpay" class="btn btn-primary"
                                                    style="margin-top: 1em !important; width: 100%">Thanh toán bằng
                                                VNPAY
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart area end -->


    </main>
@endsection
