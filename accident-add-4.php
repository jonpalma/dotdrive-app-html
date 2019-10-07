<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#time-off-modal"><i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Injury/Illness Date Reported</th>
            <th>Injury/Illness Name</th>
            <th>Injury/Illness ID</th>
            <th>Away From Work</th>
            <th>On Job Transfer/Restriction</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>01/11/2018</td>
            <td>Illness</td>
            <td>Illness ID 1</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<div class="modal fade" id="time-off-modal" tabindex="-1" role="dialog"
     aria-labelledby="time-off-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="time-off-modal-label">Time Off Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Related Injury Record</label>
                            <input type="text" id="relatedinjuryrecord" class="form-control" disabled>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Injury Location Name</label>
                            <input type="text" id="injurylocationname" class="form-control" disabled>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Injury at Employer's Premises</label>
                            <input type="text" id="injuryatpremises" class="form-control" disabled>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="example-select">* Away From Work</label>
                            <select class="form-control" id="awayfromwork" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="example-select">* On Job Transfer/Restriction</label>
                            <select class="form-control" id="onjobtransfer" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="example-select">* Employer paid for los time on day of injury</label>
                            <select class="form-control" id="employerpaidforlosttime" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Date Notified of Lost Time</label>
                            <input type="text" class="form-control date" id="datenotifiedoflosttime"
                                   data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="example-select">* Privacy Case</label>
                            <select class="form-control" id="privacycase" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <hr class="mb-4">

                    <h4 class="page-title">Away From Work Records</h4>

                    <button type="button" class="btn btn-icon btn-success" data-toggle="modal"
                            data-target="#away-from-work-records-modal"><i
                                class="mdi mdi-plus"></i></button>
                    <div class="table-responsive">
                        <table class="table table-centered mb-0">
                            <thead class="thead-dark">
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>Start Date</th>
                                <th>Return Date</th>
                                <th>Notes</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>01/11/2018</td>
                                <td>01/11/2018</td>
                                <td>Notes</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="mb-4">

                    <h4 class="page-title">Job Transfer/Restriction Records</h4>

                    <button type="button" class="btn btn-icon btn-success" data-toggle="modal"
                            data-target="#job-transfer-records-modal"><i
                                class="mdi mdi-plus"></i></button>
                    <div class="table-responsive">
                        <table class="table table-centered mb-0">
                            <thead class="thead-dark">
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>Start Date</th>
                                <th>Return Date</th>
                                <th>Job Transfer</th>
                                <th>Job Restriction</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>01/11/2018</td>
                                <td>01/11/2018</td>
                                <td>Job Transfer</td>
                                <td>Job Restriction</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="mb-4">

                    <h4 class="page-title">Work Specific Records</h4>

                    <button type="button" class="btn btn-icon btn-success" data-toggle="modal"
                            data-target="#work-specific-records-modal"><i
                                class="mdi mdi-plus"></i></button>
                    <div class="table-responsive">
                        <table class="table table-centered mb-0">
                            <thead class="thead-dark">
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>Start Date</th>
                                <th>Stop Date</th>
                                <th>Avg. Weekly Wage</th>
                                <th>Hourly Rate</th>
                                <th>Weekly Expenses</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>01/11/2018</td>
                                <td>01/11/2018</td>
                                <td>1000</td>
                                <td>15</td>
                                <td>25</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">

                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>

                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade" id="away-from-work-records-modal" tabindex="-1" role="dialog"
     aria-labelledby="away-from-work-records-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="away-from-work-records-modal-label">Away From Work Records</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Start Date</label>
                            <input type="text" class="form-control date" id="startdate" data-toggle="date-picker"
                                   data-single-date-picker="true" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Return Date</label>
                            <input type="text" class="form-control date" id="returndate" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-12">
                            <label for="notes">Notes</label>
                            <textarea class="form-control" id="notes" rows="3"></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>

                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade" id="job-transfer-records-modal" tabindex="-1" role="dialog"
     aria-labelledby="job-transfer-records-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="job-transfer-records-modal-label">Job Transfer/Restriction Records</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Start Date</label>
                            <input type="text" class="form-control date" id="startdate" data-toggle="date-picker"
                                   data-single-date-picker="true" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Return Date</label>
                            <input type="text" class="form-control date" id="returndate" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-12">
                            <label for="notes">Job Transfer</label>
                            <textarea class="form-control" id="jobtransfer" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="notes">Job Restriction</label>
                            <textarea class="form-control" id="jobrestriction" rows="3"></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>

                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade" id="work-specific-records-modal" tabindex="-1" role="dialog"
     aria-labelledby="work-specific-records-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="work-specific-records-modal-label">Work Specific Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Start Date</label>
                            <input type="text" class="form-control date" id="startdate" data-toggle="date-picker"
                                   data-single-date-picker="true" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Stop Date</label>
                            <input type="text" class="form-control date" id="stopdate" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Average Weekly Wage</label>
                            <input type="text" id="averageweeklywage" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Hourly Rate</label>
                            <input type="text" id="hourlyrate" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Hours a Day</label>
                            <input type="text" id="hoursaday" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Days a Week</label>
                            <input type="text" id="daysaweek" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Weekly Expenses</label>
                            <input type="text" id="weeklyexpenses" class="form-control">
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
