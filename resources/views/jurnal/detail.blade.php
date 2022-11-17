@extends('admin.index')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @empty($row->foto)
                    <img src="{{ url('assets\img\no-image-found.png') }}" alt="Profile"
                        class="avatar avatar-xxl position-relative">
                    @else
                    <img src="{{ asset($row->foto)}}" alt="Profile" class="avatar avatar-xxl position-relative">
                    @endempty
                    <br>
                    <h2>{{ $row->profile->nama }}</h2>
                    <h3>{{$row->profile->username}}</h3>
                    <div class=" social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12 col-xl-8">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">{{ $row->judul }}</h6>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="javascript:;">
                                <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Edit Profile"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <p class="text-sm">{{ $row->isi }}.
                    </p>
                    <hr class="horizontal gray-light my-4">
                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nama
                                Author:</strong>
                            &nbsp; {{ $row->profile->nama }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Tahun
                                Terbit:</strong>
                            &nbsp; {{$row->tahun}}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Keterangan:</strong>
                            &nbsp; {{ $row->ket }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Kategori:</strong>
                            &nbsp; {{ $row->kategori->nama_kategori }}</li>
                        <li class="list-group-item border-0 ps-0 pb-0">
                            <strong class="text-dark text-sm">Social:</strong> &nbsp;
                            <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                <i class="fab fa-facebook fa-lg"></i>
                            </a>
                            <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                <i class="fab fa-twitter fa-lg"></i>
                            </a>
                            <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection