@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12 room-main-content">
                    <div class="pt-breadcrumb" style="margin-top: 32px;">
                        <div class="breadcrumb">
                            <a href="{{route('trang-chu')}}">Trang chủ</a>
                            <span> / </span>
                            <a
                                href="{{route('category',$house->type_id)}}">{{\App\Category::find($house->type_id)->name}}</a>
                            <span> / </span>
                            <span class="active">{{$house->title}}</span>
                        </div>
                    </div>
                    <div class="room-detail">
                        <div class="title">
                            <a href="javascript: void(0);">
                                <h1>{{$house->title}}</h1>
                            </a>
                        </div>
                        <div class="social">
                            <div class="pull-left facebook">
                                <span>
                                    <div class="fb-like"
                                        data-href="phong-tro-nha-tro/cho-thue-phong-tro-duong-vo-van-kiet"
                                        data-layout="button_count" data-action="like" data-show-faces="false"
                                        data-share="true"></div>
                                </span>
                                <span>
                                    <div class="fb-send"
                                        data-href="phong-tro-nha-tro/cho-thue-phong-tro-duong-vo-van-kiet"></div>
                                </span>
                            </div>
                            <div class="pull-left gplus">
                                <span>
                                    <div class="g-plusone" data-size="medium"
                                        data-href="phong-tro-nha-tro/cho-thue-phong-tro-duong-vo-van-kiet"></div>
                                </span>
                            </div>
                            <div class="pull-right">
                                <a href="javascript:void();"><span>Lượt xem : </span>19</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <!-- Nhà trọ, Phòng trọ -->
                        <div class="main-info">
                            <div class="row">
                                <div class="col-md-8 left-info no-padding-right">
                                    <div class="address">
                                        <span class="btn info-label">Địa chỉ</span>
                                        <a href="">{{$house->address}}</a>,
                                        <a href="">{{\App\Town::find($house->town_id)->name}}</a>,
                                        <a href="">{{\App\District::find($house->district_id)->name}}</a>,
                                        <a href="">{{\App\City::find($house->city_id)->name}}</a>
                                    </div>
                                    <div class="size">
                                        <span class="btn info-label">Diện tích</span>
                                        <a href="" class="btn info-data">{{$house->acreage}} m<sup>2</sup></a>
                                        <span class="btn info-label">Loại phòng</span>
                                        @foreach($categories as $category)
                                        @if ($category->id == $house->type_id)
                                        <a href="">{{$category->name}}</a>
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="tang">
                                        <span class="btn info-label">Tầng</span>
                                        <a href="" class="btn info-data">
                                            {{($house->tang == 0) ? "Chưa xác định" : $house->tang}} </a>
                                    </div>
                                    <div class="type">
                                        <span class="btn info-label">Giá điện</span>
                                        <a href=""
                                            class="btn info-data">{{($house->giadien == 0) ? "Nhà nước quy định" : number_format($house->giadien)." VNĐ/số"}}</a>
                                        <span class="btn info-label">Giá nước</span>
                                        <a
                                            href="">{{($house->gianuoc == 0) ? "Nhà nước quy định" : number_format($house->gianuoc)." VNĐ/m³"}}</a>
                                    </div>
                                    <div class="type">
                                        <span class="btn info-label">Tiện ích</span>
                                        <a href="">{{$house->tienich}}</a>
                                    </div>
                                </div>
                                <div class="col-md-4 info-contact no-padding-left">
                                    <div class="contact-label">
                                        <a href=""><span class="fa fa-mobile-phone"></span>Thông tin liên hệ</a>
                                    </div>
                                    <div class="chr">
                                        <hr>
                                    </div>
                                    <div class="info-price">
                                        <a href=""><span
                                                class="fa fa-unlock-alt"></span>{{number_format($house->price)}}
                                            VNĐ/tháng</a>
                                    </div>
                                    <div class="info-boss">
                                        <a href=""><span class="fa fa-user"></span>{{$user->name}}</a>
                                    </div>
                                    <div class="info-phone">
                                        <a href=""><span class="fa fa-mobile-phone"></span>{{$user->phone_number}}</a>
                                    </div>
                                    <div class="info-feedback" style="margin: 10px;">
                                        <a class="btn btn-report-room clearfix" href="#tab_auth_login"
                                            data-toggle="modal" data-target="#modal_auth">Phản hồi tình trạng</a>
                                        <a class="btn btn-save-room clearfix"
                                            href="luu-tin/phong-tro-nha-tro/cho-thue-phong-tro-duong-vo-van-kiet">Lưu
                                            tin</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="room-detail-img">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    $images = json_decode($house->image);
                                    ?>

                                    <div id="sync1" class="owl-carousel owl-theme">

                                        @foreach($images as $image)
                                        <div class="owl-item" style="width: 894px;">
                                            <div class="item"><img class="img-responsive"
                                                    src="{{Voyager::image($image)}}" alt="#">
                                            </div>
                                        </div>
                                        @endforeach

                                        <div class="owl-controls clickable"></div>

                                    </div>

                                    <div id="sync2" class="owl-carousel">
                                        @foreach($images as $image)
                                        <div class="item"><img class="img-responsive" src="{{Voyager::image($image)}}"
                                                alt="#"></div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="room-detail-des">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="des-label room-list-category">
                                        <div class="pull-left">
                                            <a href="javascript: void(0);">
                                                <h3><span>Thông tin chi tiết <i class="fa fa-angle-right"></i></span>
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                    </div>
                                    <div class="dis-content">{!!$house->description!!}</div>
                                </div>
                            </div>
                        </div>

                        <div class="room-detail-map">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="map-label room-list-category">
                                        <div class="pull-left">
                                            <a href="">
                                                <h3><span>Bản đồ vị trí <i class="fa fa-angle-right"></i></span>
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                    </div>

                                    <!-- Bản đồ -->
                                    <div class = "col-md-12">
                                    <div style="overflow:hidden;width: 885;position: relative;">
                                        <iframe width="885" height="440"
                                            src="https://maps.google.com/maps?width=885&amp;height=553&amp;hl=vn&amp;q={{$house->address.','.$house->district.','.$house->city.','.$house->country}}+(Title)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed"
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                        </iframe>
                                        <style>
                                        #gmap_canvas img {
                                            max-width: none !important;
                                            background: none !important
                                        }
                                        </style>
                                    </div>
                                    </div><br />
                                    <!-- Kết thúc bản đồ -->

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 sidebar">
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

            <!-- Ảnh quảng cáo -->
            <div class="row">
                <div class="col-sm-6 col-md-12 sidebar-ads">
                    <img class="img-responsive" src="themes/client/img/ads1.png" alt="">
                </div>
            </div>
            <!-- Bài viết -->
            <div class="row">
                <div class="col-sm-6 col-md-12 sidebar-social">
                    <div class="fb-page"
                        data-href="https://www.facebook.com/Phongtotvn-Thu%C3%AA-V%C3%A0-Cho-Thu%C3%AA-Ph%C3%B2ng-Ch%C3%ADnh-Ch%E1%BB%A7-726759860760692/"
                        data-width="275" data-small-header="false" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote
                                cite="https://www.facebook.com/Phongtotvn-Thu%C3%AA-V%C3%A0-Cho-Thu%C3%AA-Ph%C3%B2ng-Ch%C3%ADnh-Ch%E1%BB%A7-726759860760692/">
                                <a
                                    href="https://www.facebook.com/Phongtotvn-Thu%C3%AA-V%C3%A0-Cho-Thu%C3%AA-Ph%C3%B2ng-Ch%C3%ADnh-Ch%E1%BB%A7-726759860760692/">Phongtot.vn
                                    - Thuê Và Cho Thuê Phòng Chính Chủ</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="margin-bottom: 30px;" class="col-sm-6 col-md-12 sidebar-ads">
                    <img class="img-responsive" src="xc5tx4cj/ads-3-min.png" alt="">
                </div>
                <div class="col-sm-6 col-md-12 sidebar-ads">
                    <img class="img-responsive" src="xc5tx4cj/ads-4-min.png" alt="">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 sidebar-article-label">
                    <div class="pull-left">
                        <a href="bai-viet">
                            <h3><span>bài viết</span> mới</h3>
                        </a>
                    </div>
                    <div class="pull-right">
                        <a href="bai-viet">
                            <h3>Xem thêm <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <hr />
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="xc5tx4cj/ngoi-nha-46m&sup2;-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo_cover-573eddf84424b.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>Ng&ocirc;i nh&agrave; 46m&sup2; tuyệt đẹp c&oacute; chi ph&iacute;
                                        ho&agrave;n thiện 480 triệu đồng ch&agrave;ng trai 8x x&acirc;y tặng vợ</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="xc5tx4cj/y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu_cover-573dcbc3ac6e2.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>&Yacute; tưởng kinh doanh nh&agrave; trọ, ngồi kh&ocirc;ng mỗi th&aacute;ng
                                        kiếm trăm triệu?</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="xc5tx4cj/nhung-dieu-can-biet-khi-tim-phong-tro_cover-5714ad734268d.jpg" alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>Những điều cần biết khi t&igrave;m ph&ograve;ng trọ</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="xc5tx4cj/thiet-ke-can-ho-‪‬173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong_cover-57018c103e17a.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>Thiết kế căn hộ ‪‬173m2 cực đẹp với chi ph&iacute; chỉ 17 triệu đồng</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="xc5tx4cj/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien_cover-57018a97e544c.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>Phạm Hương mặc giản dị giao lưu c&ugrave;ng sinh vi&ecirc;n</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="xc5tx4cj/vi-sao-chon-nganh-hot-van-that-nghiep_cover-57017e8c0162e.jpg" alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>V&igrave; sao chọn ng&agrave;nh &#039;hot&#039; vẫn thất nghiệp?</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection