<?php
$html = <<<'SOLEYA_HTML'
<!-- ============ À PROPOS ============ -->
    <div class="page-view" data-page="about" id="page-about">
<section id="a-propos" class="about-bg relative overflow-hidden py-20 lg:py-28">

        <!-- Golden dust -->
        <div id="speckles-about" class="absolute inset-0 pointer-events-none" aria-hidden="true"></div>

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
                    </p>
                </div>

                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-xl">
                    <div class="flex items-start gap-3">
                        <span class="shrink-0 w-11 h-11 rounded-full bg-soleya-forest/10 text-soleya-forest flex items-center justify-center">
                            <i data-lucide="smile" class="w-5 h-5"></i>
                        </span>
                        <div>
                            <h3 class="font-serif text-xl font-semibold text-soleya-navy leading-tight">Bienveillance &amp; Écoute</h3>
                            <p class="text-sm text-slate-600 mt-1 leading-snug">Un cadre sécurisant pour vous déposer en toute confiance.</p>
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
                    <button onclick="openBookingModal()" class="inline-flex items-center justify-center gap-3 rounded-full bg-soleya-forest text-white px-8 py-4 text-[15px] font-semibold shadow-lg shadow-soleya-forest/25 hover:bg-soleya-sage hover:-translate-y-0.5 transition-all">
                        <span>Prendre Rendez-vous avec Tatiana</span>
                        <span class="w-1.5 h-1.5 rounded-full bg-soleya-lightGold"></span>
                    </button>
                    <a href="tel:0650042216" class="inline-flex items-center gap-2 font-semibold text-soleya-navy hover:text-soleya-forest transition-colors">
                        <i data-lucide="phone" class="w-4 h-4 text-soleya-darkGold"></i>
                        <span>06 50 04 22 16</span>
                    </a>
                </div>
            </div>
        </div>



        <!-- Detailed reasons to choose Soleya Reiki -->
        <section id="why-soleya" class="relative overflow-hidden py-24 lg:py-28" style="background: radial-gradient(45% 40% at 0% 0%, rgba(244, 232, 193, 0.5) 0%, rgba(244, 232, 193, 0) 70%), linear-gradient(180deg, #fbf9f5 0%, #ffffff 100%);" aria-labelledby="why-soleya-title">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto">
                    <p class="inline-flex items-center gap-2 text-sm tracking-wide text-soleya-forest font-medium">
                        Un accompagnement à votre rythme
                        <span class="w-1.5 h-1.5 rounded-full bg-soleya-gold"></span>
                    </p>
                    <h2 id="why-soleya-title" class="mt-3 font-serif font-medium text-soleya-forest leading-[1.02] tracking-tight text-[clamp(2.75rem,6vw,5rem)]">
                        Pourquoi choisir Soleya Reiki ?
                    </h2>
                    <p class="mt-5 text-[16px] sm:text-[17px] leading-relaxed text-slate-600 font-light">
                        À La Guerche-de-Bretagne, Tatiana vous accueille pour une séance de Reiki Usui pensée comme un temps de pause, d’écoute et de détente. Vous pouvez poser vos questions avant de décider si cette approche vous convient.
                    </p>
                </div>

                <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    <article class="rounded-[1.75rem] bg-white/85 border border-soleya-darkGold/15 p-7 sm:p-8 shadow-sm">
                        <span class="w-12 h-12 rounded-full bg-soleya-beige text-soleya-forest flex items-center justify-center" aria-hidden="true"><i data-lucide="heart-handshake" class="w-6 h-6"></i></span>
                        <h3 class="mt-6 font-serif text-2xl font-semibold text-soleya-navy">Une écoute attentive</h3>
                        <p class="mt-3 text-[15px] leading-relaxed text-slate-600">La séance commence par un échange pour comprendre vos attentes et vous expliquer son déroulement, dans le respect de votre confort et de vos limites.</p>
                    </article>

                    <article class="rounded-[1.75rem] bg-white/85 border border-soleya-darkGold/15 p-7 sm:p-8 shadow-sm">
                        <span class="w-12 h-12 rounded-full bg-soleya-beige text-soleya-forest flex items-center justify-center" aria-hidden="true"><i data-lucide="sparkles" class="w-6 h-6"></i></span>
                        <h3 class="mt-6 font-serif text-2xl font-semibold text-soleya-navy">Une pratique expliquée</h3>
                        <p class="mt-3 text-[15px] leading-relaxed text-slate-600">Tatiana est praticienne certifiée Reiki Usui, 2ᵉ degré. Elle vous présente simplement cette approche complémentaire et répond à vos questions sans vous promettre de résultat médical.</p>
                    </article>

                    <article class="rounded-[1.75rem] bg-white/85 border border-soleya-darkGold/15 p-7 sm:p-8 shadow-sm">
                        <span class="w-12 h-12 rounded-full bg-soleya-beige text-soleya-forest flex items-center justify-center" aria-hidden="true"><i data-lucide="map-pin" class="w-6 h-6"></i></span>
                        <h3 class="mt-6 font-serif text-2xl font-semibold text-soleya-navy">Près de chez vous</h3>
                        <p class="mt-3 text-[15px] leading-relaxed text-slate-600">Les séances se font sur rendez-vous à La Guerche-de-Bretagne. Une option de Reiki à distance est également proposée ; contactez Tatiana pour en connaître les modalités.</p>
                    </article>

                    <article class="rounded-[1.75rem] bg-white/85 border border-soleya-darkGold/15 p-7 sm:p-8 shadow-sm">
                        <span class="w-12 h-12 rounded-full bg-soleya-beige text-soleya-forest flex items-center justify-center" aria-hidden="true"><i data-lucide="hand-heart" class="w-6 h-6"></i></span>
                        <h3 class="mt-6 font-serif text-2xl font-semibold text-soleya-navy">Un moment sans pression</h3>
                        <p class="mt-3 text-[15px] leading-relaxed text-slate-600">Le Reiki est une approche complémentaire de bien-être. Son efficacité n’est pas clairement démontrée pour traiter un problème de santé ; il ne remplace ni un diagnostic ni un traitement médical.</p>
                    </article>
                </div>

                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4 text-center">
                    <a href="#rendez-vous" class="inline-flex items-center justify-center gap-2 rounded-full bg-soleya-forest text-white px-8 py-4 text-[15px] font-semibold hover:bg-soleya-sage transition-colors">
                        Prendre rendez-vous
                        <i data-lucide="arrow-right" class="w-4 h-4" aria-hidden="true"></i>
                    </a>
                    <a href="tel:0650042216" class="inline-flex items-center justify-center rounded-full border border-soleya-navy/30 text-soleya-navy px-7 py-4 text-[15px] font-medium hover:bg-white transition-colors">
                        Appeler le 06 50 04 22 16
                    </a>
                </div>
                <p class="mt-6 text-center text-sm">
                    <a href="#services" class="font-semibold text-soleya-forest underline underline-offset-4 decoration-soleya-darkGold hover:text-soleya-sage">Voir les prestations et tarifs</a>
                    <span class="mx-2 text-slate-400" aria-hidden="true">·</span>
                    <a href="#contact" class="font-semibold text-soleya-forest underline underline-offset-4 decoration-soleya-darkGold hover:text-soleya-sage">Poser une question</a>
                </p>
            </div>
        </section>

        <script>
            (function () {
                const box = document.getElementById('speckles-about');
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
    </div>


    
SOLEYA_HTML;
echo str_replace('src="/images/', 'src="' . esc_url( soleya_asset( 'images/' ) ), $html);
