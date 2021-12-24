<div class="container-fluid">
  <h4>Tambah Tugas</h4>
  <hr>
  <br>
  <form method="post"enctype="multipart/form-data" action="<?php echo base_url('C_first/home/proses_tambah_tugas'); ?>">
    <div class="row mb-1">
      <label for="nama_tugas" class="col-sm-1 col-form-label">nama_tugas</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_tugas" >
      </div>
    </div>
    <div class="row mb-1">
      <label for="sifat" class="col-sm-1 col-form-label">Sifat</label>
      <div class="col-sm-5">
        <select class="form-control" id="sifat" name="sifat">
             <option value="TugasRingan">Tugas Ringan</option>
               <option value="Penting">Penting</option>
               <option value="SangatPenting">Sangat Penting</option>
        </select>
      </div>
    </div>
    <div class="row mb-1">
      <label for="deskripsi" class="col-sm-1 col-form-label">Deskripsi</label>
      <div class="col-sm-5">
          <textarea name="deskripsi" id="deskripsi" placeholder="deskripsi" rows="8" cols="80"></textarea>
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
<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('deskripsi')
    </script>
