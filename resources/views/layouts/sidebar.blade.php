<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
      <div class="logo-wrapper"><a href="#"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/logom.png') }}" alt=""><img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="#"><img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
      <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
          <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn">
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
            <li class="pt-4 mt-2 sidebar-list"><a class="mt-3 sidebar-link sidebar-title" href="{{route('dashboard')}}" >
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                </svg><span>Escritorio</span></a></li>

                <li class="pin-title sidebar-main-title">
                  <div>
                    <h6>Social</h6>
                  </div>
                </li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-user') }}"></use>
                </svg><span>Usuarios</span></a>
                <ul class="sidebar-submenu" style="display: block;">
                <li><a href="{{ route('usuarios.listar') }}">Listar Usuarios</a></li>
                </li>
                <li><a href="{{ route('usuarios.nuevo') }}">Nuevo Usuario</a></li>
                </li></ul>
              </li>


            <li class="pin-title sidebar-main-title">
                  <div>
                    <h6>Reembolsos</h6>
                  </div>
                </li>


                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="{{route('reembolso.vista') }}">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-charts') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-charts') }}"></use>
                        </svg>
                        Listar Reembolso
                    </a>


            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="">
                    <svg class="stroke-icon">
                      <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-charts') }}"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="{{ asset('assets/svg/icon-sprite.svg#fill-charts') }}"></use>
                    </svg><span>Nómina Transferencia</span></a>
            </li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="">
                    <svg class="stroke-icon">
                      <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-charts') }}"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="{{ asset('assets/svg/icon-sprite.svg#fill-charts') }}"></use>
                    </svg><span>Rectificación Aportes</span></a>
            </li>


            <li class="pin-title sidebar-main-title">
                    <div>
                      <h6>Transparencia</h6>
                    </div>
            </li>


            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title" href="{{ route('decretos.nuevo') }}">
                    <svg class="stroke-icon">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-charts') }}"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-charts') }}"></use>
                    </svg>
                    <span>Crear Decreto</span>
                </a>
            </li>



              <li class="pin-title sidebar-main-title">
                <div>
                  <h6>Municipal</h6>
                </div>
              </li>

              <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"></use>
                </svg><span>Solicitud Municipal</span></a>
                <ul class="sidebar-submenu">
                  <li><a href="{{ route('muni.data') }}">Listar Solicitudes</a></li>


                </ul>
            </li>



            <li class="pin-title sidebar-main-title">
                  <div>
                    <h6>Bodega</h6>
                  </div>
                </li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bonus-kit') }}"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bonus-kit') }}"></use>
                </svg><span>Materiales</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{ route('materiales.vista') }}">Listar Material</a></li>

              </ul>
              </li>

              <li class="pin-title sidebar-main-title">
                <div>
                  <h6>Utilidades</h6>
                </div>
              </li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                  <svg class="stroke-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"></use>
                  </svg>
                  <svg class="fill-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"></use>
                  </svg><span>Más</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="">Medidas</a></li>

                  </ul>
              </li>








          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
    </div>
  </div>
