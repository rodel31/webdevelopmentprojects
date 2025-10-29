// Alert on page load
function welcomeMessage() {
  alert("Feel free to shop");
}

// Slideshow functionality
let slides = document.querySelectorAll('.slide');
let current = 0;

function showNextSlide() {
  slides[current].classList.remove('active');
  current = (current + 1) % slides.length;
  slides[current].classList.add('active');
}
setInterval(showNextSlide, 3000);

// Hover effect: green -> red product image
const productImages = document.querySelectorAll('.product-img');
productImages.forEach(img => {
  const original = img.src;
  const hoverSrc = img.dataset.hover;

  img.addEventListener('mouseover', () => {
    img.style.opacity = "0";
    setTimeout(() => {
      img.src = hoverSrc;
      img.style.opacity = "1";
    }, 300);
  });

  img.addEventListener('mouseout', () => {
    img.style.opacity = "0";
    setTimeout(() => {
      img.src = original;
      img.style.opacity = "1";
    }, 300);
  });
});
