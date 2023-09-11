/** @type {import('tailwindcss').Config} */
const purgecss = require("@fullhuman/postcss-purgecss");
module.exports = {
  content: ["./**/*.{php,html,js}", "./lib/**/*.{php,html,js}"],
  theme: {
    extend: {
      container: {
        center: true,
        padding: {
          DEFAULT: "1rem",
          md: "1.5rem",
          lg: "2rem",
          xl: "2.5rem",
        },
      },
      colors: {
        lb: "#26215f",
        db: "#130f40",
        ly: "#ffee80",
        dy: "#f9d806",
      },
    },
  },
  plugins: [
    purgecss({
      enabled: true,
      content: ["./**/*.{php,html,js}", "./lib/**/*.{php,html,js}"],
    }),
  ],
};
