<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#employee-training-modal"><i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Training class</th>
            <th>Star date</th>
            <th>End date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#1</a></td>
            <td>Class 1</td>
            <td>01/11/2017</td>
            <td>01/11/2018</td>
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
<div class="modal fade" id="employee-training-modal" tabindex="-1" role="dialog"
     aria-labelledby="employee-training-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="employee-training-modal-label">Employee Training</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="trainingclass">* Training Class</label>
                            <div class="input-group">
                                <select class="form-control" id="trainingclass" required>
                                    <option selected disabled></option>
                                </select>
                                <span class="input-group-btn input-group-append">
                                    <button class="btn btn-info bootstrap-touchspin-up" type="button" data-toggle="modal" data-target="#addTrainingClass"><i class="mdi mdi-plus"></i></button>
                                </span>
                            </div>
                        </div>

                        <div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="required">
                                <label class="custom-control-label" for="required">Required</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="vendor">Vendor</label>
                            <select class="form-control" id="vendor">
                                <option selected disabled></option>
                            </select>
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

<div class="modal fade" id="addTrainingClass" tabindex="-1" role="dialog" aria-labelledby="employee-training-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="employee-training-modal-label">New Training Class</h4>
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
