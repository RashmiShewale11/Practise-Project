<?php
/**
 * Created by IntelliJ IDEA.
 * User: rashmi
 * Date: 22/2/19
 * Time: 12:46 PM
 */?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>View PHC Request</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h1>
                <a href="index.php5">Digital Request</a>
            </h1>
            <span>Digital</span>
        </div>
        <div class="profile-bg"></div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="index.php5">
                    <i class="fas fa-th-large"></i>Dashboard
                </a>
            </li>
            <li>
                <a href="phcReq.php5">
                    <i class="fas fa-eye"></i> View PHC Request

                </a>
            </li>
            <li>
                <a href="digitalReq.php5">
                    <i class="fas fa-eye"></i> View Digital Request

                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-eye"></i> View PHC Report

                </a>
            </li>
            <li>
                <a href="adminhistory.php5">
                    <i class="fas fa-eye"></i> History

                </a>
            </li>
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">
        <!-- top-bar -->
        <nav class="navbar navbar-default mb-xl-5 mb-4">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <!-- Search-from -->
                <form action="#" method="post" class="form-inline mx-auto search-form">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                    <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                </form>
                <!--// Search-from -->
                <ul class="top-icons-agileits-w3layouts float-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="far fa-user"></i>
                        </a>
                        <div class="dropdown-menu drop-3">
                            <div class="profile d-flex mr-o">
                                <div class="profile-l align-self-center">
                                    <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                </div>
                                <div class="profile-r align-self-center">
                                    <h3 class="sub-title-w3-agileits">Name</h3>
                                    <a href="mailto:info@example.com">mail@gmail.com</a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="login.html">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--// top-bar -->

        <!-- main-heading -->
        <h2 class="main-title-w3layouts mb-2 text-center">Requests</h2>
        <!--// main-heading -->
        <!--Data Table-->
        <div class="container-fluid">
            <div class="outer-w3-agile mt-3">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Data</th>
                            <th scope="col">Remark</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>video</td>
                            <td><button class="button" style="border: black;bo"> <i class="fa fa-check">Approve</i> &nbsp;&nbsp;&nbsp;</button>
                                <button class="button" style="border: black;"> <i class="fa fa-times">Dispprove</i></button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Data Table-->
<!-- Copyright -->
<div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
    <p>© 2019    . All Rights Reserved
    </p>
</div>
<!--// Copyright -->
</div>
</div>


<!-- Required common Js -->
<script src='js/jquery-2.2.3.min.js'></script>
<!-- //Required common Js -->

<!-- Sidebar-nav Js -->
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
<!--// Sidebar-nav Js -->

<!-- dropdown nav -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->

<!-- Js for bootstrap working-->
<script src="js/bootstrap.min.js"></script>
<!-- //Js for bootstrap working -->

</body>

</html>
