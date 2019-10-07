<?php include('header.php'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Safety</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Services</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
                <h4 class="page-title">Add service</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">

                    <!-- start body content -->

                    <form action="#" class="needs-validation" novalidate>

                        <div class="row">

                            <div class="form-group col-md-2">
                                <label for="example-select">Service Type</label>
                                <select class="form-control" id="privacycase" required>
                                    <option selected disabled></option>
                                    <option>Maintenance</option>
                                    <option>Service</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="example-select">Asset</label>
                                <select class="form-control" id="privacycase" required>
                                    <option selected disabled></option>
                                    <option>Truck</option>
                                    <option>Truck 2</option>
                                    <option>Truck 3</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="example-select">Date</label>
                                <input type="text" class="form-control date" id="date" data-toggle="date-picker"
                                       data-single-date-picker="true" required>
                            </div>

                            <div class="form-group col-md-2">
                                <label>Actual Start</label>
                                <input type="text" class="form-control date" id="date" data-toggle="date-picker"
                                       data-single-date-picker="true" required>
                            </div>

                            <div class="form-group col-md-2">
                                <label>Actual Completion</label>
                                <input type="text" class="form-control date" id="date" data-toggle="date-picker"
                                       data-single-date-picker="true" required disabled="disabled">
                            </div>

                            <div class="form-group col-md-2">
                                <label>Odometer</label>
                                <input type="text" id="odometer" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-6 col-md-8">
                                <label for="description">Description</label>
                                <input type="text" id="description" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-1 col-md-1">
                                <label for="description">Documents</label>
                                <input type="text" id="description" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-2 col-md-2">
                                <label>Total</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="prepend-dollar">$</span>
                                    </div>
                                    <input type="text" id="total" class="form-control"
                                           aria-describedby="prepend-dollar" required>
                                </div>
                            </div>

                            <div class="form-group col-lg-1 col-md-8 mt-3">
                                <button type="button" class="btn btn-icon btn-success mt-1"><i class="mdi mdi-plus"></i></button>
                            </div>

                        </div>

                        <div class="table-responsive-sm mb-4 mt-2">
                            <table class="table table-centered mb-0">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Service Type</th>
                                    <th>Asset</th>
                                    <th>Date</th>
                                    <th>Odometer</th>
                                    <th>Description</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Maintenance</td>
                                    <td>Truck 2</td>
                                    <td>04/01/2019</td>
                                    <td>1500</td>
                                    <td>Description</td>
                                    <td>$2,500.00</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical-circle"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Service</td>
                                    <td>Truck 2</td>
                                    <td>04/01/2019</td>
                                    <td>1500</td>
                                    <td>Description</td>
                                    <td>$1,800.00</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical-circle"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                        <div class="row">

                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-block btn-primary">Save</button>
                            </div>

                        </div>

                    </form>

                    <!-- end body content -->

                </div> <!-- end card body-->
            </div> <!-- end card -->

        </div>
        <!-- end col-12 -->
    </div> <!-- end row -->
<?php include('footer.php'); ?>