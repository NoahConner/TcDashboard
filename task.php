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
                        <h1 class="mainH1">Task</h1>
                        <div class="save-cancel-btn d-flex justify-content-end mb3">
                            <button class="save-btn">Add</button>
                        </div>
                    </div>
                    <ul class="nav nav-pills mb-3" id="pills-tabTask" role="tablist">
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

                    <!-- tabs -->
                    <div class="tab-content" id="pills-tabTaskContent">

                        <!-- All tasks tab -->
                        <div class="tab-pane fade show active all-tasks-tab" id="pills-tasks" role="tabpanel" aria-labelledby="pills-tasks-tab">
                            <div class="cardSec task">
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--My tasks tab -->
                        <div class="tab-pane fade" id="pills-my-tasks" role="tabpanel" aria-labelledby="pills-my-tasks-tab">
                            <div class="cardSec task">
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Assigned to me -->
                        <div class="tab-pane fade" id="pills-assigned-task" role="tabpanel" aria-labelledby="pills-assigned-task-tab">
                            <div class="cardSec task">
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                </div>
                                <div class="limBlueCard">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-between">
                                            <h2>
                                                Ethan Hunt
                                            </h2>

                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Transaction Adress: </label>
                                                <span>4329 Saint Dominic, St Ann, MO 63074-1110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Assigned to: </label>
                                                <span>Joseph</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="phMail d-flex align-items-center">
                                                <label for="">Due Date: </label>
                                                <span>9/8/2021</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="" id="">
                                                <option value="">Awaiting Respose</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="dots">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
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