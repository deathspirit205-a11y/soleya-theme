<?php
/**
 * Document head + site header (Astro: layouts/Layout.astro + components/Siteheader.astro).
 *
 * Templates pass their head values through get_header( null, $args ):
 *   title       <title> and og:title
 *   description meta description and og:description
 *   body_class  class attribute of <body>
 *   head_part   optional template part printed at the end of <head> (Astro "head" slot)
 */

$soleya_head = wp_parse_args(
	isset( $args ) && is_array( $args ) ? $args : array(),
	array(
		'title'       => 'Soleya Reiki | Tatiana',
		'description' => 'Découvrez les séances de Reiki Usui proposées par Tatiana à La Guerche-de-Bretagne : séances en cabinet ou à distance, tarifs et prise de rendez-vous.',
		'body_class'  => '',
		'head_part'   => '',
	)
);
?><!DOCTYPE html><html lang="fr"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content="<?php echo esc_attr( $soleya_head['description'] ); ?>"><meta property="og:type" content="website"><meta property="og:title" content="<?php echo esc_attr( $soleya_head['title'] ); ?>"><meta property="og:description" content="<?php echo esc_attr( $soleya_head['description'] ); ?>"><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Montserrat:wght@300;400;500;600;700&family=Allura&display=swap" rel="stylesheet"><link rel="icon" type="image/svg+xml" href="<?php echo esc_url( soleya_asset( 'favicon.svg' ) ); ?>"><link rel="icon" type="image/png" sizes="64x64" href="<?php echo esc_url( soleya_asset( 'favicon-64.png' ) ); ?>"><title><?php echo esc_html( $soleya_head['title'] ); ?></title><?php
if ( $soleya_head['head_part'] ) {
	get_template_part( $soleya_head['head_part'] );
}
wp_head();
?></head><body class<?php echo '' !== $soleya_head['body_class'] ? '="' . esc_attr( $soleya_head['body_class'] ) . '"' : ''; ?>><?php
wp_body_open();
get_template_part( 'template-parts/site-header' );
