<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">oorbanbondowoso</a>
      </div>
      <div class="sidebar-user">
        <div class="user-name pb-2"> <i class="fa fa-user mr-2"></i> <strong style="text-transform: uppercase">{{ Auth::user()->name }}</strong></div>
        <div class="sidebar-user-details">
          <div class="user-role">
            @if ( Auth::user()->level == 'super_admin')
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
        @if ( Auth::user()->level == 'super_admin' )
        <li class="menu-header">Super Admin</li>
        <li class="">
            <div class="list-group">
                <a><i class="ion ion-person-stalker"></i>
                    <span>Pengguna</span>
                </a>
                <a href="{{ route('pengguna') }}" class="list-group-item list-group-item-action {{ request()->routeIs('pengguna') ? 'active' : '' }}" style="{{ request()->routeIs('pengguna') ? 'background-color: #f9f9f9; border: none' : '' }}"> - Admin</a>
                <a href="{{ route('user-android') }}" class="list-group-item list-group-item-action {{ request()->routeIs('user-android') ? 'active' : '' }}" style="{{ request()->routeIs('user-android') ? 'background-color: #f9f9f9; border: none' : '' }}"> - User Android</a>
            </div>
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
