(function() {
    'use strict';

angular
    .module('app.painel')
    .controller('painelController', painelController);

function painelController($scope,NgMap,PainelService,$rootScope) { 
   

  $scope.meusdados = PainelService.MeusDados();
  PainelService.GetMyItems().then(function(items){
   $rootScope.inventario = items;
    angular.forEach(items, function(value, key) {
      $rootScope.meusPontosTotais += (value.item.points * value.quantity);
    });
  });

  if($scope.meusdados.lonlat!=null){
  $scope.posicaoAtual = $scope.meusdados.lonlat.replace('POINT (','').replace(')','').replace(' ',',');
  }

  PainelService.GetAllSobreviventes().then(function(sobreviventes){
  $scope.todosSobreviventes = sobreviventes;
  });

  $scope.render = true;
  $scope.show = true;
  $scope.latitude = "";
  $scope.longitude = "";
  
  $scope.$on('mapInitialized', function(evt, evtMap) {
  $scope.map = evtMap;
  $scope.marker = new google.maps.Marker({position: evt.latLng, map: $scope.map});
  $scope.click = function(evt) {
    $scope.show = false;
    $scope.latitude = evt.latLng.lat().toPrecision(8);
    $scope.longitude  = evt.latLng.lng().toPrecision(8);
    $scope.marker.setPosition(evt.latLng);
    $scope.map.panTo(evt.latLng);
    $scope.map.setZoom(8);
       
    }
  });

  $scope.sobrevivente = {};

  $scope.atualizarPerfil = function atualizarPerfil(){
    $scope.meusdados.lonlat = "POINT ("+$scope.latitude+" "+$scope.latitude+")";
    PainelService.SetSobrevivente($scope.meusdados);
  }

  $scope.reportarInfectado = function reportarInfectado(data){
    var id = data.Infectado.location.replace('http://zssn-backend-example.herokuapp.com/api/people/','');
    PainelService.ReportarInfectado(id).then(function(response){
      if(response) {
        console.log("Voce ja reportou esse cara");
      }
      else {
      console.log('Reportado');
      }
    });

}
  $scope.buscarInventorio = function buscarInventorio(data){
    var id = data.inventario.location.replace('http://zssn-backend-example.herokuapp.com/api/people/','');
    PainelService.GetItems(id).then(function(items){
      if(items.length!=0) {
        console.log(items);
      }
      else {
      console.log('nao tem item');
      }
    });

}


}

})();