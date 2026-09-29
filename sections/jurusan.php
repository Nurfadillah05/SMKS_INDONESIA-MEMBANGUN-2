<?php /* ============ BAGIAN 5 : DUA PROGRAM KEAHLIAN ============
   Isi kartu (nama, foto, warna) diambil dari $jurusan di includes/data.php.
   ========================================================== */ ?>
<section class="pk" id="jurusan">

  <!-- hiasan abstrak latar -->
  <svg class="pk__hias pk__hias--a" viewBox="0 0 400 400" aria-hidden="true"><circle cx="200" cy="200" r="190" fill="none" stroke="currentColor" stroke-width="1.4" stroke-dasharray="3 9"/><circle cx="200" cy="200" r="130" fill="none" stroke="currentColor" stroke-width="1.4"/></svg>
  <svg class="pk__hias pk__hias--b" viewBox="0 0 300 300" aria-hidden="true"><path d="M0 300C0 134 134 0 300 0v70C173 70 70 173 70 300z" fill="currentColor"/></svg>
  <span class="pk__hias pk__hias--titik" aria-hidden="true"></span>

  <div class="wadah">

    <header class="pk__kepala reveal">
      <span class="pk__garis" aria-hidden="true"></span>
      <h2 class="pk__judul">Dua Program Keahlian</h2>
    </header>

    <div class="pk__grid">
      <?php $n = 0; foreach ($jurusan as $slug => $j):
            $k = $j['kartu'];
            $gaya = '--k:' . e($k['utama']) . ';--kg:' . e($k['gelap']) . ';--kt:' . e($k['terang']) . ';--tunda:' . ($n * 160) . 'ms';
            $arah = ($n % 2 === 0) ? 'kiri' : 'kanan';
            $n++;
      ?>
      <a class="pk__kartu reveal" data-anim="<?= $arah ?>" href="jurusan.php?j=<?= e($slug) ?>" style="<?= $gaya ?>"
         aria-label="Lihat selengkapnya jurusan <?= e($j['nama_polos']) ?>">

        <span class="pk__bingkai">
          <span class="pk__blok" aria-hidden="true"></span>
          <span class="pk__blok2" aria-hidden="true"></span>
          <span class="pk__titik" aria-hidden="true"></span>
          <span class="pk__cincin" aria-hidden="true"></span>
          <span class="pk__foto">
            <img src="<?= e($j['cover']) ?>" alt="Siswa program keahlian <?= e($j['nama_polos']) ?>" loading="lazy" data-fallback="jurusan">
          </span>
        </span>

        <span class="pk__isi">
          <span class="pk__nama"><?= $j['judul'] ?></span>
          <span class="pk__tombol"><em>Lihat Selengkapnya</em> <?= ikon('panah_kanan', 16) ?></span>
        </span>
      </a>
      <?php endforeach; ?>
    </div>

  </div>
</section>
