@extends('layouts.custom-master')

@section('styles')
 
      
@endsection

@section('content')

@section('error-body')
<body">
@endsection

        <div class="container-lg">
            <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                    <div class="my-5 d-flex justify-content-center">
                        <a href="{{url('index')}}">
                            <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                            <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
                        </a>
                    </div>
                    <div class="card custom-card">
                        <div class="card-body p-5">
                            <p class="h5 fw-semibold mb-2 text-center">Registro</p>
                            <p class="mb-4 text-muted op-7 fw-normal text-center">¡Bienvenido! Únete a nosotros creando una cuenta gratuita</p>
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <label for="username" class="form-label text-default">Nombre de Usuario</label>
                                        <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="nombre de usuario" required>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="email" class="form-label text-default">Correo Electrónico</label>
                                        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="correo electrónico" required>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="first_name" class="form-label text-default">Nombre</label>
                                        <input type="text" class="form-control form-control-lg" id="first_name" name="first_name" placeholder="nombre" required>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="last_name" class="form-label text-default">Apellido</label>
                                        <input type="text" class="form-control form-control-lg" id="last_name" name="last_name" placeholder="apellido" required>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="gender" class="form-label text-default">Género</label>
                                        <select class="form-control form-control-lg" id="gender" name="gender" required>
                                            <option value="">Seleccione un género</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="femenino">Femenino</option>
                                            <option value="otro">Otro</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="birthdate" class="form-label text-default">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control form-control-lg" id="birthdate" name="birthdate" required>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="profession" class="form-label text-default">Profesión</label>
                                        <input type="text" class="form-control form-control-lg" id="profession" name="profession" placeholder="profesión" required>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="bio" class="form-label text-default">Biografía</label>
                                        <textarea class="form-control form-control-lg" id="bio" name="bio" rows="3" placeholder="cuéntanos sobre ti" required></textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="profile_image" class="form-label text-default">Foto de Perfil</label>
                                        <input type="file" class="form-control form-control-lg" id="profile_image" name="profile_image" accept="image/*" required>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="password" class="form-label text-default">Contraseña</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="contraseña" required>
                                            <button class="btn btn-light" onclick="createpassword('password',this)" type="button" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-2">
                                        <label for="password_confirmation" class="form-label text-default">Confirmar Contraseña</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="confirmar contraseña" required>
                                            <button class="btn btn-light" onclick="createpassword('password_confirmation',this)" type="button" id="button-addon21"><i class="ri-eye-off-line align-middle"></i></button>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value="" id="terms" required>
                                            <label class="form-check-label text-muted fw-normal" for="terms">
                                                Al crear una cuenta, aceptas nuestros <a href="#" class="text-success"><u>Términos y Condiciones</u></a> y <a href="#" class="text-success"><u>Política de Privacidad</u></a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 d-grid mt-2">
                                        <button type="submit" class="btn btn-lg btn-primary">Crear Cuenta</button>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="fs-12 text-muted mt-3">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-primary">Iniciar Sesión</a></p>
                            </div>
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