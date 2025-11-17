// JS untuk Slider Bergeser Otomatis + Manual
let currentSlide = 0;
const totalSlides = 3; // Sesuaikan jumlah gambar

function showSlide(index) {
    const wrapper = document.querySelector('.slider-wrapper');
    index = (index + totalSlides) % totalSlides; // Loop
    wrapper.style.transform = `translateX(-${index * 33.33}%)`;
    currentSlide = index;
}

function changeSlide(direction) {
    currentSlide += direction;
    showSlide(currentSlide);
}

// Auto-bergeser setiap 3 detik
setInterval(() => {
    changeSlide(1);
}, 3000);

// Mulai dari slide 0
window.onload = function() {
    showSlide(0);
};