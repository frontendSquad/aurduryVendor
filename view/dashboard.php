<?php
$title = "Dashboard";
$pg = "dashboard";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="configuration" class="dashboard">
    <div class="row">
        <div class="col-12">
            <div class="content-body">
                <div class="page-title mb-0">
                    <div class="row">
                        <div class="col-12 col-sm-12 mb-3">
                            <h2>Dashboard</h2>
                        </div>
                    </div>
                </div>
                <div class="card-dashboard mt-2 mt-md-3 mb-0 mb-md-3">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-5 mb-2 d-flex">
                            <div class="card position-relative">
                                <div class="card-body blue py-4">
                                    <div class="media align-items-center d-flex w-100">
                                        <div class="media-body text-left flex-grow-1">
                                            <div class="card-title">Total Products Sold</div>
                                            <h3 class="mb-0">1098</h3>
                                        </div>
                                        <div class="align-self-center flex-shrink-1">
                                            <img src="../assets/images/gift.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 mb-3">
                    <h3 class="fs-30 text-black fw-bold mb-0 align-self-center">Quick Stats</h3>
                </div>
                <div class="card-dashboard mt-2 mt-md-3 mb-0 mb-md-3">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-5 col-xl-3 mb-2 d-flex">
                            <div class="card position-relative text-center">
                                <div class="card-header rounded-top-left-right blue-header">
                                    <h6 class="text-white fs-16 fw-regular mb-0 py-2">Average Monthly Income</h6>
                                </div>
                                <div class="card-body py-4">
                                    <img src="../assets/images/monthly-income.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 col-xl-3 mb-2 d-flex align-items-stretch">
                            <div class="card position-relative text-center">
                                <div class="card-header rounded-top-left-right yellow-header">
                                    <h6 class="text-white fs-16 fw-regular mb-0 py-2">Average Monthly Income</h6>
                                </div>
                                <div class="card-body py-4">
                                    <img src="../assets/images/registered-vendor.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 mb-3">
                    <h3 class="fs-30 text-black fw-bold mb-0 align-self-center">Sales Analytics</h3>
                </div>
                <div class="card d-block card-chart border-none bg-white rounded-10 p-3 p-lg-5 align-items-center">
                    <div class="card-body d-flex justify-content-between px-0 pb-0">
                        <div class="chartbox position-relative text-center w-100">
                            <img src="../assets/images/chart.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="">
                            <div class="select-wrapper d-block d-sm-inline-block mt-1 mt-sm-0 me-0 me-sm-2">
                            <select name="" id="" class="form-control">
                                <option value="">Select Year</option>
                                <option value="">2022</option>
                                <option value="">2021</option>
                                <option value="">2020</option>
                                <option value="">2019</option>
                                <option value="">2018</option>
                                <option value="">2017</option>
                                <option value="">2016</option>
                                <option value="">2015</option>
                                <option value="">2014</option>
                                <option value="">2013</option>
                                <option value="">2012</option>
                                <option value="">2011</option>
                                <option value="">2010</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <h3 class="fs-30 text-black fw-bold mb-0 align-self-center">Latest Orders</h3>
                </div>
                <div class="dataTables_wrapper">
                    <div class="main-tabble table-responsive mx-n2">
                        <table class="table table-borderless dataTable px-2">
                            <thead>
                                <tr>
                                    <th class="sorting">Order ID</th>
                                    <th class="sorting">Customer Name</th>
                                    <th class="sorting">Order Status</th>
                                    <th class="sorting">Amount Paid</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Jerome Rozario</td>
                                    <td class="orderStatus">Pending</td>
                                    <td>$123</td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Jerome Rozario</td>
                                    <td class="orderStatus">Pending</td>
                                    <td>$123</td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>Jerome Rozario</td>
                                    <td class="orderStatus">Pending</td>
                                    <td>$123</td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td>Jerome Rozario</td>
                                    <td class="orderStatus">Pending</td>
                                    <td>$123</td>
                                </tr>
                                <tr>
                                    <td>005</td>
                                    <td>Jerome Rozario</td>
                                    <td class="orderStatus">Pending</td>
                                    <td>$123</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('../include/footer.php');
?>