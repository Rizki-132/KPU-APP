@extends('admin.dashboard')
@section('title', 'Masukan Data')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">FORM BIODATA</h5>
                            <!-- General Form Elements -->
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nomor KK <br><small><i>(Nomor Kartu Keluarga)</i></small></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_kk">
                                </div>
                                @error('no_kk')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">NIK <br><small><i>(Nomor Induk Keluarga)</i></small></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik">
                                </div>
                                @error('nik')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
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
                            <div class="row mb-5">
                                <label class="col-sm-2 col-form-label">Keterangan<br><small><i>(Alasan Anda Mengisi form
                                            ini)</i></small></label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="keterangan">
                                        <option selected>--- Pilih Keterangan ---</option>
                                        <option value="Tidak Terdaftar Di DPT">Tidak Terdaftar Di DPT</option>
                                        <option value="Ubah Status">Ubah Status</option>
                                        <option value="Pindah Domisili">Pindah Domisili</option>
                                        <option value="Ubah KK">Ubah KK</option>
                                        <option value="Pemilih Baru">Pemilih Baru</option>
                                    </select>
                                </div>
                                @error('keterangan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <br><br>
                            <!-- General Form Elements -->
                            <div class="row mb-5">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tmp_lahir">
                                </div>
                                @error('tmp_lahir')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row mb-5">
                                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_lahir">
                                </div>
                                @error('tgl_lahir')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <fieldset class="row mb-5">
                                <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="gridRadios1" name="status"
                                            value="Belum Kawin" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Belum Kawin
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                            value="Sudah Kawin" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Sudah Kawin
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                            value="Pernah Kawin" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Pernah Kawin
                                        </label>
                                    </div>
                                </div>
                                @error('status')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </fieldset>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Upload KTP <br><small>fromat
                                        (
                                        jpg, png, jpeg )</small></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="foto">
                                </div>
                                @error('foto')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Upload KK <br><small>fromat (
                                        PDF
                                        )</small></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="dokumen">
                                </div>
                                @error('dokumen')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 d-flex">
                                <button type="submit" class="btn btn-primary">Kirim Data</button>
                                <a type="submit" href="{{ route('admin.index') }}" class="btn btn-warning mx-1">Kembali</a>
                            </div>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->
            </div>
        </div>
    </section>
@endsection
