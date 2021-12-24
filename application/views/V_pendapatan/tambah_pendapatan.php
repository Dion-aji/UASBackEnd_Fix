<div class="container-fluid">
  <h4>Tambah Pendapatan</h4>
  <hr>
  <br>
  <form method="post"enctype="multipart/form-data" action="<?php echo base_url('C_pendapatan/home/proses_tambah_pendapatan'); ?>">

    <div class="row mb-1">
      <label for="bulan" class="col-sm-1 col-form-label">Bulan</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="bulan" >
      </div>
    </div>

    <div class="row mb-1">
      <label for="total_pendapatan" class="col-sm-1 col-form-label">Pendapatan</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="total_pendapatan" >
      </div>
    </div>
    <div class="row mb-1">
      <label for="iklan_masuk" class="col-sm-1 col-form-label">Iklan Masuk</label>
      <div class="col-sm-5">
        <input type="type" class="form-control" name="iklan_masuk" >
      </div>
    </div>

    <div class="row mb-1">
      <label for="tambah" class="col-sm-1 col-form-label"></label>
      <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">Tambah</button>
        <button type="reset" class="btn btn-danger" >Reset</button>
      </div>
    </div>
    </form>
</div>
