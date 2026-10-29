<?php
$html = <<<'SOLEYA_HTML'
<!-- ============ FORMULAIRE DE RENDEZ-VOUS ============ -->

    <div class="page-view" data-page="booking" id="page-booking">
<section id="rendez-vous" class="bg-white px-4 sm:px-6 lg:px-8 pt-4 pb-24 lg:pb-28" aria-labelledby="rdv-title">
        <div class="max-w-7xl mx-auto rounded-[2rem] overflow-hidden shadow-2xl shadow-soleya-navy/15 grid grid-cols-1 lg:grid-cols-[5fr_7fr]">

            <!-- Photo -->
            <div class="relative min-h-[340px] lg:min-h-full bg-soleya-beige">
                <img src="https://i.ibb.co/5xz7XwCd/813519933-2180685766187549-1753717609699295218-n.jpg"
                     alt="Séance de Reiki avec Tatiana"
                     class="absolute inset-0 w-full h-full object-cover"
                     loading="lazy"
                     onerror="this.src='https://placehold.co/640x960/f3efe6/2d5a27?text=Soleya+Reiki'">
            </div>

            <!-- Form panel -->
            <div class="benefits-panel text-white px-6 sm:px-10 lg:px-14 py-12 lg:py-14">
                <div class="max-w-xl mx-auto">

                    <div class="text-center">
                        <img src="/images/logo-soleya-reiki-256.png" alt="" class="w-14 h-14 rounded-full border border-soleya-gold object-cover mx-auto"
                             onerror="this.style.display='none'">
                        <h2 id="rdv-title" class="mt-5 font-serif font-medium leading-[1.05] tracking-tight text-[clamp(2.1rem,3.6vw,3rem)]">Demande de Rendez-vous en Ligne</h2>
                        <p class="mt-4 text-[16px] leading-relaxed text-white/90">Remplissez ce formulaire et Tatiana vous recontactera sous 24h pour confirmer le créneau.</p>
                    </div>

                    <form id="rdv-form" novalidate class="mt-9 space-y-4">

                            <div data-field data-rule="name">
                                <label for="rdv-name" class="sr-only">Nom et Prénom</label>
                                <input id="rdv-name" name="rdv-name" type="text" placeholder="Nom et Prénom *" class="rdv-field" autocomplete="name">
                                <p class="rdv-err" hidden></p>
                            </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div data-field data-rule="phone">
                                <label for="rdv-phone" class="sr-only">Téléphone</label>
                                <input id="rdv-phone" name="rdv-phone" type="tel" placeholder="Téléphone *" class="rdv-field" autocomplete="tel">
                                <p class="rdv-err" hidden></p>
                            </div>
                            <div data-field data-rule="email">
                                <label for="rdv-email" class="sr-only">Adresse Email</label>
                                <input id="rdv-email" name="rdv-email" type="email" placeholder="Adresse Email *" class="rdv-field" autocomplete="email">
                                <p class="rdv-err" hidden></p>
                            </div>
                        </div>

                        <div data-field data-rule="service">
                            <label for="rdv-service" class="sr-only">Prestation souhaitée</label>
                            <div class="relative">
                                <select id="rdv-service" name="rdv-service" class="rdv-field is-empty">
                                    <option value="" selected>Prestation souhaitée *</option>
                                    <option value="Séance Reiki - 50€">Séance Reiki (50 € - ~1h)</option>
                                    <option value="Forfait Bien-Être - 150€">Forfait Bien-Être (150 € - 4 séances)</option>
                                    <option value="Reiki À Distance - 40€">Reiki À Distance (40 € - ~45-60 min)</option>
                                    <option value="Bon Cadeau">Bon Cadeau (À partir de 50 €)</option>
                                    <option value="Renseignements">Renseignements généraux</option>
                                </select>
                                <i data-lucide="chevron-down" class="pointer-events-none absolute right-5 top-1/2 -translate-y-1/2 w-5 h-5"></i>
                            </div>
                            <p class="rdv-err" hidden></p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="rdv-date" class="sr-only">Date souhaitée</label>
                                <input id="rdv-date" name="rdv-date" type="date" class="rdv-field" aria-label="Date souhaitée">
                            </div>
                            <div>
                                <label for="rdv-slot" class="sr-only">Créneau préféré</label>
                                <div class="relative">
                                    <select id="rdv-slot" name="rdv-slot" class="rdv-field is-empty">
                                        <option value="" selected>Créneau préféré</option>
                                        <option value="Matin">Matin (9h - 12h)</option>
                                        <option value="Apres-midi">Après-midi (14h - 17h)</option>
                                        <option value="Fin de journée">Fin de journée (17h - 19h)</option>
                                    </select>
                                    <i data-lucide="chevron-down" class="pointer-events-none absolute right-5 top-1/2 -translate-y-1/2 w-5 h-5"></i>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="rdv-message" class="sr-only">Votre message ou précisions</label>
                            <textarea id="rdv-message" name="rdv-message" rows="4" placeholder="Votre Message / Précisions : mentionnez toute information utile concernant vos attentes ou questions..." class="rdv-field"></textarea>
                        </div>

                        <button type="submit" class="w-full inline-flex items-center justify-center gap-3 rounded-full bg-white text-soleya-forest px-8 py-4 text-[15px] font-semibold shadow-lg hover:bg-soleya-cream hover:-translate-y-0.5 transition-all">
                            <i data-lucide="send" class="w-5 h-5"></i>
                            <span>Envoyer ma Demande de Rendez-vous</span>
                        </button>
                    </form>

                    <p class="mt-4 text-center text-xs leading-relaxed text-white/75">
                        Vos coordonnées et préférences servent à traiter votre demande de rendez-vous. <a href="/politique-de-confidentialite/" class="underline underline-offset-4 hover:text-white">Lire la politique de confidentialité</a>.
                    </p>

                    <!-- Success message -->
                    <div id="rdv-success" hidden role="status" aria-live="polite" class="mt-5 rounded-2xl bg-white text-soleya-forest p-5 text-center">
                        <i data-lucide="check-circle" class="w-7 h-7 mx-auto mb-2"></i>
                        <p class="font-semibold">Merci ! Votre message a bien été envoyé.</p>
                        <p class="text-sm mt-1 text-slate-600">Tatiana vous recontactera très prochainement pour valider le rendez-vous.</p>
                    </div>

                    <p class="mt-6 text-center text-sm text-white/85">
                        Vous préférez échanger de vive voix ?
                        <a href="tel:0650042216" class="font-semibold text-white underline underline-offset-4 decoration-soleya-gold hover:text-soleya-lightGold">06 50 04 22 16</a>
                    </p>
                    <p class="mt-4 text-center text-sm text-white/85">
                        <a href="#services" class="underline underline-offset-4 decoration-soleya-gold hover:text-soleya-lightGold">Consulter les prestations</a>
                        <span class="mx-2" aria-hidden="true">·</span>
                        <a href="#a-propos" class="underline underline-offset-4 decoration-soleya-gold hover:text-soleya-lightGold">À propos de Tatiana</a>
                    </p>
                </div>
            </div>
        </div>

        <script>
            (function () {
                const form = document.getElementById('rdv-form');
                const success = document.getElementById('rdv-success');
                const dateInput = document.getElementById('rdv-date');
                let hideTimer = null;

                // No past dates
                const t = new Date();
                dateInput.min = t.getFullYear() + '-' + String(t.getMonth() + 1).padStart(2, '0') + '-' + String(t.getDate()).padStart(2, '0');

                const rules = {
                    name:    (v) => v.trim().length >= 2 ? '' : 'Le nom et le prénom sont requis.',
                    phone:   (v) => v.replace(/\D/g, '').length >= 8 ? '' : 'Ce champ est requis. Veuillez saisir un numéro de téléphone.',
                    email:   (v) => /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(v.trim()) ? '' : 'Veuillez saisir une adresse email valide.',
                    service: (v) => v ? '' : 'Veuillez choisir une prestation.'
                };

                function check(wrap) {
                    const control = wrap.querySelector('input, select');
                    const err = wrap.querySelector('.rdv-err');
                    const msg = rules[wrap.dataset.rule](control.value);
                    control.classList.toggle('invalid', !!msg);
                    control.setAttribute('aria-invalid', msg ? 'true' : 'false');
                    err.textContent = msg;
                    err.hidden = !msg;
                    return !msg;
                }

                const wraps = Array.from(form.querySelectorAll('[data-field]'));
                wraps.forEach((w) => {
                    const c = w.querySelector('input, select');
                    c.addEventListener('input', () => { if (c.classList.contains('invalid')) check(w); });
                    c.addEventListener('change', () => { if (c.classList.contains('invalid')) check(w); });
                });

                // Grey placeholder look on empty selects
                form.querySelectorAll('select').forEach((sel) => {
                    const sync = () => sel.classList.toggle('is-empty', !sel.value);
                    sel.addEventListener('change', sync);
                    sel.__sync = sync;
                });

               form.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    let firstBad = null;
                    wraps.forEach((w) => {
                        if (!check(w) && !firstBad) firstBad = w.querySelector('input, select');
                    });
                    if (firstBad) { firstBad.focus(); return; }

                    // Send appointment requests to the site's existing Formspree endpoint.

const data = new FormData(form);
data.append('_subject', 'Nouvelle demande de rendez-vous — Soleya Reiki');

const submitButton = form.querySelector('[type="submit"]');
if (submitButton) submitButton.disabled = true;

try {
    const response = await fetch('https://formspree.io/f/xbgdkoey', {
        method: 'POST',
        body: data,
        headers: { Accept: 'application/json' }
    });

    if (!response.ok) {
        throw new Error('Form submission failed');
    }

    form.reset();
    form.querySelectorAll('select').forEach((sel) => sel.__sync && sel.__sync());
    success.textContent = 'Votre demande de rendez-vous a bien été envoyée. Tatiana reviendra vers vous pour confirmer le créneau.';
    success.hidden = false;
} catch (error) {
    success.textContent = 'Votre demande n’a pas pu être envoyée. Veuillez réessayer ou contacter Tatiana directement.';
    success.hidden = false;
} finally {
    if (submitButton) submitButton.disabled = false;
}

                });
            })();
        </script>
    </section>
    </div>




    
SOLEYA_HTML;
echo str_replace('src="/images/', 'src="' . esc_url( soleya_asset( 'images/' ) ), $html);
