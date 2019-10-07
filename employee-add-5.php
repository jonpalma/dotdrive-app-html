<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#licenses-modal"><i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Licence number</th>
            <th>Type</th>
            <th>Expiration day</th>
            <th>State used</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>LI121212</td>
            <td>Driver</td>
            <td>01/11/2018</td>
            <td><i class="mdi mdi-circle text-success"></i> Active</td>
            <td>
                <div class="dropdown">
                    <a href="#" class="" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="mdi mdi-dots-vertical-circle"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button"><i class="mdi mdi-square-edit-outline"></i> Edit
                        </button>
                        <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="modal fade" id="licenses-modal" tabindex="-1" role="dialog"
     aria-labelledby="licenses-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="licenses-modal-label">Licenses</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Expiration Date</label>
                            <input type="text" class="form-control date" id="expirationdate"
                                   data-toggle="date-picker" data-single-date-picker="true"
                                   required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="type">* Type</label>
                            <select class="form-control" id="type" required>
                                <option selected disabled></option>
                                <option>CDL</option>
                                <option>Class A</option>
                                <option>Class AM</option>
                                <option>Class B</option>
                                <option>Class C</option>
                                <option>Class C Non-Commercial</option>
                                <option>Class D</option>
                                <option>Class E</option>
                                <option>Class F</option>
                                <option>ID</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>State Issued</label>
                            <select class="form-control" id="stateissued">
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

                        <div class="form-group col-md-6">
                            <label>* License Number</label>
                            <input type="text" id="licensenumber" class="form-control" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Endorsement(s)</label>
                            <select class="form-control" id="endorsement" multiple data-toggle="select2">
                                <option value="">None</option>
                                <option value="H">H Authorizes the transportation of hazardous material (CDL only)</option>
                                <option value="N">N Authorizes the operation of a tank vehicle (CDL or CLP only)</option>
                                <option value="P">P Authorizes the operation of a vehicle transporting passengers (CDL or CLP only)</option>
                                <option value="S">S Authorizes the operation of a school bus (CDL or CLP only)</option>
                                <option value="T">T Authorizes towing two (double) or three (triple) trailers over a specified weight</option>
                                <option value="X">X Authorizes the operation of a combination of hazardous material and tank vehicle (CDL only)</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Endorsement(s) Restriction</label>
                            <select class="form-control" id="endorsementrestriction" multiple data-toggle="select2">
                                <option value="">None</option>
                                <option value="A">A With corrective lenses</option>
                                <option value="B">B A licensed driver 21 years of age or older must be in the front seat</option>
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
                                <option value="Q">Q A licensed driver 21 years of age or older (LOFS) must be in the front seat (vehicle above a Class B)</option>
                                <option value="R">R A licensed driver 21 years of age or older (LOFS) must be in the front seat (vehicle above a Class C)</option>
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
                                <option value="P5">P5 To/from work/school or a licensed driver 21 years of age or older (LOFS) must be in the front seat</option>
                                <option value="P6">P6 To/from work or a licensed driver 21 years of age or older (LOFS) must be in the front seat</option>
                                <option value="P7">P7 To/from school or a licensed driver 21 years of age or older (LOFS) must be in the front seat</option>
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
                                <option value="P18">P18 If CMV, only transporting personal property (interstate)</option>
                                <option value="P19">P19 If CMV, transporting corpse/sick/injure (interstate)</option>
                                <option value="P20">P20 If CMV, privately transporting passengers (interstate)</option>
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

                        <div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="suspended">
                                <label class="custom-control-label" for="suspended">Suspended</label>
                            </div>
                        </div>

                        <!--<div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="alerton" checked>
                                <label class="custom-control-label" for="alerton">Alert On</label>
                            </div>
                        </div>-->

                    </div>

                    <div class="row">

                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>

                    </div>

                </form>

                <?php include('modules/views/fileUpload.php') ?>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

