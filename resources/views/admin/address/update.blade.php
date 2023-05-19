@extends('admin.layout')
@section('content')
    <div class="page-body">
        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Cập nhật Địa chỉ</h5>
                                    </div>

                                    <form action="" method="post" class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Chọn Tỉnh thành</label>
                                            <div class="col-sm-9">
                                                <select  class="js-example-basic-single w-100" name="id_province_order">
                                                    @foreach($province as $value)
                                                        <option value="{{$value->id}}" {{$find->id_province_order==$value->id?'selected':''}}>{{$value->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Địa chỉ</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="address" type="text"
                                                       placeholder="Thêm địa chỉ" value="{{$find->address}}">
                                            </div>
                                            @error('address')
                                            <h5 style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>

                                        <button class="btn btn-primary ms-auto mt-4">Save</button>
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Add End -->

        <!-- footer Start -->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- footer En -->
    </div>
@endsection
