angular.module('myApp.deviceApi',[])
		
		.factory('Devices', function($http){
			return {
					get: function(){
						return $http.get('api/devices');
					}

			}
		})
		.factory('deviceValue', function($http){
			return {
					get: function($value){
						return $http.get('api/device/'+ $value);
					}

			}
		}).factory('settings', function($http){
			return {
					get: function(){
						return $http.get('api/settings');
					}

			}
		});