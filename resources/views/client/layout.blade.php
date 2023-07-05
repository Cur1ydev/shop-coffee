<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Coffee</title>
    @include('client.components.css')
</head>
<body class="light-bg">
@include('client.components.header')
@include('client.components.aside')
@yield('content')
@include('client.components.footer')
@include('client.components.js')
</body>
</html>
