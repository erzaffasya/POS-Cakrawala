 <!-- LEFT MAIN SIDEBAR -->
 <div class="ec-left-sidebar ec-bg-sidebar">
    <div id="sidebar" class="sidebar ec-sidebar-footer">

        <div class="ec-brand">
            <a href="index.html" title="Ekka">
                <img class="ec-brand-icon" src="tadmin/assets/img/logo/ec-site-logo.png" alt="" />
                <span class="ec-brand-name text-truncate">Ekka</span>
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="ec-navigation" data-simplebar>
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <!-- Dashboard -->
                <li class="">
                    <a class="sidenav-item-link" href="{{url('dashboard')}}">
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

                <!-- Category -->
                {{-- <li class="has-sub {{ request()->is('subKategori*', '||', 'kategori*') ? 'active expand' : '' }} ">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Categories</span> <b class="caret"></b>
                    </a>
                    <div class="collapse {{ request()->is('subKategori*' , '||', 'kategori*') ? 'show' : '' }}">
                        <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                            <li class="{{ request()->is('kategori*') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('kategori.index')}}">
                                    <span class="nav-text">Main Category</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('subKategori*') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('subKategori.index')}}">
                                    <span class="nav-text">Sub Category</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                <!-- Products -->
                {{-- <li class="has-sub {{ request()->is('produk*') ? 'active expand' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-palette-advanced"></i>
                        <span class="nav-text">Products</span> <b class="caret"></b>
                    </a>
                    <div class="collapse {{ request()->is('produk*') ? 'show' : '' }}">
                        <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                            <li class="{{ request()->is('produk/create') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('produk.create')}}">
                                    <span class="nav-text">Add Product</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('produk') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('produk.index')}}">
                                    <span class="nav-text">List Product</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('produk-grid') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('produk-grid')}}">
                                    <span class="nav-text">Grid Product</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- Testimonial --}}
                {{-- <li class="has-sub {{ request()->is('testimonial*') ? 'active expand' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-star-half"></i>
                        <span class="nav-text">Testimonials</span> <b class="caret"></b>
                    </a>
                    <div class="collapse {{ request()->is('testimonial*') ? 'show' : '' }}">
                        <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                            <li class="{{ request()->is('testimonial/create') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('testimonial.create')}}">
                                    <span class="nav-text">Add Testimonial</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('testimonial') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('testimonial.index')}}">
                                    <span class="nav-text">List Testimonial</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- Transaksi --}}
                {{-- <li class="has-sub {{ request()->is('') ? 'active expand' : '' }}">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Orders</span> <b class="caret"></b>
                    </a>
                    <div class="collapse {{ request()->is('') ? 'show' : '' }}">
                        <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                            <li class="{{ request()->is('produk-grid') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('produk.create')}}">
                                    <span class="nav-text">Add Product</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('produk.index')}}">
                                    <span class="nav-text">List Product</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('') ? 'active' : '' }}">
                                <a class="sidenav-item-link" href="{{route('produk-grid')}}">
                                    <span class="nav-text">Grid Product</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</div>