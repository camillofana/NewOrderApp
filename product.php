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
              <h3 class="navbar-text text-center">PRODUCTS</h3> <!-- Navbar title - replace with current section -->
            </div>
          </div>
        </nav>
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                    <?php include 'fab.php';?> <!-- Recall floating button -->
                    <div ng-controller="ProductController">
                        <nav class="navbar navbar-default">
                          <div class="navbar-header">
                            <div class="alert alert-default input-group search-box">
                              <button class="btn btn-primary" ng-show="show_productForm" ng-click="formToggle()">Add Product <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                            </div>
                            <span class="input-group-btn">
                              <input type="text" class="form-control" placeholder="Search for product name, provider or unit..." ng-model="search_query">
                            </span>
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

                        <div class="list-group" ng-repeat="detail in details| filter:search_query" ng-switch="detail.hide">
                          <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">{{detail.name}}</h4>
                            <p class="list-group-item-text">{{detail.provider}}</p>
                            <p class="list-group-item-text">Stored: {{detail.stored}} {{detail.unit}}</p>
                          </a>
                        </div>

                        <!-- Table to show employee detalis -->
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <tr>
                              <!--<th>id</th>-->
                              <th>NAME</th>
                              <th>PROVIDER</th>
                              <th>STORED</th>
                              <th>UNIT</th>
                              <!--
                              <th>description</th>
                              <th>pcode</th>
                              <th>packageN</th>
                              <th>Min Stored</th>
                              <th>mode</th>
                              <th>hide</th>
                                        -->
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
                                  <td ng-switch-default>{{detail.name}}</td>
                                  <td ng-switch-default>{{detail.provider}}</td>
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
                      </div>
                    </div>
                  </div>

<?php include 'footer.php';?>
