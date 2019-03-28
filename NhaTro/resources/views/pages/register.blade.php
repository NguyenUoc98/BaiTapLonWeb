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
                            <form class="form-horizontal" method="POST" id="register-rieng">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="txt_fullname" class="col-sm-4 control-label">Tên hiển thị</label>
                                    <div class="col-sm-8 col-md-8">
                                        <input type="text" name="name" class="form-control" id="name_register"
                                               placeholder="Tên hiển thị ..." value="">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txt_email" class="col-sm-4 control-label">Email</label>
                                    <div class="col-sm-8 col-md-8">
                                        <input type="email" name="email" class="form-control" id="email_register"
                                               placeholder="Email ..." value="">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txt_password" class="col-sm-4 control-label">Mật khẩu</label>
                                    <div class="col-sm-8 col-md-8">
                                        <input type="password" name="password" class="form-control" id="password_register"
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
                            <script type="text/javascript">



                                $(document).ready(function(){



                                    // đăng ký
                                    $('#register').on('submit',function(event) {
                                        event.preventDefault();
                                        var name_register = $('#name_register').val();
                                        var email_register = $('#email_register').val();
                                        var password_register = $('#password_register').val();
                                        var password_confirmation = $('#password_confirmation').val();
                                        console.log(email_register);
                                        console.log(password_register);
                                        $.ajax({
                                            url         : "{{ route('register') }}", // the url where we want to POST
                                            method       : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                                            data        : {
                                                name_register: name_register,
                                                email_re: email_register,
                                                password_re: password_register,
                                                repassword: password_confirmation,
                                                _token: '{{csrf_token()}}',
                                            },
                                            success:function(data){

                                                if (data==2) {
                                                    alert("các trường không được để trống !");
                                                }
                                                else if (data==3){
                                                   alert ("Nhập lại mật khẩu không chính xác !");
                                                }
                                                else if (data==4){
                                                    alert("Email đã tồn tại !");
                                                }
                                                else {
                                                    alert("Bạn đã đăng Ký thành công !");
                                                    $('#login').trigger("reset");
                                                }

                                            },
                                            error:function(data){
                                                alert(data);
                                            }
                                        });
                                    });

                                });
                            </script>
                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
