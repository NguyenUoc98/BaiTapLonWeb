<div class="slider ">
    <div class="pt_container">
        <div class="col-xs-12 col-sm-12 col-md-12 search-bar">
            <form action="tim-kiem" method="GET">

                <div class="group-arena pull-left">
                    <div class="group-title">Chọn khu vực</div>
                    <input class="ip-room-where" type="text" name="k" placeholder="Bạn muốn tìm phòng ở đâu ?">

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
                    <!-- Chọn quận huyện -->
                    <div class="form-group">
                        <select class="form-control btn-select-light" name="district_id">
                            <option>---- Quận/Huyện ----</option>
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
                            url: '/admin/ajax/get-town/',
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

                <div class="group-type pull-left">
                    <div class="group-title">Chọn loại phòng</div>
                    <div class="radio radio-danger">
                        <ul class="type-list-item">
                            @foreach($categories as $category)
                            <li>
                                <input type="radio" name="type[]" id="{{$category->id}}" value="{{$category->id}}">
                                <label for="{{$category->id}}">{{$category->name}}</label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="group-price pull-left">
                    <div class="group-title">Chọn khoảng giá</div>
                    <div class="input-group">
                        <input name="price_from_min" type="text" maxlength="4" value="0" class="inp js-from form-control" />
                        <span class="input-group-addon">Triệu</span>
                    </div>

                    <span class="input-price-title">Đến</span>

                    <div class="input-group">
                        <input name="price_from_max" type="text" maxlength="4" value="0" class="inp js-from form-control" />
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