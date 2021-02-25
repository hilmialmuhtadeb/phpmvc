<div class="container mt-3">

  <div class="row">
    <div class="col-6">
      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group mt-3">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <?= $mhs['nama']; ?>
            <a class="badge rounded-pill" style="text-decoration:none" href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>">detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</div>