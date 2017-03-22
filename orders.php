<!DOCTYPE html>
<html ng-app="crudApp">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ORDERLY</title>
    <!-- Include Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import Floating action button CSS -->
    <link type="text/css" rel="stylesheet" href="css/fab.css"  media="screen,projection"/>
    <!-- Include main CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Include jQuery library -->
     <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Include AngularJS library -->
    <script src="lib/angular/angular.min.js"></script>
    <!-- Custom Font Montserrat -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>

<body>

    <div id="wrapper" class="">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <img src="img/logo-color.png" class="img-responsive" height="">
                    </a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-cubes fa-lg" aria-hidden="true"></span>  Products</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-truck fa-lg" aria-hidden="true"></span>  Providers</a>
                </li>
                <li>
                    <a href="orders.php"><span class="fa fa-shopping-cart fa-lg" aria-hidden="true"></span>  Orders</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-users fa-lg" aria-hidden="true"></span>  Users</a>
                </li>
                <li>
                    <button type="button" class="btn btn-default"><span class="fa fa-sign-out fa-lg" aria-hidden="true"></span>
                        Logout
                    </button>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button href="#menu-toggle" id="menu-toggle" type="button" class="btn btn-default navbar-btn pull-left">
                  <span class="fa fa-bars fa-lg" aria-hidden="true"></span>
                </button>
                <h3 class="navbar-text text-center">ORDERS</h3> <!-- Navbar title - replace with current section -->
              </div>
            </div>
          </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                      <div ng-controller="DbController">
                          <nav class="navbar navbar-default">
                            <div class="navbar-header">
                              <!-- <div class="alert alert-default navbar-brand search-box">
                                <button class="btn btn-primary" ng-show="show_form" ng-click="formToggle()">Add Order <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                              </div> -->
                              <div class="alert alert-default input-group search-box">
                                <span class="input-group-btn">
                                  <input type="text" class="form-control" placeholder="Live search for product name, provide etc..." ng-model="search_query">
                                </span>
                              </div>
                            </div>
                          </nav>
                          <div class="col-md-6 col-md-offset-3">

                      <!-- Include form template which is used to insert data into database -->
                        <div ng-include src="'templates/form.html'"></div>

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
                            <th>ORDER ID</th>
                            <th>PROVIDER</th>
                            <th>SENDER</th>
                            <th>CREATOR</th>
                            <th></th>
                          </tr>
                          <tr ng-repeat="detail in details| filter:search_query">
                            <td>
                              <div class="btn btn-info" ng-click="orderDetail(detail)" data-toggle="modal" data-target="#myModal">
                                {{detail.OrderNumber}}
                              </div>
                            </td>
                            <td>{{detail.name}}</td>
                            <td>{{detail.sender}}</td>
                            <td>{{detail.user_name}}</td>
                            <td>
                              <button class="btn btn-info" ng-click="orderDetail(detail)" title="Detail"><span class="fa fa-eye fa-lg"></span></button>
                              <button class="btn btn-warning" ng-click="editInfo(detail)" title="Edit"><span class="fa fa-pencil fa-lg"></span></button>
                              <button class="btn btn-danger" ng-click="deleteInfo(detail)" title="Delete"><span class="fa fa-trash fa-lg"></span></button>
                            </td>
                          </tr>
                        </table>
                      </div>

                      <!-- Modal -->
                      <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Order details</h4>
                            </div>
                            <!-- Modal open -->
                            <div class="modal-body">
                              <!-- Table to show employee detalis -->
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>ID</th>
                                        <th>Product</th>
                                        <th>Amount</th>
                                        <th>Unit</th>
                                    </tr>
                                    <tr ng-repeat="Odetail in Odetails| filter:search_query">
                                        <td>{{Odetail.id}}</td>
                                        <td>{{Odetail.name}}</td>
                                        <td>{{Odetail.ammount}}</td>
                                        <td>{{Odetail.unit}}</td>
                                    </tr>
                                </table>
                            </div>
                            </div>
                            <!-- Modal close -->
                          </div>
                        </div>
                      </div>
                    </div>
        <!-- /#page-content-wrapper -->

        <!-- Include controller -->
        <script src="js/angular-script.js"></script>
        <!--Import jQuery before materialize.js -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include Bootstrap Javascript -->
            	<script src="js/bootstrap.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script>

    </body>

    </html>
