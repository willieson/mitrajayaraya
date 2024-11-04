@extends('layouts.layout')
@section('content')
    <div class="mt-4 row row-cols-1 row-cols-lg-4 g-4">
        <!-- Kolom dengan lebar 12 pada layar kecil (sm), 6 pada layar medium (md), dan 4 pada layar besar (lg) -->
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <!-- Carousel -->
                <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/mdf/1.webp" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/mdf/2.jpg" class="d-block w-100" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/mdf/3.jpg" class="d-block w-100" alt="Image 3">
                        </div>
                    </div>
                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title">MDF (Medium Density Fibreboard)</h5>
                    <table class="card-text mb-2">
                        <tr>
                            <td>Ketebalan</td>
                            <td>: 1mm s/d 30mm</td>
                        </tr>

                        <tr>
                            <td>Ukuran</td>
                            <td>: 1.22mm x 2.44mm</td>
                        </tr>

                        <tr>
                            <td>Material</td>
                            <td>: Rubber dan MLH</td>
                        </tr>

                        <tr>
                            <td>Glue</td>
                            <td>: E2, E1, E0 dan P2</td>
                        </tr>
                    </table>
                    <div class="text-end">
                        <button class="btn btn-primary" onclick="addCart()"><i class="fa-solid fa-cart-arrow-down">
                                Cart</i></button>

                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-arrow-down"> Cart</i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-arrow-down"> Cart</i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-arrow-down"> Cart</i></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-arrow-down">
                            Cart</i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-arrow-down">
                            Cart</i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-arrow-down">
                            Cart</i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-arrow-down">
                            Cart</i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('jquery')
@endsection
