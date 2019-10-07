<!--<button type="button" class="btn btn-icon btn-success" data-toggle="modal"
        data-target="#drivers-vehicle-inspection-modal"><i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">-->
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Location</th>
            <th>Odometer Reading</th>
            <th>Trailer #</th>
            <th>Type</th>
            <th>Status</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>S and R</td>
            <td>QWERTY</td>
            <td>800HOO332</td>
            <td><i class="mdi mdi-circle text-success"></i> Complete</td>
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
<!--
<div class="modal fade" id="drivers-vehicle-inspection-modal" tabindex="-1" role="dialog"
     aria-labelledby="drivers-vehicle-inspection-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="drivers-vehicle-inspection-modal-label">Driver's Vehicle Inspection</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Odometer Reading</label>
                            <input type="text" id="odometerreading" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Report Date and Time</label>
                            <input type="text" class="form-control date" id="reportdateandtime"
                                   data-toggle="date-picker" data-time-picker="true" data-single-date-picker="true"
                                   data-locale="{'format': 'DD/MM hh:mm A'}">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Completed By</label>
                            <select class="form-control" id="completedby">
                                <option selected disabled></option>
                                <option>alexis gonzalez</option>
                                <option>Armando Quintana</option>
                                <option>Carlos Quinonez</option>
                                <option>cesar aldama</option>
                                <option>david salcedo ortega</option>
                                <option>Eden Oziel Valdez</option>
                                <option>enrique juarez-meraz</option>
                                <option>Enrique Camara Herrera</option>
                                <option>Hector Aguilera</option>
                                <option>jesus francisco lopez rios</option>
                                <option>jorge hernandez ruiz</option>
                                <option>Juan Diaz</option>
                                <option>juan perez</option>
                                <option>kevin garcia Neri</option>
                                <option>Luis Salcedo Ortega</option>
                                <option>mario escobedo</option>
                                <option>Martin Sotelo Rojas</option>
                                <option>Mayra Castro</option>
                                <option>miguel angel cano de la cruz</option>
                                <option>natalia del rio</option>
                                <option>Oscar Vasquez</option>
                                <option>Reynaldo Aguilera</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Trailer #</label>
                            <input type="text" id="trailernumber" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Type</label>
                            <select class="form-control" id="type">
                                <option selected disabled></option>
                                <option>Pre-Trip Inspection</option>
                                <option>Post-Trip Inspection</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Status</label>
                            <select class="form-control" id="status">
                                <option selected disabled></option>
                                <option>Not Completed</option>
                                <option>Certified as Unsafe</option>
                                <option>Completed</option>
                            </select>
                        </div>

                    </div>

                    <div id="general-accordion-opt" class="custom-accordion mb-4">

                        <div class="card mb-0">
                            <div class="card-header" id="headingOneGeneral">
                                <h5 class="m-0">
                                    <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse"
                                       href="#collapseOneGeneral" aria-expanded="false"
                                       aria-controls="collapseOneGeneral">
                                        Brakes (Parking) <span class="float-right"><i
                                                    class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOneGeneral" class="collapse" aria-labelledby="headingOneGeneral"
                                 data-parent="#general-accordion-opt" style="">
                                <div class="card-body">

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="slowtorelease">
                                            <label class="custom-control-label" for="slowtorelease">Slow to release</label>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="slowrel1" name="slowrel" class="custom-control-input">
                                                <label class="custom-control-label" for="slowrel1">Critical</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="slowrel2" name="slowrel" class="custom-control-input">
                                                <label class="custom-control-label" for="slowrel2">Warning</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="slowrel3" name="slowrel" class="custom-control-input">
                                                <label class="custom-control-label" for="slowrel3">Informational</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="slowtorelease">
                                            <label class="custom-control-label" for="slowtorelease">Weak or Ineffective</label>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="weakorineffective1" name="weakorineffective" class="custom-control-input">
                                                <label class="custom-control-label" for="weakorineffective1">Critical</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="weakorineffective2" name="weakorineffective" class="custom-control-input">
                                                <label class="custom-control-label" for="weakorineffective2">Warning</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="weakorineffective3" name="weakorineffective" class="custom-control-input">
                                                <label class="custom-control-label" for="weakorineffective3">Informational</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="slowtorelease">
                                            <label class="custom-control-label" for="slowtorelease">Will not release</label>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="willnotrelease1" name="willnotrelease" class="custom-control-input">
                                                <label class="custom-control-label" for="willnotrelease1">Critical</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="willnotrelease2" name="willnotrelease" class="custom-control-input">
                                                <label class="custom-control-label" for="willnotrelease2">Warning</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="willnotrelease3" name="willnotrelease" class="custom-control-input">
                                                <label class="custom-control-label" for="willnotrelease3">Informational</label>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div> <!- end card ->

                    </div>

                    <div class="row">

                        <div class="form-group col-md-12">
                            <label for="remarks">Remarks</label>
                            <textarea class="form-control" id="remarks" rows="3"></textarea>
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
        </div><!- /.modal-content ->
    </div><!- /.modal-dialog ->
</div>
-->