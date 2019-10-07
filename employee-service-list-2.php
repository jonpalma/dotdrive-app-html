<div class="table-responsive-sm" style="overflow: auto;">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Driver</th>
                <th>App day</th>
                <th>DQ Files</th>
                <th>Date</th>
                <th>Hire</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#">#10</a></td>
                <td>Juan Perez</td>
                <td>01/11/2018</td>
                <td>
                    <div>Application</div>
                    <div>CDL</div>
                    <div>MVR</div>
                    <div class="missing-info">Road Test</div>
                    <div>Road Test Certificate</div>
                    <div class="missing-info">Drug test</div>
                    <div>Medical Certificate</div>
                    <div class="missing-info">Safety Performance Investigation</div>
                </td>
                <td>
                    <div>01/24/2019</div>
                    <div>01/24/2019</div>
                    <div>01/24/2019</div>
                    <div><a href="#">Upload</a></div>
                    <div>01/24/2019</div>
                    <div><a href="#">Upload</a></div>
                    <div>01/24/2019</div>
                    <div><a href="#">Upload</a></div>
                    <div><a href="#">Upload</a></div>

                </td>
                <td>
                    <button action="#" class="btn btn-rounded btn-info text-white pl-3 pr-3">Yes</button>
                <td>
                    <td>
                    <button action="#" class="btn btn-rounded btn-info text-white pl-3 pr-3">No</button>
                <td>
                    <div class="dropdown">
                      <a href="#" class="" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical-circle"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button"><i class="mdi mdi-square-edit-outline"></i> Edit</button>
                        <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                      </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div> <!-- end table-responsive-->

<div class="modal fade" id="finish-modal" tabindex="-1" role="dialog" aria-labelledby="employee-training-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="employee-training-modal-label">Next Service</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control date" id="date" data-toggle="date-picker"
                           data-single-date-picker="true" required>
                </div>

                <button class="btn btn-block btn-success" data-dismiss="modal">Save</button>

            </div>
        </div>
    </div>
</div>
