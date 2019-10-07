<?php include('header.php'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Safety</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Accident</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
                <h4 class="page-title">Add accident</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body pl-1">

                    <!-- start body content -->

                    <div class="row m-0">

                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 mb-2 mb-sm-0 pl-0 pr-0">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <!--<a class="nav-link active show" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                   role="tab" aria-controls="v-pills-1" aria-selected="true">
                                    <span class="d-lg-block">Claim Details</span>
                                </a>-->
                                <a class="nav-link active show" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                   aria-controls="v-pills-2" aria-selected="false">
                                    <span class="d-lg-block">Accident Report</span>
                                </a>
                                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                                   aria-controls="v-pills-3" aria-selected="false">
                                    <span class="d-lg-block">Injury/Illness Details</span>
                                </a>
                                <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
                                   aria-controls="v-pills-4" aria-selected="false">
                                    <span class="d-lg-block">Time Off Details</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-10 col-lg-9 col-md-8 col-sm-8 pr-0">

                            <div class="tab-content" id="v-pills-tabContent">

                                <!-- FIRST TAB -->
                                <!--<div class="tab-pane fade active show" id="v-pills-1" role="tabpanel"
                                     aria-labelledby="v-pills-1-tab">
                                    <?php //include('accident-add-1.php'); ?>
                                </div>-->

                                <!-- SECOND TAB -->
                                <div class="tab-pane fade active show" id="v-pills-2" role="tabpanel"
                                     aria-labelledby="v-pills-2-tab">
                                    <?php include('accident-add-2.php'); ?>
                                </div>

                                <!-- THIRD TAB -->
                                <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                     aria-labelledby="v-pills-3-tab">
                                    <?php include('accident-add-3.php'); ?>
                                </div>

                                <!-- FOURTH TAB -->
                                <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                     aria-labelledby="v-pills-4-tab">
                                    <?php include('accident-add-4.php'); ?>
                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- end body content -->

                </div> <!-- end card body-->
            </div> <!-- end card -->

        </div>
        <!-- end col-12 -->
    </div> <!-- end row -->
<?php include('footer.php'); ?>