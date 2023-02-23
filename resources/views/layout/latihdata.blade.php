<x-app title="Latih Data">
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
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Latih Data Baru</h4>
                                    <p class="card-title-desc">Latih data baru dengan cara mengupload file ke dalam kotak yang disediakan untuk dijadikan sebagai data latih.</p>
                                    <div>
                                        <form action="#" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple="multiple">
                                            </div>
                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted mdi mdi-cloud-upload-outline"></i>
                                                </div>
                                                <h4>Seret dan Masukkan file kesini atau klik kotak untuk memilih file</h4>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-file-upload-outline me-2"></i>Tambah Data Latih Baru</button>
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
</x-app>
