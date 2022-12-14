@extends('frontend.layouts.app')
@section('content')
<div class="author">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                @empty($row->foto)
                <img src="{{ url('assets\img\no-image-found.png') }}" alt="Profile" class="author-image">
                @else
                <img src="{{ asset($row->foto) }}" alt="Profile" class="author-image">
                @endempty

            </div>
            <div class="col-md-8 col-lg-6 text-center text-md-left">
                <h3 class="mb-2">{{ Auth::user()->name }} </h2>
                    <strong class="mb-2 d-block">{{ Auth::user()->username }}</strong>
                    <div class="content">
                        <p>{{ Auth::user()->email }}</p>

                    </div>

                    <a class="post-count mb-1" href="#" data-toggle="modal" data-target="#exampleModal"><i class="ti-pencil-alt mr-2"></i><span class="text-primary"></span> Edit Profile</a>

            </div>
        </div>
    </div>

    <svg class="author-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306" stroke-miterlimit="10" />
        <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
        <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306" stroke-miterlimit="10" />
    </svg>


    <svg class="author-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_d)">
            <path class="path" d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
            <path d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z" stroke="#040306" stroke-miterlimit="10" />
        </g>
        <defs>
            <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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


    <svg class="author-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306" stroke-miterlimit="10" />
        <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
        <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306" stroke-miterlimit="10" />
    </svg>


    <svg class="author-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1" stroke-width="2" />
    </svg>
</div>

<section class="section-sm" id="post">

    <div class="container">

        <div class="row">
            <div class="col-lg-10 mx-auto h-100">
                <div class="row">
                    @foreach ($jurnal as $row)
                    <div class="col-lg-6">
                        <article class="card mb-4">

                            <div class="post-slider">
                                @empty($row->foto)
                                <img src="{{ url('assets\img\no-image-found.png') }}" alt="Profile" class="avatar avatar-sm me-3">
                                @else
                                <img src="{{ asset($row->foto) }}" alt="Profile" class="avatar avatar-sm me-3">
                                @endempty
                            </div>


                            <div class="card-body">
                                <h3 class="mb-3"><a class="post-title" href="{{ route('postdetail', $row->id) }}">{{ $row->judul }}</a></h3>
                                <ul class="card-meta list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ url('authordetail', $row->profile->id) }}" class="card-meta-author">
                                            @empty($row->profile->foto)
                                            <img src="{{ url('assets\img\no-image-found.png') }}" alt="Profile" class="avatar avatar-sm me-3">
                                            @else
                                            <img src="{{ asset($row->profile->foto) }}" alt="Profile" class="avatar avatar-sm me-3">
                                            @endempty
                                            <span>{{ $row->profile->nama }}</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>{{ $row->tahun }}
                                    </li>
                                    <li class="list-inline-item">
                                        <ul class="card-meta-tag list-inline">
                                            <li class="list-inline-item"><a href="{{ route('filter_kategori', $row->kategori->id) }}">{{ $row->kategori->nama_kategori }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <p>{{ $row->ket }}</p>
                                <a href="{{ url('postdetail', $row->id) }}" class="btn btn-outline-primary">Read
                                    More</a>
                                {{--<form method="POST" id="formDelete">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('jurnal.edit', $row->id) }}" class="btn btn-info shadow-sm text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Edit
                                    </a>
                                    &nbsp;
                                    <button type="button" class="btn btn-danger shadow-sm text-xs btnDelete" data-action="{{ route('jurnal.destroy', $row->id) }}" data-toggle="tooltip" data-original-title="Edit user">
                                        Hapus
                                    </button>
                                </form>--}}
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-50 card-plain border">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                        <a href="{{ url('/upload') }}">
                            <i class="fa fa-plus text-secondary mb-3"></i>
                            <h5 class=" text-secondary"> New project </h5>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('updateProfile') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="inputNanme4" class="form-label">Display Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name', auth()->user()->name) }}">
                        @error('name')
                        <p class="text text-danger mb-0">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputNanme4" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="{{ old('username', auth()->user()->username) }}">
                        @error('username')
                        <p class="text text-danger mb-0">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputNanme4" class="form-label">Email</label>
                        <input type="email" disabled class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}">
                        @error('email')
                        <p class="text text-danger mb-0">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputNanme4" class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" name="foto" accept=".png,.jpg,.jpeg">
                        @error('foto')
                        <p class="text text-danger mb-0">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End modal -->
@endsection