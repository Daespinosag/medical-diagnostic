<header id="header" >
    <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
            <ul class="header-nav header-nav-options">
                <li class="header-nav-brand" >
                    <div class="brand-holder">
                        <a href="{{ route('public.index') }}">
                            <span class="text-lg text-bold text-primary">Geriatría y Gerontología</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="headerbar-right">
            @if(! Auth::guest())
                    <ul class="header-nav header-nav-profile">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                                <img src="{{ asset('assets/img/avatar1.jpg') }}" alt="" />
                                <span class="profile-info">
                                    {{ Auth::user()->name }}
                                    <small>*********</small>
                                </span>
                            </a>
                            <ul class="dropdown-menu animation-dock">
                                <li>
                                    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-fw fa-power-off text-danger"></i> Logout
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul><!--end .dropdown-menu -->
                        </li><!--end .dropdown -->
                    </ul><!--end .header-nav-profile -->
            @else
                <ul class="header-nav header-nav-profile">
                    <li>
                        <a href="{{ url('/login') }}" class="btn btn-raised btn-primary">
                            <i class="md-account-circle"></i> login
                        </a>
                    </li>
                </ul>
            @endif
        </div><!--end #header-navbar-collapse -->
    </div>
</header>
<!-- END HEADER-->