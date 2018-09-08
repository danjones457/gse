self.addEventListener('push', function(event) {
    console.log('[Service Worker] Push Received.');
    console.log('[Service Worker] Push had this data: ' + event.data.text());

    if(event.data.text() != '') {
        bodyText = event.data.text();
    }

    const options = {
        body: bodyText,
    };

    event.waitUntil(self.registration.showNotification(title,options));
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
