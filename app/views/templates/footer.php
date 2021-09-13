

  <footer class="main-footer">
    <strong>Application Created With <i class="fas fa-heart" style="color:red;" ></i> By <a href="https://rizkidarmawan21.github.io/" target="blank">Rizki Darmawan</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Versi</b> 0.1.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= BASEURL; ?>dash/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= BASEURL; ?>dash/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= BASEURL; ?>dash/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= BASEURL; ?>dash/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= BASEURL; ?>dash/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= BASEURL; ?>dash/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= BASEURL; ?>dash/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= BASEURL; ?>dash/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= BASEURL; ?>dash/plugins/moment/moment.min.js"></script>
<script src="<?= BASEURL; ?>dash/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= BASEURL; ?>dash/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= BASEURL; ?>dash/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= BASEURL; ?>dash/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= BASEURL; ?>dash/dist/js/adminlte.js"></script>
<script src="<?= BASEURL; ?>dash/dist/js/adminlte.min.js"></script>

<!-- Select2 -->
<script src="<?= BASEURL; ?>dash/plugins/select2/js/select2.full.min.js"></script>


<!-- DataTables  & Plugins -->
<script src="<?= BASEURL; ?>dash/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= BASEURL; ?>dash/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= BASEURL; ?>dash/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= BASEURL; ?>dash/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= BASEURL; ?>dash/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= BASEURL; ?>dash/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= BASEURL; ?>dash/plugins/jszip/jszip.min.js"></script>
<script src="<?= BASEURL; ?>dash/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= BASEURL; ?>dash/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= BASEURL; ?>dash/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= BASEURL; ?>dash/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= BASEURL; ?>dash/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= BASEURL; ?>dash/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= BASEURL; ?>dash/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= BASEURL; ?>dash/dist/js/pages/dashboard.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy","excel", "pdf","print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  
  $(function () {
    bsCustomFileInput.init();
  });
</script>

<!-- my js -->
  <script src="<?= BASEURL; ?>dash/dist/js/myscript.js"></script>
</body>
</html>