<?php include('header-employee.php'); ?>
<style>
    table td, table th {
        border: 1px solid;
        padding: 5px;
    }
</style>

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">

                <div class="progress progress-lg mb-4 mt-2">
                    <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 93%"
                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="60"></div>
                </div>

                <!-- start body content -->

                <form action="employee-application-20.php" class="needs-validation" novalidate>

                    <h4 class="page-title">VERIFICATION OF EMPLOYMENT REQUEST</h4>

                    <div class="row">

                        <div class="form-group col-lg-3 col-md-6">
                            <label>* First Name</label>
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
                            <label>Upload Resume</label>
                            <input type="file" class="form-control" id="resume">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group mt-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="activeclaim">
                                <label class="custom-control-label" for="activeclaim"><b>Would you like to save this
                                        form data? (optional)</b><br>
                                    If you save, the next time you apply we can pre-fill the data for you. Saving also
                                    enables you to edit your data in the future.
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-6">
                            <label> Send me a copy (optional)</label>
                        </div>

                        <div class="col-6">
                            <input type="email" id="email" class="form-control">
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
                                            Submit Application
                                        </button>
                                    </div>

                                </div>
                            </div>
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
