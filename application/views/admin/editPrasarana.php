<div class="container-fluid">
<div class="edit">
<div class="card">
  <h5 class="card-header">Edit Data Sarana</h5>
  <div class="card-body">
    <?php foreach($prasarana as $psa): ?>
      <form method="post" action="<?php echo base_url(). 'admin/UpPrasarana/update'?>" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-4">
        <input type="hidden" name="id" class="form-control" value="<?php echo $psa->id; ?>">
          <img src="/cisarua/uploads/prasarana/<?php echo $psa->gambar; ?>">
        </div>
        <div class="col-md-8">

        
        <div class="form-group">  
        <table class="table">
              <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" class="form-control" value="<?php echo $psa->judul; ?>"></td>
              <tr>
              <tr>
                <td>Keterangan</td>
                <td><textarea type="text" name="keterangan" class="form-control" rows="5"><?php echo $psa->keterangan; ?></textarea></td>
              <tr>
              <tr>
                <td>Gambar </td>
                <td><input type="file" name="gambar" class="form-control"></td>
              <tr>
            </table>
            <div class="edit">
                <button type="submit" class="simpan btn-primary btn-sm">Simpan</button>
                <button type="" class="back btn-success btn-sm">Kembali</button>
            </div>
            </div>
        </div>
    </div>
    </form>
    <?php endforeach; ?>
  </div>
</div>
</div>
</div>
