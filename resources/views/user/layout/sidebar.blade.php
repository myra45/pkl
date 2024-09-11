    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="./index.html" class="text-nowrap logo-img">
                    <img src="{{ asset('dist/images/logos/44.png') }}" width="190" style="margin-top:20px;" alt="" />
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav" {{ Request::is('/dashboard') || Request::is('/profile') || Request::is('/tugas') ? 'active' : ' ' }}>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item {{ Request::is('/home') ? 'active' : ' ' }}" >
                        <a class="sidebar-link" href="{{ route('user_dashboard') }}">
                            <span>
                                <i class="ti ti-layout-dashboard"></i>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::is('/profile') ? 'active' : ' ' }}">
                        <a class="sidebar-link" href="{{ route('user_profile') }}">
                            <span>
                                <i class="ti ti-user-circle"></i>
                            </span>
                            <span class="hide-menu">Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::is('/tugas') ? 'active' : ' ' }}">
                        <a class="sidebar-link" href="{{ route('user_task') }}">
                            <span>
                                <i class="ti ti-checkbox"></i>
                            </span>
                            <span class="hide-menu">Tugas</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::is('/tugas') ? 'active' : ' ' }}">
                        <a class="sidebar-link" href="{{route('user_nilai_akhir')}}">
                            <span>
                                <i class="ti ti-file-report"></i>
                            </span>
                            <span class="hide-menu">Nilai Akhir</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::is('/logout') ? 'active' : ' ' }}">
                        <a class="sidebar-link" href="{{route('logout')}}">
                            <span>
                                <i class="ti ti-logout"></i>
                            </span>
                            <span class="hide-menu">Log Out</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
