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
                            <a href="#">Bài viết</a>
                            <span> / </span>
                            <span class="active">{{$post->title}}</span>
                        </div>
                    </div>
                    <div class="room-detail">
                        <div class="title">
                            <a href="javascript: void(0);">
                                <h1>{{$post->title}}</h1>
                            </a>
                        </div>
                        <div class="clearfix"></div>

                        <div class="room-detail-img">
                            <div class="row">
                                <div class="col-md-12">
                                    {{$post->body}}
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

            <!-- Ảnh quảng cáo -->
            <div class="row">
                <div class="col-sm-6 col-md-12 sidebar-ads">
                    <img class="img-responsive" src="themes/client/img/ads1.png" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-12 sidebar-ads">
                    <div class="fb-page" data-href="https://www.facebook.com/PhongTotvn-684633248621395/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/PhongTotvn-684633248621395/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/PhongTotvn-684633248621395/">PhongTot.vn</a></blockquote>
                    </div>
                </div>
            </div>

            <!-- Bài viết -->
            <div class="row">
                <div class="col-sm-6 col-md-12 sidebar-social">
                    <div class="fb-page" data-href="https://www.facebook.com/Phongtotvn-Thu%C3%AA-V%C3%A0-Cho-Thu%C3%AA-Ph%C3%B2ng-Ch%C3%ADnh-Ch%E1%BB%A7-726759860760692/" data-width="275" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/Phongtotvn-Thu%C3%AA-V%C3%A0-Cho-Thu%C3%AA-Ph%C3%B2ng-Ch%C3%ADnh-Ch%E1%BB%A7-726759860760692/">
                                <a href="https://www.facebook.com/Phongtotvn-Thu%C3%AA-V%C3%A0-Cho-Thu%C3%AA-Ph%C3%B2ng-Ch%C3%ADnh-Ch%E1%BB%A7-726759860760692/">Phongtot.vn
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
                
                <?php
                $posts = \App\Post::all();
                ?>
                @foreach($posts as $p)
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="{{route('post-detail', $p->id)}}">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive" src="xc5tx4cj/nhung-dieu-can-biet-khi-tim-phong-tro_cover-5714ad734268d.jpg" alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>{{$p->title}}</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection