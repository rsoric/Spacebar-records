<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="SPACEBAR Records Admin Panel"/>
    <title>Čvarci.net admin panel</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" href="img/favicon.png" sizes="any"/>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/rotateImage.js"></script>
</head>

<body>


    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom">
            <a href="index.php"><img src="img/spacebar_logo.png" alt="logo" id="sidebar-logo"></a>
            </div>
            <div class="list-group list-group-flush text-center">
                <a href="dashboard.php" class="admin-panel-nav-item list-group-item list-group-item-action list-group-item-light p-3" data-pathname="/dashboard.php">Početna</a>
                <a href="dashboard-products.php" class="admin-panel-nav-item list-group-item list-group-item-action list-group-item-light p-3" data-pathname="/dashboard-products.php">Proizvodi</a>
                <a href="dashboard-orders.php" class="admin-panel-nav-item list-group-item list-group-item-action list-group-item-light p-3" data-pathname="/dashboard-orders.php">Narudžbe</a>
                <a href="dashboard-logout.php" class="admin-panel-nav-item list-group-item list-group-item-action list-group-item-light p-3" data-pathname="/dashboard-logout.php">Odjava</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light mobile-admin-navbar">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0 text-center">
                        <li><a href="dashboard.php" class="admin-panel-nav-item list-group-item list-group-item-action list-group-item-light p-3" data-pathname="/dashboard.php">Početna</a></li>
                        <li><a href="dashboard-products.php" class="admin-panel-nav-item list-group-item list-group-item-action list-group-item-light p-3" data-pathname="/dashboard-products.php">Proizvodi</a></li>
                        <li><a href="dashboard-orders.php" class="admin-panel-nav-item list-group-item list-group-item-action list-group-item-light p-3" data-pathname="/dashboard-orders.php">Narudžbe</a></li>
                        <li><a href="dashboard-logout.php" class="admin-panel-nav-item list-group-item list-group-item-action list-group-item-light p-3" data-pathname="/dashboard-logout.php">Odjava</a></li>
                        </ul>
                    </div>
                </div>
            </nav>