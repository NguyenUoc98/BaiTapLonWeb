<div class="slider ">
    <div class="pt_container">
        <div class="col-xs-12 col-sm-12 col-md-12 search-bar">
            <form action="tim-kiem" method="GET">

                <div class="group-arena pull-left">
                    <div class="group-title">Chọn khu vực</div>
                    <input class="ip-room-where" type="text" name="k" placeholder="Bạn muốn tìm phòng ở đâu ?">

                    <div class="dropdown">
                        <a class="btn btn-select btn-select-light btn-select-city dropdown-toggle" type="button"
                            id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="btn-select-value">Thành Phố</span>
                            <span class='btn-select-arrow fa fa-angle-down'></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="background-color: #ddd">
                            <li value="1">
                                <a href="#" style="padding-top: 7px; padding-bottom: 7px;">
                                    <span class="select-value">Hà Nội</span>
                                </a>
                                <hr style="margin: 0px">
                            </li>
                            <li value="1">
                                <a href="#" style="padding-top: 7px;padding-bottom: 7px;">
                                    <span class="select-value">Hải Phòng</span>
                                </a>
                                <hr style="margin: 0px">
                            </li>
                            <li value="1">
                                <a href="#" style="padding-top: 7px;padding-bottom: 7px;">
                                    <span class="select-value">Thừa Thiên Huế</span>
                                </a>
                                <hr style="margin: 0px">
                            </li>
                            <li value="1">
                                <a href="#" style="padding-top: 7px;padding-bottom: 7px;">
                                    <span class="select-value">Hồ Chí Minh</span>
                                </a>
                                <hr style="margin: 0px">
                            </li>

                        </div>
                    </div>

                    <div class="dropdown">
                        <a class="btn btn-select btn-select-light btn-select-city dropdown-toggle" type="button"
                            id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="btn-select-value">Quận/Huyện</span>
                            <span class='btn-select-arrow fa fa-angle-down'></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="background-color: #ddd">
                            <li value="1">
                                <a href="#" style="padding-top: 7px; padding-bottom: 7px;">
                                    <span class="select-value">Hà Nội</span>
                                </a>
                                <hr style="margin: 0px">
                            </li>
                            <li value="1">
                                <a href="#" style="padding-top: 7px;padding-bottom: 7px;">
                                    <span class="select-value">Hải Phòng</span>
                                </a>
                                <hr style="margin: 0px">
                            </li>
                            <li value="1">
                                <a href="#" style="padding-top: 7px;padding-bottom: 7px;">
                                    <span class="select-value">Thừa Thiên Huế</span>
                                </a>
                                <hr style="margin: 0px">
                            </li>
                            <li value="1">
                                <a href="#" style="padding-top: 7px;padding-bottom: 7px;">
                                    <span class="select-value">Hồ Chí Minh</span>
                                </a>
                                <hr style="margin: 0px">
                            </li>

                        </div>
                    </div>

                </div>

                <div class="group-type pull-left">
                    <div class="group-title">Chọn loại phòng</div>
                    <div class="radio radio-danger">
                        <ul class="type-list-item">
                            <li>
                                <input type="radio" name="type[]" id="1" value="1">
                                <label for="1">Ph&ograve;ng trọ, nh&agrave; trọ</label>
                            </li>
                            <li>
                                <input type="radio" name="type[]" id="2" value="2">
                                <label for="2">Nh&agrave; nguy&ecirc;n căn</label>
                            </li>
                            <li>
                                <input type="radio" name="type[]" id="3" value="3">
                                <label for="3">Nh&agrave; mặt phố</label>
                            </li>
                            <li>
                                <input type="radio" name="type[]" id="4" value="4">
                                <label for="4">Văn ph&ograve;ng</label>
                            </li>
                            <li>
                                <input type="radio" name="type[]" id="6" value="6">
                                <label for="6">Chung cư, căn hộ</label>
                            </li>
                            <li>
                                <input type="radio" name="type[]" id="7" value="7">
                                <label for="7">Mặt bằng, cửa h&agrave;ng</label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="group-price pull-left">
                    <div class="group-title">Chọn khoảng giá</div>
                    <div class="range-slider">
                        <input type="text" class="js-range-slider" value="" />
                    </div>
                    <div class="extra-controls">
                        <div class="form-group input-price">
                            <div class="price-from">
                                <div class="input-group">
                                    <input type="text" name="price_from" maxlength="4" value="0"
                                        class="inp js-from form-control" />
                                    <span class="input-group-addon">Triệu</span>
                                </div>
                            </div>
                            <span class="input-price-title">Đến</span>
                            <div class="price-to">
                                <div class="input-group">
                                    <input type="text" name="price_to" maxlength="4" value="50"
                                        class="inp js-to form-control" />
                                    <span class="input-group-addon">Triệu</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="group-btn-submit">
                    <button type="submit" class="btn btn-slide-search"><span class="fa fa-search"></span>Tìm
                        kiếm</button>

                    <button type="submit" class="btn btn-slide-search">Tìm kiếm nâng cao</button>
                </div>
            </form>
        </div>
    </div>
</div>