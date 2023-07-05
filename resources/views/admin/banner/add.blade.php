@extends('admin.layout')
@section('content')
    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xxl-8 col-lg-10 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Thêm Banner</h5>
                                    </div>

                                    <form action="" method="post" class="theme-form theme-form-2 mega-form" enctype="multipart/form-data">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Banner</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="image" id="">
                                            </div>
                                            @error('image')
                                            <h5 style="color: red" align="center">{{$message}}</h5>
                                            @enderror
                                        </div>
                                        <button class="btn ms-auto theme-bg-color text-white">Save</button>
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
        <!-- footer End -->
    </div>
@endsection
