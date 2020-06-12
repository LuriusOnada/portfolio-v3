<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_desc')">

    <link rel="icon" href="" sizes="">
    <link rel="apple-touch-icon" href="">

    <link rel="stylesheet" href="{{ asset('/css/general.css') }}">
    <script type="text/javascript" src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/general.js') }}"></script>
    @yield('add_css')

</head>
<body>
    @include('_include.navbar')

    @yield('content')

    @include('_include.footer')
</body>
</html>