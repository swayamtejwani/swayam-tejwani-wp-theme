<?php
/**
 * Template Name: Contact
 *
 * @package Swayam_Tejwani
 */

$st_current_page = 'contact';

get_header();
?>
<main class="flex-grow pt-32 pb-24 px-6 md:px-12 max-w-[1440px] mx-auto w-full">
<!-- Hero Section -->
<section class="mb-24">
<div class="max-w-4xl">
<span class="font-label text-sm uppercase tracking-[0.2em] text-primary mb-6 block font-bold">Inquiries &amp; Partnerships</span>
<h1 class="text-5xl md:text-7xl font-black tracking-tighter text-on-surface mb-8 leading-[1.1]">
                    Let&apos;s Build Something Impactful.
                </h1>
<p class="text-xl md:text-2xl text-on-surface-variant font-light leading-relaxed max-w-2xl">
                    Whether you're looking for a bespoke WordPress architecture or a high-performance web application, I'm here to translate your vision into digital reality.
                </p>
</div>
</section>
<!-- Asymmetric Contact Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
<!-- Left Side: Information -->
<div class="contact-sticky-panel lg:col-span-5 space-y-8">
<div class="space-y-8">
<div class="contact-info-card group flex items-start space-x-6 p-6 rounded-xl hover:bg-surface-container-low transition-colors duration-300">
<div class="w-12 h-12 rounded-lg bg-primary-fixed flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined" data-icon="mail">mail</span>
</div>
<div>
<p class="text-sm font-label uppercase tracking-widest text-outline mb-1">Email Me</p>
<a class="text-xl font-semibold hover:text-primary transition-colors" href="mailto:hello@swayamtejwani.com">hello@swayamtejwani.com</a>
</div>
</div>
<div class="contact-info-card group flex items-start space-x-6 p-6 rounded-xl hover:bg-surface-container-low transition-colors duration-300">
<div class="w-12 h-12 rounded-lg bg-primary-fixed flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined" data-icon="call">call</span>
</div>
<div>
<p class="text-sm font-label uppercase tracking-widest text-outline mb-1">Call Directly</p>
<a class="text-xl font-semibold hover:text-primary transition-colors" href="tel:+919893174406">+91-98931-74406</a>
</div>
</div>
<div class="contact-info-card group flex items-start space-x-6 p-6 rounded-xl hover:bg-surface-container-low transition-colors duration-300">
<div class="w-12 h-12 rounded-lg bg-primary-fixed flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined" data-icon="location_on">location_on</span>
</div>
<div>
<p class="text-sm font-label uppercase tracking-widest text-outline mb-1">Base of Operations</p>
<p class="text-xl font-semibold">Remote / India</p>
</div>
</div>
</div>
</div>
<!-- Right Side: The Inquiry Form -->
<div class="lg:col-span-7">
<div class="contact-form-card bg-surface-container-lowest p-8 md:p-12 rounded-2xl border border-outline-variant/10 shadow-[0px_48px_96px_rgba(26,28,30,0.04)]">
<h2 class="text-2xl font-bold text-on-surface mb-2">Project Inquiry</h2>
<p class="text-on-surface-variant mb-10">Tell me about your project and I&apos;ll get back to you within 24 hours.</p>
<form class="space-y-8" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
<input type="hidden" name="action" value="st_theme_submit_form"/>
<input type="hidden" name="st_theme_nonce" value="<?php echo esc_attr( wp_create_nonce( 'st_theme_form_submit' ) ); ?>"/>
<input type="hidden" name="form_name" value="Contact Page"/>
<input type="hidden" name="source_url" value="<?php echo esc_attr( st_theme_current_url() ); ?>"/>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="relative">
<label class="block text-xs font-label font-bold uppercase tracking-widest text-outline mb-2">Name</label>
<input class="w-full bg-transparent border-0 border-b border-outline/30 focus:ring-0 focus:border-primary text-on-surface py-3 px-0 transition-all placeholder:text-zinc-300" name="name" placeholder="John Doe" type="text" required/>
</div>
<div class="relative">
<label class="block text-xs font-label font-bold uppercase tracking-widest text-outline mb-2">Email Address</label>
<input class="w-full bg-transparent border-0 border-b border-outline/30 focus:ring-0 focus:border-primary text-on-surface py-3 px-0 transition-all placeholder:text-zinc-300" name="email" placeholder="john@company.com" type="email" required/>
</div>
</div>
<div class="relative">
<label class="block text-xs font-label font-bold uppercase tracking-widest text-outline mb-2">Phone (Optional)</label>
<input class="w-full bg-transparent border-0 border-b border-outline/30 focus:ring-0 focus:border-primary text-on-surface py-3 px-0 transition-all placeholder:text-zinc-300" name="phone" placeholder="+1 (555) 000-0000" type="tel"/>
</div>
<div class="relative">
<label class="block text-xs font-label font-bold uppercase tracking-widest text-outline mb-2">Your Message</label>
<textarea class="w-full bg-transparent border-0 border-b border-outline/30 focus:ring-0 focus:border-primary text-on-surface py-3 px-0 transition-all placeholder:text-zinc-300 resize-none" name="message" placeholder="Tell me about your goals, timeline, and tech stack..." rows="4" required></textarea>
</div>
<div class="pt-6">
<button class="w-full primary-gradient text-on-primary py-5 rounded-lg font-bold text-lg shadow-xl shadow-primary/20 hover:scale-[1.02] hover:shadow-2xl transition-all duration-300 flex items-center justify-center space-x-3" type="submit">
<span>Send Inquiry</span>
<span class="material-symbols-outlined" data-icon="send">send</span>
</button>
</div>
</form>
</div>
</div>
</div>
</main>
<!-- Footer -->
<?php
get_footer();
