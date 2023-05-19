@extends('client.layout')
@section('content')
    <main>
        <h1 align="center" class="title">Đặt hàng thành công</h1>
        <!-- cart area start -->
        <p align="center" style="color: red">Nhân viên bán hàng sẽ gọi điện cho bạn sau 15p ngay sau khi bạn đặt hàng thành công.Cinn Cảm
            Mơnn <3</p>
        <div align="center">
        <a href="{{route('client.home')}}"  class="site-btn site-btn site-btn__bghide" >
            Quay về Trang Chủ
        </a>
        </div>
        <div class="cart-area pt-120 pb-120">
            <div class="container">
                <h4 align="center">Thông Tin Đơn Hàng Đã Đặt Trong 24h Qua</h4>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cart-wrapper">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Mã Đơn Hàng</th>
                                        <th>Ảnh</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Thuộc Tính</th>
                                        <th>Giá</th>
                                        <th>Số Lượng</th>
                                        <th>Tổng Tiền</th>
                                        <th>Địa Chỉ Nhận Hàng</th>
                                        <th>Tên Khách Hàng</th>
                                        <th>Số Điện Thoại</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order as $value)
                                        <tr align="center">
                                            <td>{{$value->order_code}}</td>
                                            <td class="product-thumbnail">
                                                <a class="img">
                                                    <img src="{{$value->product->image}}" alt="">
                                                </a>
                                            </td>
                                            <td class="product-name"><a>{{$value->product->name}}</a></td>
                                            @php $attribute = json_decode($value->attribute) @endphp
                                            <td class="product-price"><span
                                                    class="amount">Size: {{$attribute->size}} <br>
                                                    @if(isset($attribute->topping))
                                                        Topping đi kèm : @foreach($attribute->topping as $index)
                                                            {{$index}}
                                                        @endforeach
                                                    @endif

                                                </span></td>
                                            <td>{{number_format($value->price)}}đ</td>
                                            <td>{{$value->quantity}}</td>
                                            <td>{{number_format($value->total_price)}}đ</td>
                                            <td>{{$value->address}}</td>
                                            <td>{{$value->username}}</td>
                                            <td>{{$value->phone_number}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart area end -->


    </main>
@endsection
