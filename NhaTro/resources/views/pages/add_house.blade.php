@extends('master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 room-main-content">

                        <div class="pt-breadcrumb" style="margin-top: 32px;">
                            <div class="breadcrumb">
                                <a href="{{route('trang-chu')}}">Trang chủ</a>
                                <span> / </span>
                                <span class="active">Ðăng tin</span>
                            </div>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="form" action="" method="POST" enctype="multipart/form-data"
                              style="margin-bottom:20px;">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="section-heading" style="padding: 3px 25px;margin-top: 20px;">
                                    <h5 style="font-weight: 600; color: #33cc66;">Nhập thông tin cơ bản</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group  col-md-12 ">
                                    <label class="control-label" for="name" style="font-weight: 600;">Tiêu đề</label>
                                    <input required="" type="text" class="form-control" name="title" value="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="control-label" for="name" style="font-weight: 600;">Giá tiền</label>
                                    <div class="input-group" style="margin: 0">
                                        <input type="number" class="form-control" name="price" required="" step="any"
                                               value="">
                                        <span class="input-group-addon"
                                              style="color: red; min-width: 95px;">VNÐ/tháng</span>
                                    </div>
                                </div>

                                <div class="form-group  col-md-4 ">
                                    <label class="control-label" for="name" style="font-weight: 600;">Diện tích</label>
                                    <div class="input-group" style="margin: 0">
                                        <input type="number" class="form-control" name="acreage" required="" step="any"
                                               placeholder="Diện tích (m²)" value="">
                                        <span class="input-group-addon" style="color: red; min-width: 95px;">m²</span>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <div class="input-group" style="margin: 0; width: 100%;">
                                        <label class="control-label" for="name" style="font-weight: 600;">Loại phòng</label>
                                        <select class="form-control btn-select-light" name="type_id" style="padding:5px;">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}"><span
                                                            style="padding:5px;">{{$category->name}}</span></option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="section-heading" style="padding: 3px 25px;margin-top: 20px;">
                                    <h5 style="font-weight: 600; color: #33cc66;">Ðịa chỉ</h5>
                                </div>
                            </div>

                            <div class="row">

                                <div class="form-group  col-md-4 ">
                                    <label class="control-label" for="name" style="font-weight: 600;">Ðịa chỉ</label>
                                    <input required="" type="text" class="form-control" name="address" value="">
                                </div>

                                <div class="col-md-8">
                                    <?php
                                    $cities = \App\City::all();
                                    ?>
                                    <div class="form-group col-md-4">
                                        <div class="input-group" style="margin: 0; width:100%;">
                                            <label class="control-label" for="name" style="font-weight: 600;">Tỉnh/Thành
                                                phố</label>
                                            <select class="form-control btn-select-light" name="city_id">
                                                <option>Tỉnh/Thành phố</option>
                                                @foreach($cities as $city)
                                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group" style="margin: 0; width:100%;">
                                            <label class="control-label" for="name"
                                                   style="font-weight: 600;">Quận/Huyện</label>
                                            <select class="form-control btn-select-light" name="district_id">
                                                <option>---- Quận/Huyện ----</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group" style="margin: 0; width:100%;">
                                            <label class="control-label" for="name" style="font-weight: 600;">Xã/ Phường/
                                                Thị trấn</label>
                                            <select class="form-control btn-select-light" name="town_id">
                                                <option>---- Xã/ Phường/ Thị trấn----</option>
                                            </select>
                                        </div>
                                    </div>

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
                                </div>

                            </div>

                            <div class="row">
                                <div class="section-heading" style="padding: 3px 25px;margin-top: 20px;">
                                    <h5 style="font-weight: 600; color: #33cc66;">Thông tin chi tiết</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name" style="font-weight: 600;">Số
                                                tầng</label>
                                            <div class="input-group" style="margin: 0">
                                                <input type="number" class="form-control" name="tang" required="" step="any"
                                                       value="">
                                                <span class="input-group-addon"
                                                      style="color: red; min-width: 95px;">Tầng</span>
                                            </div>
                                        </div>

                                        <div class="form-group  col-md-6 ">
                                            <label class="control-label" for="name" style="font-weight: 600;">Chọn
                                                ảnh</label>
                                            <br>
                                            <div class="clearfix"></div>
                                            <input type="file" name="image[]" multiple="multiple" accept="image/*">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name" style="font-weight: 600;">Giá
                                                điện</label>
                                            <div class="input-group" style="margin: 0">
                                                <input type="number" class="form-control" name="giadien" required=""
                                                       step="any" value="">
                                                <span class="input-group-addon"
                                                      style="color: red; min-width: 95px;">VNÐ/số</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name" style="font-weight: 600;">Giá
                                                nước</label>
                                            <div class="input-group" style="margin: 0">
                                                <input type="number" class="form-control" name="gianuoc" required=""
                                                       step="any" value="">
                                                <span class="input-group-addon"
                                                      style="color: red; min-width: 95px;">VNÐ/m³</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="control-label" for="name" style="font-weight: 600;">Các tiện ích</label>
                                    <textarea class="form-control" name="tienich" rows="5"></textarea>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label" for="name" style="font-weight: 600;">Thông tin chi
                                        tiết</label>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea id="editor" name="description" rows="15"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="advance-search"
                                     style="background-color: #fff;margin-bottom: 0;text-align: center;">
                                    <div class="form-group submit">
                                        <button type="submit" class="btn btn-slide-search" style="transform: none;"><span
                                                    class="fa fa-send"></span>Đăng tin</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection