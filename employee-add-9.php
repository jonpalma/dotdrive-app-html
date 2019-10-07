<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#roadside-inspection-modal"><i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Inspection date</th>
            <th>Inspection state</th>
            <th>Officer name</th>
            <th>Road</th>
            <th>County</th>
            <th>Asset involved</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>01/11/2018</td>
            <td>01/11/2018</td>
            <td>Inspection 1</td>
            <td>800HOO332</td>
            <td>Colorado</td>
            <td>Owner 3</td>
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
<div class="modal fade" id="roadside-inspection-modal" tabindex="-1" role="dialog"
     aria-labelledby="roadside-inspection-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="roadside-inspection-modal-label">Roadside Inspection</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Inspection Date</label>
                            <input type="text" class="form-control date" id="inspectiondate"
                                   data-toggle="date-picker" data-single-date-picker="true"
                                   required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Inspection State</label>
                            <select class="form-control" id="inspectionstate" required>
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
                            <label>* Officer Name</label>
                            <input type="text" id="officername" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Record</label>
                            <input type="text" id="record" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Road</label>
                            <input type="text" id="road" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* County</label>
                            <input type="text" id="county" class="form-control" required>
                        </div>

                    </div>

                    <div class="row">

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

                        <div class="form-group col-md-6">
                            <label>State</label>
                            <select class="form-control" id="state" multiple data-toggle="select2">
                                <option>171.2(a) - Failure to comply with HM regulations</option>
                                <option>171.2(b) - Failure to comply with the requirements for HM
                                    transportation (including labeling and handling)
                                </option>
                                <option>171.2(c) - Representing a package./container for HM not meeting
                                    specs
                                </option>
                                <option>171.2(f) - Transporting Hazardous Materials not in accordance with
                                    this part
                                </option>
                                <option>171.2(g) - Cargo tank does not comply with HM Regulations</option>
                                <option>171.2(k) - Representing vehicle with HM, none present</option>
                                <option>171.23 - US Requirements for IMDG shipment.</option>
                                <option>171.26 - US Requirements for IAEA shipments</option>
                                <option>172.200(a) - No shipping paper provided by offeror</option>
                                <option>172.201(a)(1) - Hazardous Materials not distinguished from
                                    non-Hazardous Materials
                                </option>
                                <option>172.201(a)(2) - Hazardous Materials description not printed legibly
                                    in English
                                </option>
                                <option>172.201(a)(3) - Hazardous Materials description contains
                                    abbreviation or code
                                </option>
                                <option>172.201(a)(4) - Additional information not after Hazardous
                                    Materials basic description
                                </option>
                                <option>172.201(c) - Failure to list page number of pages</option>
                                <option>172.201(d) - Emergency Response phone number not listed</option>
                                <option>172.202(a)(1) - Improper shipping name</option>
                                <option>172.202(a)(2) - Improper hazard class</option>
                                <option>172.202(a)(3) - Wrong or no ID number</option>
                                <option>172.202(a)(4) - No packing group listed</option>
                                <option>172.202(a)(5) - Total quantity not listed</option>
                                <option>172.202(b) - Basic description not in proper sequence</option>
                                <option>172.202(c) - Total quantity improper location</option>
                                <option>172.202(e) - Non Hazardous Material entered with class or ID#</option>
                                <option>172.203(a) - Exemption number not listed</option>
                                <option>172.203(b) - Limited quantity not shown</option>
                                <option>172.203(c)(1) - Hazardous substance entry missing</option>
                                <option>172.203(c)(2) - RQ not on shipping paper</option>
                                <option>172.203(d)(1) - Radionuclide name not on shipping paper</option>
                                <option>172.203(d)(10) - No indication for Highway Route Controlled
                                    Quantity of Class 7 "HRCQ" on shipping paper
                                </option>
                                <option>172.203(d)(2) - No RAM physical or chemical form</option>
                                <option>172.203(d)(3) - No RAM activity</option>
                                <option>172.203(d)(4) - No RAM label category</option>
                                <option>172.203(d)(5) - No RAM transport index</option>
                                <option>172.203(d)(6) - No fissile radioactive entry</option>
                                <option>172.203(d)(7) - No DOE/NRC package approval notation</option>
                                <option>172.203(d)(8) - Export package or foreign made package not marked
                                    with IAEA Certificate
                                </option>
                                <option>172.203(d)(9) - No Exclusive Use notation</option>
                                <option>172.203(e) - No empty packaging noted</option>
                                <option>172.203(h)(1) - No qt/nqt for anhydrous ammonia</option>
                                <option>172.203(h)(2) - No notation for QT / NQT for Liquefied Petroleum
                                    Gas
                                </option>
                                <option>172.203(k) - No technical name for nos entry</option>
                                <option>172.203(m) - No Poison Inhalation Hazard and / or Hazard Zone</option>
                                <option>172.203(n) - No "hot" on shipping paper</option>
                                <option>172.203(o) - No temperature controls noted for Class 4.1 or Class
                                    5.2
                                </option>
                                <option>172.203G - Subsidiary labeling for Division 2.3 materials</option>
                                <option>172.203L - No "Marine Pollutant" entry</option>
                                <option>172.203P - No "Non-odorized" entry for LPG</option>
                                <option>172.205 - Hazardous waste manifest not as required</option>
                                <option>172.300 - Failing to comply with marking requirements</option>
                                <option>172.301 - Non-bulk package marking - general</option>
                                <option>172.301(a) - No ID number on side/ends of non-bulk package - large
                                    quantity of single HM
                                </option>
                                <option>172.301(a)(1) - No proper shipping name and/or ID# marking on
                                    non-bulk
                                </option>
                                <option>172.301(b) - No technical name on non-bulk</option>
                                <option>172.301(c) - No special permit number on non-bulk package</option>
                                <option>172.301(d) - No consignee/consignor on non-bulk</option>
                                <option>172.301A1-SZ - Non-bulk package marking is incorrect size</option>
                                <option>172.301F - No "Non-odorized" entry for LPG cylinders</option>
                                <option>172.302 - Marking requirements bulk packagings</option>
                                <option>172.302(a) - No ID number (portable and cargo tank)</option>
                                <option>172.302(b) - Bulk package marking incorrect size</option>
                                <option>172.302(c) - No special permit number on bulk package</option>
                                <option>172.303(a) - Prohibited HM marking on package</option>
                                <option>172.304(a)(1) - Package marking not durable, English, or print</option>
                                <option>172.304(a)(2) - Marking not on sharply contrasting color</option>
                                <option>172.304(a)(3) - Marking obscured by label or attachments</option>
                                <option>172.304(a)(4) - Marking not away from other marking</option>
                                <option>172.308(a) - Package marked with unauthorized abbreviation</option>
                                <option>172.310(a) - No gross weight on radioactive materials package
                                    greater than 50 KG
                                </option>
                                <option>172.310(b) - Radioactive materials package not marked "Type A or
                                    B"
                                </option>
                                <option>172.312(a)(2) - No package orientation arrows</option>
                                <option>172.312(b) - Prohibited use of orientation arrows</option>
                                <option>172.313(a) - No "inhalation hazard" on package</option>
                                <option>172.313(b) - No "poison" on non-bulk plastic package</option>
                                <option>172.316(a) - Other regulated material non-bulk package not marked
                                </option>
                                <option>172.320(a) - Class 1 package not marked with ex-number</option>
                                <option>172.322(b) - No marine pollutant marking on bulk packaging</option>
                                <option>172.324 - Non-bulk hazardous substance not marked</option>
                                <option>172.325 - No "hot" marking for bulk elevated temperature</option>
                                <option>172.325(a) - Elevated temperature not marked "Hot"</option>
                                <option>172.325(b) - Improperly marked molten aluminum/sulphur</option>
                                <option>172.326(a) - Portable tank not marked with proper shipping name or
                                    ID#
                                </option>
                                <option>172.326(b) - No portable tank owner or lessee marking</option>
                                <option>172.326(c)(1) - No ID number marking on vehicle carrying portable
                                    tank
                                </option>
                                <option>172.326(c)(2) - Shipper failed to provide ID number to carrier</option>
                                <option>172.328 - No ID number displayed on a cargo tank</option>
                                <option>172.328(a) - Shipper failed to provide or affix ID number for cargo
                                    tank
                                </option>
                                <option>172.328(b) - Cargo tank not marked for class 2</option>
                                <option>172.328(c) - No quenched and tempered steel (QT)/other than
                                    quenched and tempered steel (NQT) marked on cargo tank (MC 330/331)
                                </option>
                                <option>172.328(d) - Fail to mark manual remote shutoff device</option>
                                <option>172.330(a)(2) - Tank car tank (non cylinder) not marked as
                                    required
                                </option>
                                <option>172.330(b) - Motor vehicle with tank not marked</option>
                                <option>172.331 - Markings for other bulk packages</option>
                                <option>172.331A - Offeror fail to provide ID Numbers to motor carrier for
                                    other bulk packages
                                </option>
                                <option>172.331B - Offeror fail to affix ID Numbers on other bulk
                                    packages
                                </option>
                                <option>172.331C - Transport other bulk packages without proper ID
                                    Numbers
                                </option>
                                <option>172.332 - Required ID markings displayed</option>
                                <option>172.332A - Failure to display ID Numbers when required</option>
                                <option>172.332B - Orange panel does not meet specifications</option>
                                <option>172.332C - ID Number on placard does not meet specifications</option>
                                <option>172.334 - Prohibited ID number marking</option>
                                <option>172.334(a) - ID # displayed on Class 7/Class 1/Dangerous or
                                    Subsidiary placard
                                </option>
                                <option>172.336(b) - ID numbers not properly displayed</option>
                                <option>172.336(c)(1) - Failing to display ID numbers on compartment cargo
                                    tank in sequence
                                </option>
                                <option>172.336C - Failing to display ID numbers according to provisions in
                                    table of 172.336(c)
                                </option>
                                <option>172.338 - Carrier failed to replace missing ID number</option>
                                <option>172.400 - Labeling requirements</option>
                                <option>172.400(a) - Package/containment not labeled as required</option>
                                <option>172.401 - Prohibited labeling</option>
                                <option>172.402 - Failing to affix additional labels when required</option>
                                <option>172.402(a) - No label for subsidiary hazard</option>
                                <option>172.402(b) - Display of class number on label</option>
                                <option>172.402(d) - Subsidiary labeling for radioactive materials</option>
                                <option>172.402(e) - Subsidiary labeling for class 1 (explosive)
                                    materials
                                </option>
                                <option>172.402F - Subsidiary labeling for Division 2.2 materials</option>
                                <option>172.403(a) - Radioactive material label requirement</option>
                                <option>172.403(f) - Radioactive material package-2 labels on opposite
                                    sides
                                </option>
                                <option>172.403(g) - Failed to label radioactive material properly</option>
                                <option>172.403(g)(2) - Class 7 label - no activity/activity not in SI
                                    units
                                </option>
                                <option>172.403B - Wrong category RAM label</option>
                                <option>172.403E - Failing to have complete information on Fissile label
                                </option>
                                <option>172.403H - RAM label overpack requirements</option>
                                <option>172.404(a) - Mixed package not properly labeled</option>
                                <option>172.404(b) - Failed to properly label consolidated package</option>
                                <option>172.406(a)(1) - Label placement not as required</option>
                                <option>172.406(c) - Multiple label placement not as required</option>
                                <option>172.406(d) - Label not on contrasting background or no border</option>
                                <option>172.406(e) - Failed to display duplicate label as required</option>
                                <option>172.406(f) - Label obscured by marking or attachment</option>
                                <option>172.502(a)(1) - Prohibited placarding</option>
                                <option>172.502(a)(2) - Sign or device could be confused with HM placard
                                </option>
                                <option>172.504 - Placards not in table 1 or 2</option>
                                <option>172.504(a) - Vehicle not placarded as required</option>
                                <option>172.504(b) - Dangerous placard violation</option>
                                <option>172.505(a) - No placard for poison inhalation hazard</option>
                                <option>172.505(b) - Not placarded for RAM and Corrosive when required</option>
                                <option>172.505(c) - Placard for subsidiary dangerous when wet</option>
                                <option>172.506(a) - Failed to provide placards shipper</option>
                                <option>172.506(a)(1) - Placards not affixed to vehicle</option>
                                <option>172.507 - Not placarded for RAM highway route controlled quantity
                                </option>
                                <option>172.512(a) - Freight container not placarded</option>
                                <option>172.514(a) - Bulk package offered without placard</option>
                                <option>172.514(b) - Bulk package with residue of HM not properly
                                    placarded
                                </option>
                                <option>172.516(a) - Placard not visible from direction it faces</option>
                                <option>172.516(c)(1) - Placard not securely affixed or attached</option>
                                <option>172.516(c)(2) - Placard not clear of appurtenance</option>
                                <option>172.516(c)(4) - Placard improper location</option>
                                <option>172.516(c)(5) - Placard not reading horizontally</option>
                                <option>172.516(c)(6) - Placard damaged, deteriorated, or obscured</option>
                                <option>172.516(c)(7) - Placard not on contrasting background or border
                                </option>
                                <option>172.519 - Placard does not meet specifications</option>
                                <option>172.600(c) - Emergency Response (ER) information not available</option>
                                <option>172.602(a) - Emergency response information missing</option>
                                <option>172.602(b) - Form and manner of emergency response information</option>
                                <option>172.602(c)(1) - Maintenance/accessibility of emergency response
                                    information
                                </option>
                                <option>172.604(a) - Failing to provide an emergency response phone
                                    number
                                </option>
                                <option>173.24((b))(1) - Release of HM from package</option>
                                <option>173.24(a)(c) - Non-bulk package mixed contents requirements</option>
                                <option>173.24(b) - Failed to meet general package requirements</option>
                                <option>173.24(b)(a) - Bulk package outage or filling limit requirements
                                </option>
                                <option>173.24(b)(d)(2) - Exceed max weight of rating on spec plate</option>
                                <option>173.24(c) - Unauthorized packaging</option>
                                <option>173.24(f)(1) - Closures for packagings must not be open or
                                    leaking
                                </option>
                                <option>173.25(a) - Failed to meet overpack conditions</option>
                                <option>173.25(c) - Failure to label and package poison properly, when
                                    transported with edible material
                                </option>
                                <option>173.29(a) - Empty package improper transportation</option>
                                <option>173.30 - Loading/unloading transport vehicles</option>
                                <option>173.312 - MEGCs general requirements</option>
                                <option>173.315(a) - Cargo or portable tank class 2 exceeds maximum filling
                                    density
                                </option>
                                <option>173.315(j)(3) - Residential gas tank not secure in transport</option>
                                <option>173.315J1 - Residential LPG tank under 5%</option>
                                <option>173.315J2 - Residential LPG tank over 5%</option>
                                <option>173.315M2 - Anhydrous ammonia nurse tank with no test markings when
                                    required
                                </option>
                                <option>173.315N2 - No emergency discharge control, other than metered
                                    delivery
                                </option>
                                <option>173.315N3 - No emergency discharge control, metered delivery</option>
                                <option>173.318 - Cryogenic liquids in cargo tanks general requirements
                                </option>
                                <option>173.318(b)(10) - Fail to mark inlet, outlet, pressure relief
                                    device, or pressure control valve of cryogenic tanks
                                </option>
                                <option>173.318(g) - No or Improper One Way Travel Time (OWTT) marking on
                                    cryogenic cargo tank
                                </option>
                                <option>173.32(h)(3) - IM101/102 bottom outlets prohibited</option>
                                <option>173.32(h)(3)(i) - IM101/102 bottom outlets authorized</option>
                                <option>173.32A2 - Portable tank periodic testing</option>
                                <option>173.32G1 - Portable tank extending outside transport vehicle</option>
                                <option>173.33(a) - Cargo tank general requirements</option>
                                <option>173.33(b) - HM in cargo tank which had dangerous reaction with
                                    cargo tank
                                </option>
                                <option>173.33(c)(2) - Cargo tank not marked with design or maximum
                                    allowable working pressure (MAWP)
                                </option>
                                <option>173.35(a) - Intermediate bulk container requirements</option>
                                <option>173.35(d) - Liquid filled IBC with Ullage over 98%</option>
                                <option>173.35(f)(2) - Intermediate bulk container (IBC) not secured to or
                                    within vehicle
                                </option>
                                <option>173.35L - IBC filled in excess of maximum gross mass marked on the
                                    container
                                </option>
                                <option>173.36 - Large bulk packages general requirements</option>
                                <option>173.37 - Flexible bulk packages general requirements</option>
                                <option>173.40 - General packages requirements for poisons in cylinders
                                </option>
                                <option>173.412 - General Type A package failing to meet additional design
                                    requirements
                                </option>
                                <option>173.421(a) - Transporting limited quantity-radioactive material
                                    exceeds 0.5 millirem/hour
                                </option>
                                <option>173.427(a)(6)(iv) - No instructions for exclusive use packaging-low
                                    specific activity
                                </option>
                                <option>173.427(a)(6)(vi) - Exclusive use low specific activity (LSA)
                                    radioactive material not marked "Radioactive-LSA"
                                </option>
                                <option>173.427(a)(iv) - No instructions for exclusive use packaging-low
                                    specific activity
                                </option>
                                <option>173.427(a)(vi) - Exclusive use low specific activity (LSA)
                                    radioactive material not marked "Radioactive-LSA"
                                </option>
                                <option>173.431 - Exceeded activity limits Type A or Type B package</option>
                                <option>173.441(a) - Exceeding radiation level limitations allowed for
                                    transport
                                </option>
                                <option>173.441(b) - Exceeding radiation level allowed for transport of RAM
                                    under exclusive use provisions
                                </option>
                                <option>173.442(b)(1) - External temperature of package exceeds 50 degrees
                                    Celcius (122 degrees F)
                                </option>
                                <option>173.442(b)(2) - External temperature of package exceeds 85 degrees
                                    C (185 degrees F) in an exclusive use shipment
                                </option>
                                <option>173.443(a) - Radioactive contamination exceeds limits</option>
                                <option>173.447 - RAM transport storage violation</option>
                                <option>173.448 - General RAM transport requirements</option>
                                <option>173.54 - Transporting or Offering for Transportation forbidden
                                    explosives
                                </option>
                                <option>173.60 - General packaging requirements for explosives</option>
                                <option>173.9 - Fumigant marking requirements</option>
                                <option>177.800(d) - Unnecessary delay in HM transportation to
                                    destination
                                </option>
                                <option>177.801 - Accepting/transporting HM not prepared properly</option>
                                <option>177.801-TRN - Transporting a forbidden material</option>
                                <option>177.804 - Failure to comply with FMCSR 49 CFR part 383 and 49 CFR
                                    parts 390 through 397
                                </option>
                                <option>177.804B - Failure to comply with 49 CFR 392.80 - Texting while
                                    Oper a CMV - Placardable HM
                                </option>
                                <option>177.804C - Fail to comply with 392.82 - Using Mobile Phone while
                                    Oper a CMV - HM
                                </option>
                                <option>177.816 - Driver training requirements</option>
                                <option>177.817 - Shipping papers required</option>
                                <option>177.817(a) - No shipping papers (carrier)</option>
                                <option>177.817(b) - Shipper certification missing (when required)</option>
                                <option>177.817(e) - Shipping paper accessibility</option>
                                <option>177.823(a) - No placards/markings when required</option>
                                <option>177.834 - Load securement of different HM packages</option>
                                <option>177.834(a) - Package not secure in vehicle</option>
                                <option>177.834(b) - Package not loaded according to orientation marks</option>
                                <option>177.834(c) - Smoking while loading or unloading</option>
                                <option>177.834(f) - Using a tool likely to cause damage to the closure of
                                    any package or container
                                </option>
                                <option>177.834(i) - Attendance of cargo tank- (load or unload)</option>
                                <option>177.834(j) - Manholes and valves not closed or leak free</option>
                                <option>177.834(m)(1) - Securing specification 106a or 110a tanks</option>
                                <option>177.834(n) - Improper loading-specification 56, 57, IM101 and
                                    IM102
                                </option>
                                <option>177.835 - Improper transportation of explosives (Class 1)</option>
                                <option>177.835(a) - Loading or Unloading Class 1 hazardous materials with
                                    engine running
                                </option>
                                <option>177.835(c) - Transporting Class 1 in combination vehicles</option>
                                <option>177.835(j) - Transfer of Class 1 materials en route</option>
                                <option>177.837 - Improper transporting of Class 3 hazardous materials</option>
                                <option>177.837(c) - Cargo tanks not properly bonded/grounded</option>
                                <option>177.837(d) - Improper unloading of combustible liquids</option>
                                <option>177.838 - Improper transport of class 4, 5 or division 4.2</option>
                                <option>177.839 - Improper transportation of Class 8 hazardous materials
                                </option>
                                <option>177.840 - Improper transportation of Class 2 hazardous materials
                                </option>
                                <option>177.840(g) - Discharge valve not closed in transit class 2</option>
                                <option>177.840(o) - Fail to test off-truck remote shutoff device</option>
                                <option>177.840(s) - Fail to possess remote shutoff when unloading</option>
                                <option>177.841 - Improper transportation of Division 6.1 or Division 2.3
                                    hazardous materials
                                </option>
                                <option>177.841(e) - Poison label loaded with foodstuffs</option>
                                <option>177.842(a) - Total transport index exceeds 50- non-exclusive use
                                </option>
                                <option>177.842(b) - Distance from package to person-radioactive material
                                </option>
                                <option>177.842(d) - Blocking and bracing of radioactive material
                                    packages
                                </option>
                                <option>177.848(d) - Prohibited load/transport/storage combination</option>
                                <option>177.848(f) - Class 1 load separation or segregation</option>
                                <option>177.870(b) - Transporting unauthorized HM in a passenger-carrying
                                    vehicle
                                </option>
                                <option>177.870(c) - Prohibited Hazardous Materials on passenger carrying
                                    vehicle
                                </option>
                                <option>178.245-4 - DOT51 integrity and securement</option>
                                <option>178.245-5 - DOT51 valve protection</option>
                                <option>178.245-6(a) - DOT51 name plate Markings - HM</option>
                                <option>178.245-6(b) - Tank outlets not marked</option>
                                <option>178.251-4 - DOT 56/57 integrity and securement</option>
                                <option>178.251-7(b) - DOT 56/57 spec Markings - HM</option>
                                <option>178.255-14 - DOT 60 ID plate</option>
                                <option>178.255-4 - DOT 60 manhole</option>
                                <option>178.255-7 - DOT 60 valve protection</option>
                                <option>178.270-1 - IM101/102 general design</option>
                                <option>178.270-11(d)(1) - IM101/102 pressure relief</option>
                                <option>178.270-14 - IM101/102 spec plate</option>
                                <option>178.270-4 - Structural integrity</option>
                                <option>178.270-6 - IM 101/102 frames</option>
                                <option>178.270-8 - IM101/102 valve protection</option>
                                <option>178.270-9 - IM101/102 manholes</option>
                                <option>178.336-10 - Protecting of fittings MC330</option>
                                <option>178.336-13 - Anchoring of tank MC330</option>
                                <option>178.336-17 - Metal ID plate marking MC330</option>
                                <option>178.336-17(a) - Certification plate MC330</option>
                                <option>178.336-9(a) - Safety relief devices MC330</option>
                                <option>178.336-9(c) - Marking of inlets/outlets MC330</option>
                                <option>178.337-10 - Accident damage protection MC331</option>
                                <option>178.337-10(a) - Protection of fittings MC331</option>
                                <option>178.337-11(a)(2) - Internal valve MC331</option>
                                <option>178.337-13 - MC331 supports and anchoring</option>
                                <option>178.337-17(a) - Metal ID plate missing MC331</option>
                                <option>178.337-8(a) - Outlets general requirements MC331</option>
                                <option>178.337-8(a)(2) - Outlets MC331</option>
                                <option>178.337-8(a)(3) - Internal or back flow valve MC331</option>
                                <option>178.337-8(a)(4)(i) - Remote closure device greater than 3500
                                    gallons MC331
                                </option>
                                <option>178.337-8(a)(4)(ii) - Remote closure device less than 3500 gallons
                                    MC331
                                </option>
                                <option>178.337-9 - Pressure relief devices MC331</option>
                                <option>178.337-9(c) - Marking inlets/outlets MC331</option>
                                <option>178.338-10(a) - Protection of fittings MC338</option>
                                <option>178.338-10(c) - Rear end protection MC338</option>
                                <option>178.338-11(b) - Manual shutoff valve MC338</option>
                                <option>178.338-12 - Shear section MC338</option>
                                <option>178.338-13 - Supports and anchoring MC338</option>
                                <option>178.338-18(a) - Name plate/Specification plate missing MC338</option>
                                <option>178.338-18(b) - Specification plate missing MC338</option>
                                <option>178.338-6 - Manhole MC338</option>
                                <option>178.338-8 - Pressure relief devices MC338</option>
                                <option>178.340-10(b) - MC306/307/312 metal certification plate missing
                                </option>
                                <option>178.340-6 - MC306/307/312 supports and anchoring</option>
                                <option>178.340-7(a) - MC306/307/312 ring stiffeners</option>
                                <option>178.340-7(c) - MC306/307/312 double bulkhead drain</option>
                                <option>178.340-7(d)(2) - MC306/307/312 ring stiffener drain hole</option>
                                <option>178.340-8(a) - MC306/307/312 appurtenances attachment</option>
                                <option>178.340-8(b) - MC306/307/312 rearend protection</option>
                                <option>178.340-8(c) - MC306/307/312 overturn protection</option>
                                <option>178.340-8(d) - 306,307,312 protection shear</option>
                                <option>178.340-8(d)(1) - MC306/307/312 piping protection</option>
                                <option>178.340-8(d)(2) - MC306/307/312 minimum road clearance</option>
                                <option>178.341-3(a) - MC306 no manhole closure</option>
                                <option>178.341-4 - MC306 venting</option>
                                <option>178.341-4(d)(1) - MC306 inadequate emergency venting</option>
                                <option>178.341-4(d)(2) - MC306 pressure activated vents</option>
                                <option>178.341-4(d)(3) - MC306 no fusible venting</option>
                                <option>178.341-5(a) - MC306 internal valves</option>
                                <option>178.341-5(a)(1) - MC306 heat actuated safety</option>
                                <option>178.341-5(a)(2) - MC306 remote control shutoff</option>
                                <option>178.342-3 - MC307 manhole closure</option>
                                <option>178.342-4 - MC307 venting</option>
                                <option>178.342-4(b) - Inadequate venting capacity</option>
                                <option>178.342-5(a) - MC307 internal valve</option>
                                <option>178.342-5(a)(1) - MC307 heat actuated safety</option>
                                <option>178.342-5(a)(2) - MC307 remote control shutoff</option>
                                <option>178.343-3 - Manhole closure MC312</option>
                                <option>178.343-4 - Venting MC312 (show calculations)</option>
                                <option>178.343-5(a) - MC312 top outlet and valve</option>
                                <option>178.343-5(b)(1) - MC312 bottom valve/piping protection</option>
                                <option>178.345-1(i)(2) - DOT 406, 407, 412 Obstructed double bulkhead
                                    drain/vent
                                </option>
                                <option>178.345-10 - DOT406/407/412 Pressure Relief</option>
                                <option>178.345-11(b) - DOT406/407/412 tank valves</option>
                                <option>178.345-11(b)(1) - DOT406/407/412 remote control</option>
                                <option>178.345-11(b)(1)(i) - DOT406/407/412 remote control</option>
                                <option>178.345-14(b) - DOT406/407/412 name plate</option>
                                <option>178.345-14(c) - DOT406/407/412 specification plate</option>
                                <option>178.345-5(d) - DOT406/407/412 manhole securement</option>
                                <option>178.345-5(e) - DOT406/407/412 manhole marking</option>
                                <option>178.345-6 - DOT406/407/412 supports and anchoring</option>
                                <option>178.345-7(d)(4) - DOT406/407/412 ring stiffener drain</option>
                                <option>178.345-8(a) - DOT406/407/412 accident protection</option>
                                <option>178.345-8(a)(5) - DOT406/407/412 minimum road clearance</option>
                                <option>178.345-8(b) - DOT406/407/412 bottom damage protection</option>
                                <option>178.345-8(c) - DOT406/407/412 rollover damage protection</option>
                                <option>178.345-8(d) - DOT406/407/412 rear end protection</option>
                                <option>178.703(a) - Intermediate bulk container (IBC) manufacturer
                                    Markings - HM
                                </option>
                                <option>178.703(b) - Intermediate bulk container additional Markings - HM
                                </option>
                                <option>178.704(e) - Intermediate bulk container bottom discharge valve
                                    protection
                                </option>
                                <option>179.300-12 - DOT106/110aw protection of fittings</option>
                                <option>179.300-13 - DOT106/110aw venting and valves</option>
                                <option>179.300-15 - DOT106/110aw safety relief devices</option>
                                <option>179.300-18 - DOT106/110aw stamping of tanks</option>
                                <option>180.205(c) - Periodic re-qualification of cylinders</option>
                                <option>180.207B - Periodic inspection of UN cylinders</option>
                                <option>180.213(d) - Re-qualification Markings - HM</option>
                                <option>180.217 - Periodic requalification of Multiple Element Gas
                                    Containers
                                </option>
                                <option>180.3 - Represent a package as meeting a specification that does
                                    not meet a specification
                                </option>
                                <option>180.352(b) - Intermediate bulk container retest or inspection</option>
                                <option>180.352(d) - IBC retest date marking</option>
                                <option>180.352(e) - IBC retest date marking</option>
                                <option>180.352C - Flexible IBC retest date marking</option>
                                <option>180.405(b) - Cargo tank specifications</option>
                                <option>180.405(j) - Certification withdrawal (failed to
                                    remove/cover/obliterate spec plate)
                                </option>
                                <option>180.405K - Failure to mark a specification cargo tank with a
                                    Maximum Allowable Working Pressure of at least 3 psi
                                </option>
                                <option>180.407(a)(1) - Cargo tank periodic test and inspection</option>
                                <option>180.407(c) - Failing to periodically test and inspect cargo tank
                                </option>
                                <option>180.407A - Failure to test / inspection a specification cargo tank
                                    when due
                                </option>
                                <option>180.415(b) - Cargo tank test or inspection Markings - HM</option>
                                <option>180.416G - Damaged liquid discharge hose</option>
                                <option>180.519 - Tank car tank retest date markings</option>
                                <option>180.605 - Periodic testing of portable tanks</option>
                                <option>180.605(k) - Test date marking</option>
                                <option>383.21 - Operating a CMV with more than one driver's license</option>
                                <option>383.21(a) - Operating a CMV with more than one driver's license
                                </option>
                                <option>383.23(a)(2) - Operating a CMV without a CDL</option>
                                <option>383.23(c) - Operating on learner's permit without CDL holder</option>
                                <option>383.23(c)(1) - Operating on learner's permit without CDL holder
                                </option>
                                <option>383.23(c)(2) - Operating on learner's permit without valid driver’s
                                    license
                                </option>
                                <option>383.25A1 - Operating on learner permit without a CDL holder</option>
                                <option>383.25A2 - Operating on a CDL learners permit without a valid
                                    regular operators license
                                </option>
                                <option>383.51(a) - Driving a CMV (CDL) while disqualified</option>
                                <option>383.51A-NSIN - Driving a CMV while CDL is suspended for a
                                    non-safety-related reason and in the state of driver's license issuance.
                                </option>
                                <option>383.51A-NSOUT - Driving a CMV while CDL is suspended for a
                                    non-safety-related reason and outside the state of driver's license issuance.
                                </option>
                                <option>383.51A-SIN - Driving a CMV while CDL is suspended for a
                                    safety-related or unknown reason and in the state of driver's license issuance.
                                </option>
                                <option>383.51A-SOUT - Driving a CMV while CDL is suspended for
                                    safety-related or unknown reason and outside the driver's license state of issuance.
                                </option>
                                <option>383.71H - Failing to submit medical certification documentation as
                                    required.
                                </option>
                                <option>383.91(a) - Operating a CMV with improper CDL group</option>
                                <option>383.93(b)(1) - No double/triple trailer endorsement on CDL</option>
                                <option>383.93(b)(2) - No passenger vehicle endorsement on CDL</option>
                                <option>383.93(b)(3) - No tank vehicle endorsement on CDL</option>
                                <option>383.93(b)(4) - No hazardous materials endorsement on CDL</option>
                                <option>383.93(b)(5) - No school bus endorsement on CDL</option>
                                <option>383.93B5LCDL - License (CDL) - Operating a school bus without a
                                    school bus endorsement as described in 383.93(b)(5)
                                </option>
                                <option>383.95(a) - Violating airbrake restriction</option>
                                <option>385.103(c) - Fail to display current CVSA decal - Provisional
                                    Authority
                                </option>
                                <option>385.403 - No HM Safety Permit</option>
                                <option>386.72(b) - Failing to comply with Imminent Hazard OOS Order</option>
                                <option>390.17DT - Operating a CMV while texting</option>
                                <option>390.20 - Failing to properly secure parked vehicle</option>
                                <option>390.33-XS - Operating a Motor Coach or other Passenger Carrying
                                    vehicle with seating, secured or unsecured, in excess of the manufacturer's designed
                                    seating capacity.
                                </option>
                                <option>390.35B-MED - Operating a CMV while possessing a fraudulent medical
                                    certificate
                                </option>
                                <option>391.11 - Unqualified driver</option>
                                <option>391.11(b)(1) - Interstate driver under 21 years of age</option>
                                <option>391.11(b)(2) - Driver cannot read or speak the English language
                                    sufficiently to respond to official inquiries.
                                </option>
                                <option>391.11(b)(4) - Driver lacking physical qualification(s)</option>
                                <option>391.11(b)(5) - Driver lacking valid license for type vehicle being
                                    operated
                                </option>
                                <option>391.11(b)(7) - Driver disqualified from operating CMV</option>
                                <option>391.11B2S - Driver must be able to understand highway traffic signs
                                    and signals in the English language
                                </option>
                                <option>391.11B5-DEN - Driver operating a CMV without proper endorsements
                                    or in violation of restrictions.
                                </option>
                                <option>391.11B5-DNL - Driver does not have a valid operator's license for
                                    the CMV being operated.
                                </option>
                                <option>391.15(a) - Driving a CMV while disqualified</option>
                                <option>391.15A-NSIN - Driving a CMV while disqualified. Suspended for
                                    non-safety-related reason and in the state of driver's license issuance.
                                </option>
                                <option>391.15A-NSOUT - Driving a CMV while disqualified. Suspended for a
                                    non-safety-related reason and outside the state of driver's license issuance.
                                </option>
                                <option>391.15A-SIN - Driving a CMV while disqualified. Suspended for
                                    safety-related or unknown reason and in the state of driver’s license issuance.
                                </option>
                                <option>391.15A-SOUT - Driving a CMV while disqualified. Suspended for a
                                    safety-related or unknown reason and outside the driver's license state of issuance.
                                </option>
                                <option>391.41(a) - Driver not in possession of medical certificate</option>
                                <option>391.41A-F - Operating a property-carrying vehicle without
                                    possessing a valid medical certificate.
                                </option>
                                <option>391.41A-FPC - Operating a property-carrying vehicle without
                                    possessing a valid medical certificate. Previously Cited
                                </option>
                                <option>391.41A-P - Operating a passenger-carrying vehicle without
                                    possessing a valid medical certificate.
                                </option>
                                <option>391.43(h) - Improper medical examiner’s certificate form</option>
                                <option>391.45(b) - Expired medical examiner's certificate</option>
                                <option>391.49(j) - No valid medical waiver in driver's possession</option>
                                <option>392.10(a)(1) - Failure to stop at railroad crossing - Bus
                                    transporting passengers
                                </option>
                                <option>392.10(a)(2) - Failure to stop at railroad crossing - CMV
                                    transporting Division 2.3 Chlorine
                                </option>
                                <option>392.10(a)(3) - Failure to stop at railroad crossing - CMV requiring
                                    display of HM placards
                                </option>
                                <option>392.10(a)(4) - Failure to stop at railroad crossing - HM Cargo Tank
                                    vehicle
                                </option>
                                <option>392.11 - Commercial Vehicle failing to slow down approaching a
                                    railroad crossing.
                                </option>
                                <option>392.14 - Failed to use caution for hazardous condition</option>
                                <option>392.16 - Failing to use seat belt while operating CMV</option>
                                <option>392.16B - Operating a property-carrying commercial motor vehicle
                                    while all other occupants are not properly restrained
                                </option>
                                <option>392.2 - OVERWIEGHT</option>
                                <option>392.22(a) - Failing to use hazard warning flashers</option>
                                <option>392.22(b) - Failing/improper placement of warning devices</option>
                                <option>392.2C - Failure to obey traffic control device</option>
                                <option>392.2DH - Headlamps - Failing to dim when required</option>
                                <option>392.2FC - Following too close</option>
                                <option>392.2H - State/Local Hours-of-Service (HOS)</option>
                                <option>392.2-INAT - Inattentive Driving</option>
                                <option>392.2LC - Improper lane change</option>
                                <option>392.2LV - Lane Restriction violation</option>
                                <option>392.2-ML - Failure to Maintain Lane</option>
                                <option>392.2P - Improper passing</option>
                                <option>392.2PK - Unlawfully parking and/or leaving vehicle in the
                                    roadway
                                </option>
                                <option>392.2R - Reckless driving</option>
                                <option>392.2RR - Railroad Grade Crossing violation</option>
                                <option>392.2S - Speeding</option>
                                <option>392.2-SLLS2 - State/Local Laws - Speeding 6-10 miles per hour over
                                    the speed limit
                                </option>
                                <option>392.2-SLLS3 - State/Local Laws - Speeding 11-14 miles per hour over
                                    the speed limit
                                </option>
                                <option>392.2-SLLS4 - State/Local Laws - Speeding 15 or more miles per hour
                                    over the speed limit
                                </option>
                                <option>392.2-SLLSWZ - State/Local Laws - Speeding work/construction zone
                                </option>
                                <option>392.2-SLLT - State/Local Laws - Operating a CMV while texting</option>
                                <option>392.2T - Improper turns</option>
                                <option>392.2WC - Wheel (Mud) Flaps missing or defective</option>
                                <option>392.2Y - Failure to yield right of way</option>
                                <option>392.3 - Operating a CMV while ill/fatigued</option>
                                <option>392.33 - Operating CMV with lamps/reflectors obscured</option>
                                <option>392.3-FPASS - Fatigue - Operate a passenger-carrying CMV while
                                    impaired by fatigue.
                                </option>
                                <option>392.3-FPROP - Fatigue - Operate a property-carrying CMV while
                                    impaired by fatigue.
                                </option>
                                <option>392.3-I - Illness - Operate a CMV while impaired by illness or
                                    other cause.
                                </option>
                                <option>392.4(a) - Driver uses or is in possession of drugs</option>
                                <option>392.4A-POS - Driver on duty and in possession of a narcotic drug /
                                    amphetamine
                                </option>
                                <option>392.4A-UI - Driver on duty and under the influence of, or using a
                                    narcotic drug / amphetamine, which renders the driver incapable of safe operation
                                </option>
                                <option>392.5(a) - Possession/use/under influence alcohol-4hrs prior to
                                    duty
                                </option>
                                <option>392.5(a)(3) - Driver in possession of intoxicating beverage while
                                    on duty or driving
                                </option>
                                <option>392.5(c)(2) - Violating OOS order pursuant to 392.5(a)/(b)</option>
                                <option>392.5A2-DETECT - Driver having any measured alcohol concentration,
                                    or any detected presence of alcohol while on duty, or operating, or in physical
                                    control of a CMV
                                </option>
                                <option>392.5A2-POS - Driver having possession of alcohol while on duty, or
                                    operating, or in physical control of a CMV
                                </option>
                                <option>392.5A2-UI - Operating a CMV while under the influence of an
                                    intoxicating beverage regardless of its alcohol content
                                </option>
                                <option>392.6 - Scheduling run to necessitate speeding</option>
                                <option>392.60(a) - Unauthorized passenger on board CMV</option>
                                <option>392.62 - Unsafe bus operations</option>
                                <option>392.62(a) - Bus—Standees forward of the standee line</option>
                                <option>392.62(c)(1) - Bus - baggage/freight restricts driver operation
                                </option>
                                <option>392.62(c)(2) - Bus - Exit(s) obstructed by baggage/freight</option>
                                <option>392.62(c)(3) - Passengers not protected from falling baggage</option>
                                <option>392.63 - Pushing/towing a loaded bus</option>
                                <option>392.7 - No pre-trip inspection</option>
                                <option>392.7(a) - Driver failing to conduct pre-trip inspection</option>
                                <option>392.7(b) - Driver failing to conduct a pre-trip inspection of
                                    intermodal equipment
                                </option>
                                <option>392.71(a) - Using or equipping a CMV with radar detector</option>
                                <option>392.8 - Failing to inspect/use emergency equipment</option>
                                <option>392.80(a) - Driving a CMV while Texting</option>
                                <option>392.82(a)(1) - Using a hand-held mobile telephone while operating a
                                    CMV
                                </option>
                                <option>392.82(a)(2) - Allowing or requiring driver to use a hand-held
                                    mobile telephone while operating a CMV
                                </option>
                                <option>392.9 - Failing to secure load</option>
                                <option>392.9(a) - Failing to secure load</option>
                                <option>392.9(a)(1) - Failing to secure cargo</option>
                                <option>392.9(a)(2) - Failing to secure vehicle equipment</option>
                                <option>392.9(a)(3) - Driver's view/movement is obstructed</option>
                                <option>393.100 - Failure to prevent cargo shifting</option>
                                <option>393.100(a) - Failure to prevent cargo shifting</option>
                                <option>393.100(b) - Leaking/spilling/blowing/falling cargo</option>
                                <option>393.100(c) - Failure to prevent cargo shifting</option>
                                <option>393.102(a) - Improper securement system (tiedown assemblies)</option>
                                <option>393.102(a)(1) - Insufficient means to prevent forward movement</option>
                                <option>393.102(a)(1)(i) - Insufficient means to prevent forward movement
                                </option>
                                <option>393.102(a)(1)(ii) - Insufficient means to prevent rearward
                                    movement
                                </option>
                                <option>393.102(a)(1)(iii) - Insufficient means to prevent lateral
                                    movement
                                </option>
                                <option>393.102(a)(2) - Tiedown assembly with inadequate working load
                                    limit
                                </option>
                                <option>393.102(b) - Insufficient means to prevent vertical movement</option>
                                <option>393.102(c) - No equivalent means of securement</option>
                                <option>393.104(a) - Inadequate/damaged securement device/system</option>
                                <option>393.104(b) - Damaged securement system/tiedowns</option>
                                <option>393.104(c) - Damaged vehicle structures/anchor points</option>
                                <option>393.104(d) - Damaged dunnage/bars/blocking-bracing</option>
                                <option>393.104(f)(1) - Knotted tiedown</option>
                                <option>393.104(f)(2) - Use of tiedown with improper repair.</option>
                                <option>393.104(f)(3) - Loose/unfastened tiedown.</option>
                                <option>393.104F4R - No edge protection for tiedowns</option>
                                <option>393.106(a) - No/improper front end structure/headerboard</option>
                                <option>393.106(b) - Cargo not immobilized or secured</option>
                                <option>393.106(c)(1) - No means to prevent cargo from rolling</option>
                                <option>393.106(c)(2) - Cargo without direct contact/prevention from
                                    shifting
                                </option>
                                <option>393.106(d) - Insufficient aggregate working load limit</option>
                                <option>393.11 - No/defective lighting devices/reflective
                                    devices/projected
                                </option>
                                <option>393.110 - Failing to meet minimum tiedown requirements</option>
                                <option>393.110(b) - Insufficient tiedowns; without headerboard/blocking
                                </option>
                                <option>393.110(c) - Insufficient tiedowns; with headerboard/blocking</option>
                                <option>393.110(d) - Large/odd-shaped cargo not adequately secured</option>
                                <option>393.112 - Tiedown not adjustable by driver</option>
                                <option>393.114 - No/improper front end structure</option>
                                <option>393.114(b)(1) - Insufficient height for front-end structure</option>
                                <option>393.114(b)(2) - Insufficient width for front-end structure</option>
                                <option>393.114(d) - Front-end structure with large opening(s)</option>
                                <option>393.116 - No/improper securement of logs</option>
                                <option>393.116(d)(1) - Short, over 1/3 length past structure</option>
                                <option>393.116(d)(2) - Short, insufficient/no tiedowns</option>
                                <option>393.116(d)(3) - Short, tiedowns improperly positioned</option>
                                <option>393.116(d)(4) - Short, no center stakes/high log not secured</option>
                                <option>393.116(e) - Short, length; improper securement</option>
                                <option>393.118 - No/improper lumber/building materials. securement</option>
                                <option>393.118(b) - Improper placement of bundles</option>
                                <option>393.118(d) - Insufficient protection against lateral movement</option>
                                <option>393.118(d)(3) - Insufficient/improper arrangement of tiedowns</option>
                                <option>393.11LR - Lower retroreflective sheeting/reflex reflectors -
                                    Trailer manufactured on or after 12/1/1993
                                </option>
                                <option>393.11N - No retroreflective sheeting/reflex reflectors - Trailer
                                    manufactured on or after 12/1/1993
                                </option>
                                <option>393.11RT - Retroreflective sheeting not affixed as required -
                                    Trailer manufactured on or after 12/1/1993
                                </option>
                                <option>393.11S - Side retroreflective sheeting or reflex reflector
                                    requirements for vehicles manufactured after December 1993
                                </option>
                                <option>393.11TL - No retro reflective sheeting or reflex reflectors on mud
                                    flaps - Truck Tractor manufactured on or after 7/1/1997
                                </option>
                                <option>393.11TT - No retroreflective sheeting/reflex reflectors - Truck
                                    Tractor manufactured on or after 7/1/1997
                                </option>
                                <option>393.11TU - No upper body corners retroreflective sheeting/reflex
                                    reflectors - Truck Tractor manufactured on or after 7/1/1997
                                </option>
                                <option>393.11UR - No upper reflex reflectors retroreflective
                                    sheeting/reflex reflectors - Trailer manufactured on or after 12/1/1993
                                </option>
                                <option>393.120 - No/improper securement of metal coils</option>
                                <option>393.120(b)(1) - Coil/vertical improper securement</option>
                                <option>393.120(b)(2) - Coils, rows, eyes vertical - improper securement
                                </option>
                                <option>393.120(c)(1) - Coil/eye crosswise improper securement</option>
                                <option>393.120(c)(2) - X-pattern on coil(s) with eyes crosswise</option>
                                <option>393.120(d)(1) - Coil with eye lengthwise-improper securement</option>
                                <option>393.120(d)(4) - Coils, rows, eyes length - improper securement.
                                </option>
                                <option>393.120(e) - No protection against shifting/tipping</option>
                                <option>393.122 - No/improper securement of paper rolls</option>
                                <option>393.122(b) - Rolls vertical - improper securement</option>
                                <option>393.122(c) - Rolls vertical /split - improper securement</option>
                                <option>393.122(d) - Rolls vertical /stacked - improper securement</option>
                                <option>393.122(e) - Rolls crosswise - improper securement</option>
                                <option>393.122(f) - Rolls crosswise/stacked load - improperly secured</option>
                                <option>393.122(g) - Rolls length - improper securement</option>
                                <option>393.122(h) - Rolls lengthwise/stacked - improper securement</option>
                                <option>393.122(i) - Improper securement - rolls on flatbed/curtain-sided
                                    vehicle
                                </option>
                                <option>393.124 - No/improper securement of concrete pipe</option>
                                <option>393.124(b) - Insufficient working load limit - concrete pipes</option>
                                <option>393.124(c) - Improper blocking of concrete pipe</option>
                                <option>393.124(d) - Improper arrangement of concrete pipe</option>
                                <option>393.124(e) - Improper securement, up to 45 in. diameter</option>
                                <option>393.124(f) - Improper securement, greater than 45 inch diameter
                                </option>
                                <option>393.126 - Fail to ensure intermodal container secured</option>
                                <option>393.126(b) - Damaged/missing tiedown/securement device</option>
                                <option>393.126(c)(1) - Lower corners of container not on
                                    vehicle/structure
                                </option>
                                <option>393.126(c)(2) - All corners of chassis not secured</option>
                                <option>393.126(c)(3) - Front and rear of container not secured
                                    independently
                                </option>
                                <option>393.126(d)(1) - Empty container not properly positioned</option>
                                <option>393.126(d)(2) - Empty container, more than 5 foot overhang</option>
                                <option>393.126(d)(4) - Empty container - not properly secured</option>
                                <option>393.128 - No/improper securement of vehicles</option>
                                <option>393.128(b)(1) - Vehicle not secured - front and rear</option>
                                <option>393.128(b)(2) - Tiedown(s) not affixed to mounting points.</option>
                                <option>393.128(b)(3) - Tiedown(s) not over/around wheels.</option>
                                <option>393.13(a) - Retroreflective tape not affixed as required for
                                    Trailers manufactured after 12/1/1993
                                </option>
                                <option>393.13(b) - No retroreflective sheeting or reflex reflective
                                    material as required for vehicles manufactured before December 1993
                                </option>
                                <option>393.13(c)(1) - No side retroreflective sheeting or reflex
                                    reflective material as required for vehicles manufactored manufactured before
                                    12/1/1993
                                </option>
                                <option>393.13(c)(2) - No lower rear retroreflective sheeting or reflex
                                    reflective material as required for vehicles manufactured before 12/1/1993
                                </option>
                                <option>393.13(c)(3) - No upper rear retroreflective sheeting or reflex
                                    reflective material as required for vehicles manufactured before 12/1/1993
                                </option>
                                <option>393.13(d)(1) - Improper Side Placement of retroreflective sheeting
                                    or reflex reflective material as required for vehicles manufactured before December
                                    1993
                                </option>
                                <option>393.13(d)(2) - Improper lower rear placement of retroreflective
                                    sheeting or reflex reflective material requirements for vehicles manufactured before
                                    12/1/1993
                                </option>
                                <option>393.13(d)(3) - Upper rear retroreflective sheeting or reflex
                                    reflective material as required for vehicles manufactured before December 1993
                                </option>
                                <option>393.130 - No/improper heavy vehicle/machinery securement</option>
                                <option>393.130(b) - Item not properly prepared for transport</option>
                                <option>393.130(c) - Improper restraint/securement of item</option>
                                <option>393.132 - No/improper securement of crushed vehicles</option>
                                <option>393.132(b) - Prohibited use of synthetic webbing.</option>
                                <option>393.132(c) - Insufficient tiedowns per stack cars</option>
                                <option>393.132(c)(5) - Insufficient means to retain loose parts</option>
                                <option>393.134 - No/improper securement of roll/hook container</option>
                                <option>393.134(b)(1) - No blocking against forward movement</option>
                                <option>393.134(b)(2) - Container not secured to front of vehicle</option>
                                <option>393.134(b)(3) - Rear of container not properly secured</option>
                                <option>393.136 - No/improper securement of large boulders</option>
                                <option>393.136(b) - Improper placement/positioning of boulder</option>
                                <option>393.136(c)(1) - Boulder not secured with chain</option>
                                <option>393.136(d) - Improper securement - cubic boulder</option>
                                <option>393.136(e) - Improper securement - non-cubic boulder with stable
                                    base
                                </option>
                                <option>393.136(f) - Improper securement - non-cubic boulder with unstable
                                    base
                                </option>
                                <option>393.17 - No/defective lamp/reflector-tow-away operation</option>
                                <option>393.17(a) - No/defective lamps-towing unit-tow-away operation</option>
                                <option>393.17(b) - No/defective tow-away lamps on rear unit</option>
                                <option>393.19 - Inoperative/defective hazard warning lamp</option>
                                <option>393.201(a) - Frame cracked / loose / sagging / broken</option>
                                <option>393.201(b) - Bolts securing cab broken/loose/missing</option>
                                <option>393.201(c) - Frame rail flange improperly bent/cut/notched</option>
                                <option>393.201(d) - Frame accessories improperly attached</option>
                                <option>393.201(e) - Prohibited holes drilled in frame rail flange</option>
                                <option>393.203 - Cab/body parts requirements violations</option>
                                <option>393.203(a) - Cab door missing/broken</option>
                                <option>393.203(b) - Cab/body improperly secured to frame</option>
                                <option>393.203(c) - Hood not securely fastened</option>
                                <option>393.203(d) - Cab seats not securely mounted</option>
                                <option>393.203(e) - Cab front bumper missing/ unsecured/protruding</option>
                                <option>393.205(a) - Wheel/rim cracked or broken</option>
                                <option>393.205(b) - Stud/bolt holes elongated on wheels</option>
                                <option>393.205(c) - Wheel fasteners loose and/or missing</option>
                                <option>393.207(a) - Axle positioning parts defective/missing</option>
                                <option>393.207(b) - Adjustable axle locking pin missing/disengaged</option>
                                <option>393.207(c) - Leaf spring assembly defective/missing</option>
                                <option>393.207(d) - Coil spring cracked and/or broken</option>
                                <option>393.207(e) - Torsion bar cracked and/or broken</option>
                                <option>393.207(f) - Air suspension pressure loss</option>
                                <option>393.207(g) - No/defective air suspension exhaust control</option>
                                <option>393.209(a) - Steering wheel not secured/broken</option>
                                <option>393.209(b) - Excessive steering wheel lash</option>
                                <option>393.209(c) - Loose steering column</option>
                                <option>393.209(d) - Steering system components worn, welded, or missing
                                </option>
                                <option>393.209(e) - Power steering violations</option>
                                <option>393.23 - Required lamp not powered by vehicle electricity</option>
                                <option>393.23PT - All required lamps on towed vehicle inoperative due to
                                    no electrical connection
                                </option>
                                <option>393.24(a) - Noncompliance with headlamp requirements</option>
                                <option>393.24(b) - Noncompliant fog/driving lamps</option>
                                <option>393.24(c) - Improper headlamp mounting</option>
                                <option>393.24(d) - Improper head / auxiliary / fog lamp aiming</option>
                                <option>393.24BR - Noncompliant fog or driving lamps</option>
                                <option>393.25(a) - Improper lamp mounting</option>
                                <option>393.25(b) - Lamps are not visible as required</option>
                                <option>393.25(e) - Lamp not steady burning</option>
                                <option>393.25(f) - Stop lamp violations</option>
                                <option>393.26 - Requirements for reflectors</option>
                                <option>393.28 - Improper or no wiring protection as required</option>
                                <option>393.30 - Improper battery installation</option>
                                <option>393.40 - Inadequate brake system on a CMV</option>
                                <option>393.41 - No or defective parking brake system on CMV</option>
                                <option>393.42 - No brakes as required</option>
                                <option>393.42A-BM - Brake - Missing required brake.</option>
                                <option>393.42A-BMAW - Brake - All wheels not equipped with brakes as
                                    required.
                                </option>
                                <option>393.42A-BM-TSA - Brake - Missing on a trailer steering axle.</option>
                                <option>393.43 - No/improper breakaway or emergency braking</option>
                                <option>393.43(a) - No/improper tractor protection valve</option>
                                <option>393.43(d) - No or defective automatic trailer brake</option>
                                <option>393.44 - No/defective bus front brake line protection</option>
                                <option>393.45 - Brake tubing and hose adequacy</option>
                                <option>393.45(a)(4) - Failing to secure brake hose/tubing against
                                    mechanical damage
                                </option>
                                <option>393.45(b)(2) - Failing to secure brake hose/tubing against
                                    mechanical damage
                                </option>
                                <option>393.45(b)(3) - Failing to secure brake hose/tubing against high
                                    temperatures
                                </option>
                                <option>393.45(d) - Brake connections with leaks/constrictions</option>
                                <option>393.45A-HJS - Hydraulic Brake tubing improperly joined or spliced
                                </option>
                                <option>393.45B2PC - Brake Hose or Tubing Chafing and/or Kinking -
                                    Connection to Power Unit
                                </option>
                                <option>393.45B2UV - Brake Hose or Tubing Chafing and/or Kinking Under
                                    Vehicle
                                </option>
                                <option>393.45DCPC - Brake Connections with Constrictions - Connection to
                                    Power Unit
                                </option>
                                <option>393.45DCUV - Brake Connections with Constrictions Under Vehicle
                                </option>
                                <option>393.45DLPC - Brake Connections with Leaks - Connection to Power
                                    Unit
                                </option>
                                <option>393.45DLUV - Brake Connections with Leaks Under Vehicle</option>
                                <option>393.45PC - Brake Tubing and Hose Adequacy - Connections to Power
                                    Unit
                                </option>
                                <option>393.45UV - Brake Tubing and Hose Adequacy Under Vehicle</option>
                                <option>393.47 - Inadequate/contaminated brake linings</option>
                                <option>393.47(a) - Inadequate brakes for safe stopping</option>
                                <option>393.47(b) - Mismatched brake chambers on same axle</option>
                                <option>393.47(c) - Mismatched slack adjuster effective length</option>
                                <option>393.47(d) - Insufficient brake linings</option>
                                <option>393.47(e) - Clamp/Roto-Chamber type brake(s) out of adjustment</option>
                                <option>393.47(f) - Wedge type brake(s) out of adjustment</option>
                                <option>393.47(g) - Insufficient drum/rotor thickness</option>
                                <option>393.48(a) - Inoperative/defective brakes</option>
                                <option>393.48(b)(1) - Defective brake limiting device</option>
                                <option>393.48A-BCM - Brakes - Hydraulic Brake Caliper movement exceeds
                                    1/8" (0.125") (3.175 mm)
                                </option>
                                <option>393.48A-BMBC - Brakes - Missing or Broken Components including Pad
                                    Retaining Components and loose or missing caliper mounting bolt(s)
                                </option>
                                <option>393.48A-BRMMC - Brakes - Rotor (disc) metal-to-metal contact</option>
                                <option>393.48A-BSRFS - Brakes - Severe rusting of brake rotor (disc)</option>
                                <option>393.50 - Inadequate reservoir for air/vacuum brakes</option>
                                <option>393.50(a) - Failing to have sufficient air/vacuum reserve</option>
                                <option>393.50(b) - Failing to equip vehicle air brake system with adequate
                                    reserve capacity or reservoir
                                </option>
                                <option>393.50(c) - No means to ensure operable check valve</option>
                                <option>393.50(d) - No or defective air reservoir drain valve</option>
                                <option>393.51 - No or defective brake warning device</option>
                                <option>393.52(a)(1) - Insufficient braking force as percent of GVW or
                                    GCW
                                </option>
                                <option>393.53(a) - Automatic brake adjuster CMV manufactured on or after
                                    10/20/1993 - hydraulic brake
                                </option>
                                <option>393.53(b) - Automatic brake adjuster CMV manufactured on or after
                                    10/20/1994 - air brake
                                </option>
                                <option>393.53(c) - Brake adjustment indicator CMV manufactured on or after
                                    10/20/1994 - external automatic adjustment
                                </option>
                                <option>393.53BMAN - CMV manufactured after 10/20/1994 is not equipped with
                                    automatic air brake adjusters.
                                </option>
                                <option>393.55(a) - ABS - all CMVs manufactured on or after 3/1/1999 with
                                    hydraulic brakes
                                </option>
                                <option>393.55(b) - ABS - malfunction indicators for hydraulic brake
                                    system
                                </option>
                                <option>393.55(c)(1) - ABS - all tractors manufactured on or after 3/1/1997
                                    air brake system
                                </option>
                                <option>393.55(c)(2) - ABS - all other CMVs manufactured on or after
                                    3/1/1998 air brake system
                                </option>
                                <option>393.55(d)(1) - ABS - malfunctioning circuit/signal - truck tractor
                                    manufactured on or after 3/1/1997, single-unit CMV manufactured on or after 3/1/1998
                                </option>
                                <option>393.55(d)(2) - ABS - malfunctioning indicator to cab of towing CMV
                                    manufactured on or after 3/1/2001
                                </option>
                                <option>393.55(d)(3) - No or Defective ABS Malfunction Indicator for towed
                                    vehicles on vehicles manufactured after February 2001
                                </option>
                                <option>393.55(e) - ABS - malfunctioning lamps towed CMV manufactured on or
                                    after 3/1/1998
                                </option>
                                <option>393.60(b) - Windshields required</option>
                                <option>393.60(c) - Damaged or discolored windshield</option>
                                <option>393.60(d) - Glazing permits less than 70&nbsp;percent of light</option>
                                <option>393.60EWS - Windshield - Obstructed</option>
                                <option>393.61 - Inadequate or missing truck side windows</option>
                                <option>393.61(a) - Inadequate or missing truck side windows</option>
                                <option>393.62(a) - No or defective bus emergency exits - Bus manufactured
                                    on or after 9/1/1994
                                </option>
                                <option>393.62(b) - No or defective bus emergency exits - Bus manufactured
                                    on or after 9/1/1973 but before 9/1/1994
                                </option>
                                <option>393.62(c) - No or defective bus emergency exit windows - Bus
                                    manufactured before 9/1/1973
                                </option>
                                <option>393.62(d) - No / defective Safety glass/push-out window - Bus
                                    manufactured before 9/1/1973
                                </option>
                                <option>393.62(e) - No or inadequate bus emergency exit marking - Bus
                                    manufactured on or after 9/1/1973
                                </option>
                                <option>393.65 - Fuel system requirements</option>
                                <option>393.65(b) - Improper location of fuel system</option>
                                <option>393.65(c) - Improper securement of fuel tank</option>
                                <option>393.65(f) - Improper fuel line protection</option>
                                <option>393.67 - Fuel tank requirement violations</option>
                                <option>393.67(c)(7) - Fuel tank fill pipe cap missing</option>
                                <option>393.67(c)(8) - Improper fuel tank safety vent</option>
                                <option>393.68 - Compressed natural gas (CNG) fuel container does not
                                    conform to regulations
                                </option>
                                <option>393.70 - Fifth wheel</option>
                                <option>393.70(a) - Defective coupling device — improper tracking</option>
                                <option>393.70(b) - Defective/improper fifth wheel assemblies</option>
                                <option>393.70(b)(2) - Defective fifth wheel locking mechanism</option>
                                <option>393.70(c) - Defective coupling devices for full trailer</option>
                                <option>393.70(d) - No/improper safety chains/cables for full trailer</option>
                                <option>393.70(d)(8) - Improper safety chain attachment</option>
                                <option>393.70B1I - Defective latching fasteners fasteners on either side
                                    of the vehicle are missing or ineffective per current OOS Criteria
                                </option>
                                <option>393.70B1I-C - Fifth wheel cracked or a gap caused by corrosion 1/8
                                    inch (3.2 mm) or more in width.
                                </option>
                                <option>393.70B1II - Defective / Improper fifth wheel assembly upper half
                                </option>
                                <option>393.70B1II-FWUC - Upper coupler assembly parent metal cracked,
                                    extending more than 20 percent of the distance across the metal in the direction of
                                    the crack.
                                </option>
                                <option>393.70B1II-FWUCG - Upper coupler assembly crack or gap caused by
                                    corrosion more than 1/8 inch (3.2 mm) or more in width.
                                </option>
                                <option>393.70B1II-FWUCW - Upper coupler assembly welds are crack on either
                                    side, front or back of the upper coupler, more than 20 percent of the total length
                                    of all original welds.
                                </option>
                                <option>393.70B1II-FWURW - Upper coupler assembly repair weld cracked.</option>
                                <option>393.70B1I-MPC - Crack in the mounting plate or pivot bracket
                                    (parent metal) extending more than 20 percent of the distance across the metal in
                                    the direction of the crack.
                                </option>
                                <option>393.70B1I-RW - Fifth Wheel repair weld is cracked</option>
                                <option>393.70B1I-SC - Slide curl broken, cracked or repaired by welding
                                </option>
                                <option>393.70B1I-W - Fifth wheel more than 20 percent of the total length
                                    of all the original welds are cracked on either side of the vehicle.
                                </option>
                                <option>393.71 - Improper coupling driveaway/tow-away operation</option>
                                <option>393.71(g) - Prohibited towing connection / device</option>
                                <option>393.71(h) - Towbar requirement violations</option>
                                <option>393.71(h)(10) - No/improper safety chains/cables for towbar</option>
                                <option>393.75 - Tires/tubes (general)</option>
                                <option>393.75(a) - Flat tire or fabric exposed</option>
                                <option>393.75(a)(1) - Tire — ply or belt material exposed</option>
                                <option>393.75(a)(2) - Tire — tread and/or sidewall separation</option>
                                <option>393.75(a)(3) - Tire — flat and/or audible air leak</option>
                                <option>393.75(a)(4) - Tire — cut exposing ply and/or belt material</option>
                                <option>393.75(b) - Tire — front tread depth less than 4/32 of inch</option>
                                <option>393.75(c) - Tire — other tread depth less than 2/32 of inch</option>
                                <option>393.75(d) - Tire — bus regrooved/recap on front wheel</option>
                                <option>393.75(e) - Tire — regrooved on front wheel of
                                    truck/truck-tractor
                                </option>
                                <option>393.75(f) - Tire — exceeding weight rating of tire</option>
                                <option>393.75(f)(1) - Weight carried exceeds tire load limit</option>
                                <option>393.75(f)(2) - Tire underinflated</option>
                                <option>393.75(h) - Tire underinflated</option>
                                <option>393.75B-OOS - Tire-front tread depth less than 2/32 of inch on a
                                    major tread groove
                                </option>
                                <option>393.75C-OOS - Tire-other tread depth less than 1/32 of inch
                                    measured in 2 adjacent major tread grooves
                                </option>
                                <option>393.75F-SPEED - Operating a CMV at speeds exceeding the
                                    speed-restriction label of the tire
                                </option>
                                <option>393.75G-LOAD - Weight carried exceeds tire load limit</option>
                                <option>393.75I1 - Operating a CMV while weight carried exceeds tire rating
                                    due to under-inflation
                                </option>
                                <option>393.76 - Sleeper berth requirement violations</option>
                                <option>393.77 - Defective and/or prohibited heaters</option>
                                <option>393.77(b)(11) - Bus heater fuel tank location</option>
                                <option>393.77(b)(5) - Protection of operating controls from tampering</option>
                                <option>393.78 - Windshield wipers inoperative/defective</option>
                                <option>393.79 - Defroster / Defogger inoperative</option>
                                <option>393.80 - Failing to equip vehicle with two rear vision mirrors</option>
                                <option>393.81 - Horn inoperative</option>
                                <option>393.82 - Speedometer inoperative / inadequate</option>
                                <option>393.83(a) - Exhaust system location</option>
                                <option>393.83(b) - Exhaust discharge fuel tank/filler tube</option>
                                <option>393.83(c) - Improper exhaust - bus (gasoline)</option>
                                <option>393.83(d) - Improper exhaust - bus (diesel)</option>
                                <option>393.83(e) - Improper exhaust discharge (not rear of cab)</option>
                                <option>393.83(f) - Improper exhaust system repair (patch/wrap)</option>
                                <option>393.83(g) - Exhaust leak under truck cab and/or sleeper</option>
                                <option>393.83(h) - Exhaust system not securely fastened</option>
                                <option>393.84 - Inadequate floor condition</option>
                                <option>393.86 - No or improper rearend protection</option>
                                <option>393.86(a)(1) - Rear impact guards - all trailers/semitrailers
                                    manufactured on or after 1/26/98
                                </option>
                                <option>393.86(a)(2) - Impact guard width - all trailers/semitrailers
                                    manufactured on or after 1/26/98
                                </option>
                                <option>393.86(a)(3) - Impact guard height - all trailers/semitrailers
                                    manufactured on or after 1/26/98
                                </option>
                                <option>393.86(a)(4) - Impact guard rear - all trailers/semitrailers
                                    manufactured on or after 1/26/98
                                </option>
                                <option>393.86(a)(5) - Rear Impact Guard Cross-section vertical height
                                    insufficient for trailer manufactured on or after January 26, 1998
                                </option>
                                <option>393.86(b)(1) - Rear Impact Guards - motor vehicles manufactured
                                    after 12/31/52, see exceptions
                                </option>
                                <option>393.87 - Warning flag required on projecting load</option>
                                <option>393.87(a) - Warning flag required on projecting load</option>
                                <option>393.87(b) - Improper warning flag placement</option>
                                <option>393.88 - Improperly located television receiver</option>
                                <option>393.89 - Bus driveshaft not properly protected</option>
                                <option>393.9 - Inoperative required lamps</option>
                                <option>393.9(a) - Inoperative required lamps</option>
                                <option>393.90 - Bus - no or obscure standee line</option>
                                <option>393.91 - Bus - improper aisle seats</option>
                                <option>393.91-FS - Motor Coach or other Passenger carrying vehicle
                                    equipped with prohibited non-automatically folding seats in the aisle
                                </option>
                                <option>393.91-SNS - Motor Coach or other Passenger Carrying vehicle
                                    operating with seating, occupied or not, not secured in a workmanlike manner.
                                </option>
                                <option>393.93(a) - Bus - not equipped with seatbelt</option>
                                <option>393.93(a)(3) - Seats not secured in conformance with FMVSS</option>
                                <option>393.93(b) - Truck not equipped with seatbelt</option>
                                <option>393.95(a) - No/discharged/unsecured fire extinguisher</option>
                                <option>393.95(a)(1)(i) - No/discharged/unsecured fire extinguisher</option>
                                <option>393.95(b) - No spare fuses as required</option>
                                <option>393.95(c) - No spare fuses as required</option>
                                <option>393.95(f) - No / insufficient warning devices</option>
                                <option>393.95(g) - HM - restricted emergency warning device</option>
                                <option>393.9H - Inoperative head lamps</option>
                                <option>393.9T - Inoperative tail lamp</option>
                                <option>393.9TS - Inoperative turn signal</option>
                                <option>395.1(h)(1) - 15, 20, 70/80 HOS violations (Alaska-Property)</option>
                                <option>395.1(h)(2) - 15, 20, 70/80 HOS violations (Alaska-Passenger)</option>
                                <option>395.1(h)(3) - Adverse driving conditions violations (Alaska)</option>
                                <option>395.1(o) - 16 hour rule violation (Property)</option>
                                <option>395.13(d) - Driving after being declared out-of-service</option>
                                <option>395.15(b) - Onboard recording device information requirements not
                                    met
                                </option>
                                <option>395.15(c) - Onboard recording device improper form and manner</option>
                                <option>395.15(f) - Onboard recording device failure and driver failure to
                                    reconstruct duty status
                                </option>
                                <option>395.15(g) - On-board recording device information not available
                                </option>
                                <option>395.15(i)(5) - Onboard recording device does not display required
                                    information
                                </option>
                                <option>395.15A2 - Driver failed to use automatic on-board recording device
                                    when required by the motor carrier.
                                </option>
                                <option>395.15B2 - Automatic on-board recording device failed to provide
                                    means to immediately check drivers hours of service as required.
                                </option>
                                <option>395.15D2 - Driver failed to produce location identifier codes for
                                    AOBRD as required.
                                </option>
                                <option>395.15G01 - Driver failed to have instructions on-board CMV for
                                    installed automatic on-board recording device.
                                </option>
                                <option>395.15G02 - Driver failed to have on-board a CMV a sufficient
                                    supply of blank records of duty status graph-grids.
                                </option>
                                <option>395.15I9 - Driver not adequately trained in the operation of the
                                    automatic on-board recording device.
                                </option>
                                <option>395.3(a)(1) - Requiring or permitting driver to drive more than 11
                                    hours
                                </option>
                                <option>395.3(a)(2) - Requiring or permitting driver to drive after 14&nbsp;hours
                                    on duty
                                </option>
                                <option>395.3(a)(3)(ii) - Driving beyond 8 hour limit since the end of the
                                    last off duty or sleeper period of at least 30 minutes
                                </option>
                                <option>395.3(b) - 60/70 - hour rule violation</option>
                                <option>395.3(c) - 34 -hour restart violation (Property)</option>
                                <option>395.3A1R - 11 hour rule violation (Property)</option>
                                <option>395.3A2-PROP - Driving beyond 14 hour duty period (Property
                                    carrying vehicle)
                                </option>
                                <option>395.3A2-PROPN - Driving beyond 14 hour duty period (Property
                                    carrying vehicle) - Nominal Violation
                                </option>
                                <option>395.3A2R - 14 hour rule violation (Property)</option>
                                <option>395.3A3-PROP - Driving beyond 11 hour driving limit in a 14 hour
                                    period. (Property Carrying Vehicle)
                                </option>
                                <option>395.3A3-PROPN - Driving beyond 11 hour driving limit in a 14 hour
                                    period. (Property carrying vehicle) - Nominal Violation
                                </option>
                                <option>395.3B1-PROP - Driving after 60 hours on duty in a 7 day period.
                                    (Property carrying vehicle)
                                </option>
                                <option>395.3B1-PROPN - Driving after 60 hours on duty in a 7 day perioed.
                                    (Property carrying vehicle) - Nominal Violation
                                </option>
                                <option>395.3B2 - Driving after 70 hours on duty in a 8 day period.
                                    (Property carrying vehicle)
                                </option>
                                <option>395.3B2-NOM - Driving after 70 hours on duty in a 8 day period.
                                    (Property carrying vehicle) - Nominal Violation
                                </option>
                                <option>395.3BR - 60/70 - hour rule violation (Property)</option>
                                <option>395.5(a)(1) - 10 - hour rule violation (Passenger)</option>
                                <option>395.5(a)(2) - 15 - hour rule violation (Passenger)</option>
                                <option>395.5(b) - 60/70 - hour rule violation (Passenger)</option>
                                <option>395.5A1-PASS - Driving after 10 hour driving limit (Passenger
                                    carrying vehicle)
                                </option>
                                <option>395.5A1-PASSN - Driving after 10 hour driving limit (Passenger
                                    carrying vehicle) - Nominal Violation
                                </option>
                                <option>395.5A2-PASS - Driving after 15 hours on duty (Passenger carrying
                                    vehicle)
                                </option>
                                <option>395.5A2-PASSN - Driving after 15 hour driving limit (Passenger
                                    carrying vehicle) - Nominal Violation
                                </option>
                                <option>395.5B1-PASS - Driving after 60 hours on duty in a 7 day period.
                                    (Passenger carrying vehicle)
                                </option>
                                <option>395.5B1-PASSN - Driving after 60 hours on duty in a 7 day period.
                                    (Passenger carrying vehicle) - Nominal Violation
                                </option>
                                <option>395.5B2-PASS - Driving after 70 hours on duty in a 8 day period.
                                    (Passenger carrying vehicle)
                                </option>
                                <option>395.5B2-PASSN - Driving after 70 hours on duty in a 8 day period.
                                    (Passenger carrying vehicle) - Nominal Violation
                                </option>
                                <option>395.8 - Driver's record of duty status (general/form and manner)
                                </option>
                                <option>395.8(a) - No driver’s record of duty status</option>
                                <option>395.8(e) - False report of driver’s record of duty status</option>
                                <option>395.8(f)(1) - Driver’s record of duty status not current</option>
                                <option>395.8(k)(2) - Driver failing to retain previous 7 days’ logs</option>
                                <option>395.8F01 - Drivers record of duty status not current</option>
                                <option>396.1 - Must have knowledge of and comply with regulations</option>
                                <option>396.11 - No or inadequate driver vehicle inspection report</option>
                                <option>396.13(c) - No reviewing driver's signature on Driver Vehicle
                                    Inspection Report (DVIR)
                                </option>
                                <option>396.17(c) - Operating a CMV without proof of a periodic
                                    inspection
                                </option>
                                <option>396.3(a)(1) - Inspection/repair and maintenance parts and
                                    accessories
                                </option>
                                <option>396.3A1B - Brakes (general)</option>
                                <option>396.3A1BA - Brake out of adjustment</option>
                                <option>396.3A1BC - Brake-air compressor violation</option>
                                <option>396.3A1BD - Brake-defective brake drum</option>
                                <option>396.3A1BL - Brake system pressure loss</option>
                                <option>396.3A1DSCB - Center Bearing (Carrier Bearing) Cracked / Loose /
                                    Broken / Missing
                                </option>
                                <option>396.3A1DSDT - Drive Shaft Tube Cracked or Twisted</option>
                                <option>396.3A1DSUJ - Universal Joint Loose / Broken / Missing Component
                                </option>
                                <option>396.3A1DSYE - Drive Shaft Yoke Ends Cracked / Loose / Broken /
                                    Missing
                                </option>
                                <option>396.3A1-FWPC - Crack in the fifth wheel plate (parent metal)
                                    extending more than 20 percent of the distance across the metal in the direction of
                                    the crack.
                                </option>
                                <option>396.3A1-FWPG - A crack or gap caused by corrosion that is 1/8 inch
                                    (3.2 mm) or more in width in fifth wheel plate.
                                </option>
                                <option>396.3A1-FWPRW - Repair weld cracked on fifth wheel plate</option>
                                <option>396.3A1-GDRVP - Vehicle with a dripping liquid that vaporizes in
                                    the air from a LNG fuel system.
                                </option>
                                <option>396.3A1-GLEAK - Vehicle with fuel leakage from a CNG, LNG or LPG
                                    system verified by bubble test or gas detection meter.
                                </option>
                                <option>396.3A1-GVAPOR - Vehicle with a cloud of vapor from a LNG fuel
                                    system.
                                </option>
                                <option>396.3A1-LLEAK - A liquid fuel system with a dripping leak at any
                                    point.
                                </option>
                                <option>396.3A1T - Tires (general)</option>
                                <option>396.5 - Excessive oil leaks</option>
                                <option>396.5(a) - Failing to ensure that vehicle is properly lubricated
                                </option>
                                <option>396.5(b) - Oil and/or grease leak</option>
                                <option>396.5A-HNLIW - Hubs - No visible or measurable lubricant showing in
                                    the hub - inner wheel
                                </option>
                                <option>396.5A-HNLOW - Hubs - No visible or measurable lubricant showing in
                                    the hub - outer wheel
                                </option>
                                <option>396.5B-HLIW - Hubs - Oil and/or Grease Leaking from hub - inner
                                    wheel
                                </option>
                                <option>396.5B-HLOW - Hubs - oil and/or Grease Leaking from hub - outer
                                    wheel
                                </option>
                                <option>396.5B-HWSLIW - Hubs - Wheel seal leaking - inner wheel</option>
                                <option>396.5B-HWSLOW - Hubs - Wheel seal leaking - outer wheel</option>
                                <option>396.7 - Unsafe operations forbidden</option>
                                <option>396.9(c)(2) - Operating an OOS vehicle</option>
                                <option>396.9(d)(2) - Failure to correct defects noted on inspection
                                    report
                                </option>
                                <option>397.1(a) - Driver/carrier must obey part 397</option>
                                <option>397.1(b) - Failing to require employees to know/obey part 397</option>
                                <option>397.101(b) - Radioactive materials vehicle not on preferred route
                                </option>
                                <option>397.101(d) - No or incomplete route plan-radioactive materials</option>
                                <option>397.101(e)(2) - Driver not in possession of training certificate
                                </option>
                                <option>397.101(e)(3) - Driver not in possession of written route plan</option>
                                <option>397.11(a) - HM vehicle operated near open fire</option>
                                <option>397.11(b) - HM vehicle parked within 300 feet of fire</option>
                                <option>397.13 - Smoking within 25 feet of HM vehicle</option>
                                <option>397.15 - HM vehicle fueling violation</option>
                                <option>397.17 - No tire examination on HM vehicle</option>
                                <option>397.19 - No instructions/documents when transporting Division
                                    1.1/1.2/1.3 (explosive) materials
                                </option>
                                <option>397.19(c) - Required documents not in possession-explosive
                                    materials
                                </option>
                                <option>397.2 - Must comply with rules in parts 390-397-transporting HM
                                </option>
                                <option>397.3 - State/local laws ordinances regulations</option>
                                <option>397.5(a) - Unattended explosives 1.1/1.2/1.3</option>
                                <option>397.5(c) - Unattended hazmat vehicle</option>
                                <option>397.67 - HM vehicle routing violation (non-radioactive materials)
                                </option>
                                <option>397.7(a) - Improperly parked explosives vehicle</option>
                                <option>397.7(b) - Improperly parked HM vehicle</option>
                                <option>398.3(b) - Driver not physically qualified</option>
                                <option>398.3(b)(8) - No doctor's certificate in possession</option>
                                <option>398.4 - Driving a vehicle to transport migrant workers in
                                    noncompliance with part 398
                                </option>
                                <option>398.5 - Operating a motor vehicle not in compliance with parts and
                                    accessories regulations - migrant workers
                                </option>
                                <option>398.6 - Violation of hours of service regulations—migrant workers
                                </option>
                                <option>398.7 - Failure to inspect or maintain motor vehicle to ensure safe
                                    and proper operating condition- migrant workers
                                </option>
                                <option>399.207 - Vehicle access requirements violations</option>
                                <option>399.211 - Inadequate maintenance of driver access</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="assetinvolved">* Asset Involved</label>
                            <select class="form-control" id="assetinvolved" required>
                                <option selected disabled></option>
                                <option>Rented Vehicle</option>
                                <option>Owner 3 (3)</option>
                                <option>Trailer 53171 (53171)</option>
                                <option>Trailer 53184 (53184)</option>
                                <option>Trailer 53321 (53321)</option>
                                <option>Trailer 53947 (53947)</option>
                                <option>Trailer 54257 (54257)</option>
                                <option>Trailer 54281 (54281)</option>
                                <option>Trailer 54298 (54298)</option>
                                <option>Trailer 54471 (54471)</option>
                                <option>Trailer 54473 (54473)</option>
                                <option>Trailer 8608 (8608)</option>
                                <option>Trailer 8620 (8620)</option>
                                <option>Truck 1206 (1206)</option>
                                <option>Truck 1207 (1207)</option>
                                <option>Truck 1208 (1208)</option>
                                <option>Truck 1209 (1209)</option>
                                <option>Truck 1210 (1210)</option>
                                <option>Truck 1211 (1211)</option>
                                <option>Truck 1212 (1212)</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="otherassetinvolved">Other Asset Involved</label>
                            <select class="form-control" id="otherassetinvolved" multiple data-toggle="select2">
                                <option>Rented Vehicle</option>
                                <option>Owner 3 (3)</option>
                                <option>Trailer 53171 (53171)</option>
                                <option>Trailer 53184 (53184)</option>
                                <option>Trailer 53321 (53321)</option>
                                <option>Trailer 53947 (53947)</option>
                                <option>Trailer 54257 (54257)</option>
                                <option>Trailer 54281 (54281)</option>
                                <option>Trailer 54298 (54298)</option>
                                <option>Trailer 54471 (54471)</option>
                                <option>Trailer 54473 (54473)</option>
                                <option>Trailer 8608 (8608)</option>
                                <option>Trailer 8620 (8620)</option>
                                <option>Truck 1206 (1206)</option>
                                <option>Truck 1207 (1207)</option>
                                <option>Truck 1208 (1208)</option>
                                <option>Truck 1209 (1209)</option>
                                <option>Truck 1210 (1210)</option>
                                <option>Truck 1211 (1211)</option>
                                <option>Truck 1212 (1212)</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-6">
                            <label>Out of Service?</label>
                        </div>

                        <div class="form-group col-3">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="outofservice1" name="outofservice" class="custom-control-input">
                                <label class="custom-control-label" for="outofservice1">Yes</label>
                            </div>
                        </div>

                        <div class="form-group col-3">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="outofservice2" name="outofservice" class="custom-control-input">
                                <label class="custom-control-label" for="outofservice2">No</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-6">
                            <label>Citation Given?</label>
                        </div>

                        <div class="form-group col-3">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="citationgiven1" name="citationgiven"
                                       class="custom-control-input">
                                <label class="custom-control-label" for="citationgiven1">Yes</label>
                            </div>
                        </div>

                        <div class="form-group col-3">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="citationgiven2" name="citationgiven"
                                       class="custom-control-input">
                                <label class="custom-control-label" for="citationgiven2">No</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-6">
                            <label>Crash?</label>
                        </div>

                        <div class="form-group col-3">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="crash1" name="crash" class="custom-control-input">
                                <label class="custom-control-label" for="crash1">Yes</label>
                            </div>
                        </div>

                        <div class="form-group col-3">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="crash2" name="crash" class="custom-control-input">
                                <label class="custom-control-label" for="crash2">No</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-6">
                            <label>Reportable?</label>
                        </div>

                        <div class="form-group col-3">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="reportable1" name="reportable" class="custom-control-input">
                                <label class="custom-control-label" for="reportable1">Yes</label>
                            </div>
                        </div>

                        <div class="form-group col-3">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="reportable2" name="reportable" class="custom-control-input">
                                <label class="custom-control-label" for="reportable2">No</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Total for inspection</label>
                            <input type="text" id="totalforinspection" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="memo">Memo</label>
                            <textarea class="form-control" id="memo" rows="3"></textarea>
                        </div>

                    </div>

                    <div class="row">


                        <div class="form-group col-md-6">
                            <label for="inspectionlevels">Inspection Levels</label>
                            <select class="form-control" id="inspectionlevels">
                                <option selected disabled></option>
                                <option>LEVEL I- Driver/Vehicle</option>
                                <option>LEVEL II –Walk Around</option>
                                <option>LEVEL III – Driver Only</option>
                                <option>LEVEL IV – Special Inspection</option>
                                <option>LEVEL V – Vehicle Only</option>
                                <option>LEVEL VI – Hazmat Waist</option>
                                <option>LEVEL VII – Jurisdictional Inspection</option>
                                <option>Other</option>
                            </select>
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


