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
                                                        {{--<div class="form-group">--}}
                                                            {{--<label for="ngaysinh">Giới tính</label>--}}
                                                            {{--<label class="radio-inline">--}}
                                                                {{--<input type="radio" name="gender" id="inlineRadio1"--}}
                                                                       {{--value="male"> Nam--}}
                                                            {{--</label>--}}
                                                            {{--<label class="radio-inline">--}}
                                                                {{--<input type="radio" name="gender" id="inlineRadio2"--}}
                                                                       {{--value="female"> Nữ--}}
                                                            {{--</label>--}}
                                                        {{--</div>--}}
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
                                            <form class="user-panel-main-container-info" method="POST"
                                                  action="http://phongtot.vn/trang-ca-nhan/thay-mat-khau"
                                                  enctype="multipart/form-data">
                                                <input type="hidden" name="_token"
                                                       value="wVCsdjEuTsiBmm3ZGqfx9ruPu2S74t15XMpFc267">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Mật khẩu cũ</label>
                                                    <input type="password" class="form-control" name="oldpassword"
                                                           placeholder="Mật khẩu cũ">
                                                    <span class="help-block" style="color:red;"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Mật khẩu mới</label>
                                                    <input type="password" class="form-control" name="password"
                                                           placeholder="Mật khẩu mới">
                                                    <span class="help-block" style="color:red;"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Nhập lại mật khẩu</label>
                                                    <input type="password" class="form-control" name="repassword"
                                                           placeholder="Nhập lại mật khẩu">
                                                    <span class="help-block" style="color:red;"></span>
                                                </div>
                                                <button type="submit" class="btn">Submit</button>
                                            </form>
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
                                <script>
                                    $("select[name='city_id']").change(function() {
                                        var city_id = $(this).val();

                                        $.ajax({
                                            url: '/admin/ajax/get-district',
                                            method: 'get',
                                            data: {
                                                city_id: city_id,
                                            },
                                            success: function(data) {
                                                $("select[name='district_id']").html('');
                                                $.each(data, function(key, value) {
                                                    $("select[name='district_id']").append(
                                                        "<option value=" + value.id + ">" +
                                                        value.name +
                                                        "</option>"
                                                    );
                                                });
                                            }
                                        });
                                    });

                                    $("select[name='district_id']").change(function() {
                                        var district_id = $(this).val();

                                        $.ajax({
                                            url: '/admin/ajax/get-town',
                                            method: 'get',
                                            data: {
                                                district_id: district_id,
                                            },
                                            success: function(data) {
                                                $("select[name='town_id']").html('');
                                                $.each(data, function(key, value) {
                                                    $("select[name='town_id']").append(
                                                        "<option value=" + value.id + ">" +
                                                        value.name +
                                                        "</option>"
                                                    );
                                                });
                                            }
                                        });
                                    });
                                </script>

                                <div class="form-group">
                                    <select class="form-control btn-select-light" name="type" multiple="multiple">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <script>
                                    $("select[name='type']").multipleSelect({
                                        width: '100%',
                                        multipleWidth: 132,
                                        selectAll: false,
                                        placeholder: "Chọn Loại Phòng",
                                    });
                                </script>

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
