@extends('admin.app')
@section('style')
<link rel="stylesheet" href="{{asset('adminlte/plugins/sweetalert2/sweetalert2.min.css')}}">
<link rel="stylesheet" href="{{asset('adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
@stop
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
      <div class="card-body">
        <div class="col-sm-12">
          <table id="tabelsiswa" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
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
                @if ($siswa->count() > 0)
                @foreach($siswa as $no => $siswa)
                <tr>
                  <!-- <input type="hidden" class="delete_id" value="{{ $siswa->id }}"> -->
                  <th>{{ $no+1 }}</th>  
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
                    <!-- <a href="siswa/delete/{{$siswa->id}}" type="button">
                      <span  class="badge bg-danger">Hapus</span>
                    </a> -->
                    <a href="#" type="button" >
                      <span siswa-id="{{$siswa->id}}" siswa-nama="{{$siswa->name}}" class="badge bg-danger delete">Hapus</span>
                    </a>
                    <!-- <form action="{{ route('siswa.hapus', $siswa->id) }}" method="POST">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger btn-sm btndelete">Hapus</button>
                    </form> -->
                  </td>  
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="10" align="center">Tidak ada data</td>
                </tr>
                @endif
              </tbody>
          </table>    
        </div>
      </div>
    </div>
    @include('_templates.modals.modal_edit')
    @include('_templates.modals.modal_tambah')
@stop

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
<script src="{{asset('adminlte/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script>
  $('.delete').click(function(){
    var siswa_id=$(this).attr('siswa-id');
    var siswa_nm=$(this).attr('siswa-nama');
      const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: 'Yakin?',
          text: "Anda akan menghapus "+siswa_nm+ "?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Ya Hapus!',
          cancelButtonText: 'Tidak',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            window.location="/siswa/delete/"+siswa_id+""
            swalWithBootstrapButtons.fire(
              'Terhapus!',
              'Data siswa berhasil dihapus.',
              'success'
            )
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Gagal',
              'Data siswa ini masih aman :)',
              'error'
            )
          }
        })
  })
</script>  
<script>
          
</script>
@stop