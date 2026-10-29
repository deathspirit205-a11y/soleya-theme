<?php
/**
 * Site header (Astro: components/Siteheader.astro).
 *
 * Active states follow the request path, like Astro.url.pathname.
 * On the home page the icons are <i data-lucide> placeholders replaced by Lucide;
 * other pages do not load Lucide, so the same icons are printed as inline SVG.
 */

$soleya_path      = soleya_current_path();
$soleya_is_home   = '/' === $soleya_path;
$soleya_is_blog   = str_starts_with( $soleya_path, '/blogs' );
$soleya_is_about  = '/a-propos-soleya-reiki/' === $soleya_path;
$soleya_home_href = function ( $hash ) use ( $soleya_is_home ) {
	return $soleya_is_home ? $hash : '/' . $hash;
};
$soleya_current   = function ( $is_current ) {
	return $is_current ? ' aria-current="page"' : '';
};
$soleya_icon      = function ( $name, $class, $id = '' ) use ( $soleya_is_home ) {
	$id_attr = $id ? ' id="' . $id . '"' : '';
	if ( $soleya_is_home ) {
		return '<i data-lucide="' . $name . '" class="' . $class . '"' . $id_attr . '></i>';
	}
	$paths = array(
		'calendar' => '<path d="M8 2v3"></path><path d="M16 2v3"></path><rect x="3" y="3" width="18" height="18" rx="2"></rect><path d="M3 9h18"></path>',
		'menu'     => '<path d="M4 5h16"></path><path d="M4 12h16"></path><path d="M4 19h16"></path>',
		'x'        => '<path d="M18 6 6 18"></path><path d="m6 6 12 12"></path>',
	);
	return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="' . $name . '" aria-hidden="true" class="lucide lucide-' . $name . ' ' . $class . '"' . $id_attr . '>' . $paths[ $name ] . '</svg>';
};
$soleya_mobile_link = 'mobile-link block px-3 py-3 rounded-lg text-base text-soleya-navy hover:bg-soleya-beige';
$soleya_book_desktop = 'hidden sm:inline-flex items-center gap-2 rounded-full border border-soleya-navy/70 text-soleya-navy px-6 py-3 text-sm font-semibold hover:bg-soleya-navy hover:text-white transition-colors';
$soleya_book_mobile  = 'w-full gold-btn text-soleya-navy font-semibold px-5 py-3 rounded-full flex items-center justify-center gap-2 text-sm';
$soleya_book_inner   = $soleya_icon( 'calendar', 'w-4 h-4' ) . '<span>Prendre Rendez-vous</span>';
$soleya_book         = function ( $class ) use ( $soleya_is_home, $soleya_book_inner ) {
	return $soleya_is_home
		? '<button type="button" onclick="openBookingModal()" class="' . $class . '">' . $soleya_book_inner . '</button>'
		: '<a href="/#rendez-vous" class="' . $class . '">' . $soleya_book_inner . '</a>';
};
?>
<header class="sticky top-0 z-40 bg-soleya-cream/95 shadow-[0_1px_0_rgba(197,160,89,0.2)]" id="main-header"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"><div class="flex items-center justify-between h-24"><a href="<?php echo $soleya_home_href( '#accueil' ); ?>" class="flex items-center gap-3 group"><img src="<?php echo esc_url( soleya_asset( 'images/logo-soleya-reiki-256.png' ) ); ?>" alt="Soleya Reiki Logo" width="256" height="256" class="w-14 h-14 rounded-full border-2 border-soleya-darkGold object-cover shadow-md group-hover:scale-105 transition-transform duration-300"><div class="flex flex-col leading-none"><span class="font-serif text-3xl font-semibold text-soleya-navy">Soleya</span><span class="text-[11px] tracking-[0.2em] uppercase text-soleya-darkGold mt-1">Reiki &amp; Soins</span></div></a><?php
?><nav class="hidden lg:flex items-center gap-9 text-[15px] font-medium text-soleya-navy"><?php
?><a href="<?php echo $soleya_home_href( '#accueil' ); ?>" class="nav-link<?php echo $soleya_is_home ? ' active' : ''; ?>">Accueil</a><?php
?><a href="/a-propos-soleya-reiki/" class="nav-link<?php echo $soleya_is_about ? ' active' : ''; ?>"<?php echo $soleya_current( $soleya_is_about ); ?>>À Propos</a><?php
?><a href="<?php echo $soleya_home_href( '#services' ); ?>" class="nav-link">Services &amp; Tarifs</a><?php
?><a href="<?php echo $soleya_home_href( '#bienfaits' ); ?>" class="nav-link">Bienfaits</a><?php
?><a href="/blogs/" class="nav-link<?php echo $soleya_is_blog ? ' active' : ''; ?>"<?php echo $soleya_current( $soleya_is_blog ); ?>>Blogs</a><?php
?><a href="<?php echo $soleya_home_href( '#contact' ); ?>" class="nav-link">Contact</a><?php
?></nav><div class="flex items-center gap-3"><?php echo $soleya_book( $soleya_book_desktop ); ?><button id="mobile-menu-btn" type="button" class="lg:hidden p-2 rounded-md text-soleya-navy" aria-label="Menu principal" aria-expanded="false"><?php echo $soleya_icon( 'menu', 'w-7 h-7', 'menu-icon-open' ) . $soleya_icon( 'x', 'w-7 h-7 hidden', 'menu-icon-close' ); ?></button></div></div></div><?php
?><div class="lg:hidden hidden bg-soleya-cream border-t border-soleya-darkGold/20 px-4 pt-2 pb-6 space-y-1" id="mobile-menu"><?php
?><a href="<?php echo $soleya_home_href( '#accueil' ); ?>" class="<?php echo $soleya_mobile_link . ( $soleya_is_home ? ' font-semibold bg-soleya-beige' : '' ); ?>"<?php echo $soleya_current( $soleya_is_home ); ?>>Accueil</a><?php
?><a href="/a-propos-soleya-reiki/" class="<?php echo $soleya_mobile_link . ( $soleya_is_about ? ' font-semibold bg-soleya-beige' : '' ); ?>"<?php echo $soleya_current( $soleya_is_about ); ?>>À Propos</a><?php
?><a href="<?php echo $soleya_home_href( '#services' ); ?>" class="<?php echo $soleya_mobile_link; ?>">Services &amp; Tarifs</a><?php
?><a href="<?php echo $soleya_home_href( '#bienfaits' ); ?>" class="<?php echo $soleya_mobile_link; ?>">Bienfaits</a><?php
?><a href="/blogs/" class="<?php echo $soleya_mobile_link . ( $soleya_is_blog ? ' font-semibold bg-soleya-beige' : '' ); ?>"<?php echo $soleya_current( $soleya_is_blog ); ?>>Blogs</a><?php
?><a href="<?php echo $soleya_home_href( '#contact' ); ?>" class="<?php echo $soleya_mobile_link; ?>">Contact</a><?php
?><div class="pt-3"><?php echo $soleya_book( $soleya_book_mobile ); ?></div></div></header><?php
?><script type="module">if(window.location.pathname!==`/`){let e=document.getElementById(`mobile-menu-btn`),t=document.getElementById(`mobile-menu`),n=document.getElementById(`menu-icon-open`),r=document.getElementById(`menu-icon-close`);e?.addEventListener(`click`,()=>{let i=t?.classList.toggle(`hidden`)===!1;n?.classList.toggle(`hidden`,i),r?.classList.toggle(`hidden`,!i),e.setAttribute(`aria-expanded`,String(i))}),t?.querySelectorAll(`.mobile-link`).forEach(i=>{i.addEventListener(`click`,()=>{t.classList.add(`hidden`),n?.classList.remove(`hidden`),r?.classList.add(`hidden`),e?.setAttribute(`aria-expanded`,`false`)})})}</script><?php
