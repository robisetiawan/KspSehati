 <!-- Loader starts-->
 <div class="loader-wrapper">
     <div class="theme-loader"></div>
 </div>
 <!-- Loader ends-->
 <!-- page-wrapper Start-->
 <div class="page-wrapper compact-wrapper modern-sidebar" id="pageWrapper">
     <!-- Page Header Start-->
     <div class="page-main-header">
         <div class="main-header-right row m-0">
             <div class="main-header-left">
                 <div class="logo-wrapper"><a href="#"><img class="img-fluid"
                             src="{{ asset('templates/assets/images/logo/logo-sehati.png ') }}"></div>
                 <div class="dark-logo-wrapper"><a href="{{ asset('templates/dashboard ') }}"><img
                             class="img-fluid" src="{{ asset('templates/assets/images/logo/logo-sehati.png ') }}"
                             alt="" width="150"></a>
                 </div>
                 <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center"
                         id="sidebar-toggle"> </i></div>
             </div>
             <div class="left-menu-header col">
                 <ul>
                     <li>
                         <form class="form-inline search-form">
                             <div class="search-bg"><i class="fa fa-search"></i>
                                 <input class="form-control-plaintext" placeholder="Search here.....">
                             </div>
                         </form>
                         <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
                     </li>
                 </ul>
             </div>
             <div class="nav-right col pull-right right-menu p-0">
                 <ul class="nav-menus">
                     <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                 data-feather="maximize"></i></a></li>

                     <li class="onhover-dropdown p-0">
                         <button class="btn btn-primary-light" type="button"><i data-feather="log-out"></i>Log
                             out</button>
                     </li>
                 </ul>
             </div>
             <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
         </div>
     </div>
     <!-- Page Header Ends -->
