<?php
$html = <<<'SOLEYA_HTML'
<!-- ============ HOME REIKI FEATURE ============ -->
    <section id="home-reiki-feature" class="relative overflow-hidden py-16 sm:py-20 lg:py-28 bg-[#f8f3ea]">
        <div class="absolute inset-0 pointer-events-none opacity-70" aria-hidden="true">
            <div class="absolute -left-24 top-16 w-72 h-72 rounded-full bg-[#eadfcf]/55 blur-3xl"></div>
            <div class="absolute right-0 bottom-0 w-80 h-80 rounded-full bg-[#dce8df]/45 blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            <!-- Text side -->
            <div class="lg:col-span-6 lg:pr-4">
                <p class="text-sm sm:text-[15px] tracking-[0.22em] uppercase text-soleya-darkGold font-medium mb-5">
                    Reiki &amp; Soins Énergétiques
                </p>

                <h2 class="font-serif font-medium text-soleya-forest leading-[0.98] tracking-tight text-[clamp(2.8rem,5vw,4.8rem)] max-w-2xl">
                    Harmoniser le corps,<br>l’esprit et l’âme
                </h2>

                <div class="mt-7 space-y-5 max-w-xl text-[16px] sm:text-[17px] leading-relaxed text-slate-700 font-light">
                    <p>
                        Le Reiki accompagne en douceur les moments où vous avez besoin de ralentir, de respirer et de retrouver votre équilibre intérieur.
                    </p>
                    <p>
                        Chaque séance est un temps pour vous, dans un cadre bienveillant, afin de favoriser détente, présence et reconnexion à soi.
                    </p>
                </div>

                <div class="mt-8 flex flex-wrap items-center gap-5">
                    <a href="#services" class="inline-flex items-center justify-center gap-3 rounded-full bg-soleya-forest text-white px-8 py-4 text-[14px] sm:text-[15px] font-semibold tracking-[0.08em] uppercase shadow-lg shadow-soleya-forest/20 hover:bg-soleya-sage hover:-translate-y-0.5 transition-all">
                        Découvrir les soins Reiki
                        <i data-lucide="arrow-right" class="w-4 h-4" aria-hidden="true"></i>
                    </a>
                    <a href="#why-soleya" class="font-semibold text-soleya-forest underline underline-offset-4 decoration-soleya-darkGold hover:text-soleya-sage transition-colors">En savoir plus sur l’approche de Tatiana</a>
                </div>
            </div>

            <!-- New photo side -->
            <div class="lg:col-span-6 flex justify-center lg:justify-end">
                <div class="home-reiki-feature-photo relative w-full max-w-[620px] overflow-hidden shadow-2xl shadow-soleya-navy/15 bg-soleya-beige">
                    <img src="/images/Soleya reiki healing la guerche de bratagne.jpeg"
                         alt="Séance de Reiki, relaxation et soin énergétique"
                         loading="lazy"
                         class="block w-full aspect-[4/4.9] object-cover object-center">
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/10 via-transparent to-white/5"></div>
                </div>
            </div>
        </div>
    </section>

    
SOLEYA_HTML;
echo str_replace('src="/images/', 'src="' . esc_url( soleya_asset( 'images/' ) ), $html);
