@include('_templates.dashboard._header')
@include('_templates.dashboard._sidebar')
<!-- Site wrapper -->
<div class="wrapper">
<!-- navbar -->
@include('_templates.dashboard._navbar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
        <!-- /.card-header -->
      <div class="card-body">
        <div class="col-sm-12">
          <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
            <thead>
              <tr>
                <th>Nama</th>
                <th>L/P</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                @foreach($siswa as $siswa)
                <tr>
                  <td>{{$siswa->name}}</td>
                  <td>{{$siswa->jenis_kelamin}}</td>
                  <td>{{$siswa->tempat_lahir}}</td>
                  <td>{{$siswa->tanggal_lahir}}</td>
                  <td>{{$siswa->agama}}</td>
                  <td>{{$siswa->alamat}}</td>
                  <td>
                    <button 
                      type="button" 
                      data-toggle="modal" 
                      data-nm="{{ $siswa->name }}" 
                      data-jk="{{ $siswa->jenis_kelamin }}"
                      data-tl="{{ $siswa->tempat_lahir }}"
                      data-tgl="{{ $siswa->tanggal_lahir }}"
                      data-ag="{{ $siswa->agama }}"
                      data-al="{{ $siswa->alamat }}"
                      data-sis_id="{{ $siswa->id }}"
                      data-target="#modal-edit" 
                      class="btn btn-block btn-warning btn-xs">Edit
                    </button>
                  </td>  
                </tr>
                @endforeach
              </tbody>
        </div>
      <!-- /.card-body -->
      </div>
    </div>
    @include('_templates.modals.modal_edit')    
@include('_templates.dashboard._footer')