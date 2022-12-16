@extends('frontend.layouts.app')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Edit Journal</h3> <br>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> An error occurred while inputting data<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="row g-3" method="POST" action="{{ route('apdet.jurnal', $jurnal->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="col-6">
                                <label for="inputNanme4" class="form-label">Title</label>
                                <input type="text" class="form-control" name="judul"
                                    value="{{ $jurnal->judul ?? old('judul') }}">
                                @error('judul')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inputState" class="form-label">Category</label>
                                <select id="inputState" class="form-control" name="id_kategori">
                                    <option selected>-- Choose Category --</option>
                                    @foreach ($kategori as $row)
                                        <option @if ($jurnal->id_kategori == $row->id) selected @endif
                                            value="{{ $row->id }}">{{ $row->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_kategori')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6"> <br>
                                <label for="inputNanme4" class="form-label">Year of Publication</label>
                                <input type="number" class="form-control" name="tahun"
                                    value="{{ $jurnal->tahun ?? old('tahun') }}">
                                @error('tahun')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div> <br>
                            <div class="col-6"> <br>
                                <label for="inputNanme4" class="form-label">Cover Photo</label>
                                <input type="file" class="form-control" name="foto" accept=".png,.jpg,.jpeg">
                                @error('foto')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6"> <br>
                                <label for="inputNanme4" class="form-label">File (PDF)</label>
                                <input type="file" class="form-control" name="file" accept=".pdf">
                                @error('file')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6"> <br>
                                <label for="inputNanme4" class="form-label">Description</label>
                                <input type="text" class="form-control" name="ket"
                                    value="{{ $jurnal->ket ?? old('ket') }}">
                                @error('ket')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12"> <br>
                                <label for="inputNanme4" class="form-label">Abstract</label>
                                <textarea class="form-control" name="isi" value="{{ old('isi') }}" rows="20" cols="20"></textarea>
                                @error('isi')
                                    <p class="text text-danger mb-0">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col text-center"> <br>
                                        <button type="submit" class="btn btn-primary">Update journal</button>
                                        <a class="btn btn-info" href="{{ route('home') }}">Back to home</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
