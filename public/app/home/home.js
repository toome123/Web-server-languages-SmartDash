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
	$scope.fetchNewData = function(){
		Devices.get()
			.success(function(data) {
				$scope.deviceData = data;
				$scope.loading = false;
				$scope.generateChart('Влажност');
			});

	};
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

});