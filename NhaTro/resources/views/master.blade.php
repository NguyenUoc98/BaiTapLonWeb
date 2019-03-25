<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
    <title>Hỗ trợ tìm nhà trọ</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="image_src" type="image/png" href="themes/client/img/phongtot_logo.png">
    <link rel="stylesheet" href="themes/client/css/bootstrap.min.css">
    <link rel="stylesheet" href="themes/client/css/fonts.css">
    <link rel="stylesheet" href="themes/client/css/font-awesome.min.css">
    <link rel="stylesheet" href="themes/client/css/component.css">
    <link rel="stylesheet" href="themes/client/css/app.css">
    <link rel="stylesheet" href="themes/client/css/jquery-gmaps-latlon-picker.css">
    <script src="themes/client/js/jquery-1.11.3.min.js.js.php"></script>
    <script src="themes/client/js/bootstrap.min.js.js.php"></script>
    <script src="themes/client/js/multiple-select.js.js.php"></script>
    <script src="themes/client/js/owl.carousel.min.js.js.php"></script>
    <script src="themes/client/js/ion.rangeSlider.js.js.php"></script>
    <script src="themes/client/js/jquery.maskMoney.js.js.php"></script>
    <!-- Load WysiBB JS and Theme -->

    <script src="themes/client/js/wysibb/jquery.wysibb.min.js.js.php"></script>
    <link rel="stylesheet" href="themes/client/js/wysibb/theme/default/wbbtheme.css" />
    <script type="text/javascript">
    var client_upload_img = 'dang-tin/upload';
    </script>
    <script src="/js/my_script.js"></script>
</head>

<body>
    @include('header')
    @include('header_nav')
    @include('slide')
    @yield('content')
    @include('footer')
    <script src="/themes/client/js/app.js.js.php"></script>
    <script src="/js/script1.js"></script>
</body>

</html>