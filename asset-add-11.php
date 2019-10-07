<!--<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#parts-modal">
    <i class="mdi mdi-plus"></i></button>
<hr class="mb-4">-->
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Purchase Date</th>
            <th>Part Name</th>
            <th>Part/Model Number</th>
            <th>Serial Number</th>
            <th>Part Vendor</th>
            <th>Quantity</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>01/11/2018</td>
            <td>Part 1</td>
            <td>Pat 0001</td>
            <td>234</td>
            <td>Fleet pride</td>
            <td>2</td>
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
<!--
<div class="modal fade" id="parts-modal" tabindex="-1" role="dialog"
     aria-labelledby="parts-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="parts-modal-label">Parts</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Purchase Date</label>
                            <input type="text" class="form-control date" id="purchasedate" data-toggle="date-picker"
                                   data-single-date-picker="true" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Part Name</label>
                            <input type="text" id="partname" class="form-control" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Part/Model Number</label>
                            <input type="text" id="partnumber" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Serial Number</label>
                            <input type="text" id="serialnumber" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Part Vendor</label>
                            <select class="form-control" id="partvendor">
                                <option selected disabled></option>
                                <option>C&S Tires</option>
                                <option>Fleet Pride</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Quantity</label>
                            <input type="text" id="quantity" class="form-control" value="0.00" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>* Unit Price</label>
                            <input type="text" id="unitprice" class="form-control" value="$0.00" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Total Price</label>
                            <input type="text" id="totalprice" class="form-control" value="$0.00" disabled>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-12">
                            <label for="memo">Memo</label>
                            <textarea class="form-control" id="memo" rows="3"></textarea>
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
        </div><!- /.modal-content ->
    </div><!- /.modal-dialog ->
</div>
-->
