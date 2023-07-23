<x-app title="Perhitungan berdasarkan nilai k">
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
                                    <h4>Perhitungan berdasarkan nilai k</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="/">Sistem Klasifikasi ISPU</a></li>
                                        <li class="breadcrumb-item active">Perhitungan berdasarkan nilai k</li>
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
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Akurasi</h4>
                                        <div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Confusion Matrix</h4>
                                        <div id="heatmap_chart" class="apex-charts" dir="ltr"></div>
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
    @push('chart-js')
        <!-- apexcharts -->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script>
            var options = {
                chart: {
                    height: 350,
                    type: "bar",
                    toolbar: {
                        show: true
                    }
                },
                plotOptions: {
                    bar: {
                        columnWidth: "60%",
                        borderRadius: 5,
                        borderRadiusApplication: 'end',
                        dataLabels: {
                            position: 'top'
                        },
                    }
                },
                dataLabels: {
                    enabled: true,
                    offsetY: -20,
                },
                series: [{
                    name: "Akurasi",
                    data: [({{ $akurasi[0] ?? 0 }} * 100).toFixed(2), ({{ $akurasi[1] ?? 0 }} * 100).toFixed(2), ({{ $akurasi[2] ?? 0 }} * 100).toFixed(2), ({{ $akurasi[3] ?? 0 }} * 100).toFixed(2), ({{ $akurasi[4] ?? 0 }} * 100).toFixed(2), ({{ $akurasi[5] ?? 0 }} * 100).toFixed(2), ({{ $akurasi[6] ?? 0 }} * 100).toFixed(2), ({{ $akurasi[7] ?? 0 }} * 100).toFixed(2), ({{ $akurasi[8] ?? 0 }} * 100).toFixed(2), ({{ $akurasi[9] ?? 0 }} * 100).toFixed(2)]
                }],
                colors: ["#525ce5"],
                xaxis: {
                    title: {
                        text: "Nilai k"
                    },
                    categories: [{{ $test_k[0] }}, {{ $test_k[1] }}, {{ $test_k[2] }}, {{ $test_k[3] }}, {{ $test_k[4] }}, {{ $test_k[5] }}, {{ $test_k[6] }}, {{ $test_k[7] }}, {{ $test_k[8] }}, {{ $test_k[9] }}],
                },
                yaxis: {
                    title: {
                        text: "Persentase (%)"
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function(e) {
                            return e + "%"
                        }
                    }
                },
            };

            var chart = new ApexCharts(document.querySelector("#column_chart_datalabel"), options)
            chart.render();
        </script>
        <script>
            var options = {
                series: [{
                        name: "Baik",
                        data: [{
                            x: 'Baik',
                            y: {{ $confusion_matrix[0][0] ?? 0 }}
                        }, {
                            x: 'Sedang',
                            y: {{ $confusion_matrix[0][1] ?? 0 }}
                        }, {
                            x: 'Tidak Sehat',
                            y: {{ $confusion_matrix[0][2] ?? 0 }}
                        }, {
                            x: 'Sangat Tidak Sehat',
                            y: {{ $confusion_matrix[0][3] ?? 0 }}
                        }, {
                            x: 'Berbahaya',
                            y: {{ $confusion_matrix[0][4] ?? 0 }}
                        }, ]
                    },
                    {
                        name: "Sedang",
                        data: [{
                            x: 'Baik',
                            y: {{ $confusion_matrix[1][0] ?? 0 }}
                        }, {
                            x: 'Sedang',
                            y: {{ $confusion_matrix[1][1] ?? 0 }}
                        }, {
                            x: 'Tidak Sehat',
                            y: {{ $confusion_matrix[1][2] ?? 0 }}
                        }, {
                            x: 'Sangat Tidak Sehat',
                            y: {{ $confusion_matrix[1][3] ?? 0 }}
                        }, {
                            x: 'Berbahaya',
                            y: {{ $confusion_matrix[1][4] ?? 0 }}
                        }, ]
                    },
                    {
                        name: "Tidak Sehat",
                        data: [{
                            x: 'Baik',
                            y: {{ $confusion_matrix[2][0] ?? 0 }}
                        }, {
                            x: 'Sedang',
                            y: {{ $confusion_matrix[2][1] ?? 0 }}
                        }, {
                            x: 'Tidak Sehat',
                            y: {{ $confusion_matrix[2][2] ?? 0 }}
                        }, {
                            x: 'Sangat Tidak Sehat',
                            y: {{ $confusion_matrix[2][3] ?? 0 }}
                        }, {
                            x: 'Berbahaya',
                            y: {{ $confusion_matrix[2][4] ?? 0 }}
                        }, ]
                    },
                    {
                        name: "Sangat Tidak Sehat",
                        data: [{
                            x: 'Baik',
                            y: {{ $confusion_matrix[3][0] ?? 0 }}
                        }, {
                            x: 'Sedang',
                            y: {{ $confusion_matrix[3][1] ?? 0 }}
                        }, {
                            x: 'Tidak Sehat',
                            y: {{ $confusion_matrix[3][2] ?? 0 }}
                        }, {
                            x: 'Sangat Tidak Sehat',
                            y: {{ $confusion_matrix[3][3] ?? 0 }}
                        }, {
                            x: 'Berbahaya',
                            y: {{ $confusion_matrix[3][4] ?? 0 }}
                        }, ]
                    },
                    {
                        name: "Berbahaya",
                        data: [{
                            x: 'Baik',
                            y: {{ $confusion_matrix[4][0] ?? 0 }}
                        }, {
                            x: 'Sedang',
                            y: {{ $confusion_matrix[4][1] ?? 0 }}
                        }, {
                            x: 'Tidak Sehat',
                            y: {{ $confusion_matrix[4][2] ?? 0 }}
                        }, {
                            x: 'Sangat Tidak Sehat',
                            y: {{ $confusion_matrix[4][3] ?? 0 }}
                        }, {
                            x: 'Berbahaya',
                            y: {{ $confusion_matrix[4][4] ?? 0 }}
                        }, ]
                    },
                ],
                chart: {
                    height: 350,
                    type: 'heatmap',
                },
                plotOptions: {
                    heatmap: {
                        radius: 5,
                    }
                },
                dataLabels: {
                    enabled: true,
                    background: {
                        enabled: true,
                        foreColor: '#fff',
                        padding: 4,
                        borderRadius: 5,
                    },
                },
                colors: ['#525ce5'],
                xaxis: {
                    title: {
                        text: 'Prediksi',
                    },
                },
                yaxis: {
                    title: {
                        text: 'Aktual',
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#heatmap_chart"), options);
            chart.render();
        </script>
    @endpush
</x-app>
