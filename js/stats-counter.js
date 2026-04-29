(function () {
  var counters = Array.prototype.slice.call(document.querySelectorAll('.stat-counter'));

  if (!counters.length) {
    return;
  }

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var duration = 1400;

  function format(counter, value) {
    var prefix = counter.dataset.prefix || '';
    var suffix = counter.dataset.suffix || '';
    counter.textContent = prefix + Math.round(value) + suffix;
  }

  function animateCounter(counter) {
    var target = Number(counter.dataset.count || 0);
    var start = performance.now();

    function tick(now) {
      var progress = Math.min((now - start) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      format(counter, target * eased);

      if (progress < 1) {
        requestAnimationFrame(tick);
      } else {
        format(counter, target);
      }
    }

    requestAnimationFrame(tick);
  }

  if (reduceMotion) {
    counters.forEach(function (counter) {
      format(counter, Number(counter.dataset.count || 0));
    });
    return;
  }

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) {
        return;
      }

      counters.forEach(animateCounter);
      observer.disconnect();
    });
  }, {
    threshold: 0.35
  });

  observer.observe(counters[0].closest('.home-stats') || counters[0]);
})();
