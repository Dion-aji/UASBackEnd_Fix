<div class="container-fluid">
  <h4>Edit Absensi</h4>
  <hr>
  <br>
  <form method="post" action="<?php echo base_url('C_absensi/home/proses_edit_absen'); ?>">
    <input type="hidden" name="id_absen" value="<?php echo $list['id_absen']; ?>">
    <div class="row mb-1">
      <label for="nama_pekerja" class="col-sm-1 col-form-label">Nama Lengkap</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_pekerja" required="" value="<?php echo $list['nama_pekerja']; ?>">
      </div>
    </div>
    <div class="row mb-1">
      <label for="pekerjaan" class="col-sm-1 col-form-label">Pekerjaan</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="pekerjaan" required  value="<?php echo $list['pekerjaan']; ?>" >
      </div>
    </div>
    <div class="row mb-1">
      <label for="kehadiran" class="col-sm-1 col-form-label">Kehadiran</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="kehadiran" required  value="<?php echo $list['kehadiran']; ?>">
      </div>
    </div>
    <div class="row mb-1">
      <label for="tambah" class="col-sm-1 col-form-label"></label>
      <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
    </form>
</div>
