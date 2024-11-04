<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand  d-flex align-items-center" href="/"><img src="/assets/img/logo.png"
                width="200" /></a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/admin">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Product Manager' ? 'active' : '' }}" href="/products">Product
                        Manager</a>
                </li>
                <li class="nav-item">
                    <form action="{{ url('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button data-mdb-button-init data-mdb-ripple-init class="nav-link"
                            type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>

    </div>
</nav>
