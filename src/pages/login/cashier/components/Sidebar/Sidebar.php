<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<link rel="stylesheet" href="../Sidebar/Sidebar.css">

<div id="mySidebar" class="sidebar">
    <!-- Logo and Toggle Button -->
    <div class="logo-toggle-container">
        <div class="logo" id="sidebarLogo">
            <img src="../../assets/logo-white.png" alt="Logo">
        </div>
    </div>

    <!-- Sidebar Links -->
    <div class="bglinks">
        <!-- <a href="../dashboard/Dashboard.php" data-tooltip="Dashboard" class="<?= ($currentPage == 'Dashboard.php') ? 'active' : '' ?>"><img src="../../assets/home.svg" alt=""><span class="links">Dashboard</span></a> -->
        <!-- <a href="../reports/reports.php" data-tooltip="Reports" class="<?= ($currentPage == 'sales.php' || $currentPage == 'reports.php') ? 'active' : '' ?>"><img src="../../assets/bar-chart-2.svg" alt=""><span class="links">Reports</span></a> -->
        <!-- <hr class="hr_style" /> -->
        <!-- <a href="../inventory/items.php" data-tooltip="Inventory" class="<?= ($currentPage == 'ingredients.php' || $currentPage == 'product-preview.php' || $currentPage == 'archive.php' || $currentPage == 'items.php' || $currentPage == 'daily-summary.php' || $currentPage == 'products.php' || $currentPage == 'spoilage-report.php' || $currentPage == 'transfers-report.php' || $currentPage == 'deliveries-report.php') ? 'active' : '' ?>"><img src="../../assets/package.svg" alt=""><span class="links">Inventory</span></a> -->
        <a href="../orders/orders.php" id='orders' data-tooltip="Inventory" class="<?= ($currentPage == 'manage-orders.php' ||
                                                                                        $currentPage == 'pickup.php' || $currentPage == 'tbd.php' ||
                                                                                        $currentPage == 'now-preparing.php' || $currentPage == 'online-orders.php' || $currentPage == 'order-logs.php' ||
                                                                                        $currentPage == 'orders.php') ? 'active' : '' ?>"><img src="../../assets/file-plus.svg" alt=""><span class="links">Orders</span></a>

        <!-- <hr class="hr_style" /> -->
        <!-- <a href="../accounts/accounts.php" data-tooltip="Accounts" class="<?= ($currentPage == 'accounts.php') ? 'active' : '' ?>"><img src="../../assets/user.svg" alt=""><span class="links">Accounts</span></a> -->
    </div>

    <!-- Logout Link -->
    <div class="bglink_footer">
        <a href="../../authentication/logout.php" data-tooltip="Logout" class="logout"><img src="../../assets/log-out.svg" class="logout-icon" alt=""><span class="links">Logout</span></a>
    </div>
</div>