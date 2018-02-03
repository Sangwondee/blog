<!DOCTYPE html>
<html lang="en">

  <head>
    {{-- Head Section  --}}
    @include('user/layouts/head')
  </head>

  <body>
    {{-- Header Section --}}
    @include('user/layouts/header')

    {{-- Content Section --}}
    @section('main-content')
    @show

    {{-- Footer section     --}}
    @include('user/layouts/footer')

  </body>

</html>
