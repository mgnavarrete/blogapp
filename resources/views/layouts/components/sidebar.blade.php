<style>
    .side-menu__item {
        display: flex;
        align-items: center;
    }
    .side-menu__icon {
        display: flex;
        align-items: center;
        margin-right: 10px;
    }
</style>
<aside class="app-sidebar sticky" id="sidebar" >

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="{{route('index')}}" class="header-logo">
            <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
            <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="toggle-logo">
            <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-dark">
            <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="toggle-dark">
            <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-white">
            <img src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="logo" class="toggle-white">
        </a>
    </div>
    <!-- End::main-sidebar-header -->
    
    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll" >
    
        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open " >
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Menu principal</span></li>
                <!-- End::slide__category -->
                
                <!-- Start::slide -->
                <li class="slide" >
                    <a href="{{url('/aboutme')}}" class="side-menu__item">
                        <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="side-menu__icon" style="width: 24px; height: 24px; margin-right: 16px;">
                        <span class="side-menu__label fs-5" style="color: #BD4637;">Sobre mi</span>
                    </a>
                </li>

                <!-- Start::slide -->
                <li class="slide" >
                    <a href="{{url('/feed')}}" class="side-menu__item">
                        <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="side-menu__icon" style="width: 24px; height: 24px; margin-right: 16px;">
                        <span class="side-menu__label fs-5" style="color: #BD4637;">Explorar</span>
                    </a>
                </li>
                <!-- End::slide -->
    
                <li class="slide" >
                    <a href="{{url('/myblogs')}}" class="side-menu__item">
                        <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="side-menu__icon" style="width: 24px; height: 24px; margin-right: 16px;">
                        <span class="side-menu__label fs-5" style="color: #BD4637;">Mis Blogs</span>
                    </a>
                </li>
                <!-- End::slide -->
    
                <li class="slide" >
                    <!-- Alertas -->
                    <a href="{{url('/createblog')}}" class="side-menu__item">
                        <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="side-menu__icon" style="width: 24px; height: 24px; margin-right: 16px;">
                        <span class="side-menu__label fs-5" style="color: #BD4637;">Escribir Blog</span>
                    </a>
                </li>
                <!-- End::slide -->
    

            </ul>
           
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
        </nav>
        <!-- End::nav -->
    
    </div>
    <!-- End::main-sidebar -->
    
    </aside>