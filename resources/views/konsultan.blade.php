<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edukasi4ID</title>
    <link rel="stylesheet" href="css/konsultan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="icon" href="gambar/edukai.png">
</head>

<body>
    <header>
        <a href="{{ route('index') }}" class="logo"><img src="gambar/edukai.png" alt=""></a>
        <ul class="navigation">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('profil') }}">Profil</a></li>
            <li><a href="{{ route('layanan') }}">Layanan</a></li>
            <li><a href="{{ route('mitra') }}">Mitra</a></li>
            <li><a href="{{ route('kontak') }}">Kontak Kami</a></li>
            <div class="hubka">
                <li><a href="#" class="contact-btn">LMS</a></li>
            </div>
        </ul>
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    </header>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- isi materi -->
    <section class="pre-footer-gallery">
        <div class="container">
            <h2 class="section-title">Beberapa Kegiatan Konsultan Pendidikan</h2>
            <div class="gallery-grid">
                <!-- Baris Atas -->
                <div class="gallery-item">
                    <img src="{{ ('gambar/konsultan/dokumentasi1.png') }}" alt="Keunggulan 1">
                    <p>Industri Pasangan Dan Pendampingan SMK PK Di SMK 4 BOGOR</p>
                </div>
                <div class="gallery-item">
                    <img src="{{ ('gambar/konsultan/dokumentasi2.png') }}" alt="Keunggulan 2">
                    <p>Peningkatan Kompetensi Guru SD Se Kota BOGOR</p>
                </div>
                <div class="gallery-item">
                    <img src="{{ ('gambar/konsultan/dokumentasi3.png') }}" alt="Keunggulan 3">
                    <p>Juri LKS Tingkat Kota Jakarta Timur dan Provinsi DKI Jakarta Bidang Lomba Kable Jaringan Komputer Informasi</p>
                </div>
                <div class="gallery-item">
                    <img src="{{ ('gambar/konsultan/dokumentasi4.png') }}" alt="Keunggulan 4">
                    <p>Peningkatan Kompetensi Asesor UKK</p>
                </div>
                <!-- Baris Bawah -->
                <div class="gallery-item-wide">
                    <img src="{{ ('gambar/konsultan/dokumentasi5.png') }}" alt="Keunggulan 5">
                    <p>Narsumber IHT Penguatan Impelemtasi Kurikulum Merdeka dan Sinkronisasi Kurikulum dengan Iduka</p>
                </div>
                <div class="gallery-item-wide">
                    <img src="{{ ('gambar/konsultan/dokumentasi6.png') }}" alt="Keunggulan 6">
                    <p>Pendampingan dan Penguatan Kurikulum SMK Se- Kota Pontianak</p>
                </div>
                <div class="gallery-item-wide">
                    <img src="{{ ('gambar/konsultan/dokumentasi7.png') }}" alt="Keunggulan 7">
                    <p>Pendampingan Pengembangan Kurikulum pada Spektrum Keahlian Animasi di SMK Muhammadiyah 2 Cileungsi</p>
                </div>
            </div>
        </div>
    </section>
    
        
    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <!-- Google Maps -->
            <div class="footer-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d368.349598346712!2d106.79010131913942!3d-6.561388742766948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c416cbdea47b%3A0x9cc185c252b63a14!2sPT%20Bonet%20Utama%20(Internet%20Bogor)!5e1!3m2!1sid!2sid!4v1728368202127!5m2!1sid!2sid"
                    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <!-- Info Section -->
            <div class="footer-info">
                <h3>Kontak Kami</h3>
                <div class="footer-contact">
                    <i class="fas fa-map-marker-alt"></i>
                    <strong>Alamat :</strong>
                    <span>Komplek Ruko Plaza Indah Bogor B-2 Jl. KH. Sholeh Iskandar - Kedungbadak, Kota Bogor.</span>
                </div>
                <div class="footer-contact">
                    <i class="fas fa-phone-alt"></i>
                    <strong>Telp :</strong>
                    <span>(Verra)0858-8556-4596</span>
                </div>

                <!-- Social Media Icons -->
                <div class="footer-social-icons">
                    <a href="#" class="icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="icon" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="icon" title="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="footer-copyright">
            &copy; 2024 EDUKASI4ID. All rights reserved.
        </div>
    </footer>

</body>

</html>
