<?php
$title = "Store Management";
$pg = "store-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="inventory-management" class="inventory-management-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
                <h2><a href="#"></a> Inventory Mangement</h2>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end mb-3">
                <a class="btn btn-blue fs-18 fw-bold" href="./add-new-product.php">Add New Product</a>
            </div>
        </div>
    </div>
    <div class="content-body rounded-10 shadow-none">
        <div class="dataTables_wrapper">
            <div class="user-listing-top bg-transparent">
                <div class="row">
                    <div class="col-12 col-md-6 mt-2 mt-md-0 align-self-xl-end">
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
                            <label class="d-inline-md-block d-block ms-md-4">Entries</label>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="d-flex gap-15">
                            <div class="dataTables_filter d-flex justify-content-start flex-grow-1">
                                <div
                                    class="select-wrapper select-drop d-block d-inline-md-block w-100 shadow-medium rounded-50">
                                    <select class="form-control d-inline-block mnw-100 fs-16 fw-normal text-gray">
                                        <option value="" disabled selected>Available Status</option>
                                        <option value="Unblock">In Stock</option>
                                        <option value="Block">Sold Out</option>
                                    </select>
                                </div>
                            </div>
                            <div class="dataTables_filter d-flex justify-content-start flex-grow-1">
                                <div class="search-wrap flex-grow-1">
                                    <input type="search" class="form-control" placeholder="Search">
                                </div>
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
                            <th class="sorting">Title</th>
                            <th class="sorting">Product Name</th>
                            <th class="sorting">Price</th>
                            <th class="sorting">Category</th>
                            <th class="sorting">In Stock</th>
                            <th class="sorting">Sold</th>
                            <th class="sorting">Status</th>
                            <th class="sorting">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Jerome Rozario</td>
                            <td>Product ABC</td>
                            <td>Category A</td>
                            <td>$20</td>
                            <td>50</td>
                            <td>50</td>
                            <td class="status deliver">Active</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-inventory-management.php"><i
                                                class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="inventory-rating.php"><i
                                                class="fas fa-star"></i>Rating</a>
                                        <a class="dropdown-item" href="add-new-product.php"><i
                                                class="fas fa-edit"></i>Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".store-blocked"><i class="fas fa-times"></i>Inactive</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Jerome Rozario</td>
                            <td>Product ABC</td>
                            <td>Category B</td>
                            <td>$20</td>
                            <td>30</td>
                            <td>40</td>
                            <td class="status not-paid">Inactive</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-inventory-management.php"><i
                                                class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="inventory-rating.php"><i
                                                class="fas fa-star"></i>Rating</a>
                                        <a class="dropdown-item" href="add-new-product.php"><i
                                                class="fas fa-edit"></i>Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".store-unblocked"><i class="fas fa-times"></i>Active</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Jerome Rozario</td>
                            <td>Product ABC</td>
                            <td>Category C</td>
                            <td>$20</td>
                            <td>50</td>
                            <td>100</td>
                            <td class="status deliver">Active</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-inventory-management.php"><i
                                                class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="inventory-rating.php"><i
                                                class="fas fa-star"></i>Rating</a>
                                        <a class="dropdown-item" href="add-new-product.php"><i
                                                class="fas fa-edit"></i>Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".store-blocked"><i class="fas fa-times"></i>Inactive</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Jerome Rozario</td>
                            <td>Product ABC</td>
                            <td>Category D</td>
                            <td>$20</td>
                            <td>30</td>
                            <td>30</td>
                            <td class="status not-paid">Inactive</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-inventory-management.php"><i
                                                class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="inventory-rating.php"><i
                                                class="fas fa-star"></i>Rating</a>
                                        <a class="dropdown-item" href="add-new-product.php"><i
                                                class="fas fa-edit"></i>Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".store-unblocked"><i class="fas fa-times"></i>Active</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Jerome Rozario</td>
                            <td>Product ABC</td>
                            <td>Category E</td>
                            <td>$20</td>
                            <td>50</td>
                            <td>200</td>
                            <td class="status deliver">Active</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-inventory-management.php"><i
                                                class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="inventory-rating.php"><i
                                                class="fas fa-star"></i>Rating</a>
                                        <a class="dropdown-item" href="add-new-product.php"><i
                                                class="fas fa-edit"></i>Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".store-blocked"><i class="fas fa-times"></i>Inactive</a>
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