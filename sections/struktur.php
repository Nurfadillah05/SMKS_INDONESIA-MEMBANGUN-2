<?php /* ============ BAGIAN 9 : STRUKTUR ORGANISASI (DIAGRAM) ============
 * Kepala Sekolah -> Wakil Kepala Sekolah -> dua Kepala Jurusan.
 * Teks diambil dari $struktur (includes/data.php).
 * Di HP bagan tetap tampil sebagai diagram, hanya diperkecil.
 */ ?>
<section class="struktur seksi" id="struktur">
  <div class="wadah">
    <div class="seksi__kepala seksi__kepala--tengah reveal">
      <h2 class="seksi__judul sd__judul">STRUKTUR ORGANISASI</h2>
      <p class="sd__subjudul"><span>SMKS INDONESIA MEMBANGUN 2 MEDAN</span></p>
    </div>

    <div class="sd reveal" role="group" aria-label="Diagram struktur organisasi sekolah">
      <div class="sd__node sd__node--kepala">
        <span class="sd__jabatan"><?= $struktur['kepala']['jabatan'] ?></span>
        <strong class="sd__nama"><?= e($struktur['kepala']['nama']) ?></strong>
      </div>

      <span class="sd__garis" aria-hidden="true"></span>

      <div class="sd__node sd__node--wakil">
        <span class="sd__jabatan"><?= $struktur['wakil']['jabatan'] ?></span>
        <strong class="sd__nama"><?= e($struktur['wakil']['nama']) ?></strong>
      </div>

      <span class="sd__garis" aria-hidden="true"></span>

      <div class="sd__cabang">
        <?php foreach ($struktur['program'] as $i => $s): ?>
          <div class="sd__anak">
            <div class="sd__node sd__node--jurusan sd__node--j<?= $i + 1 ?>">
              <span class="sd__jabatan"><?= $s['jabatan'] ?></span>
              <strong class="sd__nama"><?= e($s['nama']) ?></strong>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
