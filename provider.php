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

                      <div class="list-group">
                        <a href="#" class="list-group-item" ng-repeat="provider in providers">
                          <h4 class="list-group-item-heading">{{provider.name}}</h4>
                          <p class="list-group-item-text"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{provider.agent_name}}</p>
                          <p class="list-group-item-text"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> {{provider.email}}</p>
                          <p class="list-group-item-text"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> {{provider.phone}}</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- /#page-content-wrapper -->

<?php include 'footer.php';?>
