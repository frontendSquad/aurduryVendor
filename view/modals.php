<!--------------------------
    ------ LogOut Modal START
---------------------------------->
<div class="modal fade profile-logout p-0" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/block-user.png" alt="" class="modal-icon">
                        <h3 class="modal-title text-center">Are You Sure You Want To Logout Of Your Account?</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row">
                <button type="button" class="btn btn-primary mx-lg-2" data-bs-toggle="modal" data-bs-dismiss="modal" aria-bs-label="Close" data-bs-target=".profile-logout-confirm">Yes</button>
                <button type="button" class="btn btn-secondary mx-lg-2" data-bs-dismiss="modal" aria-bs-label="Close">No</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade profile-logout-confirm p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="modal-icon">
                        <h3 class="modal-title text-center">You Have Been Logged Out Of Your Account.</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row">
                <button type="button" class="btn btn-primary ml-0 ml-sm-1" data-bs-dismiss="modal" aria-bs-label="Close">Ok</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ LogOut Modal END
---------------------------------->

<!--------------------------
    ------ Login Page START
---------------------------------->
<div class="modal fade reset-password p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <i class="fa fa-check-circle mb-3"></i>
                        <h3 class="modal-title text-center">The password has been reset successfully</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="login.php" class="btn btn-primary">Login now</a>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Login Page END
---------------------------------->

<!--------------------------
    User Listing Start
---------------------------------->
<!-- Block User -->
<div class="modal fade user-blocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/block-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Are You Sure You Want To <br>Block This User?</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">Yes</a>
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-dark fs-18 lh-21 fw-regular">No</a>
            </div>
        </div>
    </div>
</div>

<!-- Unblock User -->
<div class="modal fade user-unblocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/block-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Are You Sure You Want To <br>Unblock This User?</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-toggle="modal" data-bs-target=".user-confirm-unblocked" class="btn btn-blue fs-18 lh-21 fw-bold">Yes</a>
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-dark fs-18 lh-21 fw-regular">No</a>
            </div>
        </div>
    </div>
</div>

<!-- Confirm Unblock User -->
<div class="modal fade user-confirm-unblocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">User ABC Has Been Unblocked</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">Continue</a>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    User Listing End
---------------------------------->

<!--------------------------
    Vendor Listing Start
---------------------------------->
<!-- Block User -->
<div class="modal fade vendor-blocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/block-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Are You Sure You Want To <br>Block This Vendor?</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-toggle="modal" data-bs-target=".vendor-confirm-blocked" class="btn btn-blue fs-18 lh-21 fw-bold">Yes</a>
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-dark fs-18 lh-21 fw-regular">No</a>
            </div>
        </div>
    </div>
</div>

<!-- Confirm Block User -->
<div class="modal fade vendor-confirm-blocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Vendor ABC Has Been Blocked</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">Continue</a>
            </div>
        </div>
    </div>
</div>

<!-- Unblock User -->
<div class="modal fade vendor-unblocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/block-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Are You Sure You Want To <br>Unblock This Vendor?</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-toggle="modal" data-bs-target=".vendor-confirm-unblocked" class="btn btn-blue fs-18 lh-21 fw-bold">Yes</a>
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-dark fs-18 lh-21 fw-regular">No</a>
            </div>
        </div>
    </div>
</div>

<!-- Confirm Unblock User -->
<div class="modal fade vendor-confirm-unblocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Vendor ABC Has Been Unblocked</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">Continue</a>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    Vendor Listing End
---------------------------------->

<!--------------------------
    Store Start
---------------------------------->
<!-- Block User -->
<div class="modal fade store-blocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/block-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Are You Sure You Want To <br>Inactive Abc Product?</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-toggle="modal" data-bs-target=".store-confirm-blocked" class="btn btn-blue fs-18 lh-21 fw-bold">Yes</a>
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-dark fs-18 lh-21 fw-regular">No</a>
            </div>
        </div>
    </div>
</div>

<!-- Confirm Block User -->
<div class="modal fade store-confirm-blocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">ABC Product Has Been Inactivated</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">Continue</a>
            </div>
        </div>
    </div>
</div>

<!-- Unblock User -->
<div class="modal fade store-unblocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/block-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Are You Sure You Want To <br>Active Abc Product?</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-toggle="modal" data-bs-target=".store-confirm-unblocked" class="btn btn-blue fs-18 lh-21 fw-bold">Yes</a>
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-dark fs-18 lh-21 fw-regular">No</a>
            </div>
        </div>
    </div>
</div>

<!-- Confirm Unblock User -->
<div class="modal fade store-confirm-unblocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">ABC Product Has Been Activated</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">Continue</a>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    Store End
---------------------------------->

<!--------------------------
    Category Management Start
---------------------------------->
<!-- Block User -->
<div class="modal fade category-blocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/block-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Are You Sure You Want To <br>Inactive Abc Category?</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-toggle="modal" data-bs-target=".category-confirm-blocked" class="btn btn-blue fs-18 lh-21 fw-bold">Yes</a>
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-dark fs-18 lh-21 fw-regular">No</a>
            </div>
        </div>
    </div>
</div>

<!-- Confirm Block User -->
<div class="modal fade category-confirm-blocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">ABC Category Has Been Inactivated</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">Continue</a>
            </div>
        </div>
    </div>
</div>

<!-- Unblock User -->
<div class="modal fade category-unblocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/block-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Are You Sure You Want To <br>Active Abc Category?</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-toggle="modal" data-bs-target=".category-confirm-unblocked" class="btn btn-blue fs-18 lh-21 fw-bold">Yes</a>
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-dark fs-18 lh-21 fw-regular">No</a>
            </div>
        </div>
    </div>
</div>

<!-- Confirm Unblock User -->
<div class="modal fade category-confirm-unblocked p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">ABC Category Has Been Activated</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">Continue</a>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    Category Management End
---------------------------------->

<!--------------------------
    Payment & Order Status Start
---------------------------------->
<!-- Order Updated -->
<div id="order-updated-status" class="modal fade order-updated p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Order Has Been Updated</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">Continue</a>
            </div>
        </div>
    </div>
</div>

<!-- Payment Updated User -->
<div class="modal fade payment-updated p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Payment Has Been Updated</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">Continue</a>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    Payment & Order Status End
---------------------------------->

<!--------------------------
    Feedback Listing Start
---------------------------------->
<!-- Block User -->
<div class="modal fade feedback-delete p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/block-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Are You Sure You Want To <br>To Delete This Feedback?</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-toggle="modal" data-bs-target=".confirm-delete-feedback" class="btn btn-blue fs-18 lh-21 fw-bold">Yes</a>
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-dark fs-18 lh-21 fw-regular">No</a>
            </div>
        </div>
    </div>
</div>

<!-- Confirm Block User -->
<div class="modal fade confirm-delete-feedback p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Feedback Has Been Deleted</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">Continue</a>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    Feedback Listing End
---------------------------------->

<!--------------------------
    Newsletter Listing Start
---------------------------------->
<!-- Unsubscribe Newsletter -->
<div class="modal fade newsletter-unsubscribe p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/block-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Are You Sure You Want To <br>To Unsubscribe Newsletter?</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-toggle="modal" data-bs-target=".confirm-newsletter-unsubscribe" class="btn btn-blue fs-18 lh-21 fw-bold">Yes</a>
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-dark fs-18 lh-21 fw-regular">No</a>
            </div>
        </div>
    </div>
</div>

<!-- Confirm Unsubscribe Newsletter -->
<div class="modal fade confirm-newsletter-unsubscribe p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h3 class="modal-title text-center">Newsletter Has Been Unsubscribe</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">Continue</a>
            </div>
        </div>
    </div>
</div>








<!-- store Updated -->
<div class="modal fade store-updated p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h4 class="modal-title text-center text-dark pt-4">Payment Has Been Updated</h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">ok</a>
            </div>
        </div>
    </div>
</div>

<!-- add product -->
<div class="modal fade add-product p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h4 class="modal-title text-center text-dark pt-4">Product Added Sucessfully</h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">ok</a>
            </div>
        </div>
    </div>
</div>

<!-- update product -->
<div class="modal fade update-product p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h4 class="modal-title text-center text-dark pt-4">Product Updated Sucessfully</h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">ok</a>
            </div>
        </div>
    </div>
</div>

<!-- Account Detail update -->
<div class="modal fade account-updated p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h4 class="modal-title text-center text-dark pt-4">Account Details Updated</h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">ok</a>
            </div>
        </div>
    </div>
</div>

<!-- Sign up -->
<div class="modal fade sign-up p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/unblock-user.png" alt="" class="img-fluid">
                        <h4 class="modal-title text-center text-dark pt-4">Vendor has been created successfully.</h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-blue fs-18 lh-21 fw-bold">ok</a>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    Newsletter Listing End
---------------------------------->