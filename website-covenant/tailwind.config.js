import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],

  theme: {
    extend: {
      colors: {
        utama: '#FAF096',
        second: '#D7CB6D',
        third: '#D8D5B8',
        fourth: '#f45905',
        five: '#FFFDE7',
        hover: '#a8a58d',
        butek: '#f9f9f9',
        ijo: '#C4FFB6'
      },
      fontFamily: {
        Kanit: ["Kanit-Regular"]
      }
    },
  },

  plugins: [forms,
    require('flowbite/plugin')
  ],
};
