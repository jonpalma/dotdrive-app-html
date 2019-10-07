<?php include('header-employee.php'); ?>
<style>
    table td, table th {
        border: 1px solid;
        padding: 5px;
    }
</style>

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">

                <div class="progress progress-lg mb-4 mt-2">
                    <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 90%"
                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                </div>

                <!-- start body content -->

                <form action="employee-application-19.php" class="needs-validation" novalidate>

                    <h4 class="page-title text-center mb-4">MVR RELEASE CONSENT FORM</h4>

                    <div class="text-justify mb-2">
                        In conjunction with my potential employment at
                        <div class="form-group d-inline-block pl-2 pr-2" style="width: 250px">
                            <input type="text" class="form-control" placeholder="The Company" value="Company Name" required>
                        </div>, I
                        <div class="form-group d-inline-block pl-2 pr-2" style="width: 250px">
                            <input type="text" class="form-control" placeholder="Applicant" value="Applicant Name" required>
                        </div> consent to the release of my Motor Vehicle
                        Records (MVR) to the company. I understand the company will use these records to evaluate my
                        suitability to fulfill driving duties that may be related to the position for which I am
                        applying. I also consent to the review, evaluation, and other use of any MVR I may have provided
                        to the company.
                    </div>
                    <div class="text-justify mb-2">
                        This consent is given in satisfaction of Public Law 18 USC 2721 et. Seq.,
                        “Federal Drivers Privacy Protection Act”, and is intended to constitute “written consent” as
                        required by this Act..
                    </div>
                    <div class="text-justify">
                        Signed
                        <div class="form-group d-inline-block pl-2 pr-2" style="width: 250px">
                            <input type="text" class="form-control" placeholder="Applicant" value="Applicant Name" required>
                        </div>
                    </div>
                    <div class="text-justify">
                        Date:
                        <div class="form-group d-inline-block pl-2 pr-2" style="width: 250px">
                            <input type="text" class="form-control date" id="date" data-toggle="date-picker"
                                   data-single-date-picker="true" value="<?php echo date('m/d/Y'); ?>"
                                   data-reset-val="false" required>
                        </div>
                    </div>
                    <div class="text-justify">
                        Driver's License Number:
                        <div class="form-group d-inline-block pl-2 pr-2" style="width: 250px">
                            <input type="text" class="form-control" placeholder="License Number" value="License Number" required>
                        </div>
                    </div>
                    <div class="text-justify">
                        State:
                        <div class="form-group d-inline-block pl-2 pr-2" style="width: 250px">
                            <input type="text" class="form-control" placeholder="State" value="State Name" required>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-block btn-primary">NEXT</button>
                    </div>

                </form>

                <!-- end body content -->

            </div> <!-- end card body-->
        </div> <!-- end card -->

    </div>
    <!-- end col-12 -->
</div> <!-- end row -->
<?php include('footer.php'); ?>