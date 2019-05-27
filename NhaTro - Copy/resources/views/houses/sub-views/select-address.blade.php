@php
$cities = \App\City::all();

if(!empty($dataTypeContent->district_id)){
$district = \App\District::find($dataTypeContent->district_id);
}

if(!empty($dataTypeContent->town_id)){
$town = \App\Town::find($dataTypeContent->town_id);
}

@endphp
<div class="form-group  col-md-{{ $grid ?: 12 }}">
    <label class="control-label" style="font-weight: 600;">Tỉnh/ Thành phố</label>
    <select class="form-control" name="city_id" id="city">
        <option>---- Chọn Tỉnh/ Thành phố ----</option>
        @foreach($cities as $city)
        <option value="{{$city->id}}" @if($dataTypeContent->city_id == $city->id)) selected @endif>{{$city->name}}
        </option>
        @endforeach
    </select>
</div>

<div class="form-group  col-md-{{ $grid ?: 12 }}">
    <label class="control-label" style="font-weight: 600;">Quận/ Huyện</label>
    <select class="form-control" name="district_id" id="district">
        <option value="{{isset($district) ? $district->id : '' }}">
            {{isset($district) ? $district->name : "---- Quận/ Huyện ----"}}</option>
    </select>
</div>

<div class="form-group  col-md-{{ $grid ?: 12 }}">
    <label class="control-label" style="font-weight: 600;">Xã/ Phường/ Thị trấn</label>
    <select class="form-control" name="town_id" id="town">
        <option value="{{isset($town) ? $town->id : '' }}">
            {{isset($town) ? $town->name : "---- Xã/ Phường/ Thị trấn ----"}}</option>
    </select>
</div>
@section('javascript')
<script>
$(document).ready(function() {
    var city_id = document.getElementById("city").value;
    var district_id = document.getElementById("district").value;
    var town_id = document.getElementById("town").value;
    $.ajax({
        url: '/admin/ajax/get-district',
        method: 'get',
        data: {
            city_id: city_id,
        },
        success: function(data) {
            $("select[name='district_id'").html('');
            $.each(data, function(key, value) {
                if (value.id == district_id) {
                    $("select[name='district_id']").append(
                        "<option value=" + value.id + " selected>" + value.name +
                        "</option>"
                    );
                } else {
                    $("select[name='district_id']").append(
                        "<option value=" + value.id + ">" + value.name +
                        "</option>"
                    );
                }

            });
        }
    });

    $.ajax({
        url: '/admin/ajax/get-town',
        method: 'get',
        data: {
            district_id: district_id,
        },
        success: function(data) {
            $("select[name='town_id'").html('');
            $.each(data, function(key, value) {
                if (value.id == town_id) {
                    $("select[name='town_id']").append(
                        "<option value=" + value.id + " selected>" + value.name +
                        "</option>"
                    );
                } else {
                    $("select[name='town_id']").append(
                        "<option value=" + value.id + ">" + value.name +
                        "</option>"
                    );
                }

            });
        }
    });


});

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
                    "<option value=" + value.id + ">" + value.name +
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
                    "<option value=" + value.id + ">" + value.name +
                    "</option>"
                );
            });
        }
    });
});
</script>
@stop