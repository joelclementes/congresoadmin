<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    @include('layouts.styles')

</head>
<body>

  <!-- @include('layouts.navbar') -->

    <div class="container-fluid">
      @yield('content')
    </div>


  <!-- <footer class="container-fluid">Congreso Admin</footer> -->
  @include('layouts.scripts')

  @yield('scripts')

</body>
</html>