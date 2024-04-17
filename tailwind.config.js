/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    "./*.php",
    "./admin/*.php"
],
  theme: {
    extend: {
      colors:{
        "google-blue" : "#176bef",
        "google-red" :  "#ff3e30",
        "google-yellow" : "#f7b529",
        "google-green" : "#179c52"
      }
    },
  },
  plugins: []
}