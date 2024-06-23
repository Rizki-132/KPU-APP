@extends('admin.dashboard')
@section('title', 'Masukan Data Kematian')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('admin2.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">FORM DATA MENINGGAL</h5>
                            <!-- General Form Elements -->
                            <div class="row mb-5">
                                <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row mb-5">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat" value="{{ $data->alamat }}">
                                </div>
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <fieldset class="row mb-5">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="gridRadios1" name="gender"
                                            value="Laki - laki" {{ $data->gender == 'Laki - laki' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="gridRadios1">
                                            Laki - laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="gridRadios1" name="gender"
                                            value="Perempuan" {{ $data->gender == 'Perempuan' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="gridRadios1">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                                @error('gender')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </fieldset>
                            <div class="row mb-5">
                                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Kematian</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_kematian"
                                        value="{{ $data->tgl_kematian }}">
                                </div>
                                @error('tgl_kematian')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="inputDokumen" class="col-sm-2 col-form-label">Akta Kematian
                                    <br><small>fromat (
                                        PDF
                                        )</small></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="dokumen"
                                        value="{{ $data->dokumen }}">
                                </div>
                                <div class="col-sm-10">
                                    <iframe src="{{ asset('storage/' . $data->dokumen) }}" frameborder="0" height="500"
                                        width="900"></iframe>
                                </div>
                                @error('dokumen')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 d-flex">
                                <button type="submit" class="btn btn-primary">Kirim Data</button>
                                <a type="submit" href="{{ route('admin2.index') }}"
                                    class="btn btn-warning mx-1">Kembali</a>
                            </div>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->
            </div>
        </div>
    </section>
@endsection
