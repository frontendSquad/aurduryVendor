<?php
$title = "My Profile";
$pg = "my-profile";
include('../include/header.php');
?>
<!-- Basic form layout section start -->
<section id="protfolio_page" class="profile-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h2>Account Details</h2>
            </div>
        </div>
    </div>
    <div class="content-body shadow-sm bg-white rounded-10 p-4 p-lg-5">
        <div class="row">
            <div class="col-md-6">
                <div class="profile-img text-center m-auto m-md-0">
                    <img src="../assets/images/paymentCard.png" class="img-fluid ml-0" alt="">
                </div>
            </div>
            <div class="col-md-6 detail-block">
                <div class="media-body flex-grow-1">
                <div class="row mb-3">
                        <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                            <label for="">Card Details</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                            <label for="">Name on Card:</label>
                        </div>
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <p>Mark</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                            <label for="">Card Number:</label>
                        </div>
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <p>1001 1001 1001 1001</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                            <label for="">Valid Till:</label>
                        </div>
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <p>07/20</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                            <label for="">CVV:</label>
                        </div>
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <p>234</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 d-flex text-center">
                            <div class="d-flex flex-column">
                                <a href="edit-account.php" class="btn btn-blue">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>