<div class="container">
  <!-- card -->
  <div class="card" style="width: 50 rem;">
    <div class="card-body">
      <h2 class="card-title">Selamat Datang di Website Saya</h2>
      <h6 class="card-subtitle mb-2 text-muted">Halo!</h6>
      <p class="card-text">Halo nama saya adalah <?= $data['user']['nama']; ?>. Saya adalah seorang pelajar dari Lampung yang saat ini belajar di <?= $data['user']['sekolah']; ?> Bandar Lampung. Saya berencana meneruskan studi saya di <?= $data['user']['kuliah']; ?>.</p>
      <a href="<?= BASEURL; ?>/about"><button type="button" class="btn btn-primary">Tentang Saya</button></a>
    </div>
  </div>
</div>