<?php include('header-employee.php'); ?>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">

                    <div class="progress progress-lg mb-4 mt-2">
                        <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 42%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                    </div>

                    <!-- start body content -->
                    <form action="employee-application-10.php" class="needs-validation" novalidate>

                        <div class="row">

                            <div class="form-group col-lg-6 col-md-6">
                                <label>* Have you attended a school (not related to truck driving) in the last 10
                                    Years?</label>
                                <select class="form-control" id="attendedschool" required>
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

                                            <div class="col-12">
                                                <h4 class="page-title">Education Information</h4>
                                            </div>

                                            <div class="row">

                                                <div class="form-group col-lg-6 col-md-6">
                                                    <label>* School name</label>
                                                    <input type="text" id="schoolname" class="form-control" required
                                                           disabled>
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6">
                                                    <label>* Start date</label>
                                                    <input type="text" class="form-control date" id="startdate"
                                                           data-toggle="date-picker"
                                                           data-single-date-picker="true" required disabled>
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6">
                                                    <label>* End date</label>
                                                    <input type="text" class="form-control date" id="enddate"
                                                           data-toggle="date-picker"
                                                           data-single-date-picker="true" required disabled>
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6">
                                                    <label>* City</label>
                                                    <input type="text" id="city" class="form-control" required disabled>
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6">
                                                    <label>* State / Province (where school is located)</label>
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
                                                    <label for="country">* Country</label>
                                                    <select class="form-control" id="country" required disabled>
                                                        <option>Canada</option>
                                                        <option>Mexico</option>
                                                        <option selected>USA</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6">
                                                    <label>Telephone</label>
                                                    <input type="text" class="form-control" data-toggle="input-mask"
                                                           data-mask-format="(000) 000-0000" maxlength="14"
                                                           disabled>
                                                    <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6">
                                                    <label>* What did you study? (accounting, mechanic, etc.)</label>
                                                    <input type="text" id="whatwasstudied" class="form-control" required disabled>
                                                </div>

                                                <div class="form-group col-lg-6 col-md-6">
                                                    <label>Graduation date (leave blank if no graduation)</label>
                                                    <input type="text" class="form-control date" id="graduationdate"
                                                           data-toggle="date-picker"
                                                           data-single-date-picker="true" disabled>
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
    $('#attendedschool').change(function () {
        enableInp($(this), 1, '', true);
    });
</script>