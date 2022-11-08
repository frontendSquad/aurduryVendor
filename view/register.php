<?php
$title = "Login";
$pg = "Login In";
include('../include/head.php');
?>

<section class="login-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo"><img src="../assets/images/logo.png" alt="" /></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row maginTop">
            <div class="col-12">
                <div class="login-card bg-img p-0">
                    <div class="row justify-content-end">
                        <div class="col-12 col-lg-5">
                            <!-- step form -->
                            <form id="regForm" action="#">
                                <!-- One "tab" for each step in the form: -->
                                <div class="tab">
                                    <h1 class="fs-40 fw-bold text-black">Don't have an account?
                                        Create new</h1>
                                    <div class="form-group position-relative">
                                        <div class="enter-email d-flex align-items-center justify-content-center">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <input type="text" class="form-control login-shadow fs-16 fw-regular text-gray" placeholder="Enter Your Name*">
                                    </div>
                                    <div class="form-group position-relative">
                                        <div class="enter-email d-flex align-items-center justify-content-center">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <input type="email" class="form-control login-shadow fs-16 fw-regular text-gray" placeholder="Enter Your Email Address*">
                                    </div>
                                    <div class="form-group position-relative">
                                        <div class="enter-email d-flex align-items-center justify-content-center">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <input type="number" class="form-control login-shadow fs-16 fw-regular text-gray" placeholder="Enter Phone Number*">
                                    </div>
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <div class="enter-password d-flex align-items-center justify-content-center">
                                                <i class="fas fa-unlock-alt"></i>
                                            </div>
                                            <input type="password" class="form-control enter-input login-shadow fs-16 fw-regular text-gray" placeholder="Enter Password*">
                                            <button class="btn view-btn position-absolute" onclick="event.preventDefault()">
                                                <i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="position-relative">
                                            <div class="enter-password d-flex align-items-center justify-content-center">
                                                <i class="fas fa-unlock-alt"></i>
                                            </div>
                                            <input type="password" class="form-control enter-input login-shadow fs-16 fw-regular text-gray" placeholder="Enter Confirm Password*">
                                            <button class="btn view-btn position-absolute" onclick="event.preventDefault()">
                                                <i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <h1 class="fs-40 fw-bold text-black">Details For The Business</h1>
                                    <div class="form-group position-relative">
                                        <div class="enter-email d-flex align-items-center justify-content-center">
                                            <i class="fas fa-store"></i>
                                        </div>
                                        <input name="storename" type="text" placeholder="Enter Store Name" class="form-control login-shadow fs-16 fw-regular text-gray">
                                    </div>
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <div class="enter-password d-flex align-items-center justify-content-center">
                                                <i class="fas fa-building"></i>
                                            </div>
                                            <input type="text" class="form-control login-shadow fs-16 fw-regular text-gray" placeholder="Enter Business Type">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <div class="enter-password d-flex align-items-center justify-content-center">
                                                <i class="fas fa-flag"></i>
                                            </div>
                                            <select name="country" id="" class="form-control login-shadow fs-16 fw-regular text-gray" style="padding-left: 60px;">
                                                <option value="">Select Country Name</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <div class="enter-password d-flex align-items-center justify-content-center">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                            <select name="city" id="" class="form-control login-shadow fs-16 fw-regular text-gray" style="padding-left: 60px;">
                                                <option value="">Select City/State</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="" id="" cols="30" rows="3" class="rounded-10" placeholder="Enter Business Description"></textarea>
                                    </div>
                                </div>
                                <div class="tab">
                                    <h1 class="fs-40 fw-bold text-black">Details For The Business</h1>
                                    <div class="form-group position-relative">
                                        <div class="enter-email d-flex align-items-center justify-content-center">
                                            <i class="fas fa-store"></i>
                                        </div>
                                        <input type="number" class="form-control login-shadow fs-16 fw-regular text-gray" placeholder="Enter Card Number*">
                                    </div>
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <div class="enter-password d-flex align-items-center justify-content-center">
                                                <i class="fas fa-building"></i>
                                            </div>
                                            <input type="number" class="form-control login-shadow fs-16 fw-regular text-gray" placeholder="Enter Card Number*">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <div class="enter-password d-flex align-items-center justify-content-center">
                                                <i class="fas fa-flag"></i>
                                            </div>
                                            <input type="number" class="form-control login-shadow fs-16 fw-regular text-gray" placeholder="CVV Number*">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <div class="enter-password d-flex align-items-center justify-content-center">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                            <input type="number" class="form-control login-shadow fs-16 fw-regular text-gray" placeholder="Expiry Minth/Year*">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-5">
                                    <button type="button" id="prevBtn" class="btn btn-blue btn-login w-100 fs-20 fw-bold d-none" onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" id="nextBtn" class="btn btn-blue btn-login w-100 fs-20 fw-bold" onclick="nextPrev(1)">Continue</button>
                                </div>
                                <!-- Circles which indicates the steps of the form: -->
                                <div style="text-align:center;margin-top:40px;">
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                </div>
                            </form>
                            <button data-bs-target=".sign-up" data-bs-toggle="modal" id="sign-up" class="d-none"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../include/footer.php'); ?>