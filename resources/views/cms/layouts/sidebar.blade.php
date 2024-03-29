<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/cms/index">

        <div class="sidebar-brand-text mx-3">HOTEL MS Admin page</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('/cms/news/index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>News / Homepage</span></a>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('/cms/about_us/index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>About us</span></a>
    </li>



    <li class="nav-item active">
        <a class="nav-link" href="{{ route('/cms/employees/index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Employees</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('/cms/clients/index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Clients</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('/cms/rooms/index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Rooms</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('/cms/room_reservations/index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Room Reservations</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('/cms/spa/index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Spa</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('/cms/spa_reservations/index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Spa Reservations</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('/cms/contact_us/index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Contact us Messages</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
