<div id="sidebar-wrapper">
    <div class="navbar-header header-logo d-md-flex d-none">
        <ul class="nav navbar-nav flex-row flex-grow-1 d-flex">
            <li class="nav-item d-md-none align-self-center ps-3">
                <a class="nav-link menu-toggle hidden-xs p-0 is-active" href="#"><i
                        class="ft-menu font-large-1"></i></a>
            </li>
            <li class="nav-item align-self-center flex-grow-1 text-center">
                <a class="navbar-brand p-0 m-0" href="dashboard.php"> <img class="brand-logo img-fluid"
                        alt="stack admin logo" src="../assets/images/logo-admin.png"></a>
            </li>
            <li class="nav-item d-md-none align-self-center pe-3">
                <a class="nav-link open-navbar-container p-0" data-bs-toggle="collapse"
                    data-bs-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
            </li>
        </ul>
    </div>
    <div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item <?php if ($pg == "dashboard") { echo "active"; } ?>">
                    <a href="dashboard.php" class="mm-next"><img src="../assets/images/dashboard.png" alt=""
                            class="img-fluid"><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
                <li class="nav-item <?php if ($pg == "store-management") { echo "active"; } ?>">
                    <a href="store.php"><img src="../assets/images/store.png" alt="" class="img-fluid"><span
                            class="menu-title">Store</span></a>
                    <ul class="menu-content">
                        <li class="<?php if($pg =="store-management") {echo "active";} else{ echo "";}?>"><a class="menu-item"
                                href="store-listing.php">Store Listing</a></li>
                        <li class="<?php if($pg =="store-management") {echo "active";} else{ echo "";}?>"><a class="menu-item"
                                href="inventory-management.php">Inventory Management</a></li>
                        <li class="<?php if($pg =="store-management") {echo "active";} else{ echo "";}?>"><a class="menu-item"
                                href="category-management.php">Category Management</a></li>
                        <li class="<?php if($pg =="store-management") {echo "active";} else{ echo "";}?>"><a class="menu-item"
                                href="variation-management.php">Variation Management</a></li>
                    </ul>
                </li>
                <li class="nav-item <?php if ($pg == "order-log") { echo "active"; } ?>">
                    <a href="order-log.php" class="mm-next"><img src="../assets/images/order-log.png" alt=""
                            class="img-fluid"><span class="menu-title" data-i18n="">Order Log</span></a>
                </li>
                <li class="nav-item <?php if ($pg == "payment-logs") { echo "active"; } ?>">
                    <a href="view-transaction.php" class="mm-next"><img src="../assets/images/payment-logs.png" alt=""
                            class="img-fluid"><span class="menu-title">Payment Logs</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>