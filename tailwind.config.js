import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.tsx',
    ],

    theme: {
        extend: {
            fontFamily: {
                'clash-var': ['ClashDisplay-Variable', 'sans-serif'],
                'clash-elig': ['ClashDisplay-Extralight', 'sans-serif'],
                'clash-lig': ['ClashDisplay-Light', 'sans-serif'],
                'clash-reg': ['ClashDisplay-Regular', 'sans-serif'],
                'clash-med': ['ClashDisplay-Medium', 'sans-serif'],
                'clash-sbol': ['ClashDisplay-Semibold', 'sans-serif'],
                'clash-bol': ['ClashDisplay-Bold', 'sans-serif'],
            },
            dropShadow: {
                'neubrutal': [
                    '3px 3px 0px black'
                ]
            },
            boxShadow: {
                'neubrutal': '5px 5px 0px 0px black',
                'neubrutal-white': '5px 5px 0px 0px white',
                'h-neubrutal': '3px 3px 0px 0px black',
                'smooth': '0px 0px 16px 0px rgba(0,0,0,.05)',
            },
            fontSize: {
                'clamp-lg': "clamp(0.5rem, 0.4rem + 0.5vw, 1rem)",
                'clamp-xl': "clamp(0.875rem, 0.8rem + 0.375vw, 1.25rem)",
                'clamp-2xl': "clamp(1rem, 0.4286rem + 0.8929vw, 1.5rem)",
                'clamp-3xl': "clamp(1.25rem, 1.125rem + 0.625vw, 1.875rem)",
                'clamp-4xl': "clamp(1.5rem, 1.35rem + 0.75vw, 2.25rem)",
                'clamp-5xl': "clamp(2rem, 1.8rem + 1vw, 3rem)",
                'clamp-6xl': "clamp(2rem, 1.6rem + 2vw, 4rem)",
                'clamp-9xl': "clamp(3rem, 2.4rem + 3vw, 6rem)",
                'sm': "0.875rem",
                'base': '1rem',
                'lg': "1.125rem",
                'xl': "1.25rem",
                '2xl': "1.5rem",
                '3xl': "1.875rem",
                '4xl': "2.25rem",
                '5xl': "3rem",
                '6xl': "3.75rem",
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'white': '#ffffff',
                'black': '#000000',
                'background': '#F2F7F8',
                'logo': '#007EA7',
                'accent': '#00A8E8',
                'secondary': '#A5DFF9',
                'text': '#64748B',
                'error': '#bb2929',
                'lightgray': '#E6E6E6',
            },
        },
    },

    plugins: [forms],
};
