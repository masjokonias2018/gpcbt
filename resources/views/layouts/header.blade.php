<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ env('APP_NAME') }} | @yield('judul')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
  <style>
    table tr td, table tr th{
    background-color: rgba(210,130,240, 0.3) !important;
    }
    .card {
    background-color: rgba(255,255,255, 0.5) !important;
    }
    .modal-content {
    background-color: rgba(255,255,255, 0.6) !important;
    }
  </style>
  @yield('style')