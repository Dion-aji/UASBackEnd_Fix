<div class="container-fluid">
  <h4>Tambah Absen</h4>
  <hr>
  <br>
  <form method="post"enctype="multipart/form-data" action="<?php echo base_url('C_absensi/home/proses_tambah_absen'); ?>">
    <div class="row mb-1">
      <label for="nama_pekerja" class="col-sm-1 col-form-label">nama_pekerja</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_pekerja" >
      </div>
    </div>
    <div class="row mb-1">
      <label for="pekerjaan" class="col-sm-1 col-form-label">Pekerjaan</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="pekerjaan"  >
      </div>
    </div>
    <div class="row mb-1">
      <label for="kehadiran" class="col-sm-1 col-form-label">Kehadiran</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="kehadiran" >
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
