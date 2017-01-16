(function() {
	'use strict';

	angular
	.module('app.painel')
	.controller('trocaController', trocaController);

	function trocaController($scope,NgMap,PainelService,$rootScope) { 

		PainelService.GetMyItems().then(function(items){
			$scope.inventario = items;

			$scope.meusPontosTotais = 0;
			angular.forEach(items, function(value, key) {
				$scope.meusPontosTotais += (value.item.points * value.quantity);
			});

		});

		PainelService.GetAllSobreviventes().then(function(sobreviventes){
			$scope.todosSobreviventes = sobreviventes;
		});


		$scope.pontosCompra =0; 
		$scope.pontosPagamento =0; 
		$scope.itemsCompra = [
		{name:'Water', count:0},
		{name:'Food', count:0},
		{name:'Medication', count:0},
		{name:'Ammunition', count:0}
		];
		$scope.itemsPagamento = [
		{name:'Water', count:0},
		{name:'Food', count:0},
		{name:'Medication', count:0},
		{name:'Ammunition', count:0}
		];
		$scope.addPontosCompra = function(item){
			switch(item) {
				case 'Water': {
					$scope.pontosCompra +=4; 
					break;
				}
				case 'Food': {
					$scope.pontosCompra +=3; 
					break;
				}
				case 'Medication': {
					$scope.pontosCompra +=2; 
					break;
				}
				case 'Ammunition': {
					$scope.pontosCompra +=1; 
					break;
				}
			}
		};
		$scope.removePontosCompra = function(item){
			switch(item) {
				case 'Water': {
					if($scope.pontosCompra!=0)  $scope.pontosCompra -=4; break;
				}
				case 'Food': {
					if($scope.pontosCompra!=0)  $scope.pontosCompra -=3; break;
				}
				case 'Medication': {
					if($scope.pontosCompra!=0)  $scope.pontosCompra -=2; break;

				}
				case 'Ammunition': {
					if($scope.pontosCompra!=0)  $scope.pontosCompra -=1; break;

				}
			}
		};

		$scope.addPontosPagamento= function(item){
			switch(item) {
				case 'Water': {
					$scope.pontosPagamento +=4; 
					break;
				}
				case 'Food': {
					$scope.pontosPagamento +=3; 
					break;
				}
				case 'Medication': {
					$scope.pontosPagamento +=2; 
					break;
				}
				case 'Ammunition': {
					$scope.pontosPagamento +=1; 
					break;
				}
			}
		};

		$scope.realizarTroca =  function realizarTroca() {		
		var itemsCompra = "";
		var itemsPagamento = "";
		angular.forEach($scope.itemsCompra, function(value, key) {
			itemCompra+=(value.name+':'+value.count+';');
		});	
		angular.forEach($scope.itemsPagamento, function(value, key) {
			itemsPagamento+=(value.name+':'+value.count+';');
		});	

		};

		$scope.limparItems = function(){    
			$scope.itemsCompra = [
			{name:'Water', count:0},
			{name:'Food', count:0},
			{name:'Medication', count:0},
			{name:'Ammunition', count:0}
			];
			$scope.itemsPagamento = [
			{name:'Water', count:0},
			{name:'Food', count:0},
			{name:'Medication', count:0},
			{name:'Ammunition', count:0}
			];
			$scope.pontosCompra =0; 
			$scope.pontosPagamento =0; 
		};

	}

})();