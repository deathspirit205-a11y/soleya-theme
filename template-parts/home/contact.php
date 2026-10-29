<?php
$html = <<<'SOLEYA_HTML'
<!-- ============ CONTACT ============ -->

    <div class="page-view" data-page="contact" id="page-contact">
<section id="contact" class="contact-bg relative overflow-hidden py-20 lg:py-28">

        <!-- Golden dust -->
        <div id="speckles-contact" class="absolute inset-0 pointer-events-none" aria-hidden="true"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Contact heading -->
            <div class="text-center max-w-3xl mx-auto">
                <p class="inline-flex items-center gap-2 text-sm tracking-wide text-soleya-forest font-medium">
                    Prendre Contact
                    <span class="w-1.5 h-1.5 rounded-full bg-soleya-gold"></span>
                </p>
                <h2 class="mt-3 font-serif font-medium text-soleya-forest leading-[1.02] tracking-tight text-[clamp(2.75rem,6vw,5rem)]">
                    Prenez Votre Temps Pour Vous
                </h2>
                <p class="mt-5 text-[17px] leading-relaxed text-slate-700 font-light">
                    Une question, une envie de séance ou simplement besoin d'échanger ? Envoyez-moi votre message et je vous recontacterai avec plaisir.
                </p>
                <div class="mt-5 flex flex-wrap justify-center gap-x-6 gap-y-2 text-sm font-semibold">
                    <a href="#services" class="text-soleya-forest underline underline-offset-4 decoration-soleya-darkGold hover:text-soleya-sage">Consulter les prestations et tarifs</a>
                    <a href="#a-propos" class="text-soleya-forest underline underline-offset-4 decoration-soleya-darkGold hover:text-soleya-sage">Découvrir Tatiana et son approche</a>
                </div>
            </div>

            <!-- PHOTO + MESSAGE FORM : layout inspired by the supplied reference -->
            <div class="mt-14 max-w-6xl mx-auto overflow-hidden rounded-[2rem] shadow-2xl shadow-soleya-navy/15 border border-soleya-darkGold/15 bg-[#40594f]">
                <div class="grid grid-cols-1 lg:grid-cols-12 min-h-[620px]">

                    <!-- Left photo -->
                    <div class="lg:col-span-5 relative min-h-[430px] lg:min-h-full bg-soleya-beige">
                        <img
                            src="https://i.ibb.co/Vpg4Sprj/813519933-2180685766187549-1753717609699295218-n.jpg"
                            alt="Soin bien-être et relaxation"
                            class="absolute inset-0 w-full h-full object-cover"
                            loading="lazy"
                            onerror="this.src='https://placehold.co/700x900/f3efe6/2d5a27?text=Soin+Bien-%C3%AAtre'">

                        <!-- Soft photo overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-soleya-navy/35 via-transparent to-transparent"></div>

                        <div class="absolute left-5 right-5 bottom-5 sm:left-7 sm:right-7 sm:bottom-7">
                            <div class="inline-flex items-center gap-2 rounded-full bg-white/90 backdrop-blur-sm border border-white/70 px-4 py-2 text-sm font-medium text-soleya-navy shadow-lg">
                                <i data-lucide="sparkles" class="w-4 h-4 text-soleya-darkGold"></i>
                                <span>Bien-être &amp; Sérénité</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right message form -->
                    <div class="lg:col-span-7 bg-[#40594f] px-6 py-10 sm:px-10 lg:px-14 lg:py-12 text-white flex items-center">
                        <div class="w-full max-w-2xl mx-auto">

                            <div class="text-center">
                                <div class="flex justify-center mb-5">
                                    <div class="w-14 h-14 rounded-full border border-white/60 flex items-center justify-center">
                                        <i data-lucide="heart-handshake" class="w-7 h-7 text-white/90" stroke-width="1.4"></i>
                                    </div>
                                </div>
                                <h3 class="font-serif text-[clamp(2.5rem,5vw,4.2rem)] leading-none font-medium">
                                    Écrivez-moi
                                </h3>
                                <p class="mt-4 text-sm sm:text-[15px] text-white/85 leading-relaxed">
                                    Votre demande peut concerner une séance, les tarifs, le Reiki à distance ou toute autre question.
                                </p>
                            </div>

                            <form id="contact-message-form" class="mt-8 space-y-4" novalidate>

                                <!-- Name -->
                                <div>
                                    <label for="contact-name" class="sr-only">Votre nom</label>
                                    <input
                                        id="contact-name"
                                        name="contact-name"
                                        type="text"
                                        autocomplete="name"
                                        placeholder="Votre Nom"
                                        class="contact-field"
                                        required>
                                </div>

                                <!-- Phone + Email -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label for="contact-phone" class="sr-only">Votre téléphone</label>
                                        <input
                                            id="contact-phone"
                                            name="contact-phone"
                                            type="tel"
                                            autocomplete="tel"
                                            placeholder="Votre Téléphone"
                                            class="contact-field"
                                            required>
                                    </div>
                                    <div>
                                        <label for="contact-email" class="sr-only">Votre email</label>
                                        <input
                                            id="contact-email"
                                            name="contact-email"
                                            type="email"
                                            autocomplete="email"
                                            placeholder="Votre Email"
                                            class="contact-field"
                                            required>
                                    </div>
                                </div>

                                <!-- Subject -->
                                <div class="relative">
                                    <label for="contact-subject" class="sr-only">Objet</label>
                                    <select id="contact-subject" name="contact-subject" class="contact-field contact-select" required>
                                        <option value="">Choisissez un sujet</option>
                                        <option value="Séance Reiki">Séance Reiki</option>
                                        <option value="Forfait Bien-Être">Forfait Bien-Être</option>
                                        <option value="Reiki à Distance">Reiki à Distance</option>
                                        <option value="Bon Cadeau">Bon Cadeau</option>
                                        <option value="Question générale">Question générale</option>
                                    </select>
                                    <i data-lucide="chevron-down" class="absolute right-5 top-1/2 -translate-y-1/2 w-5 h-5 pointer-events-none text-white/90"></i>
                                </div>

                                <!-- Message -->
                                <div>
                                    <label for="contact-message" class="sr-only">Votre message</label>
                                    <textarea
                                        id="contact-message"
                                        name="contact-message"
                                        rows="4"
                                        placeholder="Votre Message"
                                        class="contact-field contact-textarea"
                                        required></textarea>
                                </div>

                                <button
                                    type="submit"
                                    class="w-full inline-flex items-center justify-center gap-3 rounded-full bg-white text-[#40594f] px-8 py-4 text-[15px] font-semibold shadow-lg hover:bg-soleya-cream hover:-translate-y-0.5 transition-all">
                                    <i data-lucide="send" class="w-5 h-5"></i>
                                    <span>Envoyer mon Message</span>
                                </button>
                            </form>

                            <p class="mt-4 text-center text-xs leading-relaxed text-white/75">
                                Les informations envoyées servent uniquement à répondre à votre demande. <a href="/politique-de-confidentialite/" class="underline underline-offset-4 hover:text-white">Lire la politique de confidentialité</a>.
                            </p>

                            <!-- Success message -->
                            <div id="contact-message-success" hidden role="status" aria-live="polite" class="mt-5 rounded-2xl bg-white text-soleya-forest p-5 text-center">
                                <i data-lucide="check-circle" class="w-7 h-7 mx-auto mb-2"></i>
                                <p class="font-semibold">Merci ! Votre message a bien été enregistré.</p>
                                <p class="text-sm mt-1 text-slate-600">Tatiana vous recontactera prochainement.</p>
                            </div>

                            <p class="mt-5 text-center text-sm text-white/80">
                                Vous préférez appeler directement ?
                                <a href="tel:0650042216" class="font-semibold text-white underline underline-offset-4 decoration-soleya-gold hover:text-soleya-lightGold">
                                    06 50 04 22 16
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Existing contact information -->
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">

                <!-- Téléphone -->
                <article class="flex flex-col items-center text-center rounded-[2rem] bg-white/85 backdrop-blur-sm border border-white px-7 sm:px-9 py-9 shadow-xl shadow-soleya-navy/5">
                    <i data-lucide="phone" class="w-12 h-12 text-soleya-darkGold" stroke-width="1"></i>
                    <h3 class="mt-4 font-serif text-[2.2rem] leading-none font-medium text-soleya-navy">Téléphone</h3>
                    <ul class="dot-list mt-6 text-[16px] leading-snug text-slate-700">
                        <li><a href="tel:0650042216" class="font-serif text-2xl font-semibold text-soleya-forest hover:text-soleya-sage transition-colors">06 50 04 22 16</a></li>
                        <li>Appel ou SMS pour prise de rendez-vous rapide</li>
                    </ul>
                </article>

                <!-- Localisation -->
                <article class="flex flex-col items-center text-center rounded-[2rem] bg-white/85 backdrop-blur-sm border border-white px-7 sm:px-9 py-9 shadow-xl shadow-soleya-navy/5">
                    <i data-lucide="map-pin" class="w-12 h-12 text-soleya-darkGold" stroke-width="1"></i>
                    <h3 class="mt-4 font-serif text-[2.2rem] leading-none font-medium text-soleya-navy">Localisation</h3>
                    <ul class="dot-list mt-6 text-[16px] leading-snug text-slate-700">
                        <li class="font-semibold text-soleya-navy">La Guerche-de-Bretagne (35130)</li>
                        <li>Ille-et-Vilaine, Bretagne</li>
                    </ul>
                </article>

                <!-- Horaires -->
                <article class="flex flex-col items-center text-center rounded-[2rem] bg-white/85 backdrop-blur-sm border border-white px-7 sm:px-9 py-9 shadow-xl shadow-soleya-navy/5">
                    <i data-lucide="clock" class="w-12 h-12 text-soleya-darkGold" stroke-width="1"></i>
                    <h3 class="mt-4 font-serif text-[2.2rem] leading-none font-medium text-soleya-navy">Horaires</h3>
                    <ul class="dot-list mt-6 text-[16px] leading-snug text-slate-700">
                        <li class="font-semibold text-soleya-navy">Du Lundi au Samedi sur RDV</li>
                        <li>Matin (9h - 12h)</li>
                        <li>Après-midi (14h - 17h)</li>
                        <li>Fin de journée (17h - 19h)</li>
                    </ul>
                </article>
            </div>

            <!-- Booking CTA -->
            <div class="mt-10 flex flex-col items-center text-center gap-4">
                <button onclick="openBookingModal()" class="inline-flex items-center justify-center gap-3 rounded-full bg-soleya-forest text-white px-9 py-4 text-[15px] font-semibold shadow-lg shadow-soleya-forest/25 hover:bg-soleya-sage hover:-translate-y-0.5 transition-all">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                    <span>Prendre Rendez-vous</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-soleya-lightGold"></span>
                </button>
                <p class="text-sm text-slate-600">Tatiana vous recontactera sous 24h pour confirmer le créneau.</p>
            </div>
        </div>

        <script>
            (function () {
                const box = document.getElementById('speckles-contact');
                let seed = 47;
                const rnd = () => (seed = (seed * 16807) % 2147483647) / 2147483647;
                for (let i = 0; i < 60; i++) {
                    const s = document.createElement('span');
                    s.className = 'speck';
                    const size = 1 + rnd() * 2.6;
                    s.style.width = s.style.height = size + 'px';
                    s.style.left = (rnd() * 100) + '%';
                    s.style.top = (rnd() * 100) + '%';
                    s.style.opacity = (0.15 + rnd() * 0.5).toFixed(2);
                    box.appendChild(s);
                }

                // Message form interaction
                const form = document.getElementById('contact-message-form');
                const success = document.getElementById('contact-message-success');

                if (form && success) {
                    form.addEventListener('submit', async (e) => {
                        e.preventDefault();

                        const name = document.getElementById('contact-name');
                        const phone = document.getElementById('contact-phone');
                        const email = document.getElementById('contact-email');
                        const subject = document.getElementById('contact-subject');
                        const message = document.getElementById('contact-message');

                        const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(email.value.trim());
                        const phoneOk = phone.value.replace(/\D/g, '').length >= 8;
                        const nameOk = name.value.trim().length >= 2;
                        const subjectOk = !!subject.value;
                        const messageOk = message.value.trim().length >= 3;

                        [name, phone, email, subject, message].forEach((field) => {
                            field.classList.remove('contact-invalid');
                        });

                        if (!nameOk) name.classList.add('contact-invalid');
                        if (!phoneOk) phone.classList.add('contact-invalid');
                        if (!emailOk) email.classList.add('contact-invalid');
                        if (!subjectOk) subject.classList.add('contact-invalid');
                        if (!messageOk) message.classList.add('contact-invalid');

                        if (!nameOk || !phoneOk || !emailOk || !subjectOk || !messageOk) {
                            const firstInvalid = [name, phone, email, subject, message].find((field) => field.classList.contains('contact-invalid'));
                            if (firstInvalid) firstInvalid.focus();
                            return;
                        }


const data = new FormData(form);
data.append('_subject', 'Nouvelle demande — Soleya Reiki');

const submitButton = form.querySelector('[type="submit"]');
if (submitButton) submitButton.disabled = true;

try {
    const response = await fetch('https://formspree.io/f/xbgdkoey', {
        method: 'POST',
        body: data,
        headers: {
            Accept: 'application/json'
        }
    });

    if (!response.ok) {
        throw new Error('Form submission failed');
    }

    form.reset();
    success.textContent = 'Votre message a bien été envoyé. Merci pour votre confiance.';
    success.hidden = false;
} catch (error) {
    success.textContent = 'Votre message n’a pas pu être envoyé. Veuillez réessayer ou nous contacter directement.';
    success.hidden = false;
} finally {
    if (submitButton) submitButton.disabled = false;
}

                    });
                }
            })();
        </script>
    </section>
    </div>




SOLEYA_HTML;
echo str_replace('src="/images/', 'src="' . esc_url( soleya_asset( 'images/' ) ), $html);
