
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pembayaran Khataman Bilghoib <span class="badge badge-success"><?= $data['status'];?></span></h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <div class="row">
                        <div class="col-md-10">
                        <div class="btn-group">
                            <a href="<?= BASEURL; ?>pembayaran" class="btn btn-secondary" >Binadhor</a>
                            <a href="" class="btn btn-dark" >Bilghoib</a>
                        </div>
                        </div>
                      <div class="col-md-2">
                        <div class="btn-group mb-3">
                          <span type="button" class="btn btn-default">Status</span>
                          <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="<?= BASEURL; ?>pembayaran/bilghoib">Select All</a>
                              <a class="dropdown-item" href="<?= BASEURL; ?>pembayaran/bilghoiblunas">Lunas</a>
                              <a class="dropdown-item" href="<?= BASEURL; ?>pembayaran/bilghoibblmlunas">Belum Lunas</a>
                            </div>
                          </div>
                      </div>
                    </div>
                  <thead>
                    
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 40%">Nama</th>
                    <th style="width: 10%">Jenkel</th>
                    <th style="width: 10%">Kelas</th>
                    <th style="width: 20%">Status</th>
                    <th style="width: 10%">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach ($data['bilghoib_total'] as $bilghoib) :
                    
                    ?>
                  <tr>
                    <td><?= $no++?></td>
                    <td><?= $bilghoib['nama'];?></td>
                    <td><?= $bilghoib['jenkel'];?></td>
                    <td><?= $bilghoib['kelas']; ?> <?= $bilghoib['jenjang']; ?></td>
                    <td style="text-align: center;">
                      <?php
                      if ($bilghoib['statuss'] == 1) {
                        echo '
                        <span class="badge badge-danger">Belum Lunas</span>
                        ';
                      } elseif ($bilghoib['statuss'] == 0){
                        echo '
                        <span class="badge badge-success">Lunas</span>
                        ';
                      }
                      ?>
                    </td>
                    <td  style="text-align: center;">
                    <div class="btn-group">

                    <?php if($bilghoib['statuss'] == 1 ) :?>
                    <a class="btn btn-primary ModalBayarbilghoib" href="<?= BASEURL; ?>pembayaran/ubah/<?= $bilghoib['id']; ?>"  data-toggle="modal" data-target="#modal-default" data-id="<?= $bilghoib['id']; ?>">
                          <i class="fas fa-edit"></i>
                        </a>
                      <?php else:?>
                    <a class="btn btn-primary ModalBayarbilghoib" href="<?= BASEURL; ?>pembayaran/ubah/<?= $bilghoib['id']; ?>"  data-toggle="modal" data-target="#modal-default" data-id="<?= $bilghoib['id']; ?>">
                          <i class="fas fa-edit"></i>
                        </a>
                    <a class="btn btn-warning ModalBayarbilghoib" href="<?= BASEURL; ?>pembayaran/printBilghoib/<?= $bilghoib['id']; ?>" target="blank" >
                          <i class="fas fa-print"></i>
                        </a>

                        <?php endif?>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





  <!-- modal -->
  
  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="titlemodal">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- konten modal -->
              <form action="<?= BASEURL;?>pembayaran/tambah" method="post">
                                  <input type="hidden" name="id" id="id">
                                  <input type="number" class="form-control" id="statuss" name="statuss" value="0" hidden>
                                  <p>Apakah Benar Santri Sudah Membayar ?</p>
                                  <!-- akhir konten modal -->
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                  <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                              </form>
                            </div>
                            <!-- /.modal-dialog -->
                          </div> 
                          <!-- /.modal -->
                  