@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                <div class="container-lg my-5">
                    
                    <!-- Start::row -->
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 ">
                            <div class="container-fluid" style="height: 300px; background-color: transparent;"> 
                                <h1 class="text-center text-primary" style="font-size: 110px; font-weight: bold;">¡Bienvenida a nuestra comunidad!</h1>
                                {{-- <p class="text-center" style="font-size: 20px; ">Únete y comparte tus ideas y experiencias con los demás</p> --}}
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 href="{{url('myBlogs')}}" class="mb-0 fw-semibold text-secondary" style="font-size: 30px;">Mis Blogs</h5>
                                {{-- <p class="mb-0 fw-semibold">
                                    <a href="{{url('myBlogs')}}" class="text-primary"><u>Ver todos</u></a>
                                </p> --}}
                            </div>
                            <div class="row">
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                                    <a href="javascript:void(0);">
                                        <div class="card custom-card bg-dark overlay-card text-fixed-white">
                                            <img src="https://laravelui.spruko.com/ynex/build/assets/images/media/media-73.jpg" class="card-img" alt="...">
                                            <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                                <div class="card-footer border-top-0">
                                                    <h6 class="mb-0 text-fixed-white">Libros</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                                    <a href="javascript:void(0);">
                                        <div class="card custom-card bg-dark overlay-card text-fixed-white">
                                            <img src="https://laravelui.spruko.com/ynex/build/assets/images/media/media-74.jpg" class="card-img" alt="...">
                                            <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                                <div class="card-footer border-top-0">
                                                    <h6 class="mb-0 text-fixed-white">Deporte</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                                    <a href="javascript:void(0);">
                                        <div class="card custom-card bg-dark overlay-card text-fixed-white">
                                            <img src="https://laravelui.spruko.com/ynex/build/assets/images/media/media-75.jpg" class="card-img" alt="...">
                                            <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                                <div class="card-footer border-top-0">
                                                    <h6 class="mb-0 text-fixed-white">Comida</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                                    <a href="javascript:void(0);">
                                        <div class="card custom-card bg-dark overlay-card text-fixed-white">
                                            <img src="https://laravelui.spruko.com/ynex/build/assets/images/media/media-76.jpg" class="card-img" alt="...">
                                            <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                                <div class="card-footer border-top-0">
                                                    <h6 class="mb-0 text-fixed-white">Viajes</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                                    <a href="javascript:void(0);">
                                        <div class="card custom-card bg-dark overlay-card text-fixed-white">
                                            <img src="https://laravelui.spruko.com/ynex/build/assets/images/media/media-77.jpg" class="card-img" alt="...">
                                            <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                                <div class="card-footer border-top-0">
                                                    <h6 class="mb-0 text-fixed-white">Ropa</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                                    <a href="javascript:void(0);">
                                        <div class="card custom-card bg-dark overlay-card text-fixed-white">
                                            <img src="https://laravelui.spruko.com/ynex/build/assets/images/media/media-78.jpg" class="card-img" alt="...">
                                            <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                                <div class="card-footer border-top-0">
                                                    <h6 class="mb-0 text-fixed-white">Mati</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
            
                </div>


            

@endsection

@section('scripts')


@endsection