<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Welding | PT. Krama Yudha Ratu Motor</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary: #003087;
            --secondary: #d32f2f;
            --accent: #ff6b35;
            --dark: #1a1a1a;
            --light: #f8f9fa;
            --gray: #6c757d;
            --gradient: linear-gradient(135deg, #003087 0%, #0052cc 100%);
            --card-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
            --transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
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

        /* Header & Hero */
        .hero {
            background: var(--gradient);
            color: white;
            padding: 100px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url('<?php echo base_url('assets/images/welding-bg.jpg'); ?>') center/cover no-repeat;
            opacity: 0.15;
            z-index: 0;
        }

        .hero-content {
            display: flex;
            align-items: center;
            gap: 60px;
            position: relative;
            z-index: 1;
            flex-wrap: wrap;
        }

        .leader-card {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            width: 320px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--card-shadow);
            opacity: 0;
            transform: translateY(40px);
            transition: var(--transition);
        }

        .leader-card.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .leader-photo {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 6px solid white;
            margin-bottom: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .leader-name {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .leader-title {
            font-size: 1.1rem;
            opacity: 0.9;
            font-weight: 500;
        }

        .hero-text {
            flex: 1;
            min-width: 300px;
            opacity: 0;
            transform: translateX(50px);
            transition: var(--transition) 0.6s;
        }

        .hero-text.animate {
            opacity: 1;
            transform: translateX(0);
        }

        .hero h1 {
            font-size: 3.2rem;
            font-weight: 800;
            margin-bottom: 16px;
            line-height: 1.2;
        }

        .hero .subtitle {
            font-size: 1.4rem;
            margin-bottom: 30px;
            opacity: 0.95;
            font-weight: 500;
        }

        .highlight-box {
            background: rgba(255, 255, 255, 0.15);
            border-left: 5px solid var(--secondary);
            padding: 22px;
            border-radius: 12px;
            margin: 20px 0;
            backdrop-filter: blur(8px);
            opacity: 0;
            transform: translateY(30px);
        }

        .highlight-box.animate {
            opacity: 1;
            transform: translateY(0);
            transition: var(--transition) 0.8s;
        }

        .highlight-box:nth-child(1) { transition-delay: 0.7s; }
        .highlight-box:nth-child(2) { transition-delay: 0.9s; }

        .highlight-icon {
            font-size: 2rem;
            margin-bottom: 12px;
            display: block;
        }

        .highlight-box p {
            font-size: 1.1rem;
            margin: 0;
        }

        .highlight-box strong {
            color: #fff;
            font-weight: 700;
        }

        /* Board of Directors */
        .board-section {
            padding: 100px 0;
            background: white;
        }

        .section-title {
            text-align: center;
            font-size: 2.6rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 60px;
            position: relative;
        }

        .section-title::after {
            content: '';
            width: 80px;
            height: 4px;
            background: var(--secondary);
            display: block;
            margin: 20px auto 0;
            border-radius: 2px;
        }

        .board-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .director-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            opacity: 0;
            transform: translateY(40px);
        }

        .director-card.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .director-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        .director-photo {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .director-card:hover .director-photo {
            transform: scale(1.08);
        }

        .director-info {
            padding: 24px;
            text-align: center;
        }

        .director-name {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 6px;
        }

        .director-role {
            font-size: 1rem;
            color: var(--gray);
            font-style: italic;
        }

        /* Video Section */
        .video-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            text-align: center;
        }

        .video-wrapper {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            transition: var(--transition);
        }

        .video-wrapper:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.18);
        }

        .video-thumbnail {
            width: 100%;
            display: block;
        }

        .play-btn {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 90px; height: 90px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            color: var(--secondary);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: var(--transition);
        }

        .video-wrapper:hover .play-btn {
            transform: translate(-50%, -50%) scale(1.15);
            background: var(--secondary);
            color: white;
        }

        .video-caption {
            margin-top: 20px;
            font-size: 1.1rem;
            color: var(--gray);
        }

        /* FIX: modal video tidak terlihat */
.video-modal-content {
    max-width: 1000px;
    width: 100%;
    aspect-ratio: 16/9;
    position: relative;
    background: #000;
    border-radius: 16px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.video-modal-content video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}


        /* Services */
        .services {
            padding: 100px 0;
            background: white;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--light);
            padding: 40px 30px;
            border-radius: 16px;
            text-align: center;
            transition: var(--transition);
            opacity: 0;
            transform: translateY(30px);
            border: 1px solid #e0e0e0;
        }

        .service-card.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .service-card:hover {
            background: white;
            box-shadow: var(--card-shadow);
            transform: translateY(-8px);
        }

        .service-icon {
            font-size: 3.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 12px;
        }

        /* Bottom Photo */
        .photo-section {
            padding: 100px 0;
            text-align: center;
            background: linear-gradient(to bottom, #f8f9fa, white);
        }

        .photo-frame {
            display: inline-block;
            max-width: 800px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.15);
            transition: var(--transition);
            cursor: zoom-in;
            padding: 10px;
            background: var(--gradient);
        }

        .photo-frame:hover {
            transform: scale(1.02);
            box-shadow: 0 35px 90px rgba(0, 0, 0, 0.2);
        }

        .photo-inner {
            background: white;
            padding: 8px;
            border-radius: 16px;
        }

        .bottom-photo {
            width: 100%;
            border-radius: 12px;
            transition: filter 0.4s ease;
        }

        .photo-frame:hover .bottom-photo {
            filter: brightness(1.05) contrast(1.1);
        }

        /* Modals */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0; top: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(10px);
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal-content {
            max-width: 90%;
            max-height: 90%;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .close {
            position: absolute;
            top: 20px; right: 25px;
            font-size: 2.5rem;
            color: white;
            cursor: pointer;
            z-index: 10;
            transition: color 0.3s;
        }

        .close:hover {
            color: var(--secondary);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.6rem; }
            .hero-content { flex-direction: column; text-align: center; }
            .leader-card { width: 280px; }
        }

        @media (max-width: 768px) {
            .hero { padding: 80px 0 60px; }
            .hero h1 { font-size: 2.2rem; }
            .section-title { font-size: 2rem; }
            .play-btn { width: 70px; height: 70px; font-size: 1.8rem; }
        }
    </style>
</head>
<body>

<div class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="leader-card">
                <img src="<?php echo base_url('assets/images/timbul.jpg'); ?>" alt="Leader Welding" class="leader-photo">
                <div class="leader-name">Timbul Parhusip</div>
                <div class="leader-title">Kepala Departemen Welding</div>
            </div>

            <div class="hero-text">
                <h1>DEPARTEMEN WELDING</h1>
                <p class="subtitle">PT. Krama Yudha Ratu Motor</p>

                <div class="highlight-box">
                    <span class="highlight-icon">🔥</span>
                    <p>Spesialis <strong>las robotik & manual</strong> untuk produksi truk Mitsubishi Fuso dengan standar <em>JIS & ISO 3834</em>.</p>
                </div>

                <div class="highlight-box">
                    <span class="highlight-icon">⚙️</span>
                    <p>Didukung <strong>50+ robot welding</strong> dan tim ahli bersertifikasi <em>IIW & DNV</em>, menghasilkan <strong>99.8% zero defect</strong>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Board of Directors -->
<section class="board-section">
    <div class="container">
        <h2 class="section-title">Dewan Direksi</h2>
        <div class="board-grid">
            <div class="director-card">
                <img src="<?php echo base_url('assets/images/sandi.jpg'); ?>" alt="Sandi Yudha Berlianto" class="director-photo">
                <div class="director-info">
                    <div class="director-name">Sandi Yudha Berlianto</div>
                    <div class="director-role">Super Visor Welding</div>
                </div>
            </div>
            <div class="director-card">
                <img src="<?php echo base_url('assets/images/jedi.jpg'); ?>" alt="Jedi Cahyono" class="director-photo">
                <div class="director-info">
                    <div class="director-name">Jedi Cahyono</div>
                    <div class="director-role">Senior Foreman</div>
                </div>
            </div>
            <div class="director-card">
                <img src="<?php echo base_url('assets/images/mamiek.jpg'); ?>" alt="Mamiek Tri Haryanto" class="director-photo">
                <div class="director-info">
                    <div class="director-name">Mamiek Tri Haryanto</div>
                    <div class="director-role">Junior Foreman</div>
                </div>
            </div>
            <div class="director-card">
                <img src="<?php echo base_url('assets/images/gib.jpg'); ?>" alt="Takuya Ogawa" class="director-photo">
                <div class="director-info">
                    <div class="director-name">Takuya Ogawa</div>
                    <div class="director-role">Director</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Profile -->
<section class="video-section">
    <div class="container">
        <h2 class="section-title">Video Profil Perusahaan</h2>
        <div class="video-wrapper" onclick="openVideoModal()">
            <img src="<?php echo base_url('assets/images/video-thumbnail.jpg'); ?>" alt="Video Profil" class="video-thumbnail">
            <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
        <p class="video-caption">Klik untuk menonton video profil PT. Krama Yudha Ratu Motor</p>
    </div>
</section>

<!-- Services -->
<section class="services">
    <div class="container">
        <h2 class="section-title">Layanan Utama Welding</h2>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-robot"></i></div>
                <h3>Robotik Welding</h3>
                <p>50+ robot ABB & Fanuc, akurasi 0.1mm</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Quality Control</h3>
                <p>NDT, UT, RT, ISO 3834 certified</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-cogs"></i></div>
                <h3>Custom Fabrication</h3>
                <p>Desain & fabrikasi sesuai kebutuhan</p>
            </div>
        </div>
    </div>
</section>

<!-- Bottom Photo -->
<section class="photo-section">
    <div class="container">
        <div class="photo-frame" onclick="openModal()">
            <div class="photo-inner">
                <img src="<?php echo base_url('assets/images/layout.jpg'); ?>" alt="APD Welder" class="bottom-photo" id="bottomPhoto">
            </div>
        </div>
        <p class="video-caption">Standar Keselamatan Welder – Klik untuk memperbesar</p>
    </div>
</section>

<!-- Modals -->
<div id="imageModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">×</span>
        <img src="" id="modalImage" style="width:100%; border-radius:12px;">
    </div>
</div>

<!-- VIDEO MODAL – DARI FILE LOKAL -->
<div id="videoModal" class="modal">
    <div class="video-modal-content">
        <span class="close" onclick="closeVideoModal()">×</span>
        <video id="companyVideo" controls preload="metadata" poster="<?php echo base_url('assets/images/video-thumbnail.jpg'); ?>">
            <source src="<?php echo base_url('assets/videos/krm.mp4'); ?>" type="video/mp4">
            Browser Anda tidak mendukung pemutar video.
        </video>
    </div>
</div>

<script>
    // Modal Image
    function openModal() {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        modal.style.display = 'flex';
        modalImg.src = document.getElementById('bottomPhoto').src;
    }

    function closeModal() {
        document.getElementById('imageModal').style.display = 'none';
    }

    // Modal Video (Local File)
    function openVideoModal() {
        const modal = document.getElementById('videoModal');
        const video = document.getElementById('companyVideo');
        modal.style.display = 'flex';
        video.currentTime = 0;
        video.play().catch(() => {});
    }

    function closeVideoModal() {
        const modal = document.getElementById('videoModal');
        const video = document.getElementById('companyVideo');
        modal.style.display = 'none';
        video.pause();
        video.currentTime = 0;
    }

    // Close on click outside or ESC
    window.addEventListener('click', e => {
        const imgModal = document.getElementById('imageModal');
        const vidModal = document.getElementById('videoModal');
        if (e.target === imgModal) closeModal();
        if (e.target === vidModal) closeVideoModal();
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            closeModal();
            closeVideoModal();
        }
    });

    // Scroll Animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.leader-card, .hero-text, .highlight-box, .director-card, .service-card').forEach(el => {
        observer.observe(el);
    });
</script>

</body>
</html>
