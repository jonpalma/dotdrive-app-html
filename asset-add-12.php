<!--<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#accident-logs-modal"><i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">-->
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Accident Date</th>
            <th>Accident Time</th>
            <th>Weather Condition</th>
            <th>Accident Report</th>
            <th>Documents</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>01/11/2018</td>
            <td> 11:00am</td>
            <td>Foggy</td>
            <td>1234</td>
            <td>3</td>
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
<div class="modal fade" id="accident-logs-modal" tabindex="-1" role="dialog"
     aria-labelledby="accident-logs-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="accident-logs-modal-label">Accident Reports</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Accident Date</label>
                            <input type="text" class="form-control date" id="accidentdate"
                                   data-toggle="date-picker" data-single-date-picker="true">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Accident Time</label>
                            <div class="input-group">
                                <input type="text" class="form-control" data-toggle="timepicker" id="accidenttime"
                                       value="10:00:00">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="weathercondition">* Weather Condition</label>
                            <select class="form-control" id="weathercondition" required>
                                <option selected="selected" value=""></option>
                                <option>Clear</option>
                                <option>Foggy</option>
                                <option>Heavy Rain</option>
                                <option>Light Rain</option>
                                <option>Moderate Rain</option>
                                <option>Snow</option>
                                <option>Sunny</option>
                                <option>Windy</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="accidentdetails">* Accident Report</label>
                            <textarea class="form-control" id="accidentdetails" rows="3" required></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="damagedetails">Damage Details</label>
                            <textarea class="form-control" id="damagedetails" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="accidentlocation">* Accident Location</label>
                            <textarea class="form-control" id="accidentlocation" rows="3" required></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Other Driver License #</label>
                            <input type="text" id="otherdriverlicensenumber" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Other Driver Name</label>
                            <input type="text" id="otherdrivername" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="otherdriveraddress">Other Driver Address</label>
                            <textarea class="form-control" id="otherdriveraddress" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Other Driver Phone #</label>
                            <input type="text" id="otherdriverphonenumber" class="form-control"
                                   data-toggle="input-mask" data-mask-format="(000) 000-0000"
                                   maxlength="14">
                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Employee Involved</label>
                            <select class="form-control" id="employeeinvolved">
                                <option selected disabled></option>
                                <option>alexis roman gonzalez (17)</option>
                                <option>Armando (18)</option>
                                <option>Carlos (14)</option>
                                <option>cesar lopez aldama (29)</option>
                                <option>david (19)</option>
                                <option>Eden Oziel (20)</option>
                                <option>Enrique (28)</option>
                                <option>enrique alonzo juarez-meraz (29)</option>
                                <option>Hector (22)</option>
                                <option>jesus francisco (21)</option>
                                <option>jorge adrian hernandez ruiz (30)</option>
                                <option>Juan (1)</option>
                                <option>juan (1234)</option>
                                <option>kevin rafael garcia Neri (27)</option>
                                <option>Luis (24)</option>
                                <option>mario muniz escobedo (16)</option>
                                <option>Martin (26)</option>
                                <option>Mayra (13)</option>
                                <option>miguel angel (25)</option>
                                <option>natalia hayde del rio (15)</option>
                                <option>Oscar (10)</option>
                                <option>Reynaldo (23)</option>
                            </select>
                        </div>

                        <div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                       id="employeeatfault">
                                <label class="custom-control-label" for="employeeatfault">Employee at Fault</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                       id="injuriesinvolved">
                                <label class="custom-control-label" for="injuriesinvolved">Injuries Involved</label>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="injurydetails">Injury Details</label>
                            <textarea class="form-control" id="injurydetails" rows="3"></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Number of People Injured</label>
                            <input type="text" id="numberofpeopleinjured" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Number of Fatalities</label>
                            <input type="text" id="numberoffatalities" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Number of Vehicles Towed</label>
                            <input type="text" id="numberofvehiclestowed" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                       id="hazmatinvolved">
                                <label class="custom-control-label" for="hazmatinvolved">Hazmat Involved</label>
                            </div>
                        </div>

                        <div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                       id="insurancenotified">
                                <label class="custom-control-label" for="insurancenotified">Insurance Notified</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Witness Name</label>
                            <input type="text" id="witnessname" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="witnessaddress">* Witness Address</label>
                            <textarea class="form-control" id="witnessaddress" rows="3" required></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Witness Phone</label>
                            <input type="text" id="witnessphone" class="form-control"
                                   data-toggle="input-mask" data-mask-format="(000) 000-0000"
                                   maxlength="14">
                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Additional Witness Name</label>
                            <input type="text" id="additionalwitnessname" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="additionalwitnessaddress">Additional Witness Address</label>
                            <textarea class="form-control" id="additionalwitnessaddress" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Additional Witness Phone</label>
                            <input type="text" id="additionalwitnessphone" class="form-control"
                                   data-toggle="input-mask" data-mask-format="(000) 000-0000"
                                   maxlength="14">
                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
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
