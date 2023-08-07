@extends('app')
@section('title', 'Beranda')
@section('content')
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
                                    <h4>Beranda</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Sistem Klasifikasi ISPU</a></li>
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
                                        <p class="card-title-desc">Status ISPU saat ini adalah <strong><ins>{{ $dataIspu->categori ?? 'Tidak Ada Data' }}</ins></strong>.</p>
                                        <div class="text-center" dir="ltr">
                                            <input type="text" id="knob" class="knob" value="{{ $dataIspu->max ?? 0 }}" />
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
                                        <div id="bar_chart" class="apex-charts" dir="ltr"></div>
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
                            timer: 1500,
                            heightAuto: false,
                        });
                    }, 500);
                });
            </script>
        @endpush
    @endif
    @push('chart-js')
        <!-- apexcharts -->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script>
            var options = {
                chart: {
                    height: 350,
                    type: "bar",
                    toolbar: {
                        show: true,
                        tools: {
                            download: true,
                            selection: false,
                            zoom: false,
                            zoomin: false,
                            zoomout: false,
                            pan: false,
                            reset: false,
                        },
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: !0,
                        borderRadius: 5,
                        borderRadiusApplication: 'end',
                    },
                },
                dataLabels: {
                    enabled: true,
                    offsetY: -25,
                },
                series: [{
                    name: 'Nilai',
                    data: [{{ $dataIspu->pm10 ?? 0 }}, {{ $dataIspu->so2 ?? 0 }}, {{ $dataIspu->co ?? 0 }}, {{ $dataIspu->o3 ?? 0 }}, {{ $dataIspu->no2 ?? 0 }}]
                }],
                colors: [function({
                    value,
                    seriesIndex,
                    w
                }) {
                    if (value > 0 && value <= 50) {
                        return '#33cc33'
                    } else if (value >= 51 && value <= 100) {
                        return '#0070c0'
                    } else if (value >= 101 && value <= 200) {
                        return '#ffc000'
                    } else if (value >= 201 && value <= 300) {
                        return '#ff0000'
                    } else {
                        return '#000000'
                    }
                }],
                xaxis: {
                    title: {
                        text: 'Nilai ISPU',
                    },
                    categories: ['PM10', 'SO2', 'CO', 'O3', 'NO2'],
                },
                yaxis: {
                    title: {
                        text: 'Parameter',
                    },
                },
                legend: {
                    offsetY: 5
                },
            }
            var chart = new ApexCharts(document.querySelector('#bar_chart'), options);
            chart.render();
        </script>
        <!-- knob -->
        <script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                var value = $('#knob').val();
                $(".knob").knob({
                    width: 180,
                    height: 180,
                    fgColor: getColorFromValue(value),
                    skin: 'tron',
                    angleOffset: 180,
                    readOnly: true,
                    thickness: .1,
                    max: 600,
                });

                function getColorFromValue(value) {
                    if (value > 0 && value <= 50)
                        return '#33cc33';
                    else if (value >= 51 && value <= 100)
                        return '#0070c0';
                    else if (value >= 101 && value <= 200)
                        return '#ffc000';
                    else if (value >= 201 && value <= 300)
                        return '#ff0000';
                    else
                        return '#000000';
                }
            });
        </script>
    @endpush
@endsection
