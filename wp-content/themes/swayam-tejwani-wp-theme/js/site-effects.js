(function () {
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var revealSelectors = [
    'main > section',
    'main > div',
    'body > section',
    'footer',
    '.testimonial-slide',
    '.service-card',
    '.service-story-card',
    '.testimonial-card',
    '.contact-info-card',
    '.contact-form-card',
    '.project-card',
    '.stats-card'
  ];
  var liftSelectors = [
    '.service-card',
    '.service-story-card',
    '.contact-info-card',
    '.contact-form-card'
  ];

  function uniqueElements(selectors) {
    var seen = new Set();
    var elements = [];

    selectors.forEach(function (selector) {
      document.querySelectorAll(selector).forEach(function (element) {
        if (!seen.has(element)) {
          seen.add(element);
          elements.push(element);
        }
      });
    });

    return elements;
  }

  function setDelay(element, index) {
    var delay = Math.min(index % 8, 7) * 70;
    element.style.setProperty('--reveal-delay', delay + 'ms');
  }

  function initReveal() {
    var elements = uniqueElements(revealSelectors);

    if (reduceMotion) {
      elements.forEach(function (element) {
        element.classList.add('is-visible');
      });
      return;
    }

    document.body.classList.add('motion-ready');

    elements.forEach(function (element, index) {
      element.classList.add('reveal-on-scroll');
      setDelay(element, index);
    });

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      rootMargin: '0px 0px -12% 0px',
      threshold: 0.14
    });

    elements.forEach(function (element) {
      observer.observe(element);
    });
  }

  function initLift() {
    uniqueElements(liftSelectors).forEach(function (element) {
      element.classList.add('motion-lift');
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    initLift();
    initReveal();
  });
})();
