<?php
$title = "User Management";
$pg = "user-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="blocked-user" class="blocked-user-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h2><a href="user-listing.php"><i class="fas fa-arrow-left"></i></a> Blocked User</h2>
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
                            <th class="sorting">Date</th>
                            <th class="sorting">Customer Email</th>
                            <th class="sorting">First Name</th>
                            <th class="sorting">Last Name</th>
                            <th class="sorting">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1/31/2022</td>
                            <td>test@testing.com</td>
                            <td>Alex</td>
                            <td>Gray</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-block-user.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target=".user-unblocked"><i class="fas fa-ban"></i>Unblock</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1/31/2022</td>
                            <td>test@testing.com</td>
                            <td>Alex</td>
                            <td>Gray</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-block-user.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target=".user-unblocked"><i class="fas fa-ban"></i>Unblock</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1/31/2022</td>
                            <td>test@testing.com</td>
                            <td>Alex</td>
                            <td>Gray</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-block-user.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target=".user-unblocked"><i class="fas fa-ban"></i>Unblock</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>1/31/2022</td>
                            <td>test@testing.com</td>
                            <td>Alex</td>
                            <td>Gray</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-block-user.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target=".user-unblocked"><i class="fas fa-ban"></i>Unblock</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>1/31/2022</td>
                            <td>test@testing.com</td>
                            <td>Alex</td>
                            <td>Gray</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-block-user.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target=".user-unblocked"><i class="fas fa-ban"></i>Unblock</a>
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