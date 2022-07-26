<?php
$title = "Vendor Management";
$pg = "vendor-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="view-vendor-approval" class="view-vendor-approval-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-6">
                <h2><a href="vendor-approval.php"><i class="fas fa-arrow-left"></i></a> Vendor Profile</h2>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-10 shadow mb-5 p-md-5 p-3">
        <div class="row">
            <div class="col-sm-6 col-xl-12 col-xxl-2 text-xl-center">
                <img src="../assets/images/user-avatar.png" alt="" class="img-fluid">
            </div>
            <div class="col-sm-12 col-xl-12 col-xxl-10 mt-xl-0 mt-4">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Admin Commission:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">$10</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Vendor ID:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">001</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Full Name:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">Joshua Rozario</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Email Address:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">joshuarozario17@gmail.com</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Registration Date:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">mm/dd/yyyy</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Phone:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">11233444</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Card Number:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">1001 1001 1001 1001</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Store Name:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">abc</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Business Type:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">abc</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Country:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">abc</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">City:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">abc</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">User ID:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">001</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Business Overview: </h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">abc</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="#" class="btn btn-green">Accept</a>
                    <a href="#" class="btn btn-red">Reject</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>