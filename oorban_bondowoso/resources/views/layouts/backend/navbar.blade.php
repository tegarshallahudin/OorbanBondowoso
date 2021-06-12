<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
      <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
      </ul>
    </form>
    <ul class="navbar-nav navbar-right">
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
        <i class="ion ion-android-person d-lg-none"></i>
        <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="profile.html" class="dropdown-item has-icon">
            <i class="ion ion-android-person"></i> Profile
          </a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();"
                                class="dropdown-item has-icon">
                                <i class="ion ion-log-out"></i> {{ __('Log Out') }}
            </a>
        </form>

        </div>
      </li>
    </ul>
  </nav>
<!-- Authentication -->
{{-- <form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
</form> --}}
