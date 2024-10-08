    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="{{ route('admin_home') }}" class="text-nowrap logo-img">
                    <img src="{{ asset('dist/images/logos/44.png') }}" width="190" style="margin-top:20px;" alt="" />
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
                    <li class="sidebar-item {{ Request::is('admin/extracurricular/member*') ? 'active' : '' }}">
                        <a class="sidebar-link has-arrow {{ Request::is('admin/extracurricular/member*') ? 'active' : '' }}" aria-expanded="false">
                            <span class="d-flex">
                                <i class="ti ti-users"></i>
                            </span>
                            <span class="hide-menu">User Manajemen</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level {{ Request::is('admin/extracurricular/member*') ? 'active' : '' }}">
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/member*') ? 'active' : '' }}">
                                <a class="sidebar-link {{ Request::is('admin/extracurricular/member*') ? 'active' : '' }}" href="{{ route('member_eskul_show') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">All Member</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/extracurricular/presensi/*') ? 'active' : '' }}">
                        <a class="sidebar-link has-arrow {{ Request::is('admin/extracurricular/presensi/*') ? 'active' : '' }}" aria-expanded="false">
                            <span class="d-flex">
                                <i class="ti ti-clipboard-check"></i>
                            </span>
                            <span class="hide-menu">Presence</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/presensi') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('admin_extracurricular_presensi') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">All Presence</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/presensi/create') ? 'active' : '' }}">
                                <a class="sidebar-link {{ Request::is('admin/extracurricular/presensi/create') ? 'active' : '' }}" href="{{ route('presensi_create') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Create Presence</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/presensi/history*') || Request::is('admin/extracurricular/presensi/show/*') ? 'active' : '' }}">
                                <a class="sidebar-link {{ Request::is('admin/extracurricular/presensi/history*') || Request::is('admin/extracurricular/presensi/show/*') ? 'active' : '' }}" href="{{ route('presensi_history_all') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">History Presence</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ route('preview_report') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Presence Report</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/extracurricular/task-manajemen/*') ? 'active' : '' }}">
                        <a class="sidebar-link has-arrow {{ Request::is('admin/extracurricular/task-manajemen/*') ? 'active' : '' }}" aria-expanded="false">
                            <span class="d-flex">
                                <i class="ti ti-list-details"></i>
                            </span>
                            <span class="hide-menu">Task Management</span>
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
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/task-manajemen/all*') ? 'active' : '' }}">
                                <a class="sidebar-link {{ Request::is('admin/extracurricular/task-manajemen/all*') ? 'active' : '' }}" href="{{ route('admin_extracurricular_task_manajement_all') }}">
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
                    <li class="sidebar-item {{ Request::is('admin/extracurricular/grade*') ? 'active' : '' }}">
                        <a class="sidebar-link has-arrow {{ Request::is('admin/extracurricular/grade*') ? 'active' : '' }}" aria-expanded="false">
                            <span class="d-flex">
                                <i class="ti ti-file-report"></i>
                            </span>
                            <span class="hide-menu">Final Score</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/grade*') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('admin_extracurricular_grade') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Final Score</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ Request::is('admin/extracurricular/grade/history*') ? 'active' : '' }}">
                                <a class="sidebar-link {{ Request::is('admin/extracurricular/grade/history*') ? 'active' : '' }}" href="{{ route('admin_extracurricular_grade_history') }}">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">History Nilai</span>
                                </a>
                            </li>
                        </ul>
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
