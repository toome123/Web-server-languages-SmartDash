'use strict';

// Declare app level module which depends on views, and components
angular.module('myApp', [
  'ngRoute',
  'myApp.settingsApi',
  'myApp.deviceApi',
  'myApp.home',
  'myApp.settings',
  'myApp.version',
  'chart.js'
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider.otherwise({redirectTo: '/home'});
}]);
