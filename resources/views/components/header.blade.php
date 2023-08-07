<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('beranda') }}" class="logo logo-light text-start">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="32">
                    </span>
                </a>
            </div>
            <!-- end LOGO -->
        </div>
        <div class="d-flex">
            @auth
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/avatar-blank.png') }}" alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1">{{ auth()->user()->nama }}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <form action="{{ route('login.logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger" href="#"><i class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> Logout</button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</header>
