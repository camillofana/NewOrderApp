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
                <h3 class="navbar-text text-center">DASHBOARD</h3> <!-- Navbar title - replace with current section -->
              </div>
            </div>
          </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <?php include 'fab.php';?> <!-- Recall floating button -->

                      <div class="list-group">
                        <a href="#" class="list-group-item">
                          <h4 class="list-group-item-heading"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Statistics</h4>
                          <p class="list-group-item-text">Total products stored:</p>
                          <p class="list-group-item-text">Total providers:</p>
                          <p class="list-group-item-text">Last product created:</p>
                        </a>
                      </div>
                      <div class="list-group">
                        <a href="#" class="list-group-item">
                          <h4 class="list-group-item-heading"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Your last order</h4>
                          <p class="list-group-item-text">Sended to:</p>
                          <p class="list-group-item-text">Details</p>
                        </a>
                      </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /#page-content-wrapper -->

<?php include 'footer.php';?>
