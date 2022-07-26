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
                            <h1 class="fs-40 fw-bold text-black">Don't have an account?
                                Create new</h1>
                            <!-- step form -->
                            <form id="regForm" action="/action_page.php">
                                <!-- One "tab" for each step in the form: -->
                                <div class="tab">
                                    <div class="form-group position-relative">
                                        <div class="enter-email d-flex align-items-center justify-content-center">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <input type="text" class="form-control login-shadow fs-16 fw-regular text-gray"
                                            placeholder="Enter Your Name*">
                                    </div>
                                    <div class="form-group position-relative">
                                        <div class="enter-email d-flex align-items-center justify-content-center">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <input type="email" class="form-control login-shadow fs-16 fw-regular text-gray"
                                            placeholder="Enter Your Email Address*">
                                    </div>
                                    <div class="form-group position-relative">
                                        <div class="enter-email d-flex align-items-center justify-content-center">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <input type="number" class="form-control login-shadow fs-16 fw-regular text-gray"
                                            placeholder="Enter Phone Number*">
                                    </div>
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <div
                                                class="enter-password d-flex align-items-center justify-content-center">
                                                <i class="fas fa-unlock-alt"></i>
                                            </div>
                                            <input type="password"
                                                class="form-control enter-input login-shadow fs-16 fw-regular text-gray"
                                                placeholder="Enter Password*">
                                            <button class="btn view-btn position-absolute"
                                                onclick="event.preventDefault()">
                                                <i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="position-relative">
                                            <div
                                                class="enter-password d-flex align-items-center justify-content-center">
                                                <i class="fas fa-unlock-alt"></i>
                                            </div>
                                            <input type="password"
                                                class="form-control enter-input login-shadow fs-16 fw-regular text-gray"
                                                placeholder="Enter Confirm Password*">
                                            <button class="btn view-btn position-absolute"
                                                onclick="event.preventDefault()">
                                                <i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="form-group position-relative">
                                        <div class="enter-email d-flex align-items-center justify-content-center">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <input id="phone" name="phone" type="tel">
                                    </div>
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <div
                                                class="enter-password d-flex align-items-center justify-content-center">
                                                <i class="fas fa-unlock-alt"></i>
                                            </div>
                                            <input type="password"
                                                class="form-control enter-input login-shadow fs-16 fw-regular text-gray"
                                                placeholder="********">
                                            <button class="btn view-btn position-absolute"
                                                onclick="event.preventDefault()">
                                                <i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="form-group position-relative">
                                        <div class="enter-email d-flex align-items-center justify-content-center">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <input type="email" class="form-control login-shadow fs-16 fw-regular text-gray"
                                            placeholder="Enter Your Email Address">
                                    </div>
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <div
                                                class="enter-password d-flex align-items-center justify-content-center">
                                                <i class="fas fa-unlock-alt"></i>
                                            </div>
                                            <input type="password"
                                                class="form-control enter-input login-shadow fs-16 fw-regular text-gray"
                                                placeholder="********">
                                            <button class="btn view-btn position-absolute"
                                                onclick="event.preventDefault()">
                                                <i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="form-group position-relative">
                                        <div class="enter-email d-flex align-items-center justify-content-center">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <input type="email" class="form-control login-shadow fs-16 fw-regular text-gray"
                                            placeholder="Enter Your Email Address">
                                    </div>
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <div
                                                class="enter-password d-flex align-items-center justify-content-center">
                                                <i class="fas fa-unlock-alt"></i>
                                            </div>
                                            <input type="password"
                                                class="form-control enter-input login-shadow fs-16 fw-regular text-gray"
                                                placeholder="********">
                                            <button class="btn view-btn position-absolute"
                                                onclick="event.preventDefault()">
                                                <i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-5">
                                    <!-- <button type="button" id="prevBtn" class="btn btn-blue btn-login w-100 fs-20 fw-bold" onclick="nextPrev(-1)">Previous</button> -->
                                    <button type="button" id="nextBtn"
                                        class="btn btn-blue btn-login w-100 fs-20 fw-bold"
                                        onclick="nextPrev(1)">Continue</button>
                                </div>
                                <!-- Circles which indicates the steps of the form: -->
                                <div style="text-align:center;margin-top:40px;">
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../include/footer.php'); ?>