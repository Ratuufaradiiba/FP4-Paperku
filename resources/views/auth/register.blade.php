<!--
=========================================================
* Soft UI Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/12.png') }}">
    <link rel="icon" type="image/png" href="{{ url('assets/img/12.png') }}">
    <title>
        Register Paperku
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.6') }}" rel="stylesheet" />
</head>

<body class="">
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="{{ route('home') }}">
                Paperku
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                    {{-- <li class="nav-item">
                        <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                            href="{{ url('/backend') }}">
                            <i class="fa fa-chart-pie opacity-6  me-1"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{ url('/profile') }}">
                            <i class="fa fa-user opacity-6  me-1"></i>
                            Profile
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{ url('/register') }}">
                            <i class="fas fa-user-circle opacity-6  me-1"></i>
                            Sign Up
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{ url('/login') }}">
                            <i class="fas fa-key opacity-6  me-1"></i>
                            Sign In
                        </a>
                    </li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <main class="main-content  mt-0">
        <section class="min-vh-100 mb-8">
            <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
                style="background-image: url('assets/img/curved-images/curved14.jpg');">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 text-center mx-auto">
                            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                            <p class="text-lead text-white">Fill in this form to register your account. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                        <div class="card z-index-0">
                            <div class="card-body">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                @endif
                                <form role="form text-left" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Name" name="name"
                                            aria-label="Name" aria-describedby="email-addon">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Username"
                                            name="username" aria-label="Name" aria-describedby="email-addon">
                                    </div>
                                    <div class="mb-3">
                                       <select name="role" id="role" class="form-control">
                                        <option value="" selected disabled>--Plih Role--</option>
                                        <option value="user">User</option>
                                        <option value="penulis">Penulis</option>
                                       </select>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Password"
                                            name="password" aria-label="Password" aria-describedby="password-addon">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Confirm Password"
                                            name="password_confirmation" aria-label="Password"
                                            aria-describedby="password-addon">
                                    </div>
                                    <div class="form-check form-check-info text-left">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" checked>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree the <a href="javascript:;"
                                                class="text-dark font-weight-bolder">Terms and Conditions</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign
                                            up</button>
                                    </div>
                                    <p class="text-sm mt-3 mb-0">Already have an account? <a
                                            href="{{ url('/login') }}" class="text-dark font-weight-bolder">Sign
                                            in</a></p>
                                </form>
                                <div class="card-header text-center pt-4">
                                    <p>or register with</p>
                                </div>
                                <div class="row px-xl-5 px-sm-4 px-0">
                                    <div class="col-3 ms-auto px-1">
                                        <a class="btn btn-outline-light w-100" href="javascript:;">
                                            <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink32">
                                                <g id="Artboard" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="facebook-3" transform="translate(3.000000, 3.000000)"
                                                        fill-rule="nonzero">
                                                        <circle fill="#3C5A9A" cx="29.5091719" cy="29.4927506"
                                                            r="29.4882047"></circle>
                                                        <path
                                                            d="M39.0974944,9.05587273 L32.5651312,9.05587273 C28.6886088,9.05587273 24.3768224,10.6862851 24.3768224,16.3054653 C24.395747,18.2634019 24.3768224,20.1385313 24.3768224,22.2488655 L19.8922122,22.2488655 L19.8922122,29.3852113 L24.5156022,29.3852113 L24.5156022,49.9295284 L33.0113092,49.9295284 L33.0113092,29.2496356 L38.6187742,29.2496356 L39.1261316,22.2288395 L32.8649196,22.2288395 C32.8649196,22.2288395 32.8789377,19.1056932 32.8649196,18.1987181 C32.8649196,15.9781412 35.1755132,16.1053059 35.3144932,16.1053059 C36.4140178,16.1053059 38.5518876,16.1085101 39.1006986,16.1053059 L39.1006986,9.05587273 L39.0974944,9.05587273 L39.0974944,9.05587273 Z"
                                                            id="Path" fill="#FFFFFF"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="col-3 me-auto px-1">
                                        <a class="btn btn-outline-light w-100" href="javascript:;">
                                            <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Artboard" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="google-icon" transform="translate(3.000000, 2.000000)"
                                                        fill-rule="nonzero">
                                                        <path
                                                            d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267"
                                                            id="Path" fill="#4285F4"></path>
                                                        <path
                                                            d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667"
                                                            id="Path" fill="#34A853"></path>
                                                        <path
                                                            d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782"
                                                            id="Path" fill="#FBBC05"></path>
                                                        <path
                                                            d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769"
                                                            id="Path" fill="#EB4335"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
        <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
        <footer class="footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-4 mx-auto text-center">
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Company
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            About Us
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Team
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Products
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Blog
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Pricing
                        </a>
                    </div>
                    <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-dribbble"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-twitter"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-instagram"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-pinterest"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-github"></span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mx-auto text-center mt-1">
                        <p class="mb-0 text-secondary">
                            Created by: <br>
                            Kelompok 6.4 - MSIB NF Computer
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    </main>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="a{{ asset('ssets/js/soft-ui-dashboard.min.js?v=1.0.6') }}"></script>
</body>

</html>
