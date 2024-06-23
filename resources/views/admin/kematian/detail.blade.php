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
                                <h1 class="col-sm-2 col-form-label"><b>Nama</b></h1>
                                <div class="col-sm-10">
                                    <h6>: {{ $data->name }}</h6>
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
                                <h1 class="col-sm-2 col-form-label"><b>Tanggal Kematian</b></h1>
                                <div class="col-sm-10">
                                    <h6>: {{ $data->tgl_kematian }}</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <h1 for="inputNumber" class="col-sm-2 col-form-label"><b>Akta Kematian</b></h1>
                                <div class="col-sm-10">
                                    <iframe src="{{ asset('storage/' . $data->dokumen) }}" frameborder="0" height="500"
                                        width="900"></iframe>
                                </div>
                            </div>
                            <!-- End General Form Elements -->
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 d-flex">
                                <a type="submit" href="{{ route('admin2.index') }}"
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
