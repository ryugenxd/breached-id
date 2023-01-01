/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
	"./**/*.html"
],
  theme: {
    extend: {
      colors: {
        transparent: "transparent",
        blue: {
          lite: "#8aacc9",
          light: "#26445f",
          semi: "#1d2730",
          bold: "#131d25"
        }
      },
    },
  },
  plugins: [],
}
