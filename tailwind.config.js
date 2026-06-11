/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        "./public/js/**/*.js"
    ],
    theme: {
        extend: {
            screens: {
                'all-screens': '100000px'
            },
            colors: {
                // ── Palette teatrale "Signora Maria" ──────────────────────────
                // Scheda calda e armoniosa: bruni, crema e arancio condividono
                // un sottotono caldo (~30°); l'olivo è il contrasto, desaturato
                // e leggermente più caldo per non risultare acido.

                // Olivo (navbar / accenti freddi) — chartreuse caldo e attenuato
                olive: {
                    DEFAULT: '#A2A826',
                    dark: '#868B16',
                    light: '#C4C955',
                },
                // Arancio (CTA / evidenze) — zucca calda, vivace ma non fluo
                carrot: {
                    DEFAULT: '#EF7B1C',
                    dark: '#D2680E',
                    light: '#FF9D44',
                },
                // Bruni (sfondi) — tortora caldo → quasi nero
                cocoa: {
                    DEFAULT: '#6C6053',
                    dark: '#423A30',
                    deep: '#2B2620',
                },
                // Crema (sezioni chiare / testo su scuro)
                cream: {
                    DEFAULT: '#F8F1E4',
                    dark: '#ECE2CF',
                },
                // Inchiostro (testo principale su crema)
                ink: '#2A241E',
            },
            fontFamily: {
                // Font arrotondato "Fredoka" usato in tutto il sito.
                // (gli alias storici restano per non toccare tutte le viste)
                fredoka: ["Fredoka", "ui-rounded", "system-ui", "sans-serif"],
                neutrafacebold: ["Fredoka", "ui-rounded", "system-ui", "sans-serif"],
                neutrafaceregular: ["Fredoka", "ui-rounded", "system-ui", "sans-serif"],
            },
            boxShadow: {
                ticket: '0 18px 40px -18px rgba(0,0,0,0.45)',
                soft: '0 12px 30px -12px rgba(0,0,0,0.35)',
            },
            keyframes: {
                'fade-up': {
                    '0%': { opacity: '0', transform: 'translateY(16px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                'float-slow': {
                    '0%,100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
            },
            animation: {
                'fade-up': 'fade-up 0.7s ease-out both',
                'float-slow': 'float-slow 6s ease-in-out infinite',
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
    ],
}
