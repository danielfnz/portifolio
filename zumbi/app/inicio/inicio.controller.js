(function() {
    'use strict';

angular
    .module('app.inicio')
    .controller('inicioController', inicioController)
    .filter('porcentagem', ['$filter', function ($filter) {
    return function (input, decimals) {
      return $filter('number')(input * 100, decimals) + '%';
    };
    }]);

function inicioController($scope,NgMap,InicioService) { 
  InicioService.GetSobreviventesInfectados().then(function(items){
   $scope.SobreviventesInfectados = items.report.average_infected;
  });

  InicioService.GetSobreviventesNaoInfectados().then(function(items){
   $scope.SobreviventesNaoInfectados = items.report.average_healthy;
  });

  InicioService.GetPontosPerdidos().then(function(items){
   $scope.PontosPerdidos = items.report.total_points_lost;
  });

  InicioService.GetQuantidadeItemPorPessoa().then(function(items){
   $scope.QuantidadeItemPorPessoa = items.report.average_items_quantity_per_healthy_person;
   $scope.QuantidadeItemPorPessoaInfectada = items.report.average_items_quantity_per_person;
  });

  InicioService.GetLocalizacaoAll().then(function(items){
   $scope.sobreviventes = items;
  });

  $scope.render = true;
  $scope.validation_text = "";
  
  $scope.$on('mapInitialized', function(evt, evtMap) {
  $scope.map = evtMap;
  $scope.marker = new google.maps.Marker({position: evt.latLng, map: $scope.map});
  $scope.click = function(evt) {
    var latitude = evt.latLng.lat().toPrecision(8);
    var longitude = evt.latLng.lng().toPrecision(8);
    $scope.validation_text = "";
    $scope.marker.setPosition(evt.latLng);
    $scope.map.panTo(evt.latLng);
    $scope.map.setZoom(10);
       
    }
  });

}

})();