<?php include 'lib/header.php';?>
<!---START YOUR CODE HERE------------------>
<!-- Status bar overlay for full screen mode (PhoneGap) -->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
        <p>Left panel content goes here</p>
      </div>
    </div>
    <!-- Views -->
    <div class="views">
      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <!-- We need cool sliding animation on title element, so we have additional "sliding" class -->
            <div class="center sliding">Orders List</div>
            <div class="right">
              <!-- 
                Right link contains only icon - additional "icon-only" class
                Additional "open-panel" class tells app to open panel when we click on this link
              -->
              <a href="#" class="link icon-only open-panel"><i class="icon icon-bars"></i></a>
            </div>
          </div>
        </div>
        <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, "data-page" contains page name -->
          <div data-page="index" class="page">
            <!-- Scrollable page content -->
            <div class="page-content" ng-controller="DbController">
                
                <!-- Table to show order list -->
                    <table class="table table-hover">
                        <tr>
                            <th>#</th>
                            <th>Provider</th>
                            <th>Sender</th>
                            <th>Creator</th>
                            <th></th>
                        </tr>
                        <tr ng-repeat="detail in details">
                            <td>{{detail.OrderNumber}}</td>
                            <td>{{detail.name}}</td>
                            <td>{{detail.sender}}</td>
                            <td>{{detail.user_name}}</td>
                            <td>
                            <button class="btn btn-info" ng-click="orderDetail(detail); orderDetailTitolo(detail)" title="Detail"><span class="glyphicon glyphicon-eye-open"></span></button>
                            </td>
                        </tr>
                    </table>
        
                <!-- Table to show order detalis -->
                    <div ng-repeat="Tdetail in Tdetails">
                        <h3 class="pull-left" style="color: #5bc0de;" >{{Tdetail.OrderNumber}}
                        &nbsp;{{Tdetail.name | uppercase}}</h3>
                        <table class="table table-hover">
                            <tr >
                                <th>Product</th>
                                <th>Ammount</th>
                            </tr>
                            <tr ng-repeat="Odetail in Odetails| filter:search_query">
                                <td>{{Odetail.name}}</td>
                                <td>{{Odetail.ammount}}  {{Odetail.unit}}</td>
                            </tr>
                        </table>
                    </div>
        	<br/><br/><br/>
              <!-- Link to another page -->
<!--              <a href="about.html">About app</a>-->
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner">
            <!-- Toolbar links -->
<!--            <a href="#" class="link">Link 1</a>-->
<!--            <a href="#" class="link">Link 2</a>-->
          </div>
        </div>
      </div>
    </div>
<!---STOP YOUR CODE HERE------------------->
<?php include 'lib/footer.php';?>