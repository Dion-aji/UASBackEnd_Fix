<div class="container-fluid">
  <h4>Edit Pendapatan</h4>
  <hr>
  <br>
  <form method="post" action="<?php echo base_url('C_pendapatan/home/proses_edit_pendapatan'); ?>">
    <input type="hidden" name="id_pendapatan" value="<?php echo $list['id_pendapatan']; ?>">

    <div class="row mb-1">
      <label for="bulan" class="col-sm-1 col-form-label">Bulan</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="bulan" required  value="<?php echo $list['bulan']; ?>">
      </div>
    </div>
    <div class="row mb-1">
      <label for="total_pendapatan" class="col-sm-1 col-form-label">Pendapatan</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="total_pendapatan" required  value="<?php echo $list['total_pendapatan']; ?>">
      </div>
    </div>
    <div class="row mb-1">
      <label for="iklan_masuk" class="col-sm-1 col-form-label">Iklan Masuk</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="iklan_masuk" required  value="<?php echo $list['iklan_masuk']; ?>">
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
