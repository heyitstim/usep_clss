@extends('layouts.app', ['activePage' => 'Student Satisfaction Portal', 'titlePage' => __('Student Satisfaction Portal')])

@section('content')
@endsection
<div class="content">
    <div class="container-fluid">
    </div>
</div>
@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
