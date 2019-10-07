<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#illness-details-modal"><i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Injury/Illness Date</th>
            <th>Injury/Illness Name</th>
            <th>Injury/Illness ID</th>
            <th>What Employee Was Doing</th>
            <th>What Happened</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>01/11/2018</td>
            <td>Illness</td>
            <td>Illness ID 1</td>
            <td>Driving</td>
            <td>Crash</td>
        </tr>
        </tbody>
    </table>
</div>
<div class="modal fade" id="illness-details-modal" tabindex="-1" role="dialog"
     aria-labelledby="illness-details-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="illness-details-modal-label">Injury/Illness Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Injury/Illness Date</label>
                            <input type="text" class="form-control date" id="injurydate" data-toggle="date-picker"
                                   data-single-date-picker="true" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Time Employee Began Work</label>
                            <div class="input-group">
                                <input type="text" class="form-control" data-toggle="timepicker"
                                       id="timeemployeebeganwork"
                                       value="10:00:00" required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="undeterminedtime">
                                <label class="custom-control-label" for="undeterminedtime">Injury/Illness Time cannot be
                                    determined</label>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Injury or Illness Time</label>
                            <div class="input-group">
                                <input type="text" class="form-control" data-toggle="timepicker" id="injurytime"
                                       value="10:00:00" required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Injury/Illness Reported Date</label>
                            <input type="text" class="form-control date" id="injuryreporteddate"
                                   data-toggle="date-picker"
                                   data-single-date-picker="true" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Injury/Illness Name</label>
                            <input type="text" id="injuryname" class="form-control" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Injury/Illness ID</label>
                            <input type="text" id="injuryid" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Employer's Premises</label>
                            <select class="form-control" id="employerpremises" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Location Name</label>
                            <input type="text" id="locationnname" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Address 1</label>
                            <input type="text" id="address1" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Address 2</label>
                            <input type="text" id="address2" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>City</label>
                            <input type="text" id="city" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>State</label>
                            <select class="form-control" id="state">
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
                            <label>Zip Code</label>
                            <input type="text" id="zipcode" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Where the event occurred?</label>
                            <textarea class="form-control" id="eventlocation" rows="3" required></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* What was the employee doing just before the incident occurred?</label>
                            <textarea class="form-control" id="whatemployeeactions" rows="3" required></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* What happened?</label>
                            <textarea class="form-control" id="whathappened" rows="3" required></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* What was the injury of illness?</label>
                            <textarea class="form-control" id="whatinury" rows="3" required></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>What object or substance directly harmed the employee?</label>
                            <textarea class="form-control" id="whatobjectsubstance" rows="3"></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group mt-3 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Choose injury and/or illness</h5>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="amputation">
                                        <label class="custom-control-label" for="amputation">Amputation</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="hearingloss">
                                        <label class="custom-control-label" for="hearingloss">Hearing Loss</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="injury">
                                        <label class="custom-control-label" for="injury">Injury</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="lossofeye">
                                        <label class="custom-control-label" for="lossofeye">Loss of Eye</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="poisoning">
                                        <label class="custom-control-label" for="poisoning">Poisoning</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="respiratorycondition">
                                        <label class="custom-control-label" for="respiratorycondition">Respiratory
                                            Condition</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="skindisorder">
                                        <label class="custom-control-label" for="skindisorder">Skin Disorder</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="allother">
                                        <label class="custom-control-label" for="allother">All other illneses</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-3 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Body Parts Affected</h5>
                                </div>
                                <div class="card-body" style="max-height: 216px;overflow: auto;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="abdomengroin">
                                        <label class="custom-control-label" for="abdomengroin">61: Abdomen Including
                                            Groin</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ankleleft">
                                        <label class="custom-control-label" for="ankleleft">55L: Ankle - Left</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ankleright">
                                        <label class="custom-control-label" for="ankleright">55R: Ankle - Right</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="buttocks">
                                        <label class="custom-control-label" for="buttocks">62: Buttocks</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="chest">
                                        <label class="custom-control-label" for="chest">44: Chest (Including Ribs,
                                            Sternum & Soft
                                            Tissue)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="earleft">
                                        <label class="custom-control-label" for="earleft">13L: Ear - Left</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="earright">
                                        <label class="custom-control-label" for="earright">13R: Ear - Right</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="elbowleft">
                                        <label class="custom-control-label" for="elbowleft">32L: Elbow - Left</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="elbowleft">
                                        <label class="custom-control-label" for="elbowleftdominant">32LD: Elbow - Left
                                            Dominant</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="elbowright">
                                        <label class="custom-control-label" for="elbowright">32R: Elbow - Right</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="elbowright">
                                        <label class="custom-control-label" for="elbowrightdominant">32RD: Elbow - Right
                                            Dominant</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Medical Treatment Beyond First Aid</label>
                            <select class="form-control" id="medicaltreatment" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Loss of Consciousness</label>
                            <select class="form-control" id="lossofconsciousness" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Injury/Illness Resulted in Death</label>
                            <select class="form-control" id="resultedindeath" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Date of Death</label>
                            <input type="text" class="form-control date" id="dateofdeath" data-toggle="date-picker"
                                   data-single-date-picker="true" disabled>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Agent of Loss Group</label>
                            <select class="form-control" id="agentoflossgroup" required>
                                <option selected disabled></option>
                                <option>Animal, Plant or Human Agents</option>
                                <option>Chemicals of chemical products</option>
                                <option>Containers</option>
                                <option>Environmental Agents</option>
                                <option>Fixed Machinery or Utilities</option>
                                <option>Other or Unspecified Agents</option>
                                <option>Structures, surfaces or furnishings</option>
                                <option>Tools or equipment</option>
                                <option>Vehicles or Mobile Equipment</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Injury Type</label>
                            <select class="form-control" id="injurytype" required>
                                <option selected disabled></option>
                                <option>Abrasion (Scrape)</option>
                                <option>All Other Injuries, Not Otherwise Classified</option>
                                <option>All Other Occupational Illnesses, Not Otherwise Classified</option>
                                <option>Amputation</option>
                                <option>Chemical Burn</option>
                                <option>Chest Pain</option>
                                <option>Contusion (Bruise)</option>
                                <option>Dermatitis/Skin Irritation</option>
                                <option>Dislocation</option>
                                <option>Electric Shock</option>
                                <option>Exposure (Chemical, Radiation, Asbestos, etc)</option>
                                <option>Foreign Body</option>
                                <option>Fracture</option>
                                <option>Freezing</option>
                                <option>Hearing Impairment</option>
                                <option>Heat Stress</option>
                                <option>Inflammation</option>
                                <option>Laceration</option>
                                <option>Loss of Consciousness</option>
                                <option>No Physical Injury</option>
                                <option>Puncture</option>
                                <option>Repetitive Strain Injury</option>
                                <option>Respiratory Irritation or Impairment</option>
                                <option>Sprain</option>
                                <option>Strain</option>
                                <option>Thermal Burn</option>
                                <option>Vision Impairment</option>
                                <option>Loss of Eye</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Injury Cause</label>
                            <select class="form-control" id="injurycause" required>
                                <option selected disabled></option>
                                <option>Absorption, Ingestion, or Inhalation</option>
                                <option>Caught In or Between</option>
                                <option>Contact With</option>
                                <option>Fall or Slip – From Different Level</option>
                                <option>Fall or Slip – Same Level</option>
                                <option>Heat or Cold Exposure</option>
                                <option>Miscellaneous Causes Not Otherwise Classified</option>
                                <option>Motor Vehicle Collision</option>
                                <option>Rubbed or Abraided By</option>
                                <option>Slipped, Did Not Fall</option>
                                <option>Strain or Injury By – Holding or Carrying</option>
                                <option>Strain or Injury By – Jumping</option>
                                <option>Strain or Injury By – Lifting</option>
                                <option>Strain or Injury By – Pushing or Pulling</option>
                                <option>Strain or Injury By – Reaching</option>
                                <option>Strain or Injury By – Repetitive Motions</option>
                                <option>Strain or Injury By - Twisting</option>
                                <option>Strain or Injury By – Using Tool or Machinery</option>
                                <option>Strain or Injury By – Wielding or Throwing</option>
                                <option>Striking Against or Stepping On</option>
                                <option>Struck or Injured by Falling Object</option>
                                <option>Struck or Injured by Object</option>
                            </select>
                        </div>

                    </div>

                    <hr class="mb-4">

                    <h4 class="header-title mb-3">Treatment Details</h4>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Did Employee Seek Medical Care</label>
                            <select class="form-control" id="seekmedicalcare" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Emergency Room Visit</label>
                            <select class="form-control" id="emergencyroomvisit" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Overnight Stay</label>
                            <select class="form-control" id="overnightstay" required>
                                <option selected disabled></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div id="treatment-accordion-opt" class="custom-accordion mb-4">

                        <div class="card mb-0">
                            <div class="card-header" id="headingOneTreatment">
                                <h5 class="m-0">
                                    <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse"
                                       href="#collapseOneTreatment" aria-expanded="false"
                                       aria-controls="collapseOneTreatment">
                                        Add more information <span class="float-right"><i
                                                    class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOneTreatment" class="collapse" aria-labelledby="headingOneTreatment"
                                 data-parent="#treatment-accordion-opt" style="">
                                <div class="card-body">

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>First Treatment Date</label>
                                            <input type="text" class="form-control date" id="firsttreatmentdate"
                                                   data-toggle="date-picker"
                                                   data-single-date-picker="true">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Last Treatment Date</label>
                                            <input type="text" class="form-control date" id="lasttreatmentdate"
                                                   data-toggle="date-picker"
                                                   data-single-date-picker="true">
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Hospital/Clinic Name</label>
                                            <input type="text" id="hospitalname" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Physical Name</label>
                                            <input type="text" id="physicalname" class="form-control">
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Address 1</label>
                                            <input type="text" id="treatmentaddress1" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Address 2</label>
                                            <input type="text" id="treatmentaddress2" class="form-control">
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>City</label>
                                            <input type="text" id="treatmentcity" class="form-control">

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>State</label>
                                            <select class="form-control" id="treatmentstate">
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
                                            <label>Zip Code</label>
                                            <input type="text" id="treatmentzipcode" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" data-toggle="input-mask"
                                                   data-mask-format="(000) 000-0000" maxlength="14" id="treatmentphone">
                                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div> <!-- end card-->

                    </div>

                    <hr class="mb-4">

                    <div id="witness-accordion-opt" class="custom-accordion mb-4">

                        <div class="card mb-0">
                            <div class="card-header" id="headingOneWitness">
                                <h5 class="m-0">
                                    <a class="text-dark d-block pt-2 pb-2 collapsed" data-toggle="collapse"
                                       href="#collapseOneWitness" aria-expanded="false"
                                       aria-controls="collapseOneWitness">
                                        Witness Details <span class="float-right"><i
                                                    class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOneWitness" class="collapse" aria-labelledby="headingOneWitness"
                                 data-parent="#witness-accordion-opt" style="">
                                <div class="card-body">

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Injury Witness</label>
                                            <select class="form-control" id="injurywitness">
                                                <option selected disabled></option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Witness Name</label>
                                            <input type="text" id="witnessname" class="form-control">
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Address 1</label>
                                            <input type="text" id="witnessaddress1" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Address 2</label>
                                            <input type="text" id="witnessaddress2" class="form-control">
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>City</label>
                                            <input type="text" id="witnesscity" class="form-control">

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>State</label>
                                            <select class="form-control" id="witnessstate">
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
                                            <label>Zip Code</label>
                                            <input type="text" id="witnesszipcode" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" data-toggle="input-mask"
                                                   data-mask-format="(000) 000-0000" maxlength="14" id="witnessphone">
                                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div> <!-- end card-->

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
