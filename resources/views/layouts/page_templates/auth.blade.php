<div class="wrapper ">
    @if( Auth::user()->is_admin == 1)
    @include('layouts.navbars.admin_sidebar')
    @else
    @include('layouts.navbars.sidebar')
    @endif

  <div class="main-panel">
    @include('layouts.navbars.navs.auth')
    @yield('content')
    @include('layouts.footers.auth')
  </div>
</div>
