<x-app title="Latih Data">
    @push('dropzone-css')
        <link href="{{ asset('assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    @endpush
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
                                    <h4>Latih Data ISPU</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Sistem Klasifikasi ISPU</a></li>
                                        <li class="breadcrumb-item active">Latih Data ISPU</li>
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <h4 class="header-title">Latih Data Baru</h4>
                                                <p class="card-title-desc">Silahkan upload file <code>.csv</code> ke dalam kotak yang disediakan untuk dijadikan data latih baru.</p>
                                            </div>
                                            <div class="col-4">
                                                <div class="text-end">
                                                    <a href="{{ route('latih-data.download') }}" class="btn btn-secondary waves-effect waves-light"><i class="mdi mdi-file-download-outline me-2"></i>Download Template CSV</a>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ route('latih-data.store') }}" method="post" enctype="multipart/form-data" id="upload-file" class="dropzone" style="border: 2px dashed #ced4da;">
                                            @csrf
                                            <div class="fallback">
                                                <input type="file" id="file" name="file" accept=".csv">
                                            </div>
                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted mdi mdi-cloud-upload-outline"></i>
                                                </div>
                                                <h4>Seret dan Masukkan file kesini atau klik kotak untuk memilih file</h4>
                                            </div>
                                        </form>
                                        <div class="text-center mt-3">
                                            <button type="submit" id="submit" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-file-upload-outline me-2"></i>Tambah Data Latih Baru</button>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- End Page-content -->
            <x-footer />
        </div>
    </div>
    @push('dropzone-js')
        <script src="{{ asset('assets/libs/dropzone/min/dropzone.min.js') }}"></script>
        <script>
            Dropzone.autoDiscover = false;
            $(document).ready(function() {
                var excelDropzone = new Dropzone("#upload-file", {
                    acceptedFiles: ".csv",
                    addRemoveLinks: true,
                    autoProcessQueue: false,
                    dictRemoveFile: "Hapus file",
                    maxFiles: 20,
                    maxFilesize: 102400,
                    parallelUploads: 20,
                    paramName: "file",
                    url: "{{ route('latih-data.store') }}",
                });

                $("#submit").on("click", function() {
                    excelDropzone.processQueue();
                });
            });
        </script>
    @endpush
</x-app>
