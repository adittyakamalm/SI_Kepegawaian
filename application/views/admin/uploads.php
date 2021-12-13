<?php if ($this->session->userdata('username')) { ?>
<div class="container">
    <div class="uploads">
        
        <button class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#uploadStruktur"><i class="fas fa-plus fa-sm"></i>  Tambah Gambar Struktur</button>
        
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
                          <td align="center"><?php echo anchor('admin/uploads/hapus/'.$str['id'],'<div class="btna2 btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>

        <button class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#uploadCarousel"><i class="fas fa-plus fa-sm"></i>  Tambah Item Carousel</button>
        
        <table class="table table-bordered" id="tabel-data" widtd="100%" cellspacing="0">
            <tr align="center">
              <td>No.</td>
              <td>Judul</td>    
              <td>Keterangan</td>    
              <td>Gambar</td>    
              <td>Aksi</td>    
            </tr>
          <tbody>
            <?php 
                     $no=1;
                     foreach($carousel as $crs) : ?>
                        <tr>
                          <td align="center"><?= $no++ ?></td>
                          <td><?php echo $crs['judul']; ?></td>
                          <td><?php echo $crs['keterangan']; ?></td>
                          <td><?php echo $crs['gambar']; ?></td>
                          <td align="center"><?php echo anchor('admin/uploads/hapusCarousel/'.$crs['id'],'<div class="btna2 btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>

        <!-- Modal Struktur-->
        <div class="modal fade" id="uploadStruktur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Gambar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url(). 'admin/uploads/upload'?>" method="post" enctype="multipart/form-data">

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

<!-- Modal Carousel -->
<div class="modal fade" id="uploadCarousel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Gambar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url(). 'admin/uploads/uploadCarousel'?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" name="judul" class="form-control">      
                </div>

                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" class="form-control">      
                </div>
 
                <div class="form-group">
                  <label>Gambar Carousel :</label>
                  <input type="file" name="gambar" class="form-control">
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

<?php } else { ?>
    <div class="container mt-5">
      <div class="alert alert-danger" role="alert">
        <p class="text-center">
          Anda harus login terlebih dahulu!
        </p>
      </div>
    </div>
  <?php } ?>
