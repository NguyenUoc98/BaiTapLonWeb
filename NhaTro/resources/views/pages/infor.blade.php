@extends('master')
@section('content')
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12 room-main-content">
                        <div class="pt-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="http://phongtot.vn">Trang chủ</a></li>
                                <li class="active">Trang cá nhân</li>
                            </ol>
                        </div>
                        <div class="user_panel col-md-2 no-padding-vertical">
                            <div class="user-avatar">
                                <a href="#"><img class="img-responsive"
                                                 src="{{Voyager::image(Auth::user()->avatar)}}"></a>
                            </div>
                            <div class="user-panel-menu">
                                <div class="user-panel-menu-item active"><a href="">Tổng
                                        quan</a></div>
                                <div class="user-panel-menu-item "><a href="">Tin
                                        đã đăng</a></div>
                                <div class="user-panel-menu-item "><a href="">Tin
                                        đã lưu</a></div>
                            </div>
                        </div>
                        <!-- End left menu -->
                        <div class="user_panel col-md-10 user-panel-center-container">
                            <div class="user-panel-info">
                                <div class="user-panel-name"><a href="">{{Auth::user()->name}}</a>
                                </div>
                                <div class="user-panel-email"><a href="">{{Auth::user()->email}}</a>
                                </div>
                                <a class="btn btn-submit-room" href="">Đăng tin miễn phí</a>
                            </div>
                            <div class="user-panel-main-container">
                                <!-- Nav tabs -->
                                <div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                                                                  role="tab" data-toggle="tab">Thông tin cá
                                                nhân</a></li>
                                        <li role="presentation" class=""><a href="#profile" aria-controls="profile"
                                                                            role="tab" data-toggle="tab">Đổi mật khẩu</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <form class="user-panel-main-container-info" method="POST"
                                                  action="{{route('infor')}}"
                                                  enctype="multipart/form-data">
                                                    {!! csrf_field() !!}
                                                <div class="user-panel-info-title">Ảnh đại diện</div>
                                                <div class="user-avatar"><img
                                                            class="img-responsive"
                                                            src="{{Voyager::image(Auth::user()->avatar)}}"></a>
                                                </div>
                                                <div class="user-panel-upload-avatar">
                                                    <input type="file" name="avatar" value="" id="avatar">
                                                    <span class="help-block"><div style="color:red;"></div>Kích thước ảnh tối đa 1MB.</span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="hoten">Tên hiển thị</label>
                                                            <input type="text" class="form-control" name="name" value=""
                                                                   placeholder="Tên hiển thị" id="name">
                                                            <span class="help-block" style="color:red;"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ngaysinh">Họ Tên</label>
                                                            <input type="text" class="form-control" name="full_name" value=""
                                                                   placeholder="" id="full_name">
                                                            <span class="help-block" style="color:red;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Số CMND</label>
                                                            <input type="text" class="form-control" name="idCard" value=""
                                                                   placeholder="CMND" id="CMND">
                                                            <span class="help-block" style="color:red;"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Điện thoại liên hệ</label>
                                                            <input type="text" class="form-control" name="phone" value=""
                                                                   placeholder="Phone" id="phone_number">
                                                            <span class="help-block" style="color:red;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <button type="submit" class="btn center-block">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div role="tabpanel" class="tab-pane " id="profile">
                                            @if (session('error'))
                                                <div class="alert alert-danger" style="margin: 0;">
                                                    {{session('error')}}
                                                </div>
                                            @endif
                                            @if (session('success'))
                                                <div class="alert alert-success" style="margin: 0;">
                                                    {{session('success')}}
                                                </div>
                                            @endif
                                            <form id="change-pass" class="user-panel-main-container-info" method="POST"
                                                  enctype="multipart/form-data">


                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Mật khẩu cũ</label>
                                                    <input type="password" class="form-control" name="currentpassword"
                                                           placeholder="Mật khẩu cũ" id="currentpassword">
                                                    <span class="help-block" style="color:red;"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Mật khẩu mới</label>
                                                    <input type="password" class="form-control" name="newpass"
                                                           placeholder="Mật khẩu mới" id="newpass">
                                                    <span class="help-block" style="color:red;"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Nhập lại mật khẩu</label>
                                                    <input type="password" class="form-control" name="checknewpass"
                                                           placeholder="Nhập lại mật khẩu" id="checknewpass">
                                                    <span class="help-block" style="color:red;"></span>
                                                </div>
                                                <button type="submit" id="add-data" class="btn">Submit</button>
                                            </form>
                                                <script type="text/javascript">
                                                    $(document).ready(function(){
                                                        $('#change-pass').on('submit',function(event) {
                                                            event.preventDefault();
                                                            // var formData = $(this).serialize();
                                                            var currentpassword = $('#currentpassword').val();
                                                            var newpass = $('#newpass').val();
                                                            var checknewpass = $('#checknewpass').val();
                                                            console.log(currentpassword);
                                                            console.log(newpass);
                                                            console.log(checknewpass);

                                                            $.ajax({
                                                                url         : "{{ route('changepass') }}", // the url where we want to POST
                                                                method       : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                                                                data        : {
                                                                    currentpassword: currentpassword,
                                                                    newpass: newpass,
                                                                    checknewpass: checknewpass,
                                                                    _token: '{{csrf_token()}}',
                                                                },
                                                                success:function(data){
                                                                    alert(data);
                                                                        $('#change-pass').trigger("reset");
                                                                },
                                                                error:function(data){
                                                                    alert(data);
                                                                }
                                                            });
                                                        });

                                                    });
                                                </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <div class="advance-search">
                            <div class="title">
                                <a id="submit_search" href="javascript:void(0);"><span class="fa fa-search"></span></a>Tìm
                                kiếm nâng cao
                            </div>
                            <div class="shr">
                                <hr>
                            </div>

                            <form class="form" id="search_form" action="tim-kiem" method="GET">
                            <?php
                            $cities = \App\City::all();
                            ?>
                            <!-- Chọn thành phố -->
                                <div class="form-group">
                                    <select class="form-control btn-select-light" name="city_id">
                                        <option>---- Tỉnh/Thành phố ----</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Chọn quận huyện -->
                                <div class="form-group">
                                    <select class="form-control btn-select-light" name="district_id">
                                        <option>---- Quận/Huyện ----</option>
                                    </select>
                                </div>
                                <!-- Chọn xã phường thị trấn -->
                                <div class="form-group">
                                    <select class="form-control btn-select-light" name="town_id">
                                        <option>---- Xã/Phường/Thị Trấn ----</option>
                                    </select>
                                </div>
                                <!-- Script lấy đơn vị hành chính -->


                                <div class="form-group price">
                                    <div class="price-title">Chọn khoảng giá</div>
                                    <div class="input-group">
                                        <input name="price_from" type="text" maxlength="4" value="0"
                                               class="inp js-from form-control" />
                                        <span class="input-group-addon">Triệu</span>
                                    </div>

                                    <span class="input-price-title">Đến</span>

                                    <div class="input-group">
                                        <input name="price_from" type="text" maxlength="4" value="0"
                                               class="inp js-from form-control" />
                                        <span class="input-group-addon">Triệu</span>
                                    </div>

                                </div>

                                <div class="form-group submit">
                                    <button type="submit" class="btn btn-slide-search"><span class="fa fa-search"></span>Tìm
                                        kiếm</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
