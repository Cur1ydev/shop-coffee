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
                        <h2 class="page-title">Cafena Cart</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="{{route('client.home')}}"><span>Home</span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>cart</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->


        <!-- cart area start -->
        <div class="cart-area pt-120 pb-120">
            <div class="container">
                @if(session('errorAddress'))
                    <p align="center" class="title" style="color: red">{{session('errorAddress')}}</p>
                @endif
                @if(session('errorPrice'))
                    <p align="center" class="title" style="color: red">{{session('errorPrice')}}</p>
                @endif
                <div class="row">
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
                                    @if(isset($cart)&&$cart!=null)
                                        @foreach($cart as $number => $value)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <span>
                                                        <img class="img" src="{{$value['image']}}" alt=""> <br>
                                                        <a href="{{route('client.deleteItemCart',['id' => $number])}}"
                                                           class="product-remove"><i class="fal fa-times"></i></a>
                                                    </span>

                                                </td>
                                                <td class="product-name"><a href="#">{{$value['name_product']}}</a><br>
                                                    @if($value['attribute'])
                                                        @if($value['attribute']['size'])
                                                            <p>Size: {{$value['attribute']['size']}}</p>
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
                                                    <input type="number" data-id="{{$number}}" class="quantityCart"
                                                           value="{{$value['quantity']}}">
                                                </td>
                                                @if(isset($value['attribute']['topping']))
                                                    <td class="product-subtotal"><span
                                                            class="amount amount_total">{{number_format((count($value['attribute']['topping'])*10000 + $value['price'])*$value['quantity'])}}</span>
                                                        đ
                                                    </td>
                                                @else
                                                    <td class="product-subtotal"><span
                                                            class="amount amount_total">{{number_format($value['price']*$value['quantity'])}}</span>
                                                        đ
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td align="center" colspan="5">Danh sách giỏ hàng hiện đang trống</td>
                                        </tr>

                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="cart-bottom-wrapper d-flex align-items-center">
                            <div class="coupon d-flex align-items-center">
                                <form action="" method="get">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                           placeholder="Mã Giảm Giá" type="text">
                                    <button class="site-btn site-btn site-btn__bghide">
                                        Áp Dụng
                                    </button>
                                </form>
                            </div>
                            <div class="clear-update d-flex align-items-center">
                                <button class="site-btn site-btn__bghide" id="clear-cart">Xóa Giỏ Hàng</button>
                            </div>
                            <div class="clear-update d-flex align-items-center">
                                <a href="{{route('client.menu')}}" class="site-btn site-btn__bghide" id="clear-cart">Tiếp
                                    Tục Đặt Hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-5">
                        <div class="cart-total mt-100">
                            <div class="reservation__wrapper reservation__wrapper--2">
                                <div class="section-heading section-heading__black text-center mb-35">
                                    <p class="title">Chọn Địa chỉ Đặt hàng</p>
                                </div>
                                <div class="reservation__form reservation__form--2 mt-none-30 text-center">
                                    <form action="{{route('client.saveAddress')}}" method="get">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="from-group mt-30">
                                                    <select name="province" id="province">
                                                        <option data-display="Service Category" value="">Tỉnh Thành
                                                        </option>
                                                        @foreach($province as $value)
                                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('province')
                                                <p align="center" style="color: red">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="from-group mt-30">
                                                    <select name="address" id="address">
                                                    </select>
                                                </div>
                                                @error('address')
                                                <p align="center" style="color: red">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="col-xl-12 text-center">
                                                <button type="submit" class="site-btn mt-30">Lưu địa chỉ</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-7">
                        <div class="cart-total mt-100">
                            <h2 class="title">Tổng Tiền Thanh Toán</h2>
                            <div class="ct-sub">
                                <span>Tổng Tiền Hàng</span>
                                <span id="total_order"></span>
                            </div>
                            <div class="ct-sub">
                                <span>Áp dụng mã giảm giá</span>
                                <span id="coupon">{{isset($discount->price)?number_format($discount->price):0}}</span>
                            </div>
                            <div class="ct-sub ct-sub__total">
                                <span>Tổng</span>
                                <span id="total"></span>
                            </div>
                            <button class="site-btn" id="checkout">Thanh toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart area end -->
    </main>
    <script>
        $(document).ready(function () {
            $('.quantityCart').change(function () {
                let quantity = $(this).val();
                if (quantity < 1) {
                    alert('Số lượng không được nhỏ hơn 1');
                    $(this).val(1)
                    return;
                }
                const keyProduct = $(this).attr('data-id')
                $.ajax({
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    url: '{{route('client.increaseQuantity')}}',
                    method: 'get',
                    data: {
                        quantity: quantity,
                        keyProduct: keyProduct
                    },
                    success: function (data) {
                        location.reload()
                    },
                    error: function (error) {
                        console.log(error)
                    }
                })
            })
            $('#clear-cart').click(function () {
                if (confirm('Bạn chắc chắn muốn xóa hết giỏ hàng không ?')) {
                    window.location.href = "{{route('client.deleteSS')}}"
                }
            })
            let allTotal = 0;
            var allPrice = document.querySelectorAll('.amount_total');
            allPrice.forEach((item) => {
                let total = parseInt(item.innerHTML.replace(/,/g, ''));
                allTotal += total;
            })
            document.querySelector('#total_order').innerHTML = allTotal.toLocaleString();
            $('#province').change(function () {
                const idProvince = $(this).val();
                $.ajax({
                    url: '{{route('client.address')}}',
                    method: 'Get',
                    data: {
                        idProvince: idProvince
                    },
                    success: function (data) {
                        $('#address').empty();
                        $.each(data.data, function (key, value) {
                            $('#address').append('<option value="' + value.address + '">' + value.address + '</option>')
                            // console.log(value)
                            console.log(key)
                        })
                    },
                    error: function (error) {
                        console.log(error)
                    }
                })
            })
            const coupon = $('#coupon').text().replace(/,/g, '')
            const total = parseInt(allTotal) - parseInt(coupon) < 0 ? 0 : parseInt(allTotal) - parseInt(coupon)
            document.querySelector('#total').innerHTML = total.toLocaleString() + "đ"
            $('#checkout').click(function () {
                $.ajax({
                    url: '{{route('client.pushPrice')}}',
                    method: 'Get',
                    data: {
                        total: total
                    },
                    success: function () {
                        window.location.href = '{{route('client.checkout')}}'
                    }
                })
            })
        })
    </script>

@endsection
