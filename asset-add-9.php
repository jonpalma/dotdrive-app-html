<!--<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#preventive-maintenance-modal">
    <i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">-->
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Maintenance Name</th>
            <th>Last PM Performed</th>
            <th>Miles Till Next PM</th>
            <th>PM Interval</th>
            <th>Frequency</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>MANT</td>
            <td>01/11/2018</td>
            <td>11</td>
            <td>800HOO332</td>
            <td>Year</td>
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
<!--
<div class="modal fade" id="preventive-maintenance-modal" tabindex="-1" role="dialog"
     aria-labelledby="preventive-maintenance-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="preventive-maintenance-modal-label">Preventive Maintenance</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Preventive Maintenance Name</label>
                            <input type="text" id="preventivemaintenancename" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Last PM Performed</label>
                            <input type="text" class="form-control date" id="lastpmperformed" data-toggle="date-picker"
                                   data-single-date-picker="true" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Miles Till Next PM</label>
                            <input type="text" id="milestillnextpm" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Usage Hours Till Next PM</label>
                            <input type="text" id="usagehourstillnextpm" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* PM Interval</label>
                            <input type="text" id="pminterval" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Frequency</label>
                            <select class="form-control" id="frequency">
                                <option selected disabled></option>
                                <option>None</option>
                                <option>Days</option>
                                <option>Weeks</option>
                                <option>Months</option>
                                <option>Years</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <!-<div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="alerton">
                                <label class="custom-control-label" for="alerton">Alert On</label>
                            </div>
                        </div>->

                    </div>

                    <div class="row">

                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>

                    </div>

                </form>

                <?php include('modules/views/fileUpload.php') ?>

            </div>
        </div><!- /.modal-content ->
    </div><!- /.modal-dialog ->
</div>
-->
