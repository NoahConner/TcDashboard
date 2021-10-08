<!DOCTYPE html>
<html lang="en">
<?php include './assets/commons/head.php' ?>

<body>

    <!-- navbar -->
    <?php include('./assets/commons/navbar.php') ?>


    <div class="mainDiv my-scrollbar" data-scrollbar>

        <div class="main d-flex">
            <!-- sider -->
            <?php include('./sider.php') ?>
            <div class="content mt2">
                <div class="transiction-inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="transaction.php">
                                    <div class="back">
                                        <i class="fa fa-arrow-left"></i>
                                        <span>Back To Transaction</span>
                                    </div>
                                </a>
                                <button class="blueBtnRound squareBtn">Save</button>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="transactionHeading mt3 d-flex align-items-center">
                        <h3>
                            4329 Saint Dominic, St Ann, MO 63074-1110
                        </h3>
                        <i class="fas fa-pencil-alt TranspencileIcon"></i>
                    </div>
                    <!-- type Status drop -->
                    <div class="row">
                        <div class="col-lg-6 d-flex flex-column mb2 mt2">
                            <label for="">Type</label>
                            <select name="" id="" class="csSelect">
                                <option value="Listing for Sale">Listing for Sale</option>
                            </select>
                        </div>

                        <div class="col-lg-6 d-flex flex-column mb2 mt2">
                            <label for="">Status</label>
                            <select name="" id="" class="csSelect">
                                <option value="Dummy Role">Dummy Role</option>
                            </select>
                        </div>
                    </div>

                    <!-- people heading -->
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mainH1">
                            People
                        </h1>
                        <button class="blueBtnRound">Add</button>
                    </div>
                    <!-- listing team -->
                    <div class="cardSec">
                        <div class="limBlueCard limcustom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h2>
                                        Ethan Nizami
                                    </h2>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" d-flex align-items-center">
                                        <label for="">Role: </label>
                                        <span>Listing Agent</span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-lg-4">
                                    <select name="" id="">
                                        <option value="">Co-Seller Agent</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <div class="phMail d-flex align-items-center">
                                        <label for="">Phone: </label>
                                        <span>78945612</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="phMail d-flex align-items-center">
                                        <label for="">Email: </label>
                                        <span>ethan@yahoo.com</span>
                                    </div>
                                </div>
                            </div> -->

                            <div class="dots">
                                <i class="fa fa-ellipsis-v"></i>
                            </div>
                        </div>
                        <div class="limBlueCard limcustom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h2>
                                        Ethan Nizami
                                    </h2>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" d-flex align-items-center">
                                        <label for="">Role: </label>
                                        <span>Listing Agent</span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-lg-4">
                                    <select name="" id="">
                                        <option value="">Co-Seller Agent</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <div class="phMail d-flex align-items-center">
                                        <label for="">Phone: </label>
                                        <span>78945612</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="phMail d-flex align-items-center">
                                        <label for="">Email: </label>
                                        <span>ethan@yahoo.com</span>
                                    </div>
                                </div>
                            </div> -->

                            <div class="dots">
                                <i class="fa fa-ellipsis-v"></i>
                            </div>
                        </div>
                    </div>
                    <!-- buyer Team -->
                    <div class="mt2 d-flex align-items-center justify-content-between">
                        <h1 class="mainH1">
                            Buyer Team
                        </h1>

                    </div>
                    <div class="cardSec">
                        <div class="limBlueCard">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>
                                        Ethan Nizami
                                    </h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <select name="" id="">
                                        <option value="">Co-Seller Agent</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <div class="phMail d-flex align-items-center">
                                        <label for="">Phone: </label>
                                        <span>78945612</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="phMail d-flex align-items-center">
                                        <label for="">Email: </label>
                                        <span>ethan@yahoo.com</span>
                                    </div>
                                </div>
                            </div>

                            <div class="dots">
                                <i class="fa fa-ellipsis-v"></i>
                            </div>
                        </div>

                    </div>
                    <!-- Address -->
                    <div class="mt3 d-flex align-items-center justify-content-between">
                        <h1 class="mainH1">
                            Address
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column mt3 mb3">
                            <label for="">Address</label>
                            <div class="searchInp">
                                <input type="text" placeholder="Search">
                                <i class="fa fa-search"></i>
                            </div>
                            <label>
                                We'll suggest addresses or listings that match.
                            </label>
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">Country</label>
                            <select name="" id="" class="csSelect">
                                <option value="USA">USA</option>
                            </select>
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">Street Number</label>
                            <input type="text" value="4329">
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">Street Name</label>
                            <input type="text" value="Saint Dominic">
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">Unit Number</label>
                            <input type="text" value="789">
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">City</label>
                            <input type="text" value="New York City">
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for=""> State/Prov</label>
                            <input type="text" value="New York">
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">Zip/Postal Code </label>
                            <input type="text" value="63074">
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">County </label>
                            <input type="text" value="New York">
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for=""> MLS Number</label>
                            <input type="text" value="75850">
                        </div>
                    </div>

                    <!-- Financials -->
                    <div class="mt3 mb2 d-flex align-items-center justify-content-between">
                        <h1 class="mainH1">
                            Financials
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">Sale Comission Split $ - Listing Side</label>
                            <input type="text" value="Dummy">
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">Sale Comission Split $ - Buy Side</label>
                            <input type="text" value="Dummy">
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">Sale Comission Total</label>
                            <input type="text" value="Dummy">
                        </div>
                    </div>

                    <!-- Contract Dates -->
                    <div class="mt3 mb2 d-flex align-items-center justify-content-between">
                        <h1 class="mainH1">
                            Contract Dates
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">Executed Date</label>
                            <input type="text" value="Dummy">
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">Closing Date</label>
                            <input type="text" value="Dummy">
                        </div>
                    </div>


                    <!-- Offer Dates -->
                    <div class="mt3 mb2 d-flex align-items-center justify-content-between">
                        <h1 class="mainH1">
                            Offer Dates
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">transaction date</label>
                            <input type="date" value="Dummy">
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">Offer Date</label>
                            <input type="date" value="Dummy">
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">Offer Expiration Date</label>
                            <input type="date" value="Dummy">
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb3">
                            <label for="">Occupancy Date</label>
                            <input type="date" value="Dummy">
                        </div>
                    </div>





                    <div class="forbottommargin mb4">

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
<!-- Modal -->
<!-- <div class="modal fade" id="add-trans" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <h1 class="mt1 mb2">Add a Transaction</h1>
                <div class="add-transaction-box">
                    <div class="container">
                        <div class="row mt4">
                            <div class="col-lg-12 d-flex flex-column mb3">
                                <label for="">Property Address or MSL no.</label>
                                <input type="text" value="4329 Saint Dominic, St Ann, MO 63074-1110">
                                <label for="" class="add-bottom-lab">
                                    Unsure of the property address? Put in your client's name for now – you can always change it later.
                                </label>
                            </div>
                            <div class="col-lg-6 d-flex flex-column mb3">
                                <label for="">Type</label>
                                <select name="" id="" class="csSelect">
                                    <option value="Listing for Sale">Listing for Sale</option>
                                </select>
                            </div>
                            <div class="col-lg-6 d-flex flex-column mb3">
                                <label for="">Status</label>
                                <select name="" id="" class="csSelect">
                                    <option value="Active Listing">Active Listing</option>
                                </select>
                            </div>
                            <div class="col-lg-6 d-flex flex-column mb3">
                                <label for="">Listing</label>
                                <input type="text" value="$5000">
                            </div>
                            <div class="col-lg-6 d-flex flex-column mb3">
                                <label for="">Closing Date</label>
                                <input type="date" name="" id="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="save-cancel-btn d-flex justify-content-end mt2 mb2">
                    <button class="cancel-btn mr1" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class='save-btn'>Save</button>
                </div>
            </div>
        </div>
    </div>
</div> -->

</html>