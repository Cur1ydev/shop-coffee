@extends('admin.layout')
@section('content')
    <div class="page-body">
        <!-- All User Table Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>Danh sách danh mục</h5>
                                <form class="d-inline-flex">
                                    <a href="{{route('admin.category.add')}}"
                                       class="align-items-center btn btn-theme d-flex">
                                        <i data-feather="plus-square"></i>Thêm danh mục
                                    </a>
                                </form>
                            </div>

                            <div class="table-responsive category-table">
                                <div>
                                    <table class="table all-package theme-table" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Đường dẫn danh mục</th>
                                            <th>Trạng thái</th>
                                            <th>Mô tả</th>
                                            <th>Hành động</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($List as $value)
                                            <tr>
                                                <td>{{$value->name}}</td>

                                                <td>{{$value->slug}}</td>

                                                <td class="{{$value->status==0?'status-danger':'status-close'}}">
                                                    <span>{{$value->status==0?'Ngừng Kinh Doanh':'Sẵn Sàng'}}</span>
                                                </td>

                                                <td>{{$value->description}}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{route('admin.category.update',['id'=>$value->id])}}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('admin.category.delete',['id'=>$value->id])}}">
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
        <!-- All User Table Ends-->

        <div class="container-fluid">
            <!-- footer start-->
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
    </div>
@endsection
