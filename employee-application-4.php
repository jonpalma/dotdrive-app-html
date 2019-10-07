<?php include('header-employee.php'); ?>


    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">

                    <div class="progress progress-lg mb-4 mt-2">
                        <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 21%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                    </div>

                    <!-- start body content -->
                    <form action="employee-application-5.php" class="needs-validation" novalidate>

                        <div class="row">

                            <h4>License information</h4>

                        </div>

                        <hr class="mb-4">

                        <div class="row">

                            <div class="form-group col-lg-4 col-md-4">
                                <label>* License Number</label>
                                <input type="text" id="street1" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-4 col-md-4">
                                <label>* License State / Providence</label>
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


                            <div class="form-group col-lg-4 col-md-4">
                                <label>* License Type</label>
                                <select class="form-control" id="suffix" required>
                                    <option selected disabled></option>
                                    <option>NON-CDL</option>
                                    <option>CDL</option>
                                </select>
                            </div>

                            <!--<div class="form-group col-lg-4 col-md-4 d-none">
                                <label>License Class</label>
                                <select class="form-control" id="licenseclass" required disabled>
                                    <option selected disabled></option>
                                    <option>Class A</option>
                                    <option>Class B</option>
                                    <option>Class C</option>
                                </select>
                            </div>-->

                            <div class="form-group col-lg-4 col-md-4">
                                <label>* Class Type</label>
                                <select class="form-control" id="suffix" required>
                                    <option selected disabled></option>
                                    <option>Class A</option>
                                    <option>Class B</option>
                                    <option>Class C</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-4 col-md-4">
                                <label>* License Expiration Date</label>
                                <input type="text" class="form-control date" id="" data-toggle="date-picker"
                                       data-single-date-picker="true" required>
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label>* Is this your current driver license? </label>
                                <select class="form-control" id="suffix" required>
                                    <option selected disabled></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Endorsement(s)</label>
                                <select class="form-control" id="endorsement" multiple data-toggle="select2">
                                    <option value="">None</option>
                                    <option value="H">H Authorizes the transportation of hazardous material (CDL only)
                                    </option>
                                    <option value="N">N Authorizes the operation of a tank vehicle (CDL or CLP only)
                                    </option>
                                    <option value="P">P Authorizes the operation of a vehicle transporting passengers
                                        (CDL or CLP only)
                                    </option>
                                    <option value="S">S Authorizes the operation of a school bus (CDL or CLP only)
                                    </option>
                                    <option value="T">T Authorizes towing two (double) or three (triple) trailers over a
                                        specified weight
                                    </option>
                                    <option value="X">X Authorizes the operation of a combination of hazardous material
                                        and tank vehicle (CDL only)
                                    </option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Endorsement(s) Restriction</label>
                                <select class="form-control" id="endorsementrestriction" multiple data-toggle="select2">
                                    <option value="">None</option>
                                    <option value="A">A With corrective lenses</option>
                                    <option value="B">B A licensed driver 21 years of age or older must be in the front
                                        seat
                                    </option>
                                    <option value="C">C Daytime driving only</option>
                                    <option value="D">D Speed not to exceed 45 mph</option>
                                    <option value="E">E No manual transmission equipped CMV</option>
                                    <option value="F">F Must hold valid learner license to MM/DD/YY</option>
                                    <option value="G">G TRC 545.424 applies until MM/DD/YY</option>
                                    <option value="H">H Vehicle not to exceed 26,000 lbs. GVWR</option>
                                    <option value="I">I Motorcycle not to exceed 250cc</option>
                                    <option value="J">J Licensed motorcycle operator 21 or over in sight</option>
                                    <option value="K">K Intrastate only</option>
                                    <option value="L">L No air brake equipped CMV</option>
                                    <option value="M">M No Class A passenger vehicle</option>
                                    <option value="N">N No Class A and B passenger vehicle</option>
                                    <option value="O">O No tractor-trailer CMV</option>
                                    <option value="P">P Stated on license</option>
                                    <option value="Q">Q A licensed driver 21 years of age or older (LOFS) must be in the
                                        front seat (vehicle above a Class B)
                                    </option>
                                    <option value="R">R A licensed driver 21 years of age or older (LOFS) must be in the
                                        front seat (vehicle above a Class C)
                                    </option>
                                    <option value="S">S Outside rearview mirror or hearing aid</option>
                                    <option value="T">T Automatic transmission</option>
                                    <option value="U">U Applicable prosthetic devices</option>
                                    <option value="V">V Medical variance documents required</option>
                                    <option value="W">W Power steering</option>
                                    <option value="X">X No cargo in CMV tank vehicle</option>
                                    <option value="Y">Y Valid Texas vision or limb waiver required</option>
                                    <option value="Z">Z No full air brake equipped CMV</option>
                                    <option value="P1">P1 For Class M TRC 545.424 until MM/DD/YY</option>
                                    <option value="P2">P2 To/from work/school</option>
                                    <option value="P3">P3 To/from work</option>
                                    <option value="P4">P4 To/from school</option>
                                    <option value="P5">P5 To/from work/school or a licensed driver 21 years of age or
                                        older (LOFS) must be in the front seat
                                    </option>
                                    <option value="P6">P6 To/from work or a licensed driver 21 years of age or older
                                        (LOFS) must be in the front seat
                                    </option>
                                    <option value="P7">P7 To/from school or a licensed driver 21 years of age or older
                                        (LOFS) must be in the front seat
                                    </option>
                                    <option value="P8">P8 With telescopic lens</option>
                                    <option value="P9">P9 LOFS 21 or over, bus only</option>
                                    <option value="P10">P10 LOFS 21 or over, school bus only</option>
                                    <option value="P11">P11 Bus not to exceed 26,000 GVWR</option>
                                    <option value="P12">P12 Passenger CMVs restricted to Class C only</option>
                                    <option value="P13">P13 LOFS 21 or over in vehicle equip with air brake</option>
                                    <option value="P14">P14 Operation Class B exempt vehicle authorized</option>
                                    <option value="P15">P15 Operation Class A exempt vehicle authorized</option>
                                    <option value="P16">P16 If CMV, school buses (interstate)</option>
                                    <option value="P17">P17 If CMV, government vehicles (interstate)</option>
                                    <option value="P18">P18 If CMV, only transporting personal property (interstate)
                                    </option>
                                    <option value="P19">P19 If CMV, transporting corpse/sick/injure (interstate)
                                    </option>
                                    <option value="P20">P20 If CMV, privately transporting passengers (interstate)
                                    </option>
                                    <option value="P21">P21 If CMV, fire/rescue (interstate)</option>
                                    <option value="P22">P22 If CMV, intra-city zone drivers (interstate)</option>
                                    <option value="P23">P23 If CMV, custom harvesting (interstate)</option>
                                    <option value="P24">P24 If CMV, transporting bees/hives (interstate)</option>
                                    <option value="P25">P25 If CMV, use in oil/water well service/drill</option>
                                    <option value="P26">P26 If CMV, for operation of mobile crane</option>
                                    <option value="P27">P27 HME Expiration Date MM/DD/YY</option>
                                    <option value="P28">P28 FRSI CDL valid MM/DD/YY to MM/DD/YY</option>
                                    <option value="P29">P29 FRSI CDL MM/DD/YY–MM/DD/YY or exempt B vehicles</option>
                                    <option value="P30">P30 FRSI CDL MM/DD/YY–MM/DD/YY or exempt A vehicles</option>
                                    <option value="P31">P31 Class C only; no taxi/bus/emergency vehicle</option>
                                    <option value="P32">P32 Other</option>
                                    <option value="P33">P33 No passengers in CMV bus</option>
                                    <option value="P34">P34 No express or highway driving</option>
                                    <option value="P35">P35 Restricted to operation of three–wheeled MC</option>
                                    <option value="P36">P36 Moped</option>
                                    <option value="P37">P37 Occ/Essent need DL-no CMV–see court order</option>
                                    <option value="P38">P38 Applicable vehicle devices</option>
                                    <option value="P39">P39 Ignition Interlock required</option>
                                    <option value="P40">P40 Vehicle not to exceed Class C</option>
                                </select>
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