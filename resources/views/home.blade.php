@extends('layouts.layout')
@section('content')
    <div class="container text-center">
        <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-3">
            <!-- Kolom dengan lebar 12 pada layar kecil (sm), 6 pada layar medium (md), dan 4 pada layar besar (lg) -->
            <div class="col">
                <h1 id="test">Hello, jQuery Test!</h1>
            </div>
            <div class="col">Content 2</div>
            <div class="col">Content 3</div>
            <div class="col">Content 4</div>
        </div>
    </div>
    <div class="container" data-aos="flip-up" data-aos-anchor-placement="center-bottom" data-aos-duration="3000">
        <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum impedit tempore blanditiis aliquid, at debitis
            ad dolorum fugit quis beatae voluptate hic aut reprehenderit quibusdam, eius tenetur necessitatibus, officia
            officiis!</h1>
    </div>
    <div class="container">
        <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum impedit tempore blanditiis aliquid, at debitis
            ad dolorum fugit quis beatae voluptate hic aut reprehenderit quibusdam, eius tenetur necessitatibus, officia
            officiis!</h1>
    </div>

    <div class="container">
        <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum impedit tempore blanditiis aliquid, at debitis
            ad dolorum fugit quis beatae voluptate hic aut reprehenderit quibusdam, eius tenetur necessitatibus, officia
            officiis!</h1>
    </div>
    <div class="container">
        <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum impedit tempore blanditiis aliquid, at debitis
            ad dolorum fugit quis beatae voluptate hic aut reprehenderit quibusdam, eius tenetur necessitatibus, officia
            officiis!</h1>
    </div>
    <div class="container" data-aos="fade-up">
        <h1>FADE Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum impedit tempore blanditiis aliquid, at
            debitis
            ad dolorum fugit quis beatae voluptate hic aut reprehenderit quibusdam, eius tenetur necessitatibus, officia
            officiis!</h1>
    </div>
    <div class="container">
        <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum impedit tempore blanditiis aliquid, at debitis
            ad dolorum fugit quis beatae voluptate hic aut reprehenderit quibusdam, eius tenetur necessitatibus, officia
            officiis!</h1>
    </div>
    <div class="container">
        <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum impedit tempore blanditiis aliquid, at debitis
            ad dolorum fugit quis beatae voluptate hic aut reprehenderit quibusdam, eius tenetur necessitatibus, officia
            officiis!</h1>
    </div>
@endsection

@section('jquery')
    <script>
        $(document).ready(function() {
            // Mengubah teks ketika halaman dimuat
            $('#test').text('jQuery is Working!');
        });
    </script>
    <script>
        AOS.init();
    </script>
@endsection
