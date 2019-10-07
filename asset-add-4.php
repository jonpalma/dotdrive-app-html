<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#general-modal"><i
        class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>VIN #</th>
            <th>Assigned Trailer #</th>
            <th>Driver</th>
            <th>Title Holder</th>
            <th>Status</th>
            <th>Job title</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>0118</td>
            <td> 1</td>
            <td>James</td>
            <td>
                <div class="progress progress-sm">
                    <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%"
                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            <td><i class="mdi mdi-circle text-success"></i> Complete</td>
            <td>LRE</td>
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
</div>
<div class="modal fade" id="general-modal" tabindex="-1" role="dialog"
     aria-labelledby="general-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="general-modal-label">Licenses</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <h4 class="page-title">Vehicle Information</h4>

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

                    <hr class="mb-4">

                    <h4 class="page-title">Inspections and Expirations</h4>

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

                    <hr class="mb-4">

                    <h4 class="page-title">Tire Information</h4>

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

                    <div class="row">

                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>

                    </div>

                </form>

                <?php include('modules/views/fileUpload.php') ?>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>