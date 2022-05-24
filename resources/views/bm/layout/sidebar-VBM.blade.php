 <!-- Page Body Start-->
 <div class="page-body-wrapper modern-sidebar">
     <!-- Page Sidebar Start-->
     <header class="main-nav">
         <div class="sidebar-user text-center">
             <a class="setting-primary" href="/profil-fo"><i data-feather="settings"></i></a><img
                 class="img-90 rounded-circle" src="{{ asset('templates/assets/images/dashboard/1.png ') }} " alt="" />
             <div class="badge-bottom"><span class="badge badge-primary">BM</span></div>
             <a href="/profil-fo">
                 <h6 class="mt-3 f-14 f-w-600">BRANCH MANAGER</h6>
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

                         <li class="dropdown">
                             <a href="/lap-dt-ag"
                                 class="menu-title link-nav nav-link {{ $title === 'Dashboard' ? 'active' : '' }}">
                                 <i data-feather="users"></i>
                                 <span>Laporan Data Anggota</span>
                             </a>
                         </li>

                         <li class="dropdown">
                             <a href="/lap-keuangan"
                                 class="menu-title link-nav nav-link {{ $title === 'Order' ? 'active' : '' }}">
                                 <i data-feather="book"></i>
                                 <span>Laporan Keuangan</span>
                             </a>
                         </li>

                         <li class="dropdown">
                             <a href="/profil-ag"
                                 class="menu-title link-nav nav-link {{ $title === 'Edit Order' ? 'active' : '' }}">
                                 <i data-feather="settings"></i>
                                 <span>Setting</span>
                             </a>
                         </li>


                     </ul>
                 </div>
                 <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
             </div>
         </nav>
     </header>
     <!-- Page Sidebar Ends-->
