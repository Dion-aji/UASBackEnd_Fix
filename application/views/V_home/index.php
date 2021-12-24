                <!-- Begin Page Content -->

                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Data Tugas</h>
                            <a href="<?php echo base_url('C_first/home/tambah_tugas'); ?>" class="btn btn-primary btn-responsive btn-sm float-right">Tambah data</a>
                        </div>
                          <?php echo $this->session->flashdata('notifikasi'); ?>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                      <tr>
                        <td>No</td>
                        <td>Nama Tugas</td>
                        <td>Sifat</td>
                        <td>Deskripsi</td>
                        <td>Kelola</td>
                      </tr>
                      </thead>
                      <tbody>
                      <?php $no=1; ?>
                      <?php foreach ($barang as $brg ): ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $brg['nama_tugas']; ?></td>
                        <td><?php echo $brg ['sifat']; ?></td>
                        <td><?php echo $brg['deskripsi']; ?></td>
                        <td>
                          <a href="<?php echo base_url()?>C_first/home/edit_data/<?php echo$brg['id_tugas']; ?>"class="btn btn-outline-primary">Edit</a>
                          <a href="<?php echo base_url()?>C_first/home/hapus_data/<?php echo$brg['id_tugas']; ?>"class="btn btn-outline-danger">Hapus</a>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>

                </div>
                </div>
                </div>
                </div>

            <!-- End of Main Content -->

              <!--  -->
