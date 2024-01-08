@extends('admin.dashboard')
@section('title', 'Data Pemilih')
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
                            <th scope="col">Nomor KK</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">jenis Kelamin</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Status</th>
                            <th scope="col">Alasan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $pemilih)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $pemilih->no_kk }}</td>
                            <td>{{ $pemilih->nik }}</td>
                            <td>{{ $pemilih->nama }}</td>
                            <td>{{ $pemilih->alamat }}</td>
                            <td>{{ $pemilih->gender }}</td>
                            <td>{{ $pemilih->tmp_lahir }}</td>
                            <td>{{ $pemilih->tgl_lahir }}</td>
                            <td>{{ $pemilih->status }}</td>
                            <td>{{ $pemilih->keterangan }}</td>
                            <td> 
                                <form method="POST" action="{{ route('admin.destroy', $pemilih->id ) }}">
                                        @method('DELETE')
                                    @csrf
                                    <a class="btn btn-primary btn-sm" title="Lihat Detail" href="{{ route('admin.show', $pemilih->id) }}">
                                        <i class="bi bi-person-lines-fill"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm btnDelete"  title="Hapus Data">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                    <a class="btn btn-warning btn-sm" title="Ubah Data" href="{{ route('admin.edit',$pemilih->id) }}">
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
                        <a class="btn btn-success" href="{{ route('admin.create') }}"> Tambah Data</a>
                    </div>
                </div>
                <!-- End Default Table Example -->
            </div>
        </div>
    </div>
@endsection
