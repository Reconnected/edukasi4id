<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edukasi4ID</title>
    <link rel="stylesheet" href="css/perusahaan.css">
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

    <!--- materi --->
    <center><h1>Kolaborasi Antar Perusahaan Dengan Edukasi 4ID</h1></center>

    <div class="container" id="info-container">
        <div class="card">
            <img src="{{ asset('gambar/mitra/bonet_logo.jpg') }}" >
            <h3>PT BONET</h3>
            <p>Jl. Raya Bogor KM.30, Sukmajaya, Depok, Jawa Barat</p>
        </div>
    
        <div class="card">
            <img src="{{ asset('gambar/mitra/dinas_pendidikan_jabar.jpg') }}" >
            <h3>Dinas Pendidikan Jawa Barat</h3>
            <p>Jl. Raya Jonggol - Cariu No.12, Cariu, Bogor, Jawa Barat</p>
        </div>
    
        <div class="card">
            <img src="{{ asset('gambar/mitra/fab_lab.jpg') }}" >
            <h3>PT FAB LAB</h3>
            <p>Jl. Sentul Raya No.4, Sentul, Babakan Madang, Bogor, Jawa Barat</p>
        </div>
    
        <div class="card">
            <img src="{{ asset('gambar/mitra/intel_indonesia.png') }}" >
            <h3>INTEL Indonesia</h3>
            <p>Jl. Margonda Raya No.15, Beji, Depok, Jawa Barat</p>
        </div>
    
        <div class="card">
            <img src="{{ asset('gambar/mitra/kominfo.jpg') }}" >
            <h3>KOMINFO</h3>
            <p>Jl. Metland Transyogi, Cileungsi, Bogor, Jawa Barat</p>
        </div>
    
        <div class="card">
            <img src="{{ asset('gambar/mitra/LSP.jpg') }}" >
            <h3>LSP Signal Informatika Teknindo</h3>
            <p>Jl. Raya Narogong KM.14, Cileungsi, Bogor, Jawa Barat</p>
        </div>
    
        <div class="card">
            <img src="{{ asset('gambar/mitra/protekindo.png') }}" >
            <h3>PT Protek Indo</h3>
            <p>Jl. Gunung Putri No.8, Gunung Putri, Bogor, Jawa Barat</p>
        </div>
    
        <div class="card">
            <img src="{{ asset('gambar/mitra/PT_geic.png') }}" >
            <h3>PT GEIC Jaya lestari</h3>
            <p>Jl. Raflesia Raya No.12, Cimanggis, Depok, Jawa Barat</p>
        </div>
    
        <div class="card">
            <img src="{{ asset('gambar/mitra/pt_spasi.jpg') }}" >
            <h3>PT SPASI</h3>
            <p>Jl. Raya Transyogi No.1, Cileungsi, Bogor, Jawa Barat</p>
        </div>
    
        <div class="card">
            <img src="{{ asset('gambar/mitra/putra_salim.jpg') }}" >
            <h3>PT Putra Salim</h3>
            <p>Jl. Raya Ciomas No.9, Ciomas, Bogor, Jawa Barat</p>
        </div>

        <div class="card">
            <img src="{{ asset('gambar/mitra/RTIK.jpg') }}" >
            <h3>Relawan TIK</h3>
            <p>Jl. Raya Mayor Oking No.2, Cibinong, Bogor, Jawa Barat</p>
        </div>

        <div class="card">
            <img src="{{ asset('gambar/mitra/Zeo_Logo.png') }}" >
            <h3>SMK Iptek Cilamaya</h3>
            <p>Jl. Raya Mayor Oking No.2, Cibinong, Bogor, Jawa Barat</p>
        </div>
    </div>    
    
    <center><div class="pagination" id="pagination"></center>
        <!-- Tombol paginasi akan di-generate oleh JavaScript -->
    </div>
    
    <script>
        const itemsPerPage = 5; // Set jumlah item per halaman
        let currentPage = 1;

        function displayItems(page) {
            const container = document.getElementById('info-container');
            const cards = Array.from(container.getElementsByClassName('card'));
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            cards.forEach((card, index) => {
                if (index >= start && index < end) {
                    card.style.display = 'block'; // Tampilkan kartu di halaman saat ini
                } else {
                    card.style.display = 'none'; // Sembunyikan kartu yang tidak ada di halaman
                }
            });
        }

        function displayPagination() {
            const container = document.getElementById('info-container');
            const cards = Array.from(container.getElementsByClassName('card'));
            const totalPages = Math.ceil(cards.length / itemsPerPage);
            const pagination = document.getElementById('pagination');
            pagination.innerHTML = ''; // Bersihkan paginasi sebelumnya

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.textContent = i;
                if (i === currentPage) {
                    button.classList.add('active');
                }
                button.onclick = () => {
                    currentPage = i;
                    displayItems(currentPage);
                    displayPagination();
                };
                pagination.appendChild(button);
            }
        }

        // Intersection Observer for animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                } else {
                    entry.target.classList.remove('show');
                }
            });
        }, {
            threshold: 0.1 // Adjust as needed; 0.1 means 10% of the card is in view
        });

        // Apply the observer to each card
        document.querySelectorAll('.card').forEach(card => {
            observer.observe(card);
        });

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