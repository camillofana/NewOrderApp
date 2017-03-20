var orderlyApp = angular.module('orderlyApp', []);
orderlyApp.controller("DbController",['$scope','$http', function($scope,$http){
$scope.oneAtATime = true;
 
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


orderlyApp.controller("ProductController",['$scope','$http', function($scope,$http){

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
