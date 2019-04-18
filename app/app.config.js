angular.
  module('accessibilityApp').
  config(['$routeProvider',
    function config($routeProvider) {
      $routeProvider.
        when('/home', {
          template: '<main-map></main-map>'
        }).
        when('/preferences', {
          template: '<preference-list></preference-list>'
        }).
        when('/browselocations', {
          template: '<browse-locations></browse-locations>'
        }).
        when('/about', {
          template: '<about-page></about-page>'
        }).
        otherwise('/home');
    }
  ]);
