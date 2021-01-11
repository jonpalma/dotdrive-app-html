<div class="table-responsive-sm" style="overflow: auto;">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>WO #</th>
            <th>Asset</th>
            <th>Service</th>
            <th>Actual Start</th>
            <th>Actual Completion</th>
            <th>Total</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#1</a></td>
            <td>Truck 2</td>
            <td>
                <div>Service 1</div>
                <div>Service 2</div>
            </td>
            <td>01/07/2019</td>
            <td>01/10/2019</td>
            <td>$2,099</td>
            <td>
                <div class="dropdown">
                    <a href="#" class="d-block" id="dropdownMenu10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-menu"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu10">
                        <a class="dropdown-item" href="/asset/edit/10"><i class="mdi mdi-square-edit-outline"></i> Edit</a>
                        <a class="dropdown-item" href="/asset/edit/10" data-toggle="modal" data-target="#addComment"><i class="mdi mdi-plus"></i> Add comment</a>
                        <button class="dropdown-item btn btn-link" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td><a href="#">#2</a></td>
            <td>Truck 2</td>
            <td>
                <div>Maintenance 1</div>
                <div>Service 2</div>
            </td>
            <td>01/07/2019</td>
            <td>01/10/2019</td>
            <td>$2,099</td>
            <td>
                <div class="dropdown">
                    <a href="#" class="d-block" id="dropdownMenu10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-menu"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu10">
                        <a class="dropdown-item" href="/asset/edit/10"><i class="mdi mdi-square-edit-outline"></i> Edit</a>
                        <a class="dropdown-item" href="/asset/edit/10"><i class="mdi mdi-plus"></i> Add comment</a>
                        <button class="dropdown-item btn btn-link" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td><a href="#">#3</a></td>
            <td>Truck 2</td>
            <td>
                <div>Service 1</div>
                <div>Maintenance 2</div>
            </td>
            <td>01/07/2019</td>
            <td>01/10/2019</td>
            <td>$2,099</td>
            <td>
                <div class="dropdown">
                    <a href="#" class="d-block" id="dropdownMenu10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-menu"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu10">
                        <a class="dropdown-item" href="/asset/edit/10"><i class="mdi mdi-square-edit-outline"></i> Edit</a>
                        <button class="dropdown-item btn btn-link" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div> <!-- end table-responsive-->




<div class="modal fade" id="addComment" tabindex="-1" role="dialog" aria-labelledby="employee-training-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addComment-modal-label">Add Comments to Services</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <strong>WO <a href="/service/edit/13" id="wo-sum-id">#5</a> - <span id="wo-sum-date">10/07/2019</span> - <span id="wo-sum-asset">Truck 1206</span></strong>
                    </div>

                    <form id="addComment" action="https://app.dotdrive.net/service/addComment" enctype="multipart/form-data">
                        <div class="text-center">
                            <div class="spinner-border m-2 d-none" role="status" id="loader">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <div class="row" id="titles">
                            <div class="col-md-6"><label>Description</label></div>
                            <div class="col-md-6"><label>Comments</label></div>
                            
                        </div>

                        <div id="services-container">
                           <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="hidden" value="20" name="service_id[]">
                                    <textarea class="form-control" cols="30" rows="3" readonly="">Transmission Repair</textarea>
                                </div>
                                <div class="col-md-6">
                                    <textarea name="comments[]" class="form-control" cols="30" rows="3" maxlength="512" data-toggle="maxlength">Flavio clutch repair</textarea>
                                </div>

                            <div class="col-12" id="invoice-title"><label>Invoice</label></div>
                                <div class="col-md-4 input-group align-self-start">
                                    <div class="input-group-prepend">
                                        <label for="invoice20" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i></label>
                                        <input type="file" id="invoice20" name="invoice20" class="d-none">
                                    </div>
                                    <a href="#" type="text" class="form-control btn btn-light text-truncate " target="_blank">service_20.pdf</a>
                                </div>
                                <div class="col-md-4 input-group align-self-start">
                                    <div class="input-group-prepend">
                                        <label for="invoice20" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i></label>
                                        <input type="file" id="invoice20" name="invoice20" class="d-none">
                                    </div>
                                    <a href="#" type="text" class="form-control btn btn-light text-truncate " target="_blank">service_21.pdf</a>
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

                        <div class="row" id="titles">
                            <div class="col-md-6"><label>Description</label></div>
                            <div class="col-md-6"><label>Comments</label></div>
                            
                        </div>

                        <div id="services-container">
                           <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="hidden" value="20" name="service_id[]">
                                    <textarea class="form-control" cols="30" rows="3" readonly="">Transmission Repair</textarea>
                                </div>
                                <div class="col-md-6">
                                    <textarea name="comments[]" class="form-control" cols="30" rows="3" maxlength="512" data-toggle="maxlength">Flavio clutch repair</textarea>
                                </div>

                            <div class="col-12" id="invoice-title"><label>Invoice</label></div>
                                <div class="col-md-4 input-group align-self-start">
                                    <div class="input-group-prepend">
                                        <label for="invoice20" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i></label>
                                        <input type="file" id="invoice20" name="invoice20" class="d-none">
                                    </div>
                                    <a href="#" type="text" class="form-control btn btn-light text-truncate " target="_blank">service_20.pdf</a>
                                </div>
                                <div class="col-md-4 input-group align-self-start">
                                    <div class="input-group-prepend">
                                        <label for="invoice20" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i></label>
                                        <input type="file" id="invoice20" name="invoice20" class="d-none">
                                    </div>
                                    <a href="#" type="text" class="form-control btn btn-light text-truncate " target="_blank">service_21.pdf</a>
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

                        <div class="row" id="titles">
                            <div class="col-md-6"><label>Description</label></div>
                            <div class="col-md-6"><label>Comments</label></div>
                            
                        </div>

                        <div id="services-container">
                           <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="hidden" value="20" name="service_id[]">
                                    <textarea class="form-control" cols="30" rows="3" readonly="">Transmission Repair</textarea>
                                </div>
                                <div class="col-md-6">
                                    <textarea name="comments[]" class="form-control" cols="30" rows="3" maxlength="512" data-toggle="maxlength">Flavio clutch repair</textarea>
                                </div>

                            <div class="col-12" id="invoice-title"><label>Invoice</label></div>
                                <div class="col-md-4 input-group align-self-start">
                                    <div class="input-group-prepend">
                                        <label for="invoice20" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i></label>
                                        <input type="file" id="invoice20" name="invoice20" class="d-none">
                                    </div>
                                    <a href="#" type="text" class="form-control btn btn-light text-truncate " target="_blank">service_20.pdf</a>
                                </div>
                                <div class="col-md-4 input-group align-self-start">
                                    <div class="input-group-prepend">
                                        <label for="invoice20" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i></label>
                                        <input type="file" id="invoice20" name="invoice20" class="d-none">
                                    </div>
                                    <a href="#" type="text" class="form-control btn btn-light text-truncate " target="_blank"></a>
                                </div>
                                <div class="col-md-4 input-group align-self-start">
                                    <div class="input-group-prepend">
                                        <label for="invoice20" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i></label>
                                        <input type="file" id="invoice20" name="invoice20" class="d-none">
                                    </div>
                                    <a href="#" type="text" class="form-control btn btn-light text-truncate " target="_blank"></a>
                                </div>
                           </div>
                        </div>


                        <button class="btn btn-block btn-success" type="submit">Save</button>
                    </form>

                </div>
            </div>
    </div>
</div>