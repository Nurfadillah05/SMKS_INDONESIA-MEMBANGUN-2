<?php
/* Fasilitas berdiri sendiri agar menu langsung membuka halaman fokus. */
?>
<section class="potensi seksi potensi--mandiri potensi--ekstra" id="ekstrakurikuler">
  <div class="potensi__dekor" aria-hidden="true"></div>
  <div class="wadah">
    <div class="seksi__kepala seksi__kepala--tengah reveal" data-anim="atas">
      <p class="seksi__label">Ekstrakurikuler</p>
      <h2 class="seksi__judul">Kembangkan Minat dan Bakat</h2>
      <p class="seksi__ket">Ruang untuk berkembang, berkarya, dan membangun pengalaman bersama.</p>
    </div>
    <div class="potensi__slider potensi__slider--ekstra" data-geser>
      <button class="geser__tombol potensi__panah potensi__panah--kiri" type="button" data-geser-kiri aria-label="Geser ekstrakurikuler ke kiri"><?= ikon('panah_kiri', 18) ?></button>
      <div class="potensi__mandiri-list">
      <div class="potensi-geser__jalur potensi-geser__jalur--icon" data-geser-jalur tabindex="0" aria-label="Daftar ekstrakurikuler sekolah">
        <?php foreach ($ekstrakurikuler as $i => $x): ?>
          <article class="icon-potensi icon-potensi--ekstra reveal" data-anim="zoom" style="--tunda: <?= min($i, 4) * 70 ?>ms" tabindex="0" role="button" aria-label="<?= e($x['nama']) ?>">
            <span class="icon-potensi__nomor"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
            <span class="icon-potensi__lingkaran"><?= ikon($x['icon'], 28) ?></span>
            <span class="icon-potensi__nama"><?= e($x['nama']) ?></span>
            <small class="icon-potensi__ket"><?= e($x['ket']) ?></small>
          </article>
        <?php endforeach; ?>
      </div>
      </div>
      <button class="geser__tombol potensi__panah potensi__panah--kanan" type="button" data-geser-kanan aria-label="Geser ekstrakurikuler ke kanan"><?= ikon('panah_kanan', 18) ?></button>
    </div>
    <div class="potensi__titik" data-geser-titik aria-hidden="true"><?php for ($i = 0; $i < count($ekstrakurikuler); $i++): ?><i></i><?php endfor; ?></div>
  </div>
</section>
