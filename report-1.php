<?php include('header.php'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Safety</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Reports</a></li>
                        <li class="breadcrumb-item active">Report</li>
                    </ol>
                </div>
                <h4 class="page-title">Report 1</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-lg-4">
                            <form class="form-inline">
                                <div class="form-group mb-2">
                                    <label for="inputPassword2" class="sr-only">Search</label>
                                    <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
                        </div>
                        <div class="col-lg-4">
                            <div class="text-lg-right">
                                <button type="button" class="btn btn-light mb-2">Export</button>
                            </div>
                        </div><!-- end col-->
                    </div>
                    <table class="table table-hover table-centered mb-0">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Assets</th>
                                <th>Description</th>
                                <th>Invoice</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01/10/2019</td>
                                
                                <td>Truck 10</td>
                                <td><a href="#" data-toggle="modal" data-target="#finish-modal">Fith wheel rebuild kit for 1216, crank position center.</a></td>
                                <td>XDER1010101</td>
                                <td>$300.00</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->

        </div>
        <!-- end col-12 -->
    </div> <!-- end row -->

    <div class="modal fade" id="finish-modal" tabindex="-1" role="dialog" aria-labelledby="employee-training-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="employee-training-modal-label">Finish Work Order</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <form id="finishWO" action="http://app.dotdrive.net/service/finish" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-4"><label>Description</label></div>
                            <div class="col-4"><label>Comments</label></div>
                            <div class="col-2"><label>Total</label></div>
                            <div class="col-2"><label>Invoice</label></div>
                        </div>

                        <div id="services-container">
                            <div class="row mb-3">
                                <div class="col-4"><input type="hidden" value="41" name="service_id[]">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</div>

                                <div class="col-4">Lorem ipsum dolor sit amet, consectetur adipisicing</div>

                                <div class="col-2">$100</div>

                                <div class="col-2">
                                    <label for="invoice41" class="btn btn-primary">
                                        <i class="mdi mdi-cloud-download"></i></label>
                                        <input type="file" id="invoice41" name="invoice41" class="d-none">
                                    </div>
                            </div>
                        </div>
                        <div id="services-container">
                            <div class="row mb-3">
                                <div class="col-4"><input type="hidden" value="41" name="service_id[]">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</div>

                                <div class="col-4">Lorem ipsum dolor sit amet, consectetur adipisicing</div>

                                <div class="col-2">$200</div>

                                <div class="col-2">
                                    <label for="invoice41" class="btn btn-primary">
                                        <i class="mdi mdi-cloud-download"></i></label>
                                        <input type="file" id="invoice41" name="invoice41" class="d-none">
                                    </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row mb-4">
                            <input type="hidden" id="wo_id" name="wo_id" value="31">
                            <div class="col-6">
                                <label for="start_date">Actual Start</label>
                                10/10/2019
                            </div>
                            <div class="col-6">
                                <label for="finished_date">Actual Completion</label>
                                20/10/2019
                            </div>
                        </div>

                        <button class="btn btn-block btn-success" type="submit">Save</button>
                    </form>

                </div>
            </div>
    </div>
</div>

     <!-- App js -->
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="assets/js/vendor/Chart.bundle.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.chartjs.js"></script>
        <!-- end demo js-->
<?php include('footer.php'); ?>