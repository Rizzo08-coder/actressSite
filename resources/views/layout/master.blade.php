<!DOCTYPE html>
<html lang="it">
<head>
    <script>document.documentElement.className += ' js';</script>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') · Signora Maria</title>
    <meta name="description" content="Benvenuti nel sito ufficiale di Paola Rizzi: scopri gli spettacoli, le date e tutte le novità dell'iconica 'Signora Maria'.">

    {{-- Font arrotondato Fredoka (solo i pesi usati: 400 testo, 600 titoli) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&display=swap" rel="stylesheet">

    {{-- Iubenda — Cookie Solution (banner consenso) --}}
    <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {"siteId":4013213,"cookiePolicyId":91569812,"lang":"it","storage":{"useSiteId":true}};
    </script>
    <script type="text/javascript" src="https://cs.iubenda.com/autoblocking/4013213.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>

    @vite('resources/css/app.css')
</head>

<body class="bg-cocoa text-cream font-neutrafaceregular antialiased selection:bg-carrot selection:text-white">

<!-- ===================== NAVBAR ===================== -->
<nav class="fixed top-0 z-50 w-full bg-olive shadow-[0_6px_24px_-12px_rgba(0,0,0,0.6)]">
    <div class="mx-auto flex max-w-screen-xl items-center justify-between px-5 py-4 lg:px-8">
        <a href="{{ route('home') }}" class="flex items-baseline gap-3 group min-w-0">
            <span class="whitespace-nowrap font-neutrafacebold text-2xl lg:text-3xl leading-none text-white tracking-tight transition-transform group-hover:-rotate-1">SIGNORA MARIA</span>
            <span class="hidden xl:block font-neutrafacebold text-xs uppercase tracking-[0.3em] text-cocoa-deep/80 whitespace-nowrap">di Paola Rizzi</span>
        </a>

        <!-- Hamburger (mobile/tablet) -->
        <button id="menu-open" aria-controls="mobile-menu" aria-expanded="false" type="button"
                class="inline-flex items-center justify-center rounded-xl p-2.5 text-cocoa-deep transition hover:bg-white/20 lg:hidden">
            <span class="sr-only">Apri il menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>
            </svg>
        </button>

        <!-- Links (desktop) -->
        <ul class="hidden items-center gap-7 xl:gap-9 font-neutrafacebold text-[15px] uppercase tracking-wide text-cocoa-deep lg:flex">
            <li><a href="{{ route('home') }}"  class="nav-link @yield('home-nv')">Home</a></li>
            <li><a href="{{ route('show') }}"  class="nav-link @yield('spettacoli-nv')">Spettacoli</a></li>
            <li><a href="{{ route('event') }}" class="nav-link @yield('eventi-nv')">Calendario</a></li>
            <li><a href="{{ route('video') }}" class="nav-link @yield('video-nv')">Video</a></li>
            <li>
                <a href="{{ route('contact') }}" class="nav-link @yield('contatti-nv') rounded-full bg-cocoa-deep px-5 py-2.5 text-white transition hover:bg-ink">Contatti</a>
            </li>
        </ul>
    </div>
</nav>

<!-- ===================== MOBILE DRAWER ===================== -->
<div id="menu-backdrop" class="fixed inset-0 z-[55] hidden bg-black/50 opacity-0 transition-opacity duration-300 lg:hidden"></div>

<aside id="mobile-menu" aria-label="Menu di navigazione"
       class="fixed top-0 right-0 z-[60] h-screen w-72 max-w-[85vw] translate-x-full bg-cocoa-deep p-6 pt-8 shadow-2xl transition-transform duration-300 lg:hidden">
    <div class="mb-8 flex items-center justify-between">
        <span class="font-neutrafacebold text-2xl text-olive-light">SIGNORA MARIA</span>
        <button id="menu-close" aria-controls="mobile-menu" type="button"
                class="rounded-lg p-2 text-cream/70 transition hover:bg-white/10 hover:text-white">
            <span class="sr-only">Chiudi il menu</span>
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" d="M6 6l12 12M18 6L6 18"/>
            </svg>
        </button>
    </div>
    <ul class="space-y-1 font-neutrafacebold text-lg uppercase tracking-wide">
        <li><a href="{{ route('home') }}"  class="block rounded-xl px-4 py-3 transition hover:bg-white/10 @yield('home-nv-sm')">Home</a></li>
        <li><a href="{{ route('show') }}"  class="block rounded-xl px-4 py-3 transition hover:bg-white/10 @yield('spettacoli-nv-sm')">Spettacoli</a></li>
        <li><a href="{{ route('event') }}" class="block rounded-xl px-4 py-3 transition hover:bg-white/10 @yield('eventi-nv-sm')">Calendario</a></li>
        <li><a href="{{ route('video') }}" class="block rounded-xl px-4 py-3 transition hover:bg-white/10 @yield('video-nv-sm')">Video</a></li>
        <li class="pt-2"><a href="{{ route('contact') }}" class="block rounded-full bg-carrot px-4 py-3 text-center text-white transition hover:bg-carrot-dark @yield('contatti-nv-sm')">Contatti</a></li>
    </ul>
</aside>

<!-- ===================== PAGE BODY ===================== -->
<main class="pt-[76px]">
    @yield('body')
</main>

<!-- ===================== FOOTER ===================== -->
<footer class="bg-cocoa-deep">
    <div class="mx-auto w-full max-w-screen-xl px-6 py-14 lg:px-8">
        <div class="flex flex-col items-center justify-between gap-8 md:flex-row">
            <a href="{{ route('home') }}" class="font-neutrafacebold text-3xl text-olive-light">SIGNORA MARIA</a>

            <ul class="flex flex-wrap items-center justify-center gap-x-7 gap-y-3 font-neutrafacebold text-sm uppercase tracking-wide text-cream/70">
                <li><a href="{{ route('home') }}"  class="transition hover:text-carrot">Home</a></li>
                <li><a href="{{ route('show') }}"  class="transition hover:text-carrot">Spettacoli</a></li>
                <li><a href="{{ route('event') }}" class="transition hover:text-carrot">Calendario</a></li>
                <li><a href="{{ route('video') }}" class="transition hover:text-carrot">Video</a></li>
                <li><a href="{{ route('contact') }}" class="transition hover:text-carrot">Contatti</a></li>
            </ul>
        </div>

        <hr class="my-10 border-white/10"/>

        <div class="flex flex-col items-center justify-between gap-3 text-sm text-cream/50 sm:flex-row">
            <span>© {{ date('Y') }}. All Rights Reserved.</span>
            <span class="flex gap-5">
                <a href="https://www.iubenda.com/privacy-policy/91569812" class="iubenda-embed iubenda-noiframe transition hover:text-cream" title="Privacy Policy">Privacy Policy</a>
                <a href="https://www.iubenda.com/privacy-policy/91569812/cookie-policy" class="iubenda-embed iubenda-noiframe transition hover:text-cream" title="Cookie Policy">Cookie Policy</a>
            </span>
        </div>
    </div>
</footer>

{{-- Iubenda — loader per aprire Privacy/Cookie Policy come modale in pagina --}}
<script type="text/javascript">
    (function (w, d) {
        var loader = function () {
            var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0];
            s.src = "https://cdn.iubenda.com/iubenda.js";
            tag.parentNode.insertBefore(s, tag);
        };
        if (w.addEventListener) { w.addEventListener("load", loader, false); }
        else if (w.attachEvent) { w.attachEvent("onload", loader); }
        else { w.onload = loader; }
    })(window, document);
</script>

<script>
    // Reveal allo scroll (sostituisce AOS: nessuna libreria né CDN esterna).
    (function () {
        var els = document.querySelectorAll('[data-aos]');
        if (!('IntersectionObserver' in window)) {
            els.forEach(function (el) { el.classList.add('aos-in'); });
            return;
        }
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (en) {
                if (!en.isIntersecting) return;
                var el = en.target;
                var delay = el.getAttribute('data-aos-delay');
                if (delay) { el.style.transitionDelay = delay + 'ms'; }
                el.classList.add('aos-in');
                io.unobserve(el);
            });
        }, { rootMargin: '0px 0px -80px 0px' });
        els.forEach(function (el) { io.observe(el); });
    })();

    // Drawer di navigazione (mobile/tablet) — controllato a mano, niente Flowbite.
    (function () {
        var menu = document.getElementById('mobile-menu');
        var backdrop = document.getElementById('menu-backdrop');
        var openBtn = document.getElementById('menu-open');
        var closeBtn = document.getElementById('menu-close');
        if (!menu || !backdrop || !openBtn) return;

        function open() {
            menu.classList.remove('translate-x-full');
            menu.classList.add('translate-x-0');
            backdrop.classList.remove('hidden');
            requestAnimationFrame(function () { backdrop.classList.remove('opacity-0'); });
            openBtn.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';
        }
        function close() {
            menu.classList.add('translate-x-full');
            menu.classList.remove('translate-x-0');
            backdrop.classList.add('opacity-0');
            openBtn.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
            setTimeout(function () { backdrop.classList.add('hidden'); }, 300);
        }

        openBtn.addEventListener('click', open);
        if (closeBtn) closeBtn.addEventListener('click', close);
        backdrop.addEventListener('click', close);
        menu.querySelectorAll('a').forEach(function (a) { a.addEventListener('click', close); });
        document.addEventListener('keydown', function (e) { if (e.key === 'Escape') close(); });
    })();
</script>
</body>
</html>
