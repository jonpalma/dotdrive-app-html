<form action="#" class="needs-validation" novalidate>

    <h4 class="header-title mb-3">Purchase Information</h4>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Purchased From</label>
            <input type="text" id="purchasedfrom" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label>Date Purchased</label>
            <input type="text" class="form-control date" id="datepurchased" data-toggle="date-picker"
                   data-single-date-picker="true">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-6">
            <label>Purchased price</label>
            <input type="text" class="form-control date" id="" >
        </div>

        <div class="form-group col-md-6">
            <label for="acquiredby">Date Sold</label>
            <input type="text" class="form-control date" id="datesold" data-toggle="date-picker"
                   data-single-date-picker="true">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-12">
            <button type="submit" class="btn btn-block btn-primary">Save</button>
        </div>

    </div>

</form>

<?php include('modules/views/fileUpload.php') ?>
