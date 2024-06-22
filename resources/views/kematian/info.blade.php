@extends('admin.dashboard')
@section('title', 'Data Kematian')
@section('content')
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tabel Data Meninggal</h5>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <a class="btn btn-primary" href="{{ route('kematian.create') }}" title="Tambah Data"><i
                                class="bi bi-person-plus-fill"></i></a>
                    </div>
                </div>
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

                        @foreach ($data as $item)
                            <tr>

                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>
                                    <form method="POST" id="formDelete"
                                        action="{{ route('kematian.destroy', $item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-primary btn-sm" title="Lihat Detail"
                                            href="{{ route('kematian.show', $item->id) }}">
                                            <i class="bi bi-person-lines-fill"></i>
                                        </a>
                                        <button type="submit"
                                            class="btn btn-danger
                                            btn-sm btnDelete"
                                            title="Hapus Alamat">
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
                <!-- End Default Table Example -->
            </div>
        </div>
    </div>
@endsection
