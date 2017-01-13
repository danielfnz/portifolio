(function() {
	'use strict';

	angular
	.module('app')
	.controller('loginController', loginController);

	function loginController($scope,LoginService,$location,$rootScope) { 
		$scope.logado = $rootScope.globals;
		$scope.login =  function login(user) {
			LoginService.GetById(user.identificacao).then(function(data) {
				if (!data.message) { 
					LoginService.SetCredentials(data);
					$location.path('/painel');
				} else {

				}
			});
		}
	}

})();