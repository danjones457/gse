
/*
 * Bootstrap our application by calling the bootstrap partial.
 */
require('./bootstrap');

/*
 * Define the root 'app' controller which wraps every page.
 * This can contain methods for things such as info messages, which are useful on every page.
 */
app.controller('app', ['$scope', '$timeout', ($scope, $timeout) => {
    $scope.Math = Math;
    $scope.popupOpen = false;
    $scope.mobileMenuOpen = false;
    $scope.visiblePopup = '';
    $scope.popupOptions = {
        id: null,
        type: null
    };

    /**
     *
     */
    $scope.openPopup = (name, options = {}) => {
        $scope.popupOpen = true;
        $scope.visiblePopup = name;

        const keys = Object.keys(options);
        keys.forEach((item) => {
            $scope.popupOptions[item] = options[item];
        });
    };

    /**
     *
     */
    $scope.closePopup = () => {
        $scope.popupOpen = false;
        $scope.visiblePopup = null;
        $scope.popupOptions = {};
    };

    /**
     *
     */
    $scope.infoMessage = {
        visible: false,
        type: 'info',
        message: '',
        timeout: null
    };

    /**
     *
     */
    $scope.showInfoMessage = (type, message, duration = 3000) => {
        $scope.infoMessage.type = type;
        $scope.infoMessage.message = message;
        $scope.infoMessage.visible = true;

        $scope.infoMessage.timeout = $timeout(() => {
            $scope.infoMessage.visible = false;
        }, duration);
    };

    /**
     *
     */
    $scope.replaceState = (url) => {
        window.history.replaceState({}, "GSE", url);
    };

    /**
     *
     */
    $scope.handleError = (errorResponse) => {
        console.log("Handling error via app controller");
        console.log(errorResponse);
    };

    /**
     *
     */
    $scope.closePopup();

    $scope.openMobileMenu = () => {$scope.mobileMenuOpen = true};
    $scope.closeMobileMenu = () => {$scope.mobileMenuOpen = false};
    $scope.toggleMobileMenu = () => {$scope.mobileMenuOpen = !$scope.mobileMenuOpen};
}]);

app.controller('clientsidebar', ['$scope', ($scope) => {
    $scope.expanded = {
        pensions: false,
        investments: false
    };

    $scope.toggleRow = (row) => {
        $scope.expanded[row] = !$scope.expanded[row];
    };
}]);

/*
 * Define a directive for an input[type=number] which gives some improvements on the native browser element.
 */
app.directive('number', () => {
    return {
        require: '?ngModel',
        restrict: 'A',
        link: (scope, el, attrs, ngModel) => {
            el.bind('focus', () => {
                if (el[0].value == '0') el[0].value = '';
            });
            el.bind('dblclick', () => {
                el[0].select();
            });
            el.bind('blur', () => {
                let value = el[0].value;

                // Remove every character which is not a digit, '.' or '-'
                value = value.replace(/[^\d.-]/g, '');

                // If we are left with an empty string, revert to 0
                if (value == '') value = '0';
                el[0].value = value;
                if(ngModel != null) ngModel.$setViewValue(value);
            });
        }
    }
});

/*
 * Define a directive for an input[type=range] which gives some improvements on the native browser element.
 */
app.directive('slider', () => {
    return {
        restrict: 'E',
        template: '<input type="range" class="slider" min="0" max="10" step="0.1">',
        replace: true
    }
});

/*
 * Define a directive for a numeric input alongside a slider.
 * This gives some improvements on the native browser element.
 */
app.directive('sliderInput', () => {
    return {
        restrict: 'E',
        template: "<input type='number' ng-model-options='{updateOn: \"blur\"}' required>",
        replace: true
    }
});

/*
 * Define a directive for a tooltip, which can then be attached to virtually any element.
 */
app.directive('tooltip', () => {
    return {
        restrict: 'A',
        link: (scope, el, attrs) => {
            const tool = document.createElement('span');
            tool.classList.add('tooltip');
            tool.classList.add('js-tooltip');
            tool.innerHTML = attrs.tooltip;
            const toolArrow = document.createElement('span');
            toolArrow.classList.add('arrow');

            // Expand the width of the tooltip based on the number of characters to be shown.
            // Always somewhere between 50-250px.
            tool.style.width = (75 + (175 * (Math.min(tool.innerHTML.length, 50) / 50))) + "px";

            el.bind('mouseenter', () => {
                document.body.appendChild(tool);
                tool.appendChild(toolArrow);
                const elRect = el[0].getBoundingClientRect();
                const toolRect = tool.getBoundingClientRect();
                const pos = elRect.top - toolRect.height - 7 >= 0 ? 'top' : 'bottom';

                tool.style.top = (
                    pos == 'top'
                    ? elRect.top - toolRect.height - 7
                    : elRect.top + elRect.height + 7
                ) + 'px';

                tool.style.left = Math.min(
                    Math.max(elRect.left + (elRect.width / 2) - (toolRect.width / 2), 1),
                    screen.width - toolRect.width - 1
                ) + 'px';

                tool.classList.add('visible');

                const toolRectAfterPlacement = tool.getBoundingClientRect();

                toolArrow.style.left
                    = (elRect.left + (elRect.width / 2) - toolRectAfterPlacement.left) - (toolArrow.offsetWidth / 2)
                    + 'px';

                if (pos == 'bottom') {
                    toolArrow.style.top = '-15px';
                    toolArrow.style.borderTopColor = 'transparent';
                    toolArrow.style.borderBottomColor = '#14191e';
                } else if (pos == 'top') {
                    toolArrow.style.top = '100%';
                    toolArrow.style.borderBottomColor = 'transparent';
                    toolArrow.style.borderTopColor = '#14191e';
                }
            });
            el.bind('mouseleave', () => {
                const allTooltips = document.querySelectorAll('.js-tooltip');
                for (let i = 0; i < allTooltips.length; i++) {
                    document.body.removeChild(allTooltips[i]);
                };
            });
        }
    }
});

/*
 * Directive to be added to a <select> element which is "ng-model"-ing a number rather than a string.
 * Angular typically wants a string to be used on "ng-model", but if we have a number instead then
 * we can use this directive on the <select> element.
 */
app.directive('numberSelect', () => {
    return {
        restrict: 'A',
        require: 'ngModel',
        link: (scope, element, attrs, ngModel) => {
            ngModel.$parsers.push((val) => {
                return parseInt(val, 10);
            });
            ngModel.$formatters.push((val) => {
                return '' + val;
            });
        }
    };
});

/*
 * Define the 'cookies' controller used to allow the user to accept cookies on marketing and app blades.
 */
app.controller('cookies', ['$scope', '$http', ($scope, $http) => {
    $scope.showCookies = true;
    $scope.acceptCookies = () => {
        $http.get('/accept-cookies')
        .then((response) => {
            $scope.showCookies = false;
        });
    }
}]);
