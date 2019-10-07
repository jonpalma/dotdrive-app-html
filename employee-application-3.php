<?php include('header-employee.php'); ?>


<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">

                <div class="progress progress-lg mb-4 mt-2">
                    <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 14%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                </div>

                <!-- start body content -->
                <form action="employee-application-4.php" class="needs-validation" novalidate>

                    <h4 class="page-title">Personal Information</h4>

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Are you legally eligible for employment in the United States?</label>
                            <select class="form-control" id="suffix" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Are you currently employed?</label>
                            <select class="form-control" id="currentlyemployed" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 d-none">
                            <label>* What date did your las employment end?</label>
                            <input type="text" class="form-control date" id="jobenddate" data-toggle="date-picker"
                                   data-single-date-picker="true" required disabled>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Do you read, write, and speak English?</label>
                            <select class="form-control" id="englishlang" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label for="previouswork">* Have you ever worked for this company before?</label>
                            <select class="form-control" id="previouswork" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 d-none">
                            <label for="previouscompanyexperience">* Enter start and end dates, location, position, rate
                                of pay, and reason for leaving</label>
                            <textarea class="form-control" id="previouscompanyexperience" rows="3" required
                                      disabled></textarea>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 d-none">
                            <label>* Expiration date</label>
                            <input type="text" class="form-control date" id="expirationdate" data-toggle="date-picker"
                                   data-single-date-picker="true" required disabled>
                        </div>

                        <div class="form-group col-lg-3 col-md-6 d-none">
                            <label>* Enter name</label>
                            <input type="text" id="enterothername" class="form-control" required>
                        </div>

                        <div class="form-group col-lg-3 col-md-6">
                            <label>* How did you hear about us?</label>
                            <select class="form-control" id="suffix" required>
                                <option selected disabled></option>
                                <option>Current employee</option>
                                <option>Friend</option>
                                <option>Facebook</option>
                                <option>Craiglist</option>
                                <option>Internet</option>
                                <option>Word of Mouth</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-3 col-md-3">
                            <label>If referral or other, please name</label>
                            <input type="text" class="form-control date" id="referral">
                        </div>

                        <div class="form-group col-lg-3 col-md-3">
                            <label>Emergency contact name</label>
                            <input type="text" class="form-control date" id="emergencyname">
                        </div>

                        <div class="form-group col-lg-3 col-md-3">
                            <label>Emergency address</label>
                            <input type="text" class="form-control date" id="emergencyaddress">
                        </div>

                        <div class="form-group col-lg-3 col-md-3">
                            <label>Emergency Phone</label>
                            <input type="text" class="form-control" data-toggle="input-mask"
                                   data-mask-format="(000) 000-0000" maxlength="14">
                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                        </div>

                    </div>

                    <label>
                        <h4 class="page-title">Driving Experience</h4>
                        <i>If no experience in a class, enter "NONE".</i>
                    </label>

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Straight Truck</label>
                            <select class="form-control" id="truck" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 d-none" id="truckyears">
                            <label>* Number of years</label>
                            <select class="form-control" id="truck" required>
                                <option selected disabled></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>Over 10</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Buses</label>
                            <select class="form-control" id="buses" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 d-none" id="busesyears">
                            <label>* Number of years</label>
                            <select class="form-control" id="truck" required>
                                <option selected disabled></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>Over 10</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Flatbeds</label>
                            <select class="form-control" id="flatbeds" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 d-none" id="flatbedsyears">
                            <label>* Number of years</label>
                            <select class="form-control" id="truck" required>
                                <option selected disabled></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>Over 10</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Tractor and Semi-Trailer</label>
                            <select class="form-control" id="tractorsemi" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 d-none" id="tractorsemiyears">
                            <label>* Number of years</label>
                            <select class="form-control" id="truck" required>
                                <option selected disabled></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>Over 10</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Tractor - Two Trailers</label>
                            <select class="form-control" id="tractortwo" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 d-none" id="tractortwoyears">
                            <label>* Number of years</label>
                            <select class="form-control" id="truck" required>
                                <option selected disabled></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>Over 10</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>Other</label>
                            <select class="form-control" id="other" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 d-none" id="otheryears">
                            <textarea class="form-control" id="otheryears" rows="3"></textarea>
                        </div>

                    </div>

                    <hr class="mb-4">

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>Are you applying for Owner/Operator</label>
                            <select class="form-control" id="owneroperator" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div id="owner-accordion-opt" class="custom-accordion mb-4 d-none">

                        <div class="card mb-0">
                            <div class="card-header" id="headingOneOwner">
                                <h5 class="m-0">
                                    <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse"
                                       href="#collapseOneOwner" aria-expanded="false"
                                       aria-controls="collapseOneOwner">
                                        Equipment (Owner/Operators Only) <span class="float-right"><i
                                                    class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOneOwner" class="collapse" aria-labelledby="headingOneOwner"
                                 data-parent="#owner-accordion-opt" style="">
                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-12">
                                            <i>Equipment Description</i>
                                        </div>

                                        <div class="form-group col-lg-3 col-md-3">
                                            <label>Type</label>
                                            <input class="form-control" id="equipmenttype" rows="3" disabled>
                                        </div>

                                        <div class="form-group col-lg-3 col-md-3">
                                            <label>Year</label>
                                            <input class="form-control" id="equipmentyear" rows="3" disabled>
                                        </div>

                                        <div class="form-group col-lg-3 col-md-3">
                                            <label>Make</label>
                                            <input class="form-control" id="equipmentmake" rows="3" disabled>
                                        </div>

                                        <div class="form-group col-lg-3 col-md-3">
                                            <label>Model</label>
                                            <input class="form-control" id="equipmentmodel" rows="3" disabled>
                                        </div>

                                        <div class="form-group col-lg-3 col-md-3">
                                            <label>Color</label>
                                            <input class="form-control" id="equipmentcolor" rows="3" disabled>
                                        </div>

                                        <div class="form-group col-lg-3 col-md-3">
                                            <label>VIN</label>
                                            <input class="form-control" id="equipmentvin" rows="3" disabled>
                                        </div>

                                        <div class="form-group col-lg-3 col-md-3">
                                            <label>Weight</label>
                                            <input class="form-control" id="equipmentweight" rows="3" disabled>
                                        </div>

                                        <div class="form-group col-lg-3 col-md-3">
                                            <label>Mileage</label>
                                            <input class="form-control" id="equipmentmileage" rows="3" disabled>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div> <!-- end card-->

                    </div>

                    <div class="row">

                        <div class="col-12">
                            <h4 class="page-title">Education</h4>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label>List last highest grade completed</label>
                            <select class="form-control" id="educationgrade">
                                <option selected disabled></option>
                                <option>College - 1</option>
                                <option>College - 2</option>
                                <option>College - 3</option>
                                <option>College - 4</option>
                                <option>College - 5+</option>
                                <option>GED</option>
                                <option>Grade 1</option>
                                <option>Grade 2</option>
                                <option>Grade 3</option>
                                <option>Grade 4</option>
                                <option>Grade 5</option>
                                <option>Grade 6</option>
                                <option>Grade 7</option>
                                <option>Grade 8</option>
                                <option>Grade 9</option>
                                <option>Grade 10</option>
                                <option>Grade 11</option>
                                <option>Grade 12</option>
                                <option>MBA</option>
                                <option>PhD</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label>List last school attended (name, city and state)</label>
                            <textarea class="form-control" id="lastschool" rows="3"></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-12">
                            <h4 class="page-title">Personal References</h4>
                            <i>List name, address, city, state, phone, number and relationship</i>
                        </div>

                        <div class="form-group col-lg-6 col-md-12">
                            <label>First reference</label>
                            <textarea class="form-control" id="reference1" rows="3"></textarea>
                        </div>

                        <div class="form-group col-lg-6 col-md-12">
                            <label>Second reference</label>
                            <textarea class="form-control" id="reference2" rows="3"></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-block btn-primary">Next</button>
                        </div>

                    </div>

                </form>


                <!-- end body content -->

            </div> <!-- end card body-->
        </div> <!-- end card -->

    </div>
    <!-- end col-12 -->
</div> <!-- end row -->
<?php include('footer.php'); ?>

<script>
    $('#currentlyemployed').change(function () {
        enableInp($(this), 2, 'input')
    });

    $('#previouswork').change(function () {
        enableInp($(this), 1, 'textarea');
    });

    $('#twic').change(function () {
        enableInp($(this), 1, 'input')
    });

    $('#othername').change(function () {
        enableInp($(this), 1, 'input')
    });

    $('#truck').change(function () {
        enableInp($(this), 1, 'select', false, 'truckyears')
    });

    $('#semi').change(function () {
        enableInp($(this), 1, 'select', false, 'semiyears')
    });

    $('#buses').change(function () {
        enableInp($(this), 1, 'select', false, 'busesyears')
    });

    $('#flatbeds').change(function () {
        enableInp($(this), 1, 'select', false, 'flatbedsyears')
    });

    $('#tractorsemi').change(function () {
        enableInp($(this), 1, 'select', false, 'tractorsemiyears')
    });

    $('#tractortwo').change(function () {
        enableInp($(this), 1, 'select', false, 'tractortwoyears')
    });

    $('#other').change(function () {
        enableInp($(this), 1, 'select', false, 'otheryears')
    });

    $('#owneroperator').change(function () {
        enableInp($(this), 1, '', true, 'owner-accordion-opt');
    });
</script>