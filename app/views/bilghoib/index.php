
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
                <h3 class="card-title">Data Khataman Bilghoib</h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <div class="row">
                      <div class="col-md-10 mb-2">
                          <button type="button" class="btn btn-primary tombolTambahBilghoib" data-toggle="modal" data-target="#modal-default"><i class="fas fa-user-plus"></i> Tambah</button>
                        </div>
                      <div class="col-md-2">
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
                      </div>
                    </div>
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Lahir</th>
                    <th>Alamat</th>
                    <th>Jenkel</th>
                    <th>Nama Ayah</th>
                    <th>No Telp</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach ($data['bilghoib_total'] as $bilghoib) : 
                    ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $bilghoib['nama']; ?></td>
                    <td><?= $bilghoib['kelas']; ?> <?= $bilghoib['jenjang']; ?></td>
                    <td><?= $bilghoib['temp_lahir']; ?>, <?=date('d F Y', strtotime($bilghoib['lahir'])) ?></td>
                    <td><?= $bilghoib['alamat']; ?></td>
                    <td><?= $bilghoib['jenkel']; ?></td>
                    <td><?= $bilghoib['nama_ayah']; ?></td>
                    <td><?= $bilghoib['no_telp']; ?></td>
                    <td>
                    <div class="btn-group">
                        <a class="btn btn-primary tampilModalUbahbilghoib" href="<?= BASEURL; ?>bilghoib/ubah/<?= $bilghoib['id']; ?>"  data-toggle="modal" data-target="#modal-default" data-id="<?= $bilghoib['id']; ?>">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-danger" href="<?= BASEURL; ?>bilghoib/hapus/<?= $bilghoib['id']; ?>" onclick=" return confirm('Anda yakin ingin menghapus data ?');">
                          <i class="fas fa-trash"></i>
                        </a>
                        
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
              <form action="<?= BASEURL;?>bilghoib/tambah" method="post">
                                  <input type="hidden" name="id" id="id">
                                  <div class="form-group">
                                    <label for="nama">Nama Santri</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Santri" required autocomplete="off">
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-6">
                                        <label for="kelas">Kelas</label>
                                          <select class="form-control" name="kelas"  id="kelas" required>
                                            <option value=" "> </option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                          </select>
                                      </div>
                                          
                                        <div class="col-6">
                                          <label for="jenjang">Jenjang</label>
                                          <select class="form-control" name="jenjang" id="jenjang" required>
                                            <option></option>
                                            <option value="SMP">smp</option>
                                            <option value="MTS">mts</option>
                                            <option value="MA">ma</option>
                                            <option value="SMK">smk</option>
                                            <option value="SALAF">salaf</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-grup">
                                      <div class="row">
                                        <div class="col-6">
                                          <label for="temp_lahir">Tempat Lahir</label>
                                          <input type="text" class="form-control" id="temp_lahir" name="temp_lahir" placeholder="Tempat Lahir" required autocomplete="off">
                                        </div>
                                        <div class="col-6">
                                          <label for="lahir">Tanggal Lahir</label>
                                          <input type="date" class="form-control" id="lahir" name="lahir" placeholder="Tanggal Lahir" required>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-grup mt-3">
                                      <div class="row">
                                        <div class="col-6">
                                          <label for="jenkel">Jenis Kelamin</label>
                                          <select class="form-control" name="jenkel" id="jenkel" required>
                                            <option value=""></option>
                                            <option value="putra">Putra</option>
                                            <option value="putri">Putri</option>
                                          </select>
                                        </div>
                                        <div class="col-6">
                                          <label for="nama_ayah">Nama Ayah</label>
                                          <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group mt-3">
                                      <label for="alamat">Alamat</label>
                                      <textarea class="form-control" id="alamat" name="alamat" rows="2" placeholder="Alamat (desa,rt/rt,kecamatan,kelurahan,kota/kab)" required autocomplete="off"></textarea>
                                    </div>
                                    <div class="form-grup">
                                    <label for="no_telp">No Telepon</label>
                                          <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="No Telepon">
                                    </div>
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
  <!-- </div> -->
                          <!-- /.modal -->
                  