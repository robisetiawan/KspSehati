 <!-- Page Body Start-->
 <div class="page-body-wrapper modern-sidebar">
     <!-- Page Sidebar Start-->
     <header class="main-nav">
         <div class="sidebar-user text-center">
             <a class="setting-primary" href="/profil-fo"><i data-feather="settings"></i></a><img
                 class="img-90 rounded-circle" src="{{ asset('templates/assets/images/dashboard/1.png ') }} " alt="" />
             <div class="badge-bottom"><span class="badge badge-primary">FO</span></div>
             <a href="/profil-fo">
                 <h6 class="mt-3 f-14 f-w-600">FINANCE OFFICER</h6>
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
                                 <h6>Menu</h6>
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
                             <a href="/pooling-order"
                                 class="menu-title link-nav nav-link {{ $title === 'Pooling Order' ? 'active' : '' }}">
                                 <i data-feather="monitor"></i>
                                 <span>Pooling Order</span>
                             </a>
                         </li>

                         <li class="dropdown">
                             <a href="/order" {{-- class="menu-title link-nav nav-link {{ Request::path() === '/order' ? 'active' : '' }}" --}}
                                 class="menu-title link-nav nav-link {{ $title === 'Order' or ($title === 'Edit Order' ? 'active' : '') }}">
                                 <i data-feather="layers"></i>
                                 <span>Order</span>
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



                     </ul>
                 </div>
                 <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
             </div>
         </nav>
     </header>
     <!-- Page Sidebar Ends-->
