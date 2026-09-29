<?php /* ============ HERO SECTION ============ */ ?>

<section class="hero" id="hero">

  <!-- ================= FOTO GEDUNG (background utama) ================= -->
  <div class="hero__bg" aria-hidden="true">

    <img
      class="hero__foto-desktop"
      fetchpriority="high"
      src="assets/img/gedung-sekolah.png"
      alt="Gedung SMKS Indonesia Membangun 2 YAPIM Taruna Medan"
    >

    <div class="hero__bg-overlay"></div>

  </div>


  <!-- ================= ISI HERO (di atas foto) ================= -->
  <div class="hero__konten">

    <div class="wadah wadah--lebar hero__grid">

      <!-- ================= TEKS KIRI ================= -->
      <div class="hero__teks">

        <p class="hero__salam">
          Selamat Datang di
        </p>

        <h1 class="hero__judul">
          <span class="hero__baris">SMKS INDONESIA</span>
          <span class="hero__baris">MEMBANGUN 2</span>
          <span class="hero__baris hero__baris--aksen">YAPIM TARUNA</span>
          <span class="hero__baris hero__baris--aksen">MEDAN</span>
        </h1>

        <span class="hero__garis" aria-hidden="true"></span>

        <p class="hero__nama-resmi">
          SMK BISNIS MANAJEMEN DAN PARIWISATA YAPIM MEDAN
        </p>

        <a class="tombol tombol--emas" href="#profil">
          <span>Jelajahi Sekolah Kami</span>
          <span class="tombol__panah">
            <?= ikon('panah_kanan', 18) ?>
          </span>
        </a>

      </div>

    </div>


    <!-- ================= 4 FEATURE ================= -->
    <div class="wadah wadah--lebar hero__feature-wadah">

      <ul class="keunggulan">

        <?php foreach ($keunggulan as $i => $k): ?>

          <li
            class="keunggulan__item"
            style="--tunda: <?= $i * 120 ?>ms"
          >

            <span class="keunggulan__ikon">
              <?= ikon($k['icon'], 22) ?>
            </span>

            <span class="keunggulan__teks">
              <span class="keunggulan__judul">
                <?= $k['judul'] ?>
              </span>

              <span class="keunggulan__sub">
                <?= $k['sub'] ?>
              </span>
            </span>

          </li>

        <?php endforeach; ?>

      </ul>

    </div>

  </div>

</section>
