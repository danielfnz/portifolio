(function() {
	'use strict';

	angular.module('app', [
		'ngRoute',
		'app.inicio',
		'app.login',
		'app.painel',
		
		])
	.run(function($rootScope, $route, $routeParams, $location,LoginService) {		
		$rootScope.$on('$routeChangeStart',function(angularEvent, newUrl){
			if(newUrl.requerAutenticacao) {
				if(LoginService.GetAutenticado()!=true){
					console.log("Não Autenticado");
					$location.path('/'); 
				}
			}
		})
	})
	.config(function($routeProvider) {
		$routeProvider
		.when("/", {
			templateUrl : "app/inicio/inicio.view.html",
			controller:"inicioController",
			requerAutenticacao: false
		})
		.when("/cadastro", {
			templateUrl : "app/login/cadastro.view.html",
			controller:"loginController",
			requerAutenticacao: false
		})
		.when("/painel", {
			templateUrl : "app/painel/painel.view.html",
			controller:"painelController",
			requerAutenticacao: true
		})
		.when("/painel/reportar", {
			templateUrl : "app/painel/reportar.view.html",
			controller:"painelController",
			requerAutenticacao: true
		})
		.when("/painel/trocaritem", {
			templateUrl : "app/painel/trocaritem.view.html",
			controller:"trocaController",
			requerAutenticacao: true
		})

	});

})();