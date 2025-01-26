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
            screens:{
                'all-screens':'100000px'
            },
            colors: {
                brandYellow: '#BAB700', // Nome del colore personalizzato
            },
            fontFamily: {
                neutrafacebold: ["Neutraface Bold"],
                neutrafaceregular: ["Neutraface Regular"],
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
    ],
}
