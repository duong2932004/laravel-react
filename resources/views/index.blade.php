<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{$title ?? 'Trang chủ'}}
    </title>
    <link href="{{asset('storage/img/favicon.png')}}" rel="icon">
    <link href="{{asset('storage/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    {{--    font--}}
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    @vite([
                // template
                'resources/assets/css/style.css',
                //vendor
                'resources/assets/vendor/bootstrap/css/bootstrap.min.css',
                'resources/assets/vendor/bootstrap-icons/bootstrap-icons.css',
                'resources/assets/vendor/boxicons/css/boxicons.min.css',
                'resources/assets/vendor/quill/quill.snow.css',
                'resources/assets/vendor/quill/quill.bubble.css',
                'resources/assets/vendor/remixicon/remixicon.css',
                'resources/assets/vendor/simple-datatables/style.css',
            ])
</head>
<body>
    @yield('container')
    @vite([
                //js
                'resources/assets/vendor/apexcharts/apexcharts.min.js',
                'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
                'resources/assets/vendor/chart.js/chart.umd.js',
                'resources/assets/vendor/echarts/echarts.min.js',
                'resources/assets/vendor/quill/quill.js',
                'resources/assets/vendor/simple-datatables/simple-datatables.js',
                'resources/assets/vendor/tinymce/tinymce.min.js',
                'resources/assets/vendor/php-email-form/validate.js',
            ])
</body>
</html>
