(function() {
    'use strict';

angular.module('app', ['ngRoute'])
.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "app/inicio/inicio.view.html",
        controller:"inicioController"
    })
    .when("/painel", {
        templateUrl : "app/painel/painel.view.html"
    })
    .when("/green", {
        templateUrl : "green.htm"
    })
    .when("/blue", {
        templateUrl : "blue.htm"
    });
    
});

})();