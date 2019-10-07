<?php include('header-employee.php'); ?>

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">

                <div class="progress progress-lg mb-4 mt-2">
                    <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 49%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                </div>

                <!-- start body content -->
                <form action="employee-application-11.php" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="col-12">

                            <h4>License information</h4>

                            <p>
                                DOT regulations require us to obtain the names and addresses of all your
                                employers/contractors for the past 10 years. For the 7 years preceding the last 3
                                years,
                                we need the name and address of the employers/contractors for which you were the
                                operator of a commercial motor vehicle. For each employer/contractor provided under
                                these requirements, we must have the dates of employment/contract and the reason for
                                leaving.

                            </p>

                            <div class="row">

                                <div class="col-6">
                                    <p>You have completed 100% of the total 10  years required. </p>
                                </div>
                                <div class="col-6">
                                    <div class="progress progress-lg mb-4 mt-1">
                                        <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <ul class="nav nav-pills bg-light nav-justified mb-3">
                        <li class="nav-item">
                            <a href="#employment" data-toggle="tab" aria-expanded="true"
                               class="nav-link rounded-0">
                                <span>Add Employment/Contact</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#unemployment" data-toggle="tab" aria-expanded="true"
                               class="nav-link rounded-0">
                                <span>Add Unemployment</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <div class="tab-pane" id="employment">

                            <div class="d-none" id="employmentform">

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

                                <div class="modal fade" id="employment-application-modal" tabindex="-1"
                                     role="dialog"
                                     aria-labelledby="employment-application-modal-label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="employment-application-modal-label">
                                                    Employment
                                                    Information</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="row">

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>* Company name</label>
                                                        <input type="text" id="companyname" class="form-control"
                                                               required
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
                                                        <label>Street address</label>
                                                        <input type="text" id="streetaddress" class="form-control"
                                                               disabled>
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>* City</label>
                                                        <input type="text" id="city" class="form-control" required
                                                               disabled>
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
                                                        <label>* Zip/Postal</label>
                                                        <input type="text" id="postal" class="form-control" required
                                                               disabled>
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
                                                        <label>* Telephone</label>
                                                        <input type="text" class="form-control"
                                                               data-toggle="input-mask"
                                                               data-mask-format="(000) 000-0000" maxlength="14"
                                                               required
                                                               disabled>
                                                        <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>* Position held</label>
                                                        <input type="text" id="positionheld" class="form-control"
                                                               required
                                                               disabled>
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>* Reason for leaving</label>
                                                        <input type="text" id="reasonforleaving"
                                                               class="form-control" required
                                                               disabled>
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>* Where you terminated/discharged/laid off?</label>
                                                        <select class="form-control" id="discharge" required
                                                                disabled>
                                                            <option selected disabled></option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6 d-none">
                                                        <label for="dischargeexplain">* Please Explain</label>
                                                        <textarea class="form-control" id="dischargeexplain"
                                                                  rows="3" required
                                                                  disabled></textarea>
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>* Is this your current employer?</label>
                                                        <input type="text" id="currentemployer"
                                                               class="form-control" required
                                                               disabled>
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>* May we contact this employer at this time?</label>
                                                        <select class="form-control" id="contactemployer" required
                                                                disabled>
                                                            <option selected disabled></option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>* Did you operate a commercial motor vehicle?</label>
                                                        <select class="form-control" id="operatevehicle" required
                                                                disabled>
                                                            <option selected disabled></option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="row d-none" id="operatecont">

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>* Areas Driven</label>
                                                        <input type="text" id="areasdriven" class="form-control"
                                                               disabled>
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>Miles driven weekly</label>
                                                        <select class="form-control" id="drivenmiles" disabled>
                                                            <option selected disabled></option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>Did you perform any safety sensitive functions in
                                                            this job,
                                                            regulated by DOT, and subject to drug and alcohol
                                                            testing?</label>
                                                        <select class="form-control" id="safety" required disabled>
                                                            <option selected disabled></option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>* Most common truck driven</label>
                                                        <input type="text" id="commontruck" class="form-control"
                                                               required
                                                               disabled>
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>* Most common trailer</label>
                                                        <input type="text" id="commontrailer" class="form-control"
                                                               required
                                                               disabled>
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label>* Trailer length</label>
                                                        <input type="text" id="trailerlength" class="form-control"
                                                               required
                                                               disabled>
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
                                                        <button type="submit" class="btn btn-block btn-danger"
                                                                class="close"
                                                                data-dismiss="modal" aria-hidden="true">Cancel
                                                        </button>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>

                            </div>

                        </div>

                        <div class="tab-pane" id="unemployment">

                            <div class="d-none" id="unemploymentform">

                                <button type="button" class="btn btn-icon btn-success" data-toggle="modal"
                                        data-target="#employment-application-2-modal">
                                    <i class="mdi mdi-plus"></i>
                                </button>
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

                                <div class="modal fade" id="employment-application-2-modal" tabindex="-1"
                                     role="dialog"
                                     aria-labelledby="employment-application-2-modal-label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="employment-application-2-modal-label">
                                                    Employment
                                                    Information</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="row">

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

                                                    <div class="form-group col-12">
                                                        <label for="comments">Comments</label>
                                                        <textarea class="form-control" id="comments" rows="3"
                                                                  disabled></textarea>
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
                                                        <button type="submit" class="btn btn-block btn-danger"
                                                                class="close"
                                                                data-dismiss="modal" aria-hidden="true">Cancel
                                                        </button>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>

                            </div>

                        </div>

                    </div>

                    <hr class="mb-4">

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
    let prevTab = '';
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        let href = $(this).attr('href'),
            cont = $(href);
        if(prevTab !== '') {
            $(prevTab).find('select,input,textarea').prop('disabled',true);
        }
        prevTab = href;
        enableInp(cont, false, '', true, href.substring(1) + 'form');
    }).on('hide.bs.tab', function (e) {
    });

    $('#operatevehicle').change(function () {
        enableInp($(this), 1, '', true, 'operatecont');
    });

    $('#discharge').change(function () {
        enableInp($(this), 1, 'textarea');
    });
</script>
