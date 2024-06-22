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
        <h2 class="text">Tabel Laporan Data Pemilih</h2>
        <h3 class="text">Jl. Hanjuang No.39, Kodasari, Kec. Ligung, Kabupaten Majalengka, Jawa Barat 45456</h3>
    </div>
    <table class="table" style="width:100%, high:100%">
        <thead style="text-align: center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor KK</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Status</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->no_kk }}</td>
                    <td>{{ $row->nik }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>{{ $row->gender }}</td>
                    <td>{{ $row->tmp_lahir }}</td>
                    <td>{{ $row->tgl_lahir }}</td>
                    <td>{{ $row->status }}</td>
                    <td>{{ $row->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>


{{--  --}}

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Table V01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <meta name="robots" content="noindex, follow">
    <script nonce="ce050679-df1f-45c9-ac30-a9ae4da21180">
        try {
            (function(w, d) {
                ! function(o, p, q, r) {
                    o[q] = o[q] || {};
                    o[q].executed = [];
                    o.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    o.zaraz.q = [];
                    o.zaraz._f = function(s) {
                        return async function() {
                            var t = Array.prototype.slice.call(arguments);
                            o.zaraz.q.push({
                                m: s,
                                a: t
                            })
                        }
                    };
                    for (const u of ["track", "set", "debug"]) o.zaraz[u] = o.zaraz._f(u);
                    o.zaraz.init = () => {
                        var v = p.getElementsByTagName(r)[0],
                            w = p.createElement(r),
                            x = p.getElementsByTagName("title")[0];
                        x && (o[q].t = p.getElementsByTagName("title")[0].text);
                        o[q].x = Math.random();
                        o[q].w = o.screen.width;
                        o[q].h = o.screen.height;
                        o[q].j = o.innerHeight;
                        o[q].e = o.innerWidth;
                        o[q].l = o.location.href;
                        o[q].r = p.referrer;
                        o[q].k = o.screen.colorDepth;
                        o[q].n = p.characterSet;
                        o[q].o = (new Date).getTimezoneOffset();
                        if (o.dataLayer)
                            for (const B of Object.entries(Object.entries(dataLayer).reduce(((C, D) => ({
                                    ...C[1],
                                    ...D[1]
                                })), {}))) zaraz.set(B[0], B[1], {
                                scope: "page"
                            });
                        o[q].q = [];
                        for (; o.zaraz.q.length;) {
                            const E = o.zaraz.q.shift();
                            o[q].q.push(E)
                        }
                        w.defer = !0;
                        for (const F of [localStorage, sessionStorage]) Object.keys(F || {}).filter((H => H
                            .startsWith("_zaraz_"))).forEach((G => {
                            try {
                                o[q]["z_" + G.slice(7)] = JSON.parse(F.getItem(G))
                            } catch {
                                o[q]["z_" + G.slice(7)] = F.getItem(G)
                            }
                        }));
                        w.referrerPolicy = "origin";
                        w.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(o[q])));
                        v.parentNode.insertBefore(w, v)
                    };
                    ["complete", "interactive"].includes(p.readyState) ? zaraz.init() : o.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (err) {
            console.error('Failed to run Cloudflare Zaraz: ', err)
            fetch('/cdn-cgi/zaraz/t', {
                credentials: 'include',
                keepalive: true,
                method: 'GET',
            })
        };
    </script>
</head>

<body>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">No</th>
                                <th class="column2">Nomor KK</th>
                                <th class="column3">NIK</th>
                                <th class="column4">Nama</th>
                                <th class="column5">Alamat</th>
                                <th class="column6">jenis Kelamin</th>
                                <th class="column7">Tempat Lahir</th>
                                <th class="column7">Tanggal Lahir</th>
                                <th class="column7">Status</th>
                                <th class="column7">Alasan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $row)
                                <tr>
                                    <th class="column1">{{ $no++ }}</th>
                                    <td class="column2">{{ $row->no_kk }}</td>
                                    <td class="column3">{{ $row->nik }}</td>
                                    <td class="column4">{{ $row->nama }}</td>
                                    <td class="column5">{{ $row->alamat }}</td>
                                    <td class="column6">{{ $row->gender }}</td>
                                    <td class="column6">{{ $row->tmp_lahir }}</td>
                                    <td class="column6">{{ $row->tgl_lahir }}</td>
                                    <td class="column6">{{ $row->status }}</td>
                                    <td class="column6">{{ $row->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>

    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"8495ba0eded90495","version":"2024.1.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

</html> --}}
