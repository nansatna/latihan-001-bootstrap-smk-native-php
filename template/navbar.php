<?php
    $active = []; // inisialisasi kosong
    if ($pages == '') {
        $active['beranda'] = 'active';
    } else {
        $active[$pages] = 'active';
    }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">SMK Pasundan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">

          <!-- Beranda -->
          <li class="nav-item">
            <a class="nav-link <?= $active['beranda']?>" href="/">Beranda</a>
          </li>

          <!-- Profil -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= $active['profil']?>" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
            </a>
            <ul class="dropdown-menu" aria-labelledby="profilDropdown">
              <li><a class="dropdown-item" href="/profil/sejarah">Sejarah</a></li>
              <li><a class="dropdown-item" href="/profil/identitas">Identitas</a></li>
              <li><a class="dropdown-item" href="/profil/pegawai">Pegawai</a></li>
              <li><a class="dropdown-item" href="/profil/lokasi">Lokasi</a></li>
            </ul>
          </li>

          <!-- Jurusan -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= $active['jurusan']?>" href="#" id="jurusanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Jurusan
            </a>
            <ul class="dropdown-menu" aria-labelledby="jurusanDropdown">
              <li><a class="dropdown-item" href="/jurusan/detail/tkr">TKR</a></li>
              <li><a class="dropdown-item" href="/jurusan/detail/rpl">RPL</a></li>
              <li><a class="dropdown-item" href="/jurusan/detail/tkj">TKJ</a></li>
              <li><a class="dropdown-item" href="/jurusan/detail/ak">AK</a></li>
              <li><a class="dropdown-item" href="/jurusan/detail/ap">AP</a></li>
              <li><a class="dropdown-item" href="/jurusan/detail/htl">HTL</a></li>
            </ul>
          </li>

          <!-- Kegiatan Siswa -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= $active['kegiatan']?>" href="#" id="kegiatanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kegiatan Siswa
            </a>
            <ul class="dropdown-menu" aria-labelledby="kegiatanDropdown">
              <li><a class="dropdown-item" href="/kegiatan/detail/osis">OSIS</a></li>
              <li><a class="dropdown-item" href="/kegiatan/detail/pramuka">Pramuka</a></li>
              <li><a class="dropdown-item" href="/kegiatan/detail/pmr">PMR</a></li>
              <li><a class="dropdown-item" href="/kegiatan/detail/paskibra">Paskibra</a></li>
            </ul>
          </li>

          <!-- Konten -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= $active['konten']?>" href="#" id="kontenDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Konten
            </a>
            <ul class="dropdown-menu" aria-labelledby="kontenDropdown">
              <li><a class="dropdown-item" href="/konten/berita">Berita</a></li>
              <li><a class="dropdown-item" href="/konten/artikel">Artikel</a></li>
              <li><a class="dropdown-item" href="/konten/video">Video</a></li>
            </ul>
          </li>

          <!-- Kontak Kami -->
          <li class="nav-item">
            <a class="nav-link <?= $active['kontan']?>" href="/kontak">Kontak Kami</a>
          </li>

          <!-- Login -->
          <li class="nav-item">
            <a class="nav-link <?= $active['login']?>" href="/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>