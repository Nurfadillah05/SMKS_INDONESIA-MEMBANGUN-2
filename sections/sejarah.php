<?php
/* ============ SEJARAH SEKOLAH ============
 * Untuk mengganti tulisan sejarah, cukup ubah isi di bawah ini.
 * - $sejarah_tahun   : tahun yang tampil di lencana pada foto
 * - $sejarah_paragraf: setiap baris = satu paragraf
 *                      (paragraf pertama tampil sedikit lebih besar)
 */
$sejarah_tahun = '1996';

$sejarah_paragraf = [
    'SMK Bisnis Manajemen dan Pariwisata YAPIM Medan merupakan bagian dari YAPIM Taruna Medan yang terus berkembang dalam memberikan pendidikan kejuruan bagi generasi muda.',
    'Sekolah ini dikembangkan sejak tahun 1996 dengan tujuan memberikan pendidikan yang mengutamakan keterampilan, kedisiplinan, tanggung jawab, serta kesiapan siswa memasuki dunia kerja.',
    'Seiring perkembangan kebutuhan dunia pendidikan dan dunia kerja, sekolah terus melakukan pengembangan pada pembelajaran, fasilitas, kegiatan siswa, serta kerja sama dengan dunia usaha dan dunia industri.',
];
?>
<section class="sj seksi" id="sejarah">
  <span class="sj__latar" aria-hidden="true"></span>

  <div class="wadah sj__grid">

    <!-- TULISAN -->
    <div class="sj__isi">
      <div class="sj__kepala reveal" data-anim="kanan">
        <p class="seksi__label">Sejarah Sekolah</p>
        <h2 class="sj__judul">Perjalanan SMKS Indonesia Membangun 2 <em>YAPIM Taruna Medan</em></h2>
        <span class="sj__garis" aria-hidden="true"></span>
      </div>

      <div class="sj__teks">
        <?php foreach ($sejarah_paragraf as $i => $teks): ?>
          <p class="sj__paragraf<?= $i === 0 ? ' sj__paragraf--awal' : '' ?> reveal"
             data-anim="kanan" style="--tunda: <?= ($i + 1) * 130 ?>ms">
            <?= e($teks) ?>
          </p>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- FOTO SEJARAH (GANTI src jika ingin memakai foto lain) -->
    <div class="sj__visual reveal" data-anim="kiri">
      <div class="sj__panggung">
        <span class="sj__organik sj__organik--teal" aria-hidden="true"></span>
        <span class="sj__organik sj__organik--cincin" aria-hidden="true"></span>
        <span class="sj__organik sj__organik--titik" aria-hidden="true"></span>
        <div class="sj__foto">
          <img src="assets/img/foto-sejarah.jpg"
               alt="Foto sejarah SMKS Indonesia Membangun 2 YAPIM Taruna Medan"
               loading="lazy">
        </div>
        <div class="sj__lencana">
          <small>Sejak</small>
          <strong><?= e($sejarah_tahun) ?></strong>
        </div>
      </div>
    </div>

  </div>
</section>
