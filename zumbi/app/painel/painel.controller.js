(function() {
    'use strict';

angular
    .module('app.painel')
    .controller('painelController', painelController);

function painelController($scope,NgMap,PainelService,$rootScope,Flash,$anchorScroll,$location) { 
  //Declaração do model de reportar usuario
  $scope.sobrevivente = {};

  //Busca dados do usuario logado
  PainelService.GetSobrevivente().then(function(items){
      $scope.meusdados = items;

      //Posição posicaoAtual do sobrevivente para utilizar no marcador no mapa
      if(items.lonlat!=null){
        $scope.posicaoAtual = $scope.meusdados.lonlat.replace('POINT (','').replace(')','').replace(' ',',');
      }
      else {
        var message = '<strong> Atualize sua posição atual urgente!</strong> ';
        Flash.create('danger', message, 0, {class: 'custom-class', id: 'mensagem'}, true);
        $scope.posicaoAtual = ("0,0");

        //Scroll ate a mensagem, para forcar o sobrevivente ver o alerta.
        $location.hash('mensagem');
        $anchorScroll();
      }
  });
  
  //Busca na API os items do inventario do sobrevivente
  PainelService.GetMyItems().then(function(items){
   $rootScope.inventario = items;
    angular.forEach(items, function(value, key) {
      $scope.meusPontosTotais += (value.item.points * value.quantity);
    });
  });

  //Busca na API todos os sobreviventes para que seja possivel realizar uma busca por nome
  //Utilizado para reportar sobrevivente infectado
  PainelService.GetAllSobreviventes().then(function(sobreviventes){
  $scope.todosSobreviventes = sobreviventes;
  });

  //===================Mapa de localização atual=========================
  $scope.render = true;
  $scope.show = true;
  $scope.latitude = "";
  $scope.longitude = "";  

  //Inicia o mapa
  $scope.$on('mapInitialized', function(evt, evtMap) {
  $scope.map = evtMap

  //Inicia o marcador
  $scope.marker = new google.maps.Marker({position: evt.latLng, map: $scope.map});

  //Função chamada para marcar a nova posição no mapa de localização atual
  $scope.click = function(evt) {
    $scope.show = false;
    $scope.latitude = evt.latLng.lat().toPrecision(8);
    $scope.longitude  = evt.latLng.lng().toPrecision(8);
    $scope.marker.setPosition(evt.latLng);
    $scope.map.panTo(evt.latLng);
    $scope.map.setZoom(8);       
    }
  });
  //=====================================================================

  //Função para atualizar a posição no mapa de localização
  $scope.atualizarPerfil = function atualizarPerfil(){
    //Posição no formato esperado pela API
    $scope.meusdados.lonlat = "POINT ("+$scope.latitude+" "+$scope.longitude+")";
    $scope.posicaoAtual = $scope.latitude+","+$scope.longitude;
    //Chama o service responsavel por atualizar a posição
    PainelService.SetSobrevivente($scope.meusdados).then(function(response){
      if(response.lonlat!=null) {
        //Informa o sucesso na atualização da posição
        var message = '<strong> Posição atual atualizada com sucesso!</strong> ';
        Flash.create('success', message, 0, {class: 'custom-class', id: 'mensagem'}, true);
      }
      else {
        //Informa a falha na atualização da posição
        var message = '<strong> Não foi possivel atualizar sua posição atual, tente novamente!</strong> ';
        Flash.create('danger', message, 0, {class: 'custom-class', id: 'mensagem'}, true);
      }
      //Scroll ate a mensagem, para forcar o sobrevivente ver o alerta.
      $location.hash('mensagem');
      $anchorScroll();
    });
  }

  //Função para reportar um sobrevivente com suspeita de infeção pelo virus
  $scope.reportarInfectado = function reportarInfectado(data){
    //Captura o id do sobrevivente suspeito selecionado pela busca
    var id = data.Infectado.location.replace('http://zssn-backend-example.herokuapp.com/api/people/','');
    //Chama o service responsavel por reportar sobrevivente infectado
    PainelService.ReportarInfectado(id).then(function(response){
      if(response) {
        var message = '<strong> Você ja reportou esse sobrevivente antes!</strong> ';
        Flash.create('danger', message, 0, {class: 'custom-class', id: 'mensagem'}, true);
      }
      else {
        var message = '<strong> Sobrevivente com suspeita de contaminação reportado com sucesso!</strong> ';
        Flash.create('success', message, 0, {class: 'custom-class', id: 'mensagem'}, true);
      }
      //Scroll ate a mensagem, para forcar o sobrevivente ver o alerta.
      $location.hash('mensagem');
      $anchorScroll();
    });
  }
}

})();