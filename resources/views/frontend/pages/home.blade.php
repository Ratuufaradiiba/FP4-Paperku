@extends('frontend.layouts.app')
@section('content')
    <div class="banner text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <h1 class="mb-5">What Would You <br> Like To Read Today?</h1>

                    <ul class="list-inline widget-list-inline">
                        @foreach ($kategori as $row)
                            <li class="list-inline-item"><a
                                    href="{{ route('filter_kategori', $row->id) }}">{{ $row->nama_kategori }}</a></li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>


        <svg class="banner-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
                stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>

        <svg class="banner-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
                <path class="path"
                    d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
                <path
                    d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
                    stroke="#040306" stroke-miterlimit="10" />
            </g>
            <defs>
                <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                </filter>
            </defs>
        </svg>


        <svg class="banner-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
                stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>


        <svg class="banner-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1"
                stroke-width="2" />
        </svg>
    </div>
    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8  mb-5 mb-lg-0">
                    <h2 class="h5 section-title">Recent Post</h2>
                    @foreach ($jurnal as $row)
                        <article class="card mb-4">
                            <div class="post-slider">
                                @empty($row->foto)
                                    <img src="{{ url('assets\img\no-image-found.png') }}" alt="Profile"
                                        class="avatar avatar-sm me-3">
                                @else
                                    <img src="{{ asset($row->foto) }}" alt="Profile" class="avatar avatar-sm me-3">
                                @endempty
                            </div>
                            <div class="card-body">
                                <h3 class="mb-3"><a class="post-title"
                                        href="{{ route('postdetail', $row->id) }}">{{ $row->judul }}</a></h3>
                                <ul class="card-meta list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route('authordetail', $row->profile->id) }}" class="card-meta-author">
                                            @empty($row->profile->foto)
                                                <img src="{{ url('assets\img\no-image-found.png') }}" alt="Profile"
                                                    class="avatar avatar-sm me-3">
                                            @else
                                                <img src="{{ asset($row->profile->foto) }}" alt="Profile"
                                                    class="avatar avatar-sm me-3">
                                            @endempty
                                            <span>{{ $row->profile->nama }}</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>{{ $row->tahun }}
                                    </li>
                                    <li class="list-inline-item">
                                        <ul class="card-meta-tag list-inline">
                                            <li class="list-inline-item"><a
                                                    href="{{ route('filter_kategori', $row->kategori->id) }}">{{ $row->kategori->nama_kategori }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <p>{{ $row->ket }}</p>
                                <a href="{{ url('postdetail', $row->id) }}" class="btn btn-outline-primary">Read More</a>
                            </div>
                        </article>
                    @endforeach



                </div>
                <aside class="col-lg-4 @@sidebar">
                    <!-- Search -->
                    <div class="widget">
                        <h4 class="widget-title"><span>Search</span></h4>
                        <form action="{{ route('jurnal.search') }}" class="widget-search">
                            <input class="mb-3" id="search-query" name="keyword" type="search"
                                placeholder="Search for journal or paper..">
                            <i class="ti-search"></i>
                            <button type="submit" class="btn btn-primary btn-block">Search</button>
                        </form>
                    </div>

                    <!-- about me -->
                    <div class="widget widget-about">
                        <h4 class="widget-title">Hi, I am Rizky!</h4>
                        <img class="img-fluid" src="{{ asset('landingpage/images/author.jpg') }}" alt="Themefisher">
                        <br>
                        <p>Saya sedang mengikuti Studi Independen Akademi Fullstack Web Developer di NF Computer
                            yang disediakan dari Kampus Merdeka.</p>
                        <ul class="list-inline social-icons mb-3">

                            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>

                            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>

                            <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>

                            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>

                            <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>

                        </ul>
                        <a href="about-me.html" class="btn btn-primary mb-2">My profile</a>
                    </div>

                    <!-- Promotion -->
                    <div class="promotion">
                        <img src="{{ asset('landingpage/images/promotion.jpg') }}" class="img-fluid w-100">
                        <div class="promotion-content">
                            <h5 class="text-white mb-3">Discover research</h5>
                            <p class="text-white mb-4">Share your work or research by uploading it to this website</p>
                            <a href="{{ route('upload') }}" class="btn btn-primary">Upload Now!</a>
                        </div>
                    </div>

                    <!-- authors -->
                    <div class="widget widget-author">
                        <h4 class="widget-title">Authors</h4>
                        @foreach ($profile as $row)
                            <div class="media align-items-center">
                                <div class="mr-3">
                                    @empty($row->foto)
                                        <img src="{{ url('assets\img\no-image-found.png') }}" alt="Profile"
                                            class="avatar avatar-sm me-3">
                                    @else
                                        <img src="{{ asset($row->foto) }}" alt="Profile" class="avatar avatar-sm me-3">
                                    @endempty
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-1"><a class="post-title"
                                            href="{{ url('authordetail', $row->id) }}">{{ $row->nama }}</a>
                                    </h5>
                                    <span>{{ $row->username }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Search -->

                    <!-- categories -->
                    <div class="widget widget-categories">
                        <h4 class="widget-title"><span>Categories</span></h4>
                        <ul class="list-unstyled widget-list">
                            @foreach ($data as $row)
                                <li><a href="{{ route('filter_kategori', $row->idKategori) }}"
                                        class="d-flex">{{ $row->nama_kategori }}<small
                                            class="ml-auto">{{ $row->jml_kategori }}</small></a>
                                </li>
                            @endforeach
                        </ul>
                    </div><!-- tags -->
                    <!-- recent post -->
                    <div class="widget">
                        <h4 class="widget-title">Recent Post</h4>

                        <!-- post-item -->
                        @foreach ($jurnalkanan as $row)
                            <article class="widget-card">
                                <div class="d-flex">
                                    @empty($row->foto)
                                        <img src="{{ url('assets\img\no-image-found.png') }}" alt="Profile"
                                            class="card-img-sm">
                                    @else
                                        <img src="{{ asset($row->foto) }}" alt="Profile" class="card-img-sm">
                                    @endempty
                                    <div class="ml-3">
                                        <h5><a class="post-title"
                                                href="{{ route('postdetail', $row->id) }}">{{ $row->judul }}</a></h5>
                                        <ul class="card-meta list-inline mb-0">
                                            <li class="list-inline-item mb-0">
                                                <i class="ti-calendar"></i>{{ $row->tahun }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <!-- Social -->
                    <div class="widget">
                        <h4 class="widget-title"><span>Social Links</span></h4>
                        <ul class="list-inline widget-social">
                            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
