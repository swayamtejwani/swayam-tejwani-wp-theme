(function () {
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

  function initLift() {
    uniqueElements(liftSelectors).forEach(function (element) {
      element.classList.add('motion-lift');
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    initLift();
  });
})();
