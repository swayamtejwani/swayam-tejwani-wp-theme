<?php
/**
 * Theme header.
 *
 * @package Swayam_Tejwani
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $st_page_title, $st_current_page;

$st_page_title   = $st_page_title ? $st_page_title : 'Swayam Tejwani';
$st_current_page = $st_current_page ? $st_current_page : '';

$pages = array(
	'home'      => home_url( '/home/' ),
	'about'     => home_url( '/about/' ),
	'services'  => home_url( '/services/' ),
	'portfolio' => home_url( '/portfolio/' ),
	'contact'   => home_url( '/contact/' ),
);
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<title><?php echo esc_html( $st_page_title ); ?></title>
	<?php wp_head(); ?>
</head>
<body class="bg-background text-on-background antialiased overflow-x-hidden">
<?php wp_body_open(); ?>
<nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-zinc-950/80 backdrop-blur-xl shadow-[0px_24px_48px_rgba(26,28,30,0.06)]">
	<div class="header-topbar">
		<div class="flex flex-wrap justify-center md:justify-end items-center gap-x-6 gap-y-2 px-6 md:px-12 py-2 max-w-[1440px] mx-auto">
			<a class="header-contact-link" href="tel:+919893174406"><span class="material-symbols-outlined !text-base" data-icon="call">call</span>+91-98931-74406</a>
			<a class="header-contact-link" href="mailto:hello@swayamtejwani.com"><span class="material-symbols-outlined !text-base" data-icon="mail">mail</span>hello@swayamtejwani.com</a>
		</div>
	</div>
	<input class="nav-toggle" id="nav-toggle-theme" type="checkbox"/>
	<div class="flex justify-between items-center px-6 md:px-12 py-4 max-w-[1440px] mx-auto">
		<a class="brand-logo group" href="<?php echo esc_url( $pages['home'] ); ?>" aria-label="Swayam Tejwani home">
			<span class="brand-logo__text">
				<span class="brand-logo__name">Swayam</span>
				<span class="brand-logo__surname">Tejwani</span>
			</span>
		</a>
		<div class="header-desktop-nav">
			<a class="top-nav-link <?php echo 'home' === $st_current_page ? 'is-active' : ''; ?>" href="<?php echo esc_url( $pages['home'] ); ?>">Home</a>
			<a class="top-nav-link <?php echo 'about' === $st_current_page ? 'is-active' : ''; ?>" href="<?php echo esc_url( $pages['about'] ); ?>">About</a>
			<div class="nav-dropdown">
				<a class="top-nav-link <?php echo 'services' === $st_current_page ? 'is-active' : ''; ?>" href="<?php echo esc_url( $pages['services'] ); ?>">Services <span class="nav-dropdown__trigger-icon material-symbols-outlined" data-icon="expand_more">expand_more</span></a>
				<div class="nav-dropdown__menu">
					<a href="<?php echo esc_url( home_url( '/custom-wordpress-development/' ) ); ?>">WordPress Development</a>
					<a href="<?php echo esc_url( home_url( '/theme-customization/' ) ); ?>">Theme Customization</a>
					<a href="<?php echo esc_url( home_url( '/woocommerce-development/' ) ); ?>">WooCommerce Development</a>
					<a href="<?php echo esc_url( home_url( '/maintenance-support/' ) ); ?>">Maintenance &amp; Support</a>
				</div>
			</div>
			<a class="top-nav-link <?php echo 'portfolio' === $st_current_page ? 'is-active' : ''; ?>" href="<?php echo esc_url( $pages['portfolio'] ); ?>">Portfolio</a>
			<a class="top-nav-link <?php echo 'contact' === $st_current_page ? 'is-active' : ''; ?>" href="<?php echo esc_url( $pages['contact'] ); ?>">Contact</a>
		</div>
		<div class="mobile-nav-actions">
			<a aria-label="Call Swayam Tejwani" class="mobile-icon-button" href="tel:+919893174406"><span class="material-symbols-outlined" data-icon="call">call</span></a>
			<a aria-label="Email Swayam Tejwani" class="mobile-icon-button" href="mailto:hello@swayamtejwani.com"><span class="material-symbols-outlined" data-icon="mail">mail</span></a>
			<label class="mobile-menu-button" for="nav-toggle-theme" aria-label="Open navigation menu"><span class="material-symbols-outlined" data-icon="menu">menu</span></label>
		</div>
	</div>
	<div class="mobile-menu">
		<div class="mobile-menu__head">
			<span class="mobile-menu__title">Menu</span>
			<label class="mobile-menu__close" for="nav-toggle-theme" aria-label="Close navigation menu"><span class="material-symbols-outlined" data-icon="close">close</span></label>
		</div>
		<a class="<?php echo 'home' === $st_current_page ? 'is-active' : ''; ?>" href="<?php echo esc_url( $pages['home'] ); ?>">Home</a>
		<a class="<?php echo 'about' === $st_current_page ? 'is-active' : ''; ?>" href="<?php echo esc_url( $pages['about'] ); ?>">About</a>
		<div class="mobile-submenu">
			<a class="mobile-submenu__primary" href="<?php echo esc_url( $pages['services'] ); ?>">Services</a>
			<input class="mobile-submenu__toggle" id="mobile-services-theme" type="checkbox"/>
			<label aria-label="Toggle Services submenu" class="mobile-submenu__button" for="mobile-services-theme"><span class="material-symbols-outlined" data-icon="expand_more">expand_more</span></label>
			<div class="mobile-submenu__links">
				<a href="<?php echo esc_url( home_url( '/custom-wordpress-development/' ) ); ?>">WordPress Development</a>
				<a href="<?php echo esc_url( home_url( '/theme-customization/' ) ); ?>">Theme Customization</a>
				<a href="<?php echo esc_url( home_url( '/woocommerce-development/' ) ); ?>">WooCommerce Development</a>
				<a href="<?php echo esc_url( home_url( '/maintenance-support/' ) ); ?>">Maintenance &amp; Support</a>
			</div>
		</div>
		<a class="<?php echo 'portfolio' === $st_current_page ? 'is-active' : ''; ?>" href="<?php echo esc_url( $pages['portfolio'] ); ?>">Portfolio</a>
		<a class="<?php echo 'contact' === $st_current_page ? 'is-active' : ''; ?>" href="<?php echo esc_url( $pages['contact'] ); ?>">Contact</a>
	</div>
</nav>
