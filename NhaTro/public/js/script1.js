var $range = $(".js-range-slider"),
    $from = $(".js-from"),
    $to = $(".js-to"),
    range,
    min = 0,
    max = 50,
    from,
    to;

var updateValues = function () {
    $from.prop("value", from);
    $to.prop("value", to);
};

$range.ionRangeSlider({
    type: "double",
    min: min,
    max: max,
    step: 0.5,
    prettify_enabled: false,
    from: 0,
    to: 50,
    grid: false,
    hide_min_max: true,
    hide_from_to: true,
    postfix: ' triệu đ',
    prefix: "$",
    keyboard: true,
    grid_num: 10,
    onChange: function (data) {
        from = data.from;
        to = data.to;

        updateValues();
    }
});

range = $range.data("ionRangeSlider");

var updateRange = function () {
    range.update({
        from: from,
        to: to
    });
};

$from.on("change", function () {
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

$to.on("change", function () {
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

$('body').on('click', '.load_modal_login', function(e) {
    $('#li_register').removeClass('active');
    $('#li_login').addClass('active');
    $('#tab_auth_register').removeClass('in active');
    $('#tab_auth_login').addClass('in active');
});
$('body').on('click', '.load_modal_register', function(e) {
    $('#li_login').removeClass('active');
    $('#li_register').addClass('active');
    $('#tab_auth_login').removeClass('in active');
    $('#tab_auth_register').addClass('in active');
});