<!--<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#accident-reports-modal"><i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">-->
<div class="table-responsive">
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
</div>
<!--<div class="modal fade" id="accident-reports-modal" tabindex="-1" role="dialog"
     aria-labelledby="accident-reports-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="accident-reports-modal-label">Accident Reports</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>
                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="assetinvolved">Asset Involved</label>
                            <select class="form-control" id="assetinvolved" required>
                                <option selected="selected" value=""></option>
                                <option>Owner 3 (3)</option>
                                <option>Trailer 53171 (53171)</option>
                                <option>Trailer 53184 (53184)</option>
                                <option>Trailer 53321 (53321)</option>
                                <option>Trailer 53947 (53947)</option>
                                <option>Trailer 54257 (54257)</option>
                                <option>Trailer 54281 (54281)</option>
                                <option>Trailer 54298 (54298)</option>
                                <option>Trailer 54471 (54471)</option>
                                <option>Trailer 54473 (54473)</option>
                                <option>Trailer 8608 (8608)</option>
                                <option>Trailer 8620 (8620)</option>
                                <option>Truck 1206 (1206)</option>
                                <option>Truck 1207 (1207)</option>
                                <option>Truck 1208 (1208)</option>
                                <option>Truck 1209 (1209)</option>
                                <option>Truck 1210 (1210)</option>
                                <option>Truck 1211 (1211)</option>
                                <option>Truck 1212 (1212)</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="otherassetinvolved">Other Asset Involved</label>
                            <select class="form-control" id="otherassetinvolved" multiple data-toggle="select2">
                                <option>Rented Vehicle</option>
                                <option>Owner 3 (3)</option>
                                <option>Trailer 53171 (53171)</option>
                                <option>Trailer 53184 (53184)</option>
                                <option>Trailer 53321 (53321)</option>
                                <option>Trailer 53947 (53947)</option>
                                <option>Trailer 54257 (54257)</option>
                                <option>Trailer 54281 (54281)</option>
                                <option>Trailer 54298 (54298)</option>
                                <option>Trailer 54471 (54471)</option>
                                <option>Trailer 54473 (54473)</option>
                                <option>Trailer 8608 (8608)</option>
                                <option>Trailer 8620 (8620)</option>
                                <option>Truck 1206 (1206)</option>
                                <option>Truck 1207 (1207)</option>
                                <option>Truck 1208 (1208)</option>
                                <option>Truck 1209 (1209)</option>
                                <option>Truck 1210 (1210)</option>
                                <option>Truck 1211 (1211)</option>
                                <option>Truck 1212 (1212)</option>
                            </select>
                        </div>

                    </div>

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
                            <label for="weathercondition">Weather Condition</label>
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
                            <label for="accidentdetails">Accident Report</label>
                            <textarea class="form-control" id="accidentdetails" rows="3" required></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="damagedetails">Damage Details</label>
                            <textarea class="form-control" id="damagedetails" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="accidentlocation">Accident Location</label>
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

                        <div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                       id="employeeatfault">
                                <label class="custom-control-label" for="employeeatfault">Employee at Fault</label>
                            </div>
                        </div>

                        <div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                       id="injuriesinvolved">
                                <label class="custom-control-label" for="injuriesinvolved">Injuries Involved</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="injurydetails">Injury Details</label>
                            <textarea class="form-control" id="injurydetails" rows="3"></textarea>
                        </div>

                    </div>

                    <hr class="mb-4">

                    <h4 class="header-title mb-3">Property Damage Details</h4>

                    <div class="row">

                        <div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                       id="propertydamage">
                                <label class="custom-control-label" for="propertydamage">Property Damage</label>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Owner Name</label>
                            <input type="text" id="ownername" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Address</label>
                            <input type="text" id="address" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Phone Number</label>
                            <input type="text" id="phonenumber" class="form-control"
                                   data-toggle="input-mask" data-mask-format="(000) 000-0000"
                                   maxlength="14">
                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="descriptionofdamage">Description of Damage</label>
                            <textarea class="form-control" id="descriptionofdamage" rows="3" required></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Number of People Injured</label>
                            <input type="text" id="numberofpeopleinjured" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Number of Fatalities</label>
                            <input type="text" id="numberoffatalities" class="form-control">
                        </div>

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
                            <label for="witnessaddress">Witness Address</label>
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
                            <textarea class="form-control" id="additionalwitnessaddress" rows="3" required></textarea>
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
        </div><!-- /.modal-content --
    </div><!-- /.modal-dialog --
</div>
-->