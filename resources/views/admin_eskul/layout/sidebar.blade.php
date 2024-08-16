    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="./index.html" class="text-nowrap logo-img">
                    <img src="{{ asset('dist/images/logos/dark-logo.svg') }}" width="180" alt="" />
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav"
                    {{ Request::is('admin/extracurricular/home') || Request::is('admin/extracurricular/profile') || Request::is('admin/extracurricular/presensi') || Request::is('admin/table') || Request::is('admin/forget-password') || Request::is('admin/confirmation-password') ? 'active' : '' }}>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/extracurricular/home') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin_extracurricular_home') }}">
                            <span>
                                <i class="ti ti-layout-dashboard"></i>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/extracurricular/profile') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin_extracurricular_profile') }}">
                            <span>
                                <i class="ti ti-user-circle"></i>
                            </span>
                            <span class="hide-menu">Profile</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">User Manajement</span>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/extracurricular/presensi') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin_extracurricular_presensi') }}">
                            <span>
                                <i class="ti ti-checkup-list"></i>
                            </span>
                            <span class="hide-menu">Presensi</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
