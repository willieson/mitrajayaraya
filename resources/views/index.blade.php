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
            bottom: 20px;
            right: 20px;
            font-size: 3rem;
            z-index: 2;
            color: blue;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .floating:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand d-flex align-items-center" href="/"><img src="/assets/img/logo.png"
                    width="200" /></a>
        </div>
    </nav>

    <div class="container mt-4">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="mt-4 row row-cols-1 row-cols-lg-4 g-4">
            @foreach ($products as $product)
                <div class="col d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div id="imageCarousel{{ $product->id }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($product->images as $key => $image)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <img src="{{ asset($image->url) }}" class="d-block w-100"
                                            alt="{{ $product->name }}">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#imageCarousel{{ $product->id }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#imageCarousel{{ $product->id }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <h5>Rp {{ number_format($product->price, 0, ',', '.') }}</h5>
                            <p>{{ $product->description }}</p>
                            <div class="text-end">
                                <a href="https://wa.me/{{ env('WHATSAPP_PHONE') }}?text=Saya%20ingin%20Memesan%20Produk%20*{{ urlencode($product->name) }}*"
                                    class="btn btn-primary" target="_BLANK">
                                    <i class="fa-solid fa-cart-arrow-down"></i> Order
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('components.footer')
</body>

</html>
