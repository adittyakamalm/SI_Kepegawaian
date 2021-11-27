<div class="container-fluid">
<div class="detail">
<div class="card">
  <h5 class="card-header">Data Personil</h5>
  <div class="card-body">

    <?php foreach($personil as $psn): ?>
    <div class="row">
        <div class="col-md-4">
          <img src="<?= base_url('assets/images/profil.png'); ?>">
        </div>
        <div class="col-md-8">
        <table class="table">
              <tr>
                <td>Nama Lengkap</td>
                <td><strong><?php echo $psn->NAMA; ?></strong></td>
              <tr>
              <tr>
                <td>NRP / NIP </td>
                <td><strong><?php echo $psn->NRP_NIP; ?></strong></td>
              <tr>
              <tr>
                <td>Pangkat </td>
                <td><strong><?php echo $psn->PANGKAT; ?></strong></td>
              <tr>
              <tr>
                <td>Jabatan </td>
                <td><strong><?php echo $psn->JABATAN; ?></strong></td>
              <tr>
              <tr>
                <td>Riwayat Jabatan </td>
                <td><strong></strong></td>
              <tr>
            </table>
        </div>
            
    </div>
    <?php endforeach; ?>
  </div>
</div>
</div>
</div>
