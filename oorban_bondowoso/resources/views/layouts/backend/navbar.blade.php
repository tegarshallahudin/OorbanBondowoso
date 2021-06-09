<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="index.html">
                <!-- Logo icon image, you can use font-icon also --><b>
                <!--This is dark logo icon--><img src="{{ asset('backend/plugins/images/admin-logo.png') }}" alt="home" class="dark-logo" />
                <!--This is light logo icon--><img width='150' src="{{ asset('backend/plugins/images/oorbanbondowoso.png') }}" alt="home" class="light-logo" />
             </b>
                {{-- <!-- Logo text image you can use text also --><span class="hidden-xs">
                <!--This is dark logo text--><img src="{{ asset('backend/plugins/images/admin-text.png') }}" alt="home" class="dark-logo" />
                <!--This is light logo text--><img src="{{ asset('backend/plugins/images/admin-text-dark.png') }}" alt="home" class="light-logo" /> --}}
             </span> </a>
        </div>
        <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right">
        <li>
            <form method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="dropdown">
                <a class="profile-pic dropdown-toggle" href="#" data-toggle="dropdown"> <img src="{{ asset('backend/plugins/images/users/varun.jpg') }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b></a>
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#">Akun</a>
                </li>
                    <!-- Authentication -->
                    <li>

                        <a href=" {{ route('logout') }} "  onclick="event.preventDefault();this.closest('form').submit();">Keluar</a>
                    </li>
                </ul>
              </div>
            </form>
            </li>
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
