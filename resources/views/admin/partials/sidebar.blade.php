 <!-- LEFT MAIN SIDEBAR -->
 <div class="ec-left-sidebar ec-bg-sidebar">
     <div id="sidebar" class="sidebar ec-sidebar-footer">

         <div class="ec-brand">
             <a href="{{ url('dashboard') }}" title="Ekka">
                 <img class="ec-brand-icon" src="tadmin/assets/img/logo/ec-site-logo.png" alt="" />
                 <span class="ec-brand-name text-truncate">Cakrawala</span>
             </a>
         </div>

         <!-- begin sidebar scrollbar -->
         <div class="ec-navigation" data-simplebar>
             <!-- sidebar menu -->
             <ul class="nav sidebar-inner" id="sidebar-menu">
                 <!-- Dashboard -->
                 <li class="">
                     <a class="sidenav-item-link" href="{{ url('dashboard') }}">
                         <i class="mdi mdi-view-dashboard-outline"></i>
                         <span class="nav-text">Dashboard</span>
                     </a>
                     <hr>
                 </li>

                 <!-- Vendors -->
                 <li class="has-sub">
                     <a class="sidenav-item-link" href="javascript:void(0)">
                         <i class="mdi mdi-account-group-outline"></i>
                         <span class="nav-text">Vendors</span> <b class="caret"></b>
                     </a>
                     <div class="collapse">
                         <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
                             <li class="">
                                 <a class="sidenav-item-link" href="vendor-card.html">
                                     <span class="nav-text">Vendor Grid</span>
                                 </a>
                             </li>

                             <li class="">
                                 <a class="sidenav-item-link" href="vendor-list.html">
                                     <span class="nav-text">Vendor List</span>
                                 </a>
                             </li>
                             <li class="">
                                 <a class="sidenav-item-link" href="vendor-profile.html">
                                     <span class="nav-text">Vendors Profile</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>

                 <!-- Users -->
                 <li class="has-sub">
                     <a class="sidenav-item-link" href="javascript:void(0)">
                         <i class="mdi mdi-account-group"></i>
                         <span class="nav-text">Users</span> <b class="caret"></b>
                     </a>
                     <div class="collapse">
                         <ul class="sub-menu" id="users" data-parent="#sidebar-menu">
                             <li>
                                 <a class="sidenav-item-link" href="user-card.html">
                                     <span class="nav-text">User Grid</span>
                                 </a>
                             </li>

                             <li class="">
                                 <a class="sidenav-item-link" href="user-list.html">
                                     <span class="nav-text">User List</span>
                                 </a>
                             </li>
                             <li class="">
                                 <a class="sidenav-item-link" href="user-profile.html">
                                     <span class="nav-text">Users Profile</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                     <hr>
                 </li>

                 {{-- Pelanggan --}}
                 <li class="has-sub {{ request()->is('pelanggan*') ? 'active expand' : '' }}">
                     <a class="sidenav-item-link" href="javascript:void(0)">
                         <i class="mdi mdi-contacts"></i>
                         <span class="nav-text">Pelanggan</span> <b class="caret"></b>
                     </a>
                     <div class="collapse {{ request()->is('pelanggan*') ? 'show' : '' }}">
                         <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                             <li class="{{ request()->is('pelanggan/create') ? 'active' : '' }}">
                                 <a class="sidenav-item-link" href="{{ route('pelanggan.create') }}">
                                     <span class="nav-text">Tambah Pelanggan</span>
                                 </a>
                             </li>
                             <li class="{{ request()->is('pelanggan') ? 'active' : '' }}">
                                 <a class="sidenav-item-link {{ request()->is('pelanggan') ? 'active' : '' }}"
                                     href="{{ route('pelanggan.index') }}">
                                     <span class="nav-text">Data Pelanggan</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>

                 <!-- Products -->
                 <li class="has-sub {{ request()->is('produk*') ? 'active expand' : '' }}">
                     <a class="sidenav-item-link" href="javascript:void(0)">
                         <i class="mdi mdi-package-variant-closed"></i>
                         <span class="nav-text">Produk</span> <b class="caret"></b>
                     </a>
                     <div class="collapse {{ request()->is('produk*') ? 'show' : '' }}">
                         <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                             <li class="{{ request()->is('produk/create') ? 'active' : '' }}">
                                 <a class="sidenav-item-link" href="{{ route('produk.create') }}">
                                     <span class="nav-text">Tambah Produk</span>
                                 </a>
                             </li>
                             <li class="{{ request()->is('produk') ? 'active' : '' }}">
                                 <a class="sidenav-item-link" href="{{ route('produk.index') }}">
                                     <span class="nav-text">Data Produk</span>
                                 </a>
                             </li>
                             <li class="{{ request()->is('produk-grid') ? 'active' : '' }}">
                                 <a class="sidenav-item-link" href="{{ route('produk-grid') }}">
                                     <span class="nav-text">Grid Produk</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>

                 {{-- Penjualan --}}
                 <li class="has-sub {{ request()->is('penjualan*') ? 'active expand' : '' }}">
                     <a class="sidenav-item-link" href="javascript:void(0)">
                         <i class="mdi mdi-package-up"></i>
                         <span class="nav-text">Penjualan</span> <b class="caret"></b>
                     </a>
                     <div class="collapse {{ request()->is('penjualan*') ? 'show' : '' }}">
                         <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                             <li class="{{ request()->is('penjualan/create') ? 'active' : '' }}">
                                 <a class="sidenav-item-link" href="{{ route('penjualan.create') }}">
                                     <span class="nav-text">Tambah Penjualan</span>
                                 </a>
                             </li>
                             <li class="{{ request()->is('penjualan') ? 'active' : '' }}">
                                 <a class="sidenav-item-link" href="{{ route('penjualan.index') }}">
                                     <span class="nav-text">Data Penjualan</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>

                 {{-- Pembelian --}}
                 <li class="has-sub {{ request()->is('pembelian*') ? 'active expand' : '' }}">
                     <a class="sidenav-item-link" href="javascript:void(0)">
                         <i class="mdi mdi-package-down"></i>
                         <span class="nav-text">Pembelian</span> <b class="caret"></b>
                     </a>
                     <div class="collapse {{ request()->is('pembelian*') ? 'show' : '' }}">
                         <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                             <li class="{{ request()->is('pembelian/create') ? 'active' : '' }}">
                                 <a class="sidenav-item-link" href="">
                                     <span class="nav-text">Tambah Pembelian</span>
                                 </a>
                             </li>
                             <li class="{{ request()->is('pembelian') ? 'active' : '' }}">
                                 <a class="sidenav-item-link" href="">
                                     <span class="nav-text">Data Pembelian</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>

                 {{-- Surat Jalan --}}
                 {{-- <li class="has-sub {{ request()->is('suratjalan*') ? 'active expand' : '' }}">
                     <a class="sidenav-item-link" href="javascript:void(0)">
                         <i class="mdi mdi-file-document-box-multiple"></i>
                         <span class="nav-text">Surat Jalan</span> <b class="caret"></b>
                     </a>
                     <div class="collapse {{ request()->is('suratjalan*') ? 'show' : '' }}">
                         <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                             <li class="{{ request()->is('suratjalan/create') ? 'active' : '' }}">
                                 <a class="sidenav-item-link" href="{{ route('suratjalan.create') }}">
                                     <span class="nav-text">Tambah Surat Jalan</span>
                                 </a>
                             </li>
                             <li class="{{ request()->is('suratjalan') ? 'active' : '' }}">
                                 <a class="sidenav-item-link" href="{{ route('suratjalan.index') }}">
                                     <span class="nav-text">Data Surat Jalan</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li> --}}
             </ul>
         </div>
     </div>
 </div>
