<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'WELDING'; ?></title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background-color: #f4f4f4; 
        }
        .header-full {
            background: rgba(255, 255, 255, 0.85); /* Background transparan (85% opacity) */
            backdrop-filter: blur(8px); /* Efek blur transparan (glassmorphism) */
            -webkit-backdrop-filter: blur(8px); /* Support Safari */
            color: #333; 
            padding: 15px 20px 10px; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            position: fixed; 
            top: 0; 
            left: 0; 
            width: 100%; 
            z-index: 1000; 
            box-shadow: 0 2px 20px rgba(0,0,0,0.08); /* Shadow halus */
            border-bottom: 1px solid rgba(255, 255, 255, 0.3); /* Border transparan */
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94); /* Smooth easing untuk animasi */
            animation: headerSlideDown 0.6s ease-out; /* Animasi masuk dari atas */
        }
        @keyframes headerSlideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        .header-full.scrolled {
            padding: 10px 20px 5px; 
            background: rgba(255, 255, 255, 0.95); /* Lebih opaque saat scroll */
            backdrop-filter: blur(12px); /* Blur lebih kuat */
            box-shadow: 0 4px 30px rgba(0,0,0,0.12); 
            border-bottom: 1px solid rgba(255, 255, 255, 0.4); 
            animation: headerShrink 0.3s ease-out; /* Animasi shrink saat scroll */
        }
        @keyframes headerShrink {
            from {
                padding: 15px 20px 10px;
                font-size: 16px; /* Animasi ukuran font */
            }
            to {
                padding: 10px 20px 5px;
                font-size: 14px;
            }
        }
        .logo-full { 
            font-size: 28px; 
            font-weight: bold; 
            color: #003366; 
            display: flex;
            align-items: center;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94); /* Easing untuk logo animasi */
        }
        .logo-full:hover {
            animation: logoPulse 0.6s ease-in-out; /* Pulse animasi saat hover */
        }
        @keyframes logoPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        .header-full.scrolled .logo-full {
            font-size: 24px; 
        }
        .logo-full img {
            height: 40px; 
            margin-right: 10px; 
            transition: all 0.3s ease; 
            animation: logoFloat 3s ease-in-out infinite; /* Float ringan konstan */
        }
        @keyframes logoFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-3px); }
        }
        .header-full.scrolled .logo-full img {
            height: 32px; 
        }
        .nav-full { 
            display: flex; 
            list-style: none; 
            margin: 0; 
            padding: 0; 
            justify-content: center; 
            width: 100%; 
        }
        .nav-full li { 
            margin: 0 20px; 
            overflow: hidden; /* Untuk animasi underline */
        }
        .nav-full a { 
            color: #333; 
            text-decoration: none; 
            font-size: 16px; 
            font-weight: 500; 
            transition: all 0.3s ease; 
            position: relative; 
            display: inline-block; 
        }
        .header-full.scrolled .nav-full a {
            font-size: 14px; 
        }
        .nav-full a::before { /* Underline dari bawah naik */
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, #003366, #ff6600); /* Gradient underline */
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        .nav-full a:hover::before,
        .nav-full a.active::before {
            transform: scaleX(1);
        }
        .nav-full a:hover { 
            color: #003366; 
            animation: textGlow 0.3s ease; /* Glow text saat hover */
        }
        @keyframes textGlow {
            0% { text-shadow: 0 0 0 rgba(0,51,102,0); }
            100% { text-shadow: 0 0 5px rgba(0,51,102,0.5); }
        }
        .nav-full a.active { 
            color: #003366; 
            font-weight: bold; 
        }
        .header-actions { 
            display: flex; 
            align-items: center; 
        }
        .header-actions button { 
            background: linear-gradient(135deg, #003366 0%, #0056b3 100%); /* Gradient biru */
            color: white; 
            border: none; 
            padding: 8px 16px; 
            border-radius: 20px; 
            cursor: pointer; 
            margin-left: 10px; 
            transition: all 0.3s ease; 
            position: relative; 
            overflow: hidden; /* Untuk ripple effect */
        }
        .header-actions button::before { /* Ripple animasi saat klik */
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255,255,255,0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        .header-actions button:active::before {
            width: 200px;
            height: 200px;
        }
        .header-actions button:hover { 
            background: linear-gradient(135deg, #001f4d 0%, #003366 100%); 
            transform: translateY(-2px); /* Lift effect */
            box-shadow: 0 4px 15px rgba(0,51,102,0.3); 
        }
        .main { 
            padding: 80px 0 20px; /* Padding atas untuk header fixed */
            width: 100%; 
            margin: 0; 
            background: white; 
        }
        .about-section { 
            margin-bottom: 40px; 
            padding: 0 20px; 
        }
        .about-section h1 { 
            color: #003366; 
            text-align: center; 
        }
        .about-text { 
            line-height: 1.6; 
            text-align: justify; 
        }
        .about-text ul { 
            margin: 10px 0 0 20px; 
            line-height: 1.6; 
            list-style-type: disc; 
        }
        .about-text strong { 
            color: #003366; 
            font-size: 18px; 
        }
        .location-section { 
            background-color: #e9e9e9; 
            padding: 20px; 
            text-align: center; 
        }
        .location-section h2 { 
            color: #003366; 
        }
        .footer { 
            background-color: #ffffff; 
            color: #333; 
            padding: 20px; 
            text-align: center; 
            width: 100%; 
            border-top: 1px solid #eee; 
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1); 
        }
        .footer p { 
            margin: 0; 
            font-size: 14px; 
        }
        .image-placeholder { 
            width: 100%; 
            height: 300px; 
            background-color: #ddd; 
            margin: 20px 0; 
            text-align: center; 
            line-height: 300px; 
            color: #666; 
        }

        /* Hamburger Menu untuk Mobile */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 5px;
        }
        .hamburger span {
            width: 25px;
            height: 3px;
            background: #333;
            margin: 3px 0;
            transition: 0.3s;
        }
        .hamburger.active span:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        .hamburger.active span:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }
        .nav-full.mobile {
            position: fixed;
            top: 70px;
            left: 0;
            width: 100%;
            background: rgba(255,255,255,0.98);
            flex-direction: column;
            align-items: center;
            padding: 20px 0;
            transform: translateY(-100%);
            transition: transform 0.3s ease;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .nav-full.mobile.active {
            transform: translateY(0);
        }
        .nav-full.mobile li {
            margin: 10px 0;
            animation: menuSlideIn 0.3s ease forwards; /* Animasi slide masuk per item */
            opacity: 0;
            transform: translateY(20px);
        }
        .nav-full.mobile.active li:nth-child(1) { animation-delay: 0.1s; }
        .nav-full.mobile.active li:nth-child(2) { animation-delay: 0.2s; }
        .nav-full.mobile.active li:nth-child(3) { animation-delay: 0.3s; }
        .nav-full.mobile.active li:nth-child(4) { animation-delay: 0.4s; }
        .nav-full.mobile.active li:nth-child(5) { animation-delay: 0.5s; }
        .nav-full.mobile.active li:nth-child(6) { animation-delay: 0.6s; }
        @keyframes menuSlideIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }
            .nav-full:not(.mobile) {
                display: none;
            }
            .nav-full.mobile {
                display: flex;
            }
            .header-full {
                padding: 15px 15px 10px;
            }
        }
    </style>
</head>
<body>
    <header class="header-full" id="header">
        <div class="logo-full">
            <img src="<?php echo base_url('assets/images/lgrmv.PNG'); ?>" alt="Logo PT Krama Yudha Ratu Motor">
            WELDING
        </div>
        <ul class="nav-full">
            <li><a href="<?php echo base_url('index.php/home'); ?>" id="nav-home">HOME</a></li>
            <li><a href="<?php echo base_url('index.php/profil'); ?>" id="nav-profil">PROFIL</a></li>
            <li><a href="<?php echo base_url('index.php/artikel'); ?>" id="nav-artikel">ARTIKEL IMPROVMENT</a></li>
            <li><a href="<?php echo base_url('index.php/absen'); ?>" id="nav-absen">ABSEN</a></li>
            <li><a href="<?php echo base_url('index.php/informasi'); ?>" id="nav-informasi">INFORMASI</a></li>
            <li><a href="<?php echo base_url('index.php/kontak'); ?>" id="nav-kontak">KONTAK</a></li>
        </ul>
    </header>
    <footer class="footer">
        <p>&copy;</p>
    </footer>

    <script>
        // JS untuk Active Nav (Dynamic Click)
        document.addEventListener('DOMContentLoaded', function() {
            // Set active berdasarkan current page
            const currentPage = window.location.pathname.split('/').pop() || 'home';  // Ambil segment terakhir
            const navLinks = {
                'home': 'nav-home',
                'profil': 'nav-profil',
                'artikel': 'nav-artikel',
                'absen': 'nav-absen',
                'informasi': 'nav-informasi',
                'kontak': 'kontak'
            };
            if (navLinks[currentPage]) {
                document.getElementById(navLinks[currentPage]).classList.add('active');
            }

            // Handle click untuk pindah active
            const links = document.querySelectorAll('.nav-full a');
            links.forEach(link => {
                link.addEventListener('click', function() {
                    // Hapus active dari semua
                    links.forEach(l => l.classList.remove('active'));
                    // Tambah active ke yang diklik
                    this.classList.add('active');
                });
            });

            // Animasi Scroll Header
            const header = document.getElementById('header');
            let lastScrollY = window.scrollY;

            window.addEventListener('scroll', function() {
                const currentScrollY = window.scrollY;

                if (currentScrollY > 50) { // Mulai animasi setelah scroll 50px
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }

                lastScrollY = currentScrollY;
            });
        });
    </script>
</body>
</html>