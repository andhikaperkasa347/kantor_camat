<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kecamatan Pagar Alam Selatan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-container">
        <div class="nav-logo">
            <img src="img/logo-pagaralam.png" alt="Logo Pagar Alam">
            <span>Kecamatan Pagar Alam Selatan</span>
        </div>

        <ul class="nav-menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#profil">Profil</a></li>
            <li><a href="#layanan">Layanan</a></li>
            <li><a href="#statistik">Statistik</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </div>
</nav>

<!-- HERO -->
<section class="hero fade-in" id="home">
    <div class="hero-content">
        <h1>Wujudkan Pelayanan Publik</h1>
        <p>Prima, Akuntabel, Transparan, dan Berbudaya</p>
    </div>
</section>

<!-- MENU CEPAT -->
<section class="menu-cepat">
    <div class="menu-box">Tentang Kecamatan</div>
    <div class="menu-box">Layanan Publik</div>
    <div class="menu-box">Informasi Warga</div>
    <div class="menu-box">Peta Wilayah</div>
</section>

<!-- PROFIL -->
<section class="profil fade-in" id="profil">
    <div class="container">
        <h2>Profil Kecamatan</h2>
        <p>
            Kecamatan Pagar Alam Selatan merupakan salah satu kecamatan
            di Kota Pagar Alam yang memberikan pelayanan administrasi
            dan informasi publik kepada masyarakat.
        </p>
    </div>
</section>

<!-- LAYANAN & ANTRIAN -->
<section class="antrian fade-in" id="layanan">
    <h2>Layanan & Sistem Antrian</h2>

    <div class="antrian-form">
        <input type="text" id="nama" placeholder="Nama Warga">
        <input type="text" id="nik" placeholder="NIK">
        <select id="layananSelect">
            <option value="Pembuatan KTP">Pembuatan KTP</option>
            <option value="Pembuatan KK">Pembuatan KK</option>
            <option value="Surat Domisili">Surat Domisili</option>
        </select>

        <button onclick="tambahAntrian()">Ambil Nomor Antrian</button>
    </div>
    <div class="antrian-kontrol">
    <button onclick="urutkanNama()">Urutkan Nama A - Z</button>
    <button onclick="panggilAntrian()">Panggil Antrian</button>
</div>

<h3 id="antrianDipanggil"></h3>


    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Layanan</th>
            </tr>
        </thead>
        <tbody id="tabelAntrian"></tbody>
    </table>
</section>

<!-- BERITA -->
<section class="berita fade-in">
    <h2>Berita & Pengumuman</h2>

    <div class="berita-container">
        <div class="card">
            <h3>Pelayanan Administrasi</h3>
            <p>Pelayanan KTP dan KK tetap berjalan normal.</p>
            <span>12 Desember 2025</span>
        </div>

        <div class="card">
            <h3>Sistem Antrian Online</h3>
            <p>Kecamatan mulai menerapkan sistem digital.</p>
            <span>10 Desember 2025</span>
        </div>

        <div class="card">
            <h3>Libur Nasional</h3>
            <p>Pelayanan tutup saat hari libur nasional.</p>
            <span>8 Desember 2025</span>
        </div>
    </div>
</section>

<!-- STATISTIK -->
<section class="statistik fade-in" id="statistik">
    <div class="container">
        <h2>Statistik Pelayanan</h2>

        <div class="menu-cepat">
            <div class="menu-box">Penduduk: 25.000+</div>
            <div class="menu-box">Pelayanan / Hari: 150+</div>
            <div class="menu-box">RT: 45</div>
            <div class="menu-box">RW: 12</div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer fade-in" id="kontak">
    <div class="footer-container">
        <div class="footer-about">
            <img src="img/logo-pagaralam.png">
            <h3>Kecamatan Pagar Alam Selatan</h3>
            <p>Website resmi pelayanan dan informasi masyarakat.</p>
        </div>

        <div class="footer-contact">
            <h4>Kontak</h4>
            <p>📍 Jl. Raya Pagar Alam Selatan</p>
            <p>📞 (0730) 123456</p>
            <p>✉️ pagaralamselatan@gmail.com</p>
        </div>

        <div class="footer-map">
            <h4>Lokasi</h4>
            <iframe src="https://www.google.com/maps?q=pagar%20alam%20selatan&output=embed"></iframe>
        </div>
    </div>

    <div class="footer-bottom">
        © 2025 Kecamatan Pagar Alam Selatan
    </div>
</footer>

<script src="js/script.js"></script>
</body>
</html>