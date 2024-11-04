<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mitra Jaya Raya - {{ $title }}</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="/assets/fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="/assets/fontawesome/css/brands.css" rel="stylesheet" />
    <link href="/assets/fontawesome/css/solid.css" rel="stylesheet" />
    <script src="/assets/js/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        .floating {
            position: fixed;
            /* Agar gambar tetap di posisi yang ditentukan saat scroll */
            bottom: 20px;
            /* Jarak dari bawah */
            right: 20px;
            /* Jarak dari kanan */
            font-size: 3rem;
            z-index: 2;
            /* Menjaga rasio gambar */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0);
            /* Efek bayangan */
            color: blue;
            cursor: pointer;
            transition: transform 0.3s;
            /* Animasi saat hover */
        }

        /* Efek hover untuk gambar */
        .floating:hover {
            transform: scale(1.1);
            /* Memperbesar gambar saat hover */
        }
    </style>
</head>

<body>

    {{-- <!-- Floating Cart -->
    <div class="floating"><span style="vertical-align: super;color:red;" id="count-cart">0</span><i
            class="fa-solid fa-cart-arrow-down"></i></div> --}}

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
