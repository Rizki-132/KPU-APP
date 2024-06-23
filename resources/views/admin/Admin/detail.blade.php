@extends('admin.dashboard')
@section('title', 'Detail data pemilih')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-body">
                <form method="#" action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">BIODATA</h5>
                            <!-- General Form Elements -->
                            <div class="row mb-3">
                                <h1 class="col-sm-2 col-form-label"><b>NOMOR KK</b></h1>

                                <div class="col-sm-10">
                                    <h6>: {{ $data->no_kk }}</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <h1 class="col-sm-2 col-form-label"><b>NIK</b></h1>
                                <div class="col-sm-10">
                                    <h6>: {{ $data->nik }}</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <h1 class="col-sm-2 col-form-label"><b>Nama</b></h1>
                                <div class="col-sm-10">
                                    <h6>: {{ $data->nama }}</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <h1 class="col-sm-2 col-form-label"><b>Alamat</b></h1>
                                <div class="col-sm-10">
                                    <h6>: {{ $data->alamat }}</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <h1 class="col-sm-2 col-form-label"><b>Jenis Kelamin</b></h1>
                                <div class="col-sm-10">
                                    <h6>: {{ $data->gender }}</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <h1 class="col-sm-2 col-form-label"><b>Keterangan</b></h1>
                                <div class="col-sm-10">
                                    <h6>: {{ $data->keterangan }}</h6>
                                </div>
                            </div>
                            <!-- End General Form Elements -->
                        </div>
                        <div class="col-lg-6">
                            <br><br>
                            <!-- General Form Elements -->
                            <div class="row mb-3">
                                <h1 class="col-sm-2 col-form-label"><b>Tempat Lahir</b></h1>
                                <div class="col-sm-10">
                                    <h6>: {{ $data->tmp_lahir }}</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <h1 class="col-sm-2 col-form-label"><b>Tanggal Lahir</b></h1>
                                <div class="col-sm-10">
                                    <h6>: {{ $data->tgl_lahir }}</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <h1 class="col-sm-2 col-form-label"><b>Status</b></h1>
                                <div class="col-sm-10">
                                    <h6>: {{ $data->status }}</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <h1 for="inputNumber" class="col-sm-2 col-form-label"><b>Kartu Tanda Penduduk</b></h1>
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('storage/' . $data->foto) }}" class="card-img-top" alt="...">
                                    <br>
                                    <a href="{{ asset('storage/' . $data->foto) }}" download>Download</a>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <h1 for="inputNumber" class="col-sm-2 col-form-label"><b>Kartu Keluarga</b></h1>
                                <div class="col-sm-10">
                                    <iframe src="{{ asset('storage/' . $data->dokumen) }}" frameborder="0" height="500"
                                        width="600"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 d-flex">
                                <a type="submit" href="{{ route('admin.index') }}"
                                    class="btn btn-warning mx-1">Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- End General Form Elements -->
            </div>
        </div>
    </section>
@endsection
