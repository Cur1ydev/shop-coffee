@extends('admin.layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>Danh Sách Thông Báo </h5>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-product" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Thông báo</th>
                                            <th>Ngày</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @if($countNoti >0)
                                            @foreach($notification as $value)
                                                <tr>
                                                    <td>{{$value->message}}</td>
                                                    <td>{{$value->created_at}}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td>Bạn chưa có thông báo mới nào</td>
                                            </tr>
                                        @endif

                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <a href="{{route('admin.deleteNoti')}}" align="center">Xoá hết thông báo</a>
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
