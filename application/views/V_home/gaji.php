<!-- Begin Page Content -->

<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Gaji</h>
            <a href="<?php echo base_url('C_gaji/home/tambah_data'); ?>" class="btn btn-primary btn-responsive btn-sm float-right">Tambah data</a>
        </div>
          <?php echo $this->session->flashdata('notifikasi'); ?>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
      <tr>
        <td>No</td>
        <td>Jabatan</td>
        <td>Gaji</td>
        <td>Tanggal</td>
        <td>Opsi</td>
      </tr>
      </thead>
      <tbody>
      <?php $no=1; ?>
      <?php foreach ($list as $lst ): ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $lst['jabatan']; ?></td>
        <td>Rp.<?php echo $lst ['gaji']; ?></td>
          <td><?php echo $lst ['tanggal']; ?></td>
        <td>
          <a href="<?php echo base_url()?>C_gaji/home/edit_data/<?php echo$lst['id_gaji']; ?>"class="btn btn-outline-primary">Edit</a>
          <a href="<?php echo base_url()?>C_gaji/home/hapus_data/<?php echo$lst['id_gaji']; ?>"class="btn btn-outline-danger">Hapus</a>
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
