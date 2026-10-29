<?php
$html = <<<'SOLEYA_HTML'
<!-- ============ FOOTER ============ -->
    <footer class="relative bg-soleya-navy text-gray-300">
        <div class="h-px bg-gradient-to-r from-transparent via-soleya-darkGold to-transparent"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-x-10 gap-y-12">

                <!-- Brand -->
                <div class="lg:col-span-4">
                    <a href="#accueil" class="inline-flex items-center gap-3">
                        <img src="/images/logo-soleya-reiki-256.png"
                             alt="Soleya Logo"
                             class="w-12 h-12 rounded-full border border-soleya-darkGold object-cover"
                             loading="lazy" width="256" height="256">
                        <span class="font-serif text-3xl font-semibold text-white">Soleya Reiki</span>
                    </a>
                    <p class="mt-5 max-w-sm text-sm leading-relaxed text-gray-300">
                        Espace de bien-être et de soins énergétiques guidé par Tatiana, praticienne certifiée Reiki Usui 2ᵉ degré à La Guerche-de-Bretagne.
                    </p>
                    <p class="mt-4 flex items-center gap-2 text-sm text-soleya-darkGold">
                        <i data-lucide="sparkles" class="w-4 h-4"></i>
                        <span>Équilibre, Harmonie, Sérénité</span>
                    </p>
                </div>

                <!-- Navigation -->
                <div class="lg:col-span-2">
                    <h4 class="font-serif text-xl font-semibold text-soleya-darkGold">Navigation</h4>
                    <ul class="mt-5 space-y-3 text-sm">
                        <li><a href="#accueil" class="hover:text-soleya-gold transition-colors">Accueil</a></li>
                        <li><a href="#a-propos" class="hover:text-soleya-gold transition-colors">À Propos</a></li>
                        <li><a href="#why-soleya" class="hover:text-soleya-gold transition-colors">Notre approche</a></li>
                        <li><a href="#services" class="hover:text-soleya-gold transition-colors">Services &amp; Tarifs</a></li>
                        <li><a href="#bienfaits" class="hover:text-soleya-gold transition-colors">Bienfaits</a></li>
                        <li><a href="/blogs/" class="hover:text-soleya-gold transition-colors">Blogs</a></li>
                        <li><a href="#contact" class="hover:text-soleya-gold transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Prestations -->
                <div class="lg:col-span-3">
                    <h4 class="font-serif text-xl font-semibold text-soleya-darkGold">Prestations</h4>
                    <ul class="mt-5 space-y-3 text-sm">
                        <li><a href="#tarifs" class="hover:text-soleya-gold transition-colors">Séance Reiki Individuelle (50 €)</a></li>
                        <li><a href="#tarifs" class="hover:text-soleya-gold transition-colors">Forfait Bien-Être (150 €)</a></li>
                        <li><a href="#tarifs" class="hover:text-soleya-gold transition-colors">Soin Reiki À Distance (40 €)</a></li>
                        <li><a href="#tarifs" class="hover:text-soleya-gold transition-colors">Bons Cadeaux Personnalisés</a></li>
                        <li><a href="#bienfaits" class="hover:text-soleya-gold transition-colors">Accompagnement Énergétique</a></li>
                    </ul>
                </div>

                <!-- Coordonnées -->
                <div class="lg:col-span-3">
                    <h4 class="font-serif text-xl font-semibold text-soleya-darkGold">Coordonnées</h4>
                    <ul class="mt-5 space-y-3 text-sm">
                        <li class="flex items-center gap-3">
                            <i data-lucide="phone" class="w-4 h-4 text-soleya-darkGold shrink-0"></i>
                            <a href="tel:0650042216" class="font-semibold text-white hover:text-soleya-gold transition-colors">06 50 04 22 16</a>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="map-pin" class="w-4 h-4 text-soleya-darkGold shrink-0 mt-0.5"></i>
                            <span>La Guerche-de-Bretagne (35130)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="award" class="w-4 h-4 text-soleya-darkGold shrink-0"></i>
                            <span>Certifiée Usui Shiki Ryoho II</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom bar -->
            <div class="mt-14 pt-6 border-t border-white/10 text-center text-xs text-gray-400 space-y-3">
                <p>© <span id="year-span">2026</span> Soleya Reiki - Tatiana. Tous droits réservés.</p>

                <p class="flex items-center justify-center gap-6">
                    <a href="/mentions-legales/" class="hover:text-soleya-gold transition-colors">Mentions légales</a>
                    <a href="#tarifs" class="hover:text-soleya-gold transition-colors">Tarifs Soins</a>
                    <a href="/politique-de-confidentialite/" class="hover:text-soleya-gold transition-colors">Confidentialité</a>
                </p>

                <p class="text-[10px] leading-none text-gray-400 pt-1">
                    Site web créé par <a href="https://ujjwal-seo.com" target="_blank" rel="noopener noreferrer" class="font-medium text-soleya-darkGold hover:text-soleya-gold transition-colors">ujjwal-seo.com</a>
                </p>
            </div>
        </div>

        <script>
            document.getElementById('year-span').textContent = new Date().getFullYear();
        </script>
    </footer>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Golden dust: deterministic so it looks the same on every load
            const box = document.getElementById('speckles');
            let seed = 7;
            const rnd = () => (seed = (seed * 16807) % 2147483647) / 2147483647;
            for (let i = 0; i < 70; i++) {
                const s = document.createElement('span');
                s.className = 'speck';
                const size = 1 + rnd() * 2.4;
                s.style.width = s.style.height = size + 'px';
                s.style.left = (rnd() * 100) + '%';
                s.style.top = (rnd() * 100) + '%';
                s.style.opacity = (0.15 + rnd() * 0.45).toFixed(2);
                box.appendChild(s);
            }
        });

        // Mobile menu
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('menu-icon-open');
        const iconClose = document.getElementById('menu-icon-close');

        mobileMenuBtn.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.toggle('hidden') === false;
            iconOpen.classList.toggle('hidden', isOpen);
            iconClose.classList.toggle('hidden', !isOpen);
            mobileMenuBtn.setAttribute('aria-expanded', String(isOpen));
        });
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
            });
        });


        // =========================================================
        // SINGLE-FILE MULTI-PAGE ROUTER
        // Clicking navigation changes the visible page inside this
        // same index.html. Nothing needs to be deployed separately.
        // =========================================================
        const pageMap = {
            accueil: 'home',
            'a-propos': 'about',
            services: 'services',
            prestations: 'services',
            tarifs: 'services',
            bienfaits: 'benefits',
            contact: 'contact',
            galerie: 'gallery',
            'rendez-vous': 'booking'
        };

        const sectionPages = {
            'home-a-propos': 'home',
            'home-reiki-feature': 'home',
            'home-reiki-feature-2': 'home',
            'home-7days-reiki': 'home',
            'home-wellness-ref': 'home',
            'why-soleya': 'about',
            prestations: 'services',
            tarifs: 'services'
        };

        function getRouteFromHash(){
            const raw = (window.location.hash || '#accueil').replace(/^#/, '').trim().toLowerCase();
            return pageMap[raw] || sectionPages[raw] || 'home';
        }

        function getTargetFromHash(){
            const raw = (window.location.hash || '').replace(/^#/, '').trim().toLowerCase();
            return sectionPages[raw] ? raw : null;
        }

        function showPage(route, targetId){
            document.querySelectorAll('.page-view').forEach(p => {
                p.classList.toggle('active-page', p.dataset.page === route);
            });

            const activeIds = {
                home: 'accueil',
                about: 'a-propos',
                services: 'services',
                benefits: 'bienfaits',
                gallery: 'galerie',
                contact: 'contact',
                booking: 'rendez-vous'
            };
            const activeId = activeIds[route];

            // Hide the bottom CTA only on the Contact page.
            const bottomCta = document.getElementById('soleya-bottom-cta');
            if (bottomCta) {
                bottomCta.style.display = route === 'contact' ? 'none' : '';
            }

            document.querySelectorAll('.nav-link').forEach(link => {
                const href = (link.getAttribute('href') || '').replace(/^#/, '');
                link.classList.toggle('active', (pageMap[href] || sectionPages[href]) === route);
            });

            document.querySelectorAll('.mobile-link').forEach(link => {
                const href = (link.getAttribute('href') || '').replace(/^#/, '');
                link.classList.toggle('bg-soleya-beige', (pageMap[href] || sectionPages[href]) === route);
            });

            // Keep the address/hash in sync with the visible "page".
            const currentId = targetId || activeId;
            if (window.location.hash !== '#' + currentId) {
                history.replaceState(null, '', '#' + currentId);
            }

            window.scrollTo({ top: 0, behavior: 'auto' });

            // Optional deep-link to a section inside the Services page.
            if (targetId && targetId !== activeId) {
                requestAnimationFrame(() => {
                    const target = document.getElementById(targetId);
                    if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                });
            }

        }

        function navigateTo(hashOrId){
            const raw = String(hashOrId || 'accueil').replace(/^#/, '').toLowerCase();
            const route = pageMap[raw] || sectionPages[raw] || 'home';
            const targetId = sectionPages[raw] ? raw : null;
            const canonical = ({
                home:'accueil',
                about:'a-propos',
                services:'services',
                benefits:'bienfaits',
                gallery:'galerie',
                contact:'contact',
                booking:'rendez-vous'
            })[route];
            const destination = targetId || canonical;
            if (window.location.hash === '#' + destination) {
                showPage(route, targetId);
            } else {
                window.location.hash = destination;
                // hashchange calls showPage
            }
        }

        window.navigateTo = navigateTo;

        window.addEventListener('hashchange', () => {
            showPage(getRouteFromHash(), getTargetFromHash());
        });

        // Route all #page links through the single-file page system.
        document.addEventListener('click', (e) => {
            const a = e.target.closest('a[href^="#"]');
            if (!a) return;
            const href = a.getAttribute('href');
            if (!href || href === '#') return;
            e.preventDefault();
            navigateTo(href);
        });

        // Booking buttons open the booking "page" in this same file.
        window.openGiftModal = function(){
            navigateTo('contact');
        };

        window.openBookingModal = function(service){
            const sel = document.getElementById('rdv-service');
            if (sel && service) {
                const key = service.split(/[-(]/)[0].trim().toLowerCase();
                const opt = Array.from(sel.options).find((o) =>
                    o.value && o.value.toLowerCase().startsWith(key)
                );
                if (opt) {
                    sel.value = opt.value;
                    sel.classList.remove('is-empty');
                }
            }
            navigateTo('rendez-vous');
        };

        // Start on the requested hash, or Accueil.
        showPage(getRouteFromHash(), getTargetFromHash());
    </script>

SOLEYA_HTML;
echo str_replace('src="/images/', 'src="' . esc_url( soleya_asset( 'images/' ) ), $html);
