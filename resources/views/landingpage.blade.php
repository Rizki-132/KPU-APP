<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Panitia Pemungutan Suara</title>
        <link rel="icon" type="image/x-icon" href="{{asset('asset2/img/icon.png')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('asset2/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <img src="{{asset('asset2/img/brand3.png')}}" alt="sidapil">
                 &nbsp;  &nbsp;
                <a class="navbar-brand" href="#page-top">Sistem Data Pemilih</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                             @endif
                          @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        
                        {{-- <li class="nav-item"><a class="nav-link" href="#!">Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Log In</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <img src="{{asset('asset2/img/Logo2.png')}}" width="100px" alt="">
                    <br><br><br>
                    <h2 class="masthead-subheading mb-0 fs-2">Pemilihan Umum 2024</h2>
                    <h1 class="masthead-heading mb-0 fs-1">Panitia Pemungutan Suara</h1>
                    <h2 class="masthead-subheading mb-0" style="font-size: 50px">Desa Kodasari</h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Learn More</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/z5Tl-OE_jqU?si=ryxDIXqk1w6jZCjH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h5 class="display-6">Simulasi Pemungutan dan Penghitungan suara dengan desain surat suara dan formulir yang di sederhanakan Untuk Pemilu 2024</h5>
                            <p>Ditayangkan live tanggal 15 Des 2021
                                Live Streaming Simulasi Penghitungan Suara Pada Penyederhanaan Desain Surat Suara Formulir Pemilu 2024, Medan, Sumatera Utara, Rabu, (15/12), 13.30 WIB. di Youtube KPU RI</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/yNO0YS846kU?si=sdBJYyaTf47dWrC9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Debat Pertama Calon Presiden Pemilu Tahun 2024</h2>
                            <p>JAKARTA, KOMPAS.TV  Ketiga Calon Presiden (Capres) pada Pilpres 2024, Anies Baswedan, Prabowo Subianto dan Ganjar Pranowo hadir dalam debat perdana yang digelar oleh KPU pada Selasa, (12/12/2023).</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/_wUIMtn_OJE?si=y1VOsxUPysCfoPPJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Konferensi Pers Persiapan Debat Ketiga Calon Presiden Pemilu Tahun 2024</h2>
                            <p>Jakarta, NU Online Komisi Pemilihan Umum (KPU) mengumumkan format dan alur, durasi waktu, serta segmen dalam debat ketiga pemilihan presiden (pilpres) 2024 tak berubah atau masih sama dengan format debat sebelumnya.  Debat ketiga Pilpres 2024 akan menampilkan para calon presiden (capres) yakni Anies Baswedan, Prabowo Subianto, dan Ganjar Pranowo yang akan beradu gagasan di Istora Senayan, Jakarta, pada Ahad (7/1/2024).

                                Sumber: https://www.nu.or.id/nasional/tak-berubah-begini-format-dan-alur-debat-ketiga-pilpres-2024-Q4SnC
                                
                                
                                ___
                                Download NU Online Super App, aplikasi keislaman terlengkap! https://nu.or.id/superapp (Android/iOS)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
