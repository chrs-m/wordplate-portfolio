module.exports = {
  content: ["./public/themes/**/*.php", "./resources/**/**/*.{js,css}"],
  theme: {
    extend: {},
  },
  plugins: [require("@tailwindcss/typography")],
};
