<header id="header" class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left" id="logo">
                    <a class="logo" href=""><img class="img-responsive" src="/img/logo.png"></a>
                </div>
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
                @include('login')
            </div>
        </div>
    </div>
</header>