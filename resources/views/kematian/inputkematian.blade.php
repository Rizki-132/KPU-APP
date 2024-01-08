@extends('admin.dashboard')
@section('title', 'Masukan Data Kematian')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('kematian.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">FORM BIODATA</h5>
                            <!-- General Form Elements -->
                            <div class="row mb-5">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row mb-5">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat">
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
                                            value="Laki - laki" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Laki - laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="gridRadios1" name="gender"
                                            value="Perempuan" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                                @error('gender')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </fieldset>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Kirim Data</button>
                                </div>
                            </div>
                        </div>
                </form><!-- End General Form Elements -->
            </div>
        </div>
    </section>
@endsection
