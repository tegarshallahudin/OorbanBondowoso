<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">oorbanbondowoso</a>
      </div>
      <div class="sidebar-user">
        <div class="sidebar-user-picture">
          <img alt="image" src="{{ asset('backend/assets/img/avatar/avatar-1.jpeg') }}">
        </div>
        <div class="sidebar-user-details">
          <div class="user-name">{{ Auth::user()->name }}</div>
          <div class="user-role">
            @if ( Auth::user()->level = 'super_admin')
                Super Admin
            @else
                Admin
            @endif
          </div>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="active">
          <a href=" {{ route('dashboard') }} "><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
        </li>
        @if ( Auth::user()->level = 'super_admin' )
        <li class="menu-header">Super Admin</li>
        <li class="{{ request()->routeIs('pengguna') ? 'active' : '' }}">
            <a href=" {{ route('pengguna') }} "><i class="ion ion-person-stalker"></i><span>Pengguna</span></a>
        </li>
        <li class="{{ request()->routeIs('properti') ? 'active' : '' }}">
            <a href="{{ route('properti') }} "><i class="ion ion-ios-box"></i><span>Properti</span></a>
        </li>
        <li  class="{{ request()->routeIs('transaksi') ? 'active' : '' }}">
            <a href="{{ route('transaksi') }}"><i class="ion ion-ios-cart"></i><span>Transaksi Properti</span></a>
        </li>
        @else
        <li class="menu-header">Admin</li>
        <li class="{{ request()->routeIs('properti') ? 'active' : '' }}">
            <a href="{{ route('properti') }} "><i class="ion ion-ios-box"></i><span>Properti</span></a>
        </li>
        <li  class="{{ request()->routeIs('transaksi') ? 'active' : '' }}">
            <a href="{{ route('transaksi') }}"><i class="ion ion-ios-cart"></i><span>Transaksi Properti</span></a>
        </li>
        @endif
    </aside>
  </div>
