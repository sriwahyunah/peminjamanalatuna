<!-- resources/views/layouts/sidebar.blade.php -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Logo -->
    <a href="{{ url('/admin/dashboard') }}" class="brand-link text-center">
        <span class="brand-text font-weight-bold">
            PEMINJAMAN ALAT
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Menu -->
        <nav class="mt-3">

            <!-- HAPUS data-widget="treeview" -->
            <ul class="nav nav-pills nav-sidebar flex-column">

                <!-- Dashboard -->
                <li class="nav-item">

                    <a href="{{ url('/admin/dashboard') }}"
                       class="nav-link">

                        <i class="nav-icon fas fa-tachometer-alt"></i>

                        <p>Dashboard</p>

                    </a>

                </li>

                <!-- Data Alat -->
                <li class="nav-item">

                    <a href="{{ url('/admin/alat') }}"
                       class="nav-link">

                        <i class="nav-icon fas fa-toolbox"></i>

                        <p>Data Alat</p>

                    </a>

                </li>

                <!-- Kategori -->
                <li class="nav-item">

                    <a href="{{ url('/admin/kategori') }}"
                       class="nav-link">

                        <i class="nav-icon fas fa-layer-group"></i>

                        <p>Kategori</p>

                    </a>

                </li>

                <!-- Peminjaman -->
                <li class="nav-item">

                    <a href="{{ url('/admin/peminjaman') }}"
                       class="nav-link">

                        <i class="nav-icon fas fa-exchange-alt"></i>

                        <p>Peminjaman</p>

                    </a>

                </li>

                <!-- Pengembalian -->
                <li class="nav-item">

                    <a href="{{ url('/admin/pengembalian') }}"
                       class="nav-link">

                        <i class="nav-icon fas fa-undo"></i>

                        <p>Pengembalian</p>

                    </a>

                </li>

                <!-- User -->
                <li class="nav-item">

                    <a href="{{ url('/admin/user') }}"
                       class="nav-link">

                        <i class="nav-icon fas fa-users"></i>

                        <p>User</p>

                    </a>

                </li>

                <!-- Laporan -->
                <li class="nav-item">

                    <a href="{{ url('/admin/laporan') }}"
                       class="nav-link">

                        <i class="nav-icon fas fa-file-alt"></i>

                        <p>Laporan</p>

                    </a>

                </li>

                <!-- Logout -->
                <li class="nav-item mt-4 px-3">

                    <form action="{{ url('/logout') }}" method="POST">

                        @csrf

                        <button type="submit" class="btn btn-danger btn-block">
                            Logout
                        </button>

                    </form>

                </li>

            </ul>

        </nav>

    </div>

</aside>