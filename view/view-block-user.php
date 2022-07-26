<?php
$title = "User Management";
$pg = "user-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="view-block-user" class="view-block-user-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-6">
                <h2><a href="blocked-user.php"><i class="fas fa-arrow-left"></i></a> Blocked User</h2>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-10 shadow mb-5 p-md-5 p-3">
        <div class="row">
            <div class="col-sm-6 col-xl-2 order-xl-1 order-sm-1 order-2 text-xl-center">
                <img src="../assets/images/user-avatar.png" alt="" class="img-fluid">
            </div>
            <div class="col-sm-12 col-xl-6 order-xl-2 order-sm-3 order-3 mt-xl-0 mt-4">
                <h4 class="fs-25 fw-bold text-black mb-3">User Profile</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <h5 class="fs-18 fw-bold text-black">User ID:</h5>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fs-18 fw-regular text-black">001</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h5 class="fs-18 fw-bold text-black">Full Name:</h5>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fs-18 fw-regular text-black">Joshua Rozario</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h5 class="fs-18 fw-bold text-black">Email Address:</h5>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fs-18 fw-regular text-black">joshuarozario17@gmail.com</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h5 class="fs-18 fw-bold text-black">Registration Date:</h5>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fs-18 fw-regular text-black">mm/dd/yyyy</h6>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <a href="edit-block-user.php" class="btn btn-blue">Edit</a href="edit-block-user.php">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4 order-xl-3 order-sm-2 order-1 mb-sm-0 mb-4">
                <div class="dataTables_length order_select d-block d-md-flex align-items-center justify-content-end">
                    <label class="d-inline-md-block d-block me-4 fs-16 fw-bold text-black">Status:</label>
                    <div class="d-block d-md-flex">
                        <div class="select-wrapper select-drop d-block d-inline-md-block w-auto">
                            <select class="form-control d-inline-block">
                                <option value="Unblock">Unblock</option>
                                <option value="Block">Block</option>
                            </select>
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