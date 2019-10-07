<form action="#" class="needs-validation" novalidate>

    <h4 class="header-title mb-3">General Information</h4>

    <div class="row">

        <div class="form-group col-md-6">
            <label>*  Name</label>
            <input type="text" id="name" class="form-control" required>
        </div>

        <div class="form-group col-md-6">
            <label for="example-select">* Asset Type</label>
            <div class="input-group">
                <select class="form-control" id="assettype" required>
                    <option>Box Truck</option>
                    <option>Car</option>
                    <option>Forklift</option>
                    <option>Tractor</option>
                    <option>Trailer</option>
                    <option>Truck</option>
                </select>
                <span class="input-group-btn input-group-append">
                    <button class="btn btn-info bootstrap-touchspin-up" type="button" data-toggle="modal" data-target="#addAssetType"><i class="mdi mdi-plus"></i></button>
                </span>
            </div>
        </div>

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="activeasset">
                <label class="custom-control-label" for="activeasset">Active Asset</label>
            </div>
        </div>

        <div class="modal fade" id="addAssetType" tabindex="-1" role="dialog" aria-labelledby="employee-training-modal-label" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="employee-training-modal-label">New Asset Type</h4>
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

    </div>

    <div id="general-accordion-opt" class="custom-accordion mb-4">

        <div class="card mb-0">
            <div class="card-header" id="headingOneGeneral">
                <h5 class="m-0">
                    <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse"
                       href="#collapseOneGeneral" aria-expanded="false"
                       aria-controls="collapseOneGeneral">
                        Add more information <span class="float-right"><i
                                    class="mdi mdi-chevron-down accordion-arrow"></i></span>
                    </a>
                </h5>
            </div>
            <div id="collapseOneGeneral" class="collapse" aria-labelledby="headingOneGeneral"
                 data-parent="#general-accordion-opt" style="">
                <div class="card-body">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Serial #</label>
                            <input type="text" id="serialnumber" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Make</label>
                            <input type="text" id="make" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Model</label>
                            <input type="text" id="model" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Year</label>
                            <input type="text" id="year" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Color</label>
                            <input type="text" id="color" class="form-control">
                        </div>

                    </div>

                </div>
            </div>
        </div> <!-- end card-->

    </div>

    <div class="row">

        <div class="form-group col-12">
            <button type="submit" class="btn btn-block btn-primary">Save</button>
        </div>

    </div>

</form>

<?php include('modules/views/fileUpload.php') ?>
