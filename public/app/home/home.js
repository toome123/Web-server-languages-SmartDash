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
<<<<<<< HEAD
=======




	$scope.generateChart = function(deviceName){
		$scope.data = [];
		$scope.testData = [];
		deviceValue.get(deviceName).success(function(data){
			for (var i = 0; i < 7; i++) {
				$scope.testData.push(data[i]['value']);
			};
			$scope.labels = ["January", "February", "March", "April", "May", "June", "July"];
  			$scope.series = [deviceName];
  			$scope.data = [$scope.testData];
		});
	};


	


>>>>>>> bb682a2e4c2e7c44c9c155957fa21b92efb16c66
});