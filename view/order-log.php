<?php
$title = "Order Log";
$pg = "order-log";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="order-log" class="order-log-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
                <h2>Order</h2>
            </div>
        </div>
    </div>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-pending-orders-tab" data-bs-toggle="pill"
                data-bs-target="#pills-pending-orders" type="button" role="tab" aria-controls="pills-pending-orders"
                aria-selected="true">Pending Orders</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-process-orders-tab" data-bs-toggle="pill"
                data-bs-target="#pills-process-orders" type="button" role="tab" aria-controls="pills-process-orders"
                aria-selected="false">In Process Orders</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-delivered-orders-tab" data-bs-toggle="pill"
                data-bs-target="#pills-delivered-orders" type="button" role="tab" aria-controls="pills-delivered-orders"
                aria-selected="false">Delivered Orders</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-refunded-orders-tab" data-bs-toggle="pill"
                data-bs-target="#pills-refunded-orders" type="button" role="tab" aria-controls="pills-refunded-orders"
                aria-selected="false">Refunded Orders</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-pending-orders" role="tabpanel"
            aria-labelledby="pills-pending-orders-tab">
            <div class="content-body rounded-10 shadow-none">
                <div class="dataTables_wrapper">
                    <div class="user-listing-top bg-transparent">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xxl-9 mt-2 mt-md-0 align-self-xl-end">
                                <div
                                    class="dataTables_length order_select d-block d-md-flex align-items-center mb-lg-0 mb-4">
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
                                    <th class="sorting">Amount Paid</th>
                                    <th class="sorting">Payment Status</th>
                                    <th class="sorting">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>001</td>

                                    <td>mm/dd/yyyy</td>
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status pending p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                PENDING <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="view-store-listing.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="pending-orders.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>002</td>

                                    <td>mm/dd/yyyy</td>
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status pending p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                PENDING <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="view-store-listing.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="pending-orders.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>003</td>

                                    <td>mm/dd/yyyy</td>
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status pending p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                PENDING <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="view-store-listing.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="pending-orders.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>004</td>

                                    <td>mm/dd/yyyy</td>
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status pending p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                PENDING <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="view-store-listing.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="pending-orders.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>005</td>

                                    <td>mm/dd/yyyy</td>
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status pending p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                PENDING <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="view-store-listing.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="pending-orders.php"><i
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
                                            <li class="paginate_button page-item active"><a href="#"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item"><a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="paginate_button page-item"><a href="#" class="page-link">3</a>
                                            </li>
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
        </div>
        <div class="tab-pane fade" id="pills-process-orders" role="tabpanel" aria-labelledby="pills-process-orders-tab">
            <div class="content-body rounded-10 shadow-none">
                <div class="dataTables_wrapper">
                    <div class="user-listing-top bg-transparent">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xxl-9 mt-2 mt-md-0 align-self-xl-end">
                                <div
                                    class="dataTables_length order_select d-block d-md-flex align-items-center mb-lg-0 mb-4">
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
                                    <th class="sorting">Amount Paid</th>
                                    <th class="sorting">Payment Status</th>
                                    <th class="sorting">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                
                                    <td>001</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status not-paid p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                In Pending <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="in-process-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="in-process-order.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                   
                                    <td>002</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status not-paid p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                In Pending <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="in-process-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="in-process-order.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                   
                                    <td>003</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status not-paid p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                In Pending <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="in-process-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="in-process-order.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                             
                                    <td>004</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status not-paid p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                In Pending <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="in-process-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="in-process-order.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                            
                                    <td>005</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status not-paid p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                In Pending <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="in-process-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="in-process-order.php"><i
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
                                            <li class="paginate_button page-item active"><a href="#"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item"><a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="paginate_button page-item"><a href="#" class="page-link">3</a>
                                            </li>
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
        </div>
        <div class="tab-pane fade" id="pills-delivered-orders" role="tabpanel"
            aria-labelledby="pills-delivered-orders-tab">
            <div class="content-body rounded-10 shadow-none">
                <div class="dataTables_wrapper">
                    <div class="user-listing-top bg-transparent">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xxl-9 mt-2 mt-md-0 align-self-xl-end">
                                <div
                                    class="dataTables_length order_select d-block d-md-flex align-items-center mb-lg-0 mb-4">
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
                                    <th class="sorting">Amount Paid</th>
                                    <th class="sorting">Payment Status</th>
                                    <th class="sorting">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                
                                    <td>001</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status inprocess p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                Delivered <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="delivered-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="delivered-order.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                   
                                    <td>002</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status inprocess p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                Delivered <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="delivered-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="delivered-order.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                   
                                    <td>003</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status inprocess p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                Delivered <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="delivered-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="delivered-order.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                             
                                    <td>004</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status inprocess p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                Delivered <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="delivered-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="delivered-order.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                            
                                    <td>005</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status inprocess p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                Delivered <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="delivered-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="delivered-order.php"><i
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
                                            <li class="paginate_button page-item active"><a href="#"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item"><a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="paginate_button page-item"><a href="#" class="page-link">3</a>
                                            </li>
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
        </div>
        <div class="tab-pane fade" id="pills-refunded-orders" role="tabpanel"
            aria-labelledby="pills-refunded-orders-tab">
            <div class="content-body rounded-10 shadow-none">
                <div class="dataTables_wrapper">
                    <div class="user-listing-top bg-transparent">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xxl-9 mt-2 mt-md-0 align-self-xl-end">
                                <div
                                    class="dataTables_length order_select d-block d-md-flex align-items-center mb-lg-0 mb-4">
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
                                    <th class="sorting">Amount Paid</th>
                                    <th class="sorting">Payment Status</th>
                                    <th class="sorting">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                
                                    <td>001</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status not-paid p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                Refunded <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="refunded-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="refunded-order.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                   
                                    <td>002</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status not-paid p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                Refunded <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="refunded-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="refunded-order.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                   
                                    <td>003</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status not-paid p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                Refunded <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="refunded-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="refunded-order.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                             
                                    <td>004</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status not-paid p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                Refunded <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="refunded-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="refunded-order.php"><i
                                                        class="fa fa-eye"></i>View Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                            
                                    <td>005</td>
                                    <td>mm/dd/yyyy</td>
                            
                                    <td>$20</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm status not-paid p-0 fs-16"
                                                data-bs-toggle="dropdown">
                                                Refunded <i class="fas fa-caret-down text-lightgray"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="refunded-order.php"><i
                                                        class="fas fa-arrow-down"></i> In Progress</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="refunded-order.php"><i
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
                                            <li class="paginate_button page-item active"><a href="#"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item"><a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="paginate_button page-item"><a href="#" class="page-link">3</a>
                                            </li>
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
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>