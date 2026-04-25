<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Tenki No Ko')</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

@if(isset($username) && $username != 'tamu')
    <x-navbar :username="$username" />
    <x-nav-m :username="$username" />
@endif

<div class="mx-auto">
    @yield('content')
</div>

@if(isset($username) && $username != 'tamu')
    @include('components.footer')
@endif

</body>
</html>
