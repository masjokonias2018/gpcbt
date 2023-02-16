      <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-sm">Edit Data {{$siswa->name}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <!-- form start -->
              <form action="{{route('siswa.id')}}" method="post">
                {{method_field('patch')}}
                {{csrf_field()}}
                <div class="card-body">
                  <input type="hidden" name="sis_id" id="sis_id" value="">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name" id="nama">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                  </div>
                  <div class="form-group">
                    <label>Agama</label>
                    <input type="text" class="form-control" name="agama" id="agama">
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                  </div>
                  <div class="form-group">
                    <label>Tanggal harir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" >
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Nanti Saja</button>
                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
                <!-- /.card-body -->
              </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->