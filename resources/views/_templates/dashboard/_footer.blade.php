  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer text-sm">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
  <!-- DataTables  & Plugins -->
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
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
    modal.find('.card-body #nama').val(nama);
    modal.find('.card-body #jenis_kelamin').val(gender);
    modal.find('.card-body #tempat_lahir').val(temla);
    modal.find('.card-body #tanggal_lahir').val(tanla);
    modal.find('.card-body #agama').val(agm);
    modal.find('.card-body #alamat').val(almt);
    modal.find('.card-body #sis_id').val(sis_id);
  })
</script>
</body>
</html>