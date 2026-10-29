<style>
        /* ---------- Shared utilities (kept from original) ---------- */
        .gold-btn {
            background: linear-gradient(135deg, #d4af37 0%, #c5a059 100%);
            transition: all 0.3s ease;
        }
        .gold-btn:hover {
            background: linear-gradient(135deg, #e5be48 0%, #d4af37 100%);
            box-shadow: 0 10px 25px -5px rgba(212, 175, 55, 0.4);
            transform: translateY(-2px);
        }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #425a50; }
        ::-webkit-scrollbar-thumb { background: #c5a059; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #d4af37; }

        /* ---------- New hero styles ---------- */
        .hero-card {
            background:
                radial-gradient(60% 70% at 8% 12%, rgba(244, 232, 193, 0.75) 0%, rgba(244, 232, 193, 0) 70%),
                radial-gradient(45% 55% at 100% 0%, rgba(232, 214, 200, 0.55) 0%, rgba(232, 214, 200, 0) 70%),
                linear-gradient(180deg, #fdfcf9 0%, #f7f3ea 100%);
        }

        .speck {
            position: absolute;
            border-radius: 9999px;
            background: #b98a3e;
        }

        /* Home Reiki feature photo - soft organic arch like the reference layout */
        .home-reiki-feature-photo {
            border-radius: 12rem 12rem 2rem 2rem;
        }
        .home-reiki-feature-photo img {
            transition: transform .8s cubic-bezier(.22, 1, .36, 1);
        }
        .home-reiki-feature-photo:hover img {
            transform: scale(1.025);
        }
        @media (max-width: 1023px) {
            .home-reiki-feature-photo {
                border-radius: 8rem 8rem 1.5rem 1.5rem;
            }
        }
        @media (max-width: 639px) {
            .home-reiki-feature-photo {
                border-radius: 6rem 6rem 1.25rem 1.25rem;
            }
        }

        /* Second Reiki feature - soft organic shape inspired by the reference layout */
        .home-reiki-feature-2-photo {
            border-radius: 2rem 11rem 11rem 2rem;
        }
        .home-reiki-feature-2-photo img {
            transition: transform .8s cubic-bezier(.22, 1, .36, 1);
        }
        .home-reiki-feature-2-photo:hover img {
            transform: scale(1.025);
        }
        @media (max-width: 1023px) {
            .home-reiki-feature-2-photo {
                border-radius: 2rem 8rem 8rem 2rem;
            }
        }
        @media (max-width: 639px) {
            .home-reiki-feature-2-photo {
                border-radius: 1.5rem 5rem 5rem 1.5rem;
            }
        }

        /* Arch-shaped photo */
        .arch {
            border-radius: 999px 999px 1.75rem 1.75rem;
        }

        /* The one orchestrated moment: the arch opens upward on load */
        @keyframes arch-open {
            from { clip-path: inset(100% 0 0 0 round 999px 999px 28px 28px); }
            to   { clip-path: inset(0 0 0 0 round 999px 999px 28px 28px); }
        }
        .arch-photo {
            animation: arch-open 1.3s cubic-bezier(0.22, 1, 0.36, 1) both;
        }
        @keyframes soft-in {
            from { opacity: 0; }
            to   { opacity: 1; }
        }
        .soft-in { animation: soft-in 1s ease 0.9s both; }

        @media (prefers-reduced-motion: reduce) {
            .arch-photo, .soft-in { animation: none; }
        }

        .nav-link { position: relative; }
        .nav-link::after {
            content: "";
            position: absolute; left: 0; right: 0; bottom: -6px;
            height: 1px; background: #c5a059;
            transform: scaleX(0); transform-origin: left;
            transition: transform .3s ease;
        }
        .nav-link:hover::after, .nav-link.active::after { transform: scaleX(1); }

        /* ---------- Galerie (draggable, auto-scrolling carousel) ---------- */
        #galerie { scroll-margin-top: 6rem; }

        .gal-bg {
            background:
                radial-gradient(40% 45% at 0% 100%, rgba(244, 232, 193, 0.55) 0%, rgba(244, 232, 193, 0) 70%),
                linear-gradient(180deg, #faf8f3 0%, #ffffff 100%);
        }
        .gal-viewport { overflow: hidden; contain: layout paint; touch-action: pan-y; cursor: grab; user-select: none; -webkit-user-select: none; }
        .gal-viewport.grabbing { cursor: grabbing; }
        .gal-track { display: flex; align-items: flex-start; gap: 24px; width: max-content; padding: 6px 12px 18px; will-change: transform; }
        .gal-card { flex: 0 0 auto; width: 290px; }
        @media (min-width: 640px) { .gal-card { width: 320px; } }

        .gal-reveal { opacity: 0; transform: translateY(28px); transition: opacity .9s ease, transform .9s cubic-bezier(.22, 1, .36, 1); }
        .gal-reveal.in { opacity: 1; transform: none; }
        @media (prefers-reduced-motion: reduce) {
            .gal-reveal { opacity: 1; transform: none; transition: none; }
        }

        /* ---------- Formulaire de rendez-vous ---------- */
        #rendez-vous { scroll-margin-top: 6rem; }
        .rdv-field {
            width: 100%;
            background: transparent;
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.75);
            border-radius: 9999px;
            padding: 0.95rem 1.5rem;
            font-size: 15px;
            outline: none;
            transition: border-color .2s ease, background-color .2s ease, box-shadow .2s ease;
        }
        .rdv-field::placeholder { color: rgba(255, 255, 255, 0.78); }
        .rdv-field:focus { border-color: #f4e8c1; background: rgba(255, 255, 255, 0.08); box-shadow: 0 0 0 3px rgba(244, 232, 193, 0.25); }
        .rdv-field.invalid { border-color: #f4b4b4; }
        .rdv-field.is-empty { color: rgba(255, 255, 255, 0.78); }
        select.rdv-field { appearance: none; -webkit-appearance: none; padding-right: 3rem; cursor: pointer; }
        select.rdv-field option { color: #425a50; background: #ffffff; }
        input[type="date"].rdv-field { color-scheme: dark; }
        textarea.rdv-field { border-radius: 1.5rem; min-height: 7rem; resize: vertical; }
        .rdv-err { background: #f9e4e6; color: #5b1f27; font-size: 12px; line-height: 1.3; padding: 0.4rem 0.75rem; margin-top: 0.35rem; border-radius: 0.35rem; }

        /* ---------- Avis ---------- */
        #why-soleya { scroll-margin-top: 6rem; }

        /* ---------- Contact message form ---------- */
        .contact-field {
            width: 100%;
            background: transparent;
            color: #ffffff;
            border: 1px solid rgba(255,255,255,0.78);
            border-radius: 9999px;
            padding: 0.95rem 1.5rem;
            font-size: 15px;
            outline: none;
            transition: border-color .2s ease, background-color .2s ease, box-shadow .2s ease;
        }
        .contact-field::placeholder { color: rgba(255,255,255,0.78); }
        .contact-field:focus {
            border-color: #f4e8c1;
            background: rgba(255,255,255,0.08);
            box-shadow: 0 0 0 3px rgba(244,232,193,0.22);
        }
        .contact-field.contact-invalid { border-color: #ffb4b4; box-shadow: 0 0 0 2px rgba(255,180,180,0.14); }
        .contact-select {
            appearance: none;
            -webkit-appearance: none;
            padding-right: 3.25rem;
            cursor: pointer;
        }
        .contact-select option { color: #425a50; background: #ffffff; }
        .contact-textarea {
            min-height: 8rem;
            border-radius: 1.5rem;
            resize: vertical;
        }

        /* ---------- Contact ---------- */
        #contact { scroll-margin-top: 6rem; }

        .contact-bg {
            background:
                radial-gradient(40% 50% at 100% 62%, rgba(244, 220, 140, 0.55) 0%, rgba(244, 220, 140, 0) 70%),
                radial-gradient(55% 45% at 8% 14%, rgba(214, 208, 220, 0.45) 0%, rgba(214, 208, 220, 0) 70%),
                radial-gradient(45% 40% at 62% 0%, rgba(232, 214, 200, 0.5) 0%, rgba(232, 214, 200, 0) 70%),
                linear-gradient(180deg, #f6f2ea 0%, #faf8f3 100%);
        }

        /* Small gold dot between lines, as in the reference */
        .dot-list li + li::before {
            content: "";
            display: block;
            width: 4px; height: 4px;
            margin: 0.7rem auto;
            border-radius: 9999px;
            background: #c5a059;
        }

        /* ---------- Prestations (tabs) ---------- */
        .presta-tab {
            background: #f4f1ec;
            color: #425a50;
            transition: background-color .25s ease, color .25s ease, transform .25s ease;
        }
        .presta-tab:hover { transform: translateX(4px); }
        .presta-tab .presta-ico { color: #c5a059; transition: color .25s ease; }
        .presta-tab.presta-tab-on { background: #4f6b5d; color: #ffffff; transform: none; box-shadow: 0 12px 24px -12px rgba(79, 107, 93, 0.55); }
        .presta-tab.presta-tab-on .presta-ico { color: #f4e8c1; }

        .presta-panel[hidden] { display: none; }
        .presta-panel:not([hidden]) { animation: presta-in .55s cubic-bezier(.22, 1, .36, 1) both; }
        @keyframes presta-in {
            from { opacity: 0; transform: translateY(14px); }
            to   { opacity: 1; transform: none; }
        }
        @media (prefers-reduced-motion: reduce) {
            .presta-panel:not([hidden]) { animation: none; }
            .presta-tab, .presta-tab:hover { transition: none; transform: none; }
        }

        /* ---------- Services & Bienfaits ---------- */
        #services, #bienfaits { scroll-margin-top: 6rem; }

        .services-bg {
            background:
                radial-gradient(45% 40% at 0% 100%, rgba(244, 232, 193, 0.65) 0%, rgba(244, 232, 193, 0) 70%),
                linear-gradient(180deg, #f8f1e6 0%, #fbf9f5 40%, #ffffff 100%);
        }

        .benefits-panel {
            background:
                radial-gradient(60% 50% at 0% 0%, rgba(255, 255, 255, 0.12) 0%, rgba(255, 255, 255, 0) 70%),
                radial-gradient(50% 40% at 100% 100%, rgba(244, 232, 193, 0.16) 0%, rgba(244, 232, 193, 0) 70%),
                linear-gradient(135deg, #425a50 0%, #637c6e 55%, #4f6b5d 100%);
        }

        /* ---------- À Propos ---------- */
        #accueil, #a-propos { scroll-margin-top: 6rem; }

        .about-bg {
            background:
                radial-gradient(50% 45% at 100% 100%, rgba(244, 232, 193, 0.7) 0%, rgba(244, 232, 193, 0) 70%),
                linear-gradient(180deg, #ffffff 0%, #fbf9f5 60%, #f8f1e6 100%);
        }

        /* One big rounded corner, like the reference */
        .about-photo {
            border-radius: 1.75rem clamp(6rem, 22vw, 13rem) 1.75rem 1.75rem;
        }

        .script-font {
            font-family: 'Allura', 'Cormorant Garamond', cursive;
        }

        a:focus-visible, button:focus-visible {
            outline: 2px solid #c5a059;
            outline-offset: 3px;
        }


        /* ---------- Reiki pillars section (Home, directly below hero) ---------- */
        .reiki-pillars-bg {
            background:
                radial-gradient(45% 55% at 0% 20%, rgba(244, 232, 193, 0.72) 0%, rgba(244, 232, 193, 0) 70%),
                radial-gradient(40% 50% at 100% 75%, rgba(232, 214, 200, 0.55) 0%, rgba(232, 214, 200, 0) 70%),
                linear-gradient(180deg, #faf8f3 0%, #f6f2ea 100%);
        }
        .reiki-pillar-card {
            position: relative;
            background: rgba(255,255,255,0.88);
            border: 1px solid rgba(197,160,89,0.16);
            border-radius: 2rem;
            box-shadow: 0 18px 45px -28px rgba(66,90,80,0.30);
            backdrop-filter: blur(7px);
            -webkit-backdrop-filter: blur(7px);
            transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
        }
        .reiki-pillar-card:hover {
            transform: translateY(-7px);
            border-color: rgba(197,160,89,0.38);
            box-shadow: 0 24px 55px -28px rgba(66,90,80,0.38);
        }
        .reiki-pillar-icon {
            width: 4rem;
            height: 4rem;
            border-radius: 9999px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #c5a059;
            border: 1px solid rgba(197,160,89,0.38);
            background: rgba(255,255,255,0.72);
        }
        @media (max-width: 639px) {
            .reiki-pillar-card { border-radius: 1.5rem; }
            .reiki-pillar-icon { width: 3.5rem; height: 3.5rem; }
        }

        /* =========================================================
           SINGLE-FILE MULTI-PAGE SYSTEM
           All "pages" live in this one HTML file.
        ========================================================= */
        .page-view{
            display:none;
            animation: soleyaPageIn .38s ease both;
        }
        .page-view.active-page{
            display:block;
        }
        @keyframes soleyaPageIn{
            from{opacity:0;transform:translateY(10px)}
            to{opacity:1;transform:translateY(0)}
        }
        .nav-link.active{
            color:#d4af37 !important;
        }
        .nav-link.active::after{
            content:"";
            position:absolute;
            left:0;
            right:0;
            bottom:-6px;
            height:1px;
            background:#d4af37;
        }

        /* ---------- Bottom CTA - Soleya style ---------- */
        .soleya-bottom-cta {
            background:
                radial-gradient(70% 100% at 50% 0%, rgba(197,160,89,0.14) 0%, rgba(197,160,89,0) 65%),
                linear-gradient(135deg, #4f6b5d 0%, #354c41 100%);
            border-radius: 1.5rem;
            box-shadow: 0 24px 55px -28px rgba(66,90,80,0.42);
        }
        .soleya-bottom-cta-inner {
            border: 1px solid rgba(244,232,193,0.24);
            border-radius: 1.15rem;
        }
        .soleya-bottom-cta-btn {
            background: #c5a059;
            color: #425a50;
            transition: transform .25s ease, background-color .25s ease, box-shadow .25s ease;
        }
        .soleya-bottom-cta-btn:hover {
            background: #f4e8c1;
            transform: translateY(-2px);
            box-shadow: 0 12px 25px -12px rgba(0,0,0,0.45);
        }
        @media (max-width: 639px) {
            .soleya-bottom-cta { border-radius: 1rem; }
            .soleya-bottom-cta-inner { border-radius: .8rem; }
        }


        /* ---------- Home 7 Days reference section ---------- */
        /* Home wellness section inspired by the supplied reference */
        .home-wellness-section {
            position: relative;
            background: radial-gradient(45% 60% at 90% 20%, rgba(244, 232, 193, 0.34) 0%, rgba(244, 232, 193, 0) 72%), linear-gradient(180deg, #ffffff 0%, #fbf8f1 100%);
        }
        .home-wellness-photo { position: relative; width: 100%; max-width: 560px; margin: 0 auto; border-radius: 0 34px 34px 34px; overflow: hidden; box-shadow: 0 22px 55px rgba(42, 63, 45, 0.16); background: #f3efe6; }
        .home-wellness-photo::after { content: ""; position: absolute; inset: 14px; border: 1px solid rgba(255,255,255,.52); border-radius: 0 25px 25px 25px; pointer-events: none; }
        .home-wellness-photo img { display: block; width: 100%; aspect-ratio: 4 / 4.6; object-fit: cover; object-position: center; }
        .home-wellness-kicker { color: #b88d3d; letter-spacing: .22em; }
        .home-wellness-title { color: #4f6b5d; }
        .home-wellness-item { border-top: 1px solid rgba(184, 141, 61, .25); padding-top: 16px; }
        .home-wellness-icon { width: 42px; height: 42px; border-radius: 999px; background: rgba(79, 107, 93, .09); color: #4f6b5d; display: inline-flex; align-items: center; justify-content: center; flex: 0 0 auto; }
        @media (max-width: 640px) { .home-wellness-photo { border-radius: 0 24px 24px 24px; } .home-wellness-photo::after { inset: 10px; border-radius: 0 17px 17px 17px; } }

        .home-7days-section {
            position: relative;
            overflow: hidden;
            background:
                radial-gradient(45% 65% at 15% 35%, rgba(239, 205, 214, .48), transparent 72%),
                radial-gradient(42% 58% at 86% 70%, rgba(231, 220, 191, .42), transparent 70%),
                radial-gradient(35% 45% at 52% 8%, rgba(248, 229, 232, .62), transparent 72%),
                #faf9f6;
        }

        .home-7days-section::before,
        .home-7days-section::after {
            content: '';
            position: absolute;
            border-radius: 999px;
            filter: blur(34px);
            pointer-events: none;
        }

        .home-7days-section::before {
            width: 280px;
            height: 170px;
            left: -70px;
            top: 8%;
            background: rgba(244, 211, 218, .32);
            transform: rotate(-18deg);
        }

        .home-7days-section::after {
            width: 300px;
            height: 190px;
            right: -80px;
            bottom: 8%;
            background: rgba(232, 215, 177, .28);
            transform: rotate(18deg);
        }

        .home-7days-device {
            position: relative;
            width: min(100%, 390px);
            padding: 14px;
            border: 2px solid rgba(201, 169, 112, .55);
            border-radius: 1.35rem;
            background: rgba(255,255,255,.92);
            box-shadow: 0 22px 50px -24px rgba(66,90,80,.32);
        }

        .home-7days-device img {
            display: block;
            width: 100%;
            aspect-ratio: 4 / 5;
            object-fit: cover;
            border-radius: .15rem;
        }

        .home-7days-device::after {
            content: '';
            display: block;
            width: 21px;
            height: 21px;
            margin: 11px auto 1px;
            border: 2px solid rgba(120,120,120,.42);
            border-radius: 50%;
            background: #fff;
        }

        .home-7days-kicker {
            color: #a96832;
            letter-spacing: .19em;
        }

        .home-7days-title {
            color: #4f6b5d;
        }

        @media (max-width: 639px) {
            .home-7days-device { width: min(100%, 330px); padding: 11px; }
        }

    </style>
