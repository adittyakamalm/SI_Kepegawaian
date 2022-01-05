<div class="container-fluid">
<div class="saranaprasarana">
    <h1>Sarana & Prasarana Revolusi 4.0</h1>
    <?php foreach($prasarana as $psa): ?>
<div class="card">
  <div class="card-body">
    <div class="row">
        <div class="col-6">
            <img src="./uploads/prasarana/<?php echo $psa['gambar']; ?>">
        </div>
        <div class="col-md-6">
        <h3 class="card-title"><?php echo $psa['judul']; ?></h3>
        <p class="card-text"><?php echo $psa['keterangan']; ?></p>
        </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
</div>
</div>


