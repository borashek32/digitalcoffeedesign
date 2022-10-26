/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/projects/project_17/components/blocks/products.js":
/*!************************************************************************!*\
  !*** ./resources/js/projects/project_17/components/blocks/products.js ***!
  \************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "Products": () => (/* binding */ Products)
/* harmony export */ });
/* harmony import */ var _constants_catalog__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../constants/catalog */ "./resources/js/projects/project_17/constants/catalog.js");
/* harmony import */ var _constants_root__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../constants/root */ "./resources/js/projects/project_17/constants/root.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }




var Products = /*#__PURE__*/function () {
  function Products() {
    _classCallCheck(this, Products);
  }

  _createClass(Products, [{
    key: "render",
    value: function render() {
      var htmlCatalog = '';
      _constants_catalog__WEBPACK_IMPORTED_MODULE_0__.CATALOG.forEach(function (_ref) {
        var id = _ref.id,
            name = _ref.name,
            price = _ref.price,
            img = _ref.img;
        htmlCatalog += "\n                <li class=\"products__element element\">\n                    <span class=\"element__name\">".concat(name, "</span>\n                    <img class=\"element__img\" src=\"").concat(img, "\" alt=\"guitar\" width=\"200px\" />\n                    <span class=\"element__price\">\n                        \u26A1\uFE0F ").concat(price.toLocaleString(), " USD\n                    </span>\n                    <button class=\"element__btn\">\u0414\u043E\u0431\u0430\u0432\u0438\u0442\u044C \u0432 \u043A\u043E\u0440\u0437\u0438\u043D\u0443</button>\n                </li>\n            ");
      });
      var html = "\n            <ul class=\"products__container\">\n                ".concat(htmlCatalog, "\n            </ul>\n        ");
      _constants_root__WEBPACK_IMPORTED_MODULE_1__.ROOT_PRODUCTS.innerHTML = html;
    }
  }]);

  return Products;
}();

var productsPage = new Products();
productsPage.render();


/***/ }),

/***/ "./resources/js/projects/project_17/components/includes/nav.js":
/*!*********************************************************************!*\
  !*** ./resources/js/projects/project_17/components/includes/nav.js ***!
  \*********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "handlerBurger": () => (/* binding */ handlerBurger)
/* harmony export */ });
var burger = document.querySelector('#burger');
var popup = document.querySelector('#popup');
var menu = document.querySelector('#menu').cloneNode(1);
var body = document.body;
burger.addEventListener('click', handlerBurger);

function handlerBurger(event) {
  event.preventDefault();
  popup.classList.toggle('active');
  burger.classList.toggle('active');
  body.classList.toggle('lock');
  renderPopup();
}

function renderPopup() {
  popup.appendChild(menu);
}



/***/ }),

/***/ "./resources/js/projects/project_17/constants/catalog.js":
/*!***************************************************************!*\
  !*** ./resources/js/projects/project_17/constants/catalog.js ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "CATALOG": () => (/* binding */ CATALOG)
/* harmony export */ });
var CATALOG = [{
  id: 'el1',
  name: 'YAMAHA F310',
  img: 'https://www.muztorg.ru/files/sized/f250x250/1dd/71t/qsp/928/gsw/4cw/soo/88c/c/1dd71tqsp928gsw4cwsoo88cc.jpg',
  price: 25000
}, {
  id: 'el2',
  name: 'FENDER CD-60 BLACK',
  img: 'https://www.muztorg.ru/files/sized/f250x250/2qg/6aw/373/m04/k4s/wck/0c8/g4w/s/2qg6aw373m04k4swck0c8g4ws.jpg',
  price: 26000
}, {
  id: 'el3',
  name: 'FENDER SQUIER MM STRATOCASTER BLACK',
  img: 'https://www.muztorg.ru/files/sized/f250x250/212/4a3/aqo/x5w/4kg/gks/0gg/sgo/w/2124a3aqox5w4kggks0ggsgow.jpg',
  price: 28000
}, {
  id: 'el4',
  name: 'YAMAHA F310',
  img: 'https://www.muztorg.ru/files/sized/f250x250/1dd/71t/qsp/928/gsw/4cw/soo/88c/c/1dd71tqsp928gsw4cwsoo88cc.jpg',
  price: 25000
}, {
  id: 'el5',
  name: 'FENDER CD-60 BLACK',
  img: 'https://www.muztorg.ru/files/sized/f250x250/2qg/6aw/373/m04/k4s/wck/0c8/g4w/s/2qg6aw373m04k4swck0c8g4ws.jpg',
  price: 26000
}, {
  id: 'el6',
  name: 'FENDER SQUIER MM STRATOCASTER BLACK',
  img: 'https://www.muztorg.ru/files/sized/f250x250/212/4a3/aqo/x5w/4kg/gks/0gg/sgo/w/2124a3aqox5w4kggks0ggsgow.jpg',
  price: 28000
}, {
  id: 'el7',
  name: 'YAMAHA F310',
  img: 'https://www.muztorg.ru/files/sized/f250x250/1dd/71t/qsp/928/gsw/4cw/soo/88c/c/1dd71tqsp928gsw4cwsoo88cc.jpg',
  price: 25000
}, {
  id: 'el8',
  name: 'FENDER CD-60 BLACK',
  img: 'https://www.muztorg.ru/files/sized/f250x250/2qg/6aw/373/m04/k4s/wck/0c8/g4w/s/2qg6aw373m04k4swck0c8g4ws.jpg',
  price: 26000
}, {
  id: 'el9',
  name: 'FENDER SQUIER MM STRATOCASTER BLACK',
  img: 'https://www.muztorg.ru/files/sized/f250x250/212/4a3/aqo/x5w/4kg/gks/0gg/sgo/w/2124a3aqox5w4kggks0ggsgow.jpg',
  price: 28000
}, {
  id: 'el10',
  name: 'YAMAHA F310',
  img: 'https://www.muztorg.ru/files/sized/f250x250/1dd/71t/qsp/928/gsw/4cw/soo/88c/c/1dd71tqsp928gsw4cwsoo88cc.jpg',
  price: 25000
}, {
  id: 'el11',
  name: 'FENDER CD-60 BLACK',
  img: 'https://www.muztorg.ru/files/sized/f250x250/2qg/6aw/373/m04/k4s/wck/0c8/g4w/s/2qg6aw373m04k4swck0c8g4ws.jpg',
  price: 26000
}, {
  id: 'el12',
  name: 'FENDER SQUIER MM STRATOCASTER BLACK',
  img: 'https://www.muztorg.ru/files/sized/f250x250/212/4a3/aqo/x5w/4kg/gks/0gg/sgo/w/2124a3aqox5w4kggks0ggsgow.jpg',
  price: 28000
}];


/***/ }),

/***/ "./resources/js/projects/project_17/constants/root.js":
/*!************************************************************!*\
  !*** ./resources/js/projects/project_17/constants/root.js ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "ROOT_HEADER": () => (/* binding */ ROOT_HEADER),
/* harmony export */   "ROOT_PRODUCTS": () => (/* binding */ ROOT_PRODUCTS),
/* harmony export */   "ROOT_SHOPPING": () => (/* binding */ ROOT_SHOPPING)
/* harmony export */ });
var ROOT_HEADER = document.getElementById('header');
var ROOT_PRODUCTS = document.getElementById('products');
var ROOT_SHOPPING = document.getElementById('shopping');


/***/ }),

/***/ "./resources/js/projects/project_17/utils/localStorage.js":
/*!****************************************************************!*\
  !*** ./resources/js/projects/project_17/utils/localStorage.js ***!
  \****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "LocalStorageUtil": () => (/* binding */ LocalStorageUtil)
/* harmony export */ });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

var LocalStorageUtil = /*#__PURE__*/function () {
  function LocalStorageUtil() {
    _classCallCheck(this, LocalStorageUtil);

    this.keyName = 'products';
  }

  _createClass(LocalStorageUtil, [{
    key: "getProducts",
    value: function getProducts() {
      var productsLocalStorage = localStorage.getItem(this.keyName);

      if (productsLocalStorage !== null) {
        return JSON.parse(productsLocalStorage);
      }

      return [];
    }
  }, {
    key: "putProducts",
    value: function putProducts(id) {
      var products = this.getProducts();
      products.push(id);
      localStorage.setItem(this.keyName, JSON.stringify(products));
    }
  }]);

  return LocalStorageUtil;
}();

var localStorageUtil = new LocalStorageUtil();
localStorageUtil.putProducts('el1');
localStorageUtil.putProducts('el2');


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!****************************************************!*\
  !*** ./resources/js/projects/project_17/script.js ***!
  \****************************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _constants_catalog_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./constants/catalog.js */ "./resources/js/projects/project_17/constants/catalog.js");
/* harmony import */ var _components_blocks_products_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/blocks/products.js */ "./resources/js/projects/project_17/components/blocks/products.js");
/* harmony import */ var _components_includes_nav_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/includes/nav.js */ "./resources/js/projects/project_17/components/includes/nav.js");
/* harmony import */ var _constants_root_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./constants/root.js */ "./resources/js/projects/project_17/constants/root.js");
/* harmony import */ var _utils_localStorage_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./utils/localStorage.js */ "./resources/js/projects/project_17/utils/localStorage.js");





(0,_components_includes_nav_js__WEBPACK_IMPORTED_MODULE_2__.handlerBurger)();
})();

/******/ })()
;