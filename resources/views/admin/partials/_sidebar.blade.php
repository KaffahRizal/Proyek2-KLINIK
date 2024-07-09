@php
  $currentRoute = Route::current()->uri;
@endphp
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="green2">
            <a href="/" class="logo">
              <img
                src="{{asset('kaiadmin')}}/assets/img/kaiadmin/logofsks.png"
                alt="navbar brand"
                class="navbar-brand bg-white rounded-pill"
                height="40"
              />
              <p class="h2 ms-3 mt-2 text-white">Sendiri</p>
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item  @if($currentRoute == 'admin/dashboard') active @endif">
                <a
                  href="/admin/dashboard"
                  aria-expanded="false">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Faskes </h4>
              </li>
              <li class="nav-item  @if($currentRoute == 'admin/faskes') active @endif">
                <a
                  href="/admin/faskes"
                  aria-expanded="false">
                  <i class="fas fa-hospital"></i>
                  <p>Fasilitas Kesehatan</p>
                </a>
              </li>
              <li class="nav-item  @if($currentRoute == 'admin/jenis') active @endif">
                <a
                  href="/admin/jenis"
                  aria-expanded="false">
                  <i class="fas fa-star-of-life"></i>
                  <p>Jenis faskes</p>
                </a>
              </li>
              <li class="nav-item  @if($currentRoute == 'admin/kategori') active @endif">
                <a
                  href="/admin/kategori"
                  aria-expanded="false">
                  <i class="fas fa-book"></i>
                  <p>Kategori faskes</p>
                </a>
              </li>
              @if (Auth::user()->role == 'administrator')
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Lokasi</h4>
              </li>
              <li class="nav-item  @if($currentRoute == 'admin/provinsi') active @endif">
                <a
                  href="/admin/provinsi"
                  aria-expanded="false">
                  <i class="fas fa-globe"></i>
                  <p>Provinsi</p>
                </a>
              </li>
              <li class="nav-item  @if($currentRoute == 'admin/kabkota') active @endif">
                <a
                  href="/admin/kabkota"
                  aria-expanded="false">
                  <i class="fas fa-map"></i>
                  <p>Kabupaten Kota</p>
                </a>
              </li>
              @endif
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->