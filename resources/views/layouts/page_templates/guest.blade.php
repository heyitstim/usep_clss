{{--  @include('layouts.navbars.navs.guest')  --}}
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="gray" style="background-image: url('{{ asset('material') }}/img/eagle.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="rose">
    @yield('content')
    @include('layouts.footers.auth')
  </div>
</div>
