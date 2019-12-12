<?php include('header.php'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">

                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <!-- start body content -->
                    <h4 class="page-title">My Account</h4>
                    <form action="#" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-12 mx-auto">
                                <div class="mx-auto">
                                    <img src="assets/images/avatar.jpg" class="rounded-circle mx-auto d-block" width="250px">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input type="text" id="name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last Name</label>
                                <input type="text" id="last_name" class="form-control" required></option>
                                </select>
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