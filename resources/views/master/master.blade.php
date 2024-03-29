<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Laboratório Santa Sophia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("assets/img/favicon.png") }}" rel="icon">
  <link href="{{ asset("assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/css/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/remixicon/remixicon.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/simple-datatables/style.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet">

  @hasSection ('css')
    @yield("css")
  @endif

</head>
<body>
    @include("master.includes.header")

    @yield("content")
  <!-- ======= Footer ======= -->
    @include("master.includes.footer")
  <!-- Vendor JS Files -->
  <script src="{{ asset("assets/js/popper.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/apexcharts/apexcharts.min.js") }}"></script>
  <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/chart.js/chart.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/echarts/echarts.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/quill/quill.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/simple-datatables/simple-datatables.js") }}"></script>
  <script src="{{ asset("assets/vendor/tinymce/tinymce.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/php-email-form/validate.js") }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset("assets/js/main.js") }}"></script>

  @hasSection("js")
    @yield("js")
  @endif
  
</body>

</html>