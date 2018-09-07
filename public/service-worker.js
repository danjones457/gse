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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 18);
/******/ })
/************************************************************************/
/******/ ({

/***/ 18:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(19);


/***/ }),

/***/ 19:
/***/ (function(module, exports) {

self.addEventListener('push', function (event) {
    console.log('[Service Worker] Push Received.');
    console.log('[Service Worker] Push had this data: ' + event.data.text());
    var title = "Data Capture Form Received";
    var bodyText = 'A client has submitted a Data Capture Form';

    if (event.data.text() != '') {
        bodyText = event.data.text();
    }

    var options = {
        body: bodyText,
        icon: 'https://cashcalc.co.uk/storage/images/CCLogo.jpg',
        badge: 'https://cashcalc.co.uk/storage/images/CCLogo.jpg'
    };

    event.waitUntil(self.registration.showNotification(title, options));
});

self.addEventListener('notificationclick', function (event) {
    event.notification.close();
    event.waitUntil(clients.openWindow('https://cashcalc.co.uk/dashboard'));
});

// function updateStaticCache() {
//     return caches.open(version + staticCacheName).then(function(e) {
//         return e.addAll([
//             "/css/app.css",
//             "/js/app.js",
//             "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
//             "/offline",
//             "/android-icon-72x72.png"
//         ])
//     })
// }
// var staticCacheName = "static"
//   , version = "v1::";
// self.addEventListener("install", function(e) {
//     e.waitUntil(updateStaticCache())
// }),
// self.addEventListener("activate", function(e) {
//     e.waitUntil(caches.keys().then(function(e) {
//         return Promise.all(e.filter(function(e) {
//             return 0 !== e.indexOf(version)
//         }).map(function(e) {
//             return caches["delete"](e)
//         }))
//     }))
// }),
// self.addEventListener("fetch", function(e) {
//     var t = e.request;
//     return "GET" !== t.method ? void e.respondWith(fetch(t)["catch"](function() {
//         return caches.match("/offline")
//     })) : -1 !== t.headers.get("Accept").indexOf("text/html") ? ("navigate" != t.mode && (t = new Request(t.url,{
//         method: "GET",
//         headers: t.headers,
//         mode: t.mode,
//         credentials: t.credentials,
//         redirect: t.redirect
//     })),
//     void e.respondWith(fetch(t).then(function(e) {
//         var n = e.clone();
//         return caches.open(version + staticCacheName).then(function(e) {
//             e.put(t, n)
//         }),
//         e
//     })["catch"](function() {
//         return caches.match(t).then(function(e) {
//             return e || caches.match("/offline")
//         })
//     }))) : void e.respondWith(caches.match(t).then(function(e) {
//         return e || fetch(t)["catch"](function() {
//             return -1 !== t.headers.get("Accept").indexOf("image") ? new Response('<svg width="400" height="400" role="img" aria-labelledby="offline-title" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg"><title id="offline-title">Offline</title><g><line stroke="#666666" x1="0" y1="0" x2="400" y2="400"/><line stroke="#666666" x1="0" y1="400" x2="400" y2="0"/></g></svg>',{
//                 headers: {
//                     "Content-Type": "image/svg+xml"
//                 }
//             }) : void 0
//         })
//     }))
// });

/***/ })

/******/ });