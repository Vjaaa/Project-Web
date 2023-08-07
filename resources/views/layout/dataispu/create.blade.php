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
                                        <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Sistem Klasifikasi ISPU</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('data-ispu.index') }}">Data ISPU</a></li>
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
                                        <h4 class="header-title mb-4">Tambah Data Baru</h4>
                                        <form action="{{ route('data-ispu.store') }}" method="post">
                                            @csrf
                                            <div class="row justify-content-evenly">
                                                <div class="col-lg-5 col-md-5 col-sm-5">
                                                    <div class="mb-3">
                                                        <label for="pm10" class="form-label">Nilai PM<sub>10</sub></label>
                                                        <input type="number" class="input-number form-control @error('pm10') is-invalid @enderror" oninput="updateMaxValue()" name="pm10" id="pm10" value="{{ old('pm10') }}" autofocus required>
                                                        @error('pm10')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="so2" class="form-label">Nilai SO<sub>2</sub></label>
                                                        <input type="number" class="input-number form-control @error('so2') is-invalid @enderror" oninput="updateMaxValue()" name="so2" id="so2" value="{{ old('so2') }}" required>
                                                        @error('so2')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="co" class="form-label">Nilai CO</label>
                                                        <input type="number" class="input-number form-control @error('co') is-invalid @enderror" oninput="updateMaxValue()" name="co" id="co" value="{{ old('co') }}" required>
                                                        @error('co')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="o3" class="form-label">Nilai O<sub>3</sub></label>
                                                        <input type="number" class="input-number form-control @error('o3') is-invalid @enderror" oninput="updateMaxValue()" name="o3" id="o3" value="{{ old('o3') }}" required>
                                                        @error('o3')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no2" class="form-label">Nilai NO<sub>2</sub></label>
                                                        <input type="number" class="input-number form-control @error('no2') is-invalid @enderror" oninput="updateMaxValue()" name="no2" id="no2" value="{{ old('no2') }}" required>
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
                                                            <input type="text" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" value="{{ $today ?? old('tanggal') }}" placeholder="tahun-bulan-tanggal" data-date-format="yyyy-mm-dd" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true" required>
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
                                                        <input type="number" class="form-control" name="max" id="max" value="{{ old('max') }}" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="critical" class="form-label">Critical</label>
                                                        <input type="text" class="form-control" name="critical" id="critical" value="{{ old('critical') }}" readonly>
                                                    </div>
                                                </div>
                                                <input type="hidden" class="form-control" name="categori" value="">
                                                <input type="hidden" class="form-control" name="status_data" value="">
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-6 text-end">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus me-2"></i>Tambah Data</button>
                                                </div>
                                                <div class="col-6 text-start">
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
    <script>
        function updateMaxValue() {
            var inputs = document.getElementsByClassName('input-number');
            var maxValue = -Infinity;

            var pm10 = parseInt(document.getElementById('pm10').value);
            var so2 = parseInt(document.getElementById('so2').value);
            var co = parseInt(document.getElementById('co').value);
            var o3 = parseInt(document.getElementById('o3').value);
            var no2 = parseInt(document.getElementById('no2').value);
            var maxLabel = "";

            // Mencari nilai terbesar di antara semua input
            for (var i = 0; i < inputs.length; i++) {
                var inputValue = parseInt(inputs[i].value);

                // Memeriksa apakah nilai input adalah angka yang valid dan lebih besar dari nilai terbesar saat ini
                if (!isNaN(inputValue) && inputValue > maxValue) {
                    maxValue = inputValue;
                }

                // Cek label
                if (maxValue == pm10) maxLabel = "PM10";
                else if (maxValue == so2) maxLabel = "SO2";
                else if (maxValue == co) maxLabel = "CO";
                else if (maxValue == o3) maxLabel = "O3";
                else if (maxValue == no2) maxLabel = "NO2";
            }

            // Mengisi form input dengan nilai terbesar
            document.getElementById('max').value = maxValue;
            document.getElementById('critical').value = maxLabel;
        };
    </script>
</x-app>
