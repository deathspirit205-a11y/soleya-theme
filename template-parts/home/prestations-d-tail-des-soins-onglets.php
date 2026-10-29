<?php
$html = <<<'SOLEYA_HTML'
<!-- ============ PRESTATIONS (détail des soins, onglets) ============ -->
    <section id="prestations" class="bg-white pt-2 pb-24 lg:pb-28" aria-label="Détail des prestations">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

            <!-- Tabs -->
            <div class="lg:col-span-4">
                <div role="tablist" aria-orientation="vertical" aria-label="Prestations Soleya" class="space-y-3">
                    <button type="button" role="tab" id="presta-tab-0" aria-controls="presta-panel-0" aria-selected="true" tabindex="0"
                            class="presta-tab presta-tab-on w-full flex items-center gap-4 rounded-2xl px-5 py-5 text-left font-serif text-2xl leading-tight">
                        <i data-lucide="sun" class="presta-ico w-7 h-7 shrink-0" stroke-width="1.5"></i>
                        <span>Séance Reiki</span>
                    </button>
                    <button type="button" role="tab" id="presta-tab-1" aria-controls="presta-panel-1" aria-selected="false" tabindex="-1"
                            class="presta-tab w-full flex items-center gap-4 rounded-2xl px-5 py-5 text-left font-serif text-2xl leading-tight">
                        <i data-lucide="sparkles" class="presta-ico w-7 h-7 shrink-0" stroke-width="1.5"></i>
                        <span>Forfait Bien-Être</span>
                    </button>
                    <button type="button" role="tab" id="presta-tab-2" aria-controls="presta-panel-2" aria-selected="false" tabindex="-1"
                            class="presta-tab w-full flex items-center gap-4 rounded-2xl px-5 py-5 text-left font-serif text-2xl leading-tight">
                        <i data-lucide="wifi" class="presta-ico w-7 h-7 shrink-0" stroke-width="1.5"></i>
                        <span>Reiki à Distance</span>
                    </button>
                    <button type="button" role="tab" id="presta-tab-3" aria-controls="presta-panel-3" aria-selected="false" tabindex="-1"
                            class="presta-tab w-full flex items-center gap-4 rounded-2xl px-5 py-5 text-left font-serif text-2xl leading-tight">
                        <i data-lucide="gift" class="presta-ico w-7 h-7 shrink-0" stroke-width="1.5"></i>
                        <span>Bon Cadeau</span>
                    </button>
                </div>
            </div>

            <!-- Panels -->
            <div class="lg:col-span-8">
                    <div role="tabpanel" id="presta-panel-0" aria-labelledby="presta-tab-0" class="presta-panel">
                        <div class="relative rounded-[1.5rem] overflow-hidden bg-soleya-beige shadow-xl shadow-soleya-navy/10">
                            <img src="https://i.ibb.co/yBs0Vgwg/811791963-889362480773898-2454850824453965694-n.jpg" alt="Mains jointes en Namasté, séance Reiki Soleya" loading="lazy" class="block w-full aspect-[16/10] object-cover" style="object-position: 50% 40%;"
                                 onerror="this.src='https://placehold.co/900x560/f3efe6/2d5a27?text=Namast%C3%A9'">
                            <div class="absolute left-4 bottom-4 flex items-end gap-3 rounded-2xl bg-white/90 backdrop-blur px-4 py-3 shadow-lg">
                                <span><span class="block font-serif text-3xl font-semibold leading-none text-soleya-forest">40 €</span></span>
                                <span class="text-sm text-slate-600">environ 1 heure</span>
                            </div>
                        </div>

                        <p class="mt-8 flex flex-wrap items-center gap-3 text-sm text-soleya-darkGold font-medium">
                            <span>Présentiel, en cabinet</span>

                        </p>
                        <h3 class="mt-2 font-serif font-medium text-soleya-forest leading-[1.05] tracking-tight text-[clamp(2.25rem,4vw,3.25rem)]">Séance Reiki</h3>
                        <p class="mt-4 max-w-2xl text-[17px] leading-relaxed text-slate-700 font-light">Un moment privilégié de détente et de relaxation profonde. Inclus un temps d'échange initial, le soin énergétique et un bilan d'intégration.</p>

                        <ul class="mt-5 space-y-2.5 text-[15px] text-slate-700">
                            <li class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-soleya-forest shrink-0"></i><span>Bilan énergétique préalable</span></li>
                            <li class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-soleya-forest shrink-0"></i><span>Soin complet par apposition des mains</span></li>
                            <li class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-soleya-forest shrink-0"></i><span>Musique relaxante &amp; huiles douces</span></li>
                        </ul>

                        <button type="button" onclick="openBookingModal('Séance Reiki - 50€')" class="mt-8 inline-flex items-center gap-3 rounded-full bg-soleya-forest text-white px-8 py-4 text-[15px] font-semibold shadow-lg shadow-soleya-forest/25 hover:bg-soleya-sage hover:-translate-y-0.5 transition-all">
                            <span>Réserver cette séance</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-soleya-lightGold"></span>
                        </button>
                    </div>
                    <div role="tabpanel" id="presta-panel-1" aria-labelledby="presta-tab-1" class="presta-panel" hidden>
                        <div class="relative rounded-[1.5rem] overflow-hidden bg-soleya-beige shadow-xl shadow-soleya-navy/10">
                            <img src="https://i.ibb.co/VWbSk0wP/809373422-3926651727516488-3001163071601189977-n.jpg" alt="Coucher de soleil spirituel Soleya Reiki" loading="lazy" class="block w-full aspect-[16/10] object-cover"
                                 onerror="this.src='https://placehold.co/900x560/f3efe6/2d5a27?text=Soleya+Reiki'">
                            <div class="absolute left-4 bottom-4 flex items-end gap-3 rounded-2xl bg-white/90 backdrop-blur px-4 py-3 shadow-lg">
                                <span><span class="block font-serif text-3xl font-semibold leading-none text-soleya-forest">150 €</span></span>
                                <span class="text-sm text-slate-600">4 séances de 1 heure</span>
                            </div>
                        </div>

                        <p class="mt-8 flex flex-wrap items-center gap-3 text-sm text-soleya-darkGold font-medium">
                            <span>Cure de 4 séances</span>
                            <span class="rounded-full bg-soleya-gold/25 text-soleya-navy text-xs font-semibold px-3 py-1">Économie 40 €</span>
                        </p>
                        <h3 class="mt-2 font-serif font-medium text-soleya-forest leading-[1.05] tracking-tight text-[clamp(2.25rem,4vw,3.25rem)]">Forfait Bien-Être</h3>
                        <p class="mt-4 max-w-2xl text-[17px] leading-relaxed text-slate-700 font-light">Idéal pour un travail énergétique en profondeur, traiter un blocage récurrent ou accompagner un changement de vie majeur.</p>

                        <ul class="mt-5 space-y-2.5 text-[15px] text-slate-700">
                            <li class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-soleya-forest shrink-0"></i><span>4 Soins complets de 1h</span></li>
                            <li class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-soleya-forest shrink-0"></i><span>Suivi personnalisé continu</span></li>
                            <li class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-soleya-forest shrink-0"></i><span>Valable 6 mois</span></li>
                        </ul>

                        <button type="button" onclick="openBookingModal('Forfait Bien-Être (4 Séances) - 150€')" class="mt-8 inline-flex items-center gap-3 rounded-full bg-soleya-forest text-white px-8 py-4 text-[15px] font-semibold shadow-lg shadow-soleya-forest/25 hover:bg-soleya-sage hover:-translate-y-0.5 transition-all">
                            <span>Choisir le Forfait</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-soleya-lightGold"></span>
                        </button>
                    </div>
                    <div role="tabpanel" id="presta-panel-2" aria-labelledby="presta-tab-2" class="presta-panel" hidden>
                        <div class="relative rounded-[1.5rem] overflow-hidden bg-soleya-beige shadow-xl shadow-soleya-navy/10">
                            <img src="https://i.ibb.co/wbD6v9Z/813965443-1078785608350664-3912375430077588009-n.jpg" alt="Mains de transmission d'énergie" loading="lazy" class="block w-full aspect-[16/10] object-cover"
                                 onerror="this.src='https://placehold.co/900x560/f3efe6/2d5a27?text=Énergie'">
                            <div class="absolute left-4 bottom-4 flex items-end gap-3 rounded-2xl bg-white/90 backdrop-blur px-4 py-3 shadow-lg">
                                <span><span class="block font-serif text-3xl font-semibold leading-none text-soleya-forest">40 €</span></span>
                                <span class="text-sm text-slate-600">45-60 min</span>
                            </div>
                        </div>

                        <p class="mt-8 flex flex-wrap items-center gap-3 text-sm text-soleya-darkGold font-medium">
                            <span>Où que vous soyez</span>

                        </p>
                        <h3 class="mt-2 font-serif font-medium text-soleya-forest leading-[1.05] tracking-tight text-[clamp(2.25rem,4vw,3.25rem)]">Reiki à Distance</h3>
                        <p class="mt-4 max-w-2xl text-[17px] leading-relaxed text-slate-700 font-light">Recevez tous les bienfaits de l'énergie Reiki depuis le confort de votre domicile. Idéal si vous ne pouvez pas vous déplacer.</p>

                        <ul class="mt-5 space-y-2.5 text-[15px] text-slate-700">
                            <li class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-soleya-forest shrink-0"></i><span>Prise de contact préalable par téléphone</span></li>
                            <li class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-soleya-forest shrink-0"></i><span>Soin à distance ciblé</span></li>
                            <li class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-soleya-forest shrink-0"></i><span>Debriefing téléphonique post-soin</span></li>
                        </ul>

                        <button type="button" onclick="openBookingModal('Reiki À Distance - 40€')" class="mt-8 inline-flex items-center gap-3 rounded-full bg-soleya-forest text-white px-8 py-4 text-[15px] font-semibold shadow-lg shadow-soleya-forest/25 hover:bg-soleya-sage hover:-translate-y-0.5 transition-all">
                            <span>Réserver à Distance</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-soleya-lightGold"></span>
                        </button>
                    </div>
                    <div role="tabpanel" id="presta-panel-3" aria-labelledby="presta-tab-3" class="presta-panel" hidden>
                        <div class="relative rounded-[1.5rem] overflow-hidden bg-soleya-beige shadow-xl shadow-soleya-navy/10">
                            <img src="https://i.ibb.co/XZs6WKMv/818171883-1406331397494211-950707429107116260-n.jpg" alt="Pose du cœur dans la nature" loading="lazy" class="block w-full aspect-[16/10] object-cover"
                                 onerror="this.src='https://placehold.co/900x560/f3efe6/2d5a27?text=Cœur+Nature'">
                            <div class="absolute left-4 bottom-4 flex items-end gap-3 rounded-2xl bg-white/90 backdrop-blur px-4 py-3 shadow-lg">
                                <span><span class="block text-[11px] leading-none text-slate-500 mb-1">à partir de</span><span class="block font-serif text-3xl font-semibold leading-none text-soleya-forest">50 €</span></span>

                            </div>
                        </div>

                        <p class="mt-8 flex flex-wrap items-center gap-3 text-sm text-soleya-darkGold font-medium">
                            <span>Pour vos proches</span>

                        </p>
                        <h3 class="mt-2 font-serif font-medium text-soleya-forest leading-[1.05] tracking-tight text-[clamp(2.25rem,4vw,3.25rem)]">Bon Cadeau</h3>
                        <p class="mt-4 max-w-2xl text-[17px] leading-relaxed text-slate-700 font-light">Offrez une bulle de sérénité et une parenthèse enchantée à un proche pour un anniversaire, une fête ou simplement faire plaisir.</p>

                        <ul class="mt-5 space-y-2.5 text-[15px] text-slate-700">
                            <li class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-soleya-forest shrink-0"></i><span>Carte cadeau élégante personnalisée</span></li>
                            <li class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-soleya-forest shrink-0"></i><span>Envoi numérique ou postal</span></li>
                            <li class="flex items-center gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-soleya-forest shrink-0"></i><span>Valable 1 an</span></li>
                        </ul>

                        <button type="button" onclick="openGiftModal()" class="mt-8 inline-flex items-center gap-3 rounded-full bg-soleya-forest text-white px-8 py-4 text-[15px] font-semibold shadow-lg shadow-soleya-forest/25 hover:bg-soleya-sage hover:-translate-y-0.5 transition-all">
                            <span>Offrir un Bon Cadeau</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-soleya-lightGold"></span>
                        </button>
                    </div>
            </div>
        </div>

        <script>
            (function () {
                const root = document.getElementById('prestations');
                const tabs = Array.from(root.querySelectorAll('[role="tab"]'));
                const panels = Array.from(root.querySelectorAll('[role="tabpanel"]'));

                function select(i, focus) {
                    tabs.forEach((t, j) => {
                        const on = i === j;
                        t.setAttribute('aria-selected', on ? 'true' : 'false');
                        t.tabIndex = on ? 0 : -1;
                        t.classList.toggle('presta-tab-on', on);
                    });
                    panels.forEach((p, j) => { p.hidden = j !== i; });
                    if (focus) tabs[i].focus();
                }

                tabs.forEach((t, i) => {
                    t.addEventListener('click', (e) => { select(i); if (e.detail !== 0) t.blur(); });
                    t.addEventListener('keydown', (e) => {
                        let n = null;
                        if (e.key === 'ArrowDown' || e.key === 'ArrowRight') n = (i + 1) % tabs.length;
                        else if (e.key === 'ArrowUp' || e.key === 'ArrowLeft') n = (i - 1 + tabs.length) % tabs.length;
                        else if (e.key === 'Home') n = 0;
                        else if (e.key === 'End') n = tabs.length - 1;
                        if (n !== null) { e.preventDefault(); select(n, true); }
                    });
                });
            })();
        </script>
    </section>

    
SOLEYA_HTML;
echo str_replace('src="/images/', 'src="' . esc_url( soleya_asset( 'images/' ) ), $html);
