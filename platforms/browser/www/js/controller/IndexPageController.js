/*jslint browser: true*/
/*global console, MyApp*/

MyApp.angular.controller('IndexPageController', ['$scope', '$http', 'InitService', function ($scope, $http, InitService) {
  'use strict';
  
  InitService.addEventListener('ready', function () {
    // DOM ready
    console.log('IndexPageController: ok, DOM ready');
    
    // You can access angular like this:
    // MyApp.angular
    
    // And you can access Framework7 like this:
    // MyApp.fw7.app
  });
    
       // Function to get order list from the database
    getInfo();
    function getInfo(){
        $http({
            method: 'get',
            url: 'databaseFiles/ordList.php'
        }).then(function successCallback(response) {
            // Store response data
            $scope.details = response.data;
        });
    }
    
    //function get order dettails titolo
    $scope.orderDetailTitolo = function(info){
      $http.post('databaseFiles/DettailsOrdersTitoloArray.php',
      {"ID":info.ID}).then(function successCallback(data){
        $scope.Tdetails = data.data;
      });
    }
    
    //function get order dettails
    $scope.orderDetail = function(info){
      $http.post('databaseFiles/DettailsOrdersArray.php',
      {"ID":info.ID}).then(function successCallback(data){
        $scope.Odetails = data.data;
      });
    }
  
}]);