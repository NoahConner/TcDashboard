<!DOCTYPE html>
<html lang="en">
<?php include './assets/commons/head.php' ?>

<body>

    <!-- navbar -->
    <?php include('./assets/commons/navbar.php') ?>


    <div class="mainDiv my-scrollbar" data-scrollbar>

        <div class="main d-flex">
            <div class="row">
                <div class="col-lg-2">
                    <!-- upload document modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                        Upload Document
                    </button>
                </div>
                <div class="col-lg-12">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleAdd">
                        Example
                    </button>
                </div>
                <div class="col-lg-12">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleEdit">
                        Edit Notes
                    </button>

                </div>
            </div>

            <!-- upload document Modal -->
            <div class="modal fade upload-modal" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Choose Document to Add</h5>
                            <button type="button" class="" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-personal-tab" data-bs-toggle="pill" data-bs-target="#v-pills-personal" type="button" role="tab" aria-controls="v-pills-personal" aria-selected="true">Personal</button>
                                        <button class="nav-link" id="v-pills-TREC-tab" data-bs-toggle="pill" data-bs-target="#v-pills-TREC" type="button" role="tab" aria-controls="v-pills-TREC" aria-selected="false">TREC Forms</button>
                                        <button class="nav-link" id="v-pills-Texas-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Texas" type="button" role="tab" aria-controls="v-pills-Texas" aria-selected="false">Texas Realtors
                                            Forms</button>
                                        <button class="nav-link" id="v-pills-Houston-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Houston" type="button" role="tab" aria-controls="v-pills-Houston" aria-selected="false">Houston Association
                                            of Realtors Forms</button>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                            <div class="row">
                                                <div class="col-lg-12 mb2">
                                                    <div class="select-all-check d-flex align-items-baseline">
                                                        <input type="checkbox">
                                                        <div class="check-inp">
                                                            <h6>Select All</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb1">
                                                    <div class="cstm-check">
                                                        <div class="row">
                                                            <div class="col-sm-6 d-flex align-items-baseline">
                                                                <input type="checkbox">
                                                                <div class="check-inp">
                                                                    <h6>Jacob Gomez</h6>
                                                                    <label for="">Uploaded by: Jacob Gomez</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 d-flex align-items-end">
                                                                <label for="">Created Date: 9/8/2021</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb1">
                                                    <div class="cstm-check">
                                                        <div class="row">
                                                            <div class="col-sm-6 d-flex align-items-baseline">
                                                                <input type="checkbox">
                                                                <div class="check-inp">
                                                                    <h6>Jacob Gomez</h6>
                                                                    <label for="">Uploaded by: Jacob Gomez</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 d-flex align-items-end">
                                                                <label for="">Created Date: 9/8/2021</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb1">
                                                    <div class="cstm-check">
                                                        <div class="row">
                                                            <div class="col-sm-6 d-flex align-items-baseline">
                                                                <input type="checkbox">
                                                                <div class="check-inp">
                                                                    <h6>Jacob Gomez</h6>
                                                                    <label for="">Uploaded by: Jacob Gomez</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 d-flex align-items-end">
                                                                <label for="">Created Date: 9/8/2021</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-TREC" role="tabpanel" aria-labelledby="v-pills-TREC-tab">
                                            <div class="row">
                                                <div class="col-lg-12 mb2">
                                                    <div class="select-all-check d-flex align-items-baseline">
                                                        <input type="checkbox">
                                                        <div class="check-inp">
                                                            <h6>Select All</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb1">
                                                    <div class="cstm-check">
                                                        <div class="row">
                                                            <div class="col-sm-6 d-flex align-items-baseline">
                                                                <input type="checkbox">
                                                                <div class="check-inp">
                                                                    <h6>Jacob Gomez</h6>
                                                                    <label for="">Uploaded by: Jacob Gomez</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 d-flex align-items-end">
                                                                <label for="">Created Date: 9/8/2021</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb1">
                                                    <div class="cstm-check">
                                                        <div class="row">
                                                            <div class="col-sm-6 d-flex align-items-baseline">
                                                                <input type="checkbox">
                                                                <div class="check-inp">
                                                                    <h6>Jacob Gomez</h6>
                                                                    <label for="">Uploaded by: Jacob Gomez</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 d-flex align-items-end">
                                                                <label for="">Created Date: 9/8/2021</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb1">
                                                    <div class="cstm-check">
                                                        <div class="row">
                                                            <div class="col-sm-6 d-flex align-items-baseline">
                                                                <input type="checkbox">
                                                                <div class="check-inp">
                                                                    <h6>Jacob Gomez</h6>
                                                                    <label for="">Uploaded by: Jacob Gomez</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 d-flex align-items-end">
                                                                <label for="">Created Date: 9/8/2021</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-Texas" role="tabpanel" aria-labelledby="v-pills-Texas-tab">
                                            <div class="row">
                                                <div class="col-lg-12 mb2">
                                                    <div class="select-all-check d-flex align-items-baseline">
                                                        <input type="checkbox">
                                                        <div class="check-inp">
                                                            <h6>Select All</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb1">
                                                    <div class="cstm-check">
                                                        <div class="row">
                                                            <div class="col-sm-6 d-flex align-items-baseline">
                                                                <input type="checkbox">
                                                                <div class="check-inp">
                                                                    <h6>Jacob Gomez</h6>
                                                                    <label for="">Uploaded by: Jacob Gomez</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 d-flex align-items-end">
                                                                <label for="">Created Date: 9/8/2021</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb1">
                                                    <div class="cstm-check">
                                                        <div class="row">
                                                            <div class="col-sm-6 d-flex align-items-baseline">
                                                                <input type="checkbox">
                                                                <div class="check-inp">
                                                                    <h6>Jacob Gomez</h6>
                                                                    <label for="">Uploaded by: Jacob Gomez</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 d-flex align-items-end">
                                                                <label for="">Created Date: 9/8/2021</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb1">
                                                    <div class="cstm-check">
                                                        <div class="row">
                                                            <div class="col-sm-6 d-flex align-items-baseline">
                                                                <input type="checkbox">
                                                                <div class="check-inp">
                                                                    <h6>Jacob Gomez</h6>
                                                                    <label for="">Uploaded by: Jacob Gomez</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 d-flex align-items-end">
                                                                <label for="">Created Date: 9/8/2021</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-Houston" role="tabpanel" aria-labelledby="v-pills-Houston-tab">
                                            <div class="row">
                                                <div class="col-lg-12 mb2">
                                                    <div class="select-all-check d-flex align-items-baseline">
                                                        <input type="checkbox">
                                                        <div class="check-inp">
                                                            <h6>Select All</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb1">
                                                    <div class="cstm-check">
                                                        <div class="row">
                                                            <div class="col-sm-6 d-flex align-items-baseline">
                                                                <input type="checkbox">
                                                                <div class="check-inp">
                                                                    <h6>Jacob Gomez</h6>
                                                                    <label for="">Uploaded by: Jacob Gomez</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 d-flex align-items-end">
                                                                <label for="">Created Date: 9/8/2021</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb1">
                                                    <div class="cstm-check">
                                                        <div class="row">
                                                            <div class="col-sm-6 d-flex align-items-baseline">
                                                                <input type="checkbox">
                                                                <div class="check-inp">
                                                                    <h6>Jacob Gomez</h6>
                                                                    <label for="">Uploaded by: Jacob Gomez</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 d-flex align-items-end">
                                                                <label for="">Created Date: 9/8/2021</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb1">
                                                    <div class="cstm-check">
                                                        <div class="row">
                                                            <div class="col-sm-6 d-flex align-items-baseline">
                                                                <input type="checkbox">
                                                                <div class="check-inp">
                                                                    <h6>Jacob Gomez</h6>
                                                                    <label for="">Uploaded by: Jacob Gomez</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 d-flex align-items-end">
                                                                <label for="">Created Date: 9/8/2021</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- example Modal -->
            <div class="modal fade example-modal" id="exampleAdd" tabindex="-1" aria-labelledby="exampleAddLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-headings">
                                <h5 class="modal-title" id="exampleModalLabel">Example</h5>
                                <label for="">Notes</label>
                            </div>
                            <button type="button" class="add-note">Add Note</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12 mb1">
                                    <div class="example1">
                                        <div class="example-det d-flex align-items-basline mb1">
                                            <div class="example-created-by d-flex ">
                                                <label for="">Created by:</label>
                                                <h6>Jacob Gomez</h6>
                                            </div>
                                            <div class="example-date d-flex ">
                                                <label for="">Date/Time:</label>
                                                <h6>1:46am on 09/10/21</h6>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit </p>
                                        <i class="fa fa-ellipsis-v three-dot1 fa-lg"></i>
                                        <div class="dots-list1 dots-list">
                                            <div class="d-flex">
                                                <a href="">
                                                    Edit Note
                                                </a>
                                            </div>
                                            <div class="d-flex red-col">
                                                <a href="">
                                                    Delete Note
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 mb1">
                                    <div class="example1">
                                        <div class="example-det d-flex align-items-basline mb1">
                                            <div class="example-created-by d-flex ">
                                                <label for="">Created by:</label>
                                                <h6>Jacob Gomez</h6>
                                            </div>
                                            <div class="example-date d-flex ">
                                                <label for="">Date/Time:</label>
                                                <h6>1:46am on 09/10/21</h6>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit </p>
                                        <i class="fa fa-ellipsis-v three-dot2 fa-lg"></i>
                                        <div class="dots-list2 dots-list">
                                            <div class="d-flex">
                                                <a href="">
                                                    Edit Note
                                                </a>
                                            </div>
                                            <div class="d-flex red-col">
                                                <a href="">
                                                    Delete Note
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12 mt4 d-flex justify-content-end">
                                    <button type="button" class="add-note" data-bs-dismiss="modal" aria-label="Close">Exit Note</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade example-modal" id="exampleEdit" tabindex="-1" aria-labelledby="exampleEditLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleEditLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                                <div class="col-lg-12 mb1">
                                    <div class="example1">
                                        <div class="example-det d-flex align-items-basline mb1">
                                            <div class="example-created-by d-flex ">
                                                <label for="">Created by:</label>
                                                <h6>Jacob Gomez</h6>
                                            </div>
                                            <div class="example-date d-flex ">
                                                <label for="">Date/Time:</label>
                                                <h6>1:46am on 09/10/21</h6>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit </p>
                                        <i class="fa fa-ellipsis-v three-dot1 fa-lg"></i>
                                        <div class="dots-list1 dots-list">
                                            <div class="d-flex">
                                                <a href="">
                                                    Edit Note
                                                </a>
                                            </div>
                                            <div class="d-flex red-col">
                                                <a href="">
                                                    Delete Note
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 mb1">
                                    <div class="example1">
                                        <div class="example-det d-flex align-items-basline mb1">
                                            <div class="example-created-by d-flex ">
                                                <label for="">Created by:</label>
                                                <h6>Jacob Gomez</h6>
                                            </div>
                                            <div class="example-date d-flex ">
                                                <label for="">Date/Time:</label>
                                                <h6>1:46am on 09/10/21</h6>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit </p>
                                        <i class="fa fa-ellipsis-v three-dot2 fa-lg"></i>
                                        <div class="dots-list2 dots-list">
                                            <div class="d-flex">
                                                <a href="">
                                                    Edit Note
                                                </a>
                                            </div>
                                            <div class="d-flex red-col">
                                                <a href="">
                                                    Delete Note
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12 mt4 d-flex justify-content-end">
                                    <button type="button" class="add-note" data-bs-dismiss="modal" aria-label="Close">Exit Note</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- footer -->
        <?php include('./assets/commons/footer.php') ?>
    </div>

    <!-- scripts -->
    <?php include './assets/commons/scripts.php' ?>
</body>

</html>