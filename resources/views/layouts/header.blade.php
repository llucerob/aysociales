<div class="page-header">
  <div class="header-wrapper row m-0">
    <form class="form-inline search-full col" action="#" method="get">
      <div class="form-group w-100">
        <div class="Typeahead Typeahead--twitterUsers">
          <div class="u-posRelative">
            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
          </div>
          <div class="Typeahead-menu"></div>
        </div>
      </div>
    </form>
    <div class="header-logo-wrapper col-auto p-0">
      <div class="logo-wrapper"><a href="#"><img class="img-fluid" src="{{ asset('assets/images/logo/logom.png') }}" width=121px alt="logomunicipal"></a></div>
      <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
    </div>

    <!--
    <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
      <div class="notification-slider">
        <div class="d-flex h-100"> <img src="{{ asset('assets/images/giftools.gif') }}" alt="gif">
          <h6 class="mb-0 f-w-400"><span class="font-primary">hola! </span><span class="f-light">Out new update has been release.</span></h6><i class="icon-arrow-top-right f-light"></i>
        </div>
        <div class="d-flex h-100"><img src="{{ asset('assets/images/giftools.gif') }}" alt="gif">
          <h6 class="mb-0 f-w-400"><span class="f-light">Something you love is now on sale! </span></h6><a class="ms-1" href="https://1.envato.market/3GVzd" target="_blank">Buy now !</a>
        </div>
      </div>
    </div>
    -->
    
    <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
      <ul class="nav-menus">
        
        <li class="profile-nav onhover-dropdown pe-0 py-0">
          <div class="media profile-media"><img class="b-r-10" src="{{ asset('assets/images/dashboard/profile.png') }}" alt="">
            <div class="media-body"><span>{{Auth::user()->name}}</span>
              <p class="mb-0 font-roboto"> 
                <i class="middle fa fa-angle-down"></i></p>
            </div>
          </div>
          <ul class="profile-dropdown onhover-show-div">
            <li><a href="{{url('profile')}}"><i data-feather="user"></i><span>Perfil </span></a></li>
            
            
          </ul>
        </li>
      </ul>
    </div>
     </div>
</div>