<?php include('header.php'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Safety</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Accident</a></li>
                        <li class="breadcrumb-item active">Register</li>
                    </ol>
                </div>
                <h4 class="page-title">Accidents list</h4>
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
                                <th>Date</th>
                                <th>Case Name</th>
                                <th>Claim No.</th>
                                <th>Advance</th>
                                <th>Status</th>
                                <th>Job title</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="#">#10</a></td>
                                <td>01/11/2018</td>
                                <td>Accident 1</td>
                                <td>800HOO332</td>
                                <td>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td><i class="mdi mdi-circle text-success"></i> Complete</td>
                                <td>LLD</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical-circle"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <button class="dropdown-item" type="button"><i class="mdi mdi-square-edit-outline"></i> Edit
                                            </button>
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