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
                    {{-- <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Home</span>
                    </li> --}}
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
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" aria-expanded="false">
                            <span class="d-flex">
                                <i class="ti ti-users"></i>
                            </span>
                            <span class="hide-menu">User Manajemen</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level {{ Request::is('admin/extracurricular/member') ? 'active' : '' }}">
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/member') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('member_eskul_show') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">All Member</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" aria-expanded="false">
                            <span class="d-flex">
                                <i class="ti ti-clipboard-check"></i>
                            </span>
                            <span class="hide-menu">Presensi</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level {{ Request::is('admin/extracurricular/presensi/*') ? 'active' : '' }}">
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/presensi') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('admin_extracurricular_presensi') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">All Presensi</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/presensi/create') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('presensi_create') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Create Presensi</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/presensi/history') || Request::is('admin/extracurricular/presensi/show/{event_id}') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('presensi_history_all') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">History Presensi</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ route('preview_report') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Presensi Report</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" aria-expanded="false">
                            <span class="d-flex">
                                <i class="ti ti-list-details"></i>
                            </span>
                            <span class="hide-menu">Manajemen Tugas</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level {{ Request::is('admin/extracurricular/task-manajemen/*') ? 'active' : '' }}">
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/task-manajemen') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('admin_extracurricular_task_manajement') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Task Show</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/task-manajemen/all') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('admin_extracurricular_task_manajement_all') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">All Task</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/task-manajemen/create') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('admin_extracurricular_task_manajement_create')}}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Create Task</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                   
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('admin_extracurricular_grade')}}">
                            <span>
                                <i class="ti ti-file-report"></i>
                            </span>
                            <span class="hide-menu">Nilai Akhir</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin_logout') }}">
                            <span>
                                <i class="ti ti-logout"></i>
                            </span>
                            <span class="hide-menu">Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
