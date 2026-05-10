(function () {
  function $(selector, context) {
    return (context || document).querySelector(selector);
  }

  function $all(selector, context) {
    return Array.from((context || document).querySelectorAll(selector));
  }

  function buildQuoteModal() {
    if ($('#quote-modal')) {
      return;
    }

    document.body.insertAdjacentHTML('beforeend', `
      <div class="quote-modal" id="quote-modal" aria-hidden="true">
        <div class="quote-modal__overlay" data-quote-close></div>
        <div class="quote-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="quote-modal-title">
          <button class="quote-modal__close" type="button" aria-label="Close quote form" data-quote-close>
            <span class="material-symbols-outlined">close</span>
          </button>
          <h2 class="text-2xl font-bold text-on-surface mb-2" id="quote-modal-title">Get a Quote</h2>
          <p class="text-on-surface-variant mb-5">Tell me about your project and I&apos;ll get back to you within 24 hours.</p>
          <form class="quote-form" novalidate>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
              <div>
                <label class="block text-xs font-label font-bold uppercase tracking-widest text-outline mb-2" for="quote-name">Name</label>
                <input class="quote-form__field w-full bg-transparent border-0 border-b border-outline/30 focus:ring-0 focus:border-primary text-on-surface py-2 px-0 transition-all placeholder:text-zinc-300" id="quote-name" name="name" placeholder="John Doe" type="text"/>
                <p class="quote-form__error" data-error-for="name"></p>
              </div>
              <div>
                <label class="block text-xs font-label font-bold uppercase tracking-widest text-outline mb-2" for="quote-email">Email Address</label>
                <input class="quote-form__field w-full bg-transparent border-0 border-b border-outline/30 focus:ring-0 focus:border-primary text-on-surface py-2 px-0 transition-all placeholder:text-zinc-300" id="quote-email" name="email" placeholder="john@company.com" type="email"/>
                <p class="quote-form__error" data-error-for="email"></p>
              </div>
            </div>
            <div>
              <label class="block text-xs font-label font-bold uppercase tracking-widest text-outline mb-2" for="quote-phone">Phone (Optional)</label>
              <input class="quote-form__field w-full bg-transparent border-0 border-b border-outline/30 focus:ring-0 focus:border-primary text-on-surface py-2 px-0 transition-all placeholder:text-zinc-300" id="quote-phone" name="phone" placeholder="+1 (555) 000-0000" type="tel"/>
            </div>
            <div>
              <label class="block text-xs font-label font-bold uppercase tracking-widest text-outline mb-2" for="quote-message">Your Message</label>
              <textarea class="quote-form__field w-full bg-transparent border-0 border-b border-outline/30 focus:ring-0 focus:border-primary text-on-surface py-2 px-0 transition-all placeholder:text-zinc-300 resize-none" id="quote-message" name="message" placeholder="Tell me about your goals, timeline, and tech stack..." rows="3"></textarea>
              <p class="quote-form__error" data-error-for="message"></p>
            </div>
            <p class="quote-form__status" aria-live="polite"></p>
            <button class="w-full primary-gradient text-on-primary py-4 rounded-lg font-bold text-lg shadow-xl shadow-primary/20 hover:scale-[1.02] hover:shadow-2xl transition-all duration-300 flex items-center justify-center gap-3" type="submit">
              <span>Send Inquiry</span>
              <span class="material-symbols-outlined">send</span>
            </button>
          </form>
        </div>
      </div>
    `);
  }

  function openQuoteModal() {
    buildQuoteModal();
    $('#quote-modal').classList.add('is-open');
    $('#quote-modal').setAttribute('aria-hidden', 'false');
    document.body.classList.add('quote-modal-open');
    setTimeout(function () {
      $('#quote-name').focus();
    }, 80);
  }

  function closeQuoteModal() {
    var modal = $('#quote-modal');

    if (!modal) {
      return;
    }

    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('quote-modal-open');
  }

  function setError(name, message) {
    $('[data-error-for="' + name + '"]').textContent = message;
  }

  function clearErrors() {
    $all('.quote-form__error, .quote-form__status').forEach(function (field) {
      field.textContent = '';
    });
    $all('.quote-form__field').forEach(function (field) {
      field.classList.remove('quote-form__field--invalid');
    });
  }

  function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('click', function (event) {
      var trigger = event.target.closest('.quote-popup-trigger');

      if (!trigger) {
        return;
      }

      event.preventDefault();
      openQuoteModal();
    });

    document.addEventListener('click', function (event) {
      if (event.target.closest('[data-quote-close]')) {
        closeQuoteModal();
      }
    });

    document.addEventListener('keydown', function (event) {
      var modal = $('#quote-modal');

      if (event.key === 'Escape' && modal && modal.classList.contains('is-open')) {
        closeQuoteModal();
      }
    });

    document.addEventListener('submit', function (event) {
      var form = event.target.closest('.quote-form');

      if (!form) {
        return;
      }

      event.preventDefault();
      clearErrors();

      var name = $('#quote-name').value.trim();
      var email = $('#quote-email').value.trim();
      var message = $('#quote-message').value.trim();
      var valid = true;

      if (!name) {
        setError('name', 'Please enter your name.');
        $('#quote-name').classList.add('quote-form__field--invalid');
        valid = false;
      }

      if (!email || !isValidEmail(email)) {
        setError('email', 'Please enter a valid email address.');
        $('#quote-email').classList.add('quote-form__field--invalid');
        valid = false;
      }

      if (!message) {
        setError('message', 'Please tell me a little about your project.');
        $('#quote-message').classList.add('quote-form__field--invalid');
        valid = false;
      }

      if (!valid) {
        $('.quote-form__field--invalid').focus();
        return;
      }

      $('.quote-form__status').textContent = 'Thanks. Your inquiry is ready to send.';
      form.reset();
    });
  });
})();
