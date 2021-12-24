<div class="container-fluid">
  <h4>Tambah Pekerja</h4>
  <hr>
  <br>
  <form method="post" action="<?php echo base_url('C_pekerja/home/simpan_data'); ?>" enctype="multipart/form-data">
    <div class="row mb-1">
      <label for="nama_lengkap" class="col-sm-1 col-form-label">Nama Lengkap</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_lengkap" >
      </div>
    </div>
    <div class="row mb-1">
      <label for="umur" class="col-sm-1 col-form-label">Umur</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="umur"  >
      </div>
    </div>
    <div class="row mb-1">
      <label for="gender" class="col-sm-1 col-form-label">Gender</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="gender" >
      </div>
    </div>
    <div class="row mb-1">
      <label for="jabatan" class="col-sm-1 col-form-label">Jabatan</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="jabatan" >
      </div>
    </div>

    <div class="row mb-1">
      <label for="gaji" class="col-sm-1 col-form-label">Gaji</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="gaji" >
      </div>
    </div>
    <div class="row mb-1">
      <label for="photo" class="col-sm-1 col-form-label">Photo</label>
      <div class="col-sm-5">
       <input type="file" id="photo" name="photo">
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
