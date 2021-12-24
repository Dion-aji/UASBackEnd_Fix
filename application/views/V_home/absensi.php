<!-- Begin Page Content -->

<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Absen</h>
            <a href="<?php echo base_url('C_absensi/home/tambah_data'); ?>" class="btn btn-primary btn-responsive btn-sm float-right">Tambah data</a>
        </div>
          <?php echo $this->session->flashdata('notifikasi'); ?>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
      <tr>
        <td>No</td>
        <td>Nama Pekerja</td>
        <td>Pekerjaan</td>
        <td>Kehadiran</td>
        <td>Opsi</td>
      </tr>
      </thead>
      <tbody>
      <?php $no=1; ?>
      <?php foreach ($list as $lst ): ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $lst['nama_pekerja']; ?></td>
        <td><?php echo $lst ['pekerjaan']; ?></td>
        <td><?php echo $lst['kehadiran']; ?></td>
        <td>
          <a href="<?php echo base_url()?>C_absensi/home/edit_data/<?php echo$lst['id_absen']; ?>"class="btn btn-outline-primary">Edit</a>
          <a href="<?php echo base_url()?>C_absensi/home/hapus_data/<?php echo$lst['id_absen']; ?>"class="btn btn-outline-danger">Hapus</a>
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
