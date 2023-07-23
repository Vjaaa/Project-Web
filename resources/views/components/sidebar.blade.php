<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" alt="" class="rounded-circle">
                    <span class="avatar-online bg-success"></span>
                </div>
                <div class="user-info">
                    <h5 class="mt-3 font-size-16 text-white">{{ auth()->user()->nama }}</h5>
                    <span class="font-size-13 text-white-50">{{ auth()->user()->role }}</span>
                </div>
            </div>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('beranda') }}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span>Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-ispu.index') }}" class="waves-effect">
                        <i class="dripicons-archive"></i>
                        <span>Data ISPU</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('latih-data.index') }}" class="waves-effect">
                        <i class="dripicons-upload"></i>
                        <span>Latih Data ISPU</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('perhitungan.index') }}" class="waves-effect">
                        <i class="dripicons-graph-bar"></i>
                        <span>Perhitungan</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
