<!-- Begin Page Content -->

<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Karyawan atau pekerja</h>
            <a href="<?php echo base_url('C_pekerja/home/tambah_data'); ?>" class="btn btn-primary btn-responsive btn-sm float-right">Tambah data</a>
        </div>
          <?php echo $this->session->flashdata('notifikasi'); ?>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
      <tr>
        <td>No</td>
        <td>Nama lengkap</td>
        <td>Umur</td>
        <td>Gender</td>
        <td>Jabatan</td>
        <td>Gaji</td>
        <td>Foto</td>
        <td>Opsi</td>
      </tr>
      </thead>
      <tbody>
      <?php $no=1; ?>
      <?php foreach ($list as $lst ): ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $lst['nama_lengkap']; ?></td>
        <td><?php echo $lst ['umur']; ?> Tahun</td>
        <td><?php echo $lst['gender']; ?></td>
        <td><?php echo $lst['jabatan']; ?></td>
        <td>Rp.<?php echo $lst ['gaji']; ?></td>
        <td class="text-center">
				<img src="<?php echo base_url('uploads/'.$lst['photo']); ?>" style="width:50px; height:50px">
				</td>
        <td>
          <a href="<?php echo base_url()?>C_pekerja/home/edit_data/<?php echo$lst['id_pekerja']; ?>"class="btn btn-outline-primary">Edit</a>
          <a href="<?php echo base_url()?>C_pekerja/home/hapus_data/<?php echo$lst['id_pekerja']; ?>"class="btn btn-outline-danger">Hapus</a>
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
