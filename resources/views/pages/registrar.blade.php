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
<body">
@endsection

        <div class="container-lg">
            <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
                    <div class="my-5 d-flex justify-content-center">
                        <a href="{{url('index')}}">
                            <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo" style="width: 300px; height: auto;">
                            <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark" style="width: 300px; height: auto;">
                        </a>
                    </div>
                    <div class="card custom-card">
                        <div class="card-body p-5">
                            <p class="h5 fw-semibold mb-2 text-center text-primary">Registrate</p>
                            <p class="mb-4 text-muted op-7 fw-normal text-center">¡Bienvenida! Únete a nuestra comunidad</p>
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-3">
                                    <!-- Columna Izquierda -->
                                    <div class="col-xl-6">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label for="username" class="form-label text-default text-primary">Nombre de Usuario</label>
                                                <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Nombre de Usuario" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="email" class="form-label text-default text-primary">Correo Electrónico</label>
                                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Correo Electrónico" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="first_name" class="form-label text-default text-primary">Nombre</label>
                                                <input type="text" class="form-control form-control-lg" id="first_name" name="first_name" placeholder="Nombre" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="last_name" class="form-label text-default text-primary">Apellidos</label>
                                                <input type="text" class="form-control form-control-lg" id="last_name" name="last_name" placeholder="Apellidos" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="gender" class="form-label text-default text-primary">Género</label>
                                                <select class="form-control form-control-lg" id="gender" name="gender" required>
                                                    <option value="">Selecciona un género</option>
                                                    <option value="masculino">Masculino</option>
                                                    <option value="femenino">Femenino</option>
                                                    <option value="otro">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Columna Derecha -->
                                    <div class="col-xl-6">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label for="birthdate" class="form-label text-default text-primary">Fecha de Nacimiento</label>
                                                <input type="date" class="form-control form-control-lg" id="birthdate" name="birthdate" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="profession" class="form-label text-default text-primary">Profesión</label>
                                                <input type="text" class="form-control form-control-lg" id="profession" name="profession" placeholder="Profesión" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="bio" class="form-label text-default text-primary">Biografía</label>
                                                <textarea class="form-control form-control-lg" id="bio" name="bio" rows="3" placeholder="Cuéntame sobre ti" required></textarea>
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="profile_image" class="form-label text-default text-primary">Foto de Perfil</label>
                                                <input type="file" class="form-control form-control-lg" id="profile_image" name="profile_image" accept="image/*" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Campos de Contraseña (Ancho Completo) -->
                                    <div class="col-xl-12">
                                        <div class="row gy-3">
                                            <div class="col-xl-6">
                                                <label for="password" class="form-label text-default text-primary">Contraseña</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Contraseña" required>
                                                    <button class="btn btn-light" onclick="createpassword('password',this)" type="button" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="password_confirmation" class="form-label text-default text-primary">Confirmar Contraseña</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="Confirmar Contraseña" required>
                                                    <button class="btn btn-light" onclick="createpassword('password_confirmation',this)" type="button" id="button-addon21"><i class="ri-eye-off-line align-middle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                    <!-- Botón de Registro -->
                                    <div class="col-xl-12 d-grid mt-2">
                                        <button type="submit" class="btn btn-lg btn-primary">Crear Cuenta</button>
                                    </div>
                                    <div class="text-center">
                                        <p class="fs-12 text-muted mt-3">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-primary">Iniciar Sesión</a></p>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('scripts')
        <!-- SHOW PASSWORD JS -->
        <script src="{{asset('build/assets/show-password.js')}}"></script>
@endsection