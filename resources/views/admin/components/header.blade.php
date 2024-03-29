<div class="page-header">
    <div class="header-wrapper m-0">
        <div class="header-logo-wrapper p-0">
            <div class="logo-wrapper">
                <a href="{{route('admin.dashboard')}}">
                    <img class="img-fluid main-logo" src="{{asset('admin/assets/images/logo/1.png')}}" alt="logo">
                    <img class="img-fluid white-logo" src="{{asset('admin/assets/images/logo/1-white.png')}}"
                         alt="logo">
                </a>
            </div>
            <div class="toggle-sidebar">
                <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                <a href="{{route('admin.dashboard')}}">
                    <img src="{{asset('admin/assets/images/logo/1.png')}}" class="img-fluid" alt="">
                </a>
            </div>
        </div>

        <form class="form-inline search-full" action="javascript:void(0)" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                               placeholder="Tìm kiếm gì đó.." name="q" title="" disabled>
                        <i class="close-search" data-feather="x"></i>
                        <div class="spinner-border Typeahead-spinner" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>
        <div class="nav-right col-6 pull-right right-header p-0">
            <ul class="nav-menus">
                <li>
                            <span class="header-search">
                                <i class="ri-search-line"></i>
                            </span>
                </li>
                <li class="onhover-dropdown">
                    <div class="notification-box">
                        <i class="ri-notification-line"></i>
                        <span class="badge rounded-pill badge-theme">{{$countNoti>8?'8+':$countNoti}}</span>
                    </div>
                    <ul class="notification-dropdown onhover-show-div">
                        <li>
                            <i class="ri-notification-line"></i>
                            <h6 class="f-18 mb-0">Notitications</h6>
                        </li>
                        @if($countNoti>0)
                            @foreach($notification as $value)
                                <li >
                                    <p class="notification-message">
                                        <i class="fa fa-circle me-2 font-primary"></i>{{$value->message}}<span
                                            class="pull-right">{{$value->created_at}}</span>
                                    </p>
                                </li>
                            @endforeach
                        @else
                            <li>
                                <p align="center">
                                    Hiện không có thông báo mới nào
                                </p>
                            </li>
                        @endif

                        <li>
                            <a class="btn btn-primary" href="{{route('admin.noti')}}">Check all notification</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="mode">
                        <i class="ri-moon-line"></i>
                    </div>
                </li>
                <li class="profile-nav onhover-dropdown pe-0 me-0">
                    <div class="media profile-media">
                        <img class="user-profile rounded-circle" src="https://scontent.fhan15-1.fna.fbcdn.net/v/t39.30808-6/348940991_580714300580843_1425709874505767428_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=Jvh91TsdM_UAX9VtrH6&_nc_ht=scontent.fhan15-1.fna&oh=00_AfCEdE6GPVbzriYw9MAmCbgC0E8mrNFwliCKYrDwh5t4kQ&oe=647CA411"
                             alt="">
                        <div class="user-name-hide media-body">
                            <span>{{isset(\Illuminate\Support\Facades\Auth::user()->name)?\Illuminate\Support\Facades\Auth::user()->name:''}}</span>
                            <p class="mb-0 font-roboto">Admin<i class="middle ri-arrow-down-s-line"></i></p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li>
                            <a href="{{route('admin.user.list')}}">
                                <i data-feather="users"></i>
                                <span>Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.orderitem.list')}}">
                                <i data-feather="archive"></i>
                                <span>Orders</span>
                            </a>
                        </li>

                        <li>
                            <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                               href="javascript:void(0)">
                                <i data-feather="log-out"></i>
                                <span>Log out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
