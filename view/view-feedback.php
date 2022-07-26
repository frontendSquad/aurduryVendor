<?php
$title = "View Feedback";
$pg = "feedback-listing";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="view-feedback" class="view-feedback-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-12">
                <h2><a href="feedback-listing.php"><i class="fas fa-arrow-left"></i></a> Feedback Details</h2>
            </div>
        </div>
    </div>

    <div class="order-account bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-xxl-6 col-xl-8 col-md-10 col-12">
                <div class="order-info d-block d-sm-flex align-items-center mb-2">
                    <h5 class="fs-20 fw-bold text-black mb-2">Name <span class="text-red">*</span></h5>
                    <h6 class="fs-20 fw-regular text-black mb-0">Joshua Rozario</h6>
                </div>
                <div class="order-info d-block d-sm-flex align-items-center mb-2">
                    <h5 class="fs-20 fw-bold text-black mb-2">Email <span class="text-red">*</span></h5>
                    <h6 class="fs-20 fw-regular text-black mb-0">abc@xyz.com</h6>
                </div>
                <div class="order-info d-block d-sm-flex align-items-center mb-2">
                    <h5 class="fs-20 fw-bold text-black mb-2">Subject <span class="text-red">*</span></h5>
                    <h6 class="fs-20 fw-regular text-black mb-0">ABCX</h6>
                </div>
                <div class="order-info d-block d-sm-flex align-items-start mb-2">
                    <h5 class="fs-20 fw-bold text-black mb-2">Message <span class="text-red">*</span></h5>
                    <h6 class="fs-20 fw-regular text-black mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>