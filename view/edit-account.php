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
                <div class="bg-light2 rounded-10 text-center p-4">
                    <div class="media-left flex-shrink-0 mb-5 mb-lg-3">
                        <div class="profile-img text-center m-auto m-md-0">
                            <div class="attached">
                                <button name="file" class="btn p-0" onclick="document.getElementById('upload').click()">
                                    <img src="../assets/images/upload-img.png" class="img-fluid ml-0" alt="">
                                    <input type="file" id="upload" name="file">
                                </button>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-dark">Upload Image</button>
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
                        <div class="col-md-12 mb-4">
                            <label for="" class="mb-3">Name on Card <span class="status not-paid">*</span></label>
                            <div class="form-group">
                                <input type="text" class="form-control w-100 fs-16 fw-normal bg-light2"
                                    placeholder="Enter Name On Card">
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="" class="mb-3">Card Number <span class="status not-paid">*</span></label>
                            <div class="form-group">
                                <input type="text" class="form-control w-100 fs-16 fw-normal bg-light2"
                                    placeholder="Enter Card Number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="" class="mb-3">Valid Through <span class="status not-paid">*</span></label>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <input type="text" class="form-control w-100 fs-16 fw-normal bg-light2"
                                    placeholder="Month">
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <input type="text" class="form-control w-100 fs-16 fw-normal bg-light2"
                                    placeholder="Year">
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="" class="mb-3">CVV Number <span class="status not-paid">*</span></label>
                            <div class="form-group">
                                <input type="number" class="form-control w-100 fs-16 fw-normal bg-light2"
                                    placeholder="Enter CVV Number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="sunmit" class="btn btn-blue" data-bs-toggle="modal" data-bs-target=".account-updated">Update</button>
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