<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edukasi4ID</title>
    <link rel="stylesheet" href="css/mitra.css">
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

    <!-- produk -->
    <div class="container" id="info-container">
        <div class="card">
            <img src="{{ asset('gambar/mitra/LSP.jpg') }}" alt="Junior Office Specialist">
            <h3>Kolaborasi Edukasi4ID & LSP Signal Informatika Teknindo</h3>
            <p>kerja sama kami dengan LSP Signal Informatika Teknindo dalam menyediakan pelatihan dan sertifikasi yang
                sesuai dengan standar industri. Kami berkomitmen untuk meningkatkan kompetensi tenaga kerja di bidang
                teknologi informasi, membuka lebih banyak peluang dan memastikan kesiapan profesional menghadapi
                tantangan industri masa depan.</p>
            <center><a href="https://lspsignal.id" class="btn">Menuju LSP</a></center>
        </div>
        <div class="card">
            <img src="{{ asset('gambar/mitra/bonet_logo.jpg') }}" alt="Junior Office Specialist">
            <h3>Kolaborasi Edukasi4ID & PT Bonet Utama</h3>
            <p>Kami bangga bekerja sama dengan PT Bonet Utama untuk menghadirkan pelatihan dan sertifikasi industri yang
                berkualitas. Melalui kolaborasi ini, kami berkomitmen untuk memberikan akses pelatihan profesional yang
                relevan dengan kebutuhan industri, memperkuat keterampilan, dan membuka peluang karier
                bagi para peserta.</p>
        </div>
        <div class="card">
            <img src="{{ asset('gambar/mitra/Zeo_Logo.png') }}" alt="Junior Office Specialist">
            <h3>Kolaborasi Edukasi4ID & PT Zeo Teknologi Nusantara</h3>
            <p>kerja sama kami dengan PT Zeo Teknologi Nusantara, yang bergerak di bidang Event Organizer dan IT
                Solution. Bersama-sama, kami akan menciptakan pengalaman acara yang luar biasa, sekaligus menyediakan
                solusi teknologi yang inovatif untuk mendukung berbagai kebutuhan edukasi dan industri.</p>
        </div>
        <div class="card">
            <img src="{{ asset('gambar/mitra/Protekindo.png') }}" alt="Junior Office Specialist">
            <h3>Kolaborasi Edukasi4ID & Protekindo</h3>
            <p>Bersama Protekindo, kami akan menghadirkan platform edukasi yang lebih inovatif, user-friendly, dan mudah
                diakses. Kami yakin, kerja sama ini akan memperkuat layanan kami dalam memberikan pengalaman belajar
                yang lebih optimal bagi pelajar di Indonesia.</p>
        </div>
        <div class="card">
            <img src="{{ asset('gambar/mitra/kominfo.jpg') }}" alt="Junior Office Specialist">
            <h3>Kolaborasi Edukasi4ID & Kominfo</h3>
            <p>Bersama Kominfo, kami berkomitmen untuk menghadirkan solusi teknologi informasi yang lebih inovatif,
                efisien, dan mudah diakses. Kami yakin, kolaborasi ini akan memperkuat layanan kami dalam memberikan
                akses informasi yang lebih luas dan mendukung transformasi digital di seluruh Indonesia.</p>
        </div>
        <div class="card">
            <img src="{{ asset('gambar/mitra/dinas_pendidikan_jabar.jpg') }}" alt="Junior Office Specialist">
            <h3>Kolaborasi Edukasi4ID & Dinas Pendidikan Jawa Barat</h3>
            <p>Bersama Dinas Pendidikan Jawa Barat, kami berkomitmen untuk menghadirkan layanan pendidikan yang lebih
                inovatif, inklusif, dan mudah diakses. Kami percaya bahwa kolaborasi ini akan memperkuat upaya kami
                dalam meningkatkan mutu pendidikan dan mendukung terciptanya generasi unggul di Jawa Barat.</p>
        </div>
        <div class="card">
            <img src="{{ asset('gambar/mitra/putra_salim.jpg') }}" alt="Junior Office Specialist">
            <h3>Kolaborasi Edukasi4ID & putra_salim</h3>
            <p>Bersama PT Putra Salim, kami siap menghadirkan solusi inovatif yang ramah pengguna, efisien, dan dapat
                diandalkan. Kami yakin, kolaborasi ini akan memperkuat komitmen kami dalam memberikan layanan terbaik
                dan mendukung pertumbuhan bersama di era modern ini.</p>
        </div>
        <div class="card">
            <img src="{{ asset('gambar/mitra/RTIK.jpg') }}" alt="Junior Office Specialist">
            <h3>Kolaborasi Edukasi4ID & Relawan TIK</h3>
            <p>Bersama Relawan TIK, kami berkomitmen untuk menghadirkan edukasi teknologi yang lebih inklusif,
                interaktif, dan mudah dipahami. Kami percaya, kolaborasi ini akan memperkuat upaya kami dalam
                meningkatkan literasi digital dan memberdayakan masyarakat Indonesia di era transformasi digital.</p>
        </div>
        <div class="card">
            <img src="{{ asset('gambar/mitra/fab_lab.jpg') }}" alt="Junior Office Specialist">
            <h3>Kolaborasi Edukasi4ID & FAB LAB</h3>
            <p>Bersama Fab Lab, kami berkomitmen untuk menghadirkan inovasi yang mendukung kreativitas, kolaborasi, dan
                akses teknologi yang lebih luas. Kami yakin, kerja sama ini akan memperkuat upaya kami dalam mendorong
                pengembangan keterampilan dan menciptakan solusi inovatif bagi masyarakat Indonesia.</p>
        </div>
        <div class="card">
            <img src="{{ asset('gambar/mitra/intel_indonesia.png') }}" alt="Junior Office Specialist">
            <h3>Kolaborasi Edukasi4ID & INTEL Indonesia</h3>
            <p>Bersama Intel Indonesia, kami berkomitmen untuk menghadirkan teknologi canggih yang mendukung pendidikan,
                inovasi, dan transformasi digital. Kami percaya, kolaborasi ini akan mempercepat langkah kami dalam
                menciptakan solusi yang berdampak positif bagi kemajuan masyarakat Indonesia.</p>
        </div>
        <div class="card">
            <img src="{{ asset('gambar/mitra/pt_spasi.jpg') }}" alt="Junior Office Specialist">
            <h3>Kolaborasi Edukasi4ID & PT Spasi</h3>
            <p>Bersama PT Spasi, kami berkomitmen untuk menghadirkan solusi inovatif yang mendukung efisiensi,
                kreativitas, dan kemudahan akses teknologi. Kami yakin, kerja sama ini akan memperkuat upaya kami dalam
                memberikan layanan terbaik yang relevan dengan kebutuhan di era digital.</p>
        </div>
        <div class="card">
            <img src="{{ asset('gambar/mitra/PT_geic.png') }}" alt="Junior Office Specialist">
            <h3>Kolaborasi Edukasi4ID & PT GEIC Jaya Lestari</h3>
            <p>Bersama PT GEIC Jaya Lestari, kami berkomitmen untuk menghadirkan solusi inovatif yang mendukung
                efisiensi, kreativitas, dan kemudahan akses teknologi. Kami yakin, kerja sama ini akan memperkuat upaya
                kami dalam memberikan layanan terbaik yang relevan dengan kebutuhan di era digital.</p>
        </div>
        <!-- Tambahkan lebih banyak elemen .card sesuai kebutuhan -->
    </div>

    <center>
        <div class="pagination" id="pagination"></div>
    </center>

    <script>
        const itemsPerPage = 4; // 4 card per halaman (2 baris x 2 kolom)
        let currentPage = 1;

        function displayItems(page) {
            const container = document.getElementById('info-container');
            const cards = Array.from(container.getElementsByClassName('card'));
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            // Sembunyikan semua card terlebih dahulu
            cards.forEach((card, index) => {
                card.style.display = index >= start && index < end ? 'block' : 'none';
            });
        }

        function displayPagination() {
            const container = document.getElementById('info-container');
            const cards = Array.from(container.getElementsByClassName('card'));
            const totalPages = Math.ceil(cards.length / itemsPerPage);
            const pagination = document.getElementById('pagination');
            pagination.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.textContent = i;
                button.classList.toggle('active', i === currentPage);
                button.onclick = () => {
                    currentPage = i;
                    displayItems(currentPage);
                    displayPagination();
                };
                pagination.appendChild(button);
            }
        }

        // Inisialisasi tampilan
        displayItems(currentPage);
        displayPagination();
    </script>

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
