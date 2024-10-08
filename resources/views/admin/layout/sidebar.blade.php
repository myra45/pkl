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

                    <li class="sidebar-item {{ Request::is('admin/show*') || Request::is('admin/member/*') || Request::is('admin/edit/*') ? 'active' : ' ' }}">
                        <a class="sidebar-link has-arrow {{ Request::is('admin/show*') || Request::is('admin/member/*') || Request::is('admin/edit/*') ? 'active' : ' ' }}" aria-expanded="false">
                          <span class="d-flex">
                            <i class="ti ti-users"></i>
                          </span>
                          <span class="hide-menu">User Manajemen</span>
                        </a>
                        <ul class="collapse first-level">
                          <li class="sidebar-item {{ Request::is('admin/show*') || Request::is('admin/edit/*') ? 'active' : ' ' }}">
                            <a href="{{ route('admin_show') }}" class="sidebar-link {{ Request::is('admin/show*') || Request::is('admin/edit/*') ? 'active' : ' ' }}">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">All Admin</span>
                            </a>
                          </li>
                          <li class="sidebar-item {{ Request::is('admin/member/show*') ? 'active' : ' ' }} ">
                            <a href="{{ route('member_show') }}" class="sidebar-link {{ Request::is('admin/member/show*') ? 'active' : ' ' }}">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">All Member</span>
                            </a>
                          </li>
                        </ul>
                      </li>

                    <li class="sidebar-item {{ Request::is('admin/eskul/*') ||Request::is('admin/eskul*') ? 'active' : ' ' }}">
                        <a class="sidebar-link has-arrow {{ Request::is('admin/eskul/*') ||Request::is('admin/eskul*') ? 'active' : ' ' }}" aria-expanded="false">
                          <span class="d-flex">
                            <i class="ti ti-file-text"></i>
                          </span>
                          <span class="hide-menu">Eskul Manajemen</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                          <li class="sidebar-item {{ Request::is('admin/eskul/*') || Request::is('admin/eskul*') ? 'active' : ' '}} ">
                            <a href="{{ route('eskul_show') }}" class="sidebar-link {{ Request::is('admin/eskul/*') || Request::is('admin/eskul*') ? 'active' : ' '}}">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">All Eskul</span>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <li class="sidebar-item {{ Request::is('admin/event-nilai/*') || Request::is('admin/event-nilai*') ? 'active' : ' ' }}">
                        <a class="sidebar-link has-arrow {{ Request::is('admin/event-nilai/*') || Request::is('admin/event-nilai*') ? 'active' : ' ' }}" aria-expanded="false">
                          <span class="d-flex">
                            <i class="ti ti-file-report"></i>
                          </span>
                          <span class="hide-menu">Assessment Events</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                          <li class="sidebar-item {{ Request::is('admin/event-nilai/*') ? 'active' : ' '}} ">
                            <a href="{{ route('event_nilai_show') }}" class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">Assessment</span>
                            </a>
                          </li>
                          <li class="sidebar-item {{ Request::is('admin/event-nilai/*') ? 'active' : ' '}} ">
                            <a href="{{ route('event_nilai_create') }}" class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">Create an Assessment</span>
                            </a>
                          </li>
                          <li class="sidebar-item {{ Request::is('admin/event-nilai/all*') ? 'active' : ' '}} ">
                            <a href="{{ route('event_nilai_all') }}" class="sidebar-link {{ Request::is('admin/event-nilai/all*') ? 'active' : ' '}}">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">Assessment History</span>
                            </a>
                          </li>
                        </ul>
                      </li>


                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" aria-expanded="">
                          <span class="d-flex">
                            <i class="ti ti-file"></i>
                          </span>
                          <span class="hide-menu">Content Management</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                          <li class="sidebar-item {{ Request::is('home/banner*') ? 'active' : ' ' }}">
                            <a href="{{ route('home_banner_show') }}" class="sidebar-link ">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">Home Section</span>
                            </a>
                          </li>
                          <li class="sidebar-item {{ Request::is('about/show*') ? 'active' : ' ' }}">
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
                          <li class="sidebar-item {{ Request::is('admin/home/testimonial*') ? 'active' : ' ' }}">
                            <a href="{{ route('home_testimonial_show') }}" class="sidebar-link {{ Request::is('admin/home/testimonial*') ? 'active' : ' ' }} ">
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
                      <li class="sidebar-item ">
                        <a href="{{ route('home_kontak_show') }}" class="sidebar-link">
                          <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                          </div>  
                          <span class="hide-menu">Kontak Section</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                      <li class="sidebar-item {{ Request::is('admin/berita/*') || Request::is('admin/berita-category/*') ? 'active' : ' '}}">
                        <a class="sidebar-link has-arrow {{ Request::is('admin/berita/*') || Request::is('admin/berita-category/*') ? 'active' : ' '}}">
                          <span class="d-flex">
                            <i class="ti ti-news"></i>
                          </span>
                          <span class="hide-menu">News</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                          <li class="sidebar-item {{ Request::is('admin/berita/*') ? 'active' : ' '}}">
                            <a class="sidebar-link {{ Request::is('admin/berita/*') ? 'active' : ' '}}" href="{{route('news_show')}}">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">All News</span>
                            </a>
                          </li>
                          <li class="sidebar-item {{ Request::is('admin/berita-category/*') ? 'active' : ' '}}">
                            <a class="sidebar-link {{ Request::is('admin/berita-category/*') ? 'active' : ' '}}" href="{{route('news_category_show')}}">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">Category News</span>
                            </a>
                          </li>
                          <li class="sidebar-item {{ Request::is('admin/berita-komentars*') ? 'active' : ' '}}">
                            <a class="sidebar-link {{ Request::is('admin/berita-komentars*') ? 'active' : ' '}}" href="{{ route('admin_komentar') }}">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">All Comentars</span>
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
