var app = angular.module('DESECULARIZE-SITE', ['ui.bootstrap']).
  config(['$routeProvider', function($routeProvider) {
  $routeProvider.
      when('/main', {templateUrl: 'partials/main.html',   controller: 'main'}).
	  otherwise({redirectTo: '/main'});
}]);

