<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('./css/bootstrap.css')}}">
  </head>
  <body>
      @include('layout.header')
      <hr>
      @section('content') @show
      <hr>
      @include('layout.footer')
  </body>
</html>