<style>
    .navigation {
        background: linear-gradient(to bottom, #fff, #FFE4B5);
        backdrop-blur: 500px;
        padding: 3rem !important;
        opacity: 0.8;
    }

    .transparent {
        text: #757575;
    }

    .primary-color {
        color: #f80;
    }

    .login-btn {
        border: none;
        width: 6rem;
    }

    .login-btn:hover {
        border: none;
    }

    .register-btn {
        border: 1px solid #f80;
        width: 6rem;
    }

    .register-btn:hover {
        background-color: #f80;
        color: white;
    }

    @media (max-width:641px) {
        .collapse {
            background: #FFE4B5;
            color: white !important;
            padding: 1rem 1rem 2rem 1rem;
        }
    }
</style>

<section class="navigation p-4 fixed-top">
    <nav class="container navbar navbar-expand-md transparent fixed-top pt-4" aria-label="Fourth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand primary-color hover" href="{{ url('/') }}">Hyline-FarmBreed</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
                aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link ms-2" aria-current="page" href="{{ url('/') }}">Farmer's
                            Cave</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2" href="{{ url('/order') }}">Book Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2">FAQs</a>
                    </li>
                </ul>
                <div class="ms-4">
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/home') }}" class="">Home</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn bg-primary-color text-white bg-hover btn-sm login-btn">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn register-btn btn-sm">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</section>
