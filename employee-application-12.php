<?php include('header-employee.php'); ?>

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">

                <div class="progress progress-lg mb-4 mt-2">
                    <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 63%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                </div>

                <!-- start body content -->

                <form action="employee-application-13.php" class="needs-validation" novalidate>

                    <h4 class="page-title">Traffic Conviction / Violation History</h4>

                    <hr class="mb-4">

                    <div class="row">

                        <div class="form-group col-lg-6 col-md-6">
                            <label>* Have you had any moving violations or traffic convictions in the past 3
                                years?</label>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <select class="form-control" id="violations" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div class="d-none">

                        <button type="button" class="btn btn-icon btn-success" data-toggle="modal"
                                data-target="#employment-application-modal"><i
                                    class="mdi mdi-plus"></i></button>
                        <hr class="mb-4">
                        <div class="table-responsive">
                            <table class="table table-centered mb-0">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>Star date</th>
                                    <th>End date</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Description</td>
                                    <td>Type</td>
                                    <td>01/11/2017</td>
                                    <td>01/11/2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="" type="button" id="dropdownMenu2"
                                               data-toggle="dropdown"
                                               aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical-circle"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <button class="dropdown-item" type="button"><i
                                                            class="mdi mdi-square-edit-outline"></i> Edit
                                                </button>
                                                <button class="dropdown-item" type="button"><i
                                                            class="mdi mdi-delete"></i> Delete
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="modal fade" id="employment-application-modal" tabindex="-1" role="dialog"
                             aria-labelledby="employment-application-modal-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="employment-application-modal-label">Employment
                                            Information</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            ×
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row">

                                            <div class="form-group col-lg-6 col-md-6">
                                                <label>* Violation Date</label>
                                                <input type="text" class="form-control date" id="violationdate"
                                                       data-toggle="date-picker"
                                                       data-single-date-picker="true" required disabled>
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6">
                                                <label>* Charge / Description</label>
                                                <select class="form-control" id="charge" required disabled>
                                                    <option selected disabled></option>
                                                    <option>Careless/Reckless Driving</option>
                                                    <option>Cell Phone Usage</option>
                                                    <option>Defective Equipment</option>
                                                    <option>Driving with Suspended License</option>
                                                    <option>Driving Without A License</option>
                                                    <option>DUI/OWI</option>
                                                    <option>Failure to Obey Signal</option>
                                                    <option>Failure to Report Accident</option>
                                                    <option>Failure to Yield</option>
                                                    <option>Following Too Closely</option>
                                                    <option>Hazmat Violation</option>
                                                    <option>Improper Backing</option>
                                                    <option>Improper Lane Change</option>
                                                    <option>Improper Passing</option>
                                                    <option>Improper Turn</option>
                                                    <option>Inattentive Driving</option>
                                                    <option>Lane Violation</option>
                                                    <option>Leaving Scene of Accident</option>
                                                    <option>No Insurance / Proof of Insurance</option>
                                                    <option>Overweight</option>
                                                    <option>Seat Belt</option>
                                                    <option>Speeding</option>
                                                    <option>Texting While Driving</option>
                                                    <option>Too Fast for Conditions</option>
                                                    <option>Violation Resulting from Accident</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6">
                                                <label>* State</label>
                                                <select class="form-control" id="state" required disabled>
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

                                            <div class="form-group col-lg-6 col-md-6">
                                                <label>* Were you in a Commercial Vehicle?</label>
                                                <select class="form-control" id="commercialvehicle" required disabled>
                                                    <option selected disabled></option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6">
                                                <label>* Penalty / Fine (Check all that apply)</label>
                                                <select class="form-control" id="penalty" multiple data-toggle="select2"
                                                        required disabled>
                                                    <option>Fine</option>
                                                    <option>Suspension</option>
                                                    <option>Revocation</option>
                                                    <option>Community Service</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6">
                                                <label>Fine Amount (if applicable)?</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="prepend-dollar">$</span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           aria-describedby="prepend-dollar">
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-12">
                                                <label for="explanation2">Comments<br> If you answered "Other" to any
                                                    question, please provide additional detail</label>
                                                <textarea class="form-control" id="comments" rows="3" disabled
                                                          required></textarea>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="form-group col-6">
                                                <button type="submit" class="btn btn-block btn-primary"
                                                        class="close"
                                                        data-dismiss="modal" aria-hidden="true">Insert
                                                </button>
                                            </div>

                                            <div class="form-group col-6">
                                                <button type="submit" class="btn btn-block btn-danger" class="close"
                                                        data-dismiss="modal" aria-hidden="true">Cancel
                                                </button>
                                            </div>

                                        </div>


                                    </div>

                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
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
    $('#violations').change(function () {
        enableInp($(this), 1, '', true);
    });
</script>
