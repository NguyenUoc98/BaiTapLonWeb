<div class="slider ">
    <div class="pt_container">
        <div class="col-xs-12 col-sm-12 col-md-12 search-bar">
            <form action="{{route('timkiem')}}" method="POST">
            {!! csrf_field() !!}
                <div class="group-arena pull-left">
                    <div class="group-title">Chọn khu vực</div>
                    

                    <?php
                        $cities = \App\City::all();
                    ?>
                    <div class="form-group" style="margin-top: 15px;">
                        <select class="form-control btn-select-light" name="city_id">
                            <option>---- Tỉnh/Thành phố ----</option>
                            @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Chọn quận huyện
                    <div class="form-group">
                        <select class="form-control btn-select-light" name="district_id">
                            <option>---- Quận/Huyện ----</option>
                        </select>
                    </div> -->

                    <!-- Script lấy đơn vị hành chính -->
                    

                </div>

                <div class="group-type pull-left">
                    <div class="group-title">Chọn loại phòng</div>
                    <div class="radio radio-danger">
                        <ul class="type-list-item">
                            @foreach($categories as $category)
                            <li>
                                <input type="radio" name="type" id="{{$category->id}}" value="{{$category->id}}">
                                <label for="{{$category->id}}">{{$category->name}}</label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="group-price pull-left">
                    <div class="group-title">Chọn khoảng giá</div>
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

                <div class="group-btn-submit">
                    <button type="submit" class="btn btn-slide-search"><span class="fa fa-search"></span>Tìm
                        kiếm</button>
                </div>
            </form>
        </div>
    </div>
</div>