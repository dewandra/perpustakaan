<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Perpusatakaan Online</title>

    @include('home.css')
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  @include('home.preloader')
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  @include('home.header')
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  @include('home.banner')
  <!-- ***** Main Banner Area End ***** -->
  
  <!-- ***** Categories Area Start ***** -->
  @include('home.categories')
  <!-- ***** Categories Area End ***** -->

  <!-- ***** Current market Start ***** -->
  @include('home.cm')
  <!-- ***** Current market End ***** -->
  
  <!-- ***** Footer Start ***** -->
  @include('home.footer')
  <!-- ***** Footer End ***** -->

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  @include('home.js')

  </body>
</html>