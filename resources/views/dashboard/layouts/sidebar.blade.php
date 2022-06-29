 <!-- Page Body Start-->
 <div class="page-body-wrapper modern-sidebar">
     <!-- Page Sidebar Start-->
     <header class="main-nav">
         <div class="sidebar-user text-center">
             <a class="setting-primary" href="/dashboard/setting"><i data-feather="settings"></i></a>

             @if (auth()->user()->image)
                 <div style="overflow: hidden">
                     <img class="img-90 rounded-circle" src="{{ asset('storage/' . auth()->user()->image) }}"
                         height="90px" />
                 </div>
             @else
                 <img class="img-90 rounded-circle" src="{{ asset('templates/assets/images/dashboard/2.png ') }} " />
             @endif

             <div class="badge-bottom"><span class="badge badge-primary">{{ auth()->user()->roles }}</span></div>
             <a href="/dashboard/profile">
                 {{-- <h6 class="mt-3 f-14 f-w-600">FINANCE OFFICER</h6> --}}
                 <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6> {{-- auth otomatis sdh ad di laravel --}}
             </a>
             {{-- <p class="mb-0 font-roboto">FINANCE OFFICER</p> --}}

         </div>
         <nav>
             <div class="main-navbar">
                 <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                 <div id="mainnav">
                     <ul class="nav-menu custom-scrollbar">
                         <li class="back-btn">
                             <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                     aria-hidden="true"></i></div>
                         </li>
                         {{-- <li class="sidebar-main-title">
                             <div>
                                 <h6>FO</h6>
                             </div>
                         </li> --}}

                         {{-- <li class="dropdown">
                             <a href="/anggota"
                                 class="menu-title link-nav nav-link {{ $title === 'Anggota' ? 'active' : '' }}">
                                 <i data-feather="users"></i>
                                 <span>Anggota</span>
                             </a>
                         </li> --}}

                         <li class="dropdown">
                             <a href="/dashboard/home"
                                 class="menu-title link-nav nav-link {{ Request::is('/dashboard/home') ? 'active' : '' }}">
                                 <i data-feather="home"></i>
                                 <span>Dashboard</span>
                             </a>
                         </li>
                         {{-- FO View --}}
                         @can('fo')
                             <li class="dropdown">
                                 <a href="/dashboard/anggotas" {{-- class="menu-title link-nav nav-link {{ Request::path() === '/order' ? 'active' : '' }}" --}}
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/anggotas*') ? 'active' : '' }}">
                                     <i data-feather="users"></i>
                                     <span>Anggota</span>
                                 </a>
                             </li>
                             <li class="dropdown">
                                 <a href="/dashboard/employee" {{-- class="menu-title link-nav nav-link {{ Request::path() === '/order' ? 'active' : '' }}" --}}
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/employee*') ? 'active' : '' }}">
                                     <i data-feather="user-check"></i>
                                     <span>Karyawan</span>
                                 </a>
                             </li>

                             <li class="dropdown">
                                 <a href="/dashboard/pooling-order"
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/pooling-order*') ? 'active' : '' }}">
                                     <i data-feather="monitor"></i>
                                     <span>Pooling Order</span>
                                 </a>
                             </li>

                             <li class="dropdown">
                                 <a href="/dashboard/orders" {{-- class="menu-title link-nav nav-link {{ Request::path() === '/order' ? 'active' : '' }}" --}}
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/orders*') ? 'active' : '' }}">
                                     <i data-feather="layers"></i>
                                     <span>Order</span>
                                 </a>
                             </li>

                             <li class="dropdown">
                                 <a class="nav-link menu-title " href="javascript:void(0)"><i
                                         data-feather="inbox"></i><span>BPKB</span></a>
                                 <ul class="nav-submenu menu-content" style="display: none;">
                                     <li><a href="/dashboard/bpkb-masuk" class="">BPKB Masuk</a></li>
                                     <li><a href="/dashboard/bpkb-keluar" class="">BPKB Keluar</a></li>
                                 </ul>
                             </li>

                             {{-- <li class="dropdown">
                             <a href="/edit-order"
                                 class="menu-title link-nav nav-link {{ $title === 'Edit Order' ? 'active' : '' }}">
                                 <i data-feather="server"></i>
                                 <span>Edit Order</span>
                             </a>
                         </li> --}}

                             {{-- <li class=" dropdown">
                                 <a href="/dashboard/struktur-kredit"
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/struktur-kredit*') ? 'active' : '' }}">
                                     <i data-feather="file-text"></i>
                                     <span>Struktur Kredit</span>
                                 </a>
                             </li> --}}

                             <li class="dropdown">
                                 <a href="/dashboard/penerimaan-uang"
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/penerimaan-uang*') ? 'active' : '' }}">
                                     <i data-feather="dollar-sign"></i>
                                     <span>Penerimaan Uang</span>
                                 </a>
                             </li>

                             <li class="dropdown">
                                 <a href="/dashboard/tambah-simpanan"
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/tambah-simpanan*') ? 'active' : '' }}">
                                     <i data-feather="book"></i>
                                     <span>Simpanan</span>
                                 </a>
                             </li>
                             <li class="dropdown">
                                 <a href="/dashboard/stop-out"
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/stop-out*') ? 'active' : '' }}">
                                     <i data-feather="stop-circle"></i>
                                     <span>Anggota Berhenti</span>
                                 </a>
                             </li>


                             <li class="dropdown">
                                 <a href="/cetak-buku-anggota"
                                     class="menu-title link-nav nav-link {{ $title === 'Cetak Buku Anggota' ? 'active' : '' }}">
                                     <i data-feather="printer"></i>
                                     <span>Cetak Kartu Anggota</span>
                                 </a>
                             </li>

                             {{-- <li class="dropdown">
                                 <a href="/register"
                                     class="menu-title link-nav nav-link {{ Request::is('/register') ? 'active' : '' }}">
                                     <i data-feather="user-plus"></i>
                                     <span>Register</span>
                                 </a>
                             </li> --}}
                         @endcan
                         {{-- end Fo View --}}

                         {{-- Anggota View --}}
                         @can('anggota')
                             <li class="dropdown">
                                 <a href="/dashboard/kartu-anggota"
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/kartu-anggotas*') ? 'active' : '' }}">
                                     <i data-feather="users"></i>
                                     <span>Kartu Anggota</span>
                                 </a>
                             </li>

                             <li class="dropdown">
                                 <a href="/dashboard/pinjaman"
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/pinjaman*') ? 'active' : '' }}">
                                     <i data-feather="book-open"></i>
                                     <span>Pinjaman</span>
                                 </a>
                             </li>

                             <li class="dropdown">
                                 <a href="/dashboard/simpanan"
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/simpanan*') ? 'active' : '' }}">
                                     <i data-feather="book"></i>
                                     <span>Simpanan</span>
                                 </a>
                             </li>
                         @endcan
                         {{-- end Anggota View --}}

                         {{-- Bm View --}}
                         @can('bm')
                             <li class="dropdown">
                                 <a href="/dashboard/lap-dt-ag"
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/lap-dt-ag') ? 'active' : '' }}">
                                     <i data-feather="users"></i>
                                     <span>Laporan Data Anggota</span>
                                 </a>
                             </li>

                             <li class="dropdown">
                                 <a href="/dashboard/lap-dt-employee"
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/lap-dt-employee') ? 'active' : '' }}">
                                     <i data-feather="star"></i>
                                     <span>Laporan Data Karyawan</span>
                                 </a>
                             </li>

                             <li class="dropdown">
                                 <a href="/dashboard/lap-keuangan/in"
                                     class="menu-title link-nav nav-link {{ Request::is('/dashboard/lap-keuangan*') ? 'active' : '' }}">
                                     <i data-feather="file-text"></i>
                                     <span>Laporan Keuangan</span>
                                 </a>
                             </li>
                         @endcan
                         {{-- end BM View --}}


                     </ul>
                 </div>
                 <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
             </div>
         </nav>
     </header>
     <!-- Page Sidebar Ends-->
