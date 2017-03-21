/*jslint browser: true*/
/*global console, MyApp*/

MyApp.angular.controller('UserPageController', ['$scope', '$http', 'InitService', function ($scope, $http, InitService) {
  'use strict';
  
  InitService.addEventListener('ready', function () {
    // DOM ready
    console.log('UserPageController: ok, DOM ready');

    // You can access angular like this:
    // MyApp.angular
    
    // And you can access Framework7 like this:
    // MyApp.fw7.app
  });
    
    // Function to get products details from the database
    getInfo();
    function getInfo(){
        // Sending request to EmpDetails.php files
        $http.post('databaseFiles/useList.php').then(function successCallback(data){
            // Stored the returned data into scope
            $scope.users = data.data;
        });
    }
    
     
  
}]);