@extends('auth')
@section('title', 'Login')
@section('content')
    <x-preloader />
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center">
                            <h1 class="text-dark mb-4">Sistem Klasifikasi ISPU</h1>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 pb-2">
                                    <div class="text-center">
                                        <h5 class="text-primary mb-2 mt-1">Selamat Datang !</h5>
                                        <p class="text-muted">Silahakan Login untuk melanjutkan ke Dashboard.</p>
                                    </div>
                                    <form action="{{ route('login.auth') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}" placeholder="Masukkan username" autofocus required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" required>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary w-100 waves-effect waves-light">Log In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center text-white">
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>. Crafted with <i class="mdi mdi-heart text-danger"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Log In page -->
    </div>
    @if (session()->has('error'))
        @push('sweet-alert')
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    setTimeout(function() {
                        // Tampilkan SweetAlert setelah preload selesai
                        Swal.fire({
                            position: "center",
                            icon: "error",
                            title: "{{ session('error') }}",
                            showConfirmButton: false,
                            timer: 1500,
                            heightAuto: false,
                        });
                    }, 500);
                });
            </script>
        @endpush
    @endif
@endsection
