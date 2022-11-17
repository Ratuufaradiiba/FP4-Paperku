@extends('admin.index')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Author</h5>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Terjadi Kesalahan saat update data<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="row g-3" method="POST" action="{{ route('author.update', $profile->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="col-6">
                                <label for="inputNanme4" class="form-label">Masukan Nama Author</label>
                                <input type="text" class="form-control" name="nama"
                                    value="{{ old('nama', $profile->nama) }}">
                                @error('nama')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inputNanme4" class="form-label">Masukan Username</label>
                                <input type="text" class="form-control" name="username"
                                    value="{{ old('username', $profile->username) }}">
                                @error('username')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inputNanme4" class="form-label">Masukan E-mail</label>
                                <input type="email" class="form-control" name="email"
                                    value="{{ old('email', $profile->email) }}">
                                @error('email')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inputNanme4" class="form-label">Masukan Foto Baru</label>
                                <input type="file" class="form-control" name="foto" accept=".png,.jpg,.jpeg">
                                @error('foto')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-secondary">Batal</button>
                                <a class="btn btn-info" href="{{ route('author.index') }}">Kembali</a>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
