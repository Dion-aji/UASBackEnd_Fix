
<div class="container-fluid">
  <h4>Edit Pembaruan WEB</h4>
  <hr>
  <br>
  <form method="post" action="<?php echo base_url('C_pembaruan/home/proses_edit_pembaruan'); ?>">
    <input type="hidden" name="id_pembaruan" value="<?php echo $list['id_pembaruan']; ?>">

    <div class="row mb-1">
      <label for="nama_bug" class="col-sm-1 col-form-label">Nama BUG</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_bug" required  value="<?php echo $list['nama_bug']; ?>">
      </div>
    </div>
    <div class="row mb-1">
      <label for="tingkat" class="col-sm-1 col-form-label">Tingkat Error</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="tingkat" required  value="<?php echo $list['tingkat']; ?>">
      </div>
    </div>
    <div class="row mb-1">
      <label for="deskripsi" class="col-sm-1 col-form-label">Keterangan</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="deskripsi" required  value="<?php echo $list['deskripsi']; ?>">
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
