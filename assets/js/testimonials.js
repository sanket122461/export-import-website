
document.addEventListener('DOMContentLoaded', function () {
  // verify bootstrap is loaded
  if (typeof bootstrap === 'undefined') {
    console.error('Bootstrap JS not found. Make sure bootstrap.bundle.min.js is included before this script.');
    return;
  }

  var el = document.querySelector('#testimonialCarousel');
  if (!el) {
    console.error('Carousel element #testimonialCarousel not found.');
    return;
  }

  // initialize with options: interval (ms), wrap, pause on hover
  var carousel = new bootstrap.Carousel(el, {
    interval: 500,   
    ride: 'carousel', // start cycling automatically
    pause: 'hover',   // pause on hover
    wrap: true
  });

  // optional: enable keyboard navigation
  el.addEventListener('keydown', function(e) {
    if (e.key === 'ArrowLeft') bootstrap.Carousel.getInstance(el).prev();
    if (e.key === 'ArrowRight') bootstrap.Carousel.getInstance(el).next();
  });
});
