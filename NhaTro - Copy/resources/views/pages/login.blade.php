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
                                <li><a href="">Đăng nhập</a></li>
                            </ol>
                        </div>
                        <div class="col-md-12 no-padding-vertical login-page-label">
                            <div class="room-list-category">
                                <div class="pull-left">
                                    <a href="javascript:void(0);"><h3><span>Đăng nhập</span> tài khoản <i
                                                class="fa fa-angle-right"></i></h3></a>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2 login-page">
                            <form role="form" method="POST" id="login-rieng" >
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="email" class="col-sm-3 col-md-3 no-padding-vertical control-label"> Email
                                    </label>
                                    <div class="col-sm-8 col-md-8">
                                        <input type="email" class="form-control" name="email" id="email_login"
                                               placeholder="Địa chỉ email ..." value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-3 col-md-3 no-padding-vertical control-label">Mật
                                        khẩu</label>
                                    <div class="col-sm-8 col-md-8">
                                        <input type="password" name="password" class="form-control" id="password_login"
                                               placeholder="Mật khẩu ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 control-label"></label>
                                    <div class="col-sm-8 col-md-8">
                                        <div class="pull-left"><input type="checkbox" name="remember"> Ghi nhớ đăng nhập
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-auth-submit">Đăng nhập</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('#login-rieng').on('submit',function(event) {
                                        event.preventDefault();
                                        // var formData = $(this).serialize();
                                        var email_login = $('#email_login').val();
                                        var password_login = $('#password_login').val();
                                        console.log(email_login);
                                        console.log(password_login);


                                        $.ajax({
                                            url         : "{{ route('login') }}", // the url where we want to POST
                                            method       : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                                            data        : {
                                                email: email_login,
                                                password: password_login,
                                                _token: '{{csrf_token()}}',
                                            },
                                            success:function(data){
                                                if(data==0){
                                                    alert("Bạn đã đăng nhập thành công !");
                                                    $('#login').trigger("reset");
                                                    location.reload();
                                                } else if (data==2) {
                                                    alert("các trường không được để trống !");
                                                }
                                                else alert("Tài khoản hoặc mật khẩu không chính xác ");
                                            },
                                            error:function(data){
                                                alert(data);
                                            }
                                        });
                                    });

                                });
                            </script>
                            <div class="clearfix"></div>
                            <div class="forgot-and-reg">
                                <p><a class="forgot" href="dang-ky">Tạo tài khoản mới</a> nếu bạn chưa có tài khoản ?</p>
                                <p><a class="reg" href="password/email">Khôi phục mật khẩu</a> để tìm lại mật khẩu</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>

@endsection
