<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Welding | PT. Krama Yudha Ratu Motor</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary: #003366;
            --secondary: #ffcc00;
            --accent: #e63946;
            --dark: #1a1a1a;
            --light: #f8f9fa;
            --gray: #6c757d;
            --gradient: linear-gradient(135deg, #003366 0%, #00509e 100%);
            --card-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
            --transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f7fa;
            color: var(--dark);
            line-height: 1.7;
            overflow-x: hidden;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* === TANGGAL & JAM DIGITAL (DIPERBAIKI) === */
        .datetime-section {
            position: fixed;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            padding: 12px 18px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            z-index: 1001;
            border: 1px solid rgba(0, 51, 102, 0.1);
            font-weight: 600;
            color: var(--primary);
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition);
        }

        .datetime-section:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .datetime-section i {
            color: var(--secondary);
            font-size: 1.3em;
        }

        /* === HERO SLIDER (DIPERBAIKI: RUANG UNTUK JAM) === */
        .hero-slider {
            position: relative;
            width: 100%;
            height: 90vh;
            overflow: hidden;
            margin-bottom: 80px;
            padding-top: 70px; /* RUANG UNTUK JAM */
        }

        .hero-slider h2.section-title {
            position: absolute;
            top: 20px; /* Lebih tinggi dari sebelumnya */
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            color: white;
            text-shadow: 0 2px 10px rgba(0,0,0,0.7);
            font-size: 2.8rem;
            font-weight: 800;
            margin: 0;
            padding: 0 20px;
            text-align: center;
        }

        .slider-container {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .slider-wrapper {
            display: flex;
            width: 300%;
            height: 100%;
            transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .slide {
            width: 33.3333%;
            height: 100%;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 8s ease, filter 0.5s ease;
        }

        .slide::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
            z-index: 1;
        }

        .slide .caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 60px 40px 30px;
            color: white;
            text-align: center;
            z-index: 2;
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.6s ease;
            font-weight: 700;
            font-size: 1.8rem;
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }

        .slide:hover .caption {
            opacity: 1;
            transform: translateY(0);
        }

        .slide:hover img {
            transform: scale(1.08);
            filter: brightness(1.15);
        }

        /* Navigasi */
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 51, 102, 0.8);
            color: white;
            border: none;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            font-size: 1.8rem;
            cursor: pointer;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            transition: var(--transition);
        }

        .prev { left: 30px; }
        .next { right: 30px; }

        .prev:hover, .next:hover {
            background: var(--secondary);
            color: var(--primary);
            transform: translateY(-50%) scale(1.15);
            box-shadow: 0 12px 35px rgba(255, 204, 0, 0.4);
        }

        .slider-dots {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 10;
        }

        .dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            cursor: pointer;
            transition: var(--transition);
        }

        .dot.active, .dot:hover {
            background: var(--secondary);
            transform: scale(1.3);
            box-shadow: 0 0 15px rgba(255, 204, 0, 0.6);
        }

        /* === SECTION TENTANG WELDING === */
        .about-section {
            padding: 100px 0;
            background: white;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 20px;
            position: relative;
        }

        .section-title::after {
            content: '';
            width: 100px;
            height: 5px;
            background: var(--secondary);
            display: block;
            margin: 20px auto;
            border-radius: 3px;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .about-card {
            background: white;
            padding: 35px 25px;
            border-radius: 20px;
            text-align: center;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            opacity: 0;
            transform: translateY(40px);
        }

        .about-card.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .about-card:hover {
            transform: translateY(-15px) rotate(1deg);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        .about-card img {
            width: 70px;
            height: 70px;
            margin-bottom: 20px;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));
        }

        .about-card h3 {
            color: var(--primary);
            font-size: 1.4rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .about-card p {
            color: var(--gray);
            font-size: 1rem;
        }

        /* K3 List */
        .k3-list {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            padding: 40px;
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            opacity: 0;
            transform: translateY(40px);
        }

        .k3-list.animate {
            opacity: 1;
            transform: translateY(0);
            transition: all 1s ease 0.3s;
        }

        .k3-list h3 {
            text-align: center;
            color: var(--primary);
            font-size: 1.8rem;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .k3-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }

        .k3-item {
            background: white;
            padding: 20px;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.06);
            transition: var(--transition);
        }

        .k3-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.12);
        }

        .k3-item strong {
            color: var(--primary);
            display: block;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        /* === ANDALAN BISNIS === */
        .andalan-section {
            padding: 120px 20px;
            background: linear-gradient(135deg, #003366 0%, #001f4d 100%);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .andalan-section::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url('<?php echo base_url('assets/images/andalan-bg.jpg'); ?>') center/cover;
            opacity: 0.1;
            z-index: 0;
        }

        .andalan-container {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }

        .andalan-section h2 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 20px;
            color: var(--secondary);
        }

        .andalan-section p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 50px;
            opacity: 0.9;
        }

        .visi-misi-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            max-width: 1000px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(50px);
        }

        .visi-misi-grid.animate {
            opacity: 1;
            transform: translateY(0);
            transition: all 1.2s ease 0.5s;
        }

        .visi-box, .misi-box {
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
            opacity: 0;
            transform: translateY(40px);
        }

        .visi-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.8s ease;
        }

        .misi-box {
            background: var(--secondary);
            color: var(--primary);
            transition: all 0.8s ease 0.3s;
        }

        .visi-box.animate, .misi-box.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .visi-box:hover, .misi-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(0,0,0,0.4);
        }

        .visi-box h3, .misi-box h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .misi-box ol {
            text-align: left;
            padding-left: 20px;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        /* === MODAL === */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0; top: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.95);
            backdrop-filter: blur(10px);
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal-content {
            max-width: 95%;
            max-height: 95%;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.4);
            position: relative;
        }

        .modal img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 3rem;
            font-weight: bold;
            cursor: pointer;
            z-index: 10;
            transition: color 0.3s;
        }

        .close:hover {
            color: var(--secondary);
        }

        /* === RESPONSIVE === */
        @media (max-width: 992px) {
            .hero-slider { 
                height: 70vh; 
                padding-top: 60px;
            }
            .hero-slider h2.section-title {
                font-size: 2.4rem;
                top: 15px;
            }
            .slide .caption { 
                font-size: 1.4rem; 
                padding: 40px 20px 20px; 
            }
            .prev, .next { 
                width: 50px; 
                height: 50px; 
                font-size: 1.4rem; 
            }
        }

        @media (max-width: 768px) {
            .hero-slider { 
                height: 60vh; 
                margin-bottom: 60px; 
                padding-top: 55px;
            }
            .hero-slider h2.section-title {
                font-size: 2rem;
                top: 10px;
            }
            .prev, .next { 
                display: none; 
            }
            .slide .caption { 
                font-size: 1.1rem; 
                padding: 30px 15px 15px; 
                opacity: 1; 
                transform: translateY(0); 
            }
            .about-section { 
                padding: 80px 0; 
            }
            .andalan-section { 
                padding: 80px 20px; 
            }
            .visi-misi-grid { 
                grid-template-columns: 1fr; 
            }
            .datetime-section { 
                top: 10px; 
                right: 10px; 
                padding: 10px 14px; 
                font-size: 13px; 
                gap: 8px; 
            }
        }

        @media (max-width: 480px) {
            .hero-slider h2.section-title {
                font-size: 1.6rem;
                top: 8px;
            }
            .datetime-section {
                font-size: 12px;
                padding: 8px 12px;
            }
        }
    </style>
</head>
<body>

    <!-- Tanggal & Jam -->
    <div class="datetime-section">
        <i class="fas fa-calendar-alt"></i>
        <div id="datetime-display"></div>
    </div>

    <!-- Hero Slider -->
    <section class="hero-slider">
        <h2 class="section-title">GALERI WELDING</h2>
        <div class="slider-container">
            <div class="slider-wrapper">
                <div class="slide" onclick="openModal('<?php echo base_url('assets/images/welding.jpg'); ?>')">
                    <img src="<?php echo base_url('assets/images/welding.jpg'); ?>" alt="Welding MIG" loading="lazy">
                    <div class="caption">Proses Welding MIG – Presisi Tinggi untuk Produksi Massal</div>
                </div>
                <div class="slide" onclick="openModal('<?php echo base_url('assets/images/welding2.jpg'); ?>')">
                    <img src="<?php echo base_url('assets/images/welding2.jpg'); ?>" alt="APD Welder" loading="lazy">
                    <div class="caption">Standar K3: APD Lengkap & Keselamatan Prioritas</div>
                </div>
                <div class="slide" onclick="openModal('<?php echo base_url('assets/images/welding3.jpg'); ?>')">
                    <img src="<?php echo base_url('assets/images/welding3.jpg'); ?>" alt="Lab Welding" loading="lazy">
                    <div class="caption">Fasilitas Lab Welding Modern – Bekasi Plant</div>
                </div>
            </div>
            <button class="prev" onclick="changeSlide(-1)">❮</button>
            <button class="next" onclick="changeSlide(1)">❯</button>
            <div class="slider-dots">
                <span class="dot active" onclick="goToSlide(0)"></span>
                <span class="dot" onclick="goToSlide(1)"></span>
                <span class="dot" onclick="goToSlide(2)"></span>
            </div>
        </div>
    </section>

    <!-- About Welding -->
    <section class="about-section">
        <div class="container">
            <h2 class="section-title">TENTANG WELDING</h2>
            <div class="about-grid">
                <div class="about-card">
                    <img src="<?php echo base_url('assets/images/logwel.png'); ?>" alt="Welding">
                    <h3>Proses Pengelasan</h3>
                    <p>Welding adalah penyambungan logam permanen dengan pemanasan hingga meleleh, digunakan di otomotif, konstruksi, dan manufaktur berat.</p>
                </div>
                <div class="about-card">
                    <img src="<?php echo base_url('assets/images/k31.png'); ?>" alt="K3">
                    <h3>Keselamatan Kerja (K3)</h3>
                    <p><strong>K3 Welding</strong><br>Perlindungan dari panas, radiasi UV, asap logam, dan percikan api adalah prioritas utama.</p>
                </div>
                <div class="about-card">
                    <img src="<?php echo base_url('assets/images/str.png'); ?>" alt="Standar">
                    <h3>Standar Internasional</h3>
                    <p>Metode SMAW, MIG, TIG, FCAW dengan sertifikasi AWS, ASME, dan ISO 3834 untuk kualitas global.</p>
                </div>
            </div>

            <div class="k3-list">
                <h3>Perusahaan Wajib Menyediakan:</h3>
                <div class="k3-items">
                    <div class="k3-item">
                        <strong>APD Lengkap</strong>
                        Helm las auto-darkening, sarung tangan tahan panas, jaket FR, sepatu safety, masker respirator
                    </div>
                    <div class="k3-item">
                        <strong>Ventilasi & Ekstraksi</strong>
                        Sistem lokal exhaust untuk menghilangkan asap logam beracun
                    </div>
                    <div class="k3-item">
                        <strong>Pelatihan & Sertifikasi</strong>
                        Welder bersertifikat IIW, prosedur darurat, dan audit K3 rutin
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Andalan Bisnis -->
    <section class="andalan-section">
        <div class="andalan-container">
            <h2>Andalan Bisnis Sejati</h2>
            <p>Kami berkomitmen menjadi mitra andal dalam solusi logistik yang mendukung bisnis maju menuju masa depan yang lebih baik.</p>
            <div class="visi-misi-grid">
                <div class="visi-box">
                    <h3>Visi</h3>
                    <p>Menjadi Perusahaan Perakitan Kendaraan Komersial Termuka di Asia dalam kelompok Daimler Truck Asia.</p>
                </div>
                <div class="misi-box">
                    <h3>Misi</h3>
                    <ol>
                        <li>Menjadi Perusahaan Terpercaya untuk merakit kendaraan merek Mitsubishi Fuso.</li>
                        <li>Menjadi perusahaan perakitan yang kuat dan berkembang, siap bersaing regional & global.</li>
                        <li>Patuh terhadap peraturan dan perundang-undangan yang berlaku.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeModal()">×</span>
        <div class="modal-content">
            <img id="modalImg" src="" alt="Zoom">
        </div>
    </div>

<script>
    // === TANGGAL & JAM ===
    function updateDateTime() {
        const now = new Date();
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        const str = `${days[now.getDay()]}, ${now.getDate()} ${months[now.getMonth()]} ${now.getFullYear()} | ${now.getHours().toString().padStart(2,'0')}:${now.getMinutes().toString().padStart(2,'0')}:${now.getSeconds().toString().padStart(2,'0')}`;
        document.getElementById('datetime-display').textContent = str;
    }
    setInterval(updateDateTime, 1000);
    updateDateTime();

    // === SLIDER ===
    let currentSlideIndex = 0;
    const totalSlides = 3;
    let autoPlay;

    function updateSlider(index) {
        index = (index + totalSlides) % totalSlides;
        currentSlideIndex = index;
        document.querySelector('.slider-wrapper').style.transform = `translateX(-${index * (100/3)}%)`;
        document.querySelectorAll('.dot').forEach((dot, i) => dot.classList.toggle('active', i === index));
    }

    function changeSlide(dir) {
        updateSlider(currentSlideIndex + dir);
        resetAutoPlay();
    }

    function goToSlide(i) {
        updateSlider(i);
        resetAutoPlay();
    }

    function resetAutoPlay() {
        clearInterval(autoPlay);
        autoPlay = setInterval(() => changeSlide(1), 5000);
    }

    // Swipe
    let touchStartX = 0;
    document.querySelector('.slider-container').addEventListener('touchstart', e => touchStartX = e.touches[0].clientX);
    document.querySelector('.slider-container').addEventListener('touchend', e => {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) changeSlide(diff > 0 ? 1 : -1);
    });

    // Init
    document.addEventListener('DOMContentLoaded', () => {
        updateSlider(0);
        resetAutoPlay();

        // Scroll Animations
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, { threshold: 0.2 });

        document.querySelectorAll('.about-card, .k3-list, .visi-misi-grid, .visi-box, .misi-box').forEach(el => observer.observe(el));
    });

    // === MODAL ===
    function openModal(src) {
        const modal = document.getElementById('imageModal');
        const img = document.getElementById('modalImg');
        modal.style.display = 'flex';
        img.src = src;
    }

    function closeModal() {
        document.getElementById('imageModal').style.display = 'none';
    }

    window.addEventListener('click', e => {
        if (e.target.classList.contains('modal')) closeModal();
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeModal();
    });
</script>

</body>
</html>