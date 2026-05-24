<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Alat</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body{
            font-family: Arial, sans-serif;
        }

        .hero{
            min-height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
            url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1400') center/cover;
            color: white;
            display: flex;
            align-items: center;
        }

        .hero h1{
            font-size: 60px;
            font-weight: bold;
        }

        .hero p{
            font-size: 20px;
        }

        .feature-box{
            padding: 30px;
            border-radius: 15px;
            background: #f8f9fa;
            transition: 0.3s;
        }

        .feature-box:hover{
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .icon{
            font-size: 50px;
            color: #0d6efd;
            margin-bottom: 15px;
        }

        footer{
            background: #0d6efd;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            PEMINJAMAN ALAT
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#fitur">Fitur</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-light ms-2" href="{{ route('login') }}">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- Hero --}}
<section class="hero" id="home">
    <div class="container text-center">
        <h1>Sistem Peminjaman Alat</h1>

        <p class="mt-3">
            Mudah, Cepat, Efisien dan Modern untuk Pengelolaan Peminjaman Alat
        </p>

        <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-4 px-5">
            Mulai Sekarang
        </a>
    </div>
</section>

{{-- Fitur --}}
<section class="py-5" id="fitur">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Fitur Aplikasi</h2>
            <p>Sistem peminjaman alat yang modern dan efisien</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="feature-box text-center h-100">
                    <i class="fa-solid fa-toolbox icon"></i>
                    <h4>Data Alat</h4>
                    <p>
                        Mengelola data alat dengan mudah dan cepat.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box text-center h-100">
                    <i class="fa-solid fa-right-left icon"></i>
                    <h4>Peminjaman</h4>
                    <p>
                        Proses peminjaman alat menjadi lebih praktis.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box text-center h-100">
                    <i class="fa-solid fa-file-lines icon"></i>
                    <h4>Laporan</h4>
                    <p>
                        Menampilkan laporan peminjaman secara otomatis.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Tentang --}}
<section class="py-5 bg-light" id="tentang">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">
                <img 
                    src="https://images.unsplash.com/photo-1581092921461-eab62e97a780?q=80&w=1200"
                    class="img-fluid rounded shadow"
                >
            </div>

            <div class="col-md-6">
                <h2 class="fw-bold mb-4">
                    Tentang Aplikasi
                </h2>

                <p>
                    Aplikasi peminjaman alat dibuat untuk mempermudah proses
                    peminjaman dan pengembalian alat secara digital.
                </p>

                <p>
                    Sistem ini membantu admin, petugas, dan mahasiswa
                    dalam mengelola alat dengan lebih efektif dan efisien.
                </p>

                <a href="{{ route('login') }}" class="btn btn-primary mt-3">
                    Login Sekarang
                </a>
            </div>

        </div>
    </div>
</section>

{{-- Footer --}}
<footer>
    <div class="container text-center">
        <p class="mb-0">
            © 2026 Sistem Peminjaman Alat
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>