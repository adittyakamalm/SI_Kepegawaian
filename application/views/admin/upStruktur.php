<div class="container">
    <div class="upStruktur">
        
        <button class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#upload"><i class="fas fa-plus fa-sm"></i>  Tambah Gambar Struktur</button>
        
        <table class="table table-bordered" id="tabel-data" widtd="100%" cellspacing="0">
            <tr align="center">
              <td>No.</td>
              <td>Gambar</td>    
              <td>Aksi</td>    
            </tr>
          <tbody>
            <?php 
                     $no=1;
                     foreach($struktur as $str) : ?>
                        <tr>
                          <td align="center"><?= $no++ ?></td>
                          <td><?php echo $str['gambar_struktur']; ?></td>
                          <td align="center"><?php echo anchor('admin/struktur/hapus/'.$str['id'],'<div class="btna2 btn-danger btn-sm"><i class="fas fa-user-slash"></i></div>')?>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>

        <!-- Modal -->
        <div class="modal fade" id="upload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Gambar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url(). 'admin/struktur/upload'?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Gambar Struktur :</label>
                  <input type="file" name="gambar_struktur" class="form-control">
                </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
            