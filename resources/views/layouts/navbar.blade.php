<!-- resources/views/layouts/navbar.blade.php -->

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="/admin/dashboard" class="nav-link">
                Dashboard
            </a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- User Info -->
        <li class="nav-item dropdown">

            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user-circle"></i>
                Admin
            </a>

            <div class="dropdown-menu dropdown-menu-right">

                <a href="/admin/dashboard" class="dropdown-item">
                    <i class="fas fa-home mr-2"></i> Dashboard
                </a>

                <div class="dropdown-divider"></div>

                <!-- Logout -->
                <a href="/logout"
                   class="dropdown-item"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>

                <form id="logout-form" action="/logout" method="POST" style="display:none;">
                    @csrf
                </form>

            </div>

        </li>

    </ul>

</nav>