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
                            <h5>Kelola User</h5>
                            <br>
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
                                                Username</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Email</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelola_user as $row)
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
                                                            <h6 class="mb-0 text-sm">{{ $row->nama }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-xs font-weight-bold">{{ $row->username }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-xs font-weight-bold">{{ $row->email }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <form method="POST" id="formDelete">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('kelola_user.edit', $row->id) }}"
                                                            class="btn btn-info shadow-sm text-xs" data-toggle="tooltip"
                                                            data-original-title="Edit user">
                                                            Edit
                                                        </a>
                                                        &nbsp;
                                                        <button type="button"
                                                            class="btn btn-danger shadow-sm text-xs btnDelete"
                                                            data-action="{{ route('author.destroy', $row->id) }}"
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
