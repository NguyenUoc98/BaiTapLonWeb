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
                            <div class="btn-social-group">
                                <a href="social/facebook" class="btn btn-md btn-social btn-facebook"> <i
                                        class="fa fa-facebook"></i> Đăng nhập bằng Facebook </a>
                                <a href="social/google" class="btn btn-md btn-social btn-google-plus"> <i
                                        class="fa fa-google-plus"></i> Đăng nhập bằng Google </a>
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
