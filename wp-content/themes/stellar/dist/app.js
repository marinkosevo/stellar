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

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/css-loader/dist/cjs.js):\nError: Can't resolve './custom-base-styles.css' in '/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/assets/src/css'\n    at finishWithoutResolve (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/enhanced-resolve/lib/Resolver.js:369:18)\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/enhanced-resolve/lib/Resolver.js:461:15\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/enhanced-resolve/lib/Resolver.js:519:5\n    at eval (eval at create (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/enhanced-resolve/lib/Resolver.js:519:5\n    at eval (eval at create (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:27:1)\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/enhanced-resolve/lib/DescriptionFilePlugin.js:89:43\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/enhanced-resolve/lib/Resolver.js:519:5\n    at eval (eval at create (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/enhanced-resolve/lib/Resolver.js:519:5\n    at processResult (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/webpack/lib/NormalModule.js:764:19)\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/webpack/lib/NormalModule.js:866:5\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/loader-runner/lib/LoaderRunner.js:400:11\n    at /Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/loader-runner/lib/LoaderRunner.js:252:18\n    at context.callback (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/loader-runner/lib/LoaderRunner.js:124:13)\n    at Object.loader (/Users/lukakordic/Documents/GitHub/stellar/wp-content/themes/stellar/node_modules/css-loader/dist/index.js:155:5)\n    at process.processTicksAndRejections (node:internal/process/task_queues:95:5)");

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