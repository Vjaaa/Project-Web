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
                                        <li class="breadcrumb-item"><a href="/">Sistem Klasifikasi ISPU</a></li>
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
                                @if (session()->has('success'))
                                    <div class="card alert alert-dismissible border border-dark p-0 mt-3 position-absolute" role="alert" style="left: 50%; transform: translate(-50%, -50%); z-index: 9998;">
                                        <div class="card-header bg-soft-success">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <h5 class="font-size-16 text-success my-1">Success Alert</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                <div class="mb-2">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline display-5 text-success"></i>
                                                </div>
                                                <h4 class="alert-heading font-size-18">Berhasil!</h4>
                                                <span>{{ session('success') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (session()->has('error'))
                                    <div class="card alert alert-dismissible border border-dark p-0 mt-3 position-absolute" role="alert" style="left: 50%; transform: translate(-50%, -50%); z-index: 9998;">
                                        <div class="card-header bg-soft-danger">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <h5 class="font-size-16 text-danger my-1">Danger Alert</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                <div class="mb-2">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline display-5 text-danger"></i>
                                                </div>
                                                <h4 class="alert-heading font-size-18">Gagal!</h4>
                                                <span>{{ session('error') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Latih Data Baru</h4>
                                        <p class="card-title-desc">Latih data baru dengan cara mengupload file ke dalam kotak yang disediakan untuk dijadikan sebagai data latih.</p>
                                        <form action="{{ route('latih-data.store') }}" method="post" enctype="multipart/form-data" id="upload-file" class="dropzone" style="border: 2px dashed #ced4da;">
                                            @csrf
                                            <div class="fallback">
                                                <input name="file" type="file">
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
