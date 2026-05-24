<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Peminjam</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            background:#f4f6f9;
            font-family:Segoe UI;
        }

        /* SIDEBAR */
        .sidebar{
            width:260px;
            height:100vh;
            position:fixed;
            background:linear-gradient(180deg,#198754,#146c43);
            color:white;
            padding-top:20px;
        }

        .sidebar h3{
            text-align:center;
            margin-bottom:35px;
            font-weight:bold;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:15px 25px;
            transition:0.3s;
            font-size:15px;
        }

        .sidebar a:hover{
            background:rgba(255,255,255,0.2);
            padding-left:35px;
        }

        .sidebar a.active{
            background:rgba(255,255,255,0.25);
        }

        /* CONTENT */
        .content{
            margin-left:260px;
            padding:30px;
        }

        /* NAVBAR */
        .topbar{
            background:white;
            padding:15px 25px;
            border-radius:15px;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
            margin-bottom:30px;
        }

        /* CARD */
        .dashboard-card{
            border:none;
            border-radius:20px;
            color:white;
            overflow:hidden;
            transition:0.3s;
        }

        .dashboard-card:hover{
            transform:translateY(-5px);
        }

        .card-icon{
            font-size:45px;
            opacity:0.7;
        }

        /* TABLE */
        .table-card{
            border:none;
            border-radius:20px;
            overflow:hidden;
        }

    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <h3>
        <i class="bi bi-box-seam"></i>
        Peminjam
    </h3>

    <a href="/peminjam/dashboard" class="active">
        <i class="bi bi-speedometer2"></i>
        Dashboard
    </a>

    <a href="/peminjam/alat">
        <i class="bi bi-box"></i>
        Pinjam Alat
    </a>

    <a href="/peminjam/riwayat">
        <i class="bi bi-clock-history"></i>
        Riwayat
    </a>

    <a href="/peminjam/profile">
        <i class="bi bi-person"></i>
        Profile
    </a>

    <a href="/">
        <i class="bi bi-box-arrow-right"></i>
        Logout
    </a>

</div>

<!-- CONTENT -->
<div class="content">

    <!-- TOPBAR -->
    <div class="topbar d-flex justify-content-between align-items-center">

        <div>

            <h3 class="mb-1">
                Dashboard Peminjam
            </h3>

            <small class="text-muted">
                Selamat datang di sistem peminjaman alat 👋
            </small>

        </div>

        <div>

            <span class="badge bg-success p-2">
                Online
            </span>

        </div>

    </div>

    <!-- CARD -->
    <div class="row g-4 mb-4">

        <!-- CARD 1 -->
        <div class="col-md-4">

            <div class="card dashboard-card shadow bg-primary">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6>Total Pinjaman</h6>

                            <h1>12</h1>

                        </div>

                        <div class="card-icon">

                            <i class="bi bi-arrow-left-right"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">

            <div class="card dashboard-card shadow bg-success">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6>Alat Tersedia</h6>

                            <h1>25</h1>

                        </div>

                        <div class="card-icon">

                            <i class="bi bi-box"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">

            <div class="card dashboard-card shadow bg-warning">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6>Menunggu Approval</h6>

                            <h1>2</h1>

                        </div>

                        <div class="card-icon">

                            <i class="bi bi-clock-history"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- TABLE -->
    <div class="card table-card shadow">

        <div class="card-header bg-success text-white">

            <h5 class="mb-0">
                Aktivitas Peminjaman Terbaru
            </h5>

        </div>

        <div class="card-body">

            <table class="table table-hover">

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Nama Alat</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>1</td>
                        <td>Laptop Asus</td>
                        <td>2026-05-23</td>

                        <td>
                            <span class="badge bg-success">
                                Dipinjam
                            </span>
                        </td>

                    </tr>

                    <tr>

                        <td>2</td>
                        <td>Proyektor Epson</td>
                        <td>2026-05-22</td>

                        <td>
                            <span class="badge bg-warning text-dark">
                                Pending
                            </span>
                        </td>

                    </tr>

                    <tr>

                        <td>3</td>
                        <td>Kamera Canon</td>
                        <td>2026-05-20</td>

                        <td>
                            <span class="badge bg-danger">
                                Dikembalikan
                            </span>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>