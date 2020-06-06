<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('admin/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>@yield('title')</title>
  @include('layouts.admin.layouts.css')
</head>

<body class="">
  <div class="wrapper ">
    @include('layouts.admin.layouts.sidebar')
    
    <div class="main-panel">
      <!-- Navbar -->

     @include('layouts.admin.layouts.header')
      <!-- End Navbar -->
      <div class="content">
        @yield('content')
      </div>
     @include('layouts.admin.layouts.footer') 
    </div>
  </div>
  <!--   Core JS Files   -->
@include('layouts.admin.layouts.js')
@yield('js')
</body>

</html>
