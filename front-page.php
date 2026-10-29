<?php
/** Astro dist/index.html homepage, split at its original section markers. */
get_header( null, array(
    'title'       => 'Soleya Reiki - Tatiana | Reiki à La Guerche-de-Bretagne',
    'description' => 'Découvrez les séances de Reiki Usui proposées par Tatiana à La Guerche-de-Bretagne : séances en cabinet ou à distance, tarifs et prise de rendez-vous.',
    'generator'   => 'Astro v7.3.8',
    'body_class'  => 'bg-soleya-cream text-slate-800 font-sans antialiased selection:bg-soleya-gold selection:text-soleya-navy',
    'head_part'   => 'template-parts/home/head',
));
echo '    ';
get_template_part( 'template-parts/home/hero' );
get_template_part( 'template-parts/home/reiki-pillars-home-directly-below-hero' );
get_template_part( 'template-parts/home/home-reiki-feature' );
get_template_part( 'template-parts/home/home-reiki-feature-2' );
get_template_part( 'template-parts/home/home-7-days-reference-section' );
get_template_part( 'template-parts/home/home-bien-tre-reference-section' );
get_template_part( 'template-parts/home/propos' );
get_template_part( 'template-parts/home/services-tarifs' );
get_template_part( 'template-parts/home/prestations-d-tail-des-soins-onglets' );
get_template_part( 'template-parts/home/tarifs-from-the-printed-price-sheet' );
get_template_part( 'template-parts/home/bienfaits' );
get_template_part( 'template-parts/home/contact' );
get_template_part( 'template-parts/home/galerie' );
get_template_part( 'template-parts/home/formulaire-de-rendez-vous' );
get_template_part( 'template-parts/home/bottom-cta' );
get_template_part( 'template-parts/home/footer' );
get_footer( 'home' );
