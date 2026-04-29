<?php
/**
 * Template Name: Custom WordPress Development
 *
 * @package Swayam_Tejwani
 */

$st_page_title  = 'Custom WordPress Development | Swayam Tejwani';
$st_current_page = 'services';

get_header();
?>
<main class="pt-36 pb-24">
<section class="px-6 md:px-12 max-w-[1440px] mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-6">
<span class="text-label-md text-primary uppercase mb-5 block">Custom WordPress Development</span>
<h1 class="text-display-lg text-on-surface mb-8">Built-from-scratch WordPress websites with clean architecture and zero fluff.</h1>
<p class="text-body-lg text-on-surface-variant mb-10 max-w-2xl">For brands that have outgrown off-the-shelf themes, I design and develop tailored WordPress experiences that are fast, scalable, and aligned with real business goals.</p>
<div class="flex flex-wrap gap-4">
<span class="px-4 py-2 rounded-full bg-surface-container text-on-surface-variant font-semibold text-sm">Custom theme engineering</span>
<span class="px-4 py-2 rounded-full bg-surface-container text-on-surface-variant font-semibold text-sm">Flexible CMS blocks</span>
<span class="px-4 py-2 rounded-full bg-surface-container text-on-surface-variant font-semibold text-sm">Performance-first build</span>
</div>
</div>
<div class="lg:col-span-6">
<div class="rounded-[2rem] overflow-hidden bg-surface-container shadow-[0_24px_60px_rgba(26,28,30,0.12)]">
<img alt="Custom WordPress development" class="w-full h-full object-cover aspect-[5/4]" src="<?php echo esc_url( get_template_directory_uri() . '/images/studio-office.jpg' ); ?>"/>
</div>
</div>
</div>
</section>
<section class="px-6 md:px-12 max-w-[1440px] mx-auto py-20">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="service-story-card p-8">
<div class="text-4xl font-black text-primary mb-3">01</div>
<h2 class="text-2xl font-black mb-3">Strategy-led architecture</h2>
<p class="text-on-surface-variant text-body-lg">Every build starts with content structure, business goals, and user flow. The result is a backend your team can actually work with.</p>
</div>
<div class="service-story-card p-8">
<div class="text-4xl font-black text-primary mb-3">02</div>
<h2 class="text-2xl font-black mb-3">Lean codebase</h2>
<p class="text-on-surface-variant text-body-lg">I avoid bloated builders and unnecessary plugin dependencies, keeping your site lightweight, maintainable, and future-ready.</p>
</div>
<div class="service-story-card p-8">
<div class="text-4xl font-black text-primary mb-3">03</div>
<h2 class="text-2xl font-black mb-3">Conversion-aware UX</h2>
<p class="text-on-surface-variant text-body-lg">From homepage journeys to lead generation pages, the front-end is designed to look sharp and move users toward action.</p>
</div>
</div>
</section>
<section class="bg-inverse-surface text-white py-20">
<div class="px-6 md:px-12 max-w-[1440px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-5">
<img alt="WordPress blueprint" class="w-full h-full object-cover rounded-[1.75rem] aspect-[4/5]" src="<?php echo esc_url( get_template_directory_uri() . '/images/architecture-blueprint.jpg' ); ?>"/>
</div>
<div class="lg:col-span-7">
<span class="text-label-md text-blue-300 uppercase mb-4 block">What&apos;s Included</span>
<h2 class="text-4xl font-black mb-8">A custom build that supports growth from day one.</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
<div class="rounded-2xl bg-white/5 border border-white/10 p-6">
<h3 class="text-xl font-bold mb-3">Component-based layout system</h3>
<p class="text-zinc-300">Reusable sections and patterns that keep new page creation fast and visually consistent.</p>
</div>
<div class="rounded-2xl bg-white/5 border border-white/10 p-6">
<h3 class="text-xl font-bold mb-3">Content editing control</h3>
<p class="text-zinc-300">Structured fields and flexible admin controls so your internal team can update the site with confidence.</p>
</div>
<div class="rounded-2xl bg-white/5 border border-white/10 p-6">
<h3 class="text-xl font-bold mb-3">Technical SEO readiness</h3>
<p class="text-zinc-300">Semantic structure, fast page delivery, and a clean foundation for search visibility.</p>
</div>
<div class="rounded-2xl bg-white/5 border border-white/10 p-6">
<h3 class="text-xl font-bold mb-3">Launch support</h3>
<p class="text-zinc-300">Testing, deployment coordination, and final polish to make launch day smooth.</p>
</div>
</div>
</div>
</div>
</section>
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
<?php
get_footer();
