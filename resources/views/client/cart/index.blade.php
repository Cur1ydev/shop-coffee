@extends('client.layout')
@section('content')
    @if(session('deleteSuccess'))
        <script>alert('{{session('deleteSuccess')}}')</script>
    @endif
    @if(session('deleteItem'))
        <script>alert('{{session('deleteItem')}}')</script>
    @endif
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
        <div class="cart-area pt-120 pb-120">
            <div class="container">
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
                                    @if(isset($cart))
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
                                                    <input type="number" class="quantityCart"
                                                           value="{{$value['quantity']}}">
                                                </td>
                                                @if(isset($value['attribute']['topping']))
                                                    <td class="product-subtotal"><span
                                                            class="amount amount_total">{{number_format((count($value['attribute']['topping'])*10000 + $value['price'])*$value['quantity'])}}</span>
                                                        đ
                                                    </td>
                                                @else
                                                    <td class="product-subtotal"><span
                                                            class="amount amount_total">{{number_format($value['price']* $value['quantity'])}}</span>
                                                        đ
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        @if(!isset($cart)||count($cart)==0)
                                            <tr>
                                                <td align="center" colspan="5">Danh sách giỏ hàng hiện đang trống</td>
                                            </tr>
                                        @endif
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
                                    <button class="site-btn site-btn site-btn__bghide" name="apply_coupon"
                                            type="submit">
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
                    <div class="col-xl-5 col-lg-7">
                        <div class="cart-total mt-100">
                            <h2 class="title">Cart Total</h2>
                            <div class="ct-sub">
                                <span>Sub Total</span>
                                <span id="total_order"></span>
                            </div>
                            <div class="ct-sub ct-sub__total">
                                <span>Total</span>
                                <span>$ 180</span>
                            </div>
                            <a href="checkout.html" class="site-btn">Procced to checkout</a>
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
                if ($(this).val() < 1) {
                    alert('Số lượng không được nhỏ hơn 1');
                    $(this).val(1)
                }
                const price = parseInt($(this).closest('tr').find('.product-price .amount_price').text().replace(/,/g, ''))
                const quantity = parseInt($(this).val());
                const total = price * quantity;
                const total_price = $(this).closest('tr').find('.product-subtotal .amount_total');
                total_price.text(total.toLocaleString()).text()
            })
            $('#clear-cart').click(function () {
                if (confirm('Bạn chắc chắn muốn xóa hết giỏ hàng không ?')) {
                    window.location.href = "{{route('client.deleteSS')}}"
                }
            })
            let allTotal =0;
            var allPrice = document.querySelectorAll('.amount_total');
            allPrice.forEach((item) => {
                let total = parseInt(item.innerHTML.replace(/,/g, ''));
                allTotal +=total;
            })
            document.querySelector('#total_order').innerHTML = allTotal.toLocaleString() + "đ";
        })
    </script>
@endsection
