/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./resources/**/*.blade.php",
    "./vendor/filament/**/*.blade.php"
  ],
  theme: {
    extend: {
      fontFamily: {
        Roboto : "'Roboto', sans-serif",
      },
      colors: {
        danger: colors.rose,
        primary: colors.green,
        success: colors.green,
        warning: colors.yellow,
      },
    },
  },
  plugins: [],
}
