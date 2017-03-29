<?php include 'head.php';?>

<body>

    <div id="wrapper" class="">

        <?php include 'sidebar.php';?>

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
                      <?php include 'fab.php';?> <!-- Recall floating button -->
                      <div ng-controller="DbController">
                          <nav class="navbar navbar-default">
                            <div class="navbar-header">
                              <!-- <div class="alert alert-default navbar-brand search-box">
                                <button class="btn btn-primary" ng-show="show_form" ng-click="formToggle()">Add Order <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                              </div> -->
                              <div class="alert alert-default input-group search-box"></div>
                                <span class="input-group-btn">
                                  <input type="text" class="form-control" placeholder="Live search for product name, provide etc..." ng-model="search_query">
                                </span>
                            </div>
                          </nav>
                      <div class="col-md-6 col-md-offset-3">

                      <!-- Include form template which is used to insert data into database -->
                        <div ng-include src="'templates/form.html'"></div>

                      <!-- Include form template which is used to edit and update data into database -->
                        <div ng-include src="'templates/editForm.html'"></div>
                      </div>
                      <div class="clearfix"></div>

                      <div class="list-group">
                        <a href="#" class="list-group-item" ng-repeat="detail in details| filter:search_query" ng-click="orderDetail(detail)" data-toggle="modal" data-target="#myModal">
                          <span class="badge btn btn-info">
                            {{detail.OrderNumber}}
                          </span>
                          <h4 class="list-group-item-heading">{{detail.name}}</h4>
                          <p class="list-group-item-text">{{detail.user_name}}</p>
                        </a>
                      </div>

                      <!-- Modal -->
                      <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content" >
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Order details</h4>
                            </div>
                            <!-- Modal open -->
                            <div class="modal-body">
                              <div class="list-group">
                                <a href="#" class="list-group-item" ng-repeat="Odetail in Odetails">
                                  <h4 class="list-group-item-heading">{{Odetail.name}}</h4>
                                  <p class="list-group-item-text">Amount: {{Odetail.ammount}} {{Odetail.unit}}</p>
                                </a>
                              </div>
                            </div>
                          </div>
                          <!-- Modal content close -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <!-- /#page-content-wrapper -->

<?php include 'footer.php';?>
