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
             <div class="main-header-left ">

                 <div class="logo-wrapper"><a href="/pooling-order"><img class="img-fluid"
                             src="{{ asset('templates/assets/images/logo/logo-sehati.png ') }}"></a>
                 </div>

                 <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center"
                         id="sidebar-toggle"> </i></div>
             </div>

             <div class="nav-right col pull-right right-menu p-0">
                 <ul class="nav-menus">
                     <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                 data-feather="maximize"></i></a></li>

                     <li class="dropdown-basic">
                         <div class="dropdown">
                             <button class="dropbtn btn btn-primary btn-sm" type="button">
                                 {{ auth()->user()->name }} <span><i class="fa fa-angle-down"
                                         aria-hidden="true"></i></span>
                             </button>
                             <div class="dropdown-content">
                                 <a href="/dashboard/profile"><i class="fa fa-user" aria-hidden="true"></i>
                                     Profile</a>
                                 <a href="/dashboard/setting"><i class="fa fa-cog" aria-hidden="true"></i>
                                     Setting</a>
                                 <a href="#">
                                     <form action="/logout" method="POST" class="text-center">@csrf
                                         <button class="btn btn-primary-light btn-sm" type="submit"><i
                                                 class="fa fa-sign-out" aria-hidden="true"></i> Log
                                             out</button>
                                     </form>
                                 </a>
                             </div>
                         </div>
                     </li>

                     {{-- <li class="onhover-dropdown p-0">

                         <form action="/logout" method="POST">
                             @csrf
                             <button class="btn btn-primary-light" type="submit"><i data-feather="log-out"></i>Log
                                 out</button>
                         </form>
                     </li> --}}

                 </ul>
             </div>
             <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
         </div>
     </div>
     <!-- Page Header Ends -->
