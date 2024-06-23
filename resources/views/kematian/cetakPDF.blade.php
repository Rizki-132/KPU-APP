<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        table {
            font-family: Arial, sans-serif;
            font-size: 12px;
            border-collapse: collapse;
            width: 100%;
        }

        h1,
        h2,
        h3 {
            font-family: Arial, sans-serif;
            font-size: 14px;
            width: 100%;
        }

        h3 {
            padding-bottom: 25px;
        }

        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Jika Anda ingin mengatur ukuran font untuk elemen teks dalam sel tabel */
        table td p {
            font-size: 11px;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            /* Menyelaraskan konten secara horizontal */
            flex-wrap: wrap;
            /* Membuat elemen teks dapat membungkus di bawah gambar jika diperlukan */
            text-align: center;
        }

        .container img {
            margin-right: 20px;
            /* Jarak antara gambar dan teks */
            max-width: 50px;
            /* Ukuran maksimum gambar */
            height: auto;
        }

        .text {
            flex: 1;
            margin: 0;
        }

        .text h1,
        .text h2,
        .text h3 {
            margin: 0;
        }

        .text h3 {
            margin: 0;
            padding-bottom: 10px;
            /* Spasi di bawah h3 */
            position: relative;
            /* Memastikan posisi relatif */
        }

        .text h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 1px;
            background-color: #ccc;
            /* Warna garis horizontal */
        }
    </style>
</head>

<body>
    <div class="container">
        <img class="img" src="{{ $image }}" alt="Gambar" style="width:50px; height:auto;">
        <h1 class="text"><b>Panitia Pemungutan Suara Desa Kodasari</b></h1>
        <h2 class="text">Tabel Laporan Data Kematian</h2>
        <h3 class="text">Jl. Hanjuang No.39, Kodasari, Kec. Ligung, Kabupaten Majalengka, Jawa Barat 45456</h3>
    </div>
    <table class="table" style="width:100%, high:100%">
        <thead style="text-align: center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Kematian</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->tgl_kematian }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
