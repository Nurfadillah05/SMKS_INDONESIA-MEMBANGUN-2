<?php
/* =====================================================================
 * HALAMAN JURUSAN
 * Alamatnya:  jurusan.php?j=perhotelan   dan   jurusan.php?j=perkantoran
 * Isi halaman diambil dari includes/data.php, jadi tampilannya sama
 * tetapi isinya berbeda tiap jurusan.
 * ===================================================================== */

require_once __DIR__ . '/config/koneksi.php';
require_once __DIR__ . '/includes/data.php';

$slug = isset($_GET['j']) ? $_GET['j'] : 'perhotelan';
if (!isset($jurusan[$slug])) {
    $slug = 'perhotelan';   // kalau alamatnya salah ketik, arahkan ke jurusan pertama
}
$j     = $jurusan[$slug];
$lain  = ($slug === 'perhotelan') ? 'perkantoran' : 'perhotelan';

$judul_halaman = $j['nama_polos'] . ' | SMKS Indonesia Membangun 2 YAPIM Taruna Medan';
$halaman_aktif = 'jurusan';

require_once __DIR__ . '/includes/header.php';
?>

<?php
$t     = $j['tema'];
$gaya  = '--jd:' . e($t['utama']) . ';--jdg:' . e($t['gelap']) . ';--jdt:' . e($t['terang']) . ';--jdp:' . e($t['pucat']);
$kerja = $j['kerjasama'];
?>
<section class="jr jr--<?= e($slug) ?>" style="<?= $gaya ?>">

  <!-- hiasan abstrak latar -->
  <svg class="jr__hias jr__hias--a" viewBox="0 0 400 400" aria-hidden="true"><circle cx="200" cy="200" r="190" fill="none" stroke="currentColor" stroke-width="1.4" stroke-dasharray="3 9"/><circle cx="200" cy="200" r="130" fill="none" stroke="currentColor" stroke-width="1.4"/></svg>
  <svg class="jr__hias jr__hias--b" viewBox="0 0 300 300" aria-hidden="true"><path d="M300 300C134 300 0 166 0 0h70c0 127 103 230 230 230z" fill="currentColor"/></svg>

  <div class="wadah jr__grid">

    <!-- kolase 4 foto: semua foto berukuran sama (rasio seragam) di kedua jurusan, diselingi bentuk abstrak -->
    <?php
      $fk = array_slice($j['kegiatan'], 0, 4);
      $foto_kolase = function ($k) {
          echo '<figure class="jr__foto"><img src="' . e($k['foto']) . '" alt="' . e($k['judul']) . '" loading="lazy" data-fallback="kegiatan"></figure>';
      };
    ?>
    <div class="jr__kolase reveal" data-anim="kiri">
      <span class="jr__pucat" aria-hidden="true"></span>
      <div class="jr__kol jr__kol--a">
        <?php foreach ([0, 2] as $x) { if (isset($fk[$x])) $foto_kolase($fk[$x]); } ?>
      </div>
      <div class="jr__kol jr__kol--b">
        <span class="jr__blok" aria-hidden="true"></span>
        <?php foreach ([1, 3] as $x) { if (isset($fk[$x])) $foto_kolase($fk[$x]); } ?>
        <span class="jr__titikan" aria-hidden="true"></span>
      </div>
    </div>

    <!-- penjelasan jurusan -->
    <div class="jr__teks reveal" data-anim="kanan" style="--tunda:120ms">
      <span class="jr__garis" aria-hidden="true"></span>
      <h1 class="jr__judul"><?= $j['judul'] ?></h1>
      <p class="jr__sub"><?= e($j['sub']) ?></p>
      <p class="jr__uraian"><?= e($j['uraian']) ?></p>

      <button class="jr__tombol" type="button" id="tombolKerjasama" aria-controls="kerjaIsi" aria-expanded="false">
        <span><?= e($kerja['tombol']) ?></span> <?= ikon('chevron', 18) ?>
      </button>
    </div>
  </div>

  <!-- kotak kerja sama: tertutup sampai tombol diklik -->
  <div class="wadah jr__kerja">
    <div class="kerja reveal tutup" id="kerjaSama">
      <button class="kerja__kepala" type="button" id="kerjaKepala" aria-expanded="false" aria-controls="kerjaIsi">
        <span class="kerja__ikon" aria-hidden="true"><?= ikon($j['ikon_mitra'], 22) ?></span>
        <span class="kerja__judul">
          <strong><?= $kerja['judul'] ?></strong>
        </span>
        <span class="kerja__panah" aria-hidden="true"><?= ikon('chevron', 20) ?></span>
      </button>

      <div class="kerja__isi" id="kerjaIsi">
        <div class="kerja__dalam">
          <ul class="kerja__daftar">
            <?php foreach ($j['mitra'] as $i => $m):
                  $logo = logoMitra($m['nama'], isset($m['logo']) ? $m['logo'] : '');
            ?>
            <li style="--tunda: <?= $i * 70 ?>ms">
              <a class="mitra-chip" href="<?= e($m['link']) ?>" target="_blank" rel="noopener" title="Cari <?= e($m['nama']) ?> di Google">
                <span class="mitra-chip__logo mitra-chip__logo--<?= $i % 4 ?>">
                  <?php if ($logo): ?>
                    <img src="<?= e($logo) ?>" alt="" loading="lazy" data-tanpa-pengganti>
                  <?php else: ?>
                    <?= e(inisialMitra($m['nama'])) ?>
                  <?php endif; ?>
                </span>
                <span class="mitra-chip__nama"><?= e($m['nama']) ?></span>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- pindah ke jurusan lainnya -->
<div class="jd__pindah">
  <a class="tombol tombol--garis" href="jurusan.php?j=<?= e($lain) ?>">
    <?= $jurusan[$lain]['judul'] ?> <?= ikon('panah_kanan', 16) ?>
  </a>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
