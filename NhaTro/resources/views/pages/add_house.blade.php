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
                            <span class="active">Đăng tin</span>
                        </div>
                    </div>



                    <form class="form" method="POST" enctype="multipart/form-data">

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
                                        style="color: red; min-width: 95px;">VNĐ/tháng</span>
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
                                <h5 style="font-weight: 600; color: #33cc66;">Địa chỉ</h5>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group  col-md-4 ">
                                <label class="control-label" for="name" style="font-weight: 600;">Địa chỉ</label>
                                <input required="" type="text" class="form-control" name="title" value="">
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
                                            $("select[name='district_id'").html('');
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
                                            $("select[name='town_id'").html('');
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


                    </form>




                </div>
            </div>
        </div>

    </div>
</div>


@endsection