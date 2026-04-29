<?php
/**
 * Template Name: Maintenance & Support
 *
 * @package Swayam_Tejwani
 */

$st_page_title  = 'Maintenance & Support | Swayam Tejwani';
$st_current_page = 'services';

get_header();
?>
<main class="pt-36 pb-24">
<section class="px-6 md:px-12 max-w-[1440px] mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-6">
<span class="text-label-md text-primary uppercase mb-5 block">Maintenance &amp; Support</span>
<h1 class="text-display-lg mb-8">Keep your WordPress site secure, current, and consistently reliable.</h1>
<p class="text-body-lg text-on-surface-variant mb-10">After launch, your website still needs attention. I provide proactive maintenance and responsive support so your team is not left troubleshooting alone.</p>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4"><div class="rounded-2xl bg-surface-container p-5"><div class="font-black text-primary text-2xl mb-2">Updates</div><p class="text-on-surface-variant">Core, plugin, and theme updates handled carefully.</p></div><div class="rounded-2xl bg-surface-container p-5"><div class="font-black text-primary text-2xl mb-2">Monitoring</div><p class="text-on-surface-variant">Regular checks for issues before they become costly problems.</p></div></div>
</div>
<div class="lg:col-span-6"><img alt="WordPress theme code on a laptop with responsive device testing on a desk" class="w-full h-full object-cover rounded-[2rem] shadow-[0_24px_60px_rgba(26,28,30,0.12)] aspect-[5/4]" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&amp;fit=crop&amp;w=1200&amp;q=80"/></div>
</div>
</section>
<section class="py-20 px-6 md:px-12 max-w-[1440px] mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<div class="lg:col-span-4 service-story-card p-8"><span class="material-symbols-outlined text-primary !text-5xl mb-6">verified_user</span><h2 class="text-2xl font-black mb-4">Security-first maintenance</h2><p class="text-on-surface-variant text-body-lg">Routine update reviews, plugin hygiene, and practical hardening measures to reduce risk.</p></div>
<div class="lg:col-span-4 service-story-card p-8"><span class="material-symbols-outlined text-primary !text-5xl mb-6">database</span><h2 class="text-2xl font-black mb-4">Backup confidence</h2><p class="text-on-surface-variant text-body-lg">Reliable backup routines and recovery awareness so you are protected when something breaks.</p></div>
<div class="lg:col-span-4 service-story-card p-8"><span class="material-symbols-outlined text-primary !text-5xl mb-6">support_agent</span><h2 class="text-2xl font-black mb-4">Responsive support</h2><p class="text-on-surface-variant text-body-lg">A dependable point of contact when your team needs fixes, advice, or small site updates.</p></div>
</div>
</section>
<section class="bg-inverse-surface text-white py-20"><div class="px-6 md:px-12 max-w-[1440px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center"><div class="lg:col-span-5"><img alt="Support workflow" class="w-full h-full object-cover rounded-[1.75rem] aspect-[4/5]" src="<?php echo esc_url( get_template_directory_uri() . '/images/studio-office.jpg' ); ?>"/></div><div class="lg:col-span-7"><span class="text-label-md text-blue-300 uppercase mb-4 block">What Support Can Cover</span><h2 class="text-4xl font-black mb-8">Practical ongoing help for the things that matter most.</h2><div class="grid grid-cols-1 md:grid-cols-2 gap-5"><div class="rounded-2xl bg-white/5 border border-white/10 p-6"><h3 class="text-xl font-bold mb-3">Monthly updates</h3><p class="text-zinc-300">Keep your site current without risking avoidable breakage.</p></div><div class="rounded-2xl bg-white/5 border border-white/10 p-6"><h3 class="text-xl font-bold mb-3">Bug fixes and tweaks</h3><p class="text-zinc-300">Resolve layout issues, content problems, and small functionality changes quickly.</p></div><div class="rounded-2xl bg-white/5 border border-white/10 p-6"><h3 class="text-xl font-bold mb-3">Performance watch</h3><p class="text-zinc-300">Spot slowdowns, large assets, or plugin issues before they hurt user experience.</p></div><div class="rounded-2xl bg-white/5 border border-white/10 p-6"><h3 class="text-xl font-bold mb-3">Peace of mind</h3><p class="text-zinc-300">Your site stays looked after, freeing your team to focus on business priorities.</p></div></div></div></div></section>
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
