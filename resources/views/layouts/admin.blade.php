<!-- resources/views/layouts/base.blade.php -->
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- CSS Bootstrap -->
    @include('admin.resource.css')
</head>
<body>
    <!-- Header -->
    @include('admin.header')
    <!-- End Header -->
    
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation -->
        @include('admin.sidebar')
        <!-- End Sidebar Navigation -->

        <!-- Konten Halaman -->
        <div class="page-content">
            @yield('page-header') <!-- Untuk header halaman spesifik -->
            @yield('content') <!-- Untuk konten halaman spesifik -->
        </div>
        <!-- End Konten Halaman -->
    </div>

    <!-- Footer -->
    @include('admin.footer')
    <!-- End Footer -->

    <!-- JavaScript -->
    @include('admin.resource.js')
</body>
</html>
