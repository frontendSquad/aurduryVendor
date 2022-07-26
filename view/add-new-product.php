<?php
$title = "Store Management";
$pg = "store-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="edit-inventory" class="edit-inventory-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
                <h2><a href="inventory-management.php"><i class="fas fa-arrow-left"></i></a> Add New Product</h2>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-block d-sm-flex align-items-center justify-content-between mb-3">
                    <h3 class="fs-25 fw-bold text-black">Base Image</h3>
                    <button class="btn btn-dark shadow-black fs-18">Change</button>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="bg-white shadow-small rounded-10 text-center p-sm-5 p-2">
                    <img src="../assets/images/placeholder.png" alt="" class="img-fluid">
            
                </div>
            </div>
        </div>
    </div>

    <div class="secondary-image bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-block d-sm-flex align-items-center justify-content-between">
                    <h3 class="fs-25 fw-bold text-black">Secondary Image</h3>
                    <button class="btn btn-dark shadow-black fs-18">Add Another</button>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme px-5">
                    <div class="item">
                        <div class="bg-white shadow-small rounded-10 text-center p-sm-5 p-2">
                            <img src="../assets/images/placeholder.png" alt="" class="img-fluid">
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="bg-white shadow-small rounded-10 text-center p-sm-5 p-2">
                            <img src="../assets/images/placeholder.png" alt="" class="img-fluid">
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="bg-white shadow-small rounded-10 text-center p-sm-5 p-2">
                            <img src="../assets/images/placeholder.png" alt="" class="img-fluid">
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="bg-white shadow-small rounded-10 text-center p-sm-5 p-2">
                            <img src="../assets/images/placeholder.png" alt="" class="img-fluid">
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="bg-white shadow-small rounded-10 text-center p-sm-5 p-2">
                            <img src="../assets/images/placeholder.png" alt="" class="img-fluid">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h3 class="fs-25 fw-bold text-black mb-4">Select Category <span class="text-red">*</span></h3>
                <div class="select-wrapper select-drop d-block d-inline-md-block shadow-medium rounded-50">
                    <select class="form-control d-inline-block mnw-100 fs-16 fw-normal text-gray">
                        <option value="Category A">Category A</option>
                        <option value="Category B">Category B</option>
                        <option value="Category C">Category C</option>
                        <option value="Category D">Category D</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-md-6">
                <h3 class="fs-25 fw-bold text-black mb-3">Specifications</h3>
                <p class="fs-20 text-gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fs-25 fw-bold text-black mb-4">Dimensions</h3>
                <div class="row">
                    <div class="col-lg-5 col-md-6 me-lg-5">
                        <div class="d-block d-sm-flex align-items-center mb-3">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Length <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                        <div class="d-block d-sm-flex align-items-center mb-3">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Width <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                        <div class="d-block d-sm-flex align-items-center mb-3">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Width <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="d-block d-sm-flex align-items-center mb-3">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Height <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                        <div class="d-block d-sm-flex align-items-center mb-3">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Weight <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                        <div class="d-block d-sm-flex align-items-center mb-3">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Weight <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fs-25 fw-bold text-black mb-4">Description</h3>
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="d-block d-sm-flex align-items-center mb-3">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-5">Title <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                        <div class="d-block d-sm-flex align-items-center mb-3">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-5">Price <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="set-variations bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fs-25 fw-bold text-black mb-4">Set Variations</h3>
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">In Stock <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-6 me-lg-5">
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Label <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Label <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Label <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Type <span class="text-red">*</span></label>
                            <div class="select-wrapper select-drop d-block d-inline-md-block shadow-medium rounded-50 w-100">
                                <select class="form-control d-inline-block mnw-100 fs-16 fw-normal text-gray">
                                    <option value="" disabled="" selected="">Select Type</option>
                                    <option value="Type A">Type A</option>
                                    <option value="Type B">Type B</option>
                                </select>
                            </div>
                            <a href="#" class="align-items-center bg-white d-flex delete-btn delete-shadow flex-shrink-0 justify-content-center ms-3 rounded-50 text-lightgray fs-20">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Type <span class="text-red">*</span></label>
                            <div class="select-wrapper select-drop d-block d-inline-md-block shadow-medium rounded-50 w-100">
                                <select class="form-control d-inline-block mnw-100 fs-16 fw-normal text-gray">
                                    <option value="" disabled="" selected="">Select Type</option>
                                    <option value="Type A">Type A</option>
                                    <option value="Type B">Type B</option>
                                </select>
                            </div>
                            <a href="#" class="align-items-center bg-white d-flex delete-btn delete-shadow flex-shrink-0 justify-content-center ms-3 rounded-50 text-lightgray fs-20">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Type <span class="text-red">*</span></label>
                            <div class="select-wrapper select-drop d-block d-inline-md-block shadow-medium rounded-50 w-100">
                                <select class="form-control d-inline-block mnw-100 fs-16 fw-normal text-gray">
                                    <option value="" disabled="" selected="">Select Type</option>
                                    <option value="Type A">Type A</option>
                                    <option value="Type B">Type B</option>
                                </select>
                            </div>
                            <a href="#" class="align-items-center bg-white d-flex delete-btn delete-shadow flex-shrink-0 justify-content-center ms-3 rounded-50 text-lightgray fs-20">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="btn btn-blue fw-bold fs-18 mb-md-0 mb-3">Add New Row</button>
                <button class="btn btn-dark fs-18">Add New Option</button>
            </div>
        </div>
    </div>

    <div class="set-variations bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-5 col-md-6 me-lg-5">
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Label <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Label <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Label <span class="text-red">*</span></label>
                            <input type="text" class="form-control input-shadow border-0" placeholder="ABC">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Type <span class="text-red">*</span></label>
                            <div class="select-wrapper select-drop d-block d-inline-md-block shadow-medium rounded-50 w-100">
                                <select class="form-control d-inline-block mnw-100 fs-16 fw-normal text-gray">
                                    <option value="" disabled="" selected="">Select Type</option>
                                    <option value="Type A">Type A</option>
                                    <option value="Type B">Type B</option>
                                </select>
                            </div>
                            <a href="#" class="mt-md-0 mt-2 align-items-center bg-white d-flex delete-btn delete-shadow flex-shrink-0 justify-content-center ms-md-3 rounded-50 text-lightgray fs-20">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Type <span class="text-red">*</span></label>
                            <div class="select-wrapper select-drop d-block d-inline-md-block shadow-medium rounded-50 w-100">
                                <select class="form-control d-inline-block mnw-100 fs-16 fw-normal text-gray">
                                    <option value="" disabled="" selected="">Select Type</option>
                                    <option value="Type A">Type A</option>
                                    <option value="Type B">Type B</option>
                                </select>
                            </div>
                            <a href="#" class="mt-md-0 mt-2 align-items-center bg-white d-flex delete-btn delete-shadow flex-shrink-0 justify-content-center ms-3 rounded-50 text-lightgray fs-20">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <label class="fs-20 text-black fw-bold flex-shrink-0 me-3">Type <span class="text-red">*</span></label>
                            <div class="select-wrapper select-drop d-block d-inline-md-block shadow-medium rounded-50 w-100">
                                <select class="form-control d-inline-block mnw-100 fs-16 fw-normal text-gray">
                                    <option value="" disabled="" selected="">Select Type</option>
                                    <option value="Type A">Type A</option>
                                    <option value="Type B">Type B</option>
                                </select>
                            </div>
                            <a href="#" class="mt-md-0 mt-2 align-items-center bg-white d-flex delete-btn delete-shadow flex-shrink-0 justify-content-center ms-3 rounded-50 text-lightgray fs-20">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="btn btn-blue fw-bold fs-18 mb-md-0 mb-3">Add New Row</button>
                <button class="btn btn-dark fs-18">Add New Option</button>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h3 class="fs-25 fw-bold text-black mb-4">Status <span class="text-red">*</span></h3>
                <div class="select-wrapper select-drop d-block d-inline-md-block shadow-medium rounded-50">
                    <select class="form-control d-inline-block mnw-100 fs-16 fw-normal text-gray">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <button class="btn btn-blue fw-bold fs-18">Update</button>
        <button class="btn btn-dark fs-18" data-bs-toggle="modal" data-bs-target=".add-product">Add New Product</button>
    </div>
</section>

<?php
include('../include/footer.php');
?>