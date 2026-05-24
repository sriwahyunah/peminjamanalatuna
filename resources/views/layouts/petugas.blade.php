<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard Petugas</title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Font Awesome -->

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, Helvetica, sans-serif;
            background:#f4f6f9;
        }

        /*
        |--------------------------------------------------------------------------
        | SIDEBAR
        |--------------------------------------------------------------------------
        */

        .sidebar{
            position:fixed;
            left:0;
            top:0;
            width:250px;
            height:100vh;
            background:#0d6efd;
            padding-top:25px;
            z-index:9999;
        }

        .sidebar-logo{
            color:white;
            text-align:center;
            font-size:35px;
            font-weight:bold;
            margin-bottom:40px;
        }

        .sidebar-menu{
            list-style:none;
            padding-left:0;
        }

        .sidebar-menu li{
            margin-bottom:5px;
        }

        .sidebar-menu a{
            display:flex;
            align-items:center;
            gap:12px;

            color:white;
            text-decoration:none;

            padding:15px 25px;

            transition:0.3s;
        }

        .sidebar-menu a:hover{
            background:rgba(255,255,255,0.2);
            border-left:5px solid white;
        }

        .sidebar-menu i{
            width:20px;
        }

        /*
        |--------------------------------------------------------------------------
        | MAIN CONTENT
        |--------------------------------------------------------------------------
        */

        .main-content{
            margin-left:250px;
            padding:25px;
        }

        /*
        |--------------------------------------------------------------------------
        | LOGOUT
        |--------------------------------------------------------------------------
        */

        .logout-btn{
            width:100%;
            border:none;
            background:none;
            color:white;

            display:flex;
            align-items:center;
            gap:12px;

            padding:15px 25px;

            cursor:pointer;
        }

        .logout-btn:hover{
            background:rgba(255,255,255,0.2);
            border-left:5px solid white;
        }

    </style>

</head>

<body>

    <!-- SIDEBAR -->

    <div class="sidebar">

        <div class="sidebar-logo">
            Petugas
        </div>

        <ul class="sidebar-menu">

            <!-- DASHBOARD -->

            <li>
                <a href="/petugas/dashboard">
                    <i class="fa-solid fa-gauge"></i>
                    Dashboard
                </a>
            </li>

            <!-- PEMINJAMAN -->

            <li>
                <a href="/petugas/peminjaman">
                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                    Peminjaman
                </a>
            </li>

            <!-- PENGEMBALIAN -->

            <li>
                <a href="/petugas/pengembalian">
                    <i class="fa-solid fa-rotate-left"></i>
                    Pengembalian
                </a>
            </li>

            <!-- DATA ALAT -->

            <li>
                <a href="/petugas/alat">
                    <i class="fa-solid fa-toolbox"></i>
                    Data Alat
                </a>
            </li>

            <!-- LAPORAN -->

            <li>
                <a href="/petugas/laporan">
                    <i class="fa-solid fa-file-lines"></i>
                    Laporan
                </a>
            </li>

            <!-- LOGOUT -->

            <li>

                <form action="/logout"
                      method="POST">

                    @csrf

                    <button type="submit"
                            class="logout-btn">

                        <i class="fa-solid fa-right-from-bracket"></i>

                        Logout

                    </button>

                </form>

            </li>

        </ul>

    </div>

    <!-- CONTENT -->

    <div class="main-content">

        @yield('content')

    </div>

</body>
</html>