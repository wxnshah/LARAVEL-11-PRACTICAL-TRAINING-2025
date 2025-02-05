<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login | {{ config('app.name') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/v6.7.2/all.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/v6.7.2/sharp-light.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/v6.7.2/sharp-regular.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/v6.7.2/sharp-solid.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/v6.7.2/sharp-thin.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/v6.7.2/duotone-light.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/v6.7.2/duotone-regular.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/v6.7.2/duotone-thin.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/v6.7.2/sharp-duotone-light.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/v6.7.2/sharp-duotone-regular.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/v6.7.2/sharp-duotone-solid.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/v6.7.2/sharp-duotone-thin.css') }}" />
        <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>
        <!-- SweetAlert2 -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}"/>
        <!-- End SweetAlert2 -->
    </head>
    @include('sweetalerts')
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="{{ route('LoginAuthenticate') }}" method="POST">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" placeholder="Sila Masukkan No Kad Pengenalan" name="no_kp" value="{{ old('no_kp') }}" />
                                                <label>No Kad Pengenalan</label>
                                                @error('no_kp')
                                                    <font color="red">{{ $message }}</font>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="password" placeholder="Sila Masukkan Kata Laluan" name="password"/>
                                                <label>Password</label>
                                                @error('password')
                                                    <font color="red">{{ $message }}</font>
                                                @enderror
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Lupa Kata Laluan ?</a>
                                                <button type="submit" class="btn btn-primary">Log Masuk</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                            <a href="{{ route('RegisterPage') }}">Daftar Akaun Baru !</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright DK &copy; {{ config('app.name') }} {{ date('Y') }}</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ asset('js/bootstrap@5.2.3/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <!-- Sweet Alerts js -->
        <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
        <!-- Sweet Alerts js ends --> 
    </body>
</html>
