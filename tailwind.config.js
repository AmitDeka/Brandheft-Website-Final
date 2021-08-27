module.exports = {
  purge: [],
  darkMode: 'media', // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        txtcolor: '#14213D',
        primary: '#e5e5e5',
        secondary: '#fca311',
        pureW: '#ffffff',
        pureB: '#000000',

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
