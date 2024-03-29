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
                                <div class="btn-group dropleft pull-left" id="menu" style="margin-right: 10px;">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class='btn-select-arrow fa fa-bars'></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul class="nav nav-tabs">
                                            @foreach ($categories as $category)
                                            <li style="float: left; width: 100%;">
                                                <a href="{{route('category', $category->id)}}" data-toggle="tab"
                                                    style="padding-top: 7px; padding-bottom: 7px;">{{$category->name}}</a>
                                            </li>
                                            @endforeach
                                            <ul>
                                    </div>
                                </div>
                                @foreach ($categories as $category)
                                @if ($category->id == $houses[0]->type_id)
                                <div class="menu-tab-title">{{$category->name}} <i class="fa fa-angle-right"></i></div>
                                @endif
                                @endforeach
                            </div>

                            <div class="thumbnail-list">
                                <div class="row block-item">
                                    @foreach ($houses as $house)
                                    <div class="col-sm-6 col-md-4 thumbnail-item">
                                        <div class="thumbnail">
                                            <a href="{{route('house-detail', $house->id)}}" title="{{$house->title}}">
                                                <img src="/nhatro/medium/{{str_replace('\\','/',json_decode($house->image)[0])}}" alt=""
                                                    class="cover img-reponsive">
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
                                                        <a href="#"><span
                                                                class="fa fa-map-marker"></span>{{$house->address}}</a>
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
                                    <a
                                        href="bai-viet/ngoi-nha-46m%C2%B2-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo">
                                        <img class="img-responsive"
                                            src="xc5tx4cj/ngoi-nha-46m&sup2;-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo_cover-573eddf84424b.jpg"
                                            alt="ngoi-nha-46m&sup2;-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo">
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
                                        <img class="img-reponsive"
                                            src="xc5tx4cj/y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu_cover-573dcbc3ac6e2.jpg"
                                            alt="y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu">
                                        <h2 class="title"
                                            href="bai-viet/y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu">
                                            &Yacute; tưởng kinh doanh nh&agrave; trọ, ngồi kh&ocirc;ng mỗi
                                            th&aacute;ng kiếm trăm triệu?</h2>
                                    </a>
                                </div>
                                <div class="col-md-4 thumbnail thumb-small">
                                    <a href="bai-viet/nhung-dieu-can-biet-khi-tim-phong-tro">
                                        <img class="img-reponsive"
                                            src="xc5tx4cj/nhung-dieu-can-biet-khi-tim-phong-tro_cover-5714ad734268d.jpg"
                                            alt="nhung-dieu-can-biet-khi-tim-phong-tro">
                                        <h2 class="title" href="bai-viet/nhung-dieu-can-biet-khi-tim-phong-tro">
                                            Những điều cần biết khi t&igrave;m ph&ograve;ng trọ</h2>
                                    </a>
                                </div>
                                <div class="col-md-4 thumbnail thumb-small">
                                    <a
                                        href="bai-viet/thiet-ke-can-ho-%E2%80%AA%E2%80%AC173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong">
                                        <img class="img-reponsive"
                                            src="xc5tx4cj/thiet-ke-can-ho-‪‬173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong_cover-57018c103e17a.jpg"
                                            alt="thiet-ke-can-ho-‪‬173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong">
                                        <h2 class="title"
                                            href="bai-viet/thiet-ke-can-ho-%E2%80%AA%E2%80%AC173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong">
                                            Thiết kế căn hộ ‪‬173m2 cực đẹp với chi ph&iacute; chỉ 17 triệu đồng
                                        </h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-5 right">
                                <div class="row item">
                                    <a href="bai-viet/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">
                                        <div class="col-md-4 no-padding-vertical">
                                            <img class="img-responsive"
                                                src="xc5tx4cj/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien_cover-57018a97e544c.jpg"
                                                alt="pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">
                                        </div>
                                        <div class="col-md-8 no-padding-left">
                                            <h2 class="title"
                                                href="bai-viet/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">Phạm
                                                Hương mặc giản dị giao lưu c&ugrave;ng sinh vi&ecirc;n</h2>
                                        </div>
                                    </a>
                                </div>
                                <div class="row item">
                                    <a href="bai-viet/vi-sao-chon-nganh-hot-van-that-nghiep">
                                        <div class="col-md-4 no-padding-vertical">
                                            <img class="img-responsive"
                                                src="xc5tx4cj/vi-sao-chon-nganh-hot-van-that-nghiep_cover-57017e8c0162e.jpg"
                                                alt="vi-sao-chon-nganh-hot-van-that-nghiep">
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
                                            <img class="img-responsive"
                                                src="xc5tx4cj/sinh-vien-my-chon-nganh-hoc-the-nao_cover-57017d118c141.jpg"
                                                alt="sinh-vien-my-chon-nganh-hoc-the-nao">
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
                                            <img class="img-responsive"
                                                src="xc5tx4cj/nha-bao-bi-danh-sinh-vien-bao-chi-co-lung-lay_cover-57017a46119c8.jpg"
                                                alt="nha-bao-bi-danh-sinh-vien-bao-chi-co-lung-lay">
                                        </div>
                                        <div class="col-md-8 no-padding-left">
                                            <h2 class="title"
                                                href="bai-viet/nha-bao-bi-danh-sinh-vien-bao-chi-co-lung-lay">
                                                Nh&agrave; b&aacute;o bị đ&aacute;nh, sinh vi&ecirc;n b&aacute;o
                                                ch&iacute; c&oacute; lung lay?</h2>
                                        </div>
                                    </a>
                                </div>
                                <div class="row item">
                                    <a href="bai-viet/hon-100-sinh-vien-bi-dung-hoc-vi-cham-dong-hoc-phi">
                                        <div class="col-md-4 no-padding-vertical">
                                            <img class="img-responsive"
                                                src="xc5tx4cj/hon-100-sinh-vien-bi-dung-hoc-vi-cham-dong-hoc-phi_cover-570178b56d545.jpg"
                                                alt="hon-100-sinh-vien-bi-dung-hoc-vi-cham-dong-hoc-phi">
                                        </div>
                                        <div class="col-md-8 no-padding-left">
                                            <h2 class="title"
                                                href="bai-viet/hon-100-sinh-vien-bi-dung-hoc-vi-cham-dong-hoc-phi">
                                                Hơn 100 sinh vi&ecirc;n bị dừng học v&igrave; chậm đ&oacute;ng học
                                                ph&iacute;</h2>
                                        </div>
                                    </a>
                                </div>
                                <div class="row item">
                                    <a href="bai-viet/sinh-vien-hao-hung-tham-gia-ngay-hoi-dinh-huong-nghe-nghiep">
                                        <div class="col-md-4 no-padding-vertical">
                                            <img class="img-responsive"
                                                src="xc5tx4cj/sinh-vien-hao-hung-tham-gia-ngay-hoi-dinh-huong-nghe-nghiep_cover-56e41d9cd7bcd.png"
                                                alt="sinh-vien-hao-hung-tham-gia-ngay-hoi-dinh-huong-nghe-nghiep">
                                        </div>
                                        <div class="col-md-8 no-padding-left">
                                            <h2 class="title"
                                                href="bai-viet/sinh-vien-hao-hung-tham-gia-ngay-hoi-dinh-huong-nghe-nghiep">
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
        @include('sidebar')
    </div>
</div>

@endsection