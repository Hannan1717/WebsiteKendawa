      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div class="sidebar-brand-text mx-3">Kendawa Admin </div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item {{ request()->is('admin/pejabat') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pejabat.index') }}">
               <i class="fa-solid fa-person fa-2xl"></i>
               <span>Perangkat Desa</span>
            </a>
         </li>
         <li class="nav-item {{ request()->is('admin/umkm') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('umkm.index') }}">
               <i class="fa-solid fa-cart-shopping fa-2xl"></i>
               <span>UMKM</span></a>
         </li>


         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

      </ul>
      <!-- End of Sidebar -->
