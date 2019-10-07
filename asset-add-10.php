<!--<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#service-records-modal">
    <i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">-->
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Service Date</th>
            <th>Work Performed</th>
            <th>Work Order Number</th>
            <th>Invoice Number</th>
            <th>Documents</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>01/11/2018</td>
            <td>Internally</td>
            <td>80032</td>
            <td>3452</td>
            <td>3</td>
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
<div class="modal fade" id="service-records-modal" tabindex="-1" role="dialog"
     aria-labelledby="service-records-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="service-records-modal-label">Service Records</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Service Date</label>
                            <input type="text" class="form-control date" id="servicedate" data-toggle="date-picker"
                                   data-single-date-picker="true" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Work Performed</label>
                            <select class="form-control" id="workperformed" required>
                                <option selected disabled></option>
                                <option>Internally</option>
                                <option>Externally</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Work Order Number</label>
                            <input type="text" id="workordernumber" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Invoice Number</label>
                            <input type="text" id="invoicenumber" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-12">
                            <label for="descriptionofservice">* Description of Service</label>
                            <textarea class="form-control" id="descriptionofservice" rows="3" required></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group mt-3 col-md-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="alerton">
                                <label class="custom-control-label" for="preventivemaintenanceplan">Preventive
                                    Maintenance Plan</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Odometer Reading</label>
                            <input type="text" id="odometerreading" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Hours Reading</label>
                            <input type="text" id="hoursreading" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Service Vendor</label>
                            <select class="form-control" id="servicevendor">
                                <option selected disabled></option>
                                <option>C&S Tires</option>
                                <option>Fleet Pride</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Service Vendor Phone</label>
                            <input type="text" class="form-control" data-toggle="input-mask"
                                   data-mask-format="(000) 000-0000" maxlength="14">
                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Parts Cost</label>
                            <input type="text" id="partscost" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Mechanic Name</label>
                            <input type="text" id="mechanicname" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Labor Cost</label>
                            <input type="text" id="laborcost" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Actial Repair Time</label>
                            <input type="text" id="actualrepairtime" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Tax</label>
                            <input type="text" id="tax" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Payment Method</label>
                            <select class="form-control" id="paymentmethod">
                                <option selected disabled></option>
                                <option>American Express</option>
                                <option>Cash</option>
                                <option>Check</option>
                                <option>Credit Card</option>
                                <option>Discover</option>
                                <option>EFS</option>
                                <option>Master Card</option>
                                <option>Visa</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Total Cost</label>
                            <input type="text" id="totalcost" class="form-control" value="$0.00">
                        </div>

                        <div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="autocalculate">
                                <label class="custom-control-label" for="autocalculate">Auto Calculate</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-md-12">
                            <label for="notes">* Notes</label>
                            <textarea class="form-control" id="notes" rows="3" required></textarea>
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
        </div><!- /.modal-content ->
    </div><!- /.modal-dialog ->
</div>
-->
