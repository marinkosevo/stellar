/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/src/js/app.js":
/*!******************************!*\
  !*** ./assets/src/js/app.js ***!
  \******************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    var header = document.getElementsByClassName("header")[0];
    if (header) {
      if (window.scrollY > 0) {
        header.style.backgroundColor = "#111926";
      } else {
        header.style.backgroundColor = "rgba(0, 0, 0, 0.3)";
      }
    }
  });
});
var menu = document.getElementsByClassName("header__nav")[0];
var toggle = document.getElementById("toggle-menu");
toggle.addEventListener("click", function () {
  if (menu.classList.contains("active")) {
    menu.classList.remove("active");
  } else {
    menu.classList.add("active");
    menu.style = backgroundColor = "black";
  }
});
console.log(menu);

/***/ }),

/***/ "./assets/src/css/app.scss":
/*!*********************************!*\
  !*** ./assets/src/css/app.scss ***!
  \*********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/postcss-loader/dist/cjs.js):\nTypeError: plugins.forEach is not a function\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tailwindcss/lib/util/resolveConfig.js:198:17\n    at Array.forEach (<anonymous>)\n    at extractPluginConfigs (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tailwindcss/lib/util/resolveConfig.js:188:13)\n    at resolveConfig (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tailwindcss/lib/util/resolveConfig.js:239:12)\n    at resolveConfig (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tailwindcss/lib/public/resolve-config.js:20:39)\n    at getTailwindConfig (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tailwindcss/lib/lib/setupTrackingContext.js:71:88)\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tailwindcss/lib/lib/setupTrackingContext.js:100:92\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tailwindcss/lib/processTailwindFeatures.js:48:11\n    at plugins (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tailwindcss/lib/plugin.js:38:69)\n    at LazyResult.runOnRoot (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/postcss/lib/lazy-result.js:357:16)\n    at processResult (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/webpack/lib/NormalModule.js:764:19)\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/webpack/lib/NormalModule.js:866:5\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/loader-runner/lib/LoaderRunner.js:400:11\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/loader-runner/lib/LoaderRunner.js:252:18\n    at context.callback (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/loader-runner/lib/LoaderRunner.js:124:13)\n    at Object.loader (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/postcss-loader/dist/index.js:142:7)");

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