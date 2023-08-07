<div class="vertical-menu">
    <div data-simplebar class="h-100">
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
