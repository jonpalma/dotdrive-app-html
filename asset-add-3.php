<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#license-modal"><i
        class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>License Name</th>
            <th>License Number</th>
            <th>Expiration Date</th>
            <th>Status</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>Name</td>
            <td> 0991</td>
            <td>01/11/2018</td>
            <td><i class="mdi mdi-circle text-warning"></i> 1 month</td>
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
<div class="modal fade" id="license-modal" tabindex="-1" role="dialog"
     aria-labelledby="license-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="license-modal-label">License</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* License Name</label>
                            <input type="text" id="licensename" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>License Number</label>
                            <input type="text" id="licensenumber" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Year</label>
                            <input type="text" id="year" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Expiration Date</label>
                            <input type="text" class="form-control date" id="expirationdate" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>License Cost</label>
                            <input type="text" id="licensecost" class="form-control">
                        </div>

                        <!--<div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="alerton">
                                <label class="custom-control-label" for="alerton">Alert On</label>
                            </div>
                        </div>-->

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