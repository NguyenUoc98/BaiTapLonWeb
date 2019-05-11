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
                                <form class="form-horizontal"
                                      role="form" id="login" method="POST" name="login" >
                                    {!! csrf_field() !!}
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
                                                    class="btn btn-auth-submit" >Đăng nhập</button></div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            $('#login').on('submit',function(event) {
                                                event.preventDefault();
                                                var email = $('#email').val();
                                                var password = $('#password').val();
                                                console.log(email);
                                                console.log(password);
                                                $.ajax({
                                                    url         : "{{ route('login') }}", // the url where we want to POST
                                                    method       : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                                                    data        : {
                                                        email: email,
                                                        password: password,
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
                                    <hr>
                                </form>
                                <script type="text/javascript">
                                    // function myFunction() {
                                    //     var x = document.forms["login"]["email"].value;
                                    //     if (x == "") {
                                    //         var text="trường email không được để trống !";
                                    //         document.getElementById("error").innerHTML = text;
                                    //         return false;
                                    //     }
                                    //
                                    // }
                                </script>
                            </div>



                            <div class="tab-pane fade" id="tab_auth_register">
                                <form class="form-horizontal" role="form"
                                      method="POST" id="register" >
                                    {!! csrf_field() !!}
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
                                            <input type="email" name="email" class="form-control" id="email_re"
                                                placeholder="Email ..." value="">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_password" class="col-sm-4 control-label">Mật khẩu</label>
                                        <div class="col-sm-6">
                                            <input type="password" name="password" class="form-control" id="password_re"
                                                placeholder="Mật khẩu ...">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_password2" class="col-sm-4 control-label">Xác nhận mật
                                            khẩu</label>
                                        <div class="col-sm-6">
                                            <input type="password" name="repassword" class="form-control"
                                                id="repassword" placeholder="Xác nhận mật khẩu ...">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" class="btn btn-auth-submit">Đăng ký tài
                                                khoản</button>
                                        </div>
                                    </div>
                                </form>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('#register').on('submit',function(event) {
                                            event.preventDefault();
                                            var name = $('#name').val();
                                            var email_re = $('#email_re').val();
                                            var password_re = $('#password_re').val();
                                            var repassword = $('#repassword').val();
                                            console.log(email_re);
                                            console.log(password_re);
                                            $.ajax({
                                                url         : "{{ route('register') }}", // the url where we want to POST
                                                method       : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                                                data        : {
                                                    name: name,
                                                    email_re: email_re,
                                                    password_re: password_re,
                                                    repassword: repassword,
                                                    _token: '{{csrf_token()}}',
                                                },
                                                success:function(data){
                                                    console.log(data);

                                                    if (data==2) {
                                                        alert("các trường không được để trống !");
                                                    }
                                                    else if (data==3){
                                                       alert ("Mật khẩu và nhập lại mật khẩu không trùng nhau");
                                                    }
                                                    else if (data==4){
                                                        alert("Email đã tồn tại!");
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
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
