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
                <h2>Profile</h2>
            </div>
        </div>
    </div>
    <div class="content-body shadow-sm bg-white rounded-10 p-4 p-lg-5">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-10">
                <div class="detail-block media d-lg-flex d-block">
                    <div class="media-left flex-shrink-0 mb-5 mb-lg-0">
                        <div class="profile-img text-center m-auto m-md-0">
                            <img src="../assets/images/profile-avatar.png" class="img-fluid ml-0" alt="">
                        </div>
                    </div>
                    <div class="media-body flex-grow-1">
                        <div class="row mb-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">First Name</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>Mark</p>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">Last Name:</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>Williams</p>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">Email Address:</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>email@example.com</p>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">Phone Number:</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>+35699859200</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                            <p><a href="change-password.php" class="inline-link mt-2">Change Password</a></p>
                            </div>
                            <div class="col-12 mt-5 d-flex text-center">
                                <div class="d-flex flex-column">
                                    <a href="edit-profile.php" class="btn btn-blue">Edit</a>
                                </div>
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