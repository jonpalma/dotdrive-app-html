<?php include('header.php'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Safety</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Violations</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
                <h4 class="page-title">Add violation</h4>
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

                            <div class="form-group col-md-3">
                                <label>* Violation Discovered</label>
                                <input type="text" id="violation" class="form-control" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="example-select">* Asset</label>
                                <select class="form-control" id="privacycase" required>
                                    <option selected disabled></option>
                                    <option>Truck</option>
                                    <option>Truck 2</option>
                                    <option>Truck 3</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label>* Date</label>
                                <input type="text" class="form-control date" id="date" data-toggle="date-picker"
                                       data-single-date-picker="true" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label>* Code</label>
                                <input type="text" id="code" class="form-control" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label>* Odometer</label>
                                <input type="text" id="odometer" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-4 col-md-8">
                                <label for="description">* Description</label>
                                <input type="text" id="description" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-4 col-md-4">
                                <label>Total</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="prepend-dollar">$</span>
                                    </div>
                                    <input type="text" id="total" class="form-control"
                                           aria-describedby="prepend-dollar" required>
                                </div>
                            </div>

                        </div>

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