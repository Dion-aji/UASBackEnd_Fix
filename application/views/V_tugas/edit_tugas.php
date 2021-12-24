<div class="container-fluid">
  <h4>Edit Tugas</h4>
  <hr>
  <br>
  <form method="post" action="<?php echo base_url('C_first/home/proses_edit_tugas'); ?>">
    <input type="hidden" name="id_tugas" value="<?php echo $barang['id_tugas']; ?>">
    <div class="row mb-1">
      <label for="nama_tugas" class="col-sm-1 col-form-label">Nama Tugas</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_tugas" required="" value="<?php echo $barang['nama_tugas']; ?>">
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
        <textarea name="deskripsi" id="deskripsi" placeholder="deskripsi" rows="8" cols="80" ><?php echo $barang['deskripsi'];?></textarea>
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
<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('deskripsi')
    </script>
