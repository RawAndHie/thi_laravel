<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project Phòng Trọ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/awesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/toast/toastr.min.css">
    <script src="assets/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/myjs.js"></script>
    <link rel="stylesheet" href="assets/selectize.default.css" data-theme="default">
    <script src="assets/js/fileinput/fileinput.js" type="text/javascript"></script>
    <script src="assets/js/fileinput/vi.js" type="text/javascript"></script>
    <link rel="stylesheet" href="assets/fileinput.css">
    <script src="assets/pgwslider/pgwslider.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="assets/pgwslider/pgwslider.min.css">
    <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
        This must be loaded before fileinput.min.js -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/js/plugins/sortable.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/js/plugins/purify.min.js" type="text/javascript"></script> -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/bootstrap/bootstrap-select.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="/">Home  |</a></li>
                <li><a href="/">Best Home  |</a></li>
                <li><a href="/">Life style  |</a></li>
                <li><a href="/">About us  |</a></li>
                <li><a href="/">Contact us  |</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<script type="text/javascript" src="assets/toast/toastr.min.js"></script>
</body>
</html>
