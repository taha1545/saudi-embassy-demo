let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length; 
const counterElement = document.getElementById('slide-counter'); 

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.display = i === index ? 'block' : 'none';
    });
    counterElement.textContent = `${index + 1}/${totalSlides}`;
}

function navigateSlide(direction) {
  currentSlide = direction;
  showSlide(currentSlide);
}

document.addEventListener('DOMContentLoaded', (e) => {
    showSlide(currentSlide); 
});