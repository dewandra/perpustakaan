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
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <!-- Page content-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        
        @include('admin.content')
        <!-- Page content end-->
      <!-- Footer-->
      @include('admin.footer')
      <!-- Footer end-->
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>