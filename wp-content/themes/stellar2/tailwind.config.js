/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./*.php", "./*.js", "./**/*.js"],
  darkMode: "class",
  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter-Regular"],
      },
      textColor: {
        primary: "#7C3AED",
        neutral: "#374151",
        dark: "#111827",
      },
      backgroundColor: {
        primary: "#7C3AED",
        secondary: "#D5FAFC",
        secondarylight: "#1DB5BE",
      },
      fontSize: {
        sm: ["16px", "24px"],
        base: ["18px", "28px"],
        lg: ["36px", "45px"],
        xl: ["48px", "60px"],
        xl2: ["60px", "72px"],
      },
    },
  },
  plugins: [],
};
