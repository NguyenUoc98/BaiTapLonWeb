<header id="header" class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left" id="logo">
                    <a class="logo" href="{{route('trang-chu')}}"><img class="img-responsive" src="/img/logo.png"></a>
                </div>
                @if (Auth::check())
                    <div class="pull-right">
                        <a class="btn btn-submit-room load_modal_login pull-left" data-toggle="modal"
                           data-target="#modal_auth" href="javascript: void(0);">Đăng tin miễn phí</a>
                        <div class="header-top-avatar"><img class="img-responsive" src="{{Voyager::image(Auth::user()->avatar)}}">
                        </div>
                        <div class="header-top-user ">
                            {{--<div class="say-hello" style="color:black;">Xin Chào</div>--}}
                            <div class="user-name" style="color:black;">
                                {{Auth::user()->name}}
                                {{--<ul class="hihi">--}}
                                    {{--<li><a href="#">Thông tin</a></li>--}}
                                    {{--<li><a href="#">Bài đăng</a></li>--}}
                                    {{--<li><a href="#">Lịch sử</a></li>--}}
                                    {{--<li><a href="#">Đăng xuất</a></li>--}}
                                {{--</ul>--}}
                            </div>
                            <div class="dropdown mini-menu" id="mini-menu">
                                <a href="#" id="dropdown-menu-header" class="dropdown-toggle" data-toggle="dropdown">Thông Tin Tài Khoản<span class="caret"></span></a>

                                <ul class="dropdown-menu" id="sub-menu-login">
                                    <li class="dropdown-item"><a class="dropdown-item" href="#">Trang Cá Nhân</a></li>
                                    <li class="dropdown-item"><a class="dropdown-item" href="#">Bài Đăng</a></li>
                                    <li class="dropdown-item"><a class="dropdown-item" href="#">Chỉnh Sửa</a></li>
                                    <li class="dropdown-item"><a class="dropdown-item" href="logout" id="logout-user">Đăng Xuất</a></li>
                                </ul>
                            </div>


                        </div>
                    </div>
                @else
                    <div class="pull-right">
                        <a class="btn btn-submit-room load_modal_login pull-left" data-toggle="modal"
                           data-target="#modal_auth" href="javascript: void(0);">Đăng tin miễn phí</a>
                        <div class="header-top-avatar"><img class="img-responsive" src="themes/client/img/avatar.png">
                        </div>
                        <div class="header-top-user ">
                            <div class="user-login"><a class="load_modal_login" href="#tab_auth_login" data-toggle="modal"
                                                       data-target="#modal_auth">Đăng nhập</a></div>
                            <div class="user-register load_modal_register"><a href="javascript: void(0);"
                                                                              data-toggle="modal" data-target="#modal_auth">Tạo tài khoản</a></div>
                        </div>
                    </div>
                @endif
                @include('login')
            </div>
        </div>
    </div>
</header>
