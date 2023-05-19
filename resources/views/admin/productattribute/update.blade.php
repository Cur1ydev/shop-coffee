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
                                        <h5>Cập nhật thuộc tính cho sản phâm</h5>
                                    </div>

                                    <form action="" method="post" class="theme-form theme-form-2 mega-form">

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Chọn Sản Phẩm</label>
                                            <div class="col-sm-9">
                                                <select  class="js-example-basic-single w-100" name="product_id">
                                                    @foreach($product as $value)
                                                        <option value="{{$value->id}}" {{$value->name==$productAtt->name?'selected':''}}>{{$value->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Chọn Thuộc Tính liên quan</label>
                                            <div class="col-sm-9">
                                                <select  class="js-example-basic-single w-100" name="attribute_id">
                                                    @foreach($attribute as $value)
                                                        <option value="{{$value->id}}" {{$value->value==$productAtt->attribute[0]->value?'selected':''}}>{{$value->value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @if(session('adderrror'))
                                            <h5 align="center" style="color: red">{{session('adderrror')}}</h5>
                                        @endif
                                        @csrf

                                        <button class="btn btn-primary ms-auto mt-4">Save</button>
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
