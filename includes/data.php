<?php
/* =====================================================================
 * DATA SEKOLAH (bagian yang jarang berubah)
 * Semua tulisan di beranda yang bukan dari database ada di file ini,
 * jadi kalau mau ganti kalimat tinggal edit di sini saja.
 * ===================================================================== */

$sekolah = [
    'nama'       => 'SMKS Indonesia Membangun 2 YAPIM Taruna Medan',
    'sub_nama'   => 'SMK Bisnis Manajemen dan Pariwisata YAPIM Medan',
    'singkat'    => 'SMK YAPIM 2 MEDAN',
    'akreditasi' => 'A',
    'alamat'     => 'Jl. Air Bersih No. 59, Medan',
    'maps'       => 'https://www.google.com/maps/search/?api=1&query=Jl.+Air+Bersih+No.+59,+Medan',
    'maps_embed' => 'https://maps.google.com/maps?q=Jl.%20Air%20Bersih%20No.%2059%2C%20Medan&t=&z=16&ie=UTF8&iwloc=&output=embed',
    'telepon'    => ['061 7864 701', '061 7864 702'],
    'email'      => 'Smk_bmpar@yahoo.com',
    'ig_user'    => 'smk2_yapim_tarunamedan',
    'ig_link'    => 'https://www.instagram.com/smk2_yapim_tarunamedan/',
    'motto'      => 'Unggul dalam prestasi, bersama kita bisa, YAPIM TARUNA JAYA!!!',
    'visi'       => 'Menjadi lembaga pendidikan swasta unggul untuk meningkatkan kwalitas sumber daya manusia yang mampu menghadapi tantangan zaman yang selalu berubah.',
    'misi'       => 'Mendidik siswa mengembangkan potensi agar dapat berpikir kreatif dan kritis sehingga memiliki kecerdasan intelektual, emosional dan sosial.',
];

/* ---------------------------------------------------------------------
 * Rincian Visi (10 poin) dan Misi (11 poin)
 * Tiap poin punya 'judul' (tebal) dan 'uraian' (penjelasan di bawahnya).
 * Dipakai di sections/visimisi.php dengan tampilan accordion:
 * daftar baru muncul setelah tombol Visi / Misi diklik, jadi walaupun
 * poinnya banyak, tampilan awal di layar tetap ringkas.
 * Mau ubah isi? Cukup edit teks di dalam tanda kutip di bawah ini.
 * ------------------------------------------------------------------- */
$visi_poin = [
    ['judul' => 'Beriman dan bertakwa', 'uraian' => 'Peserta didik memiliki keimanan, ketakwaan, akhlak mulia, kejujuran, dan tanggung jawab dalam kehidupan pribadi, sosial, maupun dunia kerja.'],
    ['judul' => 'Berkarakter dan berkewargaan', 'uraian' => 'Peserta didik memiliki sikap disiplin, menghargai keberagaman, menaati aturan, memiliki kepedulian sosial, serta menunjukkan rasa bangga terhadap identitas dan budaya bangsa.'],
    ['judul' => 'Kompeten', 'uraian' => 'Peserta didik menguasai pengetahuan dan keterampilan sesuai bidang keahlian serta mampu menerapkannya dalam situasi kerja nyata.'],
    ['judul' => 'Kritis', 'uraian' => 'Peserta didik mampu menggunakan literasi, numerasi, data, dan informasi untuk menganalisis masalah serta mengambil keputusan secara logis.'],
    ['judul' => 'Kreatif', 'uraian' => 'Peserta didik mampu menghasilkan gagasan, alternatif solusi, karya, dan inovasi yang relevan dengan bidang keahlian.'],
    ['judul' => 'Kolaboratif', 'uraian' => 'Peserta didik mampu bekerja sama, berkomunikasi, berbagi peran, dan menghargai perbedaan dalam lingkungan sekolah maupun dunia kerja.'],
    ['judul' => 'Mandiri', 'uraian' => 'Peserta didik memiliki inisiatif, tanggung jawab, etos kerja, kemampuan beradaptasi, serta kemauan untuk terus mengembangkan kompetensinya.'],
    ['judul' => 'Sehat', 'uraian' => 'Peserta didik memiliki kesadaran menjaga kesehatan fisik dan mental serta mampu menerapkan budaya hidup bersih, sehat, dan aman dalam kegiatan belajar maupun bekerja.'],
    ['judul' => 'Komunikatif', 'uraian' => 'Peserta didik mampu menyimak, berbicara, membaca, dan menulis secara efektif, termasuk menggunakan komunikasi yang sesuai dengan kebutuhan dunia kerja.'],
    ['judul' => 'Siap bekerja, melanjutkan pendidikan, dan berwirausaha', 'uraian' => 'Peserta didik memiliki kompetensi dan karakter yang memungkinkan mereka memasuki dunia kerja, melanjutkan pendidikan sesuai bidangnya, atau mengembangkan usaha secara mandiri.'],
];

$misi_poin = [
    ['judul' => 'Menyelenggarakan pembelajaran yang berpusat pada peserta didik', 'uraian' => 'dengan memperhatikan kebutuhan, potensi, minat, bakat, karakteristik, dan keberagaman peserta didik.'],
    ['judul' => 'Menerapkan Pembelajaran Mendalam', 'uraian' => 'melalui pengalaman belajar yang berkesadaran (mindful), bermakna (meaningful), dan menggembirakan (joyful) sehingga peserta didik mampu memahami, mengaplikasikan, dan merefleksikan pembelajarannya. Panduan menempatkan Pembelajaran Mendalam sebagai pendekatan yang menempatkan murid sebagai pusat pembelajaran dengan tiga prinsip tersebut.'],
    ['judul' => 'Meningkatkan kemampuan literasi dan numerasi peserta didik', 'uraian' => 'melalui pengintegrasian literasi dan numerasi dalam berbagai mata pelajaran serta pembelajaran yang kontekstual dengan kehidupan dan bidang keahlian.'],
    ['judul' => 'Mengembangkan delapan dimensi Profil Lulusan', 'uraian' => 'melalui pembelajaran intrakurikuler, kokurikuler, ekstrakurikuler, budaya sekolah, PKL, dan kegiatan pengembangan diri.'],
    ['judul' => 'Meningkatkan kompetensi kejuruan peserta didik', 'uraian' => 'melalui pembelajaran teori, praktik, proyek, simulasi lingkungan kerja, dan pengalaman kerja nyata sesuai Program dan Konsentrasi Keahlian.'],
    ['judul' => 'Memperkuat link and match dengan dunia usaha, dunia industri, dan dunia kerja', 'uraian' => 'melalui sinkronisasi kurikulum, PKL, guru tamu, kelas industri, sertifikasi, rekrutmen lulusan, serta pengembangan kompetensi guru.'],
    ['judul' => 'Membangun budaya kerja profesional', 'uraian' => 'dengan membiasakan peserta didik menerapkan disiplin, tanggung jawab, kejujuran, etika kerja, pelayanan prima, komunikasi efektif, kerja sama, keselamatan dan kesehatan kerja.'],
    ['judul' => 'Meningkatkan kompetensi dan profesionalisme pendidik', 'uraian' => 'melalui komunitas belajar, refleksi pembelajaran, supervisi akademik, pelatihan, pengembangan kompetensi pedagogis dan vokasional, serta pengalaman belajar dari dunia kerja.'],
    ['judul' => 'Menciptakan lingkungan sekolah yang aman, nyaman, sehat, inklusif, dan berbudaya positif', 'uraian' => 'sebagai lingkungan yang mendukung perkembangan akademik, karakter, kesehatan fisik dan mental peserta didik.'],
    ['judul' => 'Mengembangkan budaya kewirausahaan dan inovasi', 'uraian' => 'melalui kegiatan pembelajaran berbasis proyek, pengembangan produk/jasa, kreativitas, pemecahan masalah, dan pengalaman kewirausahaan.'],
    ['judul' => 'Melaksanakan evaluasi dan perbaikan kurikulum secara berkelanjutan', 'uraian' => 'dengan menggunakan data Rapor Pendidikan, hasil asesmen, hasil PKL, masukan peserta didik, guru, orang tua, komite sekolah, dan mitra dunia kerja.'],
];

/* ---------------------------------------------------------------------
 * Kepala sekolah — sambutan bersifat umum (tidak menggunakan salam agama)
 * ------------------------------------------------------------------- */
$kepsek = [
    'nama'    => 'Vira Panjaitan',
    'jabatan' => 'Kepala Sekolah',
    'foto'    => 'assets/img/kepala-sekolah.png',
    'salam'   => 'Salam Sejahtera untuk Kita Semua.',
    'paragraf' => [
        'Selamat datang di laman resmi SMKS Indonesia Membangun 2 Yapim Taruna Medan. Kami berkomitmen menghadirkan pendidikan yang berkarakter dan membekali keterampilan nyata, agar lulusan siap bekerja, berwirausaha, maupun melanjutkan pendidikan.',
        'Terima kasih atas kepercayaan dan dukungan Bapak/Ibu. Mari bersama mendidik generasi muda yang berilmu, berbudi pekerti, dan bermanfaat bagi sesama.',
    ],
];

/* ---------------------------------------------------------------------
 * Empat keunggulan di bawah hero
 * ------------------------------------------------------------------- */
$keunggulan = [
    ['icon' => 'jurusan',   'judul' => '2',          'sub' => 'Jurusan'],
    ['icon' => 'prestasi',  'judul' => 'Prestasi',   'sub' => 'Membanggakan'],
    ['icon' => 'fasilitas', 'judul' => 'Fasilitas',  'sub' => 'Lengkap'],
    ['icon' => 'jabat',     'judul' => 'Kerja Sama', 'sub' => 'Industri'],
];

/* ---------------------------------------------------------------------
 * Program keahlian + foto kegiatan + mitra industri
 * slug dipakai di alamat: jurusan.php?j=perhotelan
 * ------------------------------------------------------------------- */
$jurusan = [
    'perhotelan' => [
        'nama'      => 'Perhotelan',
        'nama_polos'=> 'Perhotelan',
        'tagline'   => 'Ramah melayani, profesional menyambut setiap tamu.',
        'warna'     => '#a3172c',
        'cover'     => 'assets/img/jurusan-perhotelan.jpg',

        'judul'      => 'PERHOTELAN',
        'ikon'       => 'hotel',
        'ikon_mitra' => 'hotel',
        // warna kartu di beranda: utama, gelap, terang
        'kartu'      => ['utama' => '#a3172c', 'gelap' => '#6e0f1e', 'terang' => '#f6dde1'],
        'tema'       => ['utama' => '#a3172c', 'gelap' => '#7a1120', 'terang' => '#f6dde1', 'pucat' => '#fbeeef'],
        'sub'        => 'Ramah Melayani, Profesional Berkarya',
        'uraian'     => 'Jurusan Perhotelan membekali siswa dengan keterampilan pelayanan tamu, tata graha (housekeeping), front office, dan food & beverage service sesuai standar industri perhotelan. Siswa dilatih untuk ramah, rapi, disiplin, dan siap bekerja di hotel maupun industri pariwisata.',
        'kerjasama' => [
            'tombol'  => 'Lihat Mitra Industri Perhotelan',
            'judul'   => 'Mitra Industri Perhotelan',
            'sub'     => 'Kerja Sama Dunia Usaha & Industri — Jurusan Perhotelan',
            'catatan' => 'Kerja sama dengan hotel berbintang ini membuka peluang praktik kerja lapangan, kunjungan industri, dan pengembangan kompetensi pelayanan sesuai standar perhotelan profesional.',
        ],
        'deskripsi' => 'Program keahlian Perhotelan membekali siswa dengan kemampuan pelayanan tamu, tata graha, front office, dan food & beverage service sesuai standar dunia kerja.',
        'kegiatan'  => [
            [
                'foto'      => 'assets/img/kegiatan/ph-4.jpg',
                'judul'     => 'Kunjungan industri',
                'deskripsi' => 'Kunjungan ke hotel berbintang untuk mengenal langsung standar kerja dan pelayanan industri perhotelan.',
            ],
            [
                'foto'      => 'assets/img/kegiatan/ph-1.jpg',
                'judul'     => 'Praktik front office',
                'deskripsi' => 'Siswa berlatih menyambut dan melayani tamu di Hotel Mini YAPIM sebagai ruang praktik front office sekolah.',
            ],
            [
                'foto'      => 'assets/img/kegiatan/ph-3.jpg',
                'judul'     => 'Praktik food & beverage',
                'deskripsi' => 'Siswa berlatih menyiapkan dan menyajikan makanan sesuai standar layanan food & beverage perhotelan.',
            ],
            [
                'foto'      => 'assets/img/kegiatan/ph-2.jpg',
                'judul'     => 'Simulasi pelayanan hotel',
                'deskripsi' => 'Latihan tata graha dan pelayanan tamu langsung di ruang praktik perhotelan sekolah.',
            ],
        ],
        'mitra' => [
            ['nama' => 'Hotel JW Marriott',                      'link' => 'https://www.google.com/search?q=Hotel+JW+Marriott+Medan'],
            ['nama' => 'Hotel Santika',                          'link' => 'https://www.google.com/search?q=Hotel+Santika+Medan'],
            ['nama' => 'Hotel Aryaduta',                         'link' => 'https://www.google.com/search?q=Hotel+Aryaduta+Medan'],
            ['nama' => 'Grand Inna Dharma Deli',                 'link' => 'https://www.google.com/search?q=Grand+Inna+Dharma+Deli+Medan'],
            ['nama' => 'Grand Mercure Maha Cipta Medan Angkasa', 'link' => 'https://www.google.com/search?q=Grand+Mercure+Maha+Cipta+Medan+Angkasa'],
        ],
    ],

    'perkantoran' => [
        'nama'      => 'Perkantoran',
        'nama_polos'=> 'Perkantoran',
        'tagline'   => 'Terampil mengelola administrasi, siap memasuki dunia kerja.',
        'warna'     => '#1552a6',
        'cover'     => 'assets/img/jurusan-perkantoran.jpg',
        'judul'     => 'PERKANTORAN',
        'ikon'      => 'admin',
        'ikon_mitra' => 'admin',
        'kartu'     => ['utama' => '#1552a6', 'gelap' => '#0b2f6a', 'terang' => '#dbe9fb'],
        'tema'      => ['utama' => '#1552a6', 'gelap' => '#0d3c86', 'terang' => '#dbe9fb', 'pucat' => '#eef5fd'],
        'sub'       => 'Rapi Mengelola Administrasi, Siap Berkarya',
        'uraian'    => 'Program keahlian Perkantoran membekali siswa dengan keterampilan pengelolaan dokumen, surat-menyurat, arsip, pelayanan tamu, dan penggunaan aplikasi perkantoran sesuai kebutuhan dunia kerja.',
        'kerjasama' => [
            'tombol'  => 'Lihat Kerja Sama Dunia Usaha & Industri',
            'judul'   => 'Kerja Sama Dunia Usaha & Industri',
            'sub'     => 'Jurusan Perkantoran',
            'catatan' => 'Kerja sama diarahkan untuk mendukung praktik, kunjungan industri, pelatihan, dan penguatan kompetensi administrasi sesuai kebutuhan dunia kerja.',
        ],
        'deskripsi' => 'Program keahlian Perkantoran melatih siswa mengelola arsip, surat, dokumen, pelayanan tamu, dan pekerjaan administrasi dengan memanfaatkan teknologi perkantoran.',
        'kegiatan' => [
            ['foto'=>'assets/img/kegiatan/pk-4.jpg','judul'=>'Praktik kerja lapangan','deskripsi'=>'Pengalaman kerja langsung untuk memahami budaya kerja profesional dan pelayanan administrasi.'],
            ['foto'=>'assets/img/kegiatan/pk-3.jpg','judul'=>'Simulasi kantor','deskripsi'=>'Praktik pelayanan tamu, komunikasi, dan alur kerja administrasi kantor.'],
            ['foto'=>'assets/img/kegiatan/pk-1.jpg','judul'=>'Pengelolaan dokumen','deskripsi'=>'Latihan menyusun surat, dokumen, dan arsip secara rapi dan sistematis.'],
            ['foto'=>'assets/img/kegiatan/pk-2.jpg','judul'=>'Aplikasi perkantoran','deskripsi'=>'Latihan mengolah dokumen, data, dan administrasi digital menggunakan komputer.'],
        ],
        'mitra' => [
            ['nama'=>'PT Tolan Tiga Indonesia','link'=>'https://www.google.com/search?q=PT+Tolan+Tiga+Indonesia'],
            ['nama'=>'PT Mitra Telekomunikasi','link'=>'https://www.google.com/search?q=PT+Mitra+Telekomunikasi+Medan'],
            ['nama'=>'PT Torganda','link'=>'https://www.google.com/search?q=PT+Torganda'],
            ['nama'=>'PT Ramayana Lestari Sentosa Tbk','link'=>'https://www.google.com/search?q=PT+Ramayana+Lestari+Sentosa+Tbk'],
            ['nama'=>'PT Astra International Tbk','link'=>'https://www.google.com/search?q=PT+Astra+International+Tbk'],
        ],
    ],
];

/* ---------------------------------------------------------------------
 * Fasilitas (tampil sebagai ikon)
 * ------------------------------------------------------------------- */
$fasilitas = [
    ['icon' => 'kalkulator','nama' => 'Ruang Praktik Perkantoran', 'ket' => 'Simulasi kantor lengkap dengan perangkat kearsipan.'],
    ['icon' => 'komputer',  'nama' => 'Laboratorium Komputer', 'ket' => 'Unit komputer untuk praktik aplikasi perkantoran.'],
    ['icon' => 'hotel',     'nama' => 'Hotel Mini YAPIM',      'ket' => 'Kamar praktik housekeeping dan front office.'],
    ['icon' => 'lobby',     'nama' => 'Lobby',                 'ket' => 'Ruang penerimaan tamu sekaligus tempat praktik pelayanan.'],
    ['icon' => 'kelas',     'nama' => 'Ruang Kelas',           'ket' => 'Kelas yang terang dan nyaman untuk belajar teori.'],
    ['icon' => 'guru',      'nama' => 'Ruang Guru',            'ket' => 'Tempat konsultasi siswa dengan wali kelas dan guru mapel.'],
    ['icon' => 'basket',    'nama' => 'Lapangan Basket',       'ket' => 'Sarana olahraga sekaligus lapangan upacara.'],
    ['icon' => 'kantin',    'nama' => 'Kantin',                'ket' => 'Kantin sekolah dengan menu sehat dan harga pelajar.'],
];

/* ---------------------------------------------------------------------
 * Struktur organisasi
 * ------------------------------------------------------------------- */
$struktur = [
    'kepala'  => ['jabatan' => 'KEPALA SEKOLAH',        'nama' => 'Vera Panjaitan, S.P , M.Pd'],
    'wakil'   => ['jabatan' => 'WAKIL KEPALA SEKOLAH/<br>PEMBINA KURIKULUM',  'nama' => 'Elvrida Siagian, S.Pd'],
    'program' => [
        ['jabatan' => 'KEPALA JURUSAN<br>PERKANTORAN', 'nama' => 'Dra. Lasmaida Manurung'],
        ['jabatan' => 'KEPALA JURUSAN<br>PERHOTELAN', 'nama' => 'Agustiani Sumbarwati'],
    ],
];

/* ---------------------------------------------------------------------
 * Ekstrakurikuler (tampil sebagai kartu yang bisa digeser)
 * Mau menambah? Salin satu baris, ganti icon, nama, dan ket.
 * Nama icon yang tersedia ada di includes/ikon.php
 * ------------------------------------------------------------------- */
$ekstrakurikuler = [
    ['icon' => 'karate',  'nama' => 'Karate',            'ket' => 'Melatih teknik bela diri, disiplin, dan rasa percaya diri.'],
    ['icon' => 'futsal',  'nama' => 'Futsal',            'ket' => 'Latihan rutin untuk kerja sama tim, kecepatan, dan sportivitas.'],
    ['icon' => 'voli',    'nama' => 'Voli',              'ket' => 'Melatih kekompakan, ketangkasan, dan semangat bertanding.'],
    ['icon' => 'tari',    'nama' => 'Tari',              'ket' => 'Melestarikan seni gerak dan melatih keberanian tampil di depan umum.'],
    ['icon' => 'dance',   'nama' => 'Dance',             'ket' => 'Wadah menyalurkan kreativitas lewat gerak dan musik.'],
    ['icon' => 'pmr',     'nama' => 'PMR',               'ket' => 'Belajar pertolongan pertama, kepedulian, dan kerja sosial.'],
    ['icon' => 'profil',  'nama' => 'Organisasi Siswa',  'ket' => 'Melatih kepemimpinan, kerja sama, tanggung jawab, dan komunikasi.'],
    ['icon' => 'jurusan', 'nama' => 'Kegiatan Kejuruan', 'ket' => 'Kegiatan pendukung pembelajaran yang berkaitan dengan kompetensi keahlian.'],
];
