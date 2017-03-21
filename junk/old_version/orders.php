                      <div ng-controller="DbController">
                          <nav class="navbar navbar-default">
                            <div class="navbar-header">
                              <!-- <div class="alert alert-default navbar-brand search-box">
                                <button class="btn btn-primary" ng-show="show_form" ng-click="formToggle()">Add Order <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                              </div> -->
                              <div class="alert alert-default input-group search-box">
                                <span class="input-group-btn">
                                  <input type="text" class="form-control" placeholder="Live search for product name, provide etc..." ng-model="search_query">
                                </span>
                              </div>
                            </div>
                          </nav>
                          <div class="col-md-6 col-md-offset-3">

                      <!-- Include form template which is used to insert data into database -->
                        <div ng-include src="'templates/form.html'"></div>

                      <!-- Include form template which is used to edit and update data into database -->
                        <div ng-include src="'templates/editForm.html'"></div>
                      </div>
                      <div class="clearfix"></div>

                      <!-- Table to show order detalis -->
                      <div id="table_content"></div>

                      <!-- Table to show employee detalis -->
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <tr>
                            <th>ORDER ID</th>
                            <th>PROVIDER</th>
                            <th>SENDER</th>
                            <th>CREATOR</th>
                            <th></th>
                          </tr>
                          <tr ng-repeat="detail in details| filter:search_query">
                            <td>
                              <div class="btn btn-info">
                                {{detail.OrderNumber}}
                              </div>
                            </td>
                            <td>{{detail.name}}</td>
                            <td>{{detail.sender}}</td>
                            <td>{{detail.user_name}}</td>
                            <td>
                              <button class="btn btn-info" ng-click="orderDetail(detail)" title="Detail"><span class="fa fa-eye fa-lg"></span></button>
                              <button class="btn btn-warning" ng-click="editInfo(detail)" title="Edit"><span class="fa fa-pencil fa-lg"></span></button>
                              <button class="btn btn-danger" ng-click="deleteInfo(detail)" title="Delete"><span class="fa fa-trash fa-lg"></span></button>
                            </td>
                          </tr>
                        </table>
                      </div>

                      	<!-- Table to show employee detalis -->
                      <div class="table-responsive">
                          <table class="table table-hover">
                              <tr>
                                  <th>ID</th>
                                  <th>Product</th>
                                  <th>Amount</th>
                                  <th>Unit</th>
                              </tr>
                              <tr ng-repeat="Odetail in Odetails| filter:search_query">
                                  <td>{{Odetail.id}}</td>
                                  <td>{{Odetail.name}}</td>
                                  <td>{{Odetail.ammount}}</td>
                                  <td>{{Odetail.unit}}</td>
                              </tr>
                          </table>
                      </div>
                    </div>
        <!-- /#page-content-wrapper -->
