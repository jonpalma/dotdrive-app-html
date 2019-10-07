<?php include('header-employee.php'); ?>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Safety</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Employees</a></li>
                    <li class="breadcrumb-item active">Application</li>
                </ol>
            </div>
            <h4 class="page-title">Employment Application</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">

                <div class="progress progress-lg mb-4 mt-2">
                    <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                </div>

                <!-- start body content -->
                <form action="employee-application-2.php" class="needs-validation" novalidate>

                    <h4 class="page-title">Personal Information</h4>

                    <hr class="mb-4">

                    <p>
                        Thank you for your interest in ' COMPANY NAME '. To apply for a driving position,
                        please complete our online application for employment. Incomplete information will delay the
                        processing of your application or prevent it from being submitted.

                    </p>

                    <p>
                        In compliance with Federal and State equal employment opportunity laws, qualified applicants
                        are considered for all positions without regard to race, color, religion, sex, national
                        origin, age, marital status, veteran status, non-job related disability, or any other
                        protected group status.
                    </p>

                    <ul>
                        <li>To fill out this form, you will need to know the following:</li>
                        <li>Social Security Number</li>
                        <li>Home address history for the past 3 years</li>
                        <li>Current drivers license number and drivers license history for the past 3 years</li>
                        <li> Employment history for the past 10 years</li>
                        <li>History of traffic accidents, violations and/or convictions from the last 3 years (including
                            DUI or reckless driving conviction and license suspension)
                        </li>

                    </ul>


                    <p>If you encounter any errors during this process and cannot continue, please contact us at
                        (000) 000-0000</p>


                    <div class="row">

                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-block btn-primary">Next</button>
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