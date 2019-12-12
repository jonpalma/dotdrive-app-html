<?php include('header.php'); ?>
        <div class="container mt-3">
            <!-- start body content -->
            <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive-sm">
                                  <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <label>Add document</label>
                                        <span class="input-group-btn input-group-append">
                    <button class="btn btn-info bootstrap-touchspin-up" type="button" data-toggle="modal" data-target="#addFolder"><i class="mdi mdi-plus"></i></button>
                                        </span>
                                      
                                    </div>
                                  <div class="col-sm-12 col-md-6">
                                    <div id="data-table_filter" class="dataTables_filter">
                                    <label>Search:</label>
                                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="data-table">
                                    </div>
                                </div>
                            </div>
                                    <table class="table table-centered mb-0 mt-2">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#">Document 1</a></td>
                                                <td>Document to save any documents</td>
                                                <td>
                                                    <div class="dropdown">
                                                      <a href="#" class="" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical-circle"></i>
                                                      </a>
                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <button class="dropdown-item" type="button"><i class="mdi mdi-square-edit-outline"></i> Edit</button>
                                                        <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                                      </div>
                                                    </div>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td><a href="#">Document 2</a></td>
                                                <td>Document to save any documents</td>
                                                <td>
                                                    <div class="dropdown">
                                                      <a href="#" class="" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical-circle"></i>
                                                      </a>
                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <button class="dropdown-item" type="button"><i class="mdi mdi-square-edit-outline"></i> Edit</button>
                                                        <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                                                      </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
                <div class="modal fade" id="addFolder" tabindex="-1" role="dialog" aria-labelledby="employee-training-modal-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="employee-training-modal-label">Add Folder</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form id="finishWO" action="http://app.dotdrive.net/service/finish" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                            <div class="box__input text-center">
                                                <svg class="box__icon" xmlns="http://www.w3.org/2000/svg" width="50" height="43" viewBox="0 0 50 43"><path d="M48.4 26.5c-.9 0-1.7.7-1.7 1.7v11.6h-43.3v-11.6c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v13.2c0 .9.7 1.7 1.7 1.7h46.7c.9 0 1.7-.7 1.7-1.7v-13.2c0-1-.7-1.7-1.7-1.7zm-24.5 6.1c.3.3.8.5 1.2.5.4 0 .9-.2 1.2-.5l10-11.6c.7-.7.7-1.7 0-2.4s-1.7-.7-2.4 0l-7.1 8.3v-25.3c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v25.3l-7.1-8.3c-.7-.7-1.7-.7-2.4 0s-.7 1.7 0 2.4l10 11.6z"></path></svg>
                                                <input type="file" name="files[]" id="file" class="box__file" data-multiple-caption="{count} files selected" multiple="">
                                                <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
                                                <button type="submit" class="box__button">Upload</button>
                                            </div>
                                            <div class="box__uploading">Uploading…</div>
                                            <div class="box__success">Done!</div>
                                            <div class="box__error">Error! <span></span>.</div>  
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Description</label>
                                                <input type="text" id="Description" class="form-control" required="">
                                            </div>
                                        </div>

                                        <button class="btn btn-block btn-success" type="submit">Save</button>
                                    </form>

                                </div>
                            </div>
                    </div>
                </div>
            <!-- end body content -->
        <!-- end col-12 -->
    </div> <!-- end -->
<?php include('footer.php'); ?>