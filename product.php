<html ng-app="crudApp">
<head>
<title>AngularJS Directive Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Include Bootstrap CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Include jQuery library -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Include main CSS -->
<!-- Include Bootstrap Javascript -->
<script src="js/bootstrap.min.js"></script>
<!-- Include AngularJS library -->
<script src="lib/angular/angular.min.js"></script>
</head>
<body>
<div class="container wrapper" ng-controller="ProductController">
<h1 class="text-center">PRODUCTS</h1>
<nav class="navbar navbar-default">
<div class="navbar-header">
<div class="alert alert-default navbar-brand search-box">
<button class="btn btn-primary" ng-show="show_productForm" ng-click="formToggle()">Add Product <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
</div>
<div class="alert alert-default input-group search-box">
<span class="input-group-btn">
<input type="text" class="form-control" placeholder="Search Order Into Database..." ng-model="search_query">
</span>
</div>
</div>
</nav>
    <div class="col-md-6 col-md-offset-3">

<!-- Include form template which is used to insert data into database -->
<div ng-include src="'templates/productform.html'"></div>

<!-- Include form template which is used to edit and update data into database -->
<div ng-include src="'templates/editForm.html'"></div>
</div>
<div class="clearfix"></div>
	
<!-- Table to show order detalis -->
<div id="table_content"></div>	
	
<!-- Table to show employee detalis -->
<div class="table-responsive">
<table class="table table-hover">
<tr>
<!--<th>id</th>-->
<th>provider</th>
<th>name</th>
<th>stored</th>
<th>unit</th>
<!--
<th>description</th>
<th>pcode</th>
<th>packageN</th>
<th>Min Stored</th>
<th>mode</th>
<th>hide</th>
-->
<th></th>
</tr>
<tr ng-repeat="detail in details| filter:search_query" ng-switch="detail.hide">
<!--<td ng-switch-when="h" style="background-color: #7f7f7f; color: #c1c1c1;">{{detail.id}}</td>-->
<td ng-switch-when="h" style="background-color: #7f7f7f; color: #c1c1c1;">{{detail.provider}}</td>
<td ng-switch-when="h" style="background-color: #7f7f7f; color: #c1c1c1;">{{detail.name}}</td>
<td ng-switch-when="h" style="background-color: #7f7f7f; color: #c1c1c1;">{{detail.stored}}</td>
<td ng-switch-when="h" style="background-color: #7f7f7f; color: #c1c1c1;">{{detail.unit}}</td>
<!--
<td ng-switch-when="h" style="background-color: #7f7f7f; color: #c1c1c1;">{{detail.description}}</td>
<td ng-switch-when="h" style="background-color: #7f7f7f; color: #c1c1c1;">{{detail.pcode}}</td>
<td ng-switch-when="h" style="background-color: #7f7f7f; color: #c1c1c1;">{{detail.packageN}}</td>
<td ng-switch-when="h" style="background-color: #7f7f7f; color: #c1c1c1;">{{detail.MinStored}}</td>
<td ng-switch-when="h" style="background-color: #7f7f7f; color: #c1c1c1;">{{detail.mode}}</td>
<td ng-switch-when="h" style="background-color: #7f7f7f; color: #c1c1c1;">{{detail.hide}}</td>
-->
<td ng-switch-when="h" style="background-color: #7f7f7f; color: #c1c1c1;">
<button class="btn btn-warning" ng-click="editInfo(detail)" title="Edit"><span class="glyphicon glyphicon-edit"></span></button>
<button class="btn btn-danger" ng-click="deleteInfo(detail)" title="Delete"><span class="glyphicon glyphicon-trash"></span></button>
</td>
    
<!--<td ng-switch-default>{{detail.id}}</td>-->
<td ng-switch-default>{{detail.provider}}</td>
<td ng-switch-default>{{detail.name}}</td>
<td ng-switch-default>{{detail.stored}}</td>
<td ng-switch-default>{{detail.unit}}</td>
<!--
<td ng-switch-default>{{detail.description}}</td>
<td ng-switch-default>{{detail.pcode}}</td>
<td ng-switch-default>{{detail.packageN}}</td>
<td ng-switch-default>{{detail.MinStored}}</td>
<td ng-switch-default>{{detail.mode}}</td>
<td ng-switch-default>{{detail.hide}}</td>
-->
<td ng-switch-default>
<button class="btn btn-warning" ng-click="editInfo(detail)" title="Edit"><span class="glyphicon glyphicon-edit"></span></button>
<button class="btn btn-danger" ng-click="deleteInfo(detail)" title="Delete"><span class="glyphicon glyphicon-trash"></span></button>
</td>
</tr>
</table>
</div>
</div>

<!-- Include controller -->
<script src="js/angular-script.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>