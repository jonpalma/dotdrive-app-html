<?php include('header-employee.php'); ?>


    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">

                    <div class="progress progress-lg mb-4 mt-2">
                        <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 7%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                    </div>

                    <!-- start body content -->
                    <form action="employee-application-3.php" class="needs-validation" novalidate>

                        <div class="row">

                            <div class="form-group col-lg-4 col-md-6">
                                <h4>Application for Commercial Driver (CDL)</h4>
                            </div>

                        </div>

                        <hr class="mb-4">

                        <h4 class="page-title">Personal Information</h4>

                        <div class="row">

                            <div class="form-group col-lg-3 col-md-6">
                                <label>*   First Name</label>
                                <input type="text" id="firstname" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label>Middle Name</label>
                                <input type="text" id="middlename" class="form-control">
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label>* Last Name</label>
                                <input type="text" id="lastname" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label for="suffix">Suffix</label>
                                <select class="form-control" id="suffix">
                                    <option selected disabled></option>
                                    <option>Jr.</option>
                                    <option>II</option>
                                    <option>Sr.</option>
                                    <option>III</option>
                                </select>
                            </div>

                        </div>

                        <label>
                            <i>Date of Birth and Social Security Number are used only for background checks.</i>
                        </label>

                        <div class="row">

                            <div class="form-group col-lg-3 col-md-6">
                                <label>* SSN/SIN</label>
                                <input type="text" id="ssnsin" class="form-control"
                                       data-toggle="input-mask" data-mask-format="000-00-0000"
                                       maxlength="9">
                                <span class="font-13 text-muted">e.g "xxx-xx-xxxx"</span>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label>* Date of Birth</label>
                                <input type="text" class="form-control date" id="dateofbirth" data-toggle="date-picker"
                                       data-single-date-picker="true" required>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label>* Street Address(line 1)</label>
                                <input type="text" id="street1" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label>Street Address(line 2)</label>
                                <input type="text" id="street2" class="form-control">
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label>* City/Province</label>
                                <input type="text" id="city" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label>* State</label>
                                <select class="form-control" id="state" required>
                                    <option selected disabled></option>
                                    <option>Alabama</option>
                                    <option>Alaska</option>
                                    <option>Arizona</option>
                                    <option>Arkansas</option>
                                    <option>California</option>
                                    <option>Colorado</option>
                                    <option>Connecticut</option>
                                    <option>Delaware</option>
                                    <option>District of Columbia</option>
                                    <option>Florida</option>
                                    <option>Georgia</option>
                                    <option>Hawaii</option>
                                    <option>Idaho</option>
                                    <option>Illinois</option>
                                    <option>Indiana</option>
                                    <option>Iowa</option>
                                    <option>Kansas</option>
                                    <option>Kentucky</option>
                                    <option>Louisiana</option>
                                    <option>Maine</option>
                                    <option>Maryland</option>
                                    <option>Massachusetts</option>
                                    <option>Michigan</option>
                                    <option>Minnesota</option>
                                    <option>Mississippi</option>
                                    <option>Missouri</option>
                                    <option>Montana</option>
                                    <option>Nebraska</option>
                                    <option>Nevada</option>
                                    <option>New Hampshire</option>
                                    <option>New Jersey</option>
                                    <option>New Mexico</option>
                                    <option>New York</option>
                                    <option>North Carolina</option>
                                    <option>North Dakota</option>
                                    <option>Ohio</option>
                                    <option>Oklahoma</option>
                                    <option>Oregon</option>
                                    <option>Pennsylvania</option>
                                    <option>Rhode Island</option>
                                    <option>South Carolina</option>
                                    <option>South Dakota</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Utah</option>
                                    <option>Vermont</option>
                                    <option>Virginia</option>
                                    <option>Washington</option>
                                    <option>West Virginia</option>
                                    <option>Wisconsin</option>
                                    <option>Wyoming</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label>* Zip/Postal</label>
                                <input type="text" id="zip" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label for="country">* Country</label>
                                <select class="form-control" id="country" required>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                    <option selected>USA</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="residencetime">
                                    <label class="custom-control-label" for="residencetime">Residence address for 3 or
                                        more years?</label>
                                </div>
                            </div>

                        </div>

                        <label>
                            <i>If your cell phone is also your primary phone, enter it in both fields below.</i>
                        </label>

                        <div class="row">

                            <div class="form-group col-lg-3 col-md-6">
                                <label>* Primary Phone</label>
                                <input type="text" id="primaryphone" class="form-control"
                                       data-toggle="input-mask" data-mask-format="(000) 000-0000"
                                       maxlength="14" required>
                                <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label>* Cell Phone</label>
                                <input type="text" id="cellphone" class="form-control"
                                       data-toggle="input-mask" data-mask-format="(000) 000-0000"
                                       maxlength="14" required>
                                <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label for="email">* Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label for="confirmemail">Confirm Email Address</label>
                                <input type="email" id="confirmemail" name="confirmemail" class="form-control"
                                       placeholder="Email">
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label for="contactmethod">Preferred method of contact</label>
                                <select class="form-control" id="contactmethod">
                                    <option selected disabled></option>
                                    <option>Email</option>
                                    <option>Mail</option>
                                    <option>Phone</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-3 col-md-6">
                                <label for="contacttime">Best time to contact you</label>
                                <select class="form-control" id="contacttime">
                                    <option selected>Any</option>
                                    <option>Morning</option>
                                    <option>Afternoon</option>
                                    <option>Evening</option>
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