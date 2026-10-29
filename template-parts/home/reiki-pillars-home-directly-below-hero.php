<?php
$html = <<<'SOLEYA_HTML'
<!-- ============ REIKI PILLARS (HOME, directly below HERO) ============ -->
        <section id="reiki-pillars" class="reiki-pillars-bg relative overflow-hidden py-16 sm:py-20 lg:py-24">
            <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
                <span class="speck" style="width:2px;height:2px;left:8%;top:24%;opacity:.28"></span>
                <span class="speck" style="width:3px;height:3px;left:18%;top:72%;opacity:.22"></span>
                <span class="speck" style="width:2px;height:2px;left:82%;top:18%;opacity:.25"></span>
                <span class="speck" style="width:3px;height:3px;left:91%;top:68%;opacity:.20"></span>
                <span class="speck" style="width:2px;height:2px;left:54%;top:10%;opacity:.20"></span>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-12">
                    <p class="flex items-center justify-center gap-3 text-sm tracking-[0.18em] uppercase text-soleya-darkGold font-medium">
                        <span class="w-8 h-px bg-soleya-darkGold/50"></span>
                        L'énergie Reiki
                        <span class="w-8 h-px bg-soleya-darkGold/50"></span>
                    </p>
                    <h2 class="mt-3 font-serif font-medium text-soleya-forest leading-[1.02] tracking-tight text-[clamp(2.8rem,5vw,4.5rem)]">
                        Une approche complémentaire de bien-être
                    </h2>
                    <p class="mt-4 text-[16px] sm:text-[17px] leading-relaxed text-slate-600 font-light">
                        Le Reiki Usui est présenté ici comme une pratique complémentaire de bien-être. Chaque séance propose un temps de pause, sans promesse de résultat médical.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                    <article class="reiki-pillar-card text-center px-6 sm:px-8 py-9 sm:py-10">
                        <div class="reiki-pillar-icon mx-auto">
                            <i data-lucide="heart-pulse" class="w-7 h-7" stroke-width="1.4"></i>
                        </div>
                        <h3 class="mt-5 font-serif text-4xl font-medium text-soleya-forest">Corps</h3>
                        <ul class="mt-5 space-y-3 text-[15px] sm:text-[16px] leading-relaxed text-slate-600">
                            <li>S’accorder un temps de repos.</li>
                            <li>Prendre conscience de ses sensations.</li>
                            <li>Explorer une pratique de détente.</li>
                            <li>Choisir un moment de calme.</li>
                        </ul>
                    </article>

                    <article class="reiki-pillar-card text-center px-6 sm:px-8 py-9 sm:py-10">
                        <div class="reiki-pillar-icon mx-auto">
                            <i data-lucide="brain" class="w-7 h-7" stroke-width="1.4"></i>
                        </div>
                        <h3 class="mt-5 font-serif text-4xl font-medium text-soleya-forest">Esprit</h3>
                        <ul class="mt-5 space-y-3 text-[15px] sm:text-[16px] leading-relaxed text-slate-600">
                            <li>Faire une pause dans le quotidien.</li>
                            <li>Prendre un temps pour soi.</li>
                            <li>Se recentrer selon son ressenti.</li>
                            <li>Vivre une expérience personnelle.</li>
                        </ul>
                    </article>

                    <article class="reiki-pillar-card text-center px-6 sm:px-8 py-9 sm:py-10">
                        <div class="reiki-pillar-icon mx-auto">
                            <i data-lucide="sparkles" class="w-7 h-7" stroke-width="1.4"></i>
                        </div>
                        <h3 class="mt-5 font-serif text-4xl font-medium text-soleya-forest">Âme</h3>
                        <ul class="mt-5 space-y-3 text-[15px] sm:text-[16px] leading-relaxed text-slate-600">
                            <li>Cultiver un espace de réflexion.</li>
                            <li>Écouter ses ressentis.</li>
                            <li>Prendre un temps pour soi.</li>
                            <li>Avancer à son rythme.</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <!-- Home also includes the À Propos content -->
        <section id="home-a-propos" class="about-bg relative overflow-hidden py-20 lg:py-28">

        <!-- Golden dust -->
        <div id="speckles-about-detail" class="absolute inset-0 pointer-events-none" aria-hidden="true"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            <!-- Photo + caption -->
            <figure class="lg:col-span-6">
                <div class="about-photo overflow-hidden shadow-2xl shadow-soleya-navy/15 bg-soleya-beige">
                    <img src="https://i.ibb.co/HppsyKYQ/811436887-1731926154774666-259873379546131621-n.jpg"
                         alt="Tatiana, praticienne Reiki Soleya"
                         class="w-full aspect-[4/4.4] object-cover object-top"
                         loading="lazy"
                         onerror="this.src='https://placehold.co/600x800/f3efe6/2d5a27?text=Tatiana+Soleya+Reiki'">
                </div>
                <figcaption class="mt-5 flex flex-col sm:flex-row sm:items-start sm:justify-between gap-2 sm:gap-6">
                    <span class="text-sm text-slate-600 leading-snug max-w-[17rem]">
                        Praticienne certifiée Reiki Usui (2ᵉ degré) à La Guerche-de-Bretagne
                    </span>
                    <span class="script-font text-4xl sm:text-5xl text-soleya-darkGold -rotate-3 sm:mr-2">Bonjour, je suis Tatiana</span>
                </figcaption>
            </figure>

            <!-- Text -->
            <div class="lg:col-span-6 lg:pl-6">
                <h2 class="font-serif font-medium text-soleya-forest leading-[1.02] tracking-tight text-[clamp(2.75rem,5vw,4.25rem)]">
                    Bienvenue<br>chez Soleya
                </h2>

                <div class="mt-8 space-y-6 max-w-xl text-[17px] leading-relaxed text-slate-700 font-light">
                    <p>
                        Praticienne certifiée en Reiki Usui (2ᵉ degré), je vous accueille pour un temps d’échange et de détente, dans le respect de votre rythme et de vos limites.
                    </p>
                    <p>
                        Le Reiki Usui est une pratique complémentaire de bien-être. Les ressentis varient d’une personne à l’autre ; une séance ne promet pas d’effet thérapeutique précis et ne remplace pas un suivi médical.
                     <a href="#why-soleya" class="font-semibold text-soleya-forest underline underline-offset-4 decoration-soleya-darkGold hover:text-soleya-sage transition-colors">Lire la suite..</a>
                    </p>
                </div>

                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-xl">
                    <div class="flex items-start gap-3">
                        <span class="shrink-0 w-11 h-11 rounded-full bg-soleya-forest/10 text-soleya-forest flex items-center justify-center">
                            <i data-lucide="smile" class="w-5 h-5"></i>
                        </span>
                        <div>
                            <h3 class="font-serif text-xl font-semibold text-soleya-navy leading-tight">Bienveillance &amp; Écoute</h3>
                            <p class="text-sm text-slate-600 mt-1 leading-snug">Un temps d’échange où vous pouvez poser vos questions et exprimer vos limites.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="shrink-0 w-11 h-11 rounded-full bg-soleya-darkGold/15 text-soleya-darkGold flex items-center justify-center">
                            <i data-lucide="zap" class="w-5 h-5"></i>
                        </span>
                        <div>
                            <h3 class="font-serif text-xl font-semibold text-soleya-navy leading-tight">Un cadre respectueux</h3>
                            <p class="text-sm text-slate-600 mt-1 leading-snug">La séance se déroule à votre rythme, dans le respect de vos préférences.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-10 flex flex-col sm:flex-row sm:items-center gap-5 sm:gap-8">
                    <button onclick="openBookingModal()" class="inline-flex items-center justify-center gap-3 rounded-full bg-soleya-forest text-white px-8 py-4 text-[12px] font-semibold shadow-lg shadow-soleya-forest/25 hover:bg-soleya-sage hover:-translate-y-0.5 transition-all">
                        <span>Prendre Rendez-vous avec Tatiana</span>
                        <span class="w-1.5 h-1.5 rounded-full bg-soleya-lightGold"></span>
                    </button>

                    <a href="tel:0650042216" class="inline-flex items-center gap-2 font-semibold text-soleya-navy hover:text-soleya-forest transition-colors">
                        <i data-lucide="phone" class="w-4 h-4 text-soleya-darkGold"></i>
                        <span>06 50 04 22 16</span>
                    </a>

        </div>



        <script>
            (function () {
                const box = document.getElementById('speckles-about-detail');
                let seed = 19;
                const rnd = () => (seed = (seed * 16807) % 2147483647) / 2147483647;
                for (let i = 0; i < 45; i++) {
                    const s = document.createElement('span');
                    s.className = 'speck';
                    const size = 1 + rnd() * 2.4;
                    s.style.width = s.style.height = size + 'px';
                    s.style.left = (30 + rnd() * 70) + '%';
                    s.style.top = (35 + rnd() * 65) + '%';
                    s.style.opacity = (0.15 + rnd() * 0.45).toFixed(2);
                    box.appendChild(s);
                }
            })();
        </script>
    </section>

    
SOLEYA_HTML;
echo str_replace('src="/images/', 'src="' . esc_url( soleya_asset( 'images/' ) ), $html);
