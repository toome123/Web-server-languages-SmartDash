'use strict';

angular.module('myApp.home', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/home', {
    templateUrl: 'app/home/home.html',
    controller: 'HomeCtrl'
  });
}])

.controller('HomeCtrl', function($scope,Devices, deviceValue) {
	$scope.loading = true;
	Devices.get()
			.success(function(data) {
				$scope.deviceData = data;
				$scope.loading = false;
			});
});