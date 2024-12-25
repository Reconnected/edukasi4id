<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edukasi4ID</title>
    <link rel="stylesheet" href="css/website_sekolah.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="icon" href="gambar/edukai.png">
</head>

<body>
    <!--- Header --->
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

    <!--- isi materi --->
    <div class="photo-layout">
        <div class="photo-large">
            <img src="{{ asset('gambar/LMS_edukasi.jpg') }}" alt="Foto Besar">
        </div>
        <!-- Card untuk teks -->
        <div class="photo-card">
            <p>Edukasi4ID merupakan platform Learning Management System (LMS) yang dirancang untuk memberikan pengalaman
                belajar yang optimal bagi siswa, guru, dan lembaga pendidikan. Dengan teknologi terkini, Edukasi4ID
                menawarkan berbagai fitur yang mendukung proses pembelajaran efektif, kolaboratif, dan interaktif.</p>
        </div>

        <div class="content-wrapper">
            <h2>Kenapa Harus EDUKSI4ID?</h2>
            
            <table class="feature-table">
                <tr>
                    <th>Fitur</th>
                    <th>Deskripsi</th>
                </tr>
    
                <tr>
                    <td><span class="icon">📚</span></td>
                    <td><span class="feature-description"><strong>Materi Lengkap dan Terstruktur:</strong> Berisi berbagai materi edukatif yang disusun secara sistematis dan mudah dipahami.</span></td>
                </tr>
    
                <tr>
                    <td><span class="icon">👩‍🏫</span></td>
                    <td><span class="feature-description"><strong>Untuk Guru dan Siswa:</strong> Mengintegrasikan alat untuk manajemen kelas, penilaian, dan kolaborasi antar peserta didik dan pengajar.</span></td>
                </tr>
    
                <tr>
                    <td><span class="icon">🌐</span></td>
                    <td><span class="feature-description"><strong>Akses Mudah:</strong> Dapat diakses kapan saja dan di mana saja, melalui berbagai perangkat.</span></td>
                </tr>
    
                <tr>
                    <td><span class="icon">🖥️</span></td>
                    <td><span class="feature-description"><strong>Teknologi Modern:</strong> Menggunakan antarmuka yang intuitif dan fitur canggih untuk pengalaman belajar optimal.</span></td>
                </tr>
    
            </table>
    
        </div>
    </div>

    <br>
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
