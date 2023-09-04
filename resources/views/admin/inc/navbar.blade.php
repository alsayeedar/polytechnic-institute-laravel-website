<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand ps-3" href="{{ route("admin.dashboard") }}">{{ $settings->short_title }}</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars"></i>
    </button>
    <ul class="me-3 ms ms-auto navbar-nav">
        <li class="nav-item">
            <a href="{{ route("frontend.index") }}" target="_blank" class="nav-link">View Site</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li>
                    <a class="dropdown-item" href="{{ route("admin.settings") }}">Settings</a>
                </li>
                <li>
                    <hr class="dropdown-divider"/>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route("admin.logout") }}">Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>