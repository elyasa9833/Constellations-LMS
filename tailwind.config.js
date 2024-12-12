import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                'rotate-wiggle': 'rotate-wiggle 0.4s ease-in-out infinite',
                'spin': 'spin 2s ease-in-out infinite',
                'search-icon': 'search-icon 3.5s ease-in-out infinite',
            },
            keyframes: {
                'rotate-wiggle': {
                    '0%, 100%': { transform: 'rotate(-20deg) scale(1.1)' },
                    '50%': { transform: 'rotate(20deg) scale(1.1)' },
                    // '0%': { transform: 'rotate(-17deg) scale(1.05)' },
                    // '25%': { transform: 'rotate(-8deg) scale(1.1)' },
                    // '50%': { transform: 'rotate(17deg) scale(1.15)' },
                    // '75%': { transform: 'rotate(8deg) scale(0.95)' },
                    // '100%': { transform: 'rotate(0deg) scale(1)' },
                },
                'spin': {
                    '0%': { transform: 'rotate(-15deg) scale(1.1)' },
                    '10%': { transform: 'rotate(0deg) scale(1)' },
                    '30%': { transform: 'rotate(45deg) scale(1.2)' },
                    '50%': { transform: 'rotate(90deg) scale(1.3)' },
                    '70%': { transform: 'rotate(45deg) scale(1.2)' },
                    '90%': { transform: 'rotate(15deg) scale(1.1)' },
                    '100%': { transform: 'rotate(-15deg) scale(1.1)' },
                },
                'search-icon': {
                    '0%': { transform: 'translate(0, 0) scale(1)' },
                    '25%': { transform: 'translate(-5px, 5px) scale(1.03)' },  // Gerak sedikit ke bawah kiri, membesar
                    '50%': { transform: 'translate(-10px, 0) scale(1.1)' },  // Bergeser ke kiri, mengecil
                    '75%': { transform: 'translate(-5px, -5px) scale(1.2)' }, // Agak ke atas, sedikit membesar
                    '100%': { transform: 'translate(0, 0) scale(1)' },
                }
            },
        },
    },
    plugins: [],
};
