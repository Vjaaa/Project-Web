<x-app title="Data ISPU">
    <x-preloader />
    <div id="layout-wrapper">
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
                                    <h4>Data ISPU</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Sistem Klasifikasi ISPU</a></li>
                                        <li class="breadcrumb-item active">Data ISPU</li>
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
                                        @if ($dataIspus->isEmpty())
                                            <div>
                                                <button type="button" class="btn btn-success waves-effect waves-light" disabled>
                                                    <i class="mdi mdi-plus me-2"></i>Tambah Data Baru
                                                </button>
                                                <p class="text-danger" style="margin-bottom: 0">*Silahkan upload file <code>.csv</code> terlebih dahulu pada menu latih data ISPU jika data ISPU masih kosong.</p>
                                            </div>
                                        @else
                                            <div class="pb-2">
                                                <a href="{{ route('data-ispu.create') }}">
                                                    <button type="button" class="btn btn-success waves-effect waves-light">
                                                        <i class="mdi mdi-plus me-2"></i>Tambah Data Baru
                                                    </button>
                                                </a>
                                            </div>
                                        @endif
                                        <div class="pt-3">
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive display nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Tanggal</th>
                                                        <th>PM<sub>10</sub></th>
                                                        <th>SO<sub>2</sub></th>
                                                        <th>CO</th>
                                                        <th>O<sub>3</sub></th>
                                                        <th>NO<sub>2</sub></th>
                                                        <th>Max</th>
                                                        <th>Critical</th>
                                                        <th>Kategori</th>
                                                        <th>Lokasi</th>
                                                        <th>Status Data</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-secondary">
                                                    @foreach ($dataIspus as $i => $dataIspu)
                                                        <tr>
                                                            <td>{{ $i + 1 }}.</td>
                                                            <td>{{ $dataIspu->tanggal }}</td>
                                                            <td>{{ $dataIspu->pm10 }}</td>
                                                            <td>{{ $dataIspu->so2 }}</td>
                                                            <td>{{ $dataIspu->co }}</td>
                                                            <td>{{ $dataIspu->o3 }}</td>
                                                            <td>{{ $dataIspu->no2 }}</td>
                                                            <td>{{ $dataIspu->max }}</td>
                                                            <td>{{ $dataIspu->critical }}</td>
                                                            <td>{{ $dataIspu->categori }}</td>
                                                            <td>{{ $dataIspu->lokasi }}</td>
                                                            <td>{{ $dataIspu->status_data }}</td>
                                                            <td class="d-flex">
                                                                @if ($dataIspu->status_data == 'Data Latih')
                                                                    <form action="{{ route('data-ispu.destroy', $dataIspu) }}" method="post">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <button type="submit" class="me-1 text-danger" style="border: none; background: none; line-height: normal;">
                                                                            <i class="mdi mdi-trash-can font-size-18"></i>
                                                                        </button>
                                                                    </form>
                                                                @else
                                                                    <a href="{{ route('data-ispu.edit', $dataIspu) }}">
                                                                        <button type="button" class="me-1 text-primary" style="border: none; background: none; line-height: normal;">
                                                                            <i class="mdi mdi-pencil font-size-18"></i>
                                                                        </button>
                                                                    </a>
                                                                    <form action="{{ route('data-ispu.destroy', $dataIspu) }}" method="post">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <button type="submit" class="ms-1 text-danger" style="border: none; background: none; line-height: normal;">
                                                                            <i class="mdi mdi-trash-can font-size-18"></i>
                                                                        </button>
                                                                    </form>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    @if (session()->has('success'))
        @push('sweet-alert')
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    setTimeout(function() {
                        // Tampilkan SweetAlert setelah preload selesai
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "{{ session('success') }}",
                            showConfirmButton: false,
                            timer: 2000,
                            heightAuto: false,
                        });
                    }, 2000);
                });
            </script>
        @endpush
    @endif
</x-app>
