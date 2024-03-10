/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors:{
      secondary: {
        500: '#a1a11fc4',
        700: '#a1a11fe5',
        900: '#a1a11f',
      },
    },
    extend: {},
  },
  plugins: [],
}
