
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
    $scope.mobileMenuOpen = false;

    $scope.openMobileMenu = () => {$scope.mobileMenuOpen = true};
    $scope.closeMobileMenu = () => {$scope.mobileMenuOpen = false};
    $scope.toggleMobileMenu = () => {$scope.mobileMenuOpen = !$scope.mobileMenuOpen};
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
