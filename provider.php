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
                <h3 class="navbar-text text-center">PROVIDERS</h3> <!-- Navbar title - replace with current section -->
              </div>
            </div>
          </nav>
            <div class="container-fluid" ng-controller="ProvidersController">
                <div class="row">
                    <div class="col-lg-12">
                      <?php include 'fab.php';?> <!-- Recall floating button -->
											
											
											  <!-- Start Providers Page Angular content -->
                          <table class="table table-hover">
                            <tr>
                              <th>id</th>
                              <th>name</th>
                              <th>email</th>
                              <th>phone</th>
															<th>agent_name</th>
                            </tr>
                            <tr ng-repeat="provider in providers">
                              <td>{{provider.id}}</td>
                              <td>{{provider.name}}</td>
                              <td>{{provider.email}}</td>
                              <td>{{provider.phone}}</td>
															 <td>{{provider.agent_name}}</td>
                            </tr>
                          </table>
                          <!-- End Providers Page Angular content -->
											
											
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /#page-content-wrapper -->

<?php include 'footer.php';?>
