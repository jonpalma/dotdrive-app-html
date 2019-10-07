<?php include('header.php'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Safety</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Violations</a></li>
                        <li class="breadcrumb-item active">Register</li>
                    </ol>
                </div>
                <h4 class="page-title">Violation list</h4>
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
                                <th>WO #</th>
                                <th>Violation Date</th>
                                <th>Violation number</th>
                                <th>Asset</th>
                                <th>Driver</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="#">#31</a></td>
                                <td>04/01/2019</td>
                                <td>Violation #1</td>
                                <td>Truck 3</td>
                                <td>Charly</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="" type="button" id="dropdownMenu2" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical-circle"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <button class="dropdown-item" type="button"><i
                                                        class="mdi mdi-square-edit-outline"></i> Download
                                            </button>
                                            <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i>
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">#62</a></td>
                                <td>04/01/2019</td>
                                <td>Violation #2</td>
                                <td>Truck 3</td>
                                <td>R2D2</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="" type="button" id="dropdownMenu2" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical-circle"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <button class="dropdown-item" type="button"><i
                                                        class="mdi mdi-square-edit-outline"></i> Edit
                                            </button>
                                            <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i>
                                                Delete
                                            </button>
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