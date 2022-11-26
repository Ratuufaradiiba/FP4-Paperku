<script src="https://kit.fontawesome.com/79c702c45e.js" crossorigin="anonymous"></script>
<header class="navigation fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-white">
            <a class="navbar-brand order-1" href="{{ route('home') }}">
                <img class="img-fluid" width="150px" src="{{ asset('landingpage/images/1.png') }}" alt="Paperku">
            </a>
            <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Pages <i class="ti-angle-down ml-1"></i>
                        </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="#">Author</a>

                            <a class="dropdown-item" href="#">Author Single</a>

                            <a class="dropdown-item" href="#">Post Details</a>

                            <a class="dropdown-item" href="#">Tags</a>

                            <a class="dropdown-item" href="#">Search Result</a>

                            <a class="dropdown-item" href="#">Search Not Found</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/upload') }}"><i
                                class="fa-solid fa-arrow-up"></i>&nbsp;&nbsp;Upload</a>
                    </li>


                    <li class="nav-item">

                    </li>
                </ul>
            </div>

            <div class="order-2 order-lg-3 d-flex align-items-center">
                <!-- search -->
                <form class="search-bar">
                    <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                </form>


                @auth
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">{{ Auth::user()->name }} <i class="ti-angle-down ml-1"></i>
                            </a>
                            <div class="dropdown-menu">
                                @if (auth()->user()->role === 'user')
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <div class="container">
                                            <div class="vertical-center">
                                                <button class="btn btn-danger">Profile</button>
                                            </div>
                                            <div class="vertical-center">
                                                <button class="btn btn-danger">Logout</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                @else
                                    <a class="nav-link text-success" href="{{ url('/admin') }}"><b>
                                            Dashboard</b></a>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf

                                        <div class="container">
                                            <div class="vertical-center">
                                                <button class="btn btn-danger">Logout</button>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </li>
                    </ul>
                @else
                    <a class="nav-link text-success" href="{{ url('/login') }}"><b><i class="fa-regular fa-user"></i>
                            Login</b></a>
                @endauth

                <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                    data-target="#navigation">
                    <i class="ti-menu"></i>
                </button>
            </div>

        </nav>
    </div>
</header>
