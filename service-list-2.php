<div class="table-responsive-sm" style="overflow: auto;">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>WO #</th>
            <th>Asset</th>
            <th>Service</th>
            <th>Comments</th>
            <th>Scheluded Start</th>
            <th>Actual Start</th>
            <th>Finish</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#4</a></td>
            <td>Truck 2</td>
            <td>
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                <div>Service 2</div>
            </td>
            <td><a href="#">2</a></td>
            <td></td>
            <td></td>
            <td>
                <button class="btn btn-rounded btn-info text-white pl-3 pr-3" data-toggle="modal" data-target="#finish-modal">Finish</button>
            </td>
        </tr>
        <tr>
            <td><a href="#">#5</a></td>
            <td>Truck 2</td>
            <td>
                <div>Maintenance 1</div>
                <div>Service 2</div>
            </td>
            <td><a href="#">2</a></td>
            <td></td>
            <td></td>
            <td>
                <button class="btn btn-rounded btn-info text-white pl-3 pr-3" data-toggle="modal" data-target="#finish-modal">Finish</button>
            </td>
        </tr>
        </tbody>
    </table>
</div> <!-- end table-responsive-->

<div class="modal fade" id="finish-modal" tabindex="-1" role="dialog" aria-labelledby="employee-training-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="employee-training-modal-label">Finish Work Order</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <form id="finishWO" action="http://app.dotdrive.net/service/finish" enctype="multipart/form-data">
                        <div class="text-center">
                            <div class="spinner-border m-2 d-none" role="status" id="loader">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5"><label>Description</label></div>
                            <div class="col-md-5"><label>Comments</label></div>
                            <div class="col-md-2"><label>Total</label></div>
                            
                        </div>

                        <div id="services-container">
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <input type="hidden" value="41" name="service_id[]">
                                    <textarea class="form-control" cols="30" rows="3" readonly="">Test</textarea>
                                </div>
                                <div class="col-md-5">
                                    <textarea name="comments[]" class="form-control" cols="30" rows="3" required=""></textarea>
                                </div>
                                <div class="col-md-2"><input type="text" class="form-control" name="total[]" required="">
                                </div>
                                <div class="col-12" id="invoice-title"><label>Invoice</label></div>
                                <div class="col-md-4 input-group align-self-start">
                                    <div class="input-group-prepend">
                                        <label for="invoice20" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i></label>
                                        <input type="file" id="invoice20" name="invoice20" class="d-none">
                                    </div>
                                    <a href="#" type="text" class="form-control btn btn-light text-truncate " target="_blank">service_22.pdf</a>
                                </div>
                                <div class="col-md-4 input-group align-self-start">
                                    <div class="input-group-prepend">
                                        <label for="invoice20" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i></label>
                                        <input type="file" id="invoice20" name="invoice20" class="d-none">
                                    </div>
                                    <a href="#" type="text" class="form-control btn btn-light text-truncate " target="_blank">service_22.pdf</a>
                                </div>
                                <div class="col-md-4 input-group align-self-start">
                                    <div class="input-group-prepend">
                                        <label for="invoice20" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i></label>
                                        <input type="file" id="invoice20" name="invoice20" class="d-none">
                                    </div>
                                    <a href="#" type="text" class="form-control btn btn-light text-truncate " target="_blank">service_22.pdf</a>
                                </div>

                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-5"><label>Description</label></div>
                            <div class="col-md-5"><label>Comments</label></div>
                            <div class="col-md-2"><label>Total</label></div>
                            
                        </div>

                        <div id="services-container">
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <input type="hidden" value="41" name="service_id[]">
                                    <textarea class="form-control" cols="30" rows="3" readonly="">Test</textarea>
                                </div>
                                <div class="col-md-5">
                                    <textarea name="comments[]" class="form-control" cols="30" rows="3" required=""></textarea>
                                </div>
                                <div class="col-md-2"><input type="text" class="form-control" name="total[]" required="">
                                </div>
                                <div class="col-12" id="invoice-title"><label>Invoice</label></div>
                                <div class="col-md-4 input-group align-self-start">
                                    <div class="input-group-prepend">
                                        <label for="invoice20" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i></label>
                                        <input type="file" id="invoice20" name="invoice20" class="d-none">
                                    </div>
                                    <a href="#" type="text" class="form-control btn btn-light text-truncate " target="_blank">service_22.pdf</a>
                                </div>
                                <div class="col-md-4 input-group align-self-start">
                                    <div class="input-group-prepend">
                                        <label for="invoice20" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i></label>
                                        <input type="file" id="invoice20" name="invoice20" class="d-none">
                                    </div>
                                    <a href="#" type="text" class="form-control btn btn-light text-truncate " target="_blank">service_22.pdf</a>
                                </div>
                                <div class="col-md-4 input-group align-self-start">
                                    <div class="input-group-prepend">
                                        <label for="invoice20" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i></label>
                                        <input type="file" id="invoice20" name="invoice20" class="d-none">
                                    </div>
                                    <a href="#" type="text" class="form-control btn btn-light text-truncate " target="_blank">service_22.pdf</a>
                                </div>

                            </div>
                        </div>

                        <hr>

                        <div class="row mb-4">
                            <input type="hidden" id="wo_id" name="wo_id" value="31">
                            <div class="col-6">
                                <label for="start_date">Actual Start</label>
                                <input type="text" class="form-control" single-date-picker="true" id="start_date" name="start_date" required="">
                            </div>
                            <div class="col-6">
                                <label for="finished_date">Actual Completion</label>
                                <input type="text" class="form-control" single-date-picker="true" id="finished_date" name="finished_date" required="">
                            </div>
                        </div>

                        <button class="btn btn-block btn-success" type="submit">Save</button>
                    </form>

                </div>
            </div>
    </div>
</div>
