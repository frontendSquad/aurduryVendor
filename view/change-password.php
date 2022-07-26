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
                <h2><a href="profile.php"><i class="fa fa-chevron-left"></i></a> Change Password</h2>
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
                    <div class="row form-group">
                        <div class="col-md-6 login-card">
                            <div class="form-group">
                                <div class="position-relative">
                                    <div class="enter-password d-flex align-items-center justify-content-center">
                                        <i class="fas fa-unlock-alt"></i>
                                    </div>
                                    <input type="password" class="form-control show-input-2"
                                        placeholder="Enter Current Password">
                                    <button class="btn view-btn show-btn-2 position-absolute"
                                        onclick="event.preventDefault()">
                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6 login-card">
                            <div class="form-group">
                                <div class="position-relative">
                                    <div class="enter-password d-flex align-items-center justify-content-center">
                                        <i class="fas fa-unlock-alt"></i>
                                    </div>
                                    <input type="password" class="form-control show-input-2"
                                        placeholder="Enter New Password">
                                    <button class="btn view-btn show-btn-2 position-absolute"
                                        onclick="event.preventDefault()">
                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6 login-card">
                            <div class="form-group">
                                <div class="position-relative">
                                    <div class="enter-password d-flex align-items-center justify-content-center">
                                        <i class="fas fa-unlock-alt"></i>
                                    </div>
                                    <input type="password" class="form-control show-input-2"
                                        placeholder="Re-Enter New Password">
                                    <button class="btn view-btn show-btn-2 position-absolute"
                                        onclick="event.preventDefault()">
                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                    </button>
                                </div>
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