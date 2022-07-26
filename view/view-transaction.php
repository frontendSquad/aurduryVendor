<?php
$title = "Transaction";
$pg = "payment-logs";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="view-transaction" class="view-transaction-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
                <h2><a href="payment-logs.php"><i class="fas fa-arrow-left"></i></a> Transaction</h2>
            </div>
        </div>
    </div>

    <div class="page-title mb-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
                <p class="fs-26"><strong>Total Orders For This Month:</strong> 30</p>
            </div>
        </div>
    </div>

    <div class="content-body rounded-10 shadow-none">
        <div class="dataTables_wrapper">
            <div class="user-listing-top bg-transparent">
                <div class="row">
                    <div class="col-12 col-md-6 col-xxl-4 mt-2 mt-md-0 align-self-xl-end">
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
                            <label class="d-inline-md-block d-block ms-md-4 ms-0">Entries</label>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xxl-4 align-items-center">
                        <div class="d-block d-md-flex align-items-center mb-md-0 mb-4">
                            <label
                                class="d-inline-md-block d-block me-4 mb-0 flex-shrink-0 fs-14 fw-bold text-black">Order
                                ID:</label>
                            <div class="dataTables_filter d-flex justify-content-start flex-shrink-1 w-100">
                                <div class="search-wrap flex-grow-1">
                                    <input type="search" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xxl-4 align-items-center">
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
                            <th class="sorting">Product Name</th>
                            <th class="sorting">Total Amount</th>
                            <th class="sorting">Admin Comission</th>
                            <th class="sorting">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>001</td>
                            <td>mm/dd/yyyy</td>
                            <td>ABC Product</td>
                            <td>$123</td>
                            <td>$123</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-store-listing.php"><i
                                                class="fa fa-eye"></i>View Order</a>
                                    </div>
                                </div>
                            </td>
                        <tr>
                            <td>02</td>
                            <td>002</td>
                            <td>mm/dd/yyyy</td>
                            <td>ABC Product</td>
                            <td>$123</td>
                            <td>$123</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-store-listing.php"><i
                                                class="fa fa-eye"></i>View Order</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>003</td>
                            <td>mm/dd/yyyy</td>
                            <td>ABC Product</td>
                            <td>$123</td>
                            <td>$123</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-store-listing.php"><i
                                                class="fa fa-eye"></i>View Order</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>004</td>
                            <td>mm/dd/yyyy</td>
                            <td>ABC Product</td>
                            <td>$123</td>
                            <td>$123</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-store-listing.php"><i
                                                class="fa fa-eye"></i>View Order</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>005</td>
                            <td>mm/dd/yyyy</td>
                            <td>1ABC Product</td>
                            <td>$123</td>
                            <td>$123</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-store-listing.php"><i
                                                class="fa fa-eye"></i>View Order</a>
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
                                    <li class="paginate_button page-item previous disabled"><a href="#"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="paginate_button page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="paginate_button page-item next disabled" i=""><a href="#"
                                            class="page-link">Next</a></li>
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