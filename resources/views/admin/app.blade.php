<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.header')
</head>
<body class="sidebar-mini layout-fixed sidebar-mini-md sidebar-mini-xs layout-navbar-fixed layout-footer-fixed text-sm accent-lightblue sidebar-closed">
<div class="wrapper">
  <!-- Preloader -->
  @include('layouts.preloader')
  <!-- Navbar -->
  @include('layouts.navbar')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  @include('layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('layouts.main-header')
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content-header p-0 d-flex" style="height: 1500px; background: url('adminlte/dist/img/wall37.jpg')">
      <div class="container-fluid pl-0 pr-0 pb-0 pt-4" style="background-color: rgba(255,255,255,0.7)">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        @yield('content')
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.footer')
</div>
<!-- ./wrapper -->
@include('layouts.javascript')
</body>
</html>