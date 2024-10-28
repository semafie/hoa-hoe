/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      fontFamily: {
        roboto: ['Poppins', 'sans-serif'], // Tambahkan Roboto di sini
      },
    },
  },
  plugins: [],
}

