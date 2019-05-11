@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9" style="margin-top: 30px;">
            <div class="row">
                <div class="col-md-12 room-main-content">
                    <div class="pt-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                            <li><a href="#">Bài viết</a></li>
                            <li class="active">{!!$post->title!!}</li>
                        </ol>
                    </div>
                    <div class="article-detail">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="article-title">
                                    <a href="javascript:void()">
                                        <h1>{!!$post->title!!}</h1>
                                    </a>
                                </div>

                                <div class="article-content">
                                {!!$post->body!!}
                                </div>
                                <div class="article-tag">
                                    <span>Từ khóa: </span>
                                    <a href="#" title=""></a>
                                    <a href="#" title=""></a>
                                    <a href="#" title=""></a>
                                </div>
                                <div class="article-social-end">
                                    <div class="pull-left"><img class="img-responsive"
                                            src="http://phongtot.vn/themes/client/img/like_share_footer.png"
                                            alt="ngoi-nha-46m&sup2;-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo">
                                    </div>
                                    <div class="pull-right info-article-gplus">
                                        <span>
                                            <!-- Place this tag where you want the +1 button to render. -->
                                            <div class="g-plusone" data-size="medium"
                                                data-href="http://phongtot.vn/bai-viet/ngoi-nha-46m%C2%B2-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo">
                                            </div>
                                        </span>
                                    </div>
                                    <div class="pull-right info-article-facebook">
                                        <span>
                                            <div class="fb-like"
                                                data-href="http://phongtot.vn/bai-viet/ngoi-nha-46m%C2%B2-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo"
                                                data-layout="button_count" data-action="like" data-show-faces="false"
                                                data-share="true"></div>
                                        </span>
                                        <span>
                                            <div class="fb-send"
                                                data-href="http://phongtot.vn/bai-viet/ngoi-nha-46m%C2%B2-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo">
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!-- End Block Social -->
                                <div class="article-comment">
                                    <div class="article-container-comment-title pull-left"><span>Bình luận</span></div>
                                    <div class="clearfix"></div>
                                    <hr />
                                    <div class="fb-comments"
                                        data-href="http://phongtot.vn/bai-viet/ngoi-nha-46m%C2%B2-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo"
                                        data-width="898" data-numposts="10"></div>
                                </div>
                                <!-- End Block Comment -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="article-item-same-category">
                                            <div class="article-container-same-category-title pull-left"><span>Bài viết
                                                    khác</span></div>
                                            <div class="article-container-same-category-more pull-right"><a
                                                    href="http://phongtot.vn/bai-viet">Xem tất cả <i
                                                        class="fa fa-angle-right"></i></a></div>
                                            <div class="clearfix"></div>
                                            <hr />
                                        </div>
                                    </div>
                                    <!-- End article same category -->
                                    <div class="col-md-4 same-category-item">
                                        <a href="http://phongtot.vn/bai-viet/vi-sao-chon-nganh-hot-van-that-nghiep"
                                            class="article-item-a"><img class="img-responsive"
                                                src="http://media.phongtot.vn/xc5tx4cj/vi-sao-chon-nganh-hot-van-that-nghiep_cover-57017e8c0162e.jpg">
                                            <h2 class="same-category-item-title">V&igrave; sao chọn ng&agrave;nh
                                                &#039;hot&#039; vẫn thất nghiệp?</h2>
                                        </a>
                                    </div>
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
                        <form class="form" id="search_form" action="http://phongtot.vn/tim-kiem" method="GET">
                            <div class="form-group tp">
                                <a class="btn btn-select btn-select-light btn-tp">
                                    <input type="hidden" class="btn-select-input" id="province" name="province"
                                        value="" />
                                    <span class="btn-select-value">Chọn tỉnh, thành phố</span>
                                    <span class='btn-select-arrow fa fa-angle-down'></span>
                                    <ul>
                                        <li class="get_province" value="1"> H&agrave; Nội</li>
                                        <li class="get_province" value="31"> Hải Ph&ograve;ng</li>
                                        <li class="get_province" value="48"> Đ&agrave; Nẵng</li>
                                        <li class="get_province" value="79"> Hồ Ch&iacute; Minh</li>
                                        <li class="get_province" value="92"> Cần Thơ</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="form-group">
                                <a class="btn btn-select btn-select-light btn-tp">
                                    <input type="hidden" class="btn-select-input" id="district" name="district"
                                        value="" />
                                    <span id="district-select" class="btn-select-value">Chọn quận, huyện</span>
                                    <span class='btn-select-arrow fa fa-angle-down'></span>
                                    <ul id="districtGroup">
                                    </ul>
                                </a>
                            </div>
                            <script>
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn Quận Huyện",
                                // position: 'top',
                                // maxHeight: 400
                            });
                            </script>
                            <div class="form-group">
                                <select id="wardGroup" name="ward[]" multiple="multiple">
                                </select>
                            </div>
                            <script>
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn Phường Xã",
                                // position: 'top',
                                // maxHeight: 400
                            });
                            </script>
                            <div class="form-group">
                                <select multiple="multiple" name="street[]">
                                </select>
                            </div>
                            <script>
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn Đường",
                                // position: 'top',
                                // maxHeight: 400
                            });
                            </script>
                            <div class="form-group">
                                <select multiple="multiple" name="type[]">
                                    <option value="1">Ph&ograve;ng trọ, nh&agrave; trọ</option>
                                    <option value="2">Nh&agrave; nguy&ecirc;n căn</option>
                                    <option value="3">Nh&agrave; mặt phố</option>
                                    <option value="4">Văn ph&ograve;ng</option>
                                    <option value="6">Chung cư, căn hộ</option>
                                    <option value="7">Mặt bằng, cửa h&agrave;ng</option>
                                </select>
                            </div>
                            <script>
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn Loại Phòng",
                                // position: 'top',
                                // maxHeight: 400
                            });
                            </script>
                            <div class="form-group price">
                                <div class="price-title">Chọn khoảng giá</div>
                                <div class="range-slider">
                                    <input type="text" class="js-range-slider" value="" />
                                </div>
                                <div class="extra-controls">
                                    <div class="form-group input-price">
                                        <div class="price-from">
                                            <div class="input-group">
                                                <input name="price_from" type="text" maxlength="4" value="0"
                                                    class="inp js-from form-control" />
                                                <span class="input-group-addon">Triệu</span>
                                            </div>
                                        </div>
                                        <span class="input-price-title">Đến</span>
                                        <div class="price-to">
                                            <div class="input-group">
                                                <input name="price_to" type="text" maxlength="4" value="50"
                                                    class="inp js-to form-control" />
                                                <span class="input-group-addon">Triệu</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <button type="submit" class="btn btn-slide-search"><span class="fa fa-search"></span>Tìm
                                    kiếm</button>
                            </div>

                            <script type="text/javascript">
                            var $range = $(".js-range-slider"),
                                $from = $(".js-from"),
                                $to = $(".js-to"),
                                range,
                                min = 0,
                                max = 50,
                                from,
                                to;

                            var updateValues = function() {
                                $from.prop("value", from);
                                $to.prop("value", to);
                            };

                            $range.ionRangeSlider({
                                type: "double",
                                min: min,
                                max: max,
                                step: 0.5,
                                prettify_enabled: false,
                                from: $from.val(),
                                to: $to.val(),
                                grid: false,
                                hide_min_max: true,
                                hide_from_to: true,
                                postfix: ' triệu đ',
                                prefix: "$",
                                keyboard: true,
                                grid_num: 10,
                                onChange: function(data) {
                                    from = data.from;
                                    to = data.to;

                                    updateValues();
                                }
                            });

                            range = $range.data("ionRangeSlider");

                            var updateRange = function() {
                                range.update({
                                    from: from,
                                    to: to
                                });
                            };

                            $from.on("change", function() {
                                from = +$(this).prop("value");
                                if (from < min) {
                                    from = min;
                                }
                                if (from > to) {
                                    from = to;
                                }

                                updateValues();
                                updateRange();
                            });

                            $to.on("change", function() {
                                to = +$(this).prop("value");
                                if (to > max) {
                                    to = max;
                                }
                                if (to < from) {
                                    to = from;
                                }

                                updateValues();
                                updateRange();
                            });
                            </script>
                        </form>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
            $(document).ready(function() {
                $('#submit_search').on('click', function() {
                    $('#search_form').submit();
                });
                $('.get_province').on('click', function(e) {
                    $('[name="district"]').attr('value', '');
                    $('#district-select').text('Chọn quận, huyện');
                    var key = $(this).val();
                    var table = 'district';
                    $.ajax({
                        url: 'http://phongtot.vn/data_client',
                        type: 'POST',
                        data: {
                            key: key,
                            table: table,
                            _token: '7U8qx0IeyZVmVoWPvRuvvmbFyDZWJUiEZxX4QAov'
                        },
                        dataType: 'json',
                        success: function(result) {
                            var html = '';
                            $.each(result, function(key, item) {
                                var value = item['id'];
                                var name = item['name'];
                                html += '<li class="get_district" value="' + value +
                                    '">' + name + '</li>';
                            });
                            $('#districtGroup').html(html);
                            // $('#districtGroup').append(html);
                            $('#wardGroup').html('');
                            $('[name="street[]"]').html('');
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn Quận Huyện",
                                // position: 'top',
                                // maxHeight: 400
                            });
                        }
                    });
                });
                $('body').on('click', '.get_district', function(e) {
                    $('#wardGroup').html('');
                    $('[name="street[]"]').html('');
                    var key = $(this).val();
                    var table = 'ward';
                    $.ajax({
                        url: 'http://phongtot.vn/data_client',
                        type: 'POST',
                        data: {
                            key: key,
                            table: table,
                            _token: '7U8qx0IeyZVmVoWPvRuvvmbFyDZWJUiEZxX4QAov'
                        },
                        dataType: 'json',
                        success: function(result) {
                            var html = '';
                            $.each(result, function(key, item) {
                                var value = item['id'];
                                var name = item['name'];
                                html += '<option value="' + value + '">' + name +
                                    '</option>';
                            });
                            $('#wardGroup').html(html);
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn Phường Xã",
                                // position: 'top',
                                // maxHeight: 400
                            });
                        }
                    });
                    table = 'street';
                    $.ajax({
                        url: 'http://phongtot.vn/data_client',
                        type: 'POST',
                        data: {
                            key: key,
                            table: table,
                            _token: '7U8qx0IeyZVmVoWPvRuvvmbFyDZWJUiEZxX4QAov'
                        },
                        dataType: 'json',
                        success: function(result) {
                            var html = '';
                            $.each(result, function(key, item) {
                                var value = item['id'];
                                var name = item['name'];
                                html += '<option value="' + value + '">' + name +
                                    '</option>';
                            });
                            $('[name="street[]"]').html(html);
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn đường/phố",
                                // position: 'top',
                                // maxHeight: 400
                            });
                        }
                    });
                });
            });
            </script>
            <div class="row">
                <div class="col-sm-6 col-md-12 sidebar-ads">
                    <img class="img-responsive" src="http://ngoaingu.net/themes/client/img/ads1.png" alt="">
                </div>
            </div>
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
                    <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/ads-3-min.png" alt="">
                </div>
                <div class="col-sm-6 col-md-12 sidebar-ads">
                    <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/ads-4-min.png" alt="">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 sidebar-article-label">
                    <div class="pull-left">
                        <a href="http://phongtot.vn/bai-viet">
                            <h3><span>bài viết</span> mới</h3>
                        </a>
                    </div>
                    <div class="pull-right">
                        <a href="http://phongtot.vn/bai-viet">
                            <h3>Xem thêm <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <hr />
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="http://phongtot.vn/bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="http://media.phongtot.vn/xc5tx4cj/ngoi-nha-46m&sup2;-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo_cover-573eddf84424b.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>Ng&ocirc;i nh&agrave; 46m&sup2; tuyệt đẹp c&oacute; chi ph&iacute; ho&agrave;n
                                        thiện 480 triệu đồng ch&agrave;ng trai 8x x&acirc;y tặng vợ</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="http://phongtot.vn/bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="http://media.phongtot.vn/xc5tx4cj/y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu_cover-573dcbc3ac6e2.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>&Yacute; tưởng kinh doanh nh&agrave; trọ, ngồi kh&ocirc;ng mỗi th&aacute;ng kiếm
                                        trăm triệu?</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="http://phongtot.vn/bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="http://media.phongtot.vn/xc5tx4cj/nhung-dieu-can-biet-khi-tim-phong-tro_cover-5714ad734268d.jpg"
                                    alt="">
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
                    <a href="http://phongtot.vn/bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="http://media.phongtot.vn/xc5tx4cj/thiet-ke-can-ho-‪‬173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong_cover-57018c103e17a.jpg"
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
                    <a href="http://phongtot.vn/bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="http://media.phongtot.vn/xc5tx4cj/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien_cover-57018a97e544c.jpg"
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
                    <a href="http://phongtot.vn/bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="http://media.phongtot.vn/xc5tx4cj/vi-sao-chon-nganh-hot-van-that-nghiep_cover-57017e8c0162e.jpg"
                                    alt="">
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
<!-- Start footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 footer-top">
                <!-- <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <h3>Video</h3>
                        <ul>
                            <li><h2><a href="http://ngoaingu.net/video/motivational" title="Motivational">Motivational</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/ted" title="TED">TED</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/trailers-phim" title="Trailers Phim">Trailers Phim</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/hoc-tieng-anh-qua-bai-hat" title="Video nhạc">Video nhạc</a></h2></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <h3>Quiz</h3>
                        <ul>
                            <li><h2><a href="http://ngoaingu.net/video/motivational" title="Motivational">Motivational</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/ted" title="TED">TED</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/trailers-phim" title="Trailers Phim">Trailers Phim</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/hoc-tieng-anh-qua-bai-hat" title="Video nhạc">Video nhạc</a></h2></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <h3>Phim</h3>
                        <ul>
                            <li><h<a href="http://ngoaingu.net/video/trailers-phim" title="Trailers Phim">Trailers Phim</a></h2></li>
                            <li><h2>2><a href="http://ngoaingu.net/video/motivational" title="Motivational">Motivational</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/ted" title="TED">TED</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/hoc-tieng-anh-qua-bai-hat" title="Video nhạc">Video nhạc</a></h2></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <h3>Tiếng anh trẻ em</h3>
                        <ul>
                            <li><h2><a href="http://ngoaingu.net/video/motivational" title="Motivational">Motivational</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/ted" title="TED">TED</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/trailers-phim" title="Trailers Phim">Trailers Phim</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/hoc-tieng-anh-qua-bai-hat" title="Video nhạc">Video nhạc</a></h2></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <h3>Chuyên nghành</h3>
                        <ul>
                            <li><h2><a href="http://ngoaingu.net/video/motivational" title="Motivational">Motivational</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/ted" title="TED">TED</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/trailers-phim" title="Trailers Phim">Trailers Phim</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/hoc-tieng-anh-qua-bai-hat" title="Video nhạc">Video nhạc</a></h2></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <h3>Bài viết</h3>
                        <ul>
                            <li><h2><a href="http://ngoaingu.net/video/motivational" title="Motivational">Motivational</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/ted" title="TED">TED</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/trailers-phim" title="Trailers Phim">Trailers Phim</a></h2></li>
                            <li><h2><a href="http://ngoaingu.net/video/hoc-tieng-anh-qua-bai-hat" title="Video nhạc">Video nhạc</a></h2></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 footer-hr">
                        <hr/>
                    </div>
                </div> -->
                <div class="row block-footer-2">
                    <div class="col-xs-6 col-sm-6 col-md-2">
                        <h3>Thông tin liên hệ</h3>
                        <p>Tel : 098.8888.182<br />
                            <span>Email : support@phongtot.vn</span></p>
                        <!-- <img class="img-responsive" src="img/footer-logo.png" alt=""> -->
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-2">
                        <h3>Hỗ trợ</h3>
                        <ul>
                            <li>
                                <h2><a href="" title="Motivational">Giới thiệu</a></h2>
                            </li>
                            <li>
                                <h2><a href="" title="TED">Điều khoản sử dụng</a></h2>
                            </li>
                            <li>
                                <h2><a href="" title="Trailers Phim">Quảng cáo</a></h2>
                            </li>
                            <li>
                                <h2><a href="" title="Video nhạc">Tính năng ưu điểm</a></h2>
                            </li>
                        </ul>
                        <ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 footer-about">
                        <h3>Về chúng tôi</h3>
                        <p>Trang web đăng tin chia sẻ miễn phí thông tin về phòng trọ, nhà riêng, văn phòng nhằm giúp
                            người thuê phòng và người cho thuê phòng tương tác với nhau không qua trung gian môi giới.
                        </p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 footer-tag">
                        <h3>Top từ khóa</h3>
                        <p>
                            <a href="http://phongtot.vn/phong-tro-nha-tro">Tìm phòng trọ</a>,
                            <a href="http://phongtot.vn/phong-tro-nha-tro">Tìm nhà trọ</a>,
                            <a href="http://phongtot.vn/phong-tro-nha-tro">Cho thuê nhà trọ</a>,
                            <a href="http://phongtot.vn/phong-tro-nha-tro">Cho thuê phòng trọ</a>,
                            <a href="http://phongtot.vn/nha-nguyen-can">Cho thuê nhà nguyên căn</a>,
                            <a href="http://phongtot.vn/nha-nguyen-can">Thuê nhà nguyên căn</a>,
                            <a href="http://phongtot.vn/nha-nguyen-can">Nhà cho thuê</a>,
                            <a href="http://phongtot.vn/chung-cu-can-ho">Cho thuê chung cư mini</a>,
                            <a href="http://phongtot.vn/o-ghep">Tìm người ở ghép</a>,
                            <a href="http://licham.com" target="_blank" title="Lịch âm">Lịch âm</a>
                        </p>
                    </div>
                </div>
                <div class="row block-footer-bottom">
                    <div class="col-md-12">
                        <div class="pull-left">
                            <a href="">Site map</a> /
                            <a href="">Tìm kiếm nâng cao</a> /
                            <a href="">Liên hệ</a>
                            <br>
                            <span>Website đang hoạt động thử nghiệm, chờ xin giấy phép hoạt động của Bộ thông tin và
                                truyền thông.</span><br>
                            <span>© 2016 Static Team. All rights reserved.</span>
                        </div>
                        <div class="pull-right">
                            <i class="fa fa-apple"></i>
                            <i class="fa fa-windows"></i>
                            <i class="fa fa-google-plus"></i>
                            <i class="fa fa-facebook"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="systemAlert">
</div>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $('#systemAlert').fadeOut();
    }, 10000);
})
</script>
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
                            <li id="li_login" class="active"><a href="#tab_auth_login" data-toggle="tab">ĐĂNG NHẬP</a>
                            </li>
                            <li id="li_register"><a href="#tab_auth_register" data-toggle="tab">ĐĂNG KÝ</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab_auth_login">
                                <form class="form-horizontal frm-login-ajax1 frm-user-ajax" id="frm-login-ajax1"
                                    role="form" method="POST" action="http://phongtot.vn/dang-nhap">
                                    <div class="hide alert alert-danger"></div>
                                    <input type="hidden" name="_token" value="7U8qx0IeyZVmVoWPvRuvvmbFyDZWJUiEZxX4QAov">
                                    <input type="hidden" name="current_url"
                                        value="http://phongtot.vn/bai-viet/ngoi-nha-46m%C2%B2-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo">
                                    <div class="form-group">
                                        <label for="email" class="col-sm-3 col-md-3 control-label">Email</label>
                                        <div class="col-sm-8 col-md-8">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Địa chỉ email ..." value="">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 col-md-3 control-label">Mật khẩu</label>
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
                                            <a href="http://phongtot.vn/social/facebook"
                                                class="btn btn-md btn-social btn-facebook"> <i
                                                    class="fa fa-facebook"></i> Đăng nhập bằng Facebook </a>
                                            <a href="http://phongtot.vn/social/google"
                                                class="btn btn-md btn-social btn-google-plus"> <i
                                                    class="fa fa-google-plus"></i> Đăng nhập bằng Google </a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="text-center text-center-auth">
                                            <p><a class="btn btn-link" href="http://phongtot.vn/password/email">Khôi
                                                    phục mật khẩu</a> để tìm lại mật khẩu</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab_auth_register">
                                <form class="form-horizontal frm-user-ajax" id="frm-register-ajax" role="form"
                                    method="POST" action="http://phongtot.vn/dang-ky">
                                    <div class="hide alert alert-danger"></div>
                                    <input type="hidden" name="_token" value="7U8qx0IeyZVmVoWPvRuvvmbFyDZWJUiEZxX4QAov">
                                    <input type="hidden" name="current_url"
                                        value="http://phongtot.vn/bai-viet/ngoi-nha-46m%C2%B2-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo">
                                    <div class="form-group">
                                        <label for="txt_fullname" class="col-sm-4 control-label">Tên hiển thị</label>
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
                                            <span class="help-block"><small>Gồm 5 ký tự phân biệt chữ Hoa và chữ thường.
                                                </small></span>
                                            <div class="col-md-12">
                                                <img src="http://phongtot.vn/captcha/default?Ab3LmHKo" alt="captcha"
                                                    class="captcha-img" data-refresh-config="default">
                                                <span class="pull-right"><a title="Lấy mã xác nhận mới"
                                                        class="recapcha enable-tooltip" href="javascript:void(0);"><i
                                                            class="fa fa-refresh fa-2x text-success"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                    $('.recapcha').on('click', function() {
                                        var captcha = $('img.captcha-img');
                                        var config = captcha.data('refresh-config');
                                        $.ajax({
                                            method: 'GET',
                                            url: '/get_captcha/' + config,
                                        }).done(function(response) {
                                            captcha.prop('src', response);
                                        });
                                    });
                                    </script>
                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" class="btn btn-auth-submit">Đăng ký tài khoản</button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="http://phongtot.vn/social/facebook"
                                        class="btn btn-md btn-social btn-facebook"> <i class="fa fa-facebook"></i> Đăng
                                        ký bằng Facebook </a>
                                    <a href="http://phongtot.vn/social/facebook"
                                        class="btn btn-md btn-social btn-google-plus"> <i class="fa fa-google-plus"></i>
                                        Đăng ký bằng Google </a>
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
<div class="modal fade" id="modal-feed-back" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Phản hồi tình trạng phòng</h4>
            </div>
            <form id="feedback-form" class="form" method="POST" action="http://phongtot.vn/phan-anh-tin-dang/71"
                enctype="multipart/form-data">
                <input type="hidden" name="_token" value="7U8qx0IeyZVmVoWPvRuvvmbFyDZWJUiEZxX4QAov">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group radio-area">
                                <label class="control-label alert alert-warning hide">Vui lòng chọn trạng thái phản ánh
                                    <button type="button" class="close">&times;</button></label>
                                <div class="checkbox checkbox-success">
                                    <input class="get-radio" type="radio" name="title" id="radio8"
                                        value="Phòng đã có người thuê">
                                    <label for="radio8">Phòng đã có người thuê</label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input class="get-radio" type="radio" name="title" id="radio1"
                                        value="Không liên hệ được với chủ phòng">
                                    <label for="radio1">Không liên hệ được với chủ phòng</label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input class="get-radio" type="radio" name="title" id="radio2"
                                        value="Phòng không đúng như mô tả">
                                    <label for="radio2">Phòng không đúng như mô tả</label>
                                </div>
                            </div>
                            <div class="form-group feed-back-text">
                                <label for="comment">Thông tin khác</label>
                                <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-report-room">Gửi phản ánh</button>
                    </div>
                </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    @endsection