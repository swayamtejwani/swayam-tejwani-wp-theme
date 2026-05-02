(function () {
  var slider = document.querySelector('.testimonial-slider');

  if (!slider) {
    return;
  }

  var slides = Array.prototype.slice.call(slider.querySelectorAll('input[name="testimonial-slider"]'));
  var intervalMs = 5000;
  var timer;

  if (slides.length < 2) {
    return;
  }

  function currentIndex() {
    var index = slides.findIndex(function (slide) {
      return slide.checked;
    });

    return index >= 0 ? index : 0;
  }

  function goToNextSlide() {
    var nextIndex = (currentIndex() + 1) % slides.length;
    slides[nextIndex].checked = true;
  }

  function restartTimer() {
    window.clearInterval(timer);
    timer = window.setInterval(goToNextSlide, intervalMs);
  }

  slider.addEventListener('change', restartTimer);
  restartTimer();
})();
