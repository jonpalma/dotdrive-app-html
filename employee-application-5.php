<?php include('header-employee.php'); ?>


    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">

                    <div class="progress progress-lg mb-4 mt-2">
                        <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 28%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                    </div>

                    <!-- start body content -->
                    <form action="employee-application-7.php" class="needs-validation" novalidate>


                        <div class="row">

                            <div class="form-group col-lg-6 col-md-6">
                                <label>* Were you ever in the military?</label>
                                <select class="form-control" id="military" required>
                                    <option selected disabled></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>

                        </div>

                        <div class="row d-none">

                            <div class="col-12">
                                <h4 class="page-title">Military Service</h4>
                            </div>

                            <div class="form-group col-lg-6 col-md-6">
                                <label>* Branch of Service</label>
                                <select class="form-control" id="branch" required disabled>
                                    <option selected disabled></option>
                                    <option>Air Force</option>
                                    <option>Army</option>
                                    <option>Coast Guard</option>
                                    <option>Marines</option>
                                    <option>Navy</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 d-none">
                                <label>* Start date</label>
                                <input type="text" class="form-control date" id="startdate" data-toggle="date-picker"
                                       data-single-date-picker="true" required disabled>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 d-none">
                                <label>* End date</label>
                                <input type="text" class="form-control date" id="enddate" data-toggle="date-picker"
                                       data-single-date-picker="true" required disabled>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label>* Rank at discharge</label>
                                <input type="text" id="rank" class="form-control" required disabled>
                            </div>

                            <div class="form-group col-lg-6 col-md-6">
                                <label>* Can you obtain your DD214?</label>
                                <select class="form-control" id="dd214" required disabled>
                                    <option selected disabled></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-6">
                                <label>* Did you have a honorable discharge?</label>
                                <select class="form-control" id="discharge" required disabled>
                                    <option selected disabled></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 d-none">
                                <label for="dischargeexplain">* Please Explain</label>
                                <textarea class="form-control" id="dischargeexplain" rows="3" required
                                          disabled></textarea>
                            </div>

                        </div>

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
<script>
    $('#military').change(function () {
        enableInp($(this), 1, '', true);
    });

    $('#discharge').change(function () {
        enableInp($(this), 2, 'textarea');
    });
</script>
