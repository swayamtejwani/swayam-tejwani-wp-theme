(function ($) {
  function buildQuoteModal() {
    if ($('#quote-modal').length) {
      return;
    }

    $('body').append(`
      <div class="quote-modal" id="quote-modal" aria-hidden="true">
        <div class="quote-modal__overlay" data-quote-close></div>
        <div class="quote-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="quote-modal-title">
          <button class="quote-modal__close" type="button" aria-label="Close quote form" data-quote-close>
            <span class="material-symbols-outlined">close</span>
          </button>
          <h2 class="text-2xl font-bold text-on-surface mb-2" id="quote-modal-title">Get a Quote</h2>
          <p class="text-on-surface-variant mb-5">Tell me about your project and I&apos;ll get back to you within 24 hours.</p>
          <form class="quote-form" method="post" novalidate>
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
    $('#quote-modal').addClass('is-open').attr('aria-hidden', 'false');
    $('body').addClass('quote-modal-open');
    setTimeout(function () {
      $('#quote-name').trigger('focus');
    }, 80);
  }

  function closeQuoteModal() {
    $('#quote-modal').removeClass('is-open').attr('aria-hidden', 'true');
    $('body').removeClass('quote-modal-open');
  }

  function setError(name, message) {
    $('[data-error-for="' + name + '"]').text(message);
  }

  function clearErrors() {
    $('.quote-form__error, .quote-form__status').text('');
    $('.quote-form__field').removeClass('quote-form__field--invalid');
  }

  function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  function prepareWordPressSubmission($form) {
    if (typeof stThemeForms === 'undefined') {
      return;
    }

    $form.attr('action', stThemeForms.ajaxUrl);
    $form.find('[name="action"], [name="st_theme_nonce"], [name="form_name"], [name="source_url"]').remove();
    $form.append($('<input>', { type: 'hidden', name: 'action', value: stThemeForms.action }));
    $form.append($('<input>', { type: 'hidden', name: 'st_theme_nonce', value: stThemeForms.nonce }));
    $form.append($('<input>', { type: 'hidden', name: 'form_name', value: 'Quote Popup' }));
    $form.append($('<input>', { type: 'hidden', name: 'source_url', value: stThemeForms.sourceUrl }));
  }

  $(function () {
    $(document).on('click', '.quote-popup-trigger', function (event) {
      event.preventDefault();
      openQuoteModal();
    });

    $(document).on('click', '[data-quote-close]', closeQuoteModal);

    $(document).on('keydown', function (event) {
      if (event.key === 'Escape' && $('#quote-modal').hasClass('is-open')) {
        closeQuoteModal();
      }
    });

    $(document).on('submit', '.quote-form', function (event) {
      event.preventDefault();
      clearErrors();

      var name = $.trim($('#quote-name').val());
      var email = $.trim($('#quote-email').val());
      var message = $.trim($('#quote-message').val());
      var valid = true;

      if (!name) {
        setError('name', 'Please enter your name.');
        $('#quote-name').addClass('quote-form__field--invalid');
        valid = false;
      }

      if (!email || !isValidEmail(email)) {
        setError('email', 'Please enter a valid email address.');
        $('#quote-email').addClass('quote-form__field--invalid');
        valid = false;
      }

      if (!message) {
        setError('message', 'Please tell me a little about your project.');
        $('#quote-message').addClass('quote-form__field--invalid');
        valid = false;
      }

      if (!valid) {
        $('.quote-form__field--invalid').first().trigger('focus');
        return;
      }

      $('.quote-form__status').text('Sending your inquiry...');
      prepareWordPressSubmission($(this));
      this.submit();
    });
  });
})(jQuery);
