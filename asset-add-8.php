<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#warranty-modal"><i
        class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Terms</th>
            <th>Start Date</th>
            <th>Expiration</th>
            <th>Odometer Reading</th>
            <th>Miles Covered</th>
            <th>Hours Covered</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>TEXT</td>
            <td>01/11/2018</td>
            <td>01/11/2018</td>
            <td>W E</td>
            <td><i class="mdi mdi-circle text-success"></i> 9000</td>
            <td>50</td>
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
<div class="modal fade" id="warranty-modal" tabindex="-1" role="dialog"
     aria-labelledby="warranty-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="warranty-modal-label">Warranty</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Warranty Terms</label>
                            <input type="text" id="warrantyterms" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Warranty Start Date</label>
                            <input type="text" class="form-control date" id="warrantystartdate" data-toggle="date-picker"
                                   data-single-date-picker="true" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Warranty Expiration</label>
                            <input type="text" class="form-control date" id="warrantyexpiration" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Odometer Reading</label>
                            <input type="text" id="odometerreading" class="form-control" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Number of Miles Covered</label>
                            <input type="text" id="numberofmilescovered" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Number of Hours Covered</label>
                            <input type="text" id="numberofhourscovered" class="form-control" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Warranty Vendor</label>
                            <div class="input-group">
                                <select class="form-control" id="warrantyvendor">
                                    <option selected disabled></option>
                                </select>
                                <span class="input-group-btn input-group-append">
                                    <button class="btn btn-info bootstrap-touchspin-up" type="button" data-toggle="modal" data-target="#addVendor"><i class="mdi mdi-plus"></i></button>
                                </span>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Warranty Vendor Phone</label>
                            <input type="text" class="form-control" data-toggle="input-mask"
                                   data-mask-format="(000) 000-0000" maxlength="14">
                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Purchase Price</label>
                            <input type="text" id="purchaseprice" class="form-control" required>
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

<div class="modal fade" id="addVendor" tabindex="-1" role="dialog" aria-labelledby="vendor-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="vendor-modal-label">New Warranty Vendor</h4>
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
