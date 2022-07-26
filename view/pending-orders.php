<?php
$title = "Pending Order";
$pg = "order-log";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="pending-order" class="pending-order-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
                <h2><a href="order-log.php"><i class="fas fa-arrow-left"></i></a> Pending Order</h2>
            </div>
        </div>
    </div>

    <div class="order-account bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fs-25 fw-bold text-black mb-4">Order & Account Information</h3>
            </div>
            <div class="col-lg-6">
                <h5 class="fs-20 fw-bold text-black mb-3">Order Information</h5>
                <div class="order-info d-block d-sm-flex align-items-center mb-3">
                    <h5 class="fs-18 fw-bold text-black mb-0">Order Date:</h5>
                    <h6 class="fs-18 fw-regular text-black mb-0">18 Jan , 2019</h6>
                </div>
                <div class="order-info d-block d-sm-flex align-items-center mb-4">
                    <h5 class="fs-18 fw-bold text-black mb-0">Order Status:</h5>
                    <div class="select-wrapper select-drop d-block d-inline-md-block w-100 shadow-medium rounded-50">
                            <select class="form-control sel-order-status d-inline-block mnw-100 fs-16 fw-normal text-gray">
                                <option value="Active">Active</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                </div>
                <div class="order-info d-block d-sm-flex align-items-center mb-4">
                    <h5 class="fs-18 fw-bold text-black mb-0">Payment Status:</h5>
                    <div class="select-wrapper select-drop d-block d-inline-md-block w-100 shadow-medium rounded-50">
                            <select class="form-control sel-payment-status d-inline-block mnw-100 fs-16 fw-normal text-gray">
                                <option value="Paid">Paid</option>
                                <option value="Not Paid">Not Paid</option>
                            </select>
                        </div>
                </div>
                <div class="order-info d-block d-sm-flex align-items-center mb-3">
                    <h5 class="fs-18 fw-bold text-black mb-0">Order ID:</h5>
                    <h6 class="fs-18 fw-regular text-black mb-0">005</h6>
                </div>
                <div class="order-info d-block d-sm-flex align-items-center mb-3">
                    <h5 class="fs-18 fw-bold text-black mb-0">Payment Method:</h5>
                    <h6 class="fs-18 fw-regular text-black mb-0">Paypal</h6>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="fs-20 fw-bold text-black mb-3 mt-lg-0 mt-4">Account Information</h5>
                <div class="order-info d-block d-sm-flex align-items-center mb-2">
                    <h5 class="fs-18 fw-bold text-black mb-0">Customer Name:</h5>
                    <h6 class="fs-18 fw-regular text-black mb-0">Joshua Adam</h6>
                </div>
                <div class="order-info d-block d-sm-flex align-items-center mb-2">
                    <h5 class="fs-18 fw-bold text-black mb-0">Customer Email:</h5>
                    <h6 class="fs-18 fw-regular text-black mb-0">joshuaadam@email.com</h6>
                </div>
                <div class="order-info d-block d-sm-flex align-items-center mb-2">
                    <h5 class="fs-18 fw-bold text-black mb-0">Customer Phone:</h5>
                    <h6 class="fs-18 fw-regular text-black mb-0">+123 456 789</h6>
                </div>
                <div class="order-info d-block d-sm-flex align-items-center mb-2">
                    <h5 class="fs-18 fw-bold text-black mb-0">User ID:</h5>
                    <h6 class="fs-18 fw-regular text-black mb-0">001</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="order-account bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fs-25 fw-bold text-black mb-3">Address Information</h3>
            </div>
            <div class="col-lg-6">
                <h5 class="fs-20 fw-bold text-black mb-3">Order Information</h5>
                <div class="mb-2">
                    <h5 class="fs-18 fw-regular text-black mb-0">Rikkard Ambrose</h5>
                </div>
                <div class="mb-2">
                    <h5 class="fs-18 fw-regular text-black mb-0">Abc Street here</h5>
                </div>
                <div class="mb-2">
                    <h5 class="fs-18 fw-regular text-black mb-0">Zipcode</h5>
                </div>
                <div class="mb-2">
                    <h5 class="fs-18 fw-regular text-black mb-0">Country</h5>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="fs-20 fw-bold text-black mb-3">Account Information</h5>
                <div class="mb-2">
                    <h5 class="fs-18 fw-regular text-black mb-0">Rikkard Ambrose</h5>
                </div>
                <div class="mb-2">
                    <h5 class="fs-18 fw-regular text-black mb-0">Abc Street here</h5>
                </div>
                <div class="mb-2">
                    <h5 class="fs-18 fw-regular text-black mb-0">Zipcode</h5>
                </div>
                <div class="mb-2">
                    <h5 class="fs-18 fw-regular text-black mb-0">Country</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="order-account bg-white shadow-small rounded-10 p-md-5 p-3 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fs-25 fw-bold text-black mb-3">Product Details</h3>
            </div>
            <div class="col-lg-6">
                <div class="order-info d-flex align-items-center mb-3">
                    <h5 class="fs-18 fw-bold text-black mb-0">Length:</h5>
                    <h6 class="fs-18 fw-regular text-black mb-0">123</h6>
                </div>
                <div class="order-info d-flex align-items-center mb-4">
                    <h5 class="fs-18 fw-bold text-black mb-0">Width:</h5>
                    <h6 class="fs-18 fw-regular text-black mb-0">123</h6>
                </div>
                <div class="order-info d-flex align-items-center mb-4">
                    <h5 class="fs-18 fw-bold text-black mb-0">Helight:</h5>
                    <h6 class="fs-18 fw-regular text-black mb-0">123</h6>
                </div>
                <div class="order-info d-flex align-items-center mb-3">
                    <h5 class="fs-18 fw-bold text-black mb-0">Weight:</h5>
                    <h6 class="fs-18 fw-regular text-black mb-0">123</h6>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-12">
            <div class="pending-order-table table-responsive">
                <table class="text-center w-100">
                    <thead class="bg-white thead-shadow">
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>By</th>
                            <th>Unit Price</th>
                            <th>Product Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="../assets/images/img-product.png" alt="" class="img-fluid"></td>
                            <td>T.Shirt <br><b>Size:</b> Small</td>
                            <td>X1</td>
                            <td>Vendor Name <br><a href="#">View Profile</a></td>
                            <td>$123</td>
                            <td>$123</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row justify-content-end mt-3">
        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-7">
            <div class="d-flex align-items-center justify-content-between bg-lightblue thead-shadow rounded-50 py-4 px-5 mb-3">
                <h5 class="fs-16 fw-bold text-black mb-0">Sub Total:</h5>
                <h6 class="fs-16 fw-regular text-black mb-0">$123</h6>
            </div>
            <div class="d-flex align-items-center justify-content-between bg-lightblue thead-shadow rounded-50 py-4 px-5 mb-3">
                <h5 class="fs-16 fw-bold text-black mb-0">Tax:</h5>
                <h6 class="fs-16 fw-regular text-black mb-0">$123</h6>
            </div>
            <div class="d-flex align-items-center justify-content-between bg-lightblue thead-shadow rounded-50 py-4 px-5 mb-3">
                <h5 class="fs-16 fw-bold text-black mb-0">Shipping Rates:</h5>
                <h6 class="fs-16 fw-regular text-black mb-0">$123</h6>
            </div>
            <div class="d-flex align-items-center justify-content-between bg-white thead-shadow rounded-50 py-4 px-5">
                <h5 class="fs-16 fw-bold text-black mb-0">Total Rates:</h5>
                <h6 class="fs-16 fw-regular text-black mb-0">$123</h6>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>