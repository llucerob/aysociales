<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper text-center"><a href="{{route('dashboard')}}"><img class="img-fluid for-light"
                    src="{{ asset('assets/logo/logom.png') }}" width="100px" alt=""></a>
            <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="#"><img class="img-fluid"
                    src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main ">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="#"><img class="img-fluid"
                                src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Favoritos</h6>
                        </div>
                    </li>



                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                        class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                        </svg><svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                        </svg><span>Escritorio</span></a>
                    </li>

                    
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Social</h6>
                        </div>
                    </li>
                    <!--<li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                        class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                        </svg><svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                        </svg><span>Usuarios</span></a>
                    <ul class="sidebar-submenu">
                        
                        <li><a href="#">Listar Usuarios</a></li>
                        <li><a href="#">Crear Usuario</a></li>
                    </ul>
                    </li>!-->
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                        class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                        </svg><svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                        </svg><span>Usuarios</span></a>
                    <ul class="sidebar-submenu">
                        
                        <li><a href="">Listado Usuarios</a></li>
                        <li><a href="">Crear Usuario</a></li>
                        <li><a href="">Entrega Domicilio</a></li>

                        
                        
                    </ul>
                    </li>
                  
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Reembolsos</h6>
                        </div>
                    </li>
                   
                 
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                            </svg><span>Reembolsos </span></a>
                        <ul class="sidebar-submenu">
                            
                            <li><a href="">Listar Reembolsos</a></li>
                            <li><a href="">Nomina Transferencia</a></li>
                            <li><a href="">Rectificación Aportes</a></li>

                            
                        </ul>
                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6>Transparencia</h6>
                        </div>
                    </li>
                   
                 
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                            </svg><span>Decreto Mensual </span></a>
                        <ul class="sidebar-submenu">
                            
                            <li><a href="">Crear Decreto</a></li>
                            
                        </ul>
                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6>Bodega</h6>
                        </div>
                    </li>
                   
                 
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                            </svg><span>Materiales </span></a>
                        <ul class="sidebar-submenu">
                            
                            <li><a href="">Listar Materiales</a></li>
                             <li><a href="">Nuevo Material</a></li>
                              <li><a href="">Medidas</a></li>
                            
                        </ul>
                    </li>


                    <li class="sidebar-main-title">
                        <div>
                            <h6>Logística</h6>
                        </div>
                    </li>
                   


                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                            </svg><span>Categoria</span></a>
                        <ul class="sidebar-submenu">
                            
                            <li><a href="">Menú Categoría</a></li>
                            
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                            </svg><span>Sectores</span></a>
                        <ul class="sidebar-submenu">
                            
                            <li><a href="">Menú Sectores</a></li>
                            
                        </ul>
                    </li>
                   
                   
                    
                   
                   
                   
                    
                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->
