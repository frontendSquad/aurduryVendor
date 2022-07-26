<?php
$title = "Store Management";
$pg = "store-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="view-store-listing" class="view-store-listing-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-6">
                <h2><a href="view-store-listing.php"><i class="fas fa-arrow-left"></i></a> Store A</h2>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-10 shadow mb-5 p-md-5 p-3">
        <div class="row">
            <div class="col-sm-6 col-xl-12 col-xxl-2 text-xl-center">
                <img src="../assets/images/user-avatar.png" alt="" class="img-fluid">
            </div>
            <div class="col-sm-12 col-xl-12 col-xxl-10 mt-xl-0 mt-4">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <h5 class="fs-18 fw-bold text-black">Vendor ID:</h5>
                            </div>
                            <div class="col-sm-9">
                                <h6 class="fs-18 fw-regular text-black">001</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h5 class="fs-18 fw-bold text-black">Full Name:</h5>
                            </div>
                            <div class="col-sm-9">
                                <h6 class="fs-18 fw-regular text-black">Joshua Rozario</h6>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-md-12">
                                <img src="../assets/images/view-store.png" alt="" class="img-fluid shadow-small">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h5 class="fs-18 fw-bold text-black">Store Description:</h5>
                            </div>
                            <div class="col-sm-9">
                                <textarea rows="5" class="rounded-10 border-0 shadow-medium p-4 fs-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
                                <!-- <h6 class="fs-18 fw-regular text-black"></h6> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="#" class="btn btn-blue">Update</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>