/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./bootstrap */ "./resources/js/bootstrap.js");

$(function () {
  var up = $(".up");
  var down = $(".down");
  var sidebar = $(".sidebar");
  var workImg = $(".work").data("hoverimage");
  var aboutImg = $(".about").data("hoverimage");
  var skillsImg = $(".skills").data("hoverimage");
  var contactImg = $(".contact").data("hoverimage");
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll < 190) {
      $(".work").css("background-image", "");
      $(".about").css("background-image", "");
      $(".skills").css("background-image", "");
      $(".contact").css("background-image", "");
      $(".work").removeClass("font-bold");
      $(".about").removeClass("font-bold");
      $(".skills").removeClass("font-bold");
      $(".contact").removeClass("font-bold");
      down.removeClass("hidden").addClass("block");
      up.removeClass("block").addClass("hidden");
      sidebar.removeClass("block").addClass("hidden");
    }

    if (scroll > 800) {
      sidebar.removeClass("hidden").addClass("block");

      if (scroll < 1000) {
        $(".work").css("background-image", "url(" + workImg + ")");
        $(".work").addClass("font-bold");
        $(".about").css("background-image", "");
        $(".about").removeClass("font-bold");
      }
    }

    if (scroll > 1560) {
      $(".work").css("background-image", "");
      $(".work").removeClass("font-bold");

      if (scroll < 1800) {
        $(".about").css("background-image", "url(" + aboutImg + ")");
        $(".about").addClass("font-bold");
        $(".skills").css("background-image", "");
        $(".skills").removeClass("font-bold");
      }
    }

    if (scroll > 2350) {
      $(".about").css("background-image", "");
      $(".about").removeClass("font-bold");

      if (scroll < 2900) {
        $(".skills").css("background-image", "url(" + skillsImg + ")");
        $(".skills").addClass("font-bold");
        $(".contact").css("background-image", "");
        $(".contact").removeClass("font-bold");
        up.removeClass("block").addClass("hidden");
        down.removeClass("hidden").addClass("block");
      }
    }

    if (scroll > 3400) {
      $(".skills").css("background-image", "");
      $(".skills").removeClass("font-bold");
      $(".contact").css("background-image", "url(" + contactImg + ")");
      $(".contact").addClass("font-bold");
      up.removeClass("hidden").addClass("block");
      down.removeClass("block").addClass("hidden");
    }
  });
});
$(document).ready(function () {
  $(".down").click(function () {
    var scroll = $(window).scrollTop();

    if (scroll < 800) {
      $("html, body").animate({
        scrollTop: $("#work").offset().top
      }, 1000);
    } else if (scroll < 1550) {
      $("html, body").animate({
        scrollTop: $("#about").offset().top
      }, 1000);
    } else if (scroll < 2350) {
      $("html, body").animate({
        scrollTop: $("#skills").offset().top
      }, 1000);
    } else if (scroll < 3450) {
      $("html, body").animate({
        scrollTop: $("#contact").offset().top
      }, 1000);
    }
  });
});

/***/ }),

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

//window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */
// try {
//     window.Popper = require('popper.js').default;
//     window.$ = window.jQuery = require('jquery');
//     require('bootstrap');
// } catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
//window.axios = require('axios');
//window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */
// import Echo from 'laravel-echo'
// window.Pusher = require('pusher-js');
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     useTLS: true
// });

/***/ }),

/***/ 0:
/*!***********************************************************!*\
  !*** multi ./resources/js/app.js ./resources/css/app.css ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/hardik/Code/coding-sunshine/hardikshah.dev/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Users/hardik/Code/coding-sunshine/hardikshah.dev/resources/css/app.css */"./resources/css/app.css");


/***/ })

/******/ });