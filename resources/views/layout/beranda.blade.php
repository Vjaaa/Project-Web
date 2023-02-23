<x-app title="Beranda">
    <x-header />
    <x-sidebar />
    <div class="main-content">
        <!-- Start Page-content -->
        <div class="page-content">
            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Beranda</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/">Sistem Klasifikasi ISPU</a></li>
                                    <li class="breadcrumb-item active">Beranda</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- start content -->
            <div class="container-fluid">
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Status ISPU</h4>
                                    <p class="card-title-desc">Status ISPU saat ini adalah <strong><ins>Sedang</ins></strong>.</p>
                                    <div class="text-center" dir="ltr">
                                        <input data-plugin="knob" data-width="180" data-height="180" data-linecap=round data-fgColor="#846eff" value="33" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                    </div>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Parameter ISPU</h4>
                                    <div id="column_chart" class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content -->
        </div>
        <!-- End Page-content -->
        <x-footer />
    </div>
    @push('chart-js')
        <!-- apexcharts -->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <!-- apexcharts -->
        <script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
    @endpush
    @push('demo-js')
        <script src="{{ asset('assets/js/pages/apexcharts.init.js') }}"></script>
        <script src="{{ asset('assets/js/pages/jquery-knob.init.js') }}"></script>
    @endpush
</x-app>
