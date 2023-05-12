@extends('admin.layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>Danh Sách Sản Phẩm</h5>
                                <div class="right-options">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">import</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Export</a>
                                        </li>
                                        <li>
                                            <a class="btn btn-solid" href="{{route('admin.product.add')}}">Thêm sản
                                                phẩm</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-product" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Ảnh</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Danh Mục</th>
                                            <th>Đường dẫn sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Giảm giá</th>
                                            <th>Trạng Thái</th>
                                            <th>Mô tả</th>
                                            <th>Hành Động</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($List as $key => $value)
                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{$value->image}}" class="img-fluid"
                                                             alt="">
                                                    </div>
                                                </td>

                                                <td>{{$value->name}}</td>

                                                <td>{{$value->category->name}}</td>

                                                <td>{{$value->slug}}</td>

                                                <td class="td-price">{{number_format($value->price)}} đ</td>

                                                <td class="td-price">{{number_format($value->discount)}} đ</td>
                                                <td class="{{$value->status==0?'status-danger':'status-close'}}">
                                                    <span>{{$value->status==0?'Ngừng Kinh Doanh':'Sẵn Sàng'}}</span>
                                                </td>
                                                <td>
                                                    {{$value->description}}
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{route('admin.product.update',['id'=>$value->id])}}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('admin.product.delete',['id'=>$value->id])}}" >
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
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
