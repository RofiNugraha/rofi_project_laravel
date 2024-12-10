<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-text mx-3">My Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Items -->
    <li class="nav-item">
        <a class="nav-link {{ request()->is('admin/home') ? 'active' : '' }}" href="/admin/home">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('admin/about') ? 'active' : '' }}" href="/admin/about">
            <i class="fas fa-info-circle"></i>
            <span>About</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('admin/certificate') ? 'active' : '' }}" href="/admin/certificate">
            <i class="fas fa-certificate"></i>
            <span>Certificate</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('admin/project') ? 'active' : '' }}" href="/admin/project">
            <i class="fas fa-tasks"></i>
            <span>Project</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('admin/skill') ? 'active' : '' }}" href="/admin/skill">
            <i class="fas fa-brain"></i>
            <span>Skill</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('admin/contact') ? 'active' : '' }}" href="/admin/contact">
            <i class="fas fa-envelope"></i>
            <span>Contact</span>
        </a>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item"><a class="nav-link" href="">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </a></button>
        </form>
    </li>
</ul>