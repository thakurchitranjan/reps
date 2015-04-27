
<!DOCTYPE html>

<html lang="en">
<head>
    <!-- Title here -->
    <title>Dashboard - Crontech Web-Maintenance</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600italic,600' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href='<?php echo base_url()?>assets/css/bootstrap.min.css' rel="stylesheet">
    <!-- Animate css -->
    <link href='<?php echo base_url()?>assets/css/animate.min.css' rel="stylesheet">
    <!-- Gritter
    <link href='<?php echo base_url()?>assets/css/jquery.gritter.css' rel="stylesheet">
    <!-- Calendar -->
    <link href='<?php echo base_url()?>assets/css/fullcalendar.css' rel="stylesheet">
    <!-- Bootstrap toggable -->
    <link href='<?php echo base_url()?>assets/css/bootstrap-switch.css' rel="stylesheet">
    <!-- Date and Time picker -->
    <link href='<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css' rel="stylesheet">
    <!-- Star rating -->
    <link href='<?php echo base_url()?>assets/css/rateit.css' rel="stylesheet">
    <!-- Star rating -->
    <link href='<?php echo base_url()?>assets/css/jquery.cleditor.css' rel="stylesheet">
    <!-- jQuery UI -->
    <link href='<?php echo base_url()?>assets/css/jquery-ui.css' rel="stylesheet">
    <!-- prettyPhoto -->
    <link href='<?php echo base_url()?>assets/css/prettyPhoto.css' rel="stylesheet">
    <!-- Font awesome CSS -->
    <link href='<?php echo base_url()?>assets/css/font-awesome.min.css' rel="stylesheet">
    <link href='<?php echo base_url()?>assets/css/font-awesome.css' rel="stylesheet">
    <link href='<?php echo base_url()?>assets/css/maintenance-plan.css' rel="stylesheet">
    <!-- Custom CSS -->
    <link href='<?php echo base_url()?>assets/css/style.css' rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="#">
</head>

<body>


<!-- Logo & Navigation starts -->

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Logo -->
                <div class="logo" style="margin-top:-5px;">
                    <h1><a href='<?php echo base_url ()?>'>Crontech - Admin </a></h1>

                </div>
            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="navbar navbar-inverse" role="banner">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                            <span>Menu</span>
                        </button>
                    </div>
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">

                            <li class="dropdown" style="margin-top: -10px;">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Hi,
                                    <strong><?php echo $username; ?></strong> !
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu animated fadeInUp">
                                    <li><a href='<?php echo base_url()?>home/my_account'>Profile</a></li>
                                    <li><?php echo anchor('/auth/logout/', 'Logout'); ?></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Logo & Navigation ends -->



<!-- Page content -->

<div class="page-content blocky">
<div class="container">

<div class="sidebar-dropdown"><a href="#">MENU</a></div>
<div class="sidey" style="font-weight: normal;">


    <div class="side-cont">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href='<?php echo base_url ()?>'><i class="icon-home"></i> Dashboard</a></li>
            <li class="has_submenu">
                <a href='<?php echo base_url()?>home/billing'>
                    <i class="icon-inr"></i> Billing
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href='<?php echo base_url()?>home/billing'>Invoices</a></li>
                </ul>
            </li>
            <li><a href='<?php echo base_url ()?>home/request'><i class="icon-ticket"></i>Raise New Request</a></li>

            <li><a href='<?php echo base_url()?>home/change_plan'><i class="icon-retweet"></i>Change Your Plan</a></li>
            <li><a href='<?php echo base_url ()?>home/contact'><i class="icon-user-md"></i>Contact our Expert</a></li>
        </ul>
    </div>
</div>





