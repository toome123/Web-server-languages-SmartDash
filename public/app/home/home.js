'use strict';

angular.module('myApp.home', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/home', {
    templateUrl: 'app/home/home.html',
    controller: 'HomeCtrl'
  });
}])
.controller('HomeCtrl', function($scope,Devices, deviceValue,$timeout) {
	$scope.loading = true;
	$scope.selectedDevice = 'Температура';
	$scope.fetchNewData = function(){
		Devices.get()
			.success(function(data) {
				$scope.deviceData = data;
				$scope.loading = false;
				$scope.generateChart($scope.selectedDevice);
			});

	};
	$scope.generateChart = function(deviceName){
		$scope.data = [];
		$scope.testData = [];
		$scope.labels = [];
		deviceValue.get(deviceName).success(function(data){
			for (var i = 0; i < 7; i++) {
				$scope.testData.push(data[i]['value']);
				$scope.labels.push(data[i]['created_at']);
			};
  			$scope.series = [deviceName];
  			$scope.data = [$scope.testData];
		});
	};

});