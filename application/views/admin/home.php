<?php if ($this->session->userdata('username')) { ?>
<title><?= $pageTitle ?></title>
<div class="card shadow mb-4">
  <div class="card-header py-3">
</div>
    <div class="card-body">
      <button class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#tambahData"><i class="fas fa-plus fa-sm"></i>  Tambah Data Personil</button>
      <div class="table-responsive">
        <table class="table table-bordered" id="tabel-data" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th>No.</th>
              <th>Nama Personil</th>
              <th scope="col">Pangkat</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">NRP</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Jabatan</th>    
              <th scope="col">Edit</th>    
              <th scope="col">Hapus</th>    
            </tr>
          </thead>
          <tbody>
            <?php 
                     $no=1;
                     foreach($personil as $psn) : ?>
                        <tr>
                          <td align="center"><?= $no++ ?></td>
                          <td><?php echo $psn['NAMA']; ?></td>
                          <td align="center"><?php echo $psn['PANGKAT']; ?></td>
                          <td align="center"><?php echo $psn['Jenis_Kelamin']; ?></td>
                          <td align="center"><?php echo $psn['NRP_NIP']; ?></td>
                          <td><?php echo $psn['TGL_LAHIR']; ?></td>
                          <td><?php echo $psn['JABATAN']; ?></td>
                          <td align="center"><?php echo anchor('admin/home/edit/'.$psn['id'],'<div class="btna1 btn-secondary btn-sm"><i class="fas fa-user-edit"></i></div>')?>
                          <td align="center"><?php echo anchor('admin/home/hapus/'.$psn['id'],'<div class="btna2 btn-danger btn-sm"><i class="fas fa-user-slash"></i></div>')?>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

<!-- Modal -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Personel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/home/tambah_data'?>" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
          <label>Nama Personel :</label>
          <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
          <label>Pangkat :</label>
          <input type="text" name="pangkat" class="form-control">
        </div>
        <div class="form-group">
          <label>Jenis Kelamin (L/P) :</label>
          <input type="text" name="jenis_kelamin" class="form-control">
        </div>
        <div class="form-group">
          <label>NRP / NIP :</label>
          <input type="text" name="nrpnip" class="form-control">
        </div>
        <div class="form-group">
          <label>Tanggal Lahir :</label>
          <input type="text" name="tglLahir" class="form-control">
        </div>
        <div class="form-group">
          <label>Jabatan :</label>
          <input type="text" name="jabatan" class="form-control">
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
            
<?php } else { ?>
    <div class="container mt-5">
      <div class="alert alert-danger" role="alert">
        <p class="text-center">
          Anda harus login terlebih dahulu!
        </p>
      </div>
    </div>
  <?php } ?>
            
            
            