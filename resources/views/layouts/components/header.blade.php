
<header class="app-header" >

    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid" style="background-image: url('{{asset('build/assets/images/style/wp2.png')}}'); background-size: cover; background-position: center; background-repeat: no-repeat; opacity: 1; z-index: -1;">

        <!-- Start::header-content-left -->
        <div class="header-content-left">

            <!-- Start::header-element -->
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="{{url('index')}}" class="header-logo">
                        <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                        <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="toggle-logo">
                        <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
                        <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="toggle-dark">
                        <img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}" alt="logo" class="desktop-white">
                        <img src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="logo" class="toggle-white">
                    </a>
                </div>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link -->
                <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->

        </div>
        <!-- End::header-content-left -->

        <!-- Start::header-content-right -->
        <div class="header-content-right">

            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link|dropdown-toggle -->
                @auth
                <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('build/assets/images/style/profile.png')}}" alt="img" width="32" height="32" class="rounded-circle me-2">
                        <div class="d-sm-block d-none">
                            {{ auth()->user()->name }}
                        </div>
                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                    <li><a class="dropdown-item d-flex" href="{{route('profile')}}"><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Perfil</a></li>
                    <li><a class="dropdown-item d-flex" href="{{route('logout')}}"><i class="ti ti-logout fs-18 me-2 op-7"></i>Cerrar Sesión</a></li>
                </ul>
                @else
                <div class="d-flex align-items-center">
                    <a href="{{route('login')}}" class="btn btn-primary me-2">Ingresar</a>
                    <a href="{{route('registrar')}}" class="btn btn-outline-primary">Registrate</a>
                </div>
                @endauth
            </div>  
            <!-- End::header-element -->
        </div>
        <!-- End::header-content-right -->

    </div>
    <!-- End::main-header-container -->

</header>