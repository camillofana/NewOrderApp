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

                        <div class="list-group">
                          <a href="#" class="list-group-item" ng-repeat="detail in details| filter:search_query" ng-switch="detail.hide">
                            <h4 class="list-group-item-heading">{{detail.name}}</h4>
                            <p class="list-group-item-text">{{detail.provider}}</p>
                            <p class="list-group-item-text">Stored: {{detail.stored}} {{detail.unit}}</p>
                          </a>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>

<?php include 'footer.php';?>
