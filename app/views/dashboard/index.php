

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $data['judul'];?></h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h5 style="font-weight: bold;">Khataman</h5>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>

                <?= $data['countbinadhor'] + $data['countbilghoib'];?>
                </h3>

                <p>Total</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="<?= BASEURL;?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $data['countbinadhor'];?></h3>

                <p>Khataman Binadhor</p>
              </div>
              <div class="icon">
                <i class="fas fa-quran"></i>
              </div>
              <a href="<?= BASEURL;?>binadhor" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $data['countbilghoib'];?></h3>

                <p>Khataman Bilghoib</p>
              </div>
              <div class="icon">
                <i class="fas fa-quran"></i>
              </div>
              <a href="<?= BASEURL;?>bilghoib" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3 style="font-size: 20px;" >Rp. <?= $data_uang = ($data['countbayarbilghoibputra0']+$data['countbayarbilghoibputri0']+$data['countbayarbinadhorputra0']+$data['countbayarbinadhorputri0'])*200000;
                  ?></h3>
                <p>Uang Masuk</p>
              </div>
              <div class="icon">
              <i class="fas fa-coins"></i>
              </div>
              <a href="<?= BASEURL;?>bilghoib" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box shadow">
                <span class="info-box-icon bg-dark"><i class="fas fa-male"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Binadhor Putra</span>
                  <span class="info-box-number"><?= $data['countbinadhorputra'];?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

          <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box shadow">
                <span class="info-box-icon bg-secondary"><i class="fas fa-female"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Binadhor Putri</span>
                  <span class="info-box-number"><?= $data['countbinadhorputri'];?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box shadow">
                <span class="info-box-icon bg-dark"><i class="fas fa-male"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Bilghoib Putra</span>
                  <span class="info-box-number"><?= $data['countbilghoibputra'];?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

          <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box shadow">
                <span class="info-box-icon bg-secondary"><i class="fas fa-female"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Bilghoib Putri</span>
                  <span class="info-box-number"><?= $data['countbilghoibputri'];?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>









        <h5 style="font-weight: bold;">Pembayaran</h5>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box shadow">
                <div class="info-box-content">
                  <span class="info-box-number">Binadhor Putra</span>
                  <span class="info-box-text">Lunas : <?= $data['countbayarbinadhorputra0'];?></span>
                  <span class="info-box-text">Belum Lunas : <?= $data['countbayarbinadhorputra1'];?></span>
                  <span class="info-box-text">Uang L. :Rp <?= $data_uang = $data['countbayarbinadhorputra0']*200000;
                  ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

          <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box shadow">

                <div class="info-box-content">
                <span class="info-box-number">Binadhor Putri</span>
                  <span class="info-box-text">Lunas : <?= $data['countbayarbinadhorputri0'];?></span>
                  <span class="info-box-">Belum Lunas : <?= $data['countbayarbinadhorputri1'];?></span>
                  <span class="info-box-">Uang L. :Rp <?= $data_uang = $data['countbayarbinadhorputri0']*200000;
                  ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box shadow">
                <div class="info-box-content">
                <span class="info-box-number">Bilghoib Putra</span>
                  <span class="info-box-text">Lunas : <?= $data['countbayarbilghoibputra0'];?></span>
                  <span class="info-box-">Belum Lunas : <?= $data['countbayarbilghoibputra1'];?></span>
                  <span class="info-box-">Uang L. :Rp <?= $data_uang = $data['countbayarbilghoibputra0']*200000;
                  ?></span>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
          </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box shadow">
                <div class="info-box-content">
                <span class="info-box-number">Bilghoib Putri</span>
                  <span class="info-box-text">Lunas : <?= $data['countbayarbilghoibputri0'];?></span>
                  <span class="info-box-">Belum Lunas : <?= $data['countbayarbilghoibputri1'];?></span>
                  <span class="info-box-">Uang L. :Rp <?= $data_uang = $data['countbayarbilghoibputri0']*200000;
                  ?></span>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
          </div>



        </div>







        </div><!-- /.container-fluid -->
    </section>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
