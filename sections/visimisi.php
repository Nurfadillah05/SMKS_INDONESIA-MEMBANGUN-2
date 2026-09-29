<?php /* ============ VISI & MISI ============
   Tampilan awal ringkas: hanya 2 tombol (Visi & Misi).
   Klik tombol -> daftar poin terbuka. Klik lagi -> menutup.
   Isi poin diatur di includes/data.php ($visi_poin & $misi_poin). */ ?>
<section class="visimisi seksi" id="visi-misi">
  <div class="wadah">
    <div class="seksi__kepala seksi__kepala--tengah reveal">
      <p class="seksi__label">Arah Sekolah</p>
      <h2 class="seksi__judul">Visi &amp; Misi</h2>
    </div>

    <div class="vm-akordeon reveal">
      <div class="vm-item vm-item--visi">
        <button class="vm-toggle" type="button" id="vm-btn-visi" aria-expanded="false" aria-controls="vm-isi-visi" data-vm-toggle>
          <span class="vm-toggle__ikon"><?= ikon('visi', 24) ?></span>
          <span class="vm-toggle__teks"><strong>Visi Sekolah</strong><small><?= count($visi_poin) ?> poin</small></span>
          <span class="vm-toggle__panah"><?= ikon('chevron', 20) ?></span>
        </button>
        <div class="vm-isi" id="vm-isi-visi" role="region" aria-labelledby="vm-btn-visi">
          <div class="vm-isi__dalam">
            <ol class="vm-daftar">
              <?php foreach ($visi_poin as $v): ?>
              <li><strong><?= e($v['judul']) ?></strong><span><?= e($v['uraian']) ?></span></li>
              <?php endforeach; ?>
            </ol>
          </div>
        </div>
      </div>

      <div class="vm-item vm-item--misi">
        <button class="vm-toggle" type="button" id="vm-btn-misi" aria-expanded="false" aria-controls="vm-isi-misi" data-vm-toggle>
          <span class="vm-toggle__ikon"><?= ikon('topi', 24) ?></span>
          <span class="vm-toggle__teks"><strong>Misi Sekolah</strong><small><?= count($misi_poin) ?> poin</small></span>
          <span class="vm-toggle__panah"><?= ikon('chevron', 20) ?></span>
        </button>
        <div class="vm-isi" id="vm-isi-misi" role="region" aria-labelledby="vm-btn-misi">
          <div class="vm-isi__dalam">
            <ol class="vm-daftar">
              <?php foreach ($misi_poin as $m): ?>
              <li><strong><?= e($m['judul']) ?></strong><span><?= e($m['uraian']) ?></span></li>
              <?php endforeach; ?>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
