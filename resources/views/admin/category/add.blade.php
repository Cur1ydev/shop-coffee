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
                                        <h5>Thêm Danh Mục</h5>
                                    </div>

                                    <form action="" method="post" class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Tên danh mục</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="name" type="text"
                                                       placeholder="Tên danh mục" value="{{old('name')}}">
                                            </div>
                                            @error('name')
                                            <h5 style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Trạng thái</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="status">
                                                    <option hidden selected>Chọn danh mục cha</option>
                                                    <option value="1" {{old('status')==1?'selected':''}}>Sẵn Sàng
                                                    </option>
                                                    <option value="0" {{old('status')==0?'selected':''}}>Ngừng kinh
                                                        doanh
                                                    </option>
                                                </select>
                                            </div>
                                            @error('status')
                                            <h5 style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Mô tả danh mục</label>
                                            <div class="col-sm-9">
                                                <textarea name="description" id="" cols="50"
                                                          rows="10">{{old('description')}}</textarea>
                                            </div>
                                            @error('description')
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
