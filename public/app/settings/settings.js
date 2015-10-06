'use strict';

angular.module('myApp.settings', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/settings', {
    templateUrl: 'app/settings/settings.html',
    controller: 'SettingsCtrl'
  });
}])

.controller('SettingsCtrl', function($scope,Settings) {
		$scope.loading = true;
		//Allowned frequency
		$scope.frequency = [1000,2000,3000,5000,10000];
		Settings.get()
			.success(function(data) {
				$scope.settings = data;
				$scope.loading = false;
		});


		$scope.submitSettings = function(){
			$scope.loading = true;

			Settings.save($scope.settingData).success(function(data){
				$scope.settingData = {};
				Settings.get()
						.success(function(getData){
							$scope.settings = getData;
							$scope.loading = false;
						});
			}).error(function(data){
					console.log(data);
			});
		};

		$scope.deleteSetting = function(id) {
			$scope.loading = true; 

			Settings.destroy(id)
				.success(function(data) {

					// Ако е успешно трябва да презаредим инфото
					Settings.get()
						.success(function(getData){
							$scope.settings = getData;
							$scope.loading = false;
						});

				});
		};

});