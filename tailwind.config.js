module.exports = {
  purge: [],
  darkMode: 'media', // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        txtcolor: '#002642',
        primary: '#d9d0d0',
        secondary: '#e59500',
        red: '#840032',

        fb: '#4267b2',
        insta: '#bc2a8d',
        twitter: '#1da1f2',
        linkedin: '#0077b5'
      },

      fontFamily: {
        futuraL: "'Futura Lt BT', serif",
        futuraM: "'Futura Md BT', sans-serif",
        futuraB: "'Futura BdCn BT', serif",

      },

      zIndex: {
        '999': 999,
      }
    },
  },
  variants: {
    extend: {
      scrollBehavior: ['motion-safe']
    },
  },
  plugins: [
    require('tailwind-scroll-behavior')(),
  ],
}
