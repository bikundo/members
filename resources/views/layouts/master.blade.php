<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css"
          integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<style>
    .navbar-light .navbar-nav .nav-link {
        color: black;
        font-weight: bold;
        margin-bottom: 4px;
    }

    .navbar-light {
        margin-top: 40px;
    }

    .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
        color: red;
        border-bottom: 1px solid red;
        margin-bottom: 3px;
    }

    .btn {
        text-transform: uppercase;
    }
</style>
<nav class="navbar navbar-light">
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
        &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
        <a class="navbar-brand" href="#">Members Area</a>
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route('members.create') !!}">Member registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! url('members/frontend') !!}">View Members</a>
            </li>
            @if(auth()->check())
                @if(auth()->user()->role == 'admin')
                    <li class="nav-item ">
                        <a class="nav-link" href="{!! url('members') !!}">manage members</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('auth/logout') !!}">logout</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
@yield('content')

        <!-- jQuery first, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"
        integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7"
        crossorigin="anonymous"></script>
</body>
</html>