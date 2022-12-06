@extends('frontend.layouts.app')
@section('content')
    <div class="py-3"></div>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 mb-4">
                    <h1 class="h2 mb-4">Here is your search results for
                        <mark>{{ $keyword }}</mark>
                    </h1>
                </div>
                <div class="col-lg-10">
                    @foreach ($jurnal as $item)
                        <article class="card mb-4">
                            <div class="post-slider">
                                @empty($item->foto)
                                    <img src="{{ url('assets\img\no-image-found.png') }}" alt="Profile"
                                        class="avatar avatar-sm me-3">
                                @else
                                    <img src="{{ asset($item->foto) }}" alt="Profile" class="avatar avatar-sm me-3">
                                @endempty
                            </div>
                            <div class="card-body">
                                <h3 class="mb-3"><a class="post-title"
                                        href="{{ route('postdetail', $item->id) }}">{{ $item->judul }}</a></h3>
                                <ul class="card-meta list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ url('authordetail', $item->profile->id) }}" class="card-meta-author">
                                            @empty($item->profile->foto)
                                                <img src="{{ url('assets\img\no-image-found.png') }}" alt="Profile"
                                                    class="avatar avatar-sm me-3">
                                            @else
                                                <img src="{{ asset($item->profile->foto) }}" alt="Profile"
                                                    class="avatar avatar-sm me-3">
                                            @endempty
                                            <span>{{ $item->profile->nama }}</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>{{ $item->tahun }}
                                    </li>
                                    <li class="list-inline-item">
                                        <ul class="card-meta-tag list-inline">
                                            <li class="list-inline-item"><a
                                                    href="{{ route('filter_kategori', $item->kategori->id) }}">{{ $item->kategori->nama_kategori }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <p>{{ $item->ket }}</p>
                                <a href="{{ url('postdetail', $item->id) }}" class="btn btn-outline-primary">Read More</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
