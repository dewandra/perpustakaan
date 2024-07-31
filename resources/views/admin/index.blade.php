<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    @include('admin.css')
  </head>
  <body>
    <!-- Header -->
    @include('admin.header')
    <!-- Header end -->
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.navbar')
      <!-- Sidebar Navigation end-->
      <!-- Page content-->
      @include('admin.content')
      <!-- Page content end-->
    </div>
    <!-- JavaScript files-->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{url('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{url('js/charts-home.js')}}"></script>
    <script src="{{url('js/front.js')}}"></script>
  </body>
</html>