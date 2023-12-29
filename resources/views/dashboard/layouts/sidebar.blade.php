            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/manajemen*') ? 'active' : '' }}" href="/dashboard/manajemen">
                                <span data-feather="file"></span>
                                Manajemen Mobil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/pinjam*') ? 'active' : '' }}" href="/dashboard/pinjam">
                                <span data-feather="chevrons-right"></span>
                                Peminjaman Mobil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard/pelanggan*') ? 'active' : '' }}" href="/dashboard/pelanggan">
                                <span data-feather="users"></span>
                                Pemilik Mobil
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
