<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed {{ request()->is('dashboard') ? 'active fw-bold' : ' ' }}" href="/dashboard">
                <i class="bi bi-grid"></i>
                Dashboard
            </a>
        </li><!-- End Dashboard Nav -->

        <!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    @can('admin')
                        <a class="nav-link {{ request()->is('kematian*') ? 'active fw-bold' : ' ' }}"
                            href="{{ route('kematian.index') }}">
                            <i class="bi bi-circle"></i><span>Data
                                Kematian</span>
                        </a>
                    @elsecan('pamong')
                        <a class="nav-link {{ request()->is('kematian*') ? 'active fw-bold' : ' ' }}"
                            href="{{ route('kematian.index') }}">
                            <i class="bi bi-circle"></i><span>Data
                                Kematian</span>
                        </a>
                    @endcan
                </li>
                <li>
                    @can('admin')
                        <a class="nav-link {{ request()->is('admin*') ? 'active fw-bold' : ' ' }}"
                            href="{{ route('admin.index') }}">
                            <i class="bi bi-circle"></i><span>Data Pemilih</span>
                        </a>
                    @elsecan('user')
                        <a class="nav-link {{ request()->is('pengguna*') ? 'active fw-bold' : ' ' }}"
                            href="{{ route('pengguna.create') }}">
                            <i class="bi bi-circle"></i><span>Data Pemilih</span>
                        </a>
                    @endcan
                    @can('pamong')
                        <a class="nav-link {{ request()->is('pengguna*') ? 'active fw-bold' : ' ' }}"
                            href="{{ route('pengguna.create') }}">
                            <i class="bi bi-circle"></i><span>Data Pemilih</span>
                        </a>
                    @endcan
                </li>
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
