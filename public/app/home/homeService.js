angular.module('myApp.deviceApi',[])
		
		.factory('Devices', function($http){
			return {
					get: function(){
						return $http.get('api/devices');
					}

			}
		});