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
                            <h6>Kategori Tabel</h6>
                            <br>
                            <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-primary shadow-sm">
                                Tambah</a>
                            <a href="{{ route('jurnal.kategoriPDF') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" title="Export To PDF">
                                <i class="bi bi-filetype-pdf"></i>PDF</a>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                No</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Kategori</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($kategori as $row)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-sm">{{ $no++ }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0">{{ $row->nama_kategori }}</p>
                                                </td>
                                                <td class="align-middle">
                                                    <form method="POST" id="formDelete">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('kategori.edit', $row->id) }}"
                                                            class="btn btn-info shadow-sm text-xs" data-toggle="tooltip"
                                                            data-original-title="Edit user">
                                                            Edit
                                                        </a>
                                                        &nbsp;
                                                        <button type="button"
                                                            class="btn btn-danger shadow-sm text-xs btnDelete"
                                                            data-action="{{ route('kategori.destroy', $row->id) }}"
                                                            data-toggle="tooltip" data-original-title="Edit user">
                                                            Hapus
                                                        </button>
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
