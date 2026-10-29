<?php
$html = <<<'SOLEYA_HTML'
<!-- ============ BOTTOM CTA ============ -->
    <section id="soleya-bottom-cta" class="bg-soleya-cream py-14 sm:py-18 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="soleya-bottom-cta p-4 sm:p-5 lg:p-6">
                <div class="soleya-bottom-cta-inner px-5 py-12 sm:px-10 sm:py-14 lg:px-16 lg:py-16 text-center">
                    <a href="#accueil" class="inline-flex flex-col items-center group" aria-label="Soleya Reiki - Accueil">
                        <img src="/images/logo-soleya-reiki-256.png"
                             alt="Soleya Reiki Logo"
                             class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border-2 border-soleya-darkGold object-cover shadow-lg group-hover:scale-105 transition-transform duration-300"
                             loading="lazy" width="256" height="256">
                        <span class="mt-4 font-serif text-2xl sm:text-3xl font-semibold text-white">Soleya</span>
                        <span class="mt-1 text-[10px] sm:text-[11px] tracking-[0.25em] uppercase text-soleya-lightGold">Reiki &amp; Soins</span>
                    </a>

                    <p class="mt-8 text-[11px] sm:text-xs tracking-[0.28em] uppercase text-soleya-lightGold font-semibold">
                        Un moment pour vous
                    </p>

                    <h2 class="mt-3 font-serif text-4xl sm:text-5xl lg:text-6xl font-medium leading-tight text-[#f8f3ea]">
                        Retrouvez votre équilibre intérieur
                    </h2>

                    <p class="mx-auto mt-5 max-w-2xl text-sm sm:text-base leading-relaxed text-white/75">
                        Accordez-vous une pause, laissez-vous accompagner avec douceur et découvrez un espace de détente, d’harmonie et de reconnexion à vous-même.
                    </p>

                    <button onclick="openBookingModal()" class="soleya-bottom-cta-btn mt-8 inline-flex items-center justify-center gap-3 px-8 sm:px-10 py-4 text-xs sm:text-sm font-semibold tracking-[0.14em] uppercase rounded-sm">
                        <span>Prendre Rendez-vous</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>


    
SOLEYA_HTML;
echo str_replace('src="/images/', 'src="' . esc_url( soleya_asset( 'images/' ) ), $html);
