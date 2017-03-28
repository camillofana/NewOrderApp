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

                      <div ng-controller="UsersController">
                        <!-- Page content-->
                        <div class="page-content">
                          <!-- Start Products Page Angular content -->
                          <table class="table table-hover">
                            <tr>
                              <th>user_id</th>
                              <th>user_name</th>
                              <th>user_email</th>
                              <th>administrator</th>
                            </tr>
                            <tr ng-repeat="user in users">
                              <td>{{user.user_id}}</td>
                              <td>{{user.user_name}}</td>
                              <td>{{user.user_email}}</td>
                              <td>{{user.administrator}}</td>
                            </tr>
                          </table>
                          <!-- End Products Page Angular content -->
                        </div>
                      </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /#page-content-wrapper -->

<?php include 'footer.php';?>
