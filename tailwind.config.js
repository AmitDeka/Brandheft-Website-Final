module.exports = {
  content: ["./public/*.php", "./public/*/*.php"],
  theme: {
    extend: {
      colors: {
        txtcolor: "#002642",
        primary: "#E5dada",
        headerC: "#acadb4",
        secondary: "#fca311",
        pureW: "#ffffff",
        pureB: "#000000",

        primaryC: "#002642",
        primaryHighC: "#020d1c",
        secondaryC: "#3a5368",
        accentC: "#e59500",
        accentAltC: "#840032",
        textC: "#e5dada",
        textAltC: "#acadb4",

        fb: "#4267b2",
        insta: "#bc2a8d",
        twitter: "#1da1f2",
        linkedin: "#0077b5",
      },

      flex: {
        6: "0 0 auto",
      },

      fontFamily: {
        futuraL: "'Futura Lt BT', serif",
        futuraM: "'Futura Md BT', sans-serif",
        futuraB: "'Futura BdCn BT', serif",
      },

      zIndex: {
        999: 999,
      },

      gridTemplateColumns: {
        teamCard: "repeat(auto-fill, minmax(350px, 1fr))",
      },
    },
    variants: {
      backgroundColor: ["active"],
      extend: {
        // backgroundColor: ['active'],
      },
    },
    plugins: [],
  },
};
