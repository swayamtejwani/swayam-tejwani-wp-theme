<?php
/**
 * Template Name: Home
 *
 * @package Swayam_Tejwani
 */

$st_page_title  = 'Home | Swayam Tejwani';
$st_current_page = 'home';

get_header();
?>
<!-- Hero Section -->
<section class="pt-44 pb-20 px-12 max-w-[1440px] mx-auto min-h-screen flex flex-col justify-center">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-8">
<span class="text-label-md text-primary uppercase mb-6 block">Swayam Tejwani &mdash; Senior WordPress Architect</span>
<h1 class="text-display-lg text-on-surface mb-8">
                    High-Performance <br/>
<span class="text-primary">WordPress Solutions</span> <br/>
                    Built to Scale.
                </h1>
<p class="text-body-lg text-on-surface-variant max-w-xl mb-12">
                    12+ years of engineering custom WordPress ecosystems that prioritize speed, security, and editorial flexibility. I bridge the gap between complex code and intuitive user experiences.
                </p>
<div class="flex flex-wrap gap-6">
<a class="bg-gradient-to-br from-primary to-primary-container text-on-primary px-8 py-4 rounded-lg font-bold hover:scale-102 transition-all flex items-center gap-2" href="#contact">
                        Start Your Project
                        <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
</a>
<a class="border border-primary/40 text-primary px-8 py-4 rounded-lg font-bold hover:bg-primary-fixed/30 transition-all" href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>">
                        View Portfolio
                    </a>
</div>
</div>
<div class="lg:col-span-4 relative">
<div class="aspect-[4/5] bg-surface-container rounded-2xl overflow-hidden relative group">
<img alt="WordPress development code on laptop and mobile screens" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700" data-alt="Stock photo of WordPress related web development code shown across a laptop and mobile device" src="https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&amp;fit=crop&amp;w=900&amp;q=80"/>
<div class="absolute bottom-6 left-6 right-6 p-6 glass-card bg-white/20 rounded-xl border border-white/30">
<div class="flex justify-between items-end">
<div>
<p class="text-white text-label-md uppercase opacity-80">Experience</p>
<p class="text-white font-black text-2xl">12+ Years</p>
</div>
<div class="text-right">
<p class="text-white text-label-md uppercase opacity-80">Projects</p>
<p class="text-white font-black text-2xl">100+</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Proof of Experience / Stats Section (Tonal shift boundary) -->
<section class="home-stats bg-surface-container-low px-6 md:px-12">
<div class="max-w-[1440px] mx-auto">
<div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
<div>
<span class="text-label-md text-primary uppercase mb-3 block">Proven WordPress Delivery</span>
<h2 class="text-4xl md:text-5xl font-black text-on-surface leading-tight">Built, optimized, and supported at scale.</h2>
</div>
<p class="text-body-lg text-on-surface-variant max-w-xl">Real-world WordPress experience across custom builds, WooCommerce stores, performance tuning, and ongoing support.</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5">
<div class="stats-card">
<span class="stats-card__icon material-symbols-outlined" data-icon="task_alt">task_alt</span>
<h3 class="stats-card__value"><span class="stat-counter" data-count="90" data-suffix="+">0</span></h3>
<p class="stats-card__label">Projects Completed</p>
</div>
<div class="stats-card">
<span class="stats-card__icon material-symbols-outlined" data-icon="workspace_premium">workspace_premium</span>
<h3 class="stats-card__value"><span class="stat-counter" data-count="12" data-suffix="+">0</span></h3>
<p class="stats-card__label">Years of Experience</p>
</div>
<div class="stats-card">
<span class="stats-card__icon material-symbols-outlined" data-icon="groups">groups</span>
<h3 class="stats-card__value"><span class="stat-counter" data-count="50" data-suffix="+">0</span></h3>
<p class="stats-card__label">Clients Worked With</p>
</div>
<div class="stats-card">
<span class="stats-card__icon material-symbols-outlined" data-icon="speed">speed</span>
<h3 class="stats-card__value"><span class="stat-counter" data-count="80" data-suffix="+">0</span></h3>
<p class="stats-card__label">Websites Optimized</p>
</div>
<div class="stats-card">
<span class="stats-card__icon material-symbols-outlined" data-icon="query_stats">query_stats</span>
<h3 class="stats-card__value"><span class="stat-counter" data-count="90" data-suffix="+">0</span></h3>
<p class="stats-card__label">Avg. PageSpeed Score</p>
</div>
<div class="stats-card">
<span class="stats-card__icon material-symbols-outlined" data-icon="support_agent">support_agent</span>
<h3 class="stats-card__value"><span class="stat-counter" data-count="24" data-prefix="&lt;" data-suffix="h">0</span></h3>
<p class="stats-card__label">Support Response Time</p>
</div>
</div>
</div>
</section>
<!-- About Me Section (Asymmetrical Layout) -->
<section class="py-24 px-12 max-w-[1440px] mx-auto" id="about">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
<div class="about-sticky-panel lg:col-span-5">
<span class="text-label-md text-primary uppercase mb-4 block">The Architect</span>
<h2 class="text-4xl font-black mb-8 leading-tight">Engineering Digital <br/> Foundations since 2012.</h2>
<div class="space-y-4">
<div class="flex items-center gap-4 text-on-surface-variant">
<span class="material-symbols-outlined text-primary" data-icon="verified">verified</span>
<p class="text-body-lg">Certified WordPress Expert</p>
</div>
<div class="flex items-center gap-4 text-on-surface-variant">
<span class="material-symbols-outlined text-primary" data-icon="code">code</span>
<p class="text-body-lg">Full-Stack Capability (PHP, React, SQL)</p>
</div>
<div class="flex items-center gap-4 text-on-surface-variant">
<span class="material-symbols-outlined text-primary" data-icon="speed">speed</span>
<p class="text-body-lg">Core Web Vitals Specialist</p>
</div>
</div>
</div>
<div class="lg:col-span-7 space-y-8">
<p class="text-2xl font-light text-on-surface-variant leading-relaxed">
                    I don't just build websites; I engineer scalable digital products. My approach combines clean backend architecture with practical WordPress workflows that make websites easier to manage and grow.
                </p>
<p class="text-body-lg text-on-surface-variant">
                    Throughout my 12-year journey, I've worked with everything from fast-growing startups to enterprise-level publishing houses. I specialize in turning bloated, slow-moving WordPress installations into lightning-fast, secure, and SEO-optimized powerhouses.
                </p>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-8">
<div class="p-8 bg-surface-container-highest rounded-xl">
<h4 class="text-label-md text-primary uppercase mb-4">The Methodology</h4>
<p class="text-on-surface-variant">Clean code architecture, modular design systems, and a strict 'no-bloat' plugin policy.</p>
</div>
<div class="p-8 bg-surface-container-highest rounded-xl">
<h4 class="text-label-md text-primary uppercase mb-4">The Result</h4>
<p class="text-on-surface-variant">Performance-focused websites built for strong Core Web Vitals, smoother user journeys, and measurable business growth.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Core Services -->
<section class="bg-inverse-surface py-24 px-6 md:px-12" id="services">
<div class="max-w-[1440px] mx-auto">
<div class="mb-12 max-w-3xl">
<span class="text-label-md text-blue-400 uppercase mb-4 block">Core Services</span>
<h2 class="text-4xl md:text-5xl font-black text-white mb-5">My WordPress Services</h2>
<p class="text-lg text-zinc-300 leading-relaxed">Professional WordPress solutions to build, grow, and maintain your online presence.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
<div class="service-card group p-8 rounded-xl">
<span class="service-card__icon material-symbols-outlined text-blue-400 !text-5xl mb-8 block" data-icon="code_blocks">code_blocks</span>
<h3 class="service-card__title text-xl font-bold text-white mb-4">Custom WordPress Development</h3>
<p class="service-card__copy text-zinc-400 text-body-lg mb-8">Get a fully custom WordPress website designed for your business goals, fast, responsive, and built to perform.</p>
<a class="service-card__link" href="<?php echo esc_url( home_url( '/custom-wordpress-development/' ) ); ?>">Learn More <span class="service-card__link-arrow"><span class="material-symbols-outlined !text-lg" data-icon="arrow_forward">arrow_forward</span></span></a>
</div>
<div class="service-card group p-8 rounded-xl">
<span class="service-card__icon material-symbols-outlined text-emerald-300 !text-5xl mb-8 block" data-icon="brush">brush</span>
<h3 class="service-card__title text-xl font-bold text-white mb-4">Theme Customization</h3>
<p class="service-card__copy text-zinc-400 text-body-lg mb-8">Already have a theme? I'll customize it to match your brand and improve design, functionality, and user experience.</p>
<a class="service-card__link" href="<?php echo esc_url( home_url( '/theme-customization/' ) ); ?>">Learn More <span class="service-card__link-arrow"><span class="material-symbols-outlined !text-lg" data-icon="arrow_forward">arrow_forward</span></span></a>
</div>
<div class="service-card group p-8 rounded-xl">
<span class="service-card__icon material-symbols-outlined text-amber-300 !text-5xl mb-8 block" data-icon="shopping_cart">shopping_cart</span>
<h3 class="service-card__title text-xl font-bold text-white mb-4">WooCommerce Development</h3>
<p class="service-card__copy text-zinc-400 text-body-lg mb-8">Launch a powerful online store with secure payments, optimized product pages, and a seamless shopping experience using WooCommerce.</p>
<a class="service-card__link" href="<?php echo esc_url( home_url( '/woocommerce-development/' ) ); ?>">Learn More <span class="service-card__link-arrow"><span class="material-symbols-outlined !text-lg" data-icon="arrow_forward">arrow_forward</span></span></a>
</div>
<div class="service-card group p-8 rounded-xl">
<span class="service-card__icon material-symbols-outlined text-red-300 !text-5xl mb-8 block" data-icon="shield">shield</span>
<h3 class="service-card__title text-xl font-bold text-white mb-4">Maintenance &amp; Support</h3>
<p class="service-card__copy text-zinc-400 text-body-lg mb-8">Keep your website secure, updated, and running smoothly with ongoing WordPress maintenance and support.</p>
<a class="service-card__link" href="<?php echo esc_url( home_url( '/maintenance-support/' ) ); ?>">Learn More <span class="service-card__link-arrow"><span class="material-symbols-outlined !text-lg" data-icon="arrow_forward">arrow_forward</span></span></a>
</div>
</div>
</div>
</section>
<!-- Featured Projects (Editorial Layout) -->
<section class="py-24 px-12 max-w-[1440px] mx-auto" id="portfolio">
<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
<div class="max-w-2xl">
<span class="text-label-md text-primary uppercase mb-4 block">Selected Work</span>
<h2 class="text-5xl font-black text-on-surface">Architectural Excellence in Every Pixel.</h2>
</div>
<a class="group flex items-center gap-2 text-label-md text-on-surface font-bold" href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>">
                View All Projects
                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform" data-icon="arrow_right_alt">arrow_right_alt</span>
</a>
</div>
<div class="space-y-32">
<!-- Project 1 -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-7 bg-surface-container-high rounded-2xl overflow-hidden aspect-video">
<img alt="Quantra website homepage screenshot" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700" data-alt="Screenshot of the Quantra quartz products website homepage" src="<?php echo esc_url( get_template_directory_uri() . '/images/quantra-homepage.png' ); ?>"/>
</div>
<div class="lg:col-span-5 px-4">
<div class="flex gap-2 mb-6">
<span class="bg-surface-container-high text-on-surface-variant text-[10px] uppercase tracking-widest px-3 py-1 rounded-sm">WordPress</span>
<span class="bg-surface-container-high text-on-surface-variant text-[10px] uppercase tracking-widest px-3 py-1 rounded-sm">WooCommerce</span>
<span class="bg-surface-container-high text-on-surface-variant text-[10px] uppercase tracking-widest px-3 py-1 rounded-sm">Custom Filters</span>
</div>
<h3 class="text-3xl font-black mb-6">Quantra</h3>
<p class="text-body-lg text-on-surface-variant mb-8 leading-relaxed">
                        Custom-developed WordPress and WooCommerce website for a quartz products company, showcasing slabs, sinks, and basins with a clean, modern interface. Advanced product archive filters streamline discovery while keeping content management flexible, scalable, and performance-focused.
                    </p>
</div>
</div>
<!-- Project 2 -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-5 lg:order-1 order-2 px-4">
<div class="flex gap-2 mb-6">
<span class="bg-surface-container-high text-on-surface-variant text-[10px] uppercase tracking-widest px-3 py-1 rounded-sm">WordPress</span>
<span class="bg-surface-container-high text-on-surface-variant text-[10px] uppercase tracking-widest px-3 py-1 rounded-sm">OceanWP</span>
<span class="bg-surface-container-high text-on-surface-variant text-[10px] uppercase tracking-widest px-3 py-1 rounded-sm">Elementor Pro</span>
</div>
<h3 class="text-3xl font-black mb-6">Gresham's Chop House</h3>
<p class="text-body-lg text-on-surface-variant mb-8 leading-relaxed">
                        Custom-designed restaurant website built with OceanWP and Elementor Pro, featuring a visually engaging homepage, menu presentation, lakefront dining highlights, and key business information in a clean responsive layout. Optimized for premium visuals, performance, and easy content updates.
                    </p>
</div>
<div class="lg:col-span-7 lg:order-2 order-1 bg-surface-container-high rounded-2xl overflow-hidden aspect-video">
<img alt="Gresham's Chop House website homepage screenshot" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700" data-alt="Screenshot of the Gresham's Chop House restaurant website homepage" src="<?php echo esc_url( get_template_directory_uri() . '/images/greshams-chophouse-homepage.png' ); ?>"/>
</div>
</div>
</div>
</section>
<!-- Testimonials -->
<section class="py-16 bg-surface">
<div class="max-w-[1120px] mx-auto px-6 md:px-12">
<div class="text-center mb-8">
<span class="text-label-md text-primary uppercase mb-4 block">Client Testimonials</span>
<h2 class="text-4xl font-black text-on-surface">Trusted by Business Owners and Teams.</h2>
</div>
<div class="testimonial-slider">
<input checked id="testimonial-1" name="testimonial-slider" type="radio"/>
<input id="testimonial-2" name="testimonial-slider" type="radio"/>
<input id="testimonial-3" name="testimonial-slider" type="radio"/>
<input id="testimonial-4" name="testimonial-slider" type="radio"/>
<input id="testimonial-5" name="testimonial-slider" type="radio"/>
<div class="testimonial-track">
<article class="testimonial-slide">
<div class="testimonial-card">
<img alt="Arlene Dyrvik" class="testimonial-photo" src="<?php echo esc_url( get_template_directory_uri() . '/images/arlene-dyrvik.jpg' ); ?>"/>
<div>
<p class="testimonial-quote">Few people are as dependable and reliable as Swayam. He always came through when I needed project help fast. He also, of course, is an excellent coder and managed to create whatever it was that my clients dreamed up. All this and never a complaint or a sour word. Pleasure to work with.</p>
<h3 class="testimonial-name">Arlene Dyrvik</h3>
<p class="testimonial-meta">Owner, Bismark Lake Consulting</p>
</div>
</div>
</article>
<article class="testimonial-slide">
<div class="testimonial-card">
<img alt="Amanda Calderon" class="testimonial-photo" src="<?php echo esc_url( get_template_directory_uri() . '/images/amanda-calderon.jpg' ); ?>"/>
<div>
<p class="testimonial-quote">I've worked with Swayam multiple times, and he consistently deliver outstanding results. Every project we've collaborated on has been handled with professionalism, attention to detail, and a strong commitment to quality. I highly recommend him to anyone looking for dependable, top-quality WordPress development work.</p>
<h3 class="testimonial-name">Amanda Calderon</h3>
<p class="testimonial-meta">Owner, Oogly Eyes web design</p>
</div>
</div>
</article>
<article class="testimonial-slide">
<div class="testimonial-card">
<img alt="Mary-Ellen McAllister" class="testimonial-photo" src="<?php echo esc_url( get_template_directory_uri() . '/images/mary-ellen-mcallister.jpg' ); ?>"/>
<div>
<p class="testimonial-quote">Swayam was an integral part of my web design business, he could quickly and accurately perform the necessary tasks to get my websites up and running and performing beautifully. If there was a situation that needed special attention, he always had the answers. He is a very efficient coder. He was a great asset for me.</p>
<h3 class="testimonial-name">Mary-Ellen McAllister</h3>
<p class="testimonial-meta">Tech Operations Manager, Cambium Learning Group</p>
</div>
</div>
</article>
<article class="testimonial-slide">
<div class="testimonial-card">
<img alt="Sury Maturi" class="testimonial-photo" src="<?php echo esc_url( get_template_directory_uri() . '/images/sury-maturi.jpg' ); ?>"/>
<div>
<p class="testimonial-quote">Swayam is a truly professional and knowledgeable. Listened to my needs and made it happen. Swayam was on top of the work and exceeded my expectations. Highly recommend him.</p>
<h3 class="testimonial-name">Sury Maturi</h3>
<p class="testimonial-meta">Owner, IAAFL</p>
</div>
</div>
</article>
<article class="testimonial-slide">
<div class="testimonial-card">
<div class="testimonial-photo testimonial-placeholder" aria-label="Abira Siddiqui placeholder">AS</div>
<div>
<p class="testimonial-quote">Very happy with the quality of work and ability to collaborate from Swayam.</p>
<h3 class="testimonial-name">Abira Siddiqui</h3>
<p class="testimonial-meta">Social Worker, Lilac Services</p>
</div>
</div>
</article>
</div>
<div class="testimonial-dots" aria-label="Choose testimonial">
<label for="testimonial-1" aria-label="Show Arlene Dyrvik testimonial"></label>
<label for="testimonial-2" aria-label="Show Amanda Calderon testimonial"></label>
<label for="testimonial-3" aria-label="Show Mary-Ellen McAllister testimonial"></label>
<label for="testimonial-4" aria-label="Show Sury Maturi testimonial"></label>
<label for="testimonial-5" aria-label="Show Abira Siddiqui testimonial"></label>
</div>
</div>
</div>
</section>
<!-- Final CTA -->
<section class="final-cta bg-surface" id="contact">
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
<!-- Footer -->
<?php
get_footer();
