<x-app title="Tambah Data">
    <x-header />
    <x-sidebar />
    <div class="main-content">
        <div class="page-content">
            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Tambah Data ISPU</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Sistem Klasifikasi ISPU</a></li>
                                    <li class="breadcrumb-item active">Tambah Data ISPU</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- start container-fluid -->
            <div class="container-fluid">
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Tambah Data Baru</h4>
                                    <p class="card-title-desc">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p>
                                    <div class="row mb-3">
                                        <label for="date-input" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10 input-group" id="datepicker2" style="width: 83.3333333333%">
                                            <input type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="value-pm10" class="col-sm-2 col-form-label">Nilai PM<sub>10</sub></label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="value-pm10" value="0" name="demo_vertical">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="value-so2" class="col-sm-2 col-form-label">Nilai SO<sub>2</sub></label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="value-so2" value="0" name="demo_vertical">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="value-co" class="col-sm-2 col-form-label">Nilai CO</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="value-co" value="0" name="demo_vertical">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="value-o3" class="col-sm-2 col-form-label">Nilai O<sub>3</sub></label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="value-o3" value="0" name="demo_vertical">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="value-no2" class="col-sm-2 col-form-label">Nilai NO<sub>2</sub></label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="value-no2" value="0" name="demo_vertical">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="value-max" class="col-sm-2 col-form-label">Max</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="value-max" value="0" disabled>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="critical-input" class="col-sm-2 col-form-label">Critical</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="PM10" id="critical-input" disabled>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="lokasi-input" class="col-sm-2 col-form-label">Lokasi</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lokasi-input">
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-6 text-end">
                                            <button type="submit" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus me-2"></i>Tambah Data</button>
                                        </div>
                                        <div class="col-sm-6 text-start">
                                            <a href="/data-ispu">
                                                <button type="reset" class="btn btn-danger waves-effect waves-light">
                                                    <i class="mdi mdi-subdirectory-arrow-left me-2"></i>Kembali
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- End Page-content -->
        <x-footer />
    </div>
</x-app>
