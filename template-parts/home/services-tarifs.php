<?php
$html = <<<'SOLEYA_HTML'
<!-- ============ SERVICES & TARIFS ============ -->

    <div class="page-view" data-page="services" id="page-services">
<section id="services" class="services-bg relative py-24 lg:py-32">

        <!-- Golden dust -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
            <div id="speckles-services" class="absolute inset-0"></div>
        </div>

        <!-- Flower ornament straddling the section edge -->
        <svg class="hidden lg:block absolute left-[40%] -top-14 w-32 h-32 z-10" viewBox="0 0 140 140" fill="none" stroke-width="2" stroke-linecap="round" aria-hidden="true">
            <path d="M70 70C42 46 44 6 70 6C96 6 98 46 70 70Z" stroke="#c5a059" transform="rotate(0 70 70)"/>
            <path d="M70 70C42 46 44 6 70 6C96 6 98 46 70 70Z" stroke="#4f6b5d" transform="rotate(72 70 70)"/>
            <path d="M70 70C42 46 44 6 70 6C96 6 98 46 70 70Z" stroke="#c5a059" transform="rotate(144 70 70)"/>
            <path d="M70 70C42 46 44 6 70 6C96 6 98 46 70 70Z" stroke="#4f6b5d" transform="rotate(216 70 70)"/>
            <path d="M70 70C42 46 44 6 70 6C96 6 98 46 70 70Z" stroke="#c5a059" transform="rotate(288 70 70)"/>
        </svg>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

            <!-- Photo -->
            <div class="lg:col-span-5">
                <div class="about-photo overflow-hidden shadow-2xl shadow-soleya-navy/15 bg-soleya-beige">
                    <img src="https://i.ibb.co/v6q91cF7/811169851-1304994188271777-7104786582607859503-n.jpg"
                         alt="Éléments de soin, spa et relaxation"
                         class="w-full aspect-[4/5] object-cover"
                         loading="lazy"
                         onerror="this.src='https://placehold.co/600x750/f3efe6/2d5a27?text=Ambiance+Soin'">
                </div>
            </div>

            <!-- Text + price list -->
            <div class="lg:col-span-7">
                <p class="flex items-center gap-2 text-sm tracking-wide text-soleya-forest font-medium">
                    Tarifs clairs &amp; transparents
                    <span class="w-1.5 h-1.5 rounded-full bg-soleya-gold"></span>
                </p>

                <h2 class="mt-3 font-serif font-medium text-soleya-forest leading-[1.02] tracking-tight text-[clamp(2.5rem,4.6vw,4rem)]">
                    Soins &amp; Prestations Soleya
                </h2>

                <p class="mt-5 max-w-xl text-[17px] leading-relaxed text-slate-700 font-light">
                    Des prestations sur-mesure pour vous accompagner vers un bien-être durable. Consultation en cabinet à La Guerche-de-Bretagne ou à distance.
                </p>

                <ul class="mt-8 border-y border-soleya-darkGold/30 divide-y divide-soleya-darkGold/25">

                    <!-- Séance Reiki -->
                    <li>
                        <button type="button" onclick="openBookingModal('Séance Reiki - 50€')" class="group w-full flex items-center gap-4 py-5 text-left">
                            <span class="flex-1 min-w-0">
                                <span class="block font-serif text-2xl font-semibold text-soleya-navy leading-tight">Séance Reiki</span>
                                <span class="block text-sm text-slate-600 mt-1 leading-snug">En cabinet, environ 1 heure : temps d'échange initial, soin énergétique et bilan d'intégration.</span>
                            </span>
                            <span class="font-serif text-3xl font-semibold text-soleya-forest whitespace-nowrap">50 €</span>
                            <span class="hidden sm:flex shrink-0 w-9 h-9 rounded-full border border-soleya-darkGold/50 text-soleya-darkGold items-center justify-center transition-colors group-hover:bg-soleya-forest group-hover:border-soleya-forest group-hover:text-white">
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </span>
                        </button>
                    </li>

                    <!-- Forfait Bien-Être (recommended) -->
                    <li class="bg-white/70">
                        <button type="button" onclick="openBookingModal('Forfait Bien-Être (4 Séances) - 150€')" class="group w-full flex items-center gap-4 py-5 px-4 sm:px-5 text-left">
                            <span class="flex-1 min-w-0">
                                <span class="flex flex-wrap items-center gap-x-3 gap-y-1">
                                    <span class="font-serif text-2xl font-semibold text-soleya-navy leading-tight">Forfait Bien-Être</span>
                                    <span class="rounded-full bg-soleya-gold/25 text-soleya-navy text-xs font-semibold px-3 py-1">Recommandé</span>
                                </span>
                                <span class="block text-sm text-slate-600 mt-1 leading-snug">Cure de 4 séances de 1h, valable 6 mois : suivi personnalisé pour un travail en profondeur.</span>
                                <span class="block text-sm text-soleya-forest font-medium mt-1">Accès progressif au mieux-être</span>
                            </span>
                            <span class="font-serif text-3xl font-semibold text-soleya-forest whitespace-nowrap">150 €</span>
                            <span class="hidden sm:flex shrink-0 w-9 h-9 rounded-full border border-soleya-darkGold/50 text-soleya-darkGold items-center justify-center transition-colors group-hover:bg-soleya-forest group-hover:border-soleya-forest group-hover:text-white">
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </span>
                        </button>
                    </li>

                    <!-- Reiki à distance -->
                    <li>
                        <button type="button" onclick="openBookingModal('Reiki À Distance - 40€')" class="group w-full flex items-center gap-4 py-5 text-left">
                            <span class="flex-1 min-w-0">
                                <span class="block font-serif text-2xl font-semibold text-soleya-navy leading-tight">Reiki à Distance</span>
                                <span class="block text-sm text-slate-600 mt-1 leading-snug">Où que vous soyez, 45 à 60 min : prise de contact par téléphone, soin ciblé et debriefing post-soin.</span>
                            </span>
                            <span class="font-serif text-3xl font-semibold text-soleya-forest whitespace-nowrap">40 €</span>
                            <span class="hidden sm:flex shrink-0 w-9 h-9 rounded-full border border-soleya-darkGold/50 text-soleya-darkGold items-center justify-center transition-colors group-hover:bg-soleya-forest group-hover:border-soleya-forest group-hover:text-white">
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </span>
                        </button>
                    </li>

                    <!-- Bon cadeau -->
                    <li>
                        <button type="button" onclick="openGiftModal()" class="group w-full flex items-center gap-4 py-5 text-left">
                            <span class="flex-1 min-w-0">
                                <span class="block font-serif text-2xl font-semibold text-soleya-navy leading-tight">Bon Cadeau</span>
                                <span class="block text-sm text-slate-600 mt-1 leading-snug">Pour vos proches : carte cadeau personnalisée, envoi numérique ou postal, valable 1 an.</span>
                            </span>
                            <span class="whitespace-nowrap text-right">
                                <span class="block text-xs text-slate-500 leading-none">à partir de</span>
                                <span class="font-serif text-3xl font-semibold text-soleya-forest">50 €</span>
                            </span>
                            <span class="hidden sm:flex shrink-0 w-9 h-9 rounded-full border border-soleya-darkGold/50 text-soleya-darkGold items-center justify-center transition-colors group-hover:bg-soleya-forest group-hover:border-soleya-forest group-hover:text-white">
                                <i data-lucide="gift" class="w-4 h-4"></i>
                            </span>
                        </button>
                    </li>
                </ul>

                <div class="mt-10 flex flex-col sm:flex-row sm:items-center gap-5 sm:gap-8">
                    <button onclick="openBookingModal()" class="inline-flex items-center justify-center gap-3 rounded-full bg-soleya-forest text-white px-8 py-4 text-[15px] font-semibold shadow-lg shadow-soleya-forest/25 hover:bg-soleya-sage hover:-translate-y-0.5 transition-all">
                        <span>Réserver une Séance</span>
                        <span class="w-1.5 h-1.5 rounded-full bg-soleya-lightGold"></span>
                    </button>
                    <a href="tel:0650042216" class="inline-flex items-center gap-2 font-semibold text-soleya-navy hover:text-soleya-forest transition-colors">
                        <i data-lucide="phone-call" class="w-4 h-4 text-soleya-darkGold"></i>
                        <span>Appeler au 06 50 04 22 16</span>
                    </a>
                </div>

                <div class="mt-5 flex flex-wrap gap-x-6 gap-y-2 text-sm font-semibold">
                    <a href="#prestations" class="text-soleya-forest underline underline-offset-4 decoration-soleya-darkGold hover:text-soleya-sage">Voir le détail des prestations</a>
                    <a href="#why-soleya" class="text-soleya-forest underline underline-offset-4 decoration-soleya-darkGold hover:text-soleya-sage">Découvrir l’approche de Tatiana</a>
                </div>

                <p class="mt-8 flex items-start gap-2 max-w-xl text-xs leading-relaxed text-slate-500">
                    <i data-lucide="info" class="w-4 h-4 text-soleya-darkGold shrink-0 mt-0.5"></i>
                    <span><strong class="font-semibold text-slate-600">Avertissement important :</strong> Le Reiki est une méthode de soin complémentaire et holistique visant au bien-être général. Il ne se substitue en aucun cas à un diagnostic, un traitement médical ou un suivi psychiatrique. N'arrêtez jamais votre traitement médical sans l'avis de votre médecin.</span>
                </p>
            </div>
        </div>

        <script>
            (function () {
                const box = document.getElementById('speckles-services');
                let seed = 31;
                const rnd = () => (seed = (seed * 16807) % 2147483647) / 2147483647;
                for (let i = 0; i < 55; i++) {
                    const s = document.createElement('span');
                    s.className = 'speck';
                    const size = 1 + rnd() * 2.4;
                    s.style.width = s.style.height = size + 'px';
                    s.style.left = (rnd() * 100) + '%';
                    s.style.top = (rnd() * 100) + '%';
                    s.style.opacity = (0.15 + rnd() * 0.45).toFixed(2);
                    box.appendChild(s);
                }
            })();
        </script>
    </section>

    
SOLEYA_HTML;
echo str_replace('src="/images/', 'src="' . esc_url( soleya_asset( 'images/' ) ), $html);
