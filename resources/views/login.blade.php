<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/add-new-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 03:41:56 GMT -->
<head>
    <!-- meta data -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
{{--    <link rel="icon" href="{{asset('admin/assets/images/favicon.png')}}" type="image/x-icon">--}}
{{--    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}" type="image/x-icon">--}}
    <title>Đăng nhập</title>
    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/linearicon.css')}}">

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/font-awesome.css')}}">

    <!-- Themify icon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/themify.css')}}">

    <!--Dropzon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/dropzone.css')}}">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/feather-icon.css')}}">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/remixicon.css')}}">

    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/select2.min.css')}}">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/date-picker.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/bootstrap.css')}}">

    <!-- Bootstrap-tag input css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/bootstrap-tagsinput.css')}}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
</head>

<body>
<!-- tap on top start -->
<div class="tap-top">
    <span class="lnr lnr-chevron-up"></span>
</div>
<!-- tap on tap end -->

<!-- page-wrapper start -->
<div class="page-wrapper compact-wrapper" id="pageWrapper">


    <!-- Page Body start -->


        <div class="page-body" align="center">
            <!-- New Product Add Start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-8 m-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Đăng nhập</h5>
                                        </div>

                                        <form class="theme-form theme-form-2 mega-form" action="" method="post">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-3 mb-0">Email</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="email" type="email"
                                                           placeholder="Email .." value="{{old('email')}}">
                                                </div>
                                            </div>
                                            @error('email')
                                            <h5 align="center" style="color: red">{{$message}}</h5>
                                            <br>
                                            @enderror
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-3 mb-0">Password</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="password" type="password"
                                                           placeholder="Password ..">
                                                </div>
                                            </div>
                                            @error('password')
                                            <h5 align="center" style="color: red">{{$message}}</h5>
                                            @enderror
                                            <button class="btn btn-primary ms-auto mt-4">Đăng nhập</button>
                                            @csrf
                                        </form>
                                        @if(session('loginErrors'))
                                            <h4>{{session('loginErrors')}}</h4>
                                        @endif
                                        <span><a href="{{route('google')}}">Đăng nhập bằng google</a></span>
                                        <span>Chưa có tài khoản? <a href="{{route('register')}}">Đăng ký </a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- page-wrapper End -->


<!-- latest js -->
<script src="{{asset('admin/assets/js/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{asset('admin/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

<!-- feather icon js -->
<script src="{{asset('admin/assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('admin/assets/js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- scrollbar simplebar js -->
<script src="{{asset('admin/assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('admin/assets/js/scrollbar/custom.js')}}"></script>

<!-- Sidebar js -->
<script src="{{asset('admin/assets/js/config.js')}}"></script>

<!-- bootstrap tag-input js -->
<script src="{{asset('admin/assets/js/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('admin/assets/js/sidebar-menu.js')}}"></script>

<!-- customizer js -->
<script src="{{asset('admin/assets/js/customizer.js')}}"></script>

<!--Dropzon js -->
<script src="{{asset('admin/assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('admin/assets/js/dropzone/dropzone-script.js')}}"></script>

<!-- Plugins js -->
{{--<script src="{{asset('admin/assets/js/notify/bootstrap-notify.min.js')}}"></script>--}}
{{--<script src="{{asset('admin/assets/js/notify/index.js')}}"></script>--}}

<!-- ck editor js -->
<script src="{{asset('admin/assets/js/ckeditor.js')}}"></script>
<script src="{{asset('admin/assets/js/ckeditor-custom.js')}}"></script>

<!-- select2 js -->
<script src="{{asset('admin/assets/js/select2.min.js')}}"></script>
<script src="{{asset('admin/assets/js/select2-custom.js')}}"></script>

<!-- sidebar effect -->
<script src="{{asset('admin/assets/js/sidebareffect.js')}}"></script>

<!-- Theme js -->
<script src="{{asset('admin/assets/js/script.js')}}"></script>

</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/add-new-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 03:41:57 GMT -->
</html>
