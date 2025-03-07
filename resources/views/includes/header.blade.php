<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">E-Com</a>
        <button class="navbar-toggler" type="button" data-bs- toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria- label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products')}}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories')}}">Categories</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.index') }}">
                            Cart 
                            <span class="badge bg-secondary">
                                {{ App\Models\Cart::where('user_id', auth()->id())->count() }}
                            </span>
                        </a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>