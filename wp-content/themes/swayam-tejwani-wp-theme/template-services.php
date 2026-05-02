<?php
/**
 * Template Name: Services
 *
 * @package Swayam_Tejwani
 */

$st_current_page = 'services';

get_header();
?>
<main class="pt-32 pb-24">
<!-- Hero Section / Statement -->
<header class="px-12 max-w-[1440px] mx-auto mb-24">
<div class="max-w-3xl">
<span class="text-primary font-bold tracking-[0.1em] text-sm uppercase mb-4 block">Precision Engineering</span>
<h1 class="text-7xl font-black tracking-tighter text-on-surface leading-[0.95] mb-8">
                    Architecture for the <span class="text-primary">Open Web.</span>
</h1>
<p class="text-lg text-on-surface-variant leading-relaxed max-w-xl">
                    High-end WordPress development that balances rigid technical logic with fluid creative expression. I build systems, not just websites.
                </p>
</div>
</header>
<section class="px-12 max-w-[1440px] mx-auto mb-20">
<div class="bg-inverse-surface rounded-[2rem] p-8 md:p-10">
<div class="mb-8 max-w-3xl">
<span class="text-label-md text-blue-400 uppercase mb-4 block">Service Paths</span>
<h2 class="text-4xl font-black text-white mb-4">Choose the service that matches your current stage.</h2>
<p class="text-zinc-300 text-body-lg">These focused service pages break down the type of work, outcomes, and support you can expect.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
<a class="service-card group p-8 rounded-xl" href="<?php echo esc_url( home_url( '/custom-wordpress-development/' ) ); ?>">
<span class="service-card__icon material-symbols-outlined text-blue-400 !text-5xl mb-8 block">code_blocks</span>
<h2 class="service-card__title text-2xl font-bold text-white mb-4">Custom WordPress Development</h2>
<p class="service-card__copy text-zinc-400 text-body-lg mb-8">Fully custom WordPress builds shaped around your business goals, content model, and performance requirements.</p>
<span class="service-card__link">Explore Service <span class="service-card__link-arrow"><span class="material-symbols-outlined !text-lg">arrow_forward</span></span></span>
</a>
<a class="service-card group p-8 rounded-xl" href="<?php echo esc_url( home_url( '/theme-customization/' ) ); ?>">
<span class="service-card__icon material-symbols-outlined text-emerald-400 !text-5xl mb-8 block">brush</span>
<h2 class="service-card__title text-2xl font-bold text-white mb-4">Theme Customization</h2>
<p class="service-card__copy text-zinc-400 text-body-lg mb-8">Refine an existing WordPress theme into a more polished, better-branded, and more usable website.</p>
<span class="service-card__link">Explore Service <span class="service-card__link-arrow"><span class="material-symbols-outlined !text-lg">arrow_forward</span></span></span>
</a>
<a class="service-card group p-8 rounded-xl" href="<?php echo esc_url( home_url( '/woocommerce-development/' ) ); ?>">
<span class="service-card__icon material-symbols-outlined text-amber-400 !text-5xl mb-8 block">shopping_cart</span>
<h2 class="service-card__title text-2xl font-bold text-white mb-4">WooCommerce Development</h2>
<p class="service-card__copy text-zinc-400 text-body-lg mb-8">Storefronts, product flows, and checkout experiences built to support trust and stronger sales.</p>
<span class="service-card__link">Explore Service <span class="service-card__link-arrow"><span class="material-symbols-outlined !text-lg">arrow_forward</span></span></span>
</a>
<a class="service-card group p-8 rounded-xl" href="<?php echo esc_url( home_url( '/maintenance-support/' ) ); ?>">
<span class="service-card__icon material-symbols-outlined text-rose-400 !text-5xl mb-8 block">shield</span>
<h2 class="service-card__title text-2xl font-bold text-white mb-4">Maintenance &amp; Support</h2>
<p class="service-card__copy text-zinc-400 text-body-lg mb-8">Ongoing updates, issue resolution, and preventative support to keep your site dependable.</p>
<span class="service-card__link">Explore Service <span class="service-card__link-arrow"><span class="material-symbols-outlined !text-lg">arrow_forward</span></span></span>
</a>
</div>
</div>
</section>
<!-- Services Grid (Asymmetric Layout) -->
<section class="px-12 max-w-[1440px] mx-auto">
<div class="grid grid-cols-1 md:grid-cols-12 gap-8">
<!-- Large Feature Card (Theme Dev) -->
<div class="md:col-span-8 bg-surface-container-highest p-12 rounded-xl group relative overflow-hidden flex flex-col justify-end min-h-[480px]">
<div class="absolute top-12 right-12 text-primary">
<span class="material-symbols-outlined !text-6xl" data-icon="architecture">architecture</span>
</div>
<div class="relative z-10">
<span class="text-xs font-bold tracking-widest text-primary uppercase mb-2 block">Core Expertise</span>
<h3 class="text-4xl font-bold tracking-tight mb-4 text-on-surface">Theme Development</h3>
<p class="text-on-surface-variant max-w-md leading-relaxed text-lg">
                            Bespoke WordPress themes engineered with lightweight code. No page builders, no bloat&mdash;just pixel-perfect execution of your unique brand identity.
                        </p>
</div>
<div class="absolute inset-0 bg-primary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
</div>
<!-- Secondary Card (Plugin Dev) -->
<div class="md:col-span-4 bg-surface-container-low p-10 rounded-xl hover:bg-surface-container-high transition-colors duration-300 flex flex-col justify-between">
<span class="material-symbols-outlined text-primary !text-4xl" data-icon="extension">extension</span>
<div>
<h3 class="text-2xl font-bold tracking-tight mb-3 text-on-surface">Plugin Development</h3>
<p class="text-on-surface-variant leading-relaxed">
                            Tailor-made functionality that integrates seamlessly with your existing ecosystem.
                        </p>
</div>
</div>
<!-- Row 2 -->
<div class="md:col-span-4 bg-surface-container-lowest p-10 rounded-xl shadow-[0px_2px_12px_rgba(0,0,0,0.03)] flex flex-col justify-between group hover:scale-[1.01] transition-transform duration-300">
<span class="material-symbols-outlined text-primary !text-4xl" data-icon="speed">speed</span>
<div>
<h3 class="text-2xl font-bold tracking-tight mb-3 text-on-surface">Speed Optimization</h3>
<p class="text-on-surface-variant leading-relaxed">
                            Sub-second load times via advanced caching, image compression, and code minification strategies.
                        </p>
</div>
</div>
<div class="md:col-span-4 bg-inverse-surface text-white p-10 rounded-xl flex flex-col justify-between">
<span class="material-symbols-outlined text-primary-fixed !text-4xl" data-icon="terminal">terminal</span>
<div>
<h3 class="text-2xl font-bold tracking-tight mb-3">PSD to WordPress</h3>
<p class="text-zinc-400 leading-relaxed">
                            High-fidelity conversion of Figma, XD, or PSD designs into functional, responsive WordPress blocks.
                        </p>
</div>
</div>
<div class="md:col-span-4 bg-surface-container-low p-10 rounded-xl flex flex-col justify-between border border-transparent hover:border-outline-variant/30 transition-all duration-300">
<span class="material-symbols-outlined text-primary !text-4xl" data-icon="security">security</span>
<div>
<h3 class="text-2xl font-bold tracking-tight mb-3 text-on-surface">Security &amp; Cleaning</h3>
<p class="text-on-surface-variant leading-relaxed">
                            Advanced malware removal and hardening protocols to ensure your digital asset remains impenetrable.
                        </p>
</div>
</div>
<!-- Bottom Row Asymmetric -->
<div class="md:col-span-6 bg-surface-container-highest p-10 rounded-xl flex items-center gap-8">
<div class="bg-surface-container-lowest p-4 rounded-lg">
<span class="material-symbols-outlined text-primary !text-3xl" data-icon="move_up">move_up</span>
</div>
<div>
<h3 class="text-2xl font-bold tracking-tight mb-2 text-on-surface">Website Migration</h3>
<p class="text-on-surface-variant leading-relaxed">
                            Zero-downtime server transfers and database synchronization across any hosting provider.
                        </p>
</div>
</div>
<div class="md:col-span-6 bg-surface-container-lowest border border-outline-variant/10 p-10 rounded-xl flex items-center gap-8">
<div class="bg-primary/5 p-4 rounded-lg">
<span class="material-symbols-outlined text-primary !text-3xl" data-icon="support_agent">support_agent</span>
</div>
<div>
<h3 class="text-2xl font-bold tracking-tight mb-2 text-on-surface">Maintenance &amp; Support</h3>
<p class="text-on-surface-variant leading-relaxed">
                            Ongoing core updates, regular backups, and 24/7 technical monitoring for peace of mind.
                        </p>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="final-cta bg-surface">
<div class="max-w-4xl mx-auto px-6 md:px-12 text-center">
<span class="text-label-md text-primary uppercase mb-5 block">Start a Project</span>
<h2 class="text-display-lg text-on-surface mb-8">Ready to build something remarkable?</h2>
<p class="text-body-lg text-on-surface-variant mb-12 max-w-2xl mx-auto">Let&apos;s create a WordPress experience that looks refined, performs fast, and gives your business room to grow.</p>
<div class="flex flex-col sm:flex-row gap-4 justify-center">
<a class="quote-popup-trigger primary-gradient text-on-primary px-10 py-4 rounded-lg font-bold text-lg hover:scale-105 hover:shadow-2xl transition-all inline-flex items-center justify-center gap-2" href="#quote"><span class="material-symbols-outlined" data-icon="request_quote">request_quote</span><span>Get a Quote</span></a>
<a class="border-2 border-primary/40 text-primary px-10 py-4 rounded-lg font-bold text-lg hover:bg-primary-fixed transition-all inline-flex items-center justify-center gap-2" href="tel:+919893174406"><span class="material-symbols-outlined" data-icon="call">call</span><span>Call Now</span></a>
</div>
</div>
</section>
</main>
<!-- Footer -->
<?php
get_footer();
