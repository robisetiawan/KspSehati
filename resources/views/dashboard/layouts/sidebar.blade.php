 <!-- Page Body Start-->
 <div class="page-body-wrapper modern-sidebar">
     <!-- Page Sidebar Start-->
     <header class="main-nav">
         <div class="sidebar-user text-center">
             <a class="setting-primary" href="/dashboard/setting"><i data-feather="settings"></i></a><img
                 class="img-90 rounded-circle" src="{{ asset('templates/assets/images/dashboard/1.png ') }} " alt="" />
             <div class="badge-bottom"><span class="badge badge-primary">FO</span></div>
             <a href="/profil-fo">
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
                         <li class="dropdown">
                             <a href="/dashboard/profile"
                                 class="menu-title link-nav nav-link {{ Request::is('/dashboard/profile*') ? 'active' : '' }}">
                                 <i data-feather="gear"></i>
                                 <span>Profile</span>
                             </a>
                         </li>
                         <li class="sidebar-main-title">
                             <div>
                                 <h6>FO</h6>
                             </div>
                         </li>

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
                             <a href="/dashboard/anggotas" {{-- class="menu-title link-nav nav-link {{ Request::path() === '/order' ? 'active' : '' }}" --}}
                                 class="menu-title link-nav nav-link {{ Request::is('/dashboard/anggotas*') ? 'active' : '' }}">
                                 <i data-feather="users"></i>
                                 <span>Anggota</span>
                             </a>
                         </li>


                         {{-- <li class="dropdown">
                             <a href="/edit-order"
                                 class="menu-title link-nav nav-link {{ $title === 'Edit Order' ? 'active' : '' }}">
                                 <i data-feather="server"></i>
                                 <span>Edit Order</span>
                             </a>
                         </li> --}}

                         <li class=" dropdown">
                             <a href="/struktur-kredit"
                                 class="menu-title link-nav nav-link {{ $title === 'Struktur Kredit' ? 'active' : '' }}">
                                 <i data-feather="file-text"></i>
                                 <span>Struktur Kredit</span>
                             </a>
                         </li>

                         <li class="dropdown">
                             <a href="/penerimaan-uang"
                                 class="menu-title link-nav nav-link {{ $title === 'Penerimaan Uang' ? 'active' : '' }}">
                                 <i data-feather="dollar-sign"></i>
                                 <span>Penerimaan Uang</span>
                             </a>
                         </li>


                         <li class="dropdown">
                             <a href="/cetak-buku-anggota"
                                 class="menu-title link-nav nav-link {{ $title === 'Cetak Buku Anggota' ? 'active' : '' }}">
                                 <i data-feather="printer"></i>
                                 <span>Cetak Buku Anggota</span>
                             </a>
                         </li>

                         <li class="sidebar-main-title">
                             <div>
                                 <h6>Anggota</h6>
                             </div>
                         </li>

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

                         <li class="sidebar-main-title">
                             <div>
                                 <h6>Branch Manager</h6>
                             </div>
                         </li>

                         <li class="dropdown">
                             <a href="/dashboard/lap-dt-ag"
                                 class="menu-title link-nav nav-link {{ Request::is('/dashboard/lap-dt-ag*') ? 'active' : '' }}">
                                 <i data-feather="users"></i>
                                 <span>Laporan Data Anggota</span>
                             </a>
                         </li>

                         <li class="dropdown">
                             <a href="/dashboard/lap-keuangan"
                                 class="menu-title link-nav nav-link {{ Request::is('/dashboard/lap-keuangan*') ? 'active' : '' }}">
                                 <i data-feather="file-text"></i>
                                 <span>Laporan Keuangan</span>
                             </a>
                         </li>


                     </ul>
                 </div>
                 <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
             </div>
         </nav>
     </header>
     <!-- Page Sidebar Ends-->
