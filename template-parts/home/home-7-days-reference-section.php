<?php
$html = <<<'SOLEYA_HTML'
<!-- ============ HOME 7 DAYS REFERENCE SECTION ============ -->
        <section id="home-7days-reiki" class="home-7days-section py-16 sm:py-20 lg:py-24">
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">

                    <!-- Photo in the same framed/card style as the reference -->
                    <div class="lg:col-span-5 flex justify-center lg:justify-start">
                        <div class="home-7days-device">
                            <img
                                src="https://i.ibb.co/m5nRQZQQ/811791963-889362480773898-2454850824453965694-n.jpg"
                                alt="Moment de méditation et de reconnexion Reiki"
                                loading="lazy"
                                onerror="this.src='https://placehold.co/600x750/f3efe6/7a3b70?text=Soleya+Reiki'">
                        </div>
                    </div>

                    <!-- 7 Days content -->
                    <div class="lg:col-span-7">
                        <p class="home-7days-kicker text-sm sm:text-[15px] uppercase font-medium mb-5">
                            VOTRE PAUSE BIEN-ÊTRE
                        </p>

                        <h2 class="home-7days-title font-serif font-medium leading-[1.08] tracking-tight text-[clamp(2.7rem,5vw,4.7rem)] max-w-3xl">
                            Une pause bien-être<br class="hidden sm:block"> à votre rythme
                        </h2>

                        <p class="mt-7 max-w-2xl text-[16px] sm:text-[17px] leading-relaxed text-slate-700">
                            Découvrez une approche attentive et personnalisée pour vous accorder un temps de pause. Chaque séance commence par un échange autour de vos attentes.
                        </p>

                        <div class="mt-8 flex flex-wrap items-center gap-5">
                            <a href="#why-soleya" class="font-semibold text-soleya-forest underline underline-offset-4 decoration-soleya-darkGold hover:text-soleya-sage transition-colors">Lire la suite</a>
                            <button onclick="openBookingModal()" class="inline-flex items-center justify-center gap-2 rounded-full bg-soleya-forest text-white px-7 py-3.5 text-sm font-semibold hover:bg-soleya-sage transition-colors">Prendre rendez-vous</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        
SOLEYA_HTML;
echo str_replace('src="/images/', 'src="' . esc_url( soleya_asset( 'images/' ) ), $html);
