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
                <h3 class="navbar-text text-center">USERS</h3> <!-- Navbar title - replace with current section -->
              </div>
            </div>
          </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <?php include 'fab.php';?> <!-- Recall floating button -->

                      <div class="list-group" ng-controller="UsersController">
                        <a href="#" class="list-group-item" ng-repeat="user in users">
                          <h4 class="list-group-item-heading">{{user.user_name}}</h4>
                          <p class="list-group-item-text">{{user.user_email}}</p>
                          <p class="list-group-item-text">Admin: {{user.administrator}}</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /#page-content-wrapper -->

<?php include 'footer.php';?>
