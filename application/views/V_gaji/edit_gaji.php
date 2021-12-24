<div class="container-fluid">
  <h4>Edit Gaji</h4>
  <hr>
  <br>
  <form method="post" action="<?php echo base_url('C_gaji/home/proses_edit_gaji'); ?>">
    <input type="hidden" name="id_gaji" value="<?php echo $list['id_gaji']; ?>">

    <div class="row mb-1">
      <label for="jabatan" class="col-sm-1 col-form-label">Jabatan</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="jabatan" required  value="<?php echo $list['jabatan']; ?>">
      </div>
    </div>
    <div class="row mb-1">
      <label for="gaji" class="col-sm-1 col-form-label">Gaji</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="gaji" required  value="<?php echo $list['gaji']; ?>">
      </div>
    </div>
    <div class="row mb-1">
      <label for="gaji" class="col-sm-1 col-form-label">Tanggal</label>
      <div class="col-sm-5">
        <input type="date" class="form-control" name="tanggal" required  value="<?php echo $list['tanggal']; ?>">
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
