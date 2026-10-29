<?php
$html = <<<'SOLEYA_HTML'
<!-- ============ TARIFS (from the printed price sheet) ============ -->
    <section id="tarifs" class="relative overflow-hidden py-24 lg:py-28" style="background: radial-gradient(45% 40% at 100% 0%, rgba(244, 232, 193, 0.6) 0%, rgba(244, 232, 193, 0) 70%), radial-gradient(40% 40% at 0% 100%, rgba(232, 214, 200, 0.5) 0%, rgba(232, 214, 200, 0) 70%), #fbf6ec;">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center">
                <p class="text-sm tracking-[0.25em] uppercase text-soleya-darkGold font-medium">Reiki &amp; Soins Énergétiques</p>

                <div class="relative inline-block mt-5 px-16 py-3">
                    <svg class="absolute inset-0 w-full h-full" viewBox="0 0 400 90" preserveAspectRatio="none" aria-hidden="true">
                        <path d="M6 20C40 6 120 14 200 9C280 4 350 12 394 22L399 42L392 64C350 84 270 78 200 85C120 90 40 84 8 72L1 46Z" fill="#4f6b5d"/>
                    </svg>
                    <h2 class="relative font-serif font-semibold text-white text-5xl sm:text-6xl tracking-wide">Tarifs</h2>
                </div>

                <div class="mt-6 space-y-2 text-sm text-slate-700 font-medium">
                    <p class="flex items-center justify-center gap-3"><span>Équilibre</span><span class="w-1 h-1 rounded-full bg-soleya-darkGold"></span><span>Harmonie</span><span class="w-1 h-1 rounded-full bg-soleya-darkGold"></span><span>Bien-être</span></p>
                    <p class="flex items-center justify-center gap-3"><span>Énergie</span><span class="w-1 h-1 rounded-full bg-soleya-darkGold"></span><span>Sérénité</span><span class="w-1 h-1 rounded-full bg-soleya-darkGold"></span><span>Lâcher-prise</span></p>
                </div>
            </div>

            <!-- Cards -->
            <div class="mt-20 space-y-16">

                <div class="relative grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-16">
            <article class="relative flex flex-col items-center text-center rounded-3xl border px-7 md:pr-14 pt-14 pb-10" style="background:#fcf5e8; border-color:#e6d5b0;">
                <span class="absolute -top-9 left-1/2 -translate-x-1/2 w-[4.5rem] h-[4.5rem] rounded-full flex items-center justify-center text-white shadow-md ring-4 ring-white/60" style="background:#8d9152">
                    <i data-lucide="hand-heart" class="w-8 h-8" stroke-width="1.5"></i>
                </span>
                <h3 class="font-sans text-xl font-semibold tracking-[0.12em] uppercase" style="color:#40594f">Séance Reiki</h3>

                <span class="relative block w-2/3 h-px my-4" style="background: linear-gradient(90deg, transparent, #c5a059, transparent);"><span class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-1.5 h-1.5 rounded-full bg-soleya-darkGold"></span></span>

                <p class="font-sans font-bold text-[3.25rem] leading-none" style="color:#40594f">50 €</p>

                <p class="mt-3 text-sm text-slate-700">Durée : environ 1 heure</p>

                <p class="mt-4 mb-6 max-w-[17rem] text-[15px] leading-relaxed text-slate-700">Un moment de détente et de relaxation profonde, dans un cadre bienveillant et apaisant.</p>
                <button type="button" onclick="openBookingModal('Séance Reiki - 50€')" class="mt-auto inline-flex items-center gap-2 rounded-full border px-6 py-2.5 text-sm font-semibold transition-colors " style="color:#40594f; border-color:#40594f;" onmouseover="this.style.background='#40594f';this.style.color='#fff'" onmouseout="this.style.background='transparent';this.style.color='#40594f'">
                    Réserver cette séance
                </button>
            </article>
            <article class="relative flex flex-col items-center text-center rounded-3xl border px-7 md:pl-14 pt-14 pb-10" style="background:#eceee6; border-color:#d1d7c4;">
                <span class="absolute -top-9 left-1/2 -translate-x-1/2 w-[4.5rem] h-[4.5rem] rounded-full flex items-center justify-center text-white shadow-md ring-4 ring-white/60" style="background:#40594f">
                    <i data-lucide="leaf" class="w-8 h-8" stroke-width="1.5"></i>
                </span>
                <h3 class="font-sans text-xl font-semibold tracking-[0.12em] uppercase" style="color:#40594f">Forfait Bien-Être</h3>
                <p class="mt-3 text-sm font-semibold tracking-[0.18em] uppercase" style="color:#40594f">4 séances</p>
                <span class="relative block w-2/3 h-px my-4" style="background: linear-gradient(90deg, transparent, #c5a059, transparent);"><span class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-1.5 h-1.5 rounded-full bg-soleya-darkGold"></span></span>

                <p class="font-sans font-bold text-[3.25rem] leading-none" style="color:#40594f">150 €</p>
                <p class="mt-3 inline-block bg-[#40594f] text-white text-sm font-semibold px-6 py-1.5" style="clip-path: polygon(1.5% 14%, 99% 0, 100% 86%, 0 100%);">4 séances</p>

                <p class="md:hidden mt-3 inline-flex items-center gap-2 rounded-full bg-soleya-gold/25 text-soleya-navy text-xs font-semibold px-3 py-1"><i data-lucide="heart" class="w-3.5 h-3.5"></i>Économie 40 €</p>
                <p class="mt-4 mb-6 max-w-[17rem] text-[15px] leading-relaxed text-slate-700">Un accompagnement sur plusieurs séances pour prendre le temps de s'accorder une vraie pause bien-être.</p>
                <button type="button" onclick="openBookingModal('Forfait Bien-Être (4 Séances) - 150€')" class="mt-auto inline-flex items-center gap-2 rounded-full border px-6 py-2.5 text-sm font-semibold transition-colors " style="color:#40594f; border-color:#40594f;" onmouseover="this.style.background='#40594f';this.style.color='#fff'" onmouseout="this.style.background='transparent';this.style.color='#40594f'">
                    Choisir le Forfait
                </button>
            </article>

                    <!-- Central badge -->
                    <div class="hidden md:flex absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10 w-28 h-28 rounded-full flex-col items-center justify-center text-white shadow-xl ring-4 ring-white/70" style="background: radial-gradient(circle at 30% 25%, #e2c477, #c5a059 70%);">
                        <span class="font-serif italic text-xl leading-none">Économie</span>
                        <span class="font-sans font-bold text-3xl leading-none mt-1">40 €</span>
                        <i data-lucide="heart" class="w-3.5 h-3.5 mt-1"></i>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-16">
            <article class="relative flex flex-col items-center text-center rounded-3xl border px-7  pt-14 pb-10" style="background:#efe9f1; border-color:#d6c8df;">
                <span class="absolute -top-9 left-1/2 -translate-x-1/2 w-[4.5rem] h-[4.5rem] rounded-full flex items-center justify-center text-white shadow-md ring-4 ring-white/60" style="background:#8a6fa8">
                    <i data-lucide="laptop" class="w-8 h-8" stroke-width="1.5"></i>
                </span>
                <h3 class="font-sans text-xl font-semibold tracking-[0.12em] uppercase" style="color:#5b3f7d">Reiki à Distance</h3>

                <span class="relative block w-2/3 h-px my-4" style="background: linear-gradient(90deg, transparent, #c5a059, transparent);"><span class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-1.5 h-1.5 rounded-full bg-soleya-darkGold"></span></span>

                <p class="font-sans font-bold text-[3.25rem] leading-none" style="color:#5b3f7d">40 €</p>

                <p class="mt-3 text-sm text-slate-700">Durée : environ 45 min à 1 heure</p>

                <p class="mt-4 mb-6 max-w-[17rem] text-[15px] leading-relaxed text-slate-700">Séance réalisée à distance, sur rendez-vous.</p>
                <button type="button" onclick="openBookingModal('Reiki À Distance - 40€')" class="mt-auto inline-flex items-center gap-2 rounded-full border px-6 py-2.5 text-sm font-semibold transition-colors " style="color:#5b3f7d; border-color:#5b3f7d;" onmouseover="this.style.background='#5b3f7d';this.style.color='#fff'" onmouseout="this.style.background='transparent';this.style.color='#5b3f7d'">
                    Réserver à Distance
                </button>
            </article>
            <article class="relative flex flex-col items-center text-center rounded-3xl border px-7  pt-14 pb-10" style="background:#fce9df; border-color:#efc6b1;">
                <span class="absolute -top-9 left-1/2 -translate-x-1/2 w-[4.5rem] h-[4.5rem] rounded-full flex items-center justify-center text-white shadow-md ring-4 ring-white/60" style="background:#e08a6c">
                    <i data-lucide="gift" class="w-8 h-8" stroke-width="1.5"></i>
                </span>
                <h3 class="font-sans text-xl font-semibold tracking-[0.12em] uppercase" style="color:#d9683f">Bon Cadeau</h3>

                <span class="relative block w-2/3 h-px my-4" style="background: linear-gradient(90deg, transparent, #c5a059, transparent);"><span class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-1.5 h-1.5 rounded-full bg-soleya-darkGold"></span></span>
                <span class="block font-serif italic text-2xl leading-none mb-1" style="color:#d9683f">À partir de</span>
                <p class="font-sans font-bold text-[3.25rem] leading-none" style="color:#d9683f">50 €</p>



                <p class="mt-4 mb-6 max-w-[17rem] text-[15px] leading-relaxed text-slate-700">Offrez une séance Reiki à la personne de votre choix.</p>
                <button type="button" onclick="openGiftModal()" class="mt-auto inline-flex items-center gap-2 rounded-full border px-6 py-2.5 text-sm font-semibold transition-colors " style="color:#d9683f; border-color:#d9683f;" onmouseover="this.style.background='#d9683f';this.style.color='#fff'" onmouseout="this.style.background='transparent';this.style.color='#d9683f'">
                    Offrir un Bon Cadeau
                </button>
            </article>

                </div>
            </div>

            <!-- Location / WhatsApp bar -->
            <div class="mt-14 rounded-2xl border border-soleya-darkGold/40 bg-white/60 px-6 py-5 flex flex-col md:flex-row items-center justify-center gap-5 md:gap-0 md:divide-x divide-soleya-darkGold/40">
                <p class="md:px-10 flex items-center gap-3 font-sans font-semibold tracking-[0.1em] uppercase text-sm text-[#40594f]">
                    <i data-lucide="map-pin" class="w-6 h-6 text-[#40594f]"></i>
                    La Guerche-de-Bretagne
                </p>
                <a href="https://wa.me/33650042216" target="_blank" rel="noopener" class="md:px-10 flex items-center gap-3 group">
                    <span class="w-9 h-9 rounded-full bg-[#25a35a] text-white flex items-center justify-center"><i data-lucide="message-circle" class="w-5 h-5"></i></span>
                    <span class="leading-tight text-left">
                        <span class="block font-sans font-bold text-2xl text-[#40594f] group-hover:text-soleya-sage transition-colors">06 50 04 22 16</span>
                        <span class="block font-serif italic text-sm text-slate-600">Sur rendez-vous uniquement</span>
                    </span>
                </a>
                <span class="hidden md:flex md:px-10 text-soleya-darkGold"><i data-lucide="flower-2" class="w-9 h-9" stroke-width="1.25"></i></span>
            </div>

            <!-- Disclaimer -->
            <div class="mt-6 rounded-2xl bg-[#40594f] text-white px-6 py-4 flex items-center justify-center gap-4 text-center sm:text-left">
                <i data-lucide="leaf" class="w-6 h-6 shrink-0 text-soleya-lightGold" stroke-width="1.5"></i>
                <p class="text-sm leading-snug">Le Reiki est une pratique de bien-être et de relaxation. Il ne remplace pas un suivi ou un traitement médical.</p>
            </div>
        </div>
    </section>
    </div>


    
SOLEYA_HTML;
echo str_replace('src="/images/', 'src="' . esc_url( soleya_asset( 'images/' ) ), $html);
