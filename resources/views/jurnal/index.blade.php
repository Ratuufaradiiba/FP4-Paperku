@extends('admin.index')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success shadow-sm">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Jurnal Tabel</h6>
                            <br>
                            <a href="{{ route('jurnal.create') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                Tambah</a>
                            <a href="{{ url('jurnal-excel') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                XLS</a>
                            <a href="{{ url('jurnal-pdf') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" i
                                class="bi bi-filetype-pdf" title="Export To PDF">
                                </i>PDF</a>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Author</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Judul dan Tahun Terbit</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Keterangan</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Kategori</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jurnal as $row)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            @empty($row->foto)
                                                                <img src="{{ url('assets\img\no-image-found.png') }}"
                                                                    alt="Profile" class="avatar avatar-sm me-3">
                                                            @else
                                                                <img src="{{ asset($row->foto) }}" alt="Profile"
                                                                    class="avatar avatar-sm me-3">
                                                            @endempty
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $row->profile->nama }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 50px; white-space:normal !important">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $row->judul }}</p>
                                                    <br>
                                                    <p class="text-xs text-secondary mb-0">{{ $row->tahun }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary">{{ $row->ket }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary">{{ $row->kategori->nama_kategori }}
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <form method="POST" action="{{ route('jurnal.destroy', $row->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('jurnal.show', $row->id) }}"
                                                            class=" btn  btn-primary shadow-sm  text-xs"
                                                            data-toggle="tooltip" data-original-title="Edit user">
                                                            Detail
                                                        </a>
                                                        &nbsp;
                                                        <a href="{{ route('jurnal.edit', $row->id) }}"
                                                            class="btn btn-info shadow-sm text-xs" data-toggle="tooltip"
                                                            data-original-title="Edit user">
                                                            Edit
                                                        </a>
                                                        &nbsp;
                                                        <button type="submit" class="btn btn-danger shadow-sm text-xs"
                                                            onclick="return confirm('Anda yakin ingin hapus jurnal ini?')"
                                                            data-toggle="tooltip" data-original-title="Edit user">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
