<?php
$title = "User Management";
$pg = "user-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="view-user" class="view-user-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-6">
                <h2><a href="user-listing.php"><i class="fas fa-arrow-left"></i></a> User Profile</h2>
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
                        <a href="edit-user.php" class="btn btn-blue">Edit</a>
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
                            <th class="sorting">Number of Products</th>
                            <th class="sorting">Amount Paid</th>
                            <th class="sorting">Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>001</td>
                            <td>mm/dd/yyyy</td>
                            <td>6</td>
                            <td>$123</td>
                            <td class="status pending">Pending</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>002</td>
                            <td>mm/dd/yyyy</td>
                            <td>9</td>
                            <td>$123</td>
                            <td class="status deliver">Delivered</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>003</td>
                            <td>mm/dd/yyyy</td>
                            <td>8</td>
                            <td>$123</td>
                            <td class="status deliver">Delivered</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>004</td>
                            <td>mm/dd/yyyy</td>
                            <td>4</td>
                            <td>$123</td>
                            <td class="status inprocess">In Process</td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>005</td>
                            <td>mm/dd/yyyy</td>
                            <td>12</td>
                            <td>$123</td>
                            <td class="status inprocess">In Process</td>
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