/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'blue-ice':     '#F0F7FF',
        'blue-med':     '#1A6FA8',
        'green-health': '#2DAA7E',
        'dark-blue':    '#1C2B3A',
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
