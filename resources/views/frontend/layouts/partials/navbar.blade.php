<header class="navigation fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-white">
            <a class="navbar-brand order-1" href="{{ route('home') }}">
                <img class="img-fluid" width="100px" src="{{ asset('landingpage/images/1.png') }}"
                    alt="Reader | Hugo Personal Blog Template">
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

                            <a class="dropdown-item" href="#">Advertise</a>

                            <a class="dropdown-item" href="#">Post Details</a>

                            <a class="dropdown-item" href="#">Post Elements</a>

                            <a class="dropdown-item" href="#">Tags</a>

                            <a class="dropdown-item" href="#">Search Result</a>

                            <a class="dropdown-item" href="#">Search Not Found</a>

                            <a class="dropdown-item" href="#">Privacy Policy</a>

                            <a class="dropdown-item" href="#">Terms Conditions</a>

                            <a class="dropdown-item" href="#">404 Page</a>

                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/upload')}}">Upload</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                </ul>
            </div>

            <div class="order-2 order-lg-3 d-flex align-items-center">

                <!-- search -->
                <form class="search-bar">
                    <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                </form>

                <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                    data-target="#navigation">
                    <i class="ti-menu"></i>
                </button>
            </div>

        </nav>
    </div>
</header>