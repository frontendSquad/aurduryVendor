<?php
$title = "View Report Order Log";
$pg = "report-order-log";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="view-report-order" class="view-report-order-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-12">
                <h2><a href="report-order-log.php"><i class="fas fa-arrow-left"></i></a> Reported Order Details</h2>
            </div>
        </div>
    </div>

    <div class="order-account bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-xl-8 col-md-12">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <h5 class="fs-20 fw-bold text-black mb-2">Name <span class="text-red">*</span></h5>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-12">
                        <h6 class="fs-20 fw-regular text-black mb-0">ABC</h6>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <h5 class="fs-20 fw-bold text-black mb-2">Email <span class="text-red">*</span></h5>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-12">
                        <h6 class="fs-20 fw-regular text-black mb-0">abc@xyz.com</h6>
                    </div>
                </div>
                <div class="row align-items-start my-4">
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <h5 class="fs-20 fw-bold text-black mb-2">Images <span class="text-red">*</span></h5>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-2">
                                    <img src="../assets/images/gallery-1.png" alt="" class="img-fluid shadow-small rounded-10">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="mb-2">
                                    <img src="../assets/images/gallery-2.png" alt="" class="img-fluid shadow-small rounded-10">
                                </div>
                                <div>
                                    <img src="../assets/images/gallery-3.png" alt="" class="img-fluid shadow-small rounded-10">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="mb-2">
                                    <img src="../assets/images/gallery-4.png" alt="" class="img-fluid shadow-small rounded-10">
                                </div>
                                <div>
                                    <img src="../assets/images/gallery-5.png" alt="" class="img-fluid shadow-small rounded-10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <h5 class="fs-20 fw-bold text-black mb-2">Issue Description <span class="text-red">*</span></h5>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-12">
                        <h6 class="fs-20 fw-regular text-black mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>