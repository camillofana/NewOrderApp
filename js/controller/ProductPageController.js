/*jslint browser: true*/
/*global console, MyApp*/

MyApp.angular.controller('ProductPageController', ['$scope', '$http', 'InitService', function ($scope, $http, InitService) {
  'use strict';
  
  InitService.addEventListener('ready', function () {
    // DOM ready
    console.log('ProductPageController: ok, DOM ready');

    // You can access angular like this:
    // MyApp.angular
    
    // And you can access Framework7 like this:
    // MyApp.fw7.app
  });
    
    // Function to get products details from the database
    getInfo();
    function getInfo(){
        // Sending request to EmpDetails.php files
        $http.post('databaseFiles/proList.php').then(function successCallback(data){
            // Stored the returned data into scope
            $scope.details = data.data;
        });
    }
    
    $scope.insertInfo = function(info){
        $http.post('databaseFiles/insertProduct.php',{"provider":info.provider,"email":info.email,"address":info.address,"gender":info.gender}).success(function(data){
            if (data == true) {
            getInfo();
            // Hide details insertion form
            $('#empForm').css('display', 'none');
            }
        });
    }
     
  
}]);