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
                        <strong>Whoops!</strong> Terjadi Kesalahan saat input data<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="row g-3" method="POST" action="{{ route('author.store')}}">
                        @csrf
                        <div class="col-6">
                            <label for="inputNanme4" class="form-label">Masukan Nama Author</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="col-6">
                            <label for="inputNanme4" class="form-label">Masukan Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="col-6">
                            <label for="inputNanme4" class="form-label">Masukan E-mail</label>
                            <input type="email" class="form-control" name="email">
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