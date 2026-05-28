/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './_content-scan/**/*.html',     // scan the static index.html copied in for build
        // Exclude Filament admin files to avoid conflicts
        '!./resources/css/filament/**/*.{css,js}',
    ],
    safelist: [
        // brand colors used dynamically in static HTML
        'bg-primary','bg-primary-dark','text-primary','text-primary-dark','border-primary','hover:bg-primary','hover:bg-primary-dark',
        'bg-accent','bg-accent-dark','text-accent','text-accent-dark','border-accent','hover:bg-accent','hover:bg-accent-dark',
        'bg-secondary','text-secondary','hover:text-secondary','hover:bg-secondary',
    ],
    theme: {
        extend: {
            colors: {
                primary:   '#1F4E79',  // Deep navy (school crest)
                'primary-dark': '#163959',
                secondary: '#FFD700',  // Gold
                accent:    '#C00000',  // Burgundy red
                'accent-dark': '#8B0000',
            },
            fontFamily: {
                sans:    ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'Segoe UI', 'Roboto', 'sans-serif'],
                display: ['"Cormorant Garamond"', 'Georgia', 'Times New Roman', 'serif'],
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
}
