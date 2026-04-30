<?php
/**
 * Theme footer.
 *
 * @package Swayam_Tejwani
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer class="bg-zinc-900 dark:bg-black w-full py-16 px-12 mt-auto footerclass">
	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-[1440px] mx-auto">
		<div class="lg:col-span-1">
			<span class="brand-logo__text mb-6"><span class="brand-logo__name text-white">Swayam</span><span class="brand-logo__surname">Tejwani</span></span>
			<p class="text-zinc-400 text-body-sm max-w-xs">High-performance WordPress development with precision and transparency. 12+ years of architectural excellence.</p>
		</div>
		<div>
			<h4 class="text-white text-label-md uppercase mb-6 opacity-40">Hire me on</h4>
			<ul class="space-y-4">
				<li><a class="text-zinc-400 hover:text-white transition-transform duration-200 hover:translate-x-1 block text-label-md" href="https://www.fiverr.com/swayam89" rel="noopener noreferrer" target="_blank">Fiverr</a></li>
				<li><a class="text-zinc-400 hover:text-white transition-transform duration-200 hover:translate-x-1 block text-label-md" href="https://www.upwork.com/freelancers/~01300e8a06ccc6733e" rel="noopener noreferrer" target="_blank">Upwork</a></li>
			</ul>
		</div>
		<div>
			<h4 class="text-white text-label-md uppercase mb-6 opacity-40">Contact</h4>
			<div class="flex flex-col gap-4">
				<a class="inline-flex items-center gap-3 text-zinc-400 hover:text-white transition-transform duration-200 hover:translate-x-1 text-label-md" href="tel:+919893174406"><span class="material-symbols-outlined !text-lg">call</span><span>+91-98931-74406</span></a>
				<a class="inline-flex items-center gap-3 text-zinc-400 hover:text-white transition-transform duration-200 hover:translate-x-1 text-label-md" href="mailto:hello@swayamtejwani.com"><span class="material-symbols-outlined !text-lg">mail</span><span>hello@swayamtejwani.com</span></a>
			</div>
		</div>
	</div>
	<div class="max-w-[1440px] mx-auto mt-10 pt-6 border-t border-white/5 flex flex-col md:flex-row justify-between gap-3">
		<p class="text-zinc-500 text-sm">&copy; 2026 Swayam Tejwani. All rights reserved.</p>
		<p class="text-zinc-500 text-sm flex items-center gap-2">Designed &amp; Developed by <span class="text-blue-500 font-bold">Swayam Tejwani</span></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
