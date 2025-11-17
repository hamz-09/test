<div class="main">
    <div class="content-section" id="content-section">
        <h1>KONTAK KAMI</h1>
        <p class="content-text">
            Jl. Raya Bekasi Km 21-22 Rawa Terate, Cakung, Jakarta 13920.<br>
            Telepon: (021) 4602908<br>
            Email: info@welding.ac.id
        </p>

        <!-- Call-to-Action Section mirip screenshot -->
        <div class="cta-section">
            <div class="cta-text">
                <blockquote>
                    "Siap hingga mengubah kehadiran bisnis Anda? Hubungi PT ASAIN hari ini dan biarkan kami membantu Anda membangun website yang mengesankan dan meningkatkan peringkat SEO Anda hingga hasil yang maksimal"
                </blockquote>
                <a href="https://wa.me/62214602908?text=Halo%20Welding,%20saya%20ingin%20konsultasi%20tentang%20layanan%20Anda" class="konsultasi-btn" target="_blank">
                    Konsultasi
                </a>
            </div>
            <div class="mockup-phone">
                <div class="phone-outer-frame">
                    <!-- Speaker/Notch -->
                    <div class="phone-notch"></div>
                </div>
                <div class="phone-frame">
                    <div class="phone-screen">
                        <div class="status-bar">
                            <span class="signal">📶</span>
                            <span class="time">14:30</span>
                            <span class="battery">🔋 85%</span>
                        </div>
                        <div class="app-mockup">
                            <div class="logo-app">W</div>
                            <div class="form-mockup">
                                <input type="text" placeholder="Username" class="mock-input">
                                <input type="password" placeholder="Password" class="mock-input">
                                <button class="mock-btn">Sign In</button>
                            </div>
                            <div class="lang-toggle">EN / ID</div>
                        </div>
                    </div>
                </div>
                <div class="phone-side-buttons">
                    <div class="volume-btn"></div>
                    <div class="power-btn"></div>
                </div>
            </div>
        </div>

        <!-- Contact Icons -->
        <div class="contact-icons">
            <a href="https://wa.me/62214602908?text=Halo%20Welding,%20saya%20ingin%20konsultasi" class="icon-link wa" target="_blank">
                <img src="<?php echo base_url('assets/images/wa.jpeg'); ?>" alt="WhatsApp">
            </a>
            <a href="tel:+62214602908" class="icon-link phone">
                <img src="<?php echo base_url('assets/images/tap.png'); ?>" alt="Phone">
            </a>
        </div>

        <!-- Placeholder for Contact Form -->
        <div class="image-placeholder">Form Kontak (Placeholder - Tambah &lt;form&gt; action="<?php echo base_url('kontak/send'); ?>"&gt;)</div>

        <!-- Google Maps Embed Section with Red Marker Pin -->
        <div class="maps-section">
            <h2>Lokasi Kami</h2>
            <p class="coords-text">
                <strong>Titik Koordinat:</strong> Latitude: -6.185648 | Longitude: 106.922728
            </p>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6!2d106.92272866466685!3d-6.18564876371838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNqLCATExJzI5LjciUyAxMDrCsDU1JzIxLjUiRQ!5e0!3m2!1sen!2sid!4v1729417600000!5m2!1sen!2sid" 
                width="100%" 
                height="450" 
                style="border:0; border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,0.1);" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <a href="https://maps.app.goo.gl/U3sh2TUe8BWshvx77" class="maps-btn" target="_blank">
                Buka di Google Maps
            </a>
        </div>
    </div>
</div>

<style>
    .main {
        position: relative;
        min-height: 100vh;
        background: #ffffff; /* Background putih polos */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 20px;
    }
    
    .content-section {
        max-width: 900px;
        margin: 0 auto;
        padding: 40px 20px;
        text-align: center;
        opacity: 0;
        transform: translateY(50px);
    }
    
    .content-section.animate {
        opacity: 1;
        transform: translateY(0);
        transition: all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    
    .content-section h1 {
        color: #ff6600; /* Orange untuk judul */
        font-size: 2.5em;
        margin-bottom: 20px;
        font-weight: bold;
    }
    
    .content-text {
        line-height: 1.6;
        font-size: 16px;
        color: #555;
        margin-bottom: 40px;
    }
    
    .cta-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        margin-bottom: 40px;
        flex-wrap: wrap;
        opacity: 0;
        transform: translateY(50px);
    }
    
    .cta-section.animate {
        opacity: 1;
        transform: translateY(0);
        transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.3s;
    }
    
    .cta-text {
        flex: 1;
        min-width: 300px;
        text-align: left;
        opacity: 0;
        transform: translateX(-30px);
    }
    
    .cta-text.animate {
        opacity: 1;
        transform: translateX(0);
        transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.5s;
    }
    
    .cta-text blockquote {
        font-style: italic;
        color: #666;
        font-size: 16px;
        margin-bottom: 20px;
        padding: 20px;
        background: #f9f9f9;
        border-left: 4px solid #ff6600;
        border-radius: 8px;
        line-height: 1.5;
    }
    
    .konsultasi-btn {
        display: inline-block;
        background: #ff6600;
        color: #fff;
        padding: 15px 30px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: bold;
        font-size: 16px;
        transition: background 0.3s ease, transform 0.3s ease;
        box-shadow: 0 4px 12px rgba(255, 102, 0, 0.3);
    }
    
    .konsultasi-btn:hover {
        background: #e55a00;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(255, 102, 0, 0.4);
    }
    
    .mockup-phone {
        flex: 0 0 220px;
        position: relative;
        opacity: 0;
        transform: translateX(30px);
    }
    
    .mockup-phone.animate {
        opacity: 1;
        transform: translateX(0);
        transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.7s;
    }
    
    .phone-outer-frame {
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        background: linear-gradient(135deg, #333 0%, #555 100%);
        border-radius: 50px;
        z-index: -1;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }
    
    .phone-notch {
        position: absolute;
        top: 15px;
        left: 50%;
        transform: translateX(-50%);
        width: 120px;
        height: 30px;
        background: #000;
        border-radius: 20px;
        z-index: 2;
    }
    
    .phone-frame {
        position: relative;
        width: 200px;
        height: 400px;
        background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
        border-radius: 40px;
        padding: 25px 15px;
        box-shadow: 
            0 10px 30px rgba(0, 0, 0, 0.4),
            inset 0 1px 0 rgba(255, 255, 255, 0.1);
        margin: 0 auto;
    }
    
    .phone-screen {
        width: 100%;
        height: 100%;
        background: #000;
        border-radius: 25px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        position: relative;
        box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.5);
    }
    
    .status-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 15px 5px;
        background: rgba(0, 0, 0, 0.3);
        color: #fff;
        font-size: 12px;
        font-weight: bold;
    }
    
    .app-mockup {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        gap: 20px;
    }
    
    .logo-app {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #ff6600, #e55a00);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: bold;
        font-size: 28px;
        box-shadow: 0 4px 12px rgba(255, 102, 0, 0.3);
    }
    
    .form-mockup {
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 100%;
        max-width: 180px;
    }
    
    .mock-input {
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 10px;
        font-size: 14px;
        background: #fff;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.05);
    }
    
    .mock-btn {
        padding: 12px;
        background: linear-gradient(135deg, #ff6600, #e55a00);
        color: #fff;
        border: none;
        border-radius: 10px;
        font-weight: bold;
        cursor: pointer;
        transition: transform 0.2s ease;
        box-shadow: 0 4px 8px rgba(255, 102, 0, 0.3);
    }
    
    .mock-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 12px rgba(255, 102, 0, 0.4);
    }
    
    .lang-toggle {
        text-align: center;
        font-size: 12px;
        color: #999;
        margin-top: auto;
        padding-top: 10px;
        border-top: 1px solid #333;
    }
    
    .phone-side-buttons {
        position: absolute;
        right: -5px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    
    .volume-btn, .power-btn {
        width: 3px;
        height: 40px;
        background: #333;
        border-radius: 2px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
    
    .power-btn {
        height: 60px;
        background: #555;
    }
    
    .contact-icons {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 40px;
        opacity: 0;
        transform: translateY(50px);
    }
    
    .contact-icons.animate {
        opacity: 1;
        transform: translateY(0);
        transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) 1s;
    }
    
    .icon-link {
        display: inline-block;
        transition: transform 0.3s ease;
    }
    
    .icon-link:hover {
        transform: scale(1.1);
    }
    
    .icon-link img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    
    .image-placeholder {
        background: #f9f9f9;
        padding: 40px;
        border-radius: 12px;
        color: #999;
        font-style: italic;
        margin-bottom: 40px;
        opacity: 0;
        transform: translateY(50px);
    }
    
    .image-placeholder.animate {
        opacity: 1;
        transform: translateY(0);
        transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) 1.2s;
    }

    /* Maps Section */
    .maps-section {
        text-align: center;
        margin-top: 40px;
        opacity: 0;
        transform: translateY(50px);
    }
    
    .maps-section.animate {
        opacity: 1;
        transform: translateY(0);
        transition: all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) 1.4s;
    }
    
    .maps-section h2 {
        color: #333;
        font-size: 1.8em;
        margin-bottom: 10px;
    }
    
    .coords-text {
        color: #666;
        font-size: 14px;
        margin-bottom: 20px;
        font-style: italic;
        background: #f9f9f9;
        padding: 10px;
        border-radius: 8px;
        display: inline-block;
    }
    
    .maps-section iframe {
        max-width: 100%;
        margin-bottom: 20px;
    }
    
    .maps-btn {
        display: inline-block;
        background: #1976d2;
        color: #fff;
        padding: 12px 24px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: bold;
        transition: background 0.3s ease, transform 0.3s ease;
        box-shadow: 0 4px 12px rgba(25, 118, 210, 0.3);
    }
    
    .maps-btn:hover {
        background: #1565c0;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(25, 118, 210, 0.4);
    }

    /* Responsif untuk mobile */
    @media (max-width: 768px) {
        .cta-section {
            flex-direction: column;
            text-align: center;
        }
        
        .cta-text {
            text-align: center;
        }
        
        .mockup-phone {
            flex: none;
        }
        
        .phone-frame {
            width: 160px;
            height: 320px;
            padding: 20px 12px;
        }
        
        .phone-screen {
            border-radius: 20px;
        }
        
        .phone-notch {
            width: 100px;
            height: 25px;
            border-radius: 15px;
        }
        
        .form-mockup {
            max-width: 140px;
        }
        
        .contact-icons {
            gap: 15px;
        }
    }
</style>

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

        // Observe cta-section and its children
        const ctaSection = document.querySelector('.cta-section');
        if (ctaSection) observer.observe(ctaSection);

        const ctaText = document.querySelector('.cta-text');
        if (ctaText) observer.observe(ctaText);

        const mockupPhone = document.querySelector('.mockup-phone');
        if (mockupPhone) observer.observe(mockupPhone);

        // Observe contact-icons
        const contactIcons = document.querySelector('.contact-icons');
        if (contactIcons) observer.observe(contactIcons);

        // Observe image-placeholder
        const imagePlaceholder = document.querySelector('.image-placeholder');
        if (imagePlaceholder) observer.observe(imagePlaceholder);

        // Observe maps-section
        const mapsSection = document.querySelector('.maps-section');
        if (mapsSection) observer.observe(mapsSection);
    });
</script>