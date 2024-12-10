<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color: #f8f9fc; /* Warna terang untuk navbar */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-black-900">{{ Auth::user()->name }}</span>
            </a>
        </li>

    </ul>

</nav>