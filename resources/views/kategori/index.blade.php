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
                <a href="{{ route('kategori.create') }}"
                    class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                          Tambah</a>
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Kategori Tabel</h6>
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
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no= 1;
                                    @endphp
                                    @foreach ($kategori as $row )
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ $no++ }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">{{ $row->nama_kategori}}</p>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
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
</main>@endsection