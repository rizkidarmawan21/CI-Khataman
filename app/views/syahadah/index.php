
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $data['judul'];?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
          <?php Flasher::flash(); ?>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php Flasher::flash(); ?>











<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Cetak Syahadah</h3>
              </div>
              <!-- /.card-header -->

              <div class="col-md mt-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <p style="text-align: center; font-weight:bolder;">Binadhor Putra</p>
              </div>
              <a href="<?= BASEURL;?>syahadah/printBinadhorPutra" class="small-box-footer">Cetak <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
              <div class="col-md mt-3">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <p style="text-align: center; font-weight:bolder;">Binadhor Putri</p>
              </div>
              <a href="<?= BASEURL;?>syahadah/printBinadhorPutri" class="small-box-footer">Cetak <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
              <div class="col-md mt-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <p style="text-align: center; font-weight:bolder;">Bilghoib Putra</p>
              </div>
              <a href="<?= BASEURL;?>syahadah/printBilghoibPutra" class="small-box-footer">Cetak <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
              <div class="col-md mt-3">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <p style="text-align: center; font-weight:bolder;">Bilghoib Putri</p>
              </div>
              <a href="<?= BASEURL;?>syahadah/printBilghoibPutri" class="small-box-footer">Cetak <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

            </div>
            <!-- /.card -->
          </div>




          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-secondary">
              <!-- /.card-header -->
<br>
<br>
<br>
<br>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->










  </div>
  <!-- /.content-wrapper -->
