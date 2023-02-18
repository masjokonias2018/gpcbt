@extends('admin.app')
@section('judul', 'Data Siswa')
@section('siswa', 'active')
@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel Data Siswa SMP Negeri 2 Blangjerango</h3>
        
        <h3 data-toggle="modal" type="button" class="card-title float-right" data-target="#modal-tambah">
          <i class="fas fa-plus"></i>
        </h3>
        
      </div>
        <!-- /.card-header -->
      <div class="card-body">
        <div class="col-sm-12">
          <table id="example1" class="table table-bordered table-striped">
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
                    <span 
                      type="button" 
                      class="badge bg-warning"
                      data-toggle="modal" 
                      data-nm="{{ $siswa->name }}" 
                      data-jk="{{ $siswa->jenis_kelamin }}"
                      data-tl="{{ $siswa->tempat_lahir }}"
                      data-tgl="{{ $siswa->tanggal_lahir }}"
                      data-ag="{{ $siswa->agama }}"
                      data-al="{{ $siswa->alamat }}"
                      data-sis_id="{{ $siswa->id }}"
                      data-target="#modal-edit">Edit
                    </span>
                    <a href="siswa/delete/{{$siswa->id}}" type="button">
                    <span  class="badge bg-danger">Hapus</span>
                    </a>
                  </td>  
                </tr>
                @endforeach
              </tbody>
        </div>
      <!-- /.card-body -->
      </div>
    </div>
    @include('_templates.modals.modal_edit')
    @include('_templates.modals.modal_tambah')
@endsection
@extends('layouts.javascript')
@section('script')
<script>
  $('#modal-edit').on('show.bs.modal', function (event){
    var button = $(event.relatedTarget)
    var nama = button.data('nm')
    var gender = button.data('jk')
    var temla = button.data('tl')
    var tanla = button.data('tgl')
    var agm = button.data('ag')
    var almt = button.data('al')
    var sis_id = button.data('sis_id')

    var modal = $(this)
    modal.find('.card-body #name').val(nama);
    modal.find('.card-body #jenis_kelamin').val(gender);
    modal.find('.card-body #tempat_lahir').val(temla);
    modal.find('.card-body #tanggal_lahir').val(tanla);
    modal.find('.card-body #agama').val(agm);
    modal.find('.card-body #alamat').val(almt);
    modal.find('.card-body #sis_id').val(sis_id);
  })
</script>
@endsection