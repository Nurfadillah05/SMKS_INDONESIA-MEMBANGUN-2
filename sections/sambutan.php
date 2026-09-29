<?php /* ============ KATA SAMBUTAN KEPALA SEKOLAH (tampilan ringkas & elegan) ============ */ ?>
<section class="sb seksi" id="profil">
  <span class="sb__latar sb__latar--a" aria-hidden="true"></span>
  <span class="sb__latar sb__latar--b" aria-hidden="true"></span>

  <div class="wadah sb__grid">

    <!-- FOTO (asli, tidak diedit) -->
    <div class="sb__foto reveal" data-anim="kiri">
      <div class="sb__panggung">
        <span class="sb__organik sb__organik--teal" aria-hidden="true"></span>
        <span class="sb__organik sb__organik--emas" aria-hidden="true"></span>
        <span class="sb__organik sb__organik--titik" aria-hidden="true"></span>
        <div class="sb__bingkai">
          <img src="<?= $kepsek['foto'] ?>"
               alt="<?= e($kepsek['nama']) ?>, <?= e($kepsek['jabatan']) ?>"
               loading="lazy" data-fallback="orang">
        </div>
      </div>
      <div class="sb__nama">
        <strong><?= e(strtoupper($kepsek['nama'])) ?></strong>
        <span><?= e(strtoupper($kepsek['jabatan'])) ?></span>
      </div>
    </div>

    <!-- ISI SAMBUTAN -->
    <div class="sb__teks reveal" data-anim="kanan">
      <p class="seksi__label">Tentang Kami</p>
      <h2 class="sb__judul">Kata Sambutan <em>Kepala Sekolah</em></h2>
      <span class="sb__garis" aria-hidden="true"></span>

      <blockquote class="sb__kutipan">
        <svg class="sb__kutip" width="34" height="34" viewBox="0 0 48 48" aria-hidden="true">
          <path fill="currentColor" d="M15 30.5c0-4.6 2.3-8.4 6.6-10.4l1.1 1.7c-2.3 1.2-3.5 2.9-3.7 4.9h3.4V34H15v-3.5zm11.3 0c0-4.6 2.3-8.4 6.6-10.4l1.1 1.7c-2.3 1.2-3.5 2.9-3.7 4.9h3.4V34h-7.4v-3.5z"/>
        </svg>
        <p class="sb__salam"><?= e($kepsek['salam']) ?></p>
        <?php foreach ($kepsek['paragraf'] as $p): ?>
          <p class="sb__paragraf"><?= $p ?></p>
        <?php endforeach; ?>
      </blockquote>

      <div class="sb__ttd">
        <strong><?= e($kepsek['nama']) ?></strong>
        <span><?= e($kepsek['jabatan']) ?> &middot; <?= e($sekolah['singkat']) ?></span>
      </div>
    </div>

  </div>
</section>
