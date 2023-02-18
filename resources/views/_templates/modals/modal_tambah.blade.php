<div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-sm">Tambah Data Baru</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <!-- form start -->
              <form action="{{route('siswa.tambah')}}" method="post">
                {{method_field('post')}}
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Isi Nama">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Isi Jenis Kelamin">
                  </div>
                  <div class="form-group">
                    <label>Agama</label>
                    <input type="text" class="form-control" name="agama" id="agama" placeholder="Isi Agama">
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Isi Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label>Tanggal harir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Isi Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Isi Alamat">
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