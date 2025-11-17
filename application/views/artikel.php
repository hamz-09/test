<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Improvement 2025 | PT. Krama Yudha Ratu Motor</title>
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
            --card-shadow: 0 20px 60px rgba(0,0,0,0.12);
            --transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: #f5f7fa;
            color: var(--dark);
            line-height: 1.7;
        }
        img { max-width: 100%; display: block; }
        .container { max-width: 1400px; margin: 0 auto; padding: 0 20px; }

        /* Header */
        .header-section { background: var(--gradient); color: white; padding: 70px 20px 50px; text-align: center; position: relative; overflow: hidden; }
        .header-section::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('<?php echo base_url('assets/images/improvement-bg.jpg'); ?>') center/cover; opacity: 0.15; z-index: 0; }
        .header-content { position: relative; z-index: 1; }
        .header-section h1 { font-size: 3.5rem; font-weight: 900; margin-bottom: 15px; text-shadow: 0 3px 15px rgba(0,0,0,0.4); }
        .header-section p { font-size: 1.3rem; max-width: 900px; margin: 0 auto 40px; opacity: 0.92; }

        .timeline-nav { display: flex; justify-content: center; flex-wrap: wrap; gap: 12px; margin-top: 30px; }
        .timeline-btn { background: rgba(255,255,255,0.18); color: white; border: 1px solid rgba(255,255,255,0.3); padding: 12px 24px; border-radius: 50px; font-weight: 600; cursor: pointer; transition: var(--transition); backdrop-filter: blur(8px); }
        .timeline-btn:hover, .timeline-btn.active { background: var(--secondary); color: var(--primary); transform: translateY(-4px); box-shadow: 0 10px 30px rgba(255,204,0,0.3); }

        /* Improvement Card PREMIUM */
        .improvement-card { background: white; border-radius: 28px; overflow: hidden; box-shadow: var(--card-shadow); border: 1px solid rgba(0,51,102,0.1); opacity: 0; transform: translateY(50px); }
        .improvement-card.animate { opacity: 1; transform: translateY(0); transition: all 1.2s ease 0.2s; }
        .improvement-card:hover { transform: translateY(-10px); box-shadow: 0 35px 90px rgba(0,51,102,0.2); }

        .card-header { background: var(--gradient); color: white; padding: 50px 40px; text-align: center; position: relative; overflow: hidden; }
        .card-header::before { content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%); animation: shine 10s infinite; }
        @keyframes shine { 0%,100% { transform: translateX(-100%) translateY(-100%) rotate(45deg); } 50% { transform: translateX(100%) translateY(100%) rotate(45deg); } }
        .card-header h2 { font-size: 2.6rem; font-weight: 900; display: flex; align-items: center; justify-content: center; gap: 15px; }
        .card-header .highlight { background: linear-gradient(90deg, var(--secondary), #ffd700); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .icon-pulse { animation: pulse 2s infinite; } @keyframes pulse { 0%,100% { transform: scale(1); } 50% { transform: scale(1.25); } }

        .card-body { padding: 60px 50px; background: linear-gradient(135deg, #fdfdfd 0%, #f8f9fa 100%); }
        .main-text { font-size: 1.2rem; color: #444; margin-bottom: 35px; line-height: 1.9; }
        .text-primary { color: var(--primary); font-weight: 700; }
        .text-secondary { color: var(--secondary); font-weight: 700; }
        .text-accent { color: var(--accent); font-weight: 700; }

        .stats-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin: 40px 0; text-align: center; }
        .stat-item { padding: 25px; background: white; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); transition: var(--transition); }
        .stat-item:hover { transform: translateY(-8px); box-shadow: 0 20px 50px rgba(0,51,102,0.15); }
        .stat-number { font-size: 3.2rem; font-weight: 900; color: var(--primary); }
        .stat-item p { font-size: 1.1rem; color: #555; margin: 8px 0 0; }
        .stat-item .small { font-size: 0.9rem; color: var(--gray); display: block; }

        /* PENJELASAN 4 BIDANG */
        .area-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin: 50px 0;
        }
        .area-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 12px 35px rgba(0,0,0,0.08);
            transition: var(--transition);
            border-left: 6px solid var(--primary);
        }
        .area-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0,51,102,0.15);
        }
        .area-card h3 {
            font-size: 1.5rem;
            color: var(--primary);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .area-card h3 i { color: var(--secondary); font-size: 1.6rem; }
        .area-card p { font-size: 1.05rem; color: #444; line-height: 1.8; }
        .area-card ul { padding-left: 20px; margin: 15px 0; }
        .area-card li { margin: 8px 0; color: #555; }

        .highlight-box { background: linear-gradient(135deg, rgba(0,51,102,0.06) 0%, rgba(255,204,0,0.06) 100%); border: 1px solid rgba(0,51,102,0.12); border-radius: 20px; padding: 30px; margin: 40px 0; font-size: 1.15rem; line-height: 1.9; }
        .highlight-box i { color: var(--secondary); margin-right: 10px; }

        .cta { text-align: center; margin: 50px 0; }
        .btn-primary { display: inline-flex; align-items: center; gap: 12px; background: var(--gradient); color: white; padding: 16px 36px; border-radius: 50px; font-weight: 700; font-size: 1.15rem; text-decoration: none; box-shadow: 0 10px 30px rgba(0,51,102,0.3); transition: var(--transition); }
        .btn-primary:hover { transform: translateY(-4px); box-shadow: 0 20px 50px rgba(0,51,102,0.4); background: linear-gradient(135deg, #00509e 0%, #003366 100%); }
        .btn-primary i { transition: transform 0.3s; }
        .btn-primary:hover i { transform: translateX(6px); }

        /* Foto Section */
        .foto-section { padding: 100px 0; background: #f9f9f9; opacity: 0; transform: translateY(50px); }
        .foto-section.animate { opacity: 1; transform: translateY(0); transition: all 1.2s ease; }
        .section-title { text-align: center; font-size: 2.8rem; font-weight: 800; color: var(--primary); margin-bottom: 25px; position: relative; }
        .section-title::after { content: ''; width: 100px; height: 6px; background: var(--secondary); display: block; margin: 15px auto; border-radius: 3px; }

        .foto-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 35px; max-width: 1200px; margin: 40px auto 0; padding: 0 20px; }
        .foto-column { display: flex; flex-direction: column; gap: 35px; }
        .foto-item { background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: var(--transition); opacity: 0; transform: translateY(30px); }
        .foto-item.animate { opacity: 1; transform: translateY(0); }
        .foto-item:hover { transform: translateY(-15px); box-shadow: 0 25px 60px rgba(0,0,0,0.18); }
        .foto-item img { width: 100%; height: 340px; object-fit: cover; transition: transform 0.6s ease; }
        .foto-item:hover img { transform: scale(1.1); }
        .foto-caption { padding: 25px; text-align: center; }
        .foto-caption p { font-weight: 700; color: var(--gray); font-size: 1.15rem; transition: color 0.3s; }
        .foto-item:hover .foto-caption p { color: var(--primary); }

        /* Modal */
        .modal { display: none; position: fixed; z-index: 2000; left: 0; top: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.95); backdrop-filter: blur(15px); align-items: center; justify-content: center; padding: 20px; }
        .modal-content { max-width: 95%; max-height: 95%; border-radius: 20px; overflow: hidden; box-shadow: 0 30px 80px rgba(0,0,0,0.6); }
        .modal img { width: 100%; height: 100%; object-fit: contain; }
        .close { position: absolute; top: 25px; right: 35px; color: white; font-size: 3.5rem; font-weight: bold; cursor: pointer; z-index: 10; transition: var(--transition); }
        .close:hover { color: var(--secondary); transform: scale(1.3); }

        /* Responsive */
        @media (max-width: 992px) {
            .header-section h1 { font-size: 2.8rem; }
            .foto-grid { grid-template-columns: 1fr; gap: 25px; }
            .stats-grid, .area-grid { grid-template-columns: 1fr; }
            .card-header h2 { font-size: 2.2rem; flex-direction: column; }
        }
        @media (max-width: 768px) {
            .header-section { padding: 60px 20px 40px; }
            .header-section h1 { font-size: 2.3rem; }
            .timeline-btn { padding: 10px 18px; font-size: 0.9rem; }
            .card-body { padding: 40px 25px; }
            .card-header { padding: 40px 25px; }
            .section-title { font-size: 2.2rem; }
            .foto-section { padding: 80px 0; }
            .foto-item img { height: 240px; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="header-section">
        <div class="header-content">
            <h1>IMPROVEMENT 2025</h1>
            <p>Budaya perbaikan berkelanjutan untuk efisiensi, kualitas, dan produktivitas di PT. Krama Yudha Ratu Motor</p>
            <div class="timeline-nav">
                <?php 
                $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
                foreach ($bulan as $i => $b) {
                    $active = ($i === 0) ? ' active' : '';
                    echo "<button class='timeline-btn$active' onclick=\"scrollToMonth($i)\">$b</button>";
                }
                ?>
            </div>
        </div>
    </header>

    <!-- Improvement Card PREMIUM -->
    <section class="intro-section">
        <div class="container">
            <div class="improvement-card">
                <div class="card-header">
                    <h2><i class="fas fa-chart-line icon-pulse

"></i> Apa Itu <span class="highlight">Improvement</span>?</h2>
                    <p class="subtitle">Perbaikan berkelanjutan untuk masa depan yang lebih baik</p>
                </div>
                <div class="card-body">
                    <p class="main-text">
                        <strong>Improvement</strong> adalah budaya kerja di <strong>PT. Krama Yudha Ratu Motor</strong> yang berfokus pada 
                        <span class="text-primary">perbaikan berkelanjutan</span> untuk meningkatkan <strong>efisiensi, kualitas, dan kepuasan</strong>.
                    </p>

                    <div class="stats-grid">
                        <div class="stat-item"><div class="stat-number" data-target="48">0</div><p>Improvement<br><span class="small">di 2025</span></p></div>
                        <div class="stat-item"><div class="stat-number" data-target="12">0</div><p>Bulan<br><span class="small">Aktif</span></p></div>
                        <div class="stat-item"><div class="stat-number" data-target="4">0</div><p>Bidang<br><span class="small">Utama</span></p></div>
                    </div>

                    <!-- PENJELASAN 4 BIDANG -->
                    <div class="area-grid">
                        <div class="area-card">
                            <h3><i class="fas fa-industry"></i> Proses Produksi</h3>
                            <p>Mengoptimalkan alur kerja, mengurangi waste, dan meningkatkan produktivitas dengan metode <strong>Lean Manufacturing, 5S, dan Kaizen</strong>. Hasil: waktu produksi lebih cepat, biaya lebih rendah.</p>
                            <ul>
                                <li>Standardisasi SOP</li>
                                <li>Pengurangan downtime mesin</li>
                                <li>Peningkatan OEE (Overall Equipment Effectiveness)</li>
                            </ul>
                        </div>
                        <div class="area-card">
                            <h3><i class="fas fa-award"></i> Manajemen Kualitas</h3>
                            <p>Menerapkan sistem <strong>TQM (Total Quality Management)</strong> dan sertifikasi <strong>ISO 9001</strong> untuk menjamin setiap produk memenuhi standar tertinggi.</p>
                            <ul>
                                <li>Pemeriksaan 100% di setiap tahap</li>
                                <li>Penggunaan SPC (Statistical Process Control)</li>
                                <li>Zero defect target</li>
                            </ul>
                        </div>
                        <div class="area-card">
                            <h3><i class="fas fa-headset"></i> Layanan Pelanggan & IT</h3>
                            <p>Meningkatkan responsivitas layanan dan keandalan sistem IT untuk mendukung operasional dan kepuasan pelanggan.</p>
                            <ul>
                                <li>Digitalisasi proses pengaduan</li>
                                <li>Implementasi ERP & CRM</li>
                                <li>24/7 support system</li>
                            </ul>
                        </div>
                        <div class="area-card">
                            <h3><i class="fas fa-users"></i> Pengembangan SDM</h3>
                            <p>Membangun kompetensi dan motivasi karyawan melalui <strong>pelatihan berkala, coaching, dan budaya apresiasi</strong>.</p>
                            <ul>
                                <li>Training teknis & soft skill</li>
                                <li>Program reward & recognition</li>
                                <li>Succession planning</li>
                            </ul>
                        </div>
                    </div>

                    <div class="highlight-box">
                        <p><i class="fas fa-lightbulb"></i> <strong>Intinya:</strong> Kami menemukan <span class="text-primary">kelemahan</span>, menciptakan <span class="text-secondary">solusi inovatif</span>, dan menghasilkan <span class="text-accent">kinerja optimal</span> dengan <span class="text-secondary">biaya efisien</span>.</p>
  </div>

                    <div class="cta">
                        <a href="#month-0" class="btn-primary" onclick="scrollToMonth(0)">
                            <i class="fas fa-arrow-down"></i> Lihat Improvement Januari
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Foto Sections -->
    <?php
    $data_bulan = [
        'Januari' => ['ipj1.jpg','ipj2.jpg','ipj3.jpg','ipj4.jpg'],
        'Februari' => ['feb1.jpg','feb2.jpg','feb3.jpg','feb4.jpg'],
        'Maret' => ['mar1.jpg','mar2.jpg','mar3.jpg','mar4.jpg'],
        'April' => ['ap1.jpg','ap2.jpg','ap3.jpg','ap4.jpg'],
        'Mei' => ['may1.jpg','may2.jpg','may3.jpg','may4.jpg'],
        'Juni' => ['jun1.jpg','jun2.jpg','jun3.jpg','jun4.jpg'],
        'Juli' => ['jul1.jpg','jul2.jpg','jul3.jpg','jul4.jpg'],
        'Agustus' => ['ag1.jpg','ag2.jpg','ag3.jpg','ag4.jpg'],
        'September' => ['ips1.jpg','ips2.jpg','ips3.jpg','ips4.jpg'],
        'Oktober' => ['okt1.jpg','okt2.jpg','okt3.jpg','okt4.jpg'],
        'November' => ['nov1.jpg','nov2.jpg','nov3.jpg','nov4.jpg'],
        'Desember' => ['des1.jpg','des2.jpg','des3.jpg','des4.jpg'],
    ];

    $index = 0;
    foreach ($data_bulan as $nama => $gambar) {
        echo "<section class='foto-section' id='month-$index'>
                <div class='container'>
                    <h2 class='section-title'>IMPROVEMENT $nama 2025</h2>
                    <div class='foto-grid'>
                        <div class='foto-column'>";

        for ($i = 0; $i < 2; $i++) {
            $src = base_url('assets/images/' . $gambar[$i]);
            echo "<div class='foto-item' onclick=\"openModal('$src')\">
                    <img src='$src' alt='Improvement $nama' loading='lazy'>
                    <div class='foto-caption'><p>Improvement $nama 2025</p></div>
                  </div>";
        }

        echo "</div><div class='foto-column'>";

        for ($i = 2; $i < 4; $i++) {
            $src = base_url('assets/images/' . $gambar[$i]);
            echo "<div class='foto-item' onclick=\"openModal('$src')\">
                    <img src='$src' alt='Improvement $nama' loading='lazy'>
                    <div class='foto-caption'><p>Improvement $nama 2025</p></div>
                  </div>";
        }

        echo "</div></div></div></section>";
        $index++;
    }
    ?>

    <!-- Modal -->
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeModal()">×</span>
        <div class="modal-content">
            <img id="modalImg" src="" alt="Zoom">
        </div>
    </div>

    <script>
        // Scroll to Month
        function scrollToMonth(index) {
            const sections = document.querySelectorAll('.foto-section');
            if (sections[index]) {
                sections[index].scrollIntoView({ behavior: 'smooth', block: 'center' });
                document.querySelectorAll('.timeline-btn').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.timeline-btn')[index].classList.add('active');
            }
        }

        // Modal
        function openModal(src) {
            const modal = document.getElementById('imageModal');
            const img = document.getElementById('modalImg');
            modal.style.display = 'flex';
            img.src = src;
            document.body.style.overflow = 'hidden';
        }
        function closeModal() {
            document.getElementById('imageModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }
        window.addEventListener('click', e => { if (e.target.classList.contains('modal')) closeModal(); });
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });

        // Animasi
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                        const items = entry.target.querySelectorAll('.foto-item, .area-card, .stat-item');
                        items.forEach((item, i) => setTimeout(() => item.classList.add('animate'), i * 200));
                    }
                });
            }, { threshold: 0.15, rootMargin: '0px 0px -80px 0px' });

            document.querySelectorAll('.improvement-card, .foto-section').forEach(el => observer.observe(el));

            // Stat Counter
            const counters = document.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                let count = 0;
                const inc = target / 100;
                const update = () => {
                    if (count < target) {
                        count = Math.min(count + inc, target);
                        counter.innerText = Math.floor(count);
                        setTimeout(update, 20);
                    } else {
                        counter.innerText = target;
                    }
                };
                const obs = new IntersectionObserver(entries => {
                    if (entries[0].isIntersecting) { update(); obs.unobserve(counter); }
                }, { threshold: 0.5 });
                obs.observe(counter.closest('.improvement-card'));
            });

            // Timeline Active
            const sections = document.querySelectorAll('.foto-section');
            const buttons = document.querySelectorAll('.timeline-btn');
            window.addEventListener('scroll', () => {
                let current = 0;
                sections.forEach((sec, i) => {
                    const rect = sec.getBoundingClientRect();
                    if (rect.top <= window.innerHeight * 0.4) current = i;
                });
                buttons.forEach(b => b.classList.remove('active'));
                if (buttons[current]) buttons[current].classList.add('active');
            });
        });
    </script>
</body>
</html>