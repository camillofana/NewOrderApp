<?php include 'lib/header.php';?>
<!-- We don't need full layout in this file because this page will be parsed with Ajax. It is just enough to put here .navbar and .page-->
 
<!-- Top Navbar-->
<div class="navbar">
  <div class="navbar-inner">
    <div class="left">
      <a href="#" class="back link">
        <i class="icon icon-back"></i>
        <span>Back</span>
       </a>
    </div>
    <div class="center sliding">About</div>
    <div class="right">
      <a href="#" class="link icon-only open-panel"><i class="icon icon-bars"></i></a>
    </div>
  </div>
</div>
<div class="pages">
  <div data-page="about" class="page">
    <div class="page-content">
      <div class="content-block" ng-controller="ProductController">
          
          
        <!-- Start Products Page Angular content -->
          <table class="table table-hover">
            <tr>
                <th>id</th>
                <th>provider</th>
                <th>name</th>
                <th>stored</th>
                <th>unit</th>
                <th>description</th>
                <th>pcode</th>
                <th>packageN</th>
                <th>Min Stored</th>
                <th>mode</th>
                <th>hide</th>
            </tr>
            <tr ng-repeat="detail in details| filter:search_query">
                <td>{{detail.id}}</td>
                <td>{{detail.provider | uppercase}}</td>
                <td>{{detail.name | uppercase}}</td>
                <td>{{detail.stored}}</td>
                <td>{{detail.unit}}</td>
                <td>{{detail.description}}</td>
                <td>{{detail.pcode}}</td>
                <td>{{detail.packageN}}</td>
                <td>{{detail.MinStored}}</td>
                <td>{{detail.mode}}</td>
                <td>{{detail.hide}}</td>
            </tr>
        </table>
        <!-- End Products Page Angular content -->
          
          
      </div>
    </div>
  </div>
</div>          
<?php include 'lib/footer.php';?>