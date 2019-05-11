@extends('master')
@section('content')
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12 room-main-content">
                        <div class="pt-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="">Trang chủ</a></li>
                                <li><a href="">Đăng ký</a></li>
                            </ol>
                        </div>
                        <div class="col-md-12 no-padding-vertical login-page-label">
                            <div class="room-list-category">
                                <div class="pull-left">
                                    <a href="javascript:void(0);"><h3><span>Đăng ký</span> tài khoản <i
                                                class="fa fa-angle-right"></i></h3></a>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2 login-page">
                            <form class="form-horizontal" method="POST" action="dang-ky">
                                <input type="hidden" name="_token" value="j7vPEzae2ZE0tdE34APDQtfud9kWjnoPaJMeS2wR">
                                <div class="form-group">
                                    <label for="txt_fullname" class="col-sm-4 control-label">Tên hiển thị</label>
                                    <div class="col-sm-8 col-md-8">
                                        <input type="text" name="name" class="form-control" id="name"
                                               placeholder="Tên hiển thị ..." value="">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txt_email" class="col-sm-4 control-label">Email</label>
                                    <div class="col-sm-8 col-md-8">
                                        <input type="email" name="email" class="form-control" id="email"
                                               placeholder="Email ..." value="">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txt_password" class="col-sm-4 control-label">Mật khẩu</label>
                                    <div class="col-sm-8 col-md-8">
                                        <input type="password" name="password" class="form-control" id="password"
                                               placeholder="Mật khẩu ...">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txt_password2" class="col-sm-4 control-label">Xác nhận mật khẩu</label>
                                    <div class="col-sm-8 col-md-8">
                                        <input type="password" name="repassword" class="form-control"
                                               id="password_confirmation" placeholder="Xác nhận mật khẩu ...">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-auth-submit">Đăng ký tài khoản</button>
                                    </div>
                                </div>
                            </form>
                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
