<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Promodel.uz </title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="icon" href="{{ asset('front/img/promodel_icon.svg')}}" type="image/x-icon">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href={{asset('admin/fontawesome-free/css/all.min.css') }}>
<!-- Theme style -->
<link rel="stylesheet" href={{asset('admin/css/adminlte.min.css') }}>
<!-- summernote -->
<link rel="stylesheet" href={{asset('admin/summernote/summernote-bs4.min.css') }}>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <a href="/">
        <img class="ml-5" src={{ asset('front/img/promodel.svg') }} alt="logo" width="100px">
    </a>
    <!-- Left navbar links -->
    <ul class="navbar-nav ml-5 pl-5">
        <li class="nav-item d-none d-sm-inline-block ml-3">
            <a href="{{ route('blogs.index') }}" class="nav-link">Blogs</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('posts.index') }}" class="nav-link">Courses</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('madels.index') }}" class="nav-link">Models</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('categories.index') }}" class="nav-link">Categories</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/orders" class="nav-link">Orders</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/mails" class="nav-link">Mails</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            @if (Auth::check())
                <a href="/logout" class="nav-link">Logout</a>
            @endif
        </li>
    </ul>
</nav>
<!-- /.navbar -->
</div>

<div class="mx-5">
    @yield('content')
</div>

<!-- Tempusdominus Bootstrap 4 -->
<script src={{asset('admin/js/tempusdominus-bootstrap-4.min.js') }}></script>
<!-- Summernote -->
<script src={{asset('admin/summernote/summernote-bs4.min.js') }}></script>
<!-- AdminLTE App -->
<script src={{asset('admin/js/adminlte.min.js') }}></script>

@yield('script')

</body>
</html>
