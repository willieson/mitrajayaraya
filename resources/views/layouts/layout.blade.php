<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TokoSoul - {{ $title }}</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="/assets/js/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>
    <!-- Header / Navbar -->
    @include('components.nav-bar')

    <!-- Konten utama halaman -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('components.footer')
</body>

@yield('jquery')

</html>
