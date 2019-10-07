<?php include('header-employee.php'); ?>

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">

                <div class="progress progress-lg mb-4 mt-2">
                    <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 85%"
                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                </div>

                <!-- start body content -->

                <form action="employee-application-18.php" class="needs-validation" novalidate>

                    <h4 class="page-title text-center mb-4">BACKGROUND CHECK DISCLOSURE AND RELEASE AUTHORIZATION FORM
                        FOR EMPLOYMENT PURPOSES Background Screening Disclosure</h4>

                    <p class="text-justify">S and R Express Inc may request a comprehensive review of your background
                        information from a consumer reporting agency in connection with your employment application and
                        for employment purposes, including promotion, reassignment, or retention as an employee. These
                        reports may include information as to your general reputation, character, personal
                        characteristics, mode of living, work habits, job performance and experience along with reasons
                        for termination of past employment from previous employers.
                    </p>

                    <h4 class="page-title text-center mt-4 mb-4">Authorization and Release</h4>

                    <p class="text-justify">I a a authorize the complete release of these records or data pertaining to
                        me which an individual, company, firm, corporation, institution, school or university, law
                        enforcement or public agency may have. I authorize the full release of the information described
                        above, without any reservation, throughout any duration of my employment at the Company. I
                        certify that all information provided below is true and accurate to the best of my knowledge.
                    </p>

                    <div class="form-group row">
                        <div class="col-md-3 col-6">
                            <label>Date</label>
                        </div>
                        <div class="col-md-3 col-6">
                            <input type="text" class="form-control date" id="date" data-toggle="date-picker"
                                   data-single-date-picker="true" value="<?php echo date('m/d/Y'); ?>"
                                   data-reset-val="false" disabled>
                        </div>
                    </div>

                    <div class="mt-4 mb-2"><i><span style="color: red;">Please use your mouse to sign your name in the rectangle below</span>
                            (by clicking the left mouse button in the rectangle and dragging the mouse while holding
                            the button down). <span style="color: red;">Click Save when finished</span></i>.
                    </div>
                    <div id="signature-pad" class="signature-pad">
                        <div class="signature-pad--body" style="border: 1px solid #7f8c8d">
                            <canvas style="width: 100%; height: 200px"></canvas>
                        </div>
                        <div class="signature-pad--footer">
                            <div class="description">Sign above</div>
                            <div class="signature-pad--actions">

                                <div class="row">

                                    <div class="col-md-3 col-6 offset-lg-3 offset-md-3">
                                        <button type="button" class="btn btn-block btn-danger" data-action="clear">
                                            Clear
                                        </button>
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <button type="submit" class="btn btn-block btn-primary" data-action="clear">
                                            Save
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <p class="text-justify">
                            The following information is required by law enforcement agencies and other entities for
                            identification purposes when checking records. It is confidential and will not be used for
                            any other purpose. PLEASE PRINT LEGIBILY
                        </p>
                    </div>

                    <div class="row">

                        <div class="form-group col-lg-3 col-md-6">
                            <label>First Name</label>
                            <input type="text" class="form-control" value="Name" disabled>
                        </div>

                        <div class="form-group col-lg-3 col-md-6">
                            <label>Middle Name</label>
                            <input type="text" class="form-control" value="Middle" disabled>
                        </div>

                        <div class="form-group col-lg-3 col-md-6">
                            <label>Last Name</label>
                            <input type="text" class="form-control" value="Last" disabled>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-3 col-md-6">
                            <label>SSN/SIN</label>
                            <input type="text" id="ssnsin" class="form-control"
                                   data-toggle="input-mask" data-mask-format="000-00-0000"
                                   maxlength="9" value="111111111" disabled>
                            <span class="font-13 text-muted">e.g "xxx-xx-xxxx"</span>
                        </div>

                        <div class="form-group col-lg-3 col-md-6">
                            <label>Date of Birth</label>
                            <input type="text" class="form-control date" id="dateofbirth" data-toggle="date-picker"
                                   data-single-date-picker="true" value="<?php echo date('m/d/Y'); ?>"
                                   data-reset-val="false" disabled>
                        </div>

                        <div class="form-group col-lg-3 col-md-6">
                            <label>Driver's License Number</label>
                            <input type="text" class="form-control" value="1111111111" disabled>
                        </div>

                        <div class="form-group col-lg-3 col-md-6">
                            <label>State of Issue</label>
                            <input type="text" class="form-control" value="Texas" disabled>
                        </div>

                        <div class="form-group col-lg-3 col-md-6">
                            <label>Current Address</label>
                            <input type="text" class="form-control" value="Address" disabled>
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
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script>
    var wrapper = document.getElementById("signature-pad");
    var clearButton = wrapper.querySelector("[data-action=clear]");
    var changeColorButton = wrapper.querySelector("[data-action=change-color]");
    var undoButton = wrapper.querySelector("[data-action=undo]");
    var savePNGButton = wrapper.querySelector("[data-action=save-png]");
    var saveJPGButton = wrapper.querySelector("[data-action=save-jpg]");
    var saveSVGButton = wrapper.querySelector("[data-action=save-svg]");
    var canvas = wrapper.querySelector("canvas");
    var signaturePad = new SignaturePad(canvas, {
        // It's Necessary to use an opaque color when saving image as JPEG;
        // this option can be omitted if only saving as PNG or SVG
        backgroundColor: 'rgb(255, 255, 255)'
    });

    // Adjust canvas coordinate space taking into account pixel ratio,
    // to make it look crisp on mobile devices.
    // This also causes canvas to be cleared.
    function resizeCanvas() {
        // When zoomed out to less than 100%, for some very strange reason,
        // some browsers report devicePixelRatio as less than 1
        // and only part of the canvas is cleared then.
        var ratio = Math.max(window.devicePixelRatio || 1, 1);

        // This part causes the canvas to be cleared
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);

        // This library does not listen for canvas changes, so after the canvas is automatically
        // cleared by the browser, SignaturePad#isEmpty might still return false, even though the
        // canvas looks empty, because the internal data of this library wasn't cleared. To make sure
        // that the state of this library is consistent with visual state of the canvas, you
        // have to clear it manually.
        signaturePad.clear();
    }

    // On mobile devices it might make more sense to listen to orientation change,
    // rather than window resize events.
    window.onresize = resizeCanvas;
    resizeCanvas();

    function download(dataURL, filename) {
        var blob = dataURLToBlob(dataURL);
        var url = window.URL.createObjectURL(blob);

        var a = document.createElement("a");
        a.style = "display: none";
        a.href = url;
        a.download = filename;

        document.body.appendChild(a);
        a.click();

        window.URL.revokeObjectURL(url);
    }

    // One could simply use Canvas#toBlob method instead, but it's just to show
    // that it can be done using result of SignaturePad#toDataURL.
    function dataURLToBlob(dataURL) {
        // Code taken from https://github.com/ebidel/filer.js
        var parts = dataURL.split(';base64,');
        var contentType = parts[0].split(":")[1];
        var raw = window.atob(parts[1]);
        var rawLength = raw.length;
        var uInt8Array = new Uint8Array(rawLength);

        for (var i = 0; i < rawLength; ++i) {
            uInt8Array[i] = raw.charCodeAt(i);
        }

        return new Blob([uInt8Array], {type: contentType});
    }

    clearButton.addEventListener("click", function (event) {
        signaturePad.clear();
    });

    undoButton.addEventListener("click", function (event) {
        var data = signaturePad.toData();

        if (data) {
            data.pop(); // remove the last dot or line
            signaturePad.fromData(data);
        }
    });

    /*changeColorButton.addEventListener("click", function (event) {
        var r = Math.round(Math.random() * 255);
        var g = Math.round(Math.random() * 255);
        var b = Math.round(Math.random() * 255);
        var color = "rgb(" + r + "," + g + "," + b +")";

        signaturePad.penColor = color;
    });*/

    savePNGButton.addEventListener("click", function (event) {
        if (signaturePad.isEmpty()) {
            alert("Please provide a signature first.");
        } else {
            var dataURL = signaturePad.toDataURL();
            download(dataURL, "signature.png");
        }
    });

    saveJPGButton.addEventListener("click", function (event) {
        if (signaturePad.isEmpty()) {
            alert("Please provide a signature first.");
        } else {
            var dataURL = signaturePad.toDataURL("image/jpeg");
            download(dataURL, "signature.jpg");
        }
    });

    saveSVGButton.addEventListener("click", function (event) {
        if (signaturePad.isEmpty()) {
            alert("Please provide a signature first.");
        } else {
            var dataURL = signaturePad.toDataURL('image/svg+xml');
            download(dataURL, "signature.svg");
        }
    });
</script>
