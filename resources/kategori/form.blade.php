@extends('admin.index')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Kategori</h5>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Terjadi Kesalahan saat input data<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="row g-3" method="POST" action="{{ route('kategori.store')}}">
                        @csrf
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" value="{{ old('nama_kategori') }}">
                            @error('nama_kategori')
                                <p class="text text-danger mb-0">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
