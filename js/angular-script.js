// Application module
var crudApp = angular.module('crudApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){

    // Function to get employee details from the database
    getInfo();
    function getInfo(){
        // Sending request to EmpDetails.php files
        $http.post('databaseFiles/ordList.php').success(function(data){
            // Stored the returned data into scope
            $scope.details = data;
        });
    }


    $scope.insertInfo = function(info){
        $http.post('databaseFiles/insertDetails.php',{"name":info.name,"email":info.email,"address":info.address,"gender":info.gender}).success(function(data){
            if (data == true) {
            getInfo();
            // Hide details insertion form
            $('#empForm').css('display', 'none');
            }
        });
    }


    $scope.currentUser = {};
    $scope.editInfo = function(info){
        $scope.currentUser = info;
        $('#empForm').slideUp();
        $('#editForm').slideToggle();
    }


    $scope.UpdateInfo = function(info){
        $http.post('databaseFiles/updateDetails.php',{"id":info.emp_id,"name":info.emp_name,"email":info.emp_email,"address":info.emp_address,"gender":info.emp_gender}).success(function(data){
        $scope.show_form = true;
            if (data == true) {
            getInfo();
            }
        });
    }

    $scope.deleteInfo = function(info){
        $http.post('databaseFiles/deleteDetails.php',{"del_id":info.emp_id}).success(function(data){
            if (data == true) {
            getInfo();
            }
        });
    }

    //function dashboard(idorder)
    $scope.orderDetail = function(info){
      $http.post('databaseFiles/DettailsOrdersArray.php',
      {"ID":info.ID}).success(function(data){
        $scope.Odetails = data;
      });
    }

}]);


crudApp.controller("ProductController",['$scope','$http', function($scope,$http){

    // Function to get employee details from the database
    getInfo();
    function getInfo(){
        // Sending request to EmpDetails.php files
        $http.post('databaseFiles/proList.php').success(function(data){
            // Stored the returned data into scope
            $scope.details = data;
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
