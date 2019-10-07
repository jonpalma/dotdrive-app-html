<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#substance-testing-modal"><i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Reason for Test</th>
            <th>Collection Date</th>
            <th>Lab Name</th>
            <th>MRO Name</th>
            <th>Verification Date</th>
            <th>Status</th>
            <th>Substance</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>Drug test</td>
            <td>01/11/2018</td>
            <td>Lab One</td>
            <td>ORagas</td>
            <td>01/11/2018</td>
            <td><i class="mdi mdi-circle text-success"></i> Complete</td>
            <td>LLD</td>
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
<div class="modal fade" id="substance-testing-modal" tabindex="-1" role="dialog"
     aria-labelledby="substance-testing-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="substance-testing-modal-label">Substance Testing</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Collection Date</label>
                            <input type="text" class="form-control date" id="collectiondate"
                                   data-toggle="date-picker" data-single-date-picker="true">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Collection Time</label>
                            <div class="input-group">
                                <input type="text" class="form-control" data-toggle="timepicker" id="collectiontime"
                                       value="10:00:00">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Lab Name</label>
                            <input type="text" id="labname" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Lab Received Date</label>
                            <input type="text" class="form-control date" id="labreceiveddate"
                                   data-toggle="date-picker" data-single-date-picker="true">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Lab Received Time</label>
                            <div class="input-group">
                                <input type="text" class="form-control" data-toggle="timepicker" id="labreceivedtime"
                                       value="10:00:00">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Reason for Test</label>
                            <select class="form-control" id="reasonfortest">
                                <option selected disabled></option>
                                <option>All</option>
                                <option>Follow Up</option>
                                <option>Follow-up Tests</option>
                                <option>Non-DOT</option>
                                <option>Not Specified</option>
                                <option>Other</option>
                                <option>Periodic Medical</option>
                                <option>Post Accident</option>
                                <option>Pre-employment</option>
                                <option>Promotion</option>
                                <option>Random</option>
                                <option>Random Q1</option>
                                <option>Random Q2</option>
                                <option>Random Q3</option>
                                <option>Random Q4</option>
                                <option>Reasonable Suspicion</option>
                                <option>Return to Duty</option>
                                <option>Transfer</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>MRO Name</label>
                            <input type="text" id="mroname" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>MRO Address</label>
                            <input type="text" id="mroaddress" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>MRO City</label>
                            <input type="text" id="mrocity" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>MRO State</label>
                            <select class="form-control select2" id="mrostate" data-toggle="select2">
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

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>MRO Phone</label>
                            <input type="text" id="mrophone" class="form-control"
                                   data-toggle="input-mask" data-mask-format="(000) 000-0000"
                                   maxlength="14">
                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Verification Date</label>
                            <input type="text" class="form-control date" id="verificationdate"
                                   data-toggle="date-picker" data-single-date-picker="true">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Verification Time</label>
                            <div class="input-group">
                                <input type="text" class="form-control" data-toggle="timepicker" id="verificationtime"
                                       value="10:00:00">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Specimen Type</label>
                            <select class="form-control" id="specimentype">
                                <option selected disabled></option>
                                <option>Alcohol</option>
                                <option>Blood</option>
                                <option>Breath</option>
                                <option>Drug</option>
                                <option>Drug &amp; Alcohol</option>
                                <option>Hair</option>
                                <option>Oral Fluid</option>
                                <option>Other</option>
                                <option>Urine</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Specimen Result</label>
                            <select class="form-control" id="specimenresult">
                                <option selected disabled></option>
                                <option>Negative</option>
                                <option>Positive</option>
                                <option>Canceled</option>
                                <option>Adulterated</option>
                                <option>Positive UTCD</option>
                                <option>Alcohol Only Neg</option>
                                <option>Alcohol Only Pos</option>
                                <option>Refusal to Test</option>
                                <option>Substituted</option>
                                <option>Policy Violation</option>
                                <option>Canceled no CFF</option>
                                <option>No Show</option>
                                <option>Quant Only</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Specimen Status</label>
                            <select class="form-control" id="specimenstatus">
                                <option selected disabled></option>
                                <option>Sent to Lab</option>
                                <option>Received at Lab</option>
                                <option>In MRO Review</option>
                                <option>Pending CCF</option>
                                <option>Expired</option>
                                <option>Scheduled</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Regulation</label>
                            <select class="form-control" id="regulation">
                                <option selected disabled></option>
                                <option>DOT</option>
                                <option>Non DOT</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Regulation Type</label>
                            <select class="form-control" id="regulationtype">
                                <option selected disabled></option>
                                <option>FAA</option>
                                <option>FHWA</option>
                                <option>FMCSA</option>
                                <option>FRA</option>
                                <option>FTA</option>
                                <option>RSPA</option>
                                <option>USCG</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Substance</label>
                            <select class="form-control" id="substance" multiple data-toggle="select2">
                                <option>6-Monoacetylmorphine</option>
                                <option>Acetylmorphine</option>
                                <option>Adulteration Tests(CLASS)</option>
                                <option>Alcohol(CLASS)</option>
                                <option>Alprazolam</option>
                                <option>Amitriptyline(CLASS)</option>
                                <option>Amobarbital</option>
                                <option>Amphetamine</option>
                                <option>Amphetamines(CLASS)</option>
                                <option>Anabolic Steroids(CLASS)</option>
                                <option>Barbiturates(CLASS)</option>
                                <option>Benzodiazepines(CLASS)</option>
                                <option>Buprenorphine(CLASS)</option>
                                <option>Butabarbital</option>
                                <option>Butalbital</option>
                                <option>Butorphanol(CLASS)</option>
                                <option>Chlordiazepoxide</option>
                                <option>Chromate</option>
                                <option>Clonazepam</option>
                                <option>Clorazepate</option>
                                <option>Cocaine(CLASS)</option>
                                <option>Codeine</option>
                                <option>Creatinine</option>
                                <option>D Methamphetamine</option>
                                <option>D-Amphetamine</option>
                                <option>D/L Methamphetamine</option>
                                <option>Diazepam</option>
                                <option>Diethylpropion(CLASS)</option>
                                <option>Dihydrocodeine(CLASS)</option>
                                <option>Ecstasy(CLASS)</option>
                                <option>eCup Control Lines(CLASS)</option>
                                <option>Estazolam</option>
                                <option>Ethanol Blood mg/dl(CLASS)</option>
                                <option>Ethanol Breath(CLASS)</option>
                                <option>Ethanol QED(CLASS)</option>
                                <option>Ethanol Urine(CLASS)</option>
                                <option>Fentanyl(CLASS)</option>
                                <option>Flunitrazepam</option>
                                <option>Fluoxetine(CLASS)</option>
                                <option>Flurazepam</option>
                                <option>Glucose</option>
                                <option>Glutaraldehyde</option>
                                <option>Glutethimide(CLASS)</option>
                                <option>Halazepam</option>
                                <option>Hydrocodone</option>
                                <option>Hydromorphone</option>
                                <option>Imipramine(CLASS)</option>
                                <option>Ketamine(CLASS)</option>
                                <option>L Methamphetamine</option>
                                <option>L-Amphetamine</option>
                                <option>Left Control Line</option>
                                <option>Lorazepam</option>
                                <option>Lysergic Acid (LSD)(CLASS)</option>
                                <option>Marijuana(CLASS)</option>
                                <option>Masking Agents</option>
                                <option>Meperidine</option>
                                <option>Meprobamates(CLASS)</option>
                                <option>Methadone (CLASS)</option>
                                <option>Methamphetamine</option>
                                <option>Methaqualone(CLASS)</option>
                                <option>Methylphenidate(CLASS)</option>
                                <option>Midazolam</option>
                                <option>Morphine</option>
                                <option>Nalbuphine</option>
                                <option>Naltrexone(CLASS)</option>
                                <option>Nicotine(CLASS)</option>
                                <option>Nitrazepam</option>
                                <option>Nitrite</option>
                                <option>Nordiazepam</option>
                                <option>Norfluoxetine</option>
                                <option>Norprop</option>
                                <option>Nortriptyline(CLASS)</option>
                                <option>Opiates(CLASS)</option>
                                <option>Other drugs</option>
                                <option>Oxazepam</option>
                                <option>Oxycodone</option>
                                <option>Oxycodoneoxymorphone</option>
                                <option>Oxymorphone</option>
                                <option>PCP(CLASS)</option>
                                <option>Pentazocine</option>
                                <option>Pentobarbital</option>
                                <option>pH</option>
                                <option>Phendimetrazine(CLASS)</option>
                                <option>Phenmetrazine(CLASS)</option>
                                <option>Phenobarbital</option>
                                <option>Phenothiazines(CLASS)</option>
                                <option>Phentermine(CLASS)</option>
                                <option>Phenytoin(CLASS)</option>
                                <option>Prazepam</option>
                                <option>Propoxyphene(CLASS)</option>
                                <option>Pyridine</option>
                                <option>Right Control Line</option>
                                <option>Secobarbital</option>
                                <option>Sertraline(CLASS)</option>
                                <option>Specific Gravity</option>
                                <option>Substitution Retest</option>
                                <option>T/E Ratio</option>
                                <option>Temazepam</option>
                                <option>Tramadol(CLASS)</option>
                                <option>Triazolam</option>
                                <option>Urine Color</option>
                                <option>Urine temperature</option>
                                <option>Zolpidem(CLASS)</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="comments">Comments</label>
                            <textarea class="form-control" id="comments" rows="3"></textarea>
                        </div>

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
