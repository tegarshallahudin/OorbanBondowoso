<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
        </div>
        <ul class="nav" id="side-menu">
            @if (Auth::user()->level == 'super_admin')
            <li style="padding: 70px 0 0;">
                <a href="{{ route('dashboard') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('pengguna') }}" class="waves-effect {{ request()->routeIs('pengguna') ? 'active' : '' }} "><i class="fa fa-user fa-fw" aria-hidden="true"></i>Pengguna</a>
            </li>
            <li>
                <a href="{{ route('properti') }}" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Properti</a>
            </li>
            <li>
                <a href="{{ route('transaksi') }}" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Transaksi</a>
            </li>
            @endif
            @if (Auth::user()->level == 'admin')
            <li style="padding: 70px 0 0;">
                <a href="{{ route('dashboard') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('properti') }}" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Properti</a>
            </li>
            <li>
                <a href="{{ route('transaksi') }}" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Transaksi</a>
            </li>
            @endif

        </ul>
    </div>

</div>
