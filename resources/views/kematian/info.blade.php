@extends('admin.dashboard')
@section('title', 'Data Kematian')
@section('content')
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tabel Data Pemilih</h5>
                @php
                    $no = 1;
                @endphp
                <!-- Default Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Gender</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($person as $item)
                        <tr>
                                
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>
                                <form method="#" action="#">
                                    {{-- @csrf
                                    @method('DELETE') --}}
                                    <a class="btn btn-primary btn-sm" title="Lihat Detail" href="#">
                                        <i class="bi bi-person-lines-fill"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm btnDelete" title="Hapus Alamat">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                    <a class="btn btn-warning btn-sm" title="Ubah Alamat" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <a class="btn btn-success" href="{{ route('kematian.create') }}"> Tambah Data</a>
                    </div>
                </div>
                <!-- End Default Table Example -->
            </div>
        </div>
    </div>
@endsection
