<?php include('header.php'); ?>
        <div class="container mt-3">
            <!-- start body content -->
            <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive-sm">
                                  <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <label>Add folder</label>
                                        <span class="input-group-btn input-group-append">
                    <button class="btn btn-info bootstrap-touchspin-up" type="button" data-toggle="modal" data-target="#addFolder"><i class="mdi mdi-plus"></i></button>
                                        </span>
                                      
                                    </div>
                                  <div class="col-sm-12 col-md-6">
                                    <div id="data-table_filter" class="dataTables_filter">
                                    <label>Search:</label>
                                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="data-table">
                                    </div>
                                </div>
                            </div>
                                    <table class="table table-centered mb-0 mt-2">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="documents-list-folder.php">Folder 1</a></td>
                                                <td>Folder to save any documents</td>
                                                <td>
                                                    <div class="dropdown">
                                                      <a href="#" class="" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical-circle"></i>
                                                      </a>
                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <button class="dropdown-item" type="button"><i class="mdi mdi-square-edit-outline"></i> Edit</button>
                                                        <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                                      </div>
                                                    </div>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td><a href="documents-list-folder.php">Folder 2</a></td>
                                                <td>Folder to save any documents</td>
                                                <td>
                                                    <div class="dropdown">
                                                      <a href="#" class="" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical-circle"></i>
                                                      </a>
                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <button class="dropdown-item" type="button"><i class="mdi mdi-square-edit-outline"></i> Edit</button>
                                                        <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                                      </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
                <div class="modal fade" id="addFolder" tabindex="-1" role="dialog" aria-labelledby="employee-training-modal-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="employee-training-modal-label">Add Folder</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form id="finishWO" action="http://app.dotdrive.net/service/finish" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Name</label>
                                                <input type="text" id="name" class="form-control" required="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Description</label>
                                                <input type="text" id="Description" class="form-control" required="">
                                            </div>
                                        </div>

                                        <button class="btn btn-block btn-success" type="submit">Save</button>
                                    </form>

                                </div>
                            </div>
                    </div>
                </div>
            <!-- end body content -->
        <!-- end col-12 -->
    </div> <!-- end -->
<?php include('footer.php'); ?>