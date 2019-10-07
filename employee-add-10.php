<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#hr-paperwork-modal"><i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Type</th>
            <th>Completed Date</th>
            <th>Status</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>W-4</td>
            <td>01/11/2018</td>
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
<div class="modal fade" id="hr-paperwork-modal" tabindex="-1" role="dialog"
     aria-labelledby="hr-paperwork-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="hr-paperwork-modal-label">HR Paperwork</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Type</label>
                            <div class="input-group">
                                <select class="form-control" id="type" required>
                                    <option selected disabled></option>
                                    <option>I-9</option>
                                    <option>Policy Agreement</option>
                                    <option>W-4</option>
                                </select>
                                <span class="input-group-btn input-group-append">
                                    <button class="btn btn-info bootstrap-touchspin-up" type="button" data-toggle="modal" data-target="#addHRType"><i class="mdi mdi-plus"></i></button>
                                </span>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Status</label>
                            <select class="form-control" id="status" required>
                                <option selected disabled></option>
                                <option>Grandfathered</option>
                                <option>N/A</option>
                                <option>Not Completed</option>
                                <option>Completed</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Completed Date</label>
                            <input type="text" class="form-control date" id="completeddate"
                                   data-toggle="date-picker" data-single-date-picker="true" required>
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

<div class="modal fade" id="addHRType" tabindex="-1" role="dialog" aria-labelledby="employee-training-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="employee-training-modal-label">New Type</h4>
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
