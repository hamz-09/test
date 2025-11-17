<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Terbaru - Universitas Bani Saleh</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: #333;
            min-height: 100vh;
        }
        .main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .content-section {
            background-color: white;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }
        .content-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #003366, #ff6b35);
        }
        h1 {
            color: #003366;
            border-bottom: 3px solid #ff6b35;
            padding-bottom: 15px;
            text-align: center;
            font-weight: 600;
            margin-bottom: 30px;
            position: relative;
        }
        h1::after {
            content: 'Integritas, Inovasi, Unggul';
            display: block;
            font-size: 0.8em;
            color: #666;
            font-weight: 300;
            margin-top: 5px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }
        .info-card {
            background: linear-gradient(145deg, #ffffff, #f0f0f0);
            border-radius: 15px;
            padding: 20px;
            position: relative;
            text-decoration: none;
            color: inherit;
            display: block;
            transition: all 0.4s ease;
            cursor: default;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(255, 107, 53, 0.1);
            overflow: hidden;
            opacity: 0;
            transform: translateY(50px);
        }
        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #003366, #ff6b35);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }
        .info-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            background: linear-gradient(145deg, #fff, #f8f9fa);
        }
        .info-card:hover::before {
            transform: scaleX(1);
        }
        .info-card.animate {
            opacity: 1;
            transform: translateY(0);
            transition: all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94); /* Easing lebih halus */
        }
        .info-card h3 {
            color: #003366;
            margin-top: 0;
            font-weight: 600;
            font-size: 1.2em;
        }
        .info-card p {
            margin-bottom: 15px;
            line-height: 1.5;
            color: #555;
        }
        .date-badge {
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.85em;
            font-weight: 600;
            display: inline-block;
            box-shadow: 0 2px 10px rgba(255, 107, 53, 0.3);
        }
        .info-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-top: 15px;
            display: block;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .content-section {
            opacity: 0;
            transform: translateY(30px);
            transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .content-section.animate {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="content-section" id="content-section">
            <h1>INFORMASI TERBARU</h1>
            <div class="info-grid">
                <div class="info-card">
                    <h3>Seminar Welding Safety</h3>
                    <p>Ikuti seminar tentang keselamatan pengelasan untuk meningkatkan pengetahuan dan keterampilan mahasiswa. Acara ini akan membahas praktik terbaik dan standar industri terkini.</p>
                    <span class="date-badge">15 November 2025</span>
                    <img src="assets/images/seminar-welding-safety.jpg" alt="Poster Seminar Welding Safety" class="info-image">
                </div>
                
                <div class="info-card">
                    <h3>Beasiswa untuk Mahasiswa Berprestasi</h3>
                    <p>Pendaftaran beasiswa khusus untuk mahasiswa berprestasi di bidang teknik dan sains. Dukungan finansial penuh hingga lulus, buka hingga akhir Desember 2025.</p>
                    <span class="date-badge">Buka hingga Desember 2025</span>
                    <img src="assets/images/beasiswa-berprestasi.jpg" alt="Poster Beasiswa Mahasiswa Berprestasi" class="info-image">
                </div>
                
                <div class="info-card">
                    <h3>Update Kurikulum: Tambah Modul AI in Welding</h3>
                    <p>Kurikulum program studi diperbarui dengan modul baru tentang aplikasi AI dalam pengelasan. Ini akan mempersiapkan mahasiswa untuk era industri 4.0.</p>
                    <span class="date-badge">Efektif Semester Genap 2025/2026</span>
                    <img src="assets/images/update-kurikulum-ai.jpg" alt="Poster Update Kurikulum AI in Welding" class="info-image">
                </div>

                <div class="info-card">
                    <h3>Lowongan Kerja di Industri Pengelasan</h3>
                    <p>Peluang karir menarik dari mitra industri seperti PT. Welding Tech Indonesia. Cocok untuk lulusan baru dengan pengalaman magang. Lamar sekarang!</p>
                    <span class="date-badge">Buka hingga 10 Desember 2025</span>
                    <img src="assets/images/lowongan-kerja-pengelasan.jpg" alt="Poster Lowongan Kerja Industri Pengelasan" class="info-image">
                </div>

                <div class="info-card">
                    <h3>Workshop Penggunaan Software CAD</h3>
                    <p>Belajar desain 3D dengan AutoCAD dan SolidWorks dalam workshop interaktif. Sertifikat diberikan untuk peserta aktif. Daftar segera!</p>
                    <span class="date-badge">5 Desember 2025</span>
                    <img src="assets/images/workshop-cad.jpg" alt="Poster Workshop Software CAD" class="info-image">
                </div>
            </div>
        </div>
    </div>

    <script>
        // JS untuk Animasi Scroll (Intersection Observer) - Lebih Halus
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.2, // Trigger saat 20% elemen visible untuk lebih smooth
                rootMargin: '0px 0px -100px 0px' // Trigger lebih awal (100px sebelum visible)
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                    }
                });
            }, observerOptions);

            // Observe content-section
            const contentSection = document.getElementById('content-section');
            if (contentSection) observer.observe(contentSection);

            // Observe each info-card with staggered delays
            const infoCards = document.querySelectorAll('.info-card');
            infoCards.forEach((card, index) => {
                observer.observe(card);
                // Optional: Add staggered animation by setting animation-delay via JS if needed
                card.style.animationDelay = `${index * 0.2}s`;
            });
        });
    </script>
</body>
</html>