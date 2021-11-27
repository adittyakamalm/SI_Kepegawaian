<html>
<body>
<div class="col-lg-6 mx-auto">
	<div class="container">
		<div class="search">
			<img src="<?= base_url('assets/images/spn.png'); ?>" alt="Lambang SPN">
			<h1 class="text-dark ml-3 unihealth-text">Data Personil SPN</h1>
		</div>

		<form action="<?= base_url('datapersonil'); ?>" method="post">
      <div class="input-group mb-3 mt-3">
        <input type="text" class="form-control" placeholder="Cari nama.." id="keyword" name="keyword" autocomplete="off">
        <input class="btn btn-dark" type="submit" name="submit"> 
      </div>
		</form>
	</div>
</div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="tabel-data" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">Nama Personil</th>
                        <th scope="col">Pangkat</th>
                        <th scope="col">Jabatan</th>
						<th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach($personil as $psn) : ?>
                      <tr>
                        <td align="center"><?= ++$start ?></td>
                        <td><?php echo $psn['NAMA']; ?></td>
                        <td align="center"><?php echo $psn['PANGKAT']; ?></td>
                        <td><?php echo $psn['JABATAN']; ?></td>
                        <td align="center"><?php echo anchor('datapersonil/detail/'.$psn['id'],'<div class="btn btn-secondary btn-sm"> <i class="fas fa-info-circle"></i></div>')?></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                  <?= $this->pagination->create_links();?>
                </div>
              </div>
            
</body>
</html>

