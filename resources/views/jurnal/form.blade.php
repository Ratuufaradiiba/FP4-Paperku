@extends('admin.index')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Jurnal</h5>
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
                        <form class="row g-3" method="POST" action="{{ route('jurnal.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-6">
                                <label for="inputNanme4" class="form-label">Masukan Judul</label>
                                <input type="text" class="form-control" name="judul" value="{{ old('judul') }}">
                                @error('judul')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inputState" class="form-label">Kategori</label>
                                <select id="inputState" class="form-select" name="id_kategori">
                                    <option selected>Pilih Kategori</option>
                                    @foreach ($kategori as $row)
                                        <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('id_kategori')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inputNanme4" class="form-label">Penulis</label>
                                <select id="inputState" class="form-select" name="id_profile">
                                    <option selected>Pilih Penulis</option>
                                    @foreach ($penulis as $row)
                                        <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                    @endforeach
                                </select>
                                @error('penulis')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inputNanme4" class="form-label">Masukan Tahun Terbit</label>
                                <input type="number" class="form-control" name="tahun" value="{{ old('tahun') }}">
                                @error('tahun')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inputNanme4" class="form-label">Masukan Foto</label>
                                <input type="file" class="form-control" name="foto" accept=".png,.jpg,.jpeg">
                                @error('foto')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inputNanme4" class="form-label">Masukan Keterangan</label>
                                <input type="text" class="form-control" name="ket" value="{{ old('ket') }}">
                                @error('ket')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Masukan Isi Jurnal</label>
                                <input type="text" class="form-control" name="isi" value="{{ old('isi') }}">
                                @error('isi')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a class="btn btn-info" href="{{ route('jurnal.index') }}">Kembali</a>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
