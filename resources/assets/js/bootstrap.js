
/**
 * We'll load Angular for two-way binding between the data and the DOM, and jQuery
 * for any legacy items such as Fancybox and noUiSlider which should eventually be
 * removed. We'll also load dayJS for date manipulation and lodash for array and
 * collection data massaging.
 */
window.angular = require('angular');
window.jQuery = window.$ = require('jquery');
window.moment = require('dayjs');
window._ = require('lodash');

/**
 * Next we will register the CSRF Token as a common header so that
 * all outgoing HTTP requests automatically have it attached.
 */
window._token = document.head.querySelector('meta[name="csrf-token"]').content;
window.app = angular.module('cashcalc', []);

if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        /*navigator.serviceWorker.register('/service-worker.js')
        .then((registration) => {
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, (err) => {
            console.log('ServiceWorker registration failed: ', err);
        });*/
    });
}

/**
 * Convert the first charatcer of a string to uppercase.
 */
ucfirst = (string) => {
    return string.charAt(0).toUpperCase() + string.slice(1);
};

/**
 * Get the browser, browser version and platform of the current user.
 */
getBrowser = () => {
    let ua = navigator.userAgent,
        tem,
        M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];

    if (/trident/i.test(M[1])) {
        tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
        return {name: 'IE', version: (tem[1] || '')};
    }

    if (M[1] === 'Chrome') {
        tem = ua.match(/\bOPR|Edge\/(\d+)/)
        if(tem != null) {return {name: 'Opera', version: tem[1]};}
    }

    M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
    if ((tem = ua.match(/version\/(\d+)/i)) != null) {M.splice(1, 1, tem[1]);}

    return {
        name: M[0],
        version: M[1],
        platform: navigator.platform
    };
};

window.onerror = (msg, url, lineNo, columnNo, error) => {
    const string = msg.toLowerCase();

    if (string.indexOf("script error") > -1) {
        console.log('Script Error: See Browser Console for Detail');
        return false;
    }

    const request = new XMLHttpRequest();
    request.open('POST', '/admin/track-js-error', true);
    request.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
    request.send(JSON.stringify([
        'Message: ' + msg,
        'URL: ' + url,
        'Line: ' + lineNo,
        'Column: ' + columnNo,
        'Error object: ' + error,
        'Browser: ' + JSON.stringify(getBrowser(), null, 2)
    ]));
};
