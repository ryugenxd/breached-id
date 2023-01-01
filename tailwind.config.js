/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
	"./**/*.html"
],
  theme: {
    extend: {
      transparent: "transparent",
      blue: {
        light: "#88adcd",
        semi: "#26445f",
        bold: "#131d25"
      }
    },
  },
  plugins: [],
}
