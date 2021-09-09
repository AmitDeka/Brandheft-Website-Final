module.exports = {
  purge: [],
  darkMode: 'media', // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        txtcolor: '#002642',
        primary: '#E5dada',
        headerC: '#acadb4',
        secondary: '#fca311',
        pureW: '#ffffff',
        pureB: '#000000',

        primaryC: '#002642',
        primaryHighC: '#020d1c',
        secondaryC: '#3a5368',
        accentC: '#e59500',
        accentAltC: '#840032',
        textC: '#e5dada',
        textAltC: '#acadb4',

        fb: '#4267b2',
        insta: '#bc2a8d',
        twitter: '#1da1f2',
        linkedin: '#0077b5'
      },

      flex: {
        '12': '0 0 100%',
      },

      fontFamily: {
        futuraL: "'Futura Lt BT', serif",
        futuraM: "'Futura Md BT', sans-serif",
        futuraB: "'Futura BdCn BT', serif",

      },

      zIndex: {
        '999': 999,
      },

      boxShadow: {
        neu: '0 20px 20px -5px rgba(0, 32, 56, 1), 0 20px 20px -5px rgba(0, 44, 76, 1)',
      },

      keyframes: {
        flash: {
          '0%, 80%': { opacity: '1', pointer: 'all' },
          '100%': { opacity: '0', pointer: 'none' },
        }
      },

      animation: {
        flash: 'flash 4s ease-in forwards',
      },

      gridTemplateColumns: {
        'teamCard': 'repeat(auto-fill, minmax(350px, 1fr))',
      },
      neumorphismColor: {
        primaryC: {
          1: '#002642',
          2: '#020d1c'
        },

      },
    },
    variants: {
      extend: {
      },
    },
    plugins: [require('tailwindcss-neumorphism')],
  }
}