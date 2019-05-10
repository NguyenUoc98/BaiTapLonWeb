@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="tabbable-panel">
                        <div class="tabbable-line">
                            <div class="menu-tab">
                                <div class="menu-tab-title">Kết quả tìm kiếm<i class="fa fa-angle-right"></i></div>
                            </div>

                            <div class="thumbnail-list">
                                @if(count($houses) < 1) <div class="row">
                                    <h3 style="color: red; text-align: center;">Không tìm thấy kết quả</h3><br><br></div>
                            @endif
                            <div class="row block-item">
                                @foreach ($houses as $house)
                                <div class="col-sm-6 col-md-4 thumbnail-item">
                                    <div class="thumbnail">
                                        <a href="{{route('house-detail', $house->id)}}" title="{{$house->title}}">
                                            <img src="/nhatro/medium/{{str_replace('\\','/',json_decode($house->image)[0])}}" alt="" class="cover img-reponsive">
                                        </a>
                                        <div class="room-item-price">
                                            <a href="">{{number_format($house->price)}} VNĐ/tháng</a>
                                        </div>
                                        <div class="caption">
                                            <div class="title">
                                                <h2><a href="{{route('house-detail', $house->id)}}">{{$house->title}}</a></h2>
                                            </div>
                                            <div class="extra" style="height: 60px;">
                                                <div class="pull-left">
                                                    <a href="#"><span class="fa fa-map-marker"></span>{{$house->address}}</a>
                                                </div>
                                                <div class="pull-right">
                                                    <a href=""><span class="fa fa-info"></span>{{$house->acreage}}
                                                        m<sup>2</sup></a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach

                            </div>

                        </div>

                        <div>{{$houses->links()}}</div>

                    </div>
                </div>


                <div class="home-article">
                    <div class="row">
                        <div class="col-md-12 home-article-label">
                            <div class="pull-left">
                                <a href="bai-viet">
                                    <h3><span>bài viết</span> liên quan</h3>
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href=""></a>
                                <h3><a href="bai-viet">Xem thêm <i class="fa fa-angle-right"></i></a>
                                </h3>
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                        </div>
                        <div class="col-md-7 left">
                            <div class="thumbnail thumb-big">
                                <a href="bai-viet/ngoi-nha-46m%C2%B2-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo">
                                    <img class="img-responsive" src="xc5tx4cj/ngoi-nha-46m&sup2;-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo_cover-573eddf84424b.jpg" alt="ngoi-nha-46m&sup2;-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo">
                                    <h2 class="title">Ng&ocirc;i nh&agrave; 46m&sup2; tuyệt đẹp c&oacute; chi
                                        ph&iacute; ho&agrave;n thiện 480 triệu đồng ch&agrave;ng trai 8x
                                        x&acirc;y tặng vợ</h2>
                                </a>
                                <div class="des">Ng&ocirc;i nh&agrave; của Nguyễn Ho&agrave;ng Hiệp tặng cho vợ
                                    sắp cưới kh&ocirc;ng chỉ đẹp như nh&agrave; T&acirc;y m&agrave; tổng chi
                                    ph&iacute; x&acirc;y dựng, thiết kế, trang tr&iacute; chỉ vỏn vẹn ở con số
                                    480 triệu đồng.</div>
                            </div>
                            <div class="col-md-4 thumbnail thumb-small">
                                <a href="bai-viet/y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu">
                                    <img class="img-reponsive" src="xc5tx4cj/y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu_cover-573dcbc3ac6e2.jpg" alt="y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu">
                                    <h2 class="title" href="bai-viet/y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu">
                                        &Yacute; tưởng kinh doanh nh&agrave; trọ, ngồi kh&ocirc;ng mỗi
                                        th&aacute;ng kiếm trăm triệu?</h2>
                                </a>
                            </div>
                            <div class="col-md-4 thumbnail thumb-small">
                                <a href="bai-viet/nhung-dieu-can-biet-khi-tim-phong-tro">
                                    <img class="img-reponsive" src="xc5tx4cj/nhung-dieu-can-biet-khi-tim-phong-tro_cover-5714ad734268d.jpg" alt="nhung-dieu-can-biet-khi-tim-phong-tro">
                                    <h2 class="title" href="bai-viet/nhung-dieu-can-biet-khi-tim-phong-tro">
                                        Những điều cần biết khi t&igrave;m ph&ograve;ng trọ</h2>
                                </a>
                            </div>
                            <div class="col-md-4 thumbnail thumb-small">
                                <a href="bai-viet/thiet-ke-can-ho-%E2%80%AA%E2%80%AC173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong">
                                    <img class="img-reponsive" src="xc5tx4cj/thiet-ke-can-ho-‪‬173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong_cover-57018c103e17a.jpg" alt="thiet-ke-can-ho-‪‬173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong">
                                    <h2 class="title" href="bai-viet/thiet-ke-can-ho-%E2%80%AA%E2%80%AC173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong">
                                        Thiết kế căn hộ ‪‬173m2 cực đẹp với chi ph&iacute; chỉ 17 triệu đồng
                                    </h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5 right">
                            <div class="row item">
                                <a href="bai-viet/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">
                                    <div class="col-md-4 no-padding-vertical">
                                        <img class="img-responsive" src="xc5tx4cj/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien_cover-57018a97e544c.jpg" alt="pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">
                                    </div>
                                    <div class="col-md-8 no-padding-left">
                                        <h2 class="title" href="bai-viet/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">Phạm
                                            Hương mặc giản dị giao lưu c&ugrave;ng sinh vi&ecirc;n</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="row item">
                                <a href="bai-viet/vi-sao-chon-nganh-hot-van-that-nghiep">
                                    <div class="col-md-4 no-padding-vertical">
                                        <img class="img-responsive" src="xc5tx4cj/vi-sao-chon-nganh-hot-van-that-nghiep_cover-57017e8c0162e.jpg" alt="vi-sao-chon-nganh-hot-van-that-nghiep">
                                    </div>
                                    <div class="col-md-8 no-padding-left">
                                        <h2 class="title" href="bai-viet/vi-sao-chon-nganh-hot-van-that-nghiep">
                                            V&igrave; sao chọn ng&agrave;nh &#039;hot&#039; vẫn thất nghiệp?
                                        </h2>
                                    </div>
                                </a>
                            </div>
                            <div class="row item">
                                <a href="bai-viet/sinh-vien-my-chon-nganh-hoc-the-nao">
                                    <div class="col-md-4 no-padding-vertical">
                                        <img class="img-responsive" src="xc5tx4cj/sinh-vien-my-chon-nganh-hoc-the-nao_cover-57017d118c141.jpg" alt="sinh-vien-my-chon-nganh-hoc-the-nao">
                                    </div>
                                    <div class="col-md-8 no-padding-left">
                                        <h2 class="title" href="bai-viet/sinh-vien-my-chon-nganh-hoc-the-nao">
                                            Sinh vi&ecirc;n Mỹ chọn ng&agrave;nh học thế n&agrave;o?</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="row item">
                                <a href="bai-viet/nha-bao-bi-danh-sinh-vien-bao-chi-co-lung-lay">
                                    <div class="col-md-4 no-padding-vertical">
                                        <img class="img-responsive" src="xc5tx4cj/nha-bao-bi-danh-sinh-vien-bao-chi-co-lung-lay_cover-57017a46119c8.jpg" alt="nha-bao-bi-danh-sinh-vien-bao-chi-co-lung-lay">
                                    </div>
                                    <div class="col-md-8 no-padding-left">
                                        <h2 class="title" href="bai-viet/nha-bao-bi-danh-sinh-vien-bao-chi-co-lung-lay">
                                            Nh&agrave; b&aacute;o bị đ&aacute;nh, sinh vi&ecirc;n b&aacute;o
                                            ch&iacute; c&oacute; lung lay?</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="row item">
                                <a href="bai-viet/hon-100-sinh-vien-bi-dung-hoc-vi-cham-dong-hoc-phi">
                                    <div class="col-md-4 no-padding-vertical">
                                        <img class="img-responsive" src="xc5tx4cj/hon-100-sinh-vien-bi-dung-hoc-vi-cham-dong-hoc-phi_cover-570178b56d545.jpg" alt="hon-100-sinh-vien-bi-dung-hoc-vi-cham-dong-hoc-phi">
                                    </div>
                                    <div class="col-md-8 no-padding-left">
                                        <h2 class="title" href="bai-viet/hon-100-sinh-vien-bi-dung-hoc-vi-cham-dong-hoc-phi">
                                            Hơn 100 sinh vi&ecirc;n bị dừng học v&igrave; chậm đ&oacute;ng học
                                            ph&iacute;</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="row item">
                                <a href="bai-viet/sinh-vien-hao-hung-tham-gia-ngay-hoi-dinh-huong-nghe-nghiep">
                                    <div class="col-md-4 no-padding-vertical">
                                        <img class="img-responsive" src="xc5tx4cj/sinh-vien-hao-hung-tham-gia-ngay-hoi-dinh-huong-nghe-nghiep_cover-56e41d9cd7bcd.png" alt="sinh-vien-hao-hung-tham-gia-ngay-hoi-dinh-huong-nghe-nghiep">
                                    </div>
                                    <div class="col-md-8 no-padding-left">
                                        <h2 class="title" href="bai-viet/sinh-vien-hao-hung-tham-gia-ngay-hoi-dinh-huong-nghe-nghiep">
                                            Sinh vi&ecirc;n h&agrave;o hứng tham gia ng&agrave;y hội Định hướng
                                            nghề nghiệp</h2>
                                    </div>
                                </a>
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

                    <form class="form" id="search_form" action="{{route('timkiem')}}" method="POST">
                        {!! csrf_field() !!}
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


                        <div class="form-group">
                            <select class="form-control btn-select-light" name="type">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- <script>
                                $("select[name='type']").multipleSelect({
                                    width: '100%',
                                    multipleWidth: 132,
                                    selectAll: false,
                                    placeholder: "Chọn Loại Phòng",
                                });
                            </script> -->

                        <div class="form-group price">
                            <div class="price-title">Chọn khoảng giá</div>
                            <div class="input-group">
                                <input name="price_from" type="text" maxlength="4" value="0" class="inp" />
                                <span class="input-group-addon">Triệu</span>
                            </div>

                            <span class="input-price-title">Đến</span>

                            <div class="input-group">
                                <input name="price_to" type="text" maxlength="4" value="0" class="inp" />
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
        <div class="clearfix"></div>
    </div>
</div>

@endsection