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
            fontFamily: {
                playfairitalic: ["PlayFair Italic"],
                playfairregular: ["PlayFair Regular"],
                playfairbold: ["PlayFair Bold"],
                neutrafacebold: ["Neutraface Bold"],
                neutrafaceregular: ["Neutraface Regular"],
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
    ],
}
