/** @type {import('tailwindcss').Config} */


module.exports = {
    darkMode: 'class',
    content: [
        "./resources/**/*.{blade.php,js}",
    ],
    theme: {
        extend: {
            colors: {
                bleutr: {
                    1: '#78C6E0',
                    2: '#0076D5',
                    3: '#0B2341',
                },
                primary: '#141414'
            },
        },
    },
    plugins: [
        require('tailwind-scrollbar'),
    ],
}

