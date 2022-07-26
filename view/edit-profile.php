<?php
$title = "Edit Profile";
$pg = "edit-profile";
include('../include/header.php');
?>
<!-- Basic form layout section start -->
<section id="protfolio_edit_page" class="profile-edit-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h2><a href="profile.php"><i class="fa fa-chevron-left"></i></a> Edit Profile</h2>
            </div>
        </div>
    </div>
    <div class="content-body shadow-sm bg-white rounded-10 p-4 p-lg-5">
        <div class="detail-block media d-lg-flex d-block">
            <div class="media-left flex-shrink-0 mb-5 mb-lg-0">
                <div class="profile-img text-center m-auto m-md-0">
                    <div class="attached">
                        <img src="../assets/images/avatar.png" class="img-fluid ml-0" alt="">
                        <button name="file" class="btn camera-btn" onclick="document.getElementById('upload').click()">
                            <i class="fa fa-camera"></i></button>
                        <input type="file" id="upload" name="file">
                    </div>
                </div>
            </div>
            <div class="media-body flex-grow-1 ps-0 ps-lg-5 ms-0 ms-lg-3">
                <form action="">
                    <div class="row mb-2">
                        <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                            <label for="">Business Owner ID:</label>
                        </div>
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <p>Joshua Rozario</p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                            <label for="">Email:</label>
                        </div>
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <p>joshuarozario17@email.com</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6 login-card">
                            <div class="form-group position-relative">
                                <div class="enter-email d-flex align-items-center justify-content-center">
                                    <i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control login-shadow fs-16 fw-regular text-gray"
                                    placeholder="Enter Full Name*">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6 login-card">
                            <div class="form-group position-relative">
                                <div class="enter-email d-flex align-items-center justify-content-center">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <input type="tel" class="form-control login-shadow fs-16 fw-regular text-gray"
                                    placeholder="Enter Phone Number*">
                            </div>
                        </div>
                    </div>
                    <div class="row detail-row">
                        <div class="col-12">
                            <a href="profile.php" class="btn btn-blue px-5 me-3">Update</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>