@extends('layouts.layout')
@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <button onclick="addCart()">add cart</button>
        <div class="row row-cols-1 row-cols-lg-4 g-4">
            <!-- Kolom dengan lebar 12 pada layar kecil (sm), 6 pada layar medium (md), dan 4 pada layar besar (lg) -->
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <div class="text-end"><a href="#" class="btn btn-primary"><i
                                    class="fa-solid fa-cart-arrow-down"> Cart</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-arrow-down"> Cart</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jquery')
    <script>
        // Inisialisasi AOS dengan pengaturan
        AOS.init({
            disable: 'mobile', // Nonaktifkan AOS di perangkat mobile
            startEvent: 'DOMContentLoaded', // Event untuk memulai AOS
            initClassName: 'aos-init', // Kelas yang diterapkan setelah inisialisasi
            animatedClassName: 'aos-animate', // Kelas yang diterapkan pada animasi
            once: false, // Apakah animasi hanya terjadi sekali
            duration: 3000, // Durasi animasi
            anchorPlacement: 'bottom-bottom', // Penempatan anchor
        });

        function addCart() {
            var asking = confirm("Add this product to cart?");
            var numberCart = document.getElementById('count-cart').innerText;
            if (asking) {

                numberCart++;
                document.getElementById('count-cart').innerHTML = numberCart;
            }

        }
    </script>
@endsection
