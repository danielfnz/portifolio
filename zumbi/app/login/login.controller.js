(function() {
	'use strict';

	angular
	.module('app.login')
	.controller('loginController', loginController);

	function loginController($scope,LoginService,$location,$rootScope,NgMap) {	
		$scope.logado = LoginService.GetAutenticado();

		$scope.deslogar = function deslogar(){
			LoginService.ResetAutenticado();	
		} 
		$scope.login =  function login(user) {
			LoginService.GetById(user.identificacao).then(function(data) {
				if (!data.message) { 
					LoginService.SetAutenticado(data);
					$location.path('/painel');
				} else {

				}
			});
		}

		$scope.cadastro =  function cadastro(user) {
			LoginService.Create(user).then(function(data) {
				if (!data.message) { 
					LoginService.SetAutenticado(data);
					$location.path('/painel');
				} else {

				}
			});
		}


	$scope.inventario = [
	   {name:'Water', count:0},
	   {name:'Food', count:0},
	   {name:'Medication', count:0},
	   {name:'Ammunition', count:0}
	];

	$scope.limparInventario = function(){    
		$scope.inventario = [
		   {name:'Water', count:0},
		   {name:'Food', count:0},
		   {name:'Medication', count:0},
		   {name:'Ammunition', count:0}
		];
	}

	//MAP
	$scope.latitude = "-11.436955216143177";
	$scope.longitude = "-53.4375";

	$scope.$on('mapInitialized', function(evt, evtMap) {
	$scope.map = evtMap;
	$scope.marker = new google.maps.Marker({position: evt.latLng, map: $scope.map});
	$scope.click = function(evt) {
		$scope.latitude = evt.latLng.lat().toPrecision(8);
		$scope.longitude = evt.latLng.lng().toPrecision(8);
		$scope.marker.setPosition(evt.latLng);
		$scope.map.panTo(evt.latLng);
		$scope.map.setZoom(7);
		$scope.localizacao = "POINT ("+$scope.latitude+" "+$scope.longitude+")";
	}
	});

	$scope.cadastro =  function cadastro(user) {
		var items = "";
	     angular.forEach($scope.inventario, function(value, key) {
	     	items+=(value.name+":"+value.count+";");          
        });

		user.person.lonlat = $scope.localizacao;
		user.items = items;
		LoginService.Create(user).then(function(data) {
			if (!data.message) { 
				LoginService.SetAutenticado(data);
				$location.path('/painel');
			} else {
				console.log("falha na criacao");
			}
		});
	}

	}

})();