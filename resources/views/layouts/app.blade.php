<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    @vite(['resources/js/app.js'])

    <meta name="description" content="Видеокурс по изучению принципов программирования">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/./images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/./images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/./images/favicon-16x16.png">
    <link rel="mask-icon" href="/./images/safari-pinned-tab.svg" color="#1E1F43">
    <meta name="msapplication-TileColor" content="#1E1F43">
    <meta name="theme-color" content="#1E1F43">

</head>
<body x-data="{ 'showTaskUploadModal': false, 'showTaskEditModal': false }" x-cloak>

@include('parts/header')

@yield('content')

@include('parts/footer')

@include('../parts/mobile-menu')

@include('../parts/modals')


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>
</html>
