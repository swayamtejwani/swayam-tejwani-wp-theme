<?php
/**
 * Template Name: Theme Customization
 *
 * @package Swayam_Tejwani
 */

$st_page_title  = 'Theme Customization | Swayam Tejwani';
$st_current_page = 'services';

get_header();
?>
<main class="pt-36 pb-24">
<section class="px-6 md:px-12 max-w-[1440px] mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-6">
<span class="text-label-md text-primary uppercase mb-5 block">Theme Customization</span>
<h1 class="text-display-lg mb-8">Turn a good-looking theme into a brand-matched, polished experience.</h1>
<p class="text-body-lg text-on-surface-variant mb-10">If you already have a WordPress theme in place, I can reshape it around your content, your users, and your conversion goals without losing stability.</p>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<div class="rounded-2xl bg-surface-container p-5"><div class="font-black text-primary text-2xl mb-2">Brand Fit</div><p class="text-on-surface-variant">Typography, color, spacing, and layouts tuned to your identity.</p></div>
<div class="rounded-2xl bg-surface-container p-5"><div class="font-black text-primary text-2xl mb-2">UX Cleanup</div><p class="text-on-surface-variant">Sharper hierarchy, cleaner pages, and improved mobile flow.</p></div>
</div>
</div>
<div class="lg:col-span-6"><img alt="Theme customization" class="w-full h-full object-cover rounded-[2rem] shadow-[0_24px_60px_rgba(26,28,30,0.12)] aspect-[5/4]" src="<?php echo esc_url( get_template_directory_uri() . '/images/responsive-design.jpg' ); ?>"/></div>
</div>
</section>
<section class="py-20 px-6 md:px-12 max-w-[1440px] mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
<div class="service-story-card p-8">
<span class="material-symbols-outlined text-primary !text-5xl mb-6">brush</span>
<h2 class="text-3xl font-black mb-4">What I improve</h2>
<ul class="space-y-4 text-on-surface-variant text-body-lg">
<li>Homepage and landing page styling for a stronger first impression.</li>
<li>Header, navigation, and footer cleanup for clearer browsing.</li>
<li>Section spacing, imagery, and visual rhythm for a more premium feel.</li>
<li>Responsive refinements so the design behaves properly on every screen.</li>
</ul>
</div>
<div class="service-story-card p-8 bg-inverse-surface text-white border-0">
<span class="material-symbols-outlined text-blue-300 !text-5xl mb-6">auto_fix_high</span>
<h2 class="text-3xl font-black mb-4">Why teams choose this service</h2>
<p class="text-zinc-300 text-body-lg mb-6">It is the fastest path to elevating an existing site when the foundation is usable but the design feels generic, inconsistent, or underperforming.</p>
<div class="grid grid-cols-2 gap-4">
<div class="rounded-2xl bg-white/5 p-5"><div class="text-3xl font-black mb-2">Faster</div><p class="text-zinc-300">Than a full rebuild when timelines are tight.</p></div>
<div class="rounded-2xl bg-white/5 p-5"><div class="text-3xl font-black mb-2">Safer</div><p class="text-zinc-300">Because the existing setup stays familiar to your team.</p></div>
</div>
</div>
</div>
</section>
<section class="bg-surface-container-low py-20">
<div class="px-6 md:px-12 max-w-[1440px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
<div class="lg:col-span-5"><img alt="Refined WordPress interface" class="rounded-[1.75rem] w-full h-full object-cover aspect-[4/5]" src="<?php echo esc_url( get_template_directory_uri() . '/images/project-global-media.jpg' ); ?>"/></div>
<div class="lg:col-span-7">
<span class="text-label-md text-primary uppercase mb-4 block">Typical Outcomes</span>
<h2 class="text-4xl font-black mb-8">A site that feels more custom, more cohesive, and easier to trust.</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
<div class="rounded-2xl bg-white p-6 shadow-sm"><h3 class="text-xl font-bold mb-3">Stronger visual consistency</h3><p class="text-on-surface-variant">Every page looks like part of one intentional brand system.</p></div>
<div class="rounded-2xl bg-white p-6 shadow-sm"><h3 class="text-xl font-bold mb-3">Better mobile behavior</h3><p class="text-on-surface-variant">Navigation, spacing, buttons, and content layouts become easier to use on smaller screens.</p></div>
<div class="rounded-2xl bg-white p-6 shadow-sm"><h3 class="text-xl font-bold mb-3">Improved conversion paths</h3><p class="text-on-surface-variant">Calls to action are clearer and the page flow supports lead generation better.</p></div>
<div class="rounded-2xl bg-white p-6 shadow-sm"><h3 class="text-xl font-bold mb-3">Less visual clutter</h3><p class="text-on-surface-variant">The interface feels cleaner, calmer, and more professional.</p></div>
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
