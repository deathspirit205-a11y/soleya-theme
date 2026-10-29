<?php
$html = <<<'SOLEYA_HTML'
<!-- ============ HOME REIKI FEATURE 2 ============ -->
    <section id="home-reiki-feature-2" class="relative overflow-hidden py-16 sm:py-20 lg:py-28 bg-[#fbf8f2]">
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute left-1/2 top-0 w-72 h-72 -translate-x-1/2 rounded-full bg-[#eadfcf]/35 blur-3xl"></div>
            <div class="absolute -right-24 bottom-0 w-80 h-80 rounded-full bg-[#dce8df]/40 blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
            <!-- Photo side -->
            <div class="lg:col-span-6 flex justify-center lg:justify-start">
                <div class="home-reiki-feature-2-photo relative w-full max-w-[560px] overflow-hidden shadow-2xl shadow-soleya-navy/15 bg-soleya-beige">
                    <img src="https://i.ibb.co/nd8YWW3/809384878-2978258722509868-6516404212762017717-n.jpg"
                         alt="Moment de méditation et de relaxation Reiki"
                         loading="lazy"
                         class="block w-full aspect-[4/5] object-cover object-center">
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/10 via-transparent to-white/10"></div>
                </div>
            </div>

            <!-- Text side -->
            <div class="lg:col-span-6 lg:pl-2">
                <p class="text-sm sm:text-[15px] tracking-[0.22em] uppercase text-soleya-darkGold font-medium mb-5">
                    Un moment pour vous
                </p>

                <h2 class="font-serif font-medium text-soleya-forest leading-[1.02] tracking-tight text-[clamp(2.7rem,5vw,4.6rem)] max-w-2xl">
                    Retrouvez votre<br>calme intérieur
                </h2>

                <div class="mt-7 space-y-5 max-w-xl text-[16px] sm:text-[17px] leading-relaxed text-slate-700 font-light">
                    <p>
                        Accordez-vous une pause pour ralentir, relâcher les tensions et vous reconnecter à vos sensations.
                    </p>
                    <p>
                        Le Reiki vous invite à accueillir ce moment avec douceur, dans une atmosphère apaisante et bienveillante.
                    </p>
                </div>

                <button onclick="openBookingModal()" class="mt-8 inline-flex items-center justify-center gap-3 rounded-full bg-soleya-forest text-white px-8 py-4 text-[14px] sm:text-[15px] font-semibold tracking-[0.08em] uppercase shadow-lg shadow-soleya-forest/20 hover:bg-soleya-sage hover:-translate-y-0.5 transition-all">
                    <span>Prendre un moment pour soi</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-soleya-lightGold"></span>
                </button>
            </div>
        </div>
    </section>

        
SOLEYA_HTML;
echo str_replace('src="/images/', 'src="' . esc_url( soleya_asset( 'images/' ) ), $html);
