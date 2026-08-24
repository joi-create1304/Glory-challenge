/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        navy: {
          DEFAULT: "#0A1B33",
          light: "#12274A",
        },
        gold: {
          DEFAULT: "#D99A16",
          light: "#FBEAD1",
        },
      },
    },
  },
  plugins: [],
}
