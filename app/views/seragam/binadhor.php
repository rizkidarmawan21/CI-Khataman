
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
                <h3 class="card-title">Data Khataman Binadhor</h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <div class="row">
                      <div class="col-md-10 mb-2">
                          <button type="button" class="btn btn-primary tombolTambahSerbina" data-toggle="modal" data-target="#modal-default"><i class="fas fa-user-plus"></i> Tambah</button>
                        </div>
                      <!-- <div class="col-md-2">
                        <div class="btn-group mb-3">
                          <span type="button" class="btn btn-default">Jenkel</span>
                          <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="<?= BASEURL; ?>bilghoib">Select All</a>
                              <a class="dropdown-item" href="<?= BASEURL; ?>bilghoib/putra">Santri Putra</a>
                              <a class="dropdown-item" href="<?= BASEURL; ?>bilghoib/putri">Santri Putri</a>
                            </div>
                          </div>
                      </div> -->
                    </div>
                  <thead>
                    
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 20%">Nama</th>
                    <th style="width: 20%">Ukuran</th>
                   
                    <th style="width: 20%">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no=1; 
                  foreach ($data['seragam_total'] as $seragam) : 
                  ?>
                  <tr>
                    <td><?= $no++?></td>
                    <td><?= $seragam['nama']?></td>
                    <td><?= $seragam['ukuran']?></td>
                    <td>
                    <div class="btn-group">
                        <a class="btn btn-primary tampilModalUbahserbina" href="<?= BASEURL; ?>seragam/ubah/<?= $seragam['id']; ?>"  data-toggle="modal" data-target="#modal-default" data-id="<?= $seragam['id']; ?>">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-danger" href="<?= BASEURL; ?>seragam/hapus/<?= $seragam['id']; ?>" onclick=" return confirm('Anda yakin ingin menghapus data ?');">
                          <i class="fas fa-trash"></i>
                        </a>
                        
                      </div>
                    </td>
                  </tr>
                  <?php endforeach;?>
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
              <form action="<?= BASEURL;?>seragam/tambah" method="post">
                                  <input type="hidden" name="id" id="id">
                                    <div class="form-group">
                                    <label for="nama">Nama Santri</label>
                                      <select class="custom-select" name="nama" id="nama" required>
                                            <option value=""></option>
                                            <?php
                                            $no=1;
                                            foreach ($data['binadhor_total'] as $binadhor) : 
                                            ?>
                                            <option value="<?= $binadhor['nama']; ?>"><?= $binadhor['nama']; ?></option>
                                            <?php endforeach;?>
                                      </select>
                                    </div>
                                  <!-- akhir konten modal -->
                                
                                <div class="form-group">
                                  <label for="ukuran">Ukuran</label>
                                  <select class="form-control" name="ukuran" id="ukuran">
                                    <option value=""> </option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                    <option value="XXXL">XXXL</option>
                                  </select>
                                  </div>
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
                        </div>
                          <!-- /.modal -->
                  