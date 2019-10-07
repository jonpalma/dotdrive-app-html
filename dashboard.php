<?php include('header.php'); ?>
    <!-- start page title -->
    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="form-inline">
                                            <a href="javascript: void(0);" class="btn btn-primary ml-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-5">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-account-multiple widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">Employees</h5>
                                                <h3 class="mt-3 mb-3">4</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                                    <span class="text-nowrap">Since last month</span>  
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-cart-plus widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">DOT Violations</h5>
                                                <h3 class="mt-3 mb-3">43</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 1.08%</span>
                                                    <span class="text-nowrap">Since last month</span>
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-currency-usd widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Average Revenue">Services</h5>
                                                <h3 class="mt-3 mb-3">$6,000</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                                                    <span class="text-nowrap">Since last month</span>
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-pulse widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Growth">Accidents</h5>
                                                <h3 class="mt-3 mb-3">+2</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                                    <span class="text-nowrap">Since last month</span>
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                            </div> <!-- end col -->

                            <div class="col-xl-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <!-- item-->
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Service expense report</h4>

                                        <div style="height: 263px;" class="chartjs-chart">
                                            <canvas id="high-performing-product"></canvas>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        
    <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-2">Pending documents</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal">Jaime Quarts</h5>
                                                        </td>

                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal">Road Test</h5>
                                                            <span class="text-muted font-13">Document</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal">DQ Documents</h5>
                                                            <span class="text-muted font-13">Location</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal">Jaime Quarts</h5>
                                                        </td>

                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal">Road Test</h5>
                                                            <span class="text-muted font-13">Document</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal">DQ Documents</h5>
                                                            <span class="text-muted font-13">Location</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3">

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-2">Recent Activity</h4>

                                        <div class="slimscroll" style="max-height: 171px;">
                                            <div class="timeline-alt pb-0">
                                                <div class="timeline-item">
                                                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info font-weight-bold mb-1 d-block">You add an item</a>
                                                        <small>Paul Burgess just purchased </small>
                                                        <p>
                                                            <small class="text-muted">5 minutes ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                                        <small>Dave Gamache added
                                                            <span class="font-weight-bold">Admin Dashboard</span>
                                                        </small>
                                                        <p>
                                                            <small class="text-muted">30 minutes ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                                                        <small>Send you message
                                                            <span class="font-weight-bold">"Are you there?"</span>
                                                        </small>
                                                        <p>
                                                            <small class="text-muted">2 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-primary font-weight-bold mb-1 d-block">Audrey Tobey</a>
                                                        <small>Uploaded a photo
                                                            <span class="font-weight-bold">"Error.jpg"</span>
                                                        </small>
                                                        <p>
                                                            <small class="text-muted">14 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end timeline -->
                                        </div> <!-- end slimscroll -->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->

                        </div>

                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-2">Alert documents</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal">Truck #1208 </h5>
                                                        </td>

                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal">Cab Card</h5>
                                                            <span class="text-muted font-13">Document</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal">DOT Requirements</h5>
                                                            <span class="text-muted font-13">Location</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal"><i class="mdi mdi-circle text-warning"></i> Expiration Date</h5>
                                                            <span class="text-muted font-13">01/12/2018</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal">Truck #1208 </h5>
                                                        </td>

                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal">Cab Card</h5>
                                                            <span class="text-muted font-13">Document</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal">DOT Requirements</h5>
                                                            <span class="text-muted font-13">Location</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 mb-1 font-weight-normal"><i class="mdi mdi-circle text-danger"></i> Expiration Date</h5>
                                                            <span class="text-muted font-13">01/12/2018</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            <div class="col-xl-3">

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-2">Recent Activity Alert Documents</h4>

                                        <div class="slimscroll" style="max-height: 171px;">
                                            <div class="timeline-alt pb-0">
                                                <div class="timeline-item">
                                                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info font-weight-bold mb-1 d-block">You add an item</a>
                                                        <small>Paul Burgess just purchased </small>
                                                        <p>
                                                            <small class="text-muted">5 minutes ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                                        <small>Dave Gamache added
                                                            <span class="font-weight-bold">Admin Dashboard</span>
                                                        </small>
                                                        <p>
                                                            <small class="text-muted">30 minutes ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                                                        <small>Send you message
                                                            <span class="font-weight-bold">"Are you there?"</span>
                                                        </small>
                                                        <p>
                                                            <small class="text-muted">2 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-primary font-weight-bold mb-1 d-block">Audrey Tobey</a>
                                                        <small>Uploaded a photo
                                                            <span class="font-weight-bold">"Error.jpg"</span>
                                                        </small>
                                                        <p>
                                                            <small class="text-muted">14 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end timeline -->
                                        </div> <!-- end slimscroll -->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <!-- bundle -->
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="assets/js/vendor/Chart.bundle.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->
<?php include('footer.php'); ?>