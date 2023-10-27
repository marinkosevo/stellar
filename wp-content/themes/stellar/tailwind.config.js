/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./*.php", "./*.js", "./**/*.js"],
  theme: {
    extend: {
      fontFamily: {
        epilogue: ["Epilogue", "sans"],
      },
      fontSize: {
        sm: ["14px", "20px"],
        base: ["16px", "24px"],
        lg: ["20px", "28px"],
        xl: ["24px", "32px"],
      },
    },
  },
  plugins: [],
};
