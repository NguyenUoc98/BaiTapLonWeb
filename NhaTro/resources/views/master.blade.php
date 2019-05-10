<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
    <title>MOTEL CENTER - Thật dễ dàng tìm nhà trọ</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="image_src" type="image/png" href="/themes/client/img/phongtot_logo.png">
    <link rel="stylesheet" href="/themes/client/css/bootstrap.min.css">
    <link rel="stylesheet" href="/themes/client/css/fonts.css">
    <link rel="stylesheet" href="/themes/client/css/font-awesome.min.css">
    <link rel="stylesheet" href="/themes/client/css/component.css">
    <link rel="stylesheet" href="/themes/client/css/app.css">
    <link rel="stylesheet" href="/themes/client/css/jquery-gmaps-latlon-picker.css">
    <script src="/themes/client/js/jquery-1.11.3.min.js.js.php"></script>
    <script src="/themes/client/js/bootstrap.min.js.js.php"></script>
    <script src="/themes/client/js/multiple-select.js.js.php"></script>
    <script src="/themes/client/js/owl.carousel.min.js.js.php"></script>
    <script src="/themes/client/js/ion.rangeSlider.js.js.php"></script>
    <script src="/themes/client/js/jquery.maskMoney.js.js.php"></script>


    <!-- Load WysiBB JS and Theme -->

    <script src="/themes/client/js/wysibb/jquery.wysibb.min.js.js.php"></script>
    <link rel="stylesheet" href="/themes/client/js/wysibb/theme/default/wbbtheme.css" />
    <script type="text/javascript">
        var client_upload_img = 'dang-tin/upload';
    </script>
    <script src="/js/my_script.js"></script>

</head>

<body>
    <!-- Plugin facebook-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=840596706294794&autoLogAppEvents=1"></script>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', 'your-pixel-id-goes-here');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=your-pixel-id-goes-here&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
    @include('header')
    @include('header_nav')
    @yield('content')
    @include('footer')
    <script src="/themes/client/js/app.js.js.php"></script>
    <script src="/js/script1.js"></script>
    <!-- Tich hop cua so chat -->
    <script>
        (function(s, u, b, i, z) {
            u[i] = u[i] || function() {
                u[i].t = +new Date();
                (u[i].q = u[i].q || []).push(arguments);
            };
            z = s.createElement('script');
            var zz = s.getElementsByTagName('script')[0];
            z.async = 1;
            z.src = b;
            z.id = 'subiz-script';
            zz.parentNode.insertBefore(z, zz);
        })(document, window, 'https://widgetv4.subiz.com/static/js/app.js', 'subiz');
        subiz('setAccount', 'acqiivveqsblclewuomd');
    </script>
    <!---->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '2140970202861209',
                xfbml: true,
                version: 'v3.3'
            });
            FB.AppEvents.logPageView();
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>