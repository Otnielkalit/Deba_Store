            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/redirects') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/users') }}">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">User</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/foodmenu') }}">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">Food Menu</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/viewagen') }}">
                            <i class="icon-grid-2 menu-icon"></i>
                            <span class="menu-title">Agen & Pelayan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/viewreservation') }}">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Pesan Tempat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/addagen') }}">
                            <i class="mdi mdi-account-plus"></i>
                            <span class="menu-title">Tambah Agen/Pelayan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/addmenu') }}">
                            <i class="mdi mdi-bookmark-plus"></i>
                            <span class="menu-title">Tambah Menu</span>
                        </a>
                    </li>
                </ul>
            </nav>
