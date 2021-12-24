<div class="container-fluid">
  <h4>Tambah Pembaruan</h4>
  <hr>
  <br>
  <form method="post"enctype="multipart/form-data" action="<?php echo base_url('C_pembaruan/home/proses_tambah_pembaruan'); ?>">

    <div class="row mb-1">
      <label for="nama_bug" class="col-sm-1 col-form-label">Nama Bug</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_bug" >
      </div>
    </div>

    <div class="row mb-1">
      <label for="tingkat" class="col-sm-1 col-form-label">Tingkat Error</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="tingkat" >
      </div>
    </div>
    <div class="row mb-1">
      <label for="deskripsi" class="col-sm-1 col-form-label">Keterangan</label>
      <div class="col-sm-5">
        <input type="type" class="form-control" name="deskripsi" >
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
