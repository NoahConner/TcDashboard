<!DOCTYPE html>
<html lang="en">
<?php include './assets/commons/head.php' ?>
<link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<body>

    <!-- navbar -->
    <?php include('./assets/commons/navbar.php') ?>


    <div class="mainDiv my-scrollbar" data-scrollbar>

        <div class="main d-flex">

            <!-- sider -->
            <?php include('./sider.php') ?>
            <div class="content">
                <div class="task-main">
                    <div class="head d-flex mt2">
                        <h1>Task</h1>
                        <div class="save-cancel-btn d-flex justify-content-end mb3">
                            <button class="save-btn">Add</button>
                        </div>
                    </div>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-tasks" type="button" role="tab" aria-controls="pills-tasks" aria-selected="true">All Tasks</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-my-tasks" type="button" role="tab" aria-controls="pills-my-tasks" aria-selected="false">My Tasks</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-assigned-task" type="button" role="tab" aria-controls="pills-assigned-task" aria-selected="false">Assigned to Me</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <!-- All tasks tab -->
                        <div class="tab-pane fade show active all-tasks-tab" id="pills-tasks" role="tabpanel" aria-labelledby="pills-tasks-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4>Example</h4>
                                    <div class="assigned d-flex mt1">
                                        <label for="">Assigned To:</label>
                                        <p>Joseph</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="transaction-det d-flex">
                                        <label for="">Transaction Address: </label>
                                        <p>4329 Saint Dominic, St Ann, MO 63074-1110</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="due-date-det d-flex">
                                                <label for="">Due Date: </label>
                                                <p>10/07/2021</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="progress-drop-down">
                                                <select name="" id="" class="csSelect">
                                                    <option value="In Progress">In Progess</option>
                                                    <option value="In Progress">Awaiting Response</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 d-flex justify-content-end align-items-center">
                                    <i class="fas fa-ellipsis-v fa-2x"></i>
                                    <div class="task-menu">
                                        <ul>
                                            <li>View</li>
                                            <li>View</li>
                                            <li>View</li>
                                            <li>View</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--My tasks tab -->
                        <div class="tab-pane fade" id="pills-my-tasks" role="tabpanel" aria-labelledby="pills-my-tasks-tab">.p..</div>
                        <!--Assigned to me -->
                        <div class="tab-pane fade" id="pills-assigned-task" role="tabpanel" aria-labelledby="pills-assigned-task-tab">..d.</div>
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