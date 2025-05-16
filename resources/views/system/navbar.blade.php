<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img class="navbar-brand header-logo" src="{{Storage::url('solo-logo.png') }}" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home.home2') }}">Home</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Crea Task</a>
                </li> --}}
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">

                            {{ Auth::user()->name }}

                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                {{-- logout --}}
                                @auth
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="dropdown-item text-danger"><i
                                                class="text-danger fa-solid fa-arrow-right-from-bracket px-2 fs-6"></i>
                                            Logout</button>
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </li>
                @endauth
            </ul>
            @guest
                <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
            @endguest
        </div>
    </div>
</nav>
