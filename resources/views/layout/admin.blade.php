<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    @auth
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    @endauth
</head>
<body>

@auth
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
@endauth
<main id="main" class="main">
@yield('content')
</main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="{{ asset('admin/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('admin/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('admin/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('admin/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('admin/js/main.js') }}"></script>

</body>
</html>