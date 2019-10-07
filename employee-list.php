<?php include('header.php'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Safety</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Employee</a></li>
                        <li class="breadcrumb-item active">Register</li>
                    </ol>
                </div>
                <h4 class="page-title">Employee list</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
            <!-- start body content -->
            <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive-sm">
                                    <table class="table table-centered mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Id</th>
                                                <th>Driver</th>
                                                <th>Start day</th>
                                                <th>Last day</th>
                                                <th>DQ Files</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#">#10</a></td>
                                                <td>Juan Perez</td>
                                                <td>01/11/2018</td>
                                                <td><i class="mdi mdi-circle text-success"></i> Active</td>
                                                <td>
                                                    <ul>
                                                        <li>Application: 01/11/2018</li>
                                                        <li>CDL: 01/11/2018</li>
                                                        <li>MVR: 01/11/2018</li>
                                                        <li><span style="color: #f00">Road Test:</span></li>
                                                        <li>Road Test Certificate: 01/11/2018</li>
                                                        <li>Drug test: 01/11/2018</li>
                                                        <li>Medical Certificate: 01/11/2018</li>
                                                        <li>Safety Performance Investigation: 01/11/2018</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar progress-lg bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
                                                    </div>
                                                </td>
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
            <!-- end body content -->
        <!-- end col-12 -->
    </div> <!-- end row -->
<?php include('footer.php'); ?>