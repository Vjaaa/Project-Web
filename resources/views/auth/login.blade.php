<x-auth title="Login">
    <x-preloader />
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        @if (session()->has('error'))
                            <div class="card alert alert-dismissible border p-0 mt-3 position-absolute" role="alert" style="left: 50%; transform: translate(-50%, -55%); z-index: 9998;">
                                <div class="card-header bg-soft-danger">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <h5 class="font-size-16 text-danger my-1">Danger Alert</h5>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <i class="mdi mdi-alert-outline display-5 text-danger"></i>
                                        </div>
                                        <h4 class="alert-heading font-size-18">Gagal!</h4>
                                        <span>{{ session('error') }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 py-3">
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
                                        {{-- <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customControlInline">
                                                <label class="form-label" for="customControlInline">Remember me</label>
                                            </div>
                                        </div> --}}
                                        <div>
                                            <button type="submit" class="btn btn-primary w-100 waves-effect waves-light">Log In</button>
                                        </div>
                                        {{-- <div class="mt-4 text-center">
                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                        </div> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center text-white">
                            {{-- <p>Don't have an account ?<a href="auth-register.html" class="fw-bold text-white"> Register</a> </p> --}}
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
</x-auth>
