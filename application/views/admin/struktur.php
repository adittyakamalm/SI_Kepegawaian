<div class="struktur">
    <?php
     $no=1;
     foreach($struktur as $str) : ?>
     <input type="image" src="../uploads/struktur/<?php echo $str['gambar_struktur']; ?>" data-bs-toggle="modal" data-bs-target="#upload" />
     <?php endforeach; ?>
    <!-- <img src="<?= base_url('assets/images/struktur.png'); ?>" alt="Lambang SPN"> -->
</div>

<!-- Modal -->
<div class="modal fade" id="upload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Gambar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url(). 'admin/struktur/update'?>" method="post" enctype="multipart/form-data">
                <div class="modalimg">
                    <img src="../uploads/struktur/<?php echo $str['gambar_struktur']; ?>">
                </div>
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
