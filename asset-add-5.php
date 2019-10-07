<form action="#" class="needs-validation" novalidate>

    <h4 class="page-title">DOT Inspections and Expirations</h4>

    <div class="row">

        <div class="form-group col-4">
            <label>Cab Card Expiration</label>
        </div>

        <div class="form-group col-6">
            <input type="text" class="form-control date" id="cabcardexpiration" data-toggle="date-picker"
                   data-single-date-picker="true">
        </div>

        <div class="form-group col-2 text-center">
            <a href="#docs-modal" role="button" data-toggle="modal" data-target="#docs-modal" class="mdi mdi-file"></a>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-4">
            <label>DOT Inspection Due</label>
        </div>

        <div class="form-group col-4">
            <input type="text" class="form-control date" id="dotinspectiondue" data-toggle="date-picker"
                   data-single-date-picker="true">
        </div>

        <div class="form-group col-4 text-center">
            <a href="#docs-modal" role="button" data-toggle="modal" data-target="#docs-modal" class="">Texto del documento.docs</a>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-4">
            <label>Overweight Expiration</label>
        </div>

        <div class="form-group col-6">
            <input type="text" class="form-control date" id="overweightexpiration" data-toggle="date-picker"
                   data-single-date-picker="true">
        </div>

        <div class="form-group col-2 text-center">
            <a href="#docs-modal" role="button" data-toggle="modal" data-target="#docs-modal" class="mdi mdi-file"></a>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-4">
            <label>Heavy Highway Tax Expiration</label>
        </div>

        <div class="form-group col-6">
            <input type="text" class="form-control date" id="heavyhighwaytaxexpiration" data-toggle="date-picker"
                   data-single-date-picker="true">
        </div>

        <div class="form-group col-2 text-center">
            <a href="#docs-modal" role="button" data-toggle="modal" data-target="#docs-modal" class="mdi mdi-file"></a>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-10">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="ishazmatvehicle">
                <label class="custom-control-label" for="ishazmatvehicle">Is Hazmat Vehicle</label>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-4">
            <label>Hazmat Expiration</label>
        </div>

        <div class="form-group col-6">
            <input type="text" class="form-control date" id="hazmatexpiration" data-toggle="date-picker"
                   data-single-date-picker="true">
        </div>

        <div class="form-group col-2 text-center">
            <a href="#docs-modal" role="button" data-toggle="modal" data-target="#docs-modal" class="mdi mdi-file"></a>
        </div>

    </div>

    <h4 class="page-title">DOT Weight Requirements</h4>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Title Weight</label>
            <input type="text" id="titleweight" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>License Weight</label>
            <input type="text" id="licenseweight" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Gross Vehicle Weight Rating</label>
            <input type="text" id="grossvehicleweightrating" class="form-control">
        </div>

    </div>

    <div id="info-accordion-opt" class="custom-accordion mb-4">

        <div class="card mb-0">
            <div class="card-header" id="headingOneClaim">
                <h5 class="m-0">
                    <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse"
                       href="#collapseOneClaim" aria-expanded="false"
                       aria-controls="collapseOneClaim">
                        Vehicle Information <span class="float-right"><i
                                    class="mdi mdi-chevron-down accordion-arrow"></i></span>
                    </a>
                </h5>
            </div>
            <div id="collapseOneClaim" class="collapse" aria-labelledby="headingOneClaim"
                 data-parent="#info-accordion-opt" style="">
                <div class="card-body">

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>VIN #</label>
                            <input type="text" id="vinnumber" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Assigned Trailer #</label>
                            <input type="text" id="assignedtrailernumber" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="acquiredby">Driver</label>
                            <select class="form-control" id="driver">
                                <option selected disabled></option>
                                <option>Aguilera, Reynaldo </option>
                                <option>Aguilera , Hector </option>
                                <option>aldama, cesar lopez</option>
                                <option>Camara Herrera, Enrique </option>
                                <option>cano de la cruz, miguel angel </option>
                                <option>Castro, Mayra </option>
                                <option>del rio, natalia  hayde</option>
                                <option>Diaz, Juan </option>
                                <option>escobedo, mario muniz</option>
                                <option>garcia Neri, kevin rafael </option>
                                <option>gonzalez, alexis roman </option>
                                <option>hernandez ruiz, jorge adrian </option>
                                <option>juarez-meraz, enrique  alonzo</option>
                                <option>lopez rios, jesus francisco </option>
                                <option>perez, juan </option>
                                <option>Quinonez, Carlos </option>
                                <option>Quintana, Armando </option>
                                <option>salcedo ortega, david </option>
                                <option>Salcedo Ortega, Luis </option>
                                <option>Sotelo Rojas, Martin  </option>
                                <option>Valdez, Eden Oziel </option>
                                <option>Vasquez, Oscar </option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="acquiredby">Title Holder</label>
                            <select class="form-control" id="titleholder">
                                <option selected disabled></option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>No. of Axles</label>
                            <input type="text" id="numberofaxles" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>City Sticker Number</label>
                            <input type="text" id="citystickernumber" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>City Sticker Expiration</label>
                            <input type="text" class="form-control date" id="citystickerexpiration" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Fleet Safety Decal Number</label>
                            <input type="text" id="fleetsafetydecalnumber" class="form-control">
                        </div>

                    </div>

                </div>
            </div>
        </div> <!-- end card-->

    </div>

    <div id="insp-accordion-opt" class="custom-accordion mb-4">

        <div class="card mb-0">
            <div class="card-header" id="headingInsp">
                <h5 class="m-0">
                    <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse"
                       href="#collapseInsp" aria-expanded="false"
                       aria-controls="collapseInsp">
                        Inspections and Expirations <span class="float-right"><i
                                    class="mdi mdi-chevron-down accordion-arrow"></i></span>
                    </a>
                </h5>
            </div>
            <div id="collapseInsp" class="collapse" aria-labelledby="headingInsp"
                 data-parent="#insp-accordion-opt" style="">

                <div class="card-body">

                    <div class="row">

                        <div class="form-group col-5">
                            <label>Annual Inspection Due</label>
                        </div>

                        <div class="form-group col-7">
                            <input type="text" class="form-control date" id="annualinspectiondue" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-5">
                            <label>State Inspection Due</label>
                        </div>

                        <div class="form-group col-7">
                            <input type="text" class="form-control date" id="stateinspectiondue" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-5">
                            <label>Insurance Expiration</label>
                        </div>

                        <div class="form-group col-7">
                            <input type="text" class="form-control date" id="insuranceexpiration" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-5">
                            <label>Owner Operator Insurance Expiration</label>
                        </div>

                        <div class="form-group col-7">
                            <input type="text" class="form-control date" id="owneroperatorinsuranceexpiration" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                    </div>

                </div>

            </div>
        </div> <!-- end card-->

    </div>

    <div id="tire-accordion-opt" class="custom-accordion mb-4">

        <div class="card mb-0">
            <div class="card-header" id="headingTires">
                <h5 class="m-0">
                    <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse"
                       href="#collapseTires" aria-expanded="false"
                       aria-controls="collapseTires">
                        Tire Information <span class="float-right"><i
                                    class="mdi mdi-chevron-down accordion-arrow"></i></span>
                    </a>
                </h5>
            </div>
            <div id="collapseTires" class="collapse" aria-labelledby="headingTires"
                 data-parent="#tire-accordion-opt" style="">

                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-5 col-4 offset-lg-2 offset-4">
                            <label>Number of Tires</label>
                        </div>

                        <div class="col-lg-5 col-4">
                            <label>Tire Size</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-2 col-4">
                            <label>Steering</label>
                        </div>

                        <div class="form-group col-lg-5 col-4">
                            <input type="text" id="numberoftires1" class="form-control">
                        </div>

                        <div class="form-group col-lg-5 col-4">
                            <input type="text" id="tiresize1" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-2 col-4">
                            <label>Drive</label>
                        </div>

                        <div class="form-group col-lg-5 col-4">
                            <input type="text" id="numberoftires2" class="form-control">
                        </div>

                        <div class="form-group col-lg-5 col-4">
                            <input type="text" id="tiresize2" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-2 col-4">
                            <label>Idle</label>
                        </div>

                        <div class="form-group col-lg-5 col-4">
                            <input type="text" id="numberoftires3" class="form-control">
                        </div>

                        <div class="form-group col-lg-5 col-4">
                            <input type="text" id="tiresize3" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-2 col-4">
                            <label>Drop Axis</label>
                        </div>

                        <div class="form-group col-lg-5 col-4">
                            <input type="text" id="numberoftires4" class="form-control">
                        </div>

                        <div class="form-group col-lg-5 col-4">
                            <input type="text" id="tiresize4" class="form-control">
                        </div>

                    </div>

                </div>

            </div>
        </div> <!-- end card-->

    </div>

    <div class="row">

        <div class="form-group col-12">
            <button type="submit" class="btn btn-block btn-primary">Save</button>
        </div>

    </div>

</form>

<?php include('modules/views/fileUploadModal.php') ?>
