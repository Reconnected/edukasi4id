<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edukasi4ID</title>
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">    <link rel="icon" href="gambar/edukai.png">
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

<section id="profil" class="profile-section">
    <h2>Profil Edukasi4ID</h2>
    <div class="profile-content">
        <div class="profile-text">
            <h3>Tentang Kami</h3>
            <p>
                Edukasi4ID adalah Perusahaan Konsultan pendidikan dan layanan pelatihan/Layanan Pendidikan non formal yang fokus di bidang vokasi dan kejuruan untuk memenuhi kebutuhan industri, khususnya bidang Teknologi Informasi dan Komunikasi. Edukasi4ID dibentuk oleh para praktisi Teknologi Informasi dan Komunikasi yang sangat peduli terhadap perkembangan dunia Pendidikan di Indonesia khususnya bidang vokasi. Didirikan di Jakarta pada tanggal 11 November 2020, bertepatan saat terjadinya wabah Covid-19 dan dunia Pendidikan dipaksa untuk melakukan proses pembelajaran secara online (Dalam Jaringan), sehingga bisa menjadi solusi saat banyak Lembaga Pendidikan yang belum terbiasa dengan teknologi tersebut pada saat ini.
            </p>
        </div>
        <div class="profile-image-container">
            <img src="{{ asset('gambar/pengurus_edukasi.png') }}" alt="Gambar Sekolah" class="profile-image">
        </div>
    </div>
    <div class="vision-mission-section">
        <div class="vision-mission-image-container">
            <img src="{{ asset('gambar/pengurus_edukasi.png') }}" alt="Gambar Visi Misi" class="vision-mission-image">
        </div>
        <div class="vision-mission-text">
            <h3>Visi & Misi</h3>
            <p><strong>Visi:</strong> Menjadi Lembaga Konsultan Pendidikan dan Pelatihan Pengembangan Diri dan Organisasi yang Profesional di Indonesia.</p>
            <p><strong>Misi:</strong></p>
            <ul>
                <li>Melayani kebutuhan peningkatan kompetensi Pendidikan, Profesi dan masyarakat di Bidang Teknologi Informasi Komunikasi serta pengembangan SDM.</li>
                <li>Melaksanakan seminar dan pelatihan di bidang TIK, SDM, Character Building dan Capacity Building untuk kebutuhan pribadi Lembaga dan Organisasi.</li>
                <li>Menjamin kepuasan pelanggan dalam melayani jasa pelatihan Pendidikan dan Update Teknologi.</li>
                <li>Melakukan kerjasama dengan Lembaga terkait, Perguruan Tinggi, Instansi Pemerintah atau Swasta dan menggunakan Tenaga Pengajar yang memiliki kemampuan Tenaga Ahli.</li>
            </ul>
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

    <script>
        let currentIndex = 0;

        function moveCards(direction) {
            const cards = document.querySelector('.card-container');
            const cardWidth = document.querySelector('.card').offsetWidth + 20; // Width + margin
            currentIndex += direction;

            if (currentIndex < 0) {
                currentIndex = 0;
            } else if (currentIndex > cards.children.length - 1) {
                currentIndex = cards.children.length - 1;
            }

            cards.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        }
    </script>
    <script>
        let currentIndex = 0; // Start at the first card
        const cardsToShow = 3; // Number of cards to show
        const totalCards = document.querySelectorAll('.card').length; // Total number of cards
        const cardWidth = 300; // Width of a card
        const cardSlider = document.querySelector('.card-slider'); // Select the slider

        // Update slider position
        function updateSlider() {
            const offset = currentIndex * (cardWidth + 20); // Calculate offset including margin
            cardSlider.style.transform = `translateX(-${offset}px)`; // Move the slider
        }

        // Previous button functionality
        document.querySelector('.prev-button').addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--; // Move to the previous card
                updateSlider();
            }
        });

        // Next button functionality
        document.querySelector('.next-button').addEventListener('click', () => {
            if (currentIndex < totalCards - cardsToShow) {
                currentIndex++; // Move to the next card
                updateSlider();
            }
        });
    </script>
    <script>
        const slider = document.querySelector('.card-slider');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');

        let scrollPosition = 0;
        const cardWidth = slider.querySelector('.card').offsetWidth + 10; // Menambahkan margin-right

        nextBtn.addEventListener('click', () => {
            if (scrollPosition < slider.scrollWidth - slider.offsetWidth) {
                scrollPosition += cardWidth * 2; // Pindah 2 kartu per klik
            } else {
                // Jika sudah mentok, kembali ke awal
                scrollPosition = 0;
            }
            slider.scrollTo({
                left: scrollPosition,
                behavior: 'smooth'
            });
        });

        prevBtn.addEventListener('click', () => {
            if (scrollPosition > 0) {
                scrollPosition -= cardWidth * 2; // Pindah 2 kartu per klik
            } else {
                // Jika mentok di awal, kembali ke akhir
                scrollPosition = slider.scrollWidth - slider.offsetWidth;
            }
            slider.scrollTo({
                left: scrollPosition,
                behavior: 'smooth'
            });
        });
    </script>


</body>

</html>
