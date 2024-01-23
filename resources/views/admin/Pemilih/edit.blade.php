@extends('admin.dashboard')
@section('title', 'Edit Data')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">FORM UBAH DATA</h5>
                            <!-- General Form Elements -->
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nomor KK <br><small><i>(Nomor Kartu
                                            Keluarga)</i></small></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_kk" value="{{ $data->no_kk }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">NIK <br><small><i>(Nomor Induk
                                            Keluarga)</i></small></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik" value="{{ $data->nik }}">
                                </div>
                            </div>
                            <div class="row mb-5">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
                                </div>
                            </div>
                            <div class="row mb-5">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat" value="{{ $data->alamat }}">
                                </div>
                            </div>
                            <fieldset class="row mb-5">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gridRadios1"
                                            value="Laki - laki" {{ $data->gender == 'Laki - laki' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="gridRadios1">
                                            Laki - laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gridRadios1"
                                            value="Perempuan" {{ $data->gender == 'Perempuan' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="gridRadios1">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-5">
                                <label class="col-sm-2 col-form-label">Keterangan<br><small><i>(Alasan Anda Mengisi form
                                            ini)</i></small></label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="keterangan">
                                        <option disabled>--- Pilih Keterangan ---</option>
                                        <option value="Tidak Terdaftar Di DPT" {{ $data->keterangan == 'Tidak Terdaftar Di DPT' ? 'selected' : '' }}>Tidak Terdaftar Di DPT</option>
                                        <option value="Ubah Status" {{ $data->keterangan == 'Ubah Status' ? 'selected' : '' }}>Ubah Status</option>
                                        <option value="Pindah Domisili" {{ $data->keterangan == 'Pindah Domisili' ? 'selected' : '' }}>Pindah Domisili</option>
                                        <option value="Ubah KK" {{ $data->keterangan == 'Ubah KK' ? 'selected' : '' }}>Ubah KK</option>
                                        <option value="Pemilih Baru" {{ $data->keterangan == 'Pemilih Baru' ? 'selected' : '' }}>Pemilih Baru</option>
                                    </select>
                                </div>
                                @error('keterangan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- End General Form Elements -->
                        </div>
                        <div class="col-lg-6">
                            <br><br>
                            <!-- General Form Elements -->
                            <div class="row mb-5">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tmp_lahir" value="{{ $data->tmp_lahir }}">
                                </div>
                            </div>
                            <div class="row mb-5">
                                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_lahir" value="{{ $data->tgl_lahir }}">
                                </div>
                            </div>
                            <fieldset class="row mb-5">
                                <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                            value="Belum Kawin" {{ $data->status == 'Belum Kawin' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="gridRadios1">
                                            Belum Menikah
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                            value="Sudah Kawin" {{ $data->status == 'Sudah Kawin' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="gridRadios1">
                                            Sudah Menikah
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                            value="Pernah Kawin"  {{ $data->status == 'Pernah Kawin' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="gridRadios1">
                                            Pernah Menikah
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Upload KTP <br><small>fromat
                                        (
                                        jpg, png, jpeg )</small></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="foto" value="{{ $data->foto }}">
                                    <br>
                                    <div class="card" style="width: 10rem;">
                                        <a href="{{ asset('storage/'. $data->foto) }}">
                                            <img src="{{ asset('storage/'. $data->foto) }}" class="card-img-top" alt="...">
                                        </a>
                                    </div>
                                </div>
                              
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Upload KK <br><small>fromat (
                                        PDF
                                        )</small></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="dokumen" value="{{ $data->dokumen }}">
                                    <br>
                                    <div class="col-sm-10">
                                        <a href="{{ asset('storage/'. $data->dokumen) }}">Lihat PDF</a>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 d-flex">
                                <button type="submit" class="btn btn-primary mx-1">Ubah Data</button>
                                <a type="submit" href="{{ route('admin.index') }}" class="btn btn-warning mx-1">Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- End General Form Elements -->
            </div>
        </div>
    </section>
@endsection
