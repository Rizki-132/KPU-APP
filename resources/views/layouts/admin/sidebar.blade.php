<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                @can('admin')
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Data Alamat</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Data Kematian</span>
                        </a>
                    </li>
                @endcan
                <li>
                    @can('admin')
                            <a href="{{ route('admin.index') }}">
                                <i class="bi bi-circle"></i><span>Data Pemilih</span>
                            </a>
                        @elsecan('user')
                            <a href="{{ route('pemilih.create') }}">
                                <i class="bi bi-circle"></i><span>Data Pemilih</span>
                            </a>
                    @endcan
                </li>
                @can('admin')
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Data Pindah</span>
                        </a>
                    </li>
                @endcan
            </ul>
        </li><!-- End Forms Nav -->

       <!-- End Tables Nav -->

        <!-- End Charts Nav -->
        <!-- End Icons Nav -->

        <li class="nav-heading">Pages</li>

        <!-- End Profile Page Nav -->

        <!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <!-- End Register Page Nav -->

        <!-- End Login Page Nav -->
        <!-- End Error 404 Page Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li><!-- End Blank Page Nav --> --}}

    </ul>

</aside>
