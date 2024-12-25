<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edukasi4ID</title>
    <link rel="stylesheet" href="css/layanan.css">
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

    <script>
        // Sticky Header
        window.addEventListener('scroll', function() {
            var header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 0);
        });

        // Mobile Menu Toggle dengan animasi
        function toggleMenu() {
            var navigation = document.querySelector('.navigation');
            var menuToggle = document.querySelector('.menu-toggle');

            navigation.classList.toggle('active');
            menuToggle.textContent = navigation.classList.contains('active') ? '✕' : '☰';
        }
    </script>

<br>
    <br>
<br>
    <br>
<br>
    <br>

    <section id="produk-kami" class="products-section">
        <center><h2>Produk Kami</h2></center>
        <div class="products-container">
            <div class="product-card">
                <img src="{{ asset('gambar/pelatihan.jpeg') }}" alt="Pelatihan" class="product-image">
                <h3>Pelatihan</h3>
                <p>Program pelatihan yang dirancang untuk meningkatkan keterampilan siswa dengan pendekatan yang interaktif dan praktis.</p>
                <a href="{{ route('pelatihan') }}" class="btn">Pelajari Lebih Lanjut</a>
            </div>
            <div class="product-card">
                <img src="{{ asset('gambar/LMS.jpeg') }}" alt="Learning Management System" class="product-image">
                <h3>Learning Management System</h3>
                <p>Sistem manajemen pembelajaran yang memungkinkan pengelolaan materi pembelajaran secara efisien dan terorganisir.</p>
                <a href="{{ route('LMS') }}" class="btn">Pelajari Lebih Lanjut</a>
            </div>
            <div class="product-card">
                <img src="{{ asset('gambar/konsultan_pendidikan.jpeg') }}" alt="Konsultan Pendidikan" class="product-image">
                <h3>Konsultan Pendidikan</h3>
                <p>Jasa konsultan pendidikan yang membantu institusi dalam merancang program dan kurikulum yang efektif.</p>
                <a href="{{ route('konsultan') }}" class="btn">Pelajari Lebih Lanjut</a>
            </div>
            <div class="product-card">
                <img src="{{ asset('gambar/platform_pendidikan.jpg') }}" alt="Website Sekolah & Platform Pendidikan" class="product-image">
                <h3>Website Sekolah & Platform Pendidikan</h3>
                <p>Layanan pembuatan website sekolah dan platform pendidikan yang profesional untuk mendukung kebutuhan digital institusi Anda.</p>
                <a href="{{ route('website_sekolah') }}" class="btn">Pelajari Lebih Lanjut</a>
            </div>
            <div class="product-card">
                <img src="{{ asset('gambar/pembelajaran_modern.jpg') }}" alt="Aplikasi" class="product-image">
                <h3>Aplikasi</h3>
                <p>Pengembangan aplikasi yang dapat disesuaikan dengan kebutuhan institusi pendidikan untuk mendukung pembelajaran modern.</p>
                <a href="#" class="btn">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </section>
    

    <br>

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
