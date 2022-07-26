<?php
$title = "Settings";
$pg = "settings";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="settings" class="settings-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
                <h2>Settings</h2>
            </div>
        </div>
    </div>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-tax-tab" data-bs-toggle="pill" data-bs-target="#pills-tax" type="button" role="tab" aria-controls="pills-tax" aria-selected="true">Tax</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-content-management-tab" data-bs-toggle="pill" data-bs-target="#pills-content-management" type="button" role="tab" aria-controls="pills-content-management" aria-selected="false">Content Management</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-tax" role="tabpanel" aria-labelledby="pills-tax-tab">
            <div class="bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="fs-20 fw-bold text-black mb-4">Set Tax Percentage</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="row align-items-center mb-4">
                            <div class="col-lg-2 col-md-4">
                                <h4 class="fs-20 fw-bold text-black mb-md-0 mb-3">Tax%</h4>
                            </div>
                            <div class="col-xl-3 col-lg-5 col-md-8">
                                <input type="text" class="form-control" value="$6">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-blue">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-content-management" role="tabpanel" aria-labelledby="pills-content-management-tab">
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
                                    <th class="sorting">Page ID</th>
                                    <th class="sorting">Page Name</th>
                                    <th class="sorting">Added On</th>
                                    <th class="sorting">Payment Status</th>
                                    <th class="sorting">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>001</td>
                                    <td>Home</td>
                                    <td>mm/dd/yyyy</td>
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
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="view-setting.php"><i class="fa fa-eye"></i>View</a>
                                                <a class="dropdown-item" href="edit-setting.php"><i class="fas fa-edit"></i>Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>002</td>
                                    <td>About Us</td>
                                    <td>mm/dd/yyyy</td>
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
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="view-setting.php"><i class="fa fa-eye"></i>View</a>
                                                <a class="dropdown-item" href="edit-setting.php"><i class="fas fa-edit"></i>Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>003</td>
                                    <td>Services</td>
                                    <td>mm/dd/yyyy</td>
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
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="view-setting.php"><i class="fa fa-eye"></i>View</a>
                                                <a class="dropdown-item" href="edit-setting.php"><i class="fas fa-edit"></i>Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>004</td>
                                    <td>Blog</td>
                                    <td>mm/dd/yyyy</td>
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
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="view-setting.php"><i class="fa fa-eye"></i>View</a>
                                                <a class="dropdown-item" href="edit-setting.php"><i class="fas fa-edit"></i>Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>005</td>
                                    <td>Contact Us</td>
                                    <td>mm/dd/yyyy</td>
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
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="view-setting.php"><i class="fa fa-eye"></i>View</a>
                                                <a class="dropdown-item" href="edit-setting.php"><i class="fas fa-edit"></i>Edit</a>
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
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>