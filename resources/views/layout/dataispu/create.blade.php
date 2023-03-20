<x-app title="Tambah Data">
    <x-preloader />
    <div id="layout-wrapper">
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
                                        <form action="{{ route('data-ispu.store') }}" method="post">
                                            @csrf
                                            <div class="row justify-content-evenly">
                                                <div class="col-lg-5 col-md-5 col-sm-5">
                                                    <div class="mb-3">
                                                        <label for="pm10" class="form-label">Nilai PM<sub>10</sub></label>
                                                        <input type="number" class="form-control @error('pm10') is-invalid @enderror" name="pm10" id="pm10" value="{{ old('pm10') }}" required>
                                                        @error('pm10')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="so2" class="form-label">Nilai SO<sub>2</sub></label>
                                                        <input type="number" class="form-control @error('so2') is-invalid @enderror" name="so2" id="so2" value="{{ old('so2') }}" required>
                                                        @error('so2')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="co" class="form-label">Nilai CO</label>
                                                        <input type="number" class="form-control @error('co') is-invalid @enderror" name="co" id="co" value="{{ old('co') }}" required>
                                                        @error('co')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="o3" class="form-label">Nilai O<sub>3</sub></label>
                                                        <input type="number" class="form-control @error('o3') is-invalid @enderror" name="o3" id="o3" value="{{ old('o3') }}" required>
                                                        @error('o3')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no2" class="form-label">Nilai NO<sub>2</sub></label>
                                                        <input type="number" class="form-control @error('no2') is-invalid @enderror" name="no2" id="no2" value="{{ old('no2') }}" required>
                                                        @error('no2')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-5">
                                                    <div class="mb-3">
                                                        <label for="tanggal" class="form-label">Tanggal</label>
                                                        <div class="input-group" id="datepicker2">
                                                            <input type="text" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" value="{{ old('tanggal') }}" placeholder="tahun-bulan-tanggal" data-date-format="yyyy-mm-dd" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true" required>
                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                            @error('tanggal')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="lokasi" class="form-label">Lokasi</label>
                                                        <select class="form-select @error('lokasi') is-invalid @enderror" name="lokasi" id="lokasi" required>
                                                            <option disabled value="" selected>Pilih Lokasi</option>
                                                            <optgroup label="Lokasi Pengambilan Data">
                                                                <option value="DKI1">DKI1</option>
                                                                <option value="DKI2">DKI2</option>
                                                                <option value="DKI3">DKI3</option>
                                                                <option value="DKI4">DKI4</option>
                                                                <option value="DKI5">DKI5</option>
                                                            </optgroup>
                                                        </select>
                                                        @error('lokasi')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="max" class="form-label">Max</label>
                                                        <input type="number" class="form-control" name="max" id="max" value="0" readonly required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="critical" class="form-label">Critical</label>
                                                        <input type="text" class="form-control" name="critical" id="critical" value="PM10" placeholder="PM10" readonly required>
                                                    </div>
                                                </div>
                                                <input type="hidden" class="form-control" name="categori" value="">
                                                <input type="hidden" class="form-control" name="status_data" value="">
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-6 col-md-6 col-sm-6 text-end">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus me-2"></i>Tambah Data</button>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 text-start">
                                                    <a href="{{ route('data-ispu.index') }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-subdirectory-arrow-left me-2"></i>Kembali</a>
                                                </div>
                                            </div>
                                        </form>
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
    </div>
</x-app>
