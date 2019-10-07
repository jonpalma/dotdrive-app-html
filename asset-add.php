<?php include('header.php'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Safety</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Assets</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
                <h4 class="page-title">Add asset</h4>
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

                                <div id="accordion-one-opt" class="custom-accordion">

                                    <div class="mb-0">
                                        <div class="card-header pt-0 pb-0 pl-1 pr-2" id="headingOne">
                                            <h5 class="m-0">
                                                <a class="text-dark d-block pt-2 pb-2" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Details <span class="position-absolute" style="right: 0;"><i class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                             data-parent="#accordion-one-opt">

                                            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">

                                                <a class="nav-link pl-1 pr-1 active show" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                                   role="tab" aria-controls="v-pills-1" aria-selected="true">
                                                    <span class="d-lg-block">Information</span>
                                                </a>
                                                <a class="nav-link pl-1 pr-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                                   aria-controls="v-pills-2" aria-selected="false">
                                                    <span class="d-lg-block">Purchase</span>
                                                </a>
                                                <a class="nav-link pl-1 pr-1" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                                                   aria-controls="v-pills-3" aria-selected="false">
                                                    <span class="d-lg-block">License</span>
                                                </a>
                                                <a class="nav-link pl-1 pr-1" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab"
                                                   aria-controls="v-pills-8" aria-selected="false">
                                                    <span class="d-lg-block">Warranty</span>
                                                </a>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <!--<div id="accordion-two-opt" class="custom-accordion">

                                    <div class="card-header pt-0 pb-0 pl-1 pr-2" id="headingTwo">
                                        <h5 class="m-0">
                                            <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Vehicle Information <span class="position-absolute" style="right: 0;"><i class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                         data-parent="#accordion-two-opt">

                                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">

                                            <a class="nav-link pl-1 pr-1" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
                                               aria-controls="v-pills-4" aria-selected="false">
                                                <span class="d-lg-block">Licenses</span>
                                            </a>

                                        </div>

                                    </div>

                                </div>-->

                                <div id="accordion-three-opt" class="custom-accordion">

                                    <div class="card-header pt-0 pb-0 pl-1 pr-2" id="headingThree">
                                        <h5 class="m-0">
                                            <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Department of Transportation <span class="position-absolute" style="right: 0;"><i class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                         data-parent="#accordion-three-opt">

                                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">

                                            <a class="nav-link pl-1 pr-1" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab"
                                               aria-controls="v-pills-5" aria-selected="false">
                                                <span class="d-lg-block">DOT Requirements</span>
                                            </a>
                                            <a class="nav-link pl-1 pr-1" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab"
                                               aria-controls="v-pills-6" aria-selected="false">
                                                <span class="d-lg-block">Road-side inspections</span>
                                            </a>
                                            <a class="nav-link pl-1 pr-1" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab"
                                               aria-controls="v-pills-7" aria-selected="false">
                                                <span class="d-lg-block">Driver's Vehicle Inspection</span>
                                            </a>

                                        </div>

                                    </div>

                                </div>

                                <div id="accordion-four-opt" class="custom-accordion">

                                    <div class="card-header pt-0 pb-0 pl-1 pr-2" id="headingFour">
                                        <h5 class="m-0">
                                            <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Asset Information <span class="position-absolute" style="right: 0;"><i class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                         data-parent="#accordion-four-opt">

                                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">

                                            <a class="nav-link pl-1 pr-1" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab"
                                               aria-controls="v-pills-9" aria-selected="false">
                                                <span class="d-lg-block">Preventive Maintenance</span>
                                            </a>
                                            <a class="nav-link pl-1 pr-1" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10" role="tab"
                                               aria-controls="v-pills-10" aria-selected="false">
                                                <span class="d-lg-block">Service Records</span>
                                            </a>
                                            <a class="nav-link pl-1 pr-1" id="v-pills-11-tab" data-toggle="pill" href="#v-pills-11" role="tab"
                                               aria-controls="v-pills-11" aria-selected="false">
                                                <span class="d-lg-block">Parts</span>
                                            </a>
                                            <a class="nav-link pl-1 pr-1" id="v-pills-12-tab" data-toggle="pill" href="#v-pills-12" role="tab"
                                               aria-controls="v-pills-12" aria-selected="false">
                                                <span class="d-lg-block">Accident Logs</span>
                                            </a>
                                            <!--<a class="nav-link pl-1 pr-1" id="v-pills-13-tab" data-toggle="pill" href="#v-pills-13" role="tab"
                                               aria-controls="v-pills-13" aria-selected="false">
                                                <span class="d-lg-block">Usage</span>
                                            </a>-->

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-xl-10 col-lg-9 col-md-8 col-sm-8 pr-0">

                            <div class="tab-content" id="v-pills-tabContent">

                                <!-- FIRST TAB -->
                                <div class="tab-pane fade active show" id="v-pills-1" role="tabpanel"
                                     aria-labelledby="v-pills-1-tab">
                                    <?php include('asset-add-1.php'); ?>
                                </div>

                                <!-- SECOND TAB -->
                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                     aria-labelledby="v-pills-2-tab">
                                    <?php include('asset-add-2.php'); ?>
                                </div>

                                <!-- THIRD TAB -->
                                <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                     aria-labelledby="v-pills-3-tab">
                                    <?php include('asset-add-3.php'); ?>
                                </div>

                                <!-- FOURTH TAB -->
                                <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                     aria-labelledby="v-pills-4-tab">
                                    <?php include('asset-add-4.php'); ?>
                                </div>

                                <!-- FIFTH TAB -->
                                <div class="tab-pane fade" id="v-pills-5" role="tabpanel"
                                     aria-labelledby="v-pills-5-tab">
                                    <?php include('asset-add-5.php'); ?>
                                </div>

                                <!-- SIXTH TAB -->
                                <div class="tab-pane fade" id="v-pills-6" role="tabpanel"
                                     aria-labelledby="v-pills-6-tab">
                                    <?php include('asset-add-6.php'); ?>
                                </div>

                                <!-- SEVENTH TAB -->
                                <div class="tab-pane fade" id="v-pills-7" role="tabpanel"
                                     aria-labelledby="v-pills-7-tab">
                                    <?php include('asset-add-7.php'); ?>
                                </div>

                                <!-- EIGHTH TAB -->
                                <div class="tab-pane fade" id="v-pills-8" role="tabpanel"
                                     aria-labelledby="v-pills-8-tab">
                                    <?php include('asset-add-8.php'); ?>
                                </div>

                                <!-- NINTH TAB -->
                                <div class="tab-pane fade" id="v-pills-9" role="tabpanel"
                                     aria-labelledby="v-pills-9-tab">
                                    <?php include('asset-add-9.php'); ?>
                                </div>

                                <!-- TENTH TAB -->
                                <div class="tab-pane fade" id="v-pills-10" role="tabpanel"
                                     aria-labelledby="v-pills-10-tab">
                                    <?php include('asset-add-10.php'); ?>
                                </div>

                                <!-- ELEVENTH TAB -->
                                <div class="tab-pane fade" id="v-pills-11" role="tabpanel"
                                     aria-labelledby="v-pills-11-tab">
                                    <?php include('asset-add-11.php'); ?>
                                </div>

                                <!-- TWELFTH TAB -->
                                <div class="tab-pane fade" id="v-pills-12" role="tabpanel"
                                     aria-labelledby="v-pills-12-tab">
                                    <?php include('asset-add-12.php'); ?>
                                </div>

                                <!-- THIRTEENTH TAB -->
                                <div class="tab-pane fade" id="v-pills-13" role="tabpanel"
                                     aria-labelledby="v-pills-13-tab">
                                    <?php include('asset-add-13.php'); ?>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> <!-- end card body-->
        </div> <!-- end card -->

    </div>
    <!-- end col-12 -->
    </div> <!-- end row -->
<?php include('footer.php'); ?>
<script>
    $('.nav-link').click(function () {
        $('.nav-link').removeClass('show').removeClass('active').attr('aria-selected','false')
    });
</script>
