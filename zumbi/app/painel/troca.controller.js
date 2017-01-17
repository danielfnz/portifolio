(function() {
	'use strict';

	angular
	.module('app.painel')
	.controller('trocaController', trocaController);

	function trocaController($scope,NgMap,PainelService,$rootScope,localStorageService,Flash,$location,$anchorScroll) { 

		$scope.pontosCompra =0; 
		$scope.pontosPagamento =0; 
		$scope.trocaPerson = {};
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

		$scope.realizarTroca =  function realizarTroca() {	
		var data = {};
		var itemsCompra = "";
		var itemsPagamento = "";
		var meuNome = localStorageService.get('user').name;
		console.log($scope.trocaPerson);
		//Verifica se selecionou alum sobrevivente
		if($scope.trocaPerson.nome!=null) {

		var idPerson = $scope.trocaPerson.nome.location.replace('http://zssn-backend-example.herokuapp.com/api/people/','');
		
		angular.forEach($scope.itemsCompra, function(value, key) {
			if(value.count!=0)	itemsCompra+=(value.name+':'+value.count+';');
		});	
		
		angular.forEach($scope.itemsPagamento, function(value, key) {
			if(value.count!=0)	itemsPagamento+=(value.name+':'+value.count+';');
		});	

		data = {person_id:idPerson, consumer:{name:meuNome,pick:itemsCompra,payment:itemsPagamento}};

		PainelService.RealizarTroca(data).then(function(data){
			if(data==""){
				var message = '<strong> Parabens! A troca de items foi um sucesso!</strong> ';
	        	Flash.create('success', message, 0, {class: 'custom-class', id: 'mensagem'}, true);
			}
			else {
			 	var message = '<strong> Ops, não foi possivel realizar a troca dos items!</strong> ';
        		Flash.create('danger', message, 0, {class: 'custom-class', id: 'mensagem'}, true);
			}
			  	$location.hash('mensagem');
      			$anchorScroll();
		});
		}
		else {
			 var message = '<strong> Você esqueceu de selecionar o sobrevivente!</strong> ';
    		Flash.create('danger', message, 0, {class: 'custom-class', id: 'mensagem'}, true);
    			$location.hash('mensagem');
      			$anchorScroll();
		}
		};
	}

})();