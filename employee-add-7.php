<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#mvr-reviews-modal"><i
        class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Review name</th>
            <th>Complete</th>
            <th>Next review due</th>
            <th>Status</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>Anual Review</td>
            <td>01/11/2018</td>
            <td>01/11/2019</td>
            <td><i class="mdi mdi-circle text-success"></i> On time</td>
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
<div class="modal fade" id="mvr-reviews-modal" tabindex="-1" role="dialog"
     aria-labelledby="mvr-reviews-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mvr-reviews-modal-label">MVR Reviews</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="reviewname">* Review Name</label>
                            <select class="form-control" id="reviewname" required>
                                <option selected disabled></option>
                                <option>Annual Review</option>
                                <option>Date of last MVR</option>
                                <option>MVR Review</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Review Completed</label>
                            <input type="text" class="form-control date" id="reviewcompleted"
                                   data-toggle="date-picker" data-single-date-picker="true"
                                   required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="reviewcomments">Review Comments</label>
                            <textarea class="form-control" id="reviewcomments" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label>* Next Review Due</label>
                            <input type="text" class="form-control date" id="nextreviewdue"
                                   data-toggle="date-picker" data-single-date-picker="true"
                                   required>
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


