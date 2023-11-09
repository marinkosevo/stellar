/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/src/js/app.js":
/*!******************************!*\
  !*** ./assets/src/js/app.js ***!
  \******************************/
/***/ (() => {

var checkbox = document.getElementById("checkbox");
function applyTheme() {
  if (typeof window !== "undefined") {
    if (localStorage.theme === "dark" || !("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches) {
      document.documentElement.classList.add("dark");
      checkbox.checked = true;
    } else {
      document.documentElement.classList.remove("dark");
      checkbox.checked = false;
    }
  }
}
checkbox.addEventListener("change", function () {
  if (checkbox.checked) {
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
  } else {
    document.documentElement.classList.remove("dark");
    localStorage.setItem("theme", "light");
  }
});
applyTheme(); // Poziv funkcije za primjenu teme prilikom učitavanja stranice
document.addEventListener("DOMContentLoaded", function () {
  var mobileMenuToggle = document.getElementById('mobile-menu-toggle');
  var mobileMenu = document.getElementById('mobile-menu');
  var mobileMenuClose = document.getElementById('mobile-menu-close'); // Dodaj novi gumb za zatvaranje

  mobileMenuToggle.addEventListener('click', function () {
    mobileMenu.classList.toggle('hidden');
  });
  mobileMenuClose.addEventListener('click', function () {
    mobileMenu.classList.add('hidden');
  });
});

/***/ }),

/***/ "./assets/src/css/app.scss":
/*!*********************************!*\
  !*** ./assets/src/css/app.scss ***!
  \*********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/postcss-loader/dist/cjs.js):\nError: ENOENT: no such file or directory, stat '/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/blocks/header-section/header-section.php'\n    at Object.statSync (node:fs:1690:3)\n    at resolveChangedFiles (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tailwindcss/lib/lib/content.js:170:36)\n    at resolvedChangedContent (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tailwindcss/lib/lib/content.js:142:42)\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tailwindcss/lib/lib/setupTrackingContext.js:133:99\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tailwindcss/lib/processTailwindFeatures.js:48:11\n    at plugins (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tailwindcss/lib/plugin.js:38:69)\n    at LazyResult.runOnRoot (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/postcss/lib/lazy-result.js:357:16)\n    at LazyResult.runAsync (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/postcss/lib/lazy-result.js:286:26)\n    at LazyResult.async (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/postcss/lib/lazy-result.js:160:30)\n    at LazyResult.then (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/postcss/lib/lazy-result.js:436:17)\n    at processResult (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/webpack/lib/NormalModule.js:764:19)\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/webpack/lib/NormalModule.js:866:5\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/loader-runner/lib/LoaderRunner.js:400:11\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/loader-runner/lib/LoaderRunner.js:252:18\n    at context.callback (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/loader-runner/lib/LoaderRunner.js:124:13)\n    at Object.loader (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/postcss-loader/dist/index.js:142:7)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./assets/src/js/app.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./assets/src/css/app.scss"]();
/******/ 	
/******/ })()
;