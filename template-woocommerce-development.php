<?php
/**
 * Template Name: WooCommerce Development
 *
 * @package Swayam_Tejwani
 */

$st_page_title  = 'WooCommerce Development | Swayam Tejwani';
$st_current_page = 'services';

get_header();
?>
<main class="pt-36 pb-24">
<section class="px-6 md:px-12 max-w-[1440px] mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-6">
<span class="text-label-md text-primary uppercase mb-5 block">WooCommerce Development</span>
<h1 class="text-display-lg mb-8">Online stores designed to sell smoothly and scale cleanly.</h1>
<p class="text-body-lg text-on-surface-variant mb-10">From storefront experience to checkout flow, I build WooCommerce setups that feel fast, trustworthy, and easy for customers to use.</p>
<div class="flex flex-wrap gap-4"><span class="px-4 py-2 rounded-full bg-surface-container text-on-surface-variant font-semibold text-sm">Storefront UX</span><span class="px-4 py-2 rounded-full bg-surface-container text-on-surface-variant font-semibold text-sm">Checkout flow</span><span class="px-4 py-2 rounded-full bg-surface-container text-on-surface-variant font-semibold text-sm">Product architecture</span></div>
</div>
<div class="lg:col-span-6"><img alt="Ecommerce checkout screen with cart and online payment flow" class="w-full h-full object-cover rounded-[2rem] shadow-[0_24px_60px_rgba(26,28,30,0.12)] aspect-[5/4]" src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&amp;fit=crop&amp;w=1200&amp;q=80"/></div>
</div>
</section>
<section class="py-20 px-6 md:px-12 max-w-[1440px] mx-auto">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="service-story-card p-8"><span class="material-symbols-outlined text-primary !text-5xl mb-6">shopping_bag</span><h2 class="text-2xl font-black mb-4">Product pages that convert</h2><p class="text-on-surface-variant text-body-lg">Sharper hierarchy, better image presentation, and cleaner product information for a more premium buying experience.</p></div>
<div class="service-story-card p-8"><span class="material-symbols-outlined text-primary !text-5xl mb-6">payments</span><h2 class="text-2xl font-black mb-4">Checkout experience</h2><p class="text-on-surface-variant text-body-lg">I streamline cart and checkout friction so customers can complete purchases with less hesitation.</p></div>
<div class="service-story-card p-8"><span class="material-symbols-outlined text-primary !text-5xl mb-6">inventory_2</span><h2 class="text-2xl font-black mb-4">Scalable catalog setup</h2><p class="text-on-surface-variant text-body-lg">Categories, product variations, and merchandising structures built for growth as your store expands.</p></div>
</div>
</section>
<section class="bg-inverse-surface text-white py-20">
<div class="px-6 md:px-12 max-w-[1440px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-7">
<span class="text-label-md text-blue-300 uppercase mb-4 block">Store Priorities</span>
<h2 class="text-4xl font-black mb-8">A WooCommerce setup that balances design, trust, and operational clarity.</h2>
<div class="space-y-5">
<div class="rounded-2xl bg-white/5 border border-white/10 p-6"><h3 class="text-xl font-bold mb-2">Merchandising structure</h3><p class="text-zinc-300">Organize collections and product paths so customers can browse faster and discover more.</p></div>
<div class="rounded-2xl bg-white/5 border border-white/10 p-6"><h3 class="text-xl font-bold mb-2">Mobile commerce optimization</h3><p class="text-zinc-300">Touch-friendly product pages and simpler add-to-cart actions for better mobile sales.</p></div>
<div class="rounded-2xl bg-white/5 border border-white/10 p-6"><h3 class="text-xl font-bold mb-2">Confidence signals</h3><p class="text-zinc-300">Reviews, shipping details, trust badges, and content placement that reduce hesitation.</p></div>
</div>
</div>
<div class="lg:col-span-5"><img alt="Ecommerce layout" class="w-full h-full object-cover rounded-[1.75rem] aspect-[4/5]" src="<?php echo esc_url( get_template_directory_uri() . '/images/responsive-design.jpg' ); ?>"/></div>
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
