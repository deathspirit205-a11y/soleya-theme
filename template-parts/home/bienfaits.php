<?php
$html = <<<'SOLEYA_HTML'
<!-- ============ BIENFAITS ============ -->

    <div class="page-view" data-page="benefits" id="page-benefits">
<section id="bienfaits" class="relative overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12">

            <!-- Green panel with the four benefits -->
            <div class="benefits-panel lg:col-span-7 text-white px-6 sm:px-10 lg:px-16 xl:px-24 py-20 lg:py-28">
                <p class="flex items-center gap-2 text-sm tracking-wide text-soleya-lightGold font-medium">
                    Harmonie &amp; Sérénité
                    <span class="w-1.5 h-1.5 rounded-full bg-soleya-gold"></span>
                </p>

                <h2 class="mt-3 font-serif font-medium leading-[1.02] tracking-tight text-[clamp(2.5rem,4.6vw,4rem)] max-w-xl">
                    Les Bienfaits du Reiki Soleya
                </h2>

                <p class="mt-5 max-w-xl text-[17px] leading-relaxed text-white/90 font-light">
                    La séance est proposée comme un temps de détente et de recentrage. Les ressentis sont personnels et peuvent varier d’une séance à l’autre.
                </p>

                <ol class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-10 max-w-3xl">
                    <li>
                        <div class="flex items-center gap-4">
                            <span class="shrink-0 w-10 h-10 rounded-full bg-white text-soleya-forest font-serif text-xl font-semibold flex items-center justify-center">1</span>
                            <h3 class="font-serif text-2xl font-medium leading-tight">Un temps pour ralentir</h3>
                        </div>
                        <p class="mt-3 text-[15px] leading-relaxed text-white/90 font-light">
                            Certaines personnes apprécient la séance comme une parenthèse calme. Aucun effet précis n’est garanti.
                        </p>
                    </li>
                    <li>
                        <div class="flex items-center gap-4">
                            <span class="shrink-0 w-10 h-10 rounded-full bg-white text-soleya-forest font-serif text-xl font-semibold flex items-center justify-center">2</span>
                            <h3 class="font-serif text-2xl font-medium leading-tight">Une attention à ses sensations</h3>
                        </div>
                        <p class="mt-3 text-[15px] leading-relaxed text-white/90 font-light">
                            Dans la tradition Reiki, la séance s’appuie sur une approche énergétique. Cette représentation ne constitue pas un mécanisme médical démontré.
                        </p>
                    </li>
                    <li>
                        <div class="flex items-center gap-4">
                            <span class="shrink-0 w-10 h-10 rounded-full bg-white text-soleya-forest font-serif text-xl font-semibold flex items-center justify-center">3</span>
                            <h3 class="font-serif text-2xl font-medium leading-tight">Un espace d’écoute</h3>
                        </div>
                        <p class="mt-3 text-[15px] leading-relaxed text-white/90 font-light">
                            Un échange avant et après la séance permet de partager vos attentes et votre ressenti, sans interpréter ni promettre de résultat.
                        </p>
                    </li>
                    <li>
                        <div class="flex items-center gap-4">
                            <span class="shrink-0 w-10 h-10 rounded-full bg-white text-soleya-forest font-serif text-xl font-semibold flex items-center justify-center">4</span>
                            <h3 class="font-serif text-2xl font-medium leading-tight">Une approche complémentaire</h3>
                        </div>
                        <p class="mt-3 text-[15px] leading-relaxed text-white/90 font-light">
                            Les données scientifiques ne démontrent pas clairement que le Reiki traite un problème de santé. Il ne remplace ni un diagnostic ni un traitement médical.
                        </p>
                    </li>
                </ol>

                <button onclick="openBookingModal()" class="mt-12 inline-flex items-center gap-3 rounded-full bg-soleya-cream text-soleya-forest px-8 py-4 text-[15px] font-semibold hover:bg-white hover:-translate-y-0.5 transition-all">
                    <span>Prendre Rendez-vous</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-soleya-darkGold"></span>
                </button>
                <div class="mt-6 flex flex-wrap gap-x-6 gap-y-2 text-sm font-semibold">
                    <a href="#services" class="text-white underline underline-offset-4 decoration-soleya-lightGold hover:text-soleya-lightGold">Découvrir les séances et tarifs</a>
                    <a href="#why-soleya" class="text-white underline underline-offset-4 decoration-soleya-lightGold hover:text-soleya-lightGold">Lire l’approche de Tatiana</a>
                </div>
            </div>

            <!-- Full-height photo with certification block -->
            <div class="lg:col-span-5 relative min-h-[460px] lg:min-h-full">
                <img src="https://i.ibb.co/ch9q6cd7/809384878-2978258722509868-6516404212762017717-n.jpg"
                     alt="Geste de méditation et ancrage"
                     class="absolute inset-0 w-full h-full object-cover"
                     loading="lazy"
                     onerror="this.src='https://placehold.co/600x900/0a1128/d4af37?text=Méditation'">

                <div class="absolute top-0 left-0 bg-soleya-navy text-white rounded-br-3xl pl-8 pr-10 py-7 shadow-xl">
                    <span class="block font-serif text-7xl font-light leading-none text-soleya-lightGold">II</span>
                    <span class="block mt-3 font-serif text-xl leading-tight">Certifiée<br>Usui Shiki Ryoho</span>
                </div>
            </div>
        </div>
    </section>
    </div>



    
SOLEYA_HTML;
echo str_replace('src="/images/', 'src="' . esc_url( soleya_asset( 'images/' ) ), $html);
