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
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/home') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin_home') }}">
                            <span>
                                <i class="ti ti-layout-dashboard"></i>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/profile') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin_profile') }}">
                            <span>
                                <i class="ti ti-user-circle"></i>
                            </span>
                            <span class="hide-menu">Profile</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ Request::is('admin/*') || Request::is('admin/member/*') ? 'active' : ' ' }}">
                        <a class="sidebar-link has-arrow" aria-expanded="false">
                          <span class="d-flex">
                            <i class="ti ti-users"></i>
                          </span>
                          <span class="hide-menu">User Manajemen</span>
                        </a>
                        <ul class="collapse first-level">
                          <li class="sidebar-item {{ Request::is('admin/*') ? 'active' : ' ' }}">
                            <a href="{{ route('admin_show') }}" class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">All Admin</span>
                            </a>
                          </li>
                          <li class="sidebar-item {{ Request::is('admin/member/show') ? 'active' : ' ' }} ">
                            <a href="{{ route('member_show') }}" class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">All Member</span>
                            </a>
                          </li>
                        </ul>
                      </li>

                    <li class="sidebar-item {{ Request::is('admin/eskul/*') ? 'active' : ' ' }}">
                        <a class="sidebar-link has-arrow" aria-expanded="false">
                          <span class="d-flex">
                            <i class="ti ti-file-text"></i>
                          </span>
                          <span class="hide-menu">Eskul Manajemen</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                          <li class="sidebar-item {{ Request::is('admin/eskul/*') ? 'active' : ' '}} ">
                            <a href="{{ route('eskul_show') }}" class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">All Eskul</span>
                            </a>
                          </li>
                        </ul>
                      </li>


                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" aria-expanded="">
                          <span class="d-flex">
                            <i class="ti ti-file"></i>
                          </span>
                          <span class="hide-menu">Konten Manajemen</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                          <li class="sidebar-item ">
                            <a href="{{ route('home_banner_show') }}" class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">Home Section</span>
                            </a>
                          </li>
                          <li class="sidebar-item">
                            <a href="{{route('about_show')}}" class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">About Section</span>
                            </a>
                          </li>
                          <li class="sidebar-item ">
                            <a href="{{ route('home_service_show') }}" class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>  
                              <span class="hide-menu">Service Section</an>
                            </a>
                          </li>
                          <li class="sidebar-item ">
                            <a href="{{ route('home_testimonial_show') }}" class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>  
                              <span class="hide-menu">Testimonial Section</span>
                            </a>
                          </li>
                      <li class="sidebar-item ">
                        <a href="{{ route('home_footer_show') }}" class="sidebar-link">
                          <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                          </div>  
                          <span class="hide-menu">Footer Section</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                      <li class="sidebar-item {{ Request::is('admin/berita/*') || Request::is('admin/berita-category/*') ? 'active' : ' '}}">
                        <a class="sidebar-link has-arrow">
                          <span class="d-flex">
                            <i class="ti ti-news"></i>
                          </span>
                          <span class="hide-menu">News</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                          <li class="sidebar-item {{ Request::is('admin/berita/*') ? 'active' : ' '}}">
                            <a class="sidebar-link" href="{{route('news_show')}}">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">All News</span>
                            </a>
                          </li>
                          <li class="sidebar-item {{ Request::is('admin/berita-category/*') ? 'active' : ' '}}">
                            <a class="sidebar-link" href="{{route('news_category_show')}}">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">Category News</span>
                            </a>
                          </li>
                          <li class="sidebar-item">
                            <a class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">All Comentars</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
