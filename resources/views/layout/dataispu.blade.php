<x-app title="Data ISPU">
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
                                    <li class="breadcrumb-item"><a href="/">Sistem Klasifikasi ISPU</a></li>
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="pb-2">
                                        <a href="/data-ispu/tambah-data">
                                            <button type="button" class="btn btn-success waves-effect waves-light">
                                                <i class="mdi mdi-plus me-2"></i>Tambah Data Baru
                                            </button>
                                        </a>
                                    </div>
                                    <div class="pt-3">
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive display nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Tanggal</th>
                                                    <th>PM10</th>
                                                    <th>SO2</th>
                                                    <th>CO</th>
                                                    <th>O3</th>
                                                    <th>NO2</th>
                                                    <th>Max</th>
                                                    <th>Critical</th>
                                                    <th>Kategori</th>
                                                    <th>Lokasi</th>
                                                    <th>Status Data</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-secondary">
                                                <tr>
                                                    <td>1</td>
                                                    <td>2011/04/25</td>
                                                    <td>100</td>
                                                    <td>200</td>
                                                    <td>300</td>
                                                    <td>400</td>
                                                    <td>500</td>
                                                    <td>500</td>
                                                    <td>NO2</td>
                                                    <td>Baik</td>
                                                    <td>DKI_4</td>
                                                    <td>Data Latih</td>
                                                    <td id="tooltip-container0">
                                                        <a href="javascript:void(0);" class="mx-1 text-primary" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="ms-2 text-danger" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>2011/04/25</td>
                                                    <td>200</td>
                                                    <td>300</td>
                                                    <td>400</td>
                                                    <td>500</td>
                                                    <td>100</td>
                                                    <td>500</td>
                                                    <td>O3</td>
                                                    <td>Sedang</td>
                                                    <td>DKI_4</td>
                                                    <td>Data Latih</td>
                                                    <td id="tooltip-container1">
                                                        <a href="javascript:void(0);" class="mx-1 text-primary" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="ms-2 text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>2011/04/25</td>
                                                    <td>300</td>
                                                    <td>400</td>
                                                    <td>500</td>
                                                    <td>100</td>
                                                    <td>200</td>
                                                    <td>500</td>
                                                    <td>CO</td>
                                                    <td>Tidak Sehat</td>
                                                    <td>DKI_4</td>
                                                    <td>Data Latih</td>
                                                    <td id="tooltip-container2">
                                                        <a href="javascript:void(0);" class="mx-1 text-primary" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="ms-2 text-danger" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>2011/04/25</td>
                                                    <td>400</td>
                                                    <td>500</td>
                                                    <td>100</td>
                                                    <td>200</td>
                                                    <td>300</td>
                                                    <td>500</td>
                                                    <td>SO2</td>
                                                    <td>Sangat Tidak Sehat</td>
                                                    <td>DKI_4</td>
                                                    <td>Data Latih</td>
                                                    <td id="tooltip-container3">
                                                        <a href="javascript:void(0);" class="mx-1 text-primary" data-bs-container="#tooltip-container3" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="ms-2 text-danger" data-bs-container="#tooltip-container3" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>2011/04/25</td>
                                                    <td>500</td>
                                                    <td>100</td>
                                                    <td>200</td>
                                                    <td>300</td>
                                                    <td>400</td>
                                                    <td>500</td>
                                                    <td>PM10</td>
                                                    <td>Berbahaya</td>
                                                    <td>DKI_4</td>
                                                    <td>Data Latih</td>
                                                    <td id="tooltip-container4">
                                                        <a href="javascript:void(0);" class="mx-1 text-primary" data-bs-container="#tooltip-container4" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="ms-2 text-danger" data-bs-container="#tooltip-container4" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>2011/04/25</td>
                                                    <td>500</td>
                                                    <td>100</td>
                                                    <td>200</td>
                                                    <td>300</td>
                                                    <td>400</td>
                                                    <td>500</td>
                                                    <td>PM10</td>
                                                    <td>Berbahaya</td>
                                                    <td>DKI_4</td>
                                                    <td>Data Latih</td>
                                                    <td id="tooltip-container5">
                                                        <a href="javascript:void(0);" class="mx-1 text-primary" data-bs-container="#tooltip-container5" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="ms-2 text-danger" data-bs-container="#tooltip-container5" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                    </td>
                                                </tr>
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
</x-app>
