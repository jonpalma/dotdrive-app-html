<form action="#" class="needs-validation" novalidate>

    <!--
    <div class="row">

        <div class="form-group col-md-6">
            <label>* Accident Date</label>
            <input type="text" class="form-control date" id="accidentdate" data-toggle="date-picker"
                   data-single-date-picker="true" required>
        </div>

        <div class="form-group col-md-6">
            <label>Accident Time</label>
            <div class="input-group">
                <input type="text" class="form-control" data-toggle="timepicker" id="accidenttime"
                       value="10:00:00">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label for="accidentdescription">* Accident Description</label>
            <textarea class="form-control" id="accidentdescription" rows="3" required></textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="articlesinvolved">Articles Involved</label>
            <textarea class="form-control" id="articlesinvolved" rows="3"></textarea>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Safeguard Provided</label>
            <input type="text" id="safeguardprovided" class="form-control">
        </div>


        <div class="form-group col-md-6">
            <label>Safeguard Used</label>
            <input type="text" id="safeguardused" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Description Code</label>
            <input type="text" id="descriptioncode" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="example-select">* Agent of Loss Group</label>
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

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label for="example-select">Agent of Loss Item</label>
            <select class="form-control" id="agentoflossitem">
                <option selected disabled></option>
                <option></option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="example-select">* Benefit State</label>
            <select class="form-control" id="benefitstate" required>
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
            <label>Accident Location</label>
            <input type="text" id="accidentlocation" class="form-control">
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
            <label>Address 1</label>
            <input type="text" id="address1" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Address 2</label>
            <input type="text" id="address2" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>City</label>
            <input type="text" id="city" class="form-control">
        </div>

        <div class="form-group col-md-6">
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

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Zip Code</label>
            <input type="text" id="zipcode" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Details Loss Location</label>
            <textarea class="form-control" id="detailslosslocation" rows="3"></textarea>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Time Employee Began Work</label>
            <div class="input-group">
                <input type="text" class="form-control" data-toggle="timepicker"
                       id="timeemployeebeganwork"
                       value="10:00:00">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                </div>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label>* Authority Contacted</label>
            <select class="form-control" id="authoritycontacted" required>
                <option selected disabled></option>
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>* Violation Issues</label>
            <select class="form-control" id="violationissues" required>
                <option selected disabled></option>
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label>* Injury on Insured Premises</label>
            <select class="form-control" id="injuryonisuredpremises" required>
                <option selected disabled></option>
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

    </div>

    <hr class="mb-4">

    -->

    <h4 class="page-title">Motor Vehicle Accident Register</h4>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Accident File Number</label>
            <input type="text" id="accidentfilenumber" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>* Date & Time of Accident</label>
            <input type="text" class="form-control date" id="dateandtimeofaccident" data-toggle="date-picker"
                   data-single-date-picker="true" required>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Location of Accident</label>
            <input type="text" id="locationofaccident" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Equipment Numbers of Company Vehicles Involved</label>
            <input type="text" id="equipmentnumbers" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Driver's Name and Terminal</label>
            <input type="text" id="drivernameandterminal" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Equipment Numbers of Company Vehicles Involved</label>
            <input type="text" id="equipmentnumbers" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Number of Injuries</label>
            <input type="text" id="numberofinjuries" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Number of Fatalities</label>
            <input type="text" id="numberoffatalities" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Property Damage (In Dollars)</label>
            <input type="text" id="propertydamage" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Hazardous Materials</label>
            <input type="text" id="hazardousmaterials" class="form-control">
        </div>

    </div>

    <hr class="mb-4">

    <h4 class="page-title">Report of Accident or Loss</h4>

    <div class="row">

        <div class="form-group col-md-4">
            <label>* Date of Accident</label>
            <input type="text" class="form-control date" id="dateofaccident" data-toggle="date-picker"
                   data-single-date-picker="true" required>
        </div>

        <div class="form-group col-md-4">
            <label>Time</label>
            <div class="input-group">
                <input type="text" class="form-control" data-toggle="timepicker" id="time"
                       value="10:00:00">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                </div>
            </div>
        </div>

        <div class="form-group col-md-4">
            <label>Day of Week</label>
            <input type="text" id="dayofweek" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-4">
            <label>Total Number of Vehicles Involved in Accident?</label>
            <input type="text" id="numberofvehicles" class="form-control">
        </div>

        <div class="form-group col-md-4">
            <label>Company</label>
            <input type="text" id="vehiclescompany" class="form-control">
        </div>

        <div class="form-group col-md-4">
            <label>Others</label>
            <input type="text" id="vehiclesothers" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Company Driver</label>
            <input type="text" id="companydriver" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Truck or Tractor No.</label>
            <input type="text" id="truckortractornumber" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Trailer No.</label>
            <input type="text" id="trailernumber" class="form-control">
        </div>

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="citedforviolation">
                <label class="custom-control-label" for="citedforviolation">Cited for Moving Violation?</label>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Phone No.</label>
            <input type="text" id="phonenumber" class="form-control"
                   data-toggle="input-mask" data-mask-format="(000) 000-0000"
                   maxlength="14">
            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
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

    </div>

    <hr class="mb-4">

    <label>Accident Withing City, Town or Village Limits</label>

    <div class="row">

        <div class="form-group col-md-4">
            <label>City/Town/Village</label>
            <input type="text" id="withinlimitscity" class="form-control">
        </div>

        <div class="form-group col-md-4">
            <label>County</label>
            <input type="text" id="withinlimitscounty" class="form-control">
        </div>

        <div class="form-group col-md-4">
            <label>State</label>
            <select class="form-control" id="withinlimitsstate">
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
            <label>Street</label>
            <input type="text" id="withinlimitsstreet" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Cross Street</label>
            <input type="text" id="withinlimitscrosstreet" class="form-control">
        </div>

    </div>

    <hr class="mb-4">

    <label>Accident Outside City, Town or Village Limits</label>

    <div class="row">

        <div class="form-group col-md-4">
            <label>Road Number and Road Name</label>
            <input type="text" id="outsidelimitsroad" class="form-control">
        </div>

        <div class="form-group col-md-4">
            <label>Town</label>
            <input type="text" id="outsidelimitstown" class="form-control">
        </div>

        <div class="form-group col-md-4">
            <label>County</label>
            <input type="text" id="outsidelimitscounty" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Name Intersection or State Distance and Direction from Nearest Community, Highway Junction,
                Crossroads, Milepost</label>
            <input type="text" id="outsidelimitintersection" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Total Number of Lanes (Both Directions)</label>
            <input type="text" id="outsidelimitstotalnumberoflanes" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="outsidelimitsmarkedlanes">
                <label class="custom-control-label" for="outsidelimitsmarkedlanes">Were Lanes Marked?</label>
            </div>
        </div>

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="outsidelimitslanesseparated">
                <label class="custom-control-label" for="outsidelimitslanesseparated">Were Opposing Lanes Separated by
                    Curb or Median?</label>
            </div>
        </div>

    </div>

    <hr class="mb-4">

    <label>Traffic Control at Scene</label>

    <div class="row">

        <div class="form-group mt-3 col-md-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="signallight">
                <label class="custom-control-label" for="signallight">Signal Light</label>
            </div>
        </div>

        <div class="form-group mt-3 col-md-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="stopsign">
                <label class="custom-control-label" for="stopsign">Stop Sign</label>
            </div>
        </div>

        <div class="form-group mt-3 col-md-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="policeofficer">
                <label class="custom-control-label" for="policeofficer">Police Officer</label>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group mt-3 col-md-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="warningsign">
                <label class="custom-control-label" for="warningsign">Warning Sign</label>
            </div>
        </div>

        <div class="form-group mt-3 col-md-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="rrlights">
                <label class="custom-control-label" for="rrlights">RR Lights/Gates</label>
            </div>
        </div>

        <div class="form-group mt-3 col-md-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="rrcrossbuck">
                <label class="custom-control-label" for="rrcrossbuck">RR Crossbuck</label>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group mt-3 col-md-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="workzone">
                <label class="custom-control-label" for="workzone">Work Zone</label>
            </div>
        </div>

        <div class="form-group mt-3 col-md-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="ohtercontrol">
                <label class="custom-control-label" for="ohtercontrol">Other Control</label>
            </div>
        </div>

        <div class="form-group mt-3 col-md-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="nocontrol">
                <label class="custom-control-label" for="nocontrol">No Control</label>
            </div>
        </div>

    </div>

    <hr class="mb-4">

    <label>Causes of Accident or Loss</label>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Weather Condition</label>
            <input type="text" id="weathercondition" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Condition of Road</label>
            <input type="text" id="conditionofroad" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-12">
            <label for="descriptionofaccident">Description of Accident</label>
            <textarea class="form-control" id="descriptionofaccident" rows="3"></textarea>
        </div>

    </div>

    <hr class="mb-4">

    <label>Driver of Other Vehicle</label>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Name</label>
            <input type="text" id="otherdrivername" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Make of Vehicle</label>
            <input type="text" id="otherdrivermakeofvehicle" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Address</label>
            <input type="text" id="otherdriveraddress" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Model</label>
            <input type="text" id="otherdrivermodel" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Operator's License No.</label>
            <input type="text" id="otherdriverlicense" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Registration</label>
            <input type="text" id="otherdriverregustration" class="form-control">
        </div>

    </div>

    <hr class="mb-4">

    <label>Casualities? (Indicate Number)</label>

    <div class="row">

        <div class="col-lg-5 col-4 offset-lg-2 offset-4">
            <label>Fatalities</label>
        </div>

        <div class="col-lg-5 col-4">
            <label>Injuries</label>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-lg-2 col-4">
            <label>Company Employee</label>
        </div>

        <div class="form-group col-lg-5 col-4">
            <input type="text" id="fatalities1" class="form-control">
        </div>

        <div class="form-group col-lg-5 col-4">
            <input type="text" id="injuries1" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-lg-2 col-4">
            <label>Occupants Other Vehicles</label>
        </div>

        <div class="form-group col-lg-5 col-4">
            <input type="text" id="fatalities2" class="form-control">
        </div>

        <div class="form-group col-lg-5 col-4">
            <input type="text" id="injuries2" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-lg-2 col-4">
            <label>Pedestrians</label>
        </div>

        <div class="form-group col-lg-5 col-4">
            <input type="text" id="fatalities3" class="form-control">
        </div>

        <div class="form-group col-lg-5 col-4">
            <input type="text" id="injuries3" class="form-control">
        </div>

    </div>

    <hr class="mb-4">

    <h4 class="page-title">Filled by Company Driver</h4>

    <div class="row">

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="calledpolice">
                <label class="custom-control-label" for="calledpolice">Have You Called the Police?</label>
            </div>
        </div>

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="calledmedicalassistance">
                <label class="custom-control-label" for="calledmedicalassistance">Have You Called for Medical
                    Assistance?</label>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Where Have the Injured Persons Been Taken</label>
            <input type="text" id="wheretheinjuredwastaken" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>City/State</label>
            <input type="text" id="citystate" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="warningdevices">
                <label class="custom-control-label" for="warningdevices">Have You Properly Set Emergency Warning
                    Devices?</label>
            </div>
        </div>

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="securedwitnesses">
                <label class="custom-control-label" for="securedwitnesses">Have You Secured Witnesses - Names -
                    Addresses?</label>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="fireorexplosion">
                <label class="custom-control-label" for="fireorexplosion">Did the Accident Involve Fire or
                    Explosion?</label>
            </div>
        </div>

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="proceedsafely">
                <label class="custom-control-label" for="proceedsafely">Can Your Unit Proceed Safely Under Own
                    Power?</label>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="towedvehicles">
                <label class="custom-control-label" for="towedvehicles">Did the Accident Damage Cause Any Vehicle to be
                    Towed?</label>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label>Remarks</label>
            <input type="text" id="remarks" class="form-control">
        </div>

    </div>

    <hr class="mb-4">

    <h4 class="page-title">Hazardous Materials</h4>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Was Unit Transporting Hazardous Materials?</label>
            <input type="text" id="transportinghazardousmaterials" class="form-control">
        </div>

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="hazardoussubstances">
                <label class="custom-control-label" for="hazardoussubstances">Hazardous Substances</label>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="hazardouswaste">
                <label class="custom-control-label" for="hazardouswaste">Hazardous Waste</label>
            </div>
        </div>

        <div class="form-group mt-3 col-md-6">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="marinepollutants">
                <label class="custom-control-label" for="marinepollutants">Marine Pollutants</label>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Give Name(s) and Class(es) of Hazardous Materials</label>
            <input type="text" id="hazardousmaterialsnameclass" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Was Unit Transporting Oil Subject to Oil Spill Response Plan?</label>
            <input type="text" id="unittransportingoil" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Where there any leaks or spills of the above materials?</label>
            <input type="text" id="leaksorspills" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Is There Any Fuel Leakage from Your Unit?</label>
            <input type="text" id="fuelleakage" class="form-control">
        </div>

    </div>

    <hr class="mb-4">

    <div class="row">

        <div class="form-group col-md-6">
            <label>Person Notified</label>
            <input type="text" id="personnotified" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Time</label>
            <div class="input-group">
                <input type="text" class="form-control" data-toggle="timepicker" id="notifiedtime"
                       value="10:00:00">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>* Date</label>
            <input type="text" class="form-control date" id="notifieddate" data-toggle="date-picker"
                   data-single-date-picker="true" required>
        </div>

    </div>

    <!--
    <hr class="mb-4">

    <h4 class="page-title">Notes on instructions to Company Employee</h4>

    <div class="row">

        <div class="form-group col-md-12">
            <label for="notestoemployee">Notes</label>
            <textarea class="form-control" id="notestoemployee" rows="3"></textarea>
        </div>

    </div>
    -->

    <div class="row">

        <div class="form-group col-12">
            <button type="submit" class="btn btn-block btn-primary">Save</button>
        </div>

    </div>

</form>

<?php include('modules/views/fileUpload.php') ?>
