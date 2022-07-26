<?php
$title = "Vendor Management";
$pg = "vendor-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="view-block-vendor" class="view-block-vendor-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-6">
                <h2><a href="blocked-vendor.php"><i class="fas fa-arrow-left"></i></a> Vendor Profile</h2>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-10 shadow mb-5 p-md-5 p-3">
        <div class="row">
            <div class="col-sm-6 col-xl-12 col-xxl-2 text-xl-center">
                <img src="../assets/images/user-avatar.png" alt="" class="img-fluid">
            </div>
            <div class="col-sm-12 col-xl-12 col-xxl-10 mt-xl-0 mt-4">
                <h4 class="fs-25 fw-bold text-black mb-3">User Profile</h4>
                <div class="row">
                    <div class="col-xl-7">
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">User ID:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">001</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Full Name:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">Joshua Rozario</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Email Address:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">joshuarozario17@gmail.com</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Registration Date:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">mm/dd/yyyy</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Phone:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">11233444</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Card Number:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">1001 1001 1001 1001</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Admin Commission:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">$10</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Store Name:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">abc</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Business Type:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">abc</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Country:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">abc</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">City:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">abc</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">User ID:</h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">001</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <h5 class="fs-18 fw-bold text-black">Business Overview: </h5>
                            </div>
                            <div class="col-sm-7">
                                <h6 class="fs-18 fw-regular text-black">abc</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="edit-block-vendor.php" class="btn btn-blue">Edit</a>
            </div>
        </div>
    </div>
    <div class="content-body rounded-10 shadow-none">
        <div class="dataTables_wrapper">
            <div class="user-listing-top bg-transparent">
                <div class="row">
                    <div class="col-12 col-md-6 col-xxl-9 mt-2 mt-md-0 align-self-xl-end">
                        <div class="dataTables_length order_select d-block d-md-flex align-items-center mb-lg-0 mb-4">
                            <label class="d-inline-md-block d-block me-4">Show</label>
                            <div class="d-block d-md-flex">
                                <div class="select-wrapper  d-block d-inline-md-block w-auto">
                                    <select class="form-control d-inline-block">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                            <label class="d-inline-md-block d-block ms-4">Entries</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xxl-3 align-items-center">
                        <div class="dataTables_filter d-flex justify-content-start flex-shrink-1">
                            <div class="search-wrap flex-grow-1">
                                <input type="search" class="form-control" placeholder="Search">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-tabble table-responsive mx-n2">
                <table class="table table-borderless dataTable px-2">
                    <thead>
                        <tr>
                            <th class="sorting">S.No</th>
                            <th class="sorting">Order ID</th>
                            <th class="sorting">Order Date</th>
                            <th class="sorting">Title</th>
                            <th class="sorting">Quantity</th>
                            <th class="sorting">Amount Paid</th>
                            <th class="sorting">Order Status</th>
                            <th class="sorting">Payment Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>001</td>
                            <td>mm/dd/yyyy</td>
                            <td>Product Name</td>
                            <td>6</td>
                            <td>$123</td>
                            <td class="status pending">Pending</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle status not-paid btn-sm" data-bs-toggle="dropdown">
                                        Not Paid <i class="fas fa-caret-down text-gray ps-2"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Paid </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>002</td>
                            <td>mm/dd/yyyy</td>
                            <td>Product Name</td>
                            <td>9</td>
                            <td>$123</td>
                            <td class="status deliver">Delivered</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle status paid btn-sm" data-bs-toggle="dropdown">
                                        Paid <i class="fas fa-caret-down text-gray ps-2"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Not Paid </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>003</td>
                            <td>mm/dd/yyyy</td>
                            <td>Product Name</td>
                            <td>8</td>
                            <td>$123</td>
                            <td class="status deliver">Delivered</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle status paid btn-sm" data-bs-toggle="dropdown">
                                        Paid <i class="fas fa-caret-down text-gray ps-2"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Not Paid </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>004</td>
                            <td>mm/dd/yyyy</td>
                            <td>Product Name</td>
                            <td>4</td>
                            <td>$123</td>
                            <td class="status inprocess">In Process</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle status not-paid btn-sm" data-bs-toggle="dropdown">
                                        Not Paid <i class="fas fa-caret-down text-gray ps-2"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Paid </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>005</td>
                            <td>mm/dd/yyyy</td>
                            <td>Product Name</td>
                            <td>12</td>
                            <td>$123</td>
                            <td class="status inprocess">In Process</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle status not-paid btn-sm" data-bs-toggle="dropdown">
                                        Not Paid <i class="fas fa-caret-down text-gray ps-2"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Paid </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="container-fluid">
                    <div class="row mt-3">
                        <div class="col-sm-12 col-xxl-5 align-self-center text-center text-xxl-start">
                            <div class="dataTables_info pl-2">Showing 1 to 3 of 3 entries</div>
                        </div>
                        <div class="col-sm-12 col-xxl-7 d-flex justify-content-center justify-content-xxl-end">
                            <div class="dataTables_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="paginate_button page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="paginate_button page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="paginate_button page-item next disabled" i=""><a href="#" class="page-link">Next</a></li>
                                </ul>
                            </div>
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