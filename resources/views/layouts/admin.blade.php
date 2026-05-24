<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Alat</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <div class="d-flex">

        {{-- Sidebar --}}
        <div class="bg-dark text-white p-3" style="width: 250px; min-height:100vh;">
            <h4 class="mb-4">PEMINJAMAN ALAT</h4>

            <ul class="nav flex-column">

                <li class="nav-item mb-2">
                    <a href="/admin/dashboard" class="nav-link text-white">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/admin/alat" class="nav-link text-white">
                        <i class="bi bi-tools"></i> Data Alat
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/admin/kategori" class="nav-link text-white">
                        <i class="bi bi-tags"></i> Kategori
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/admin/peminjaman" class="nav-link text-white">
                        <i class="bi bi-arrow-up-circle"></i> Peminjaman
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/admin/pengembalian" class="nav-link text-white">
                        <i class="bi bi-arrow-down-circle"></i> Pengembalian
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/admin/user" class="nav-link text-white">
                        <i class="bi bi-people"></i> User
                    </a>
                </li>

            </ul>
        </div>

        {{-- Content --}}
        <div class="flex-grow-1 p-4">
            @yield('content')
        </div>

    </div>

</body>
</html>