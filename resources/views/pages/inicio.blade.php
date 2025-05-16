@extends('layouts.custom-master')

@section('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tagesschrift&display=swap" rel="stylesheet">
    <style>
        .btn-icon {
            line-height: 10px; /* Adjust line height to match the icon height */
        }

        .custom-icon {
            width: 15px;
            height: 15px;
            vertical-align: middle;
            display: inline-block;
        }

        .adentu-sidebar {
            width: 500px;
            height: 100%;
            vertical-align: middle;
            display: inline-block;
        }

        body {
            background-image: url('{{asset('build/assets/images/style/wp2.png')}}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            font-family: "Tagesschrift", system-ui;
            font-optical-sizing: auto;
            font-weight: 500;
            color: var(--text-primary);
        }

        .card {
            font-family: "Tagesschrift", system-ui;
            font-optical-sizing: auto;
            font-weight: 500;
            color: var(--text-primary);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border: none;
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.9);
        }

        .form-label, .form-control, .btn, p, h5 {
            font-family: "Tagesschrift", system-ui;
            font-optical-sizing: auto;
            font-weight: 500;
            color: var(--text-primary);
        }

        .alert {
            font-family: "Tagesschrift", system-ui;
            font-optical-sizing: auto;
            font-weight: 500;
        }

        .form-control::placeholder {
            color: var(--text-primary);
            opacity: 0.7;
        }

        .text-muted {
            color: var(--text-primary) !important;
            opacity: 0.7;
        }
    </style>
@endsection

@section('content')
    @section('error-body')
    <body>
    @endsection

        <div class="container">
            <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                    <div class="my-5 d-flex justify-content-center">
                        <a href="{{url('index')}}">
                            <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo" style="width: 300px; height: auto;">
                            <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark" style="width: 300px; height: auto;">
                        </a>
                    </div>
                    <div class="card custom-card">
                        <div class="card-body p-5">
                            <p class="h5 fw-semibold mb-2 text-center">Iniciar Sesión</p>
                            <p class="mb-4 text-muted op-7 fw-normal text-center">¡Bienvenido!</p>
                            <div class="row gy-3">
                                <form method="POST" action="{{ route('login') }}" id="formInicio">
                                    @csrf
                                    <div class="col-xl-12">
                                        <label for="username" class="form-label text-default">Email</label>
                                        <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Correo Electrónico">
                                    </div>
                                    <div class="col-xl-12 mb-2">
                                        <br>
                                        <!--label for="password" class="form-label text-default d-block">Contraseña<a href="{{ url('resetpassword-basic') }}" class="float-end text-danger">¿Olvidó su contraseña?</a></label-->
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Contraseña">
                                            <button class="btn btn-light" type="button" onclick="createpassword('password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                        </div>
                                 
                                    </div>
                                    <div class="col-xl-12 d-grid mt-2">
                                        <div class="spinner-border text-primary d-none text-center" role="status" id="spinnerInicio">
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-primary" id="btnInicio">Iniciar sesión</button>
                                    </div>
                                    <div class="text-center">
                                        <p class="fs-12 text-muted mt-3">¿No tienes una cuenta? <a href="{{ route('registrar') }}" class="text-primary">Registrarse</a></p>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            {{ $errors->first('error') }}
                                        </div>
                                    @endif
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('scripts')
        <script>
            document.getElementById('formInicio').addEventListener('submit', function() {
                document.getElementById('btnInicio').classList.add('d-none');
                document.getElementById('spinnerInicio').classList.remove('d-none');
            });
        </script>

        <!-- SHOW PASSWORD JS -->
        <script src="{{asset('build/assets/show-password.js')}}"></script>

@endsection