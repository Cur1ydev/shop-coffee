@extends('admin.layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>Danh sách Đơn hàng</h5>
                                <div class="right-options">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">import</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Export</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-product" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Hành Động</th>
                                            <th>Tên khách hang</th>
                                            <th>Số điện thoại</th>
                                            <th>Ghi chú</th>
                                            <th>Mã đơn hàng</th>
                                            <th>Mã giảm giá</th>
                                            <th>Ảnh sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Trạng thái</th>
                                            <th>Size,Topping tương ứng</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($getAll as $value)
                                            <tr>
                                                <td><a href="{{route('admin.orderitem.delete',['id' => $value->id])}}">Đã nhận sản phẩm</a>
                                                </td>
                                                <td>{{$value->username}}</td>
                                                <td>{{$value->phone_number}}</td>
                                                <td>{{$value->note}}</td>
                                                <td>{{$value->order_code}}</td>
                                                <td>{{$value->coupon}}</td>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{$value->product->image}}" class="img-fluid"
                                                             alt="">
                                                    </div>
                                                </td>

                                                <td>{{$value->product->name}}</td>

                                                <td class="{{$value->status->id==2?'status-danger':'status-close'}}">
                                                    <span>{{$value->status->name}}</span>
                                                </td>
                                                @php $attribute = json_decode($value->attribute) @endphp
                                                <td><span>Size: {{$attribute->size}} <br>
                                                    @if(isset($attribute->topping))
                                                            Topping đi kèm : @foreach($attribute->topping as $index)
                                                                {{$index}}
                                                            @endforeach
                                                        @endif

                                                </span></td>

                                                <td class="td-price">{{number_format($value->price)}}đ</td>

                                                <td>{{$value->quantity}}</td>
                                                <td class="td-price">{{number_format($value->total_price)}}đ</td>
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
        </div>
        <!-- Container-fluid Ends-->

        <div class="container-fluid">
            <!-- footer start-->
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
