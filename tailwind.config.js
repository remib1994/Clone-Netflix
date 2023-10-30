/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')

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
            },
        },
    },
    plugins: [
        plugin(function ({ addBase, theme}) {
            //add padding to h1, h2, h3, h4, h5, h6
            addBase({
                'h1': { padding: theme('padding.5') },
                'h2': { padding: theme('padding.5') },
                'h3': { padding: theme('padding.5') },
                'h4': { padding: theme('padding.5') },
                'h5': { padding: theme('padding.5') },
                'h6': { padding: theme('padding.5') },
            })
            addBase({
                'h1': { fontSize: theme('fontSize.4xl') },
                'h2': { fontSize: theme('fontSize.3xl') },
                'h3': { fontSize: theme('fontSize.2xl') },
                'h4': { fontSize: theme('fontSize.xl') },
                'h5': { fontSize: theme('fontSize.lg') },
                'h6': { fontSize: theme('fontSize.base') },
            })
            addBase({
                'h1': { fontWeight: theme('fontWeight.bold') },
                'h2': { fontWeight: theme('fontWeight.bold') },
                'h3': { fontWeight: theme('fontWeight.bold') },
                'h4': { fontWeight: theme('fontWeight.bold') },
                'h5': { fontWeight: theme('fontWeight.bold') },
                'h6': { fontWeight: theme('fontWeight.bold') },
            })
            addBase({
                'h1' : { textIndent: theme('textIndent.8') },
                'h2' : { textIndent: theme('textIndent.12') },
                'h3' : { textIndent: theme('textIndent.16') },
                'h4' : { textIndent: theme('textIndent.20') },
                'h5' : { textIndent: theme('textIndent.24') },
                'h6' : { textIndent: theme('textIndent.28') },
            })

        })
    ],
}

