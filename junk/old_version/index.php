<!DOCTYPE html>
<html ng-app="crudApp">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AngularJS Directive Demo</title>
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
    <!-- Include Bootstrap Javascript -->
    	<script src="js/bootstrap.min.js"></script>

    <!-- Custom Font Montserrat -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper" class="toggled">

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
                    <a href="#"><span class="fa fa-shopping-cart fa-lg" aria-hidden="true"></span>  Orders</a>
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
                <h3 class="navbar-text">AngularJS CRUD Operations Demo</h3> <!-- Navbar title - replace with current section -->
              </div>
            </div>
          </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <?php include 'orders.php';?> <!-- Recall orders.php page -->
                      <?php include 'fab.php';?> <!-- Recall floating button -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Include controller -->
    <script src="js/angular-script.js"></script>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
