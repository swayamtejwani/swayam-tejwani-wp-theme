<?php
/**
 * Template Name: Portfolio
 *
 * @package Swayam_Tejwani
 */

$st_current_page = 'portfolio';

get_header();
?>
<main class="pt-32 pb-24">
<header class="max-w-7xl mx-auto px-8 mb-24">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-end">
<div class="lg:col-span-8">
<h1 class="text-6xl md:text-7xl font-bold tracking-tighter leading-[1.1] text-on-surface">
                        What I&apos;ve Built
                    </h1>
</div>
<div class="lg:col-span-4 pb-2">
<p class="text-lg leading-relaxed text-on-surface-variant opacity-80 border-l-2 border-primary-container pl-6">
                        A collection of WordPress websites I&apos;ve designed and developed, focused on performance, usability, and clean, modern design.
                    </p>
</div>
</div>
</header>
<section class="max-w-7xl mx-auto px-8">
<div class="grid grid-cols-1 md:grid-cols-2 gap-12" id="portfolio-grid">
<div class="project-card group">
<div class="bg-surface-container-highest rounded-xl overflow-hidden aspect-[16/10] mb-8 transition-all duration-500 scale-100 group-hover:scale-[1.01] shadow-none">
<img alt="Quantra website homepage screenshot" class="w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() . '/images/quantra-homepage.png' ); ?>"/>
</div>
<div class="flex flex-wrap gap-2 mb-4">
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">WordPress</span>
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">WooCommerce</span>
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">Custom Filters</span>
</div>
<h3 class="text-3xl font-bold tracking-tight mb-4 group-hover:text-primary transition-colors">Quantra</h3>
<p class="text-on-surface-variant mb-6 max-w-md">Custom-developed WordPress and WooCommerce website for a quartz products company, showcasing slabs, sinks, and basins with a clean, modern interface. Advanced product archive filters streamline discovery while keeping content management flexible, scalable, and performance-focused.</p>
</div>
<div class="project-card group mt-12 md:mt-24">
<div class="bg-surface-container-highest rounded-xl overflow-hidden aspect-[16/10] mb-8 transition-all duration-500 scale-100 group-hover:scale-[1.01] shadow-none">
<img alt="Gresham's Chop House website homepage screenshot" class="w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() . '/images/greshams-chophouse-homepage.png' ); ?>"/>
</div>
<div class="flex flex-wrap gap-2 mb-4">
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">WordPress</span>
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">OceanWP</span>
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">Elementor Pro</span>
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">Revolution Slider</span>
</div>
<h3 class="text-3xl font-bold tracking-tight mb-4 group-hover:text-primary transition-colors">Gresham's Chop House</h3>
<p class="text-on-surface-variant mb-6 max-w-md">Custom-designed restaurant website built with OceanWP and Elementor Pro, featuring a visually engaging homepage, menu presentation, lakefront dining highlights, and key business information in a clean responsive layout. Optimized for premium visuals, performance, and easy content updates.</p>
</div>
<div class="project-card group">
<div class="bg-surface-container-highest rounded-xl overflow-hidden aspect-[16/10] mb-8 transition-all duration-500 scale-100 group-hover:scale-[1.01] shadow-none">
<img alt="Lilac Services website homepage screenshot" class="w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() . '/images/lilac-services-homepage.png' ); ?>"/>
</div>
<div class="flex flex-wrap gap-2 mb-4">
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">WordPress</span>
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">OceanWP</span>
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">Elementor Pro</span>
</div>
<h3 class="text-3xl font-bold tracking-tight mb-4 group-hover:text-primary transition-colors">Lilac Services</h3>
<p class="text-on-surface-variant mb-6 max-w-md">WordPress website developed with the OceanWP theme and Elementor Pro for a responsive, easy-to-manage NDIS service provider presence. The site presents services, referrals, resources, team information, and contact pathways in a clean layout designed for trust, accessibility, and straightforward content updates.</p>
</div>
<div class="project-card group mt-12 md:mt-24">
<div class="bg-surface-container-highest rounded-xl overflow-hidden aspect-[16/10] mb-8 transition-all duration-500 scale-100 group-hover:scale-[1.01] shadow-none">
<img alt="Ideal Steel Buildings website homepage screenshot" class="w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() . '/images/ideal-steel-buildings-homepage.png' ); ?>"/>
</div>
<div class="flex flex-wrap gap-2 mb-4">
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">Custom WordPress</span>
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">WooCommerce</span>
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">ACF Pro</span>
</div>
<h3 class="text-3xl font-bold tracking-tight mb-4 group-hover:text-primary transition-colors">Ideal Steel Buildings</h3>
<p class="text-on-surface-variant mb-6 max-w-md">SEO-focused custom WordPress website built from provided design mockups for a California steel building company. The build combines WooCommerce and ACF Pro to support flexible content management, structured product-style building data, scalable service pages, and search-friendly architecture for stronger organic visibility.</p>
</div>
<div class="project-card group">
<div class="bg-surface-container-highest rounded-xl overflow-hidden aspect-[16/10] mb-8 transition-all duration-500 scale-100 group-hover:scale-[1.01] shadow-none">
<img alt="IAAFL website homepage screenshot" class="w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() . '/images/iaafl-homepage.png' ); ?>"/>
</div>
<div class="flex flex-wrap gap-2 mb-4">
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">WordPress</span>
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">OceanWP</span>
<span class="bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant rounded-sm">Elementor Pro</span>
</div>
<h3 class="text-3xl font-bold tracking-tight mb-4 group-hover:text-primary transition-colors">IAAFL</h3>
<p class="text-on-surface-variant mb-6 max-w-md">Personal blog website built with WordPress, the OceanWP theme, and Elementor Pro. The site supports a clean blog listing experience, readable article detail pages, visitor commenting, search functionality, and simple content publishing workflows for ongoing updates.</p>
</div>
</div>
</section>
<section class="bg-inverse-surface text-on-tertiary-container mt-32 py-24 px-8 overflow-hidden relative">
<div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
<div>
<h2 class="text-5xl font-bold tracking-tighter mb-8 text-white">Let's build the future of the web together.</h2>
<p class="text-lg opacity-70 mb-12 text-white">Currently accepting new WordPress projects. Whether it&apos;s a custom build, WooCommerce setup, or ongoing site improvement, let&apos;s talk.</p>
<div class="flex flex-wrap gap-4">
<button class="quote-popup-trigger bg-primary-container text-white px-8 py-4 rounded-lg font-bold text-base transition-transform hover:scale-105 inline-flex items-center justify-center gap-2" type="button"><span class="material-symbols-outlined" data-icon="request_quote">request_quote</span><span>Request a Consultation</span></button>
<a class="border border-white/20 text-white px-8 py-4 rounded-lg font-bold text-base hover:bg-white/10 transition-colors inline-flex items-center justify-center gap-2" href="tel:+919893174406"><span class="material-symbols-outlined" data-icon="call">call</span><span>Call Now</span></a>
</div>
</div>
<div class="relative">
<div class="absolute -top-24 -right-24 w-96 h-96 bg-primary opacity-20 blur-[100px] rounded-full"></div>
<div class="bg-white/5 backdrop-blur-xl p-10 rounded-2xl border border-white/10 shadow-2xl">
<div class="font-mono text-sm text-primary mb-6">// Tech Stack</div>
<div class="flex flex-wrap gap-3">
<span class="bg-white/10 px-4 py-2 rounded text-xs font-bold uppercase tracking-widest text-white">PHP</span>
<span class="bg-white/10 px-4 py-2 rounded text-xs font-bold uppercase tracking-widest text-white">MySQL</span>
<span class="bg-white/10 px-4 py-2 rounded text-xs font-bold uppercase tracking-widest text-white">JavaScript</span>
<span class="bg-white/10 px-4 py-2 rounded text-xs font-bold uppercase tracking-widest text-white">Ajax</span>
<span class="bg-white/10 px-4 py-2 rounded text-xs font-bold uppercase tracking-widest text-white">WordPress</span>
<span class="bg-white/10 px-4 py-2 rounded text-xs font-bold uppercase tracking-widest text-white">WooCommerce</span>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<?php
get_footer();
