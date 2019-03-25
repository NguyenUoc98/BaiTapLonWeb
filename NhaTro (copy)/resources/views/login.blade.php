<div class="modal fade" id="modal_auth" tabindex="-1" role="dialog" aria-labelledby="login_modal_label"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="row-fluid">
                <div class="col-md-12">
                    <div class="modal_auth_wrap">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <ul class="nav nav-tabs no-margin">
                            <li id="li_login" class="active"><a href="#tab_auth_login" data-toggle="tab">ĐĂNG
                                    NHẬP</a></li>
                            <li id="li_register"><a href="#tab_auth_register" data-toggle="tab">ĐĂNG KÝ</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab_auth_login">
                                <form class="form-horizontal frm-login-ajax1 frm-user-ajax" id="frm-login-ajax1"
                                    role="form" method="POST" action="dang-nhap">
                                    <div class="hide alert alert-danger"></div>
                                    <input type="hidden" name="_token" value="XTSOxkD3o3Gc855SwAPRI58OEkFGT3HphVoUAoL9">
                                    <input type="hidden" name="current_url" value="">
                                    <div class="form-group">
                                        <label for="email" class="col-sm-3 col-md-3 control-label">Email</label>
                                        <div class="col-sm-8 col-md-8">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Địa chỉ email ..." value="">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 col-md-3 control-label">Mật
                                            khẩu</label>
                                        <div class="col-sm-8 col-md-8">
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Mật khẩu ...">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 col-md-3 control-label"></label>
                                        <div class="col-sm-8 col-md-8">
                                            <div class="pull-left help-block"><input type="checkbox" name="remember">
                                                Ghi nhớ đăng nhập</div>
                                            <div class="pull-right"><button type="submit"
                                                    class="btn btn-auth-submit">Đăng nhập</button></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <a href="social/facebook" class="btn btn-md btn-social btn-facebook"> <i
                                                    class="fa fa-facebook"></i> Đăng nhập bằng Facebook </a>
                                            <a href="social/google" class="btn btn-md btn-social btn-google-plus">
                                                <i class="fa fa-google-plus"></i> Đăng nhập bằng Google </a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="text-center text-center-auth">
                                            <p><a class="btn btn-link" href="password/email">Khôi phục mật khẩu</a>
                                                để tìm lại mật khẩu</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab_auth_register">
                                <form class="form-horizontal frm-user-ajax" id="frm-register-ajax" role="form"
                                    method="POST" action="dang-ky">
                                    <div class="hide alert alert-danger"></div>
                                    <input type="hidden" name="_token" value="XTSOxkD3o3Gc855SwAPRI58OEkFGT3HphVoUAoL9">
                                    <input type="hidden" name="current_url" value="">
                                    <div class="form-group">
                                        <label for="txt_fullname" class="col-sm-4 control-label">Tên hiển
                                            thị</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Tên hiển thị ..." value="">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_email" class="col-sm-4 control-label">Email</label>
                                        <div class="col-sm-6">
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Email ..." value="">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_password" class="col-sm-4 control-label">Mật khẩu</label>
                                        <div class="col-sm-6">
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Mật khẩu ...">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_password2" class="col-sm-4 control-label">Xác nhận mật
                                            khẩu</label>
                                        <div class="col-sm-6">
                                            <input type="password" name="repassword" class="form-control"
                                                id="password_confirmation" placeholder="Xác nhận mật khẩu ...">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_confirm" class="col-sm-4 control-label">Xác nhận</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="captcha" class="form-control" id="captcha"
                                                placeholder="Mã xác nhận ..." value="">
                                            <span class="help-block"></span>
                                            <span class="help-block"><small>Gồm 5 ký tự phân biệt chữ Hoa và chữ
                                                    thường. </small></span>
                                            <div class="col-md-12">
                                                <img src="captcha/default?dXcUOjL9" alt="captcha" class="captcha-img"
                                                    data-refresh-config="default">
                                                <span class="pull-right"><a title="Lấy mã xác nhận mới"
                                                        class="recapcha enable-tooltip" href="javascript:void(0);"><i
                                                            class="fa fa-refresh fa-2x text-success"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" class="btn btn-auth-submit">Đăng ký tài
                                                khoản</button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="social/facebook" class="btn btn-md btn-social btn-facebook"> <i
                                            class="fa fa-facebook"></i> Đăng ký bằng Facebook </a>
                                    <a href="social/facebook" class="btn btn-md btn-social btn-google-plus"> <i
                                            class="fa fa-google-plus"></i> Đăng ký bằng Google </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>