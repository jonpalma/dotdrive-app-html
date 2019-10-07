<form action="#" class="needs-validation" novalidate>

    <h4 class="header-title mb-3">Employment Information</h4>

    <div class="row">

        <div class="form-group col-md-4">
            <label for="employeetype">* Employee type</label>
            <div class="input-group">
                <select class="form-control" id="employeetype" required>
                    <option selected disabled></option>
                    <option>CDL Driver</option>
                </select>
                <span class="input-group-btn input-group-append">
                    <button class="btn btn-info bootstrap-touchspin-up" type="button" data-toggle="modal" data-target="#addEmployeeType"><i class="mdi mdi-plus"></i></button>
                </span>
            </div>
        </div>

        <div class="modal fade" id="addEmployeeType" tabindex="-1" role="dialog" aria-labelledby="employee-training-modal-label" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="employee-training-modal-label">New Employee Type</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label>New Value</label>
                            <input type="text" id="name" class="form-control">
                        </div>

                        <button class="btn btn-block btn-success" data-dismiss="modal">Insert</button>

                    </div>
                </div>
            </div>
        </div>

        <div class="form-group col-md-4">
            <label for="employmentstatus">* Employment Status</label>
            <select class="form-control" id="employmentstatus" required>
                <option selected disabled></option>
                <option>Full-time</option>
                <option>Part-time</option>
                <option>Seasonal</option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label>* Hire Date</label>
            <input type="text" class="form-control date" id="hiredate"
                   data-toggle="date-picker" data-single-date-picker="true"
                   required>
        </div>

        <div class="form-group col-md-4">
            <label>Address</label>
            <input type="text" id="employmentaddress" class="form-control">
        </div>

        <div class="form-group col-md-4">
            <label>Phone</label>
            <input type="text" id="employmentphone" class="form-control"
                   data-toggle="input-mask" data-mask-format="(000) 000-0000"
                   maxlength="14">
            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
        </div>

        <div class="form-group col-md-4">
            <label for="employmentemail">Email</label>
            <input type="email" id="employmentemail" name="employmentemail" class="form-control" placeholder="Email">
        </div>

        <div class="form-group col-md-4">
            <label>City</label>
            <input type="text" id="employmentcity" class="form-control">
        </div>

        <div class="form-group col-md-4">
            <label>State</label>
            <select class="form-control select2" id="employmentstate" data-toggle="select2">
                <option selected disabled></option>
                <option>Alabama</option>
                <option>Alaska</option>
                <option>Arizona</option>
                <option>Arkansas</option>
                <option>California</option>
                <option>Colorado</option>
                <option>Connecticut</option>
                <option>Delaware</option>
                <option>District of Columbia</option>
                <option>Florida</option>
                <option>Georgia</option>
                <option>Hawaii</option>
                <option>Idaho</option>
                <option>Illinois</option>
                <option>Indiana</option>
                <option>Iowa</option>
                <option>Kansas</option>
                <option>Kentucky</option>
                <option>Louisiana</option>
                <option>Maine</option>
                <option>Maryland</option>
                <option>Massachusetts</option>
                <option>Michigan</option>
                <option>Minnesota</option>
                <option>Mississippi</option>
                <option>Missouri</option>
                <option>Montana</option>
                <option>Nebraska</option>
                <option>Nevada</option>
                <option>New Hampshire</option>
                <option>New Jersey</option>
                <option>New Mexico</option>
                <option>New York</option>
                <option>North Carolina</option>
                <option>North Dakota</option>
                <option>Ohio</option>
                <option>Oklahoma</option>
                <option>Oregon</option>
                <option>Pennsylvania</option>
                <option>Rhode Island</option>
                <option>South Carolina</option>
                <option>South Dakota</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Utah</option>
                <option>Vermont</option>
                <option>Virginia</option>
                <option>Washington</option>
                <option>West Virginia</option>
                <option>Wisconsin</option>
                <option>Wyoming</option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label>Zip Code</label>
            <input type="text" id="zipcode" class="form-control">
        </div>

        <div class="form-group mt-3 col-md-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input"
                       id="activeemployee">
                <label class="custom-control-label" for="activeemployee">Active
                    Employee</label>
            </div>
        </div>

    </div>

    <hr class="mb-4">

    <div id="employment-accordion-opt" class="custom-accordion mb-4">

        <div class="card mb-0">
            <div class="card-header" id="headingOneEmployment">
                <h5 class="m-0">
                    <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse"
                       href="#collapseOneEmployment" aria-expanded="false"
                       aria-controls="collapseOneEmployment">
                        Employee Information <span class="float-right"><i
                                    class="mdi mdi-chevron-down accordion-arrow"></i></span>
                    </a>
                </h5>
            </div>
            <div id="collapseOneEmployment" class="collapse" aria-labelledby="headingOneEmployment"
                 data-parent="#employment-accordion-opt" style="">
                <div class="card-body">

                    <div class="row">

                        <div class="form-group col-md-4">
                            <label>* First Name</label>
                            <input type="text" id="firstname" class="form-control" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Middle</label>
                            <input type="text" id="middlename" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label>* Last Name</label>
                            <input type="text" id="lastname" class="form-control" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label>* Address Line 1</label>
                            <input type="text" id="addressline1" class="form-control" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Address Line 2</label>
                            <input type="text" id="addressline2" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label>* City</label>
                            <input type="text" id="city" class="form-control" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label>* State</label>
                            <select class="form-control select2" id="state" required data-toggle="select2">
                                <option selected disabled></option>
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>Arizona</option>
                                <option>Arkansas</option>
                                <option>California</option>
                                <option>Colorado</option>
                                <option>Connecticut</option>
                                <option>Delaware</option>
                                <option>District of Columbia</option>
                                <option>Florida</option>
                                <option>Georgia</option>
                                <option>Hawaii</option>
                                <option>Idaho</option>
                                <option>Illinois</option>
                                <option>Indiana</option>
                                <option>Iowa</option>
                                <option>Kansas</option>
                                <option>Kentucky</option>
                                <option>Louisiana</option>
                                <option>Maine</option>
                                <option>Maryland</option>
                                <option>Massachusetts</option>
                                <option>Michigan</option>
                                <option>Minnesota</option>
                                <option>Mississippi</option>
                                <option>Missouri</option>
                                <option>Montana</option>
                                <option>Nebraska</option>
                                <option>Nevada</option>
                                <option>New Hampshire</option>
                                <option>New Jersey</option>
                                <option>New Mexico</option>
                                <option>New York</option>
                                <option>North Carolina</option>
                                <option>North Dakota</option>
                                <option>Ohio</option>
                                <option>Oklahoma</option>
                                <option>Oregon</option>
                                <option>Pennsylvania</option>
                                <option>Rhode Island</option>
                                <option>South Carolina</option>
                                <option>South Dakota</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Utah</option>
                                <option>Vermont</option>
                                <option>Virginia</option>
                                <option>Washington</option>
                                <option>West Virginia</option>
                                <option>Wisconsin</option>
                                <option>Wyoming</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label>* Zip Code</label>
                            <input type="text" id="zipcode" class="form-control" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label>* Date of Birth</label>
                            <input type="text" class="form-control date" id="dateofbirth"
                                   data-toggle="date-picker" data-single-date-picker="true"
                                   required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender">
                                <option selected disabled></option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Social Security Number</label>
                            <input type="text" id="socialsecurity" class="form-control"
                                   data-toggle="input-mask" data-mask-format="000-00-0000"
                                   maxlength="9">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Cellphone</label>
                            <input type="text" id="cellphone" class="form-control"
                                   data-toggle="input-mask" data-mask-format="(000) 000-0000"
                                   maxlength="14">
                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Emergency Contact</label>
                            <input type="text" id="emergencycontact" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Emergency Daytime Phone</label>
                            <input type="text" id="emergencydaytimephone" class="form-control"
                                   data-toggle="input-mask" data-mask-format="(000) 000-0000"
                                   maxlength="14">
                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
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

<?php include('modules/views/fileUpload.php') ?>
