@extends('admin.dashboard')
@section('title', 'Data Pemilih')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tabel Data Pemilih</h5>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <a class="btn btn-primary" href="{{ route('admin.create') }}" title="Tambah Data"><i
                                class="bi bi-person-plus-fill"></i></a>
                        <a class="btn btn-danger" href="{{ route('generate-pdf') }}" target="_blank" title="Export PDF"><i
                                class="bi bi-filetype-pdf"></i></a>
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
                                    <form method="POST" id="formDelete">
                                        @method('DELETE')
                                        @csrf
                                        <a class="btn btn-primary btn-sm" title="Lihat Detail"
                                            href="{{ route('admin.show', $pemilih->id) }}">
                                            <i class="bi bi-person-lines-fill"></i>
                                        </a>
                                        <a class="btn btn-warning btn-sm" title="Ubah Data"
                                            href="{{ route('admin.edit', $pemilih->id) }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <button type="submit" data-action="{{ route('admin.destroy', $pemilih->id) }}"
                                            class="btn btn-danger btn-sm btnDelete" title="Hapus Data">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination pagination-info">
                    {{ $data->links() }}
                </div>
                <!-- End Default Table Example -->
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('body').on('click', '.btnDelete', function(e) {
            e.preventDefault();
            var action = $(this).data('action');
            Swal.fire({
                title: 'Yakin ingin menghapus data ini?',
                text: "Data yang sudah dihapus tidak bisa dikembalikan lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Yakin'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#formDelete').attr('action', action);
                    $('#formDelete').submit();
                }
            })
        })
    </script>
@endsection
