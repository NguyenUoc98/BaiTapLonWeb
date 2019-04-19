<div class="col-md-3 sidebar">

            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Các loại phòng</h5>
                </div>

                <!-- Catagory Widget -->
                <ul class="nav nav-tabs">
                    @foreach ($categories as $category)
                    <li style="float: left; width: 100%;">
                        <a href="{{route('category', $category->id)}}" 
                            style="padding-top: 7px; padding-bottom: 7px;">{{$category->name}}</a>
                    </li>
                    @endforeach
                    <ul>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-12 sidebar-ads">
                    <img class="img-responsive" src="themes/client/img/ads1.png" alt="">
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
        </div>