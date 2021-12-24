<div class="container-fluid">
  <h4>Tambah Gaji</h4>
  <hr>
  <br>
  <form method="post"enctype="multipart/form-data" action="<?php echo base_url('C_gaji/home/proses_tambah_gaji'); ?>">

    <div class="row mb-1">
      <label for="jabatan" class="col-sm-1 col-form-label">Jabatan</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="jabatan" >
      </div>
    </div>

    <div class="row mb-1">
      <label for="gaji" class="col-sm-1 col-form-label">Gaji</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="gaji" >
      </div>
    </div>
    <div class="row mb-1">
      <label for="tanggal" class="col-sm-1 col-form-label">Tanggal</label>
      <div class="col-sm-5">
        <input type="date" class="form-control" name="tanggal" >
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
