<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
    'style' => 'border:none; width: 100%;',
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email';
} else {
	$login_label = 'Email';
}
?>
<?php echo form_open($this->uri->uri_string()); ?>


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
        <!-- Gritter -->
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
                <div class="col-md-12">
                    <!-- Logo -->
                    <div class="logo text-center">
                        <h1><a href="index.html">Crontech Admin</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo & Navigation ends -->



    <!-- Page content -->

    <div class="page-content blocky">
        <div class="container">



            <div class="row">
                <div class="col-md-12" style="margin-top: -50px; margin-bottom: -30px;">
                    <div class="awidget login-reg">
                        <div class="awidget-head">

                        </div>
                        <div class="awidget-body">
                            <!-- Page title -->
                            <div class="page-title text-center">
                                <h2>Forgot Password</h2>
                                <hr />
                            </div>
                            <!-- Page title -->

                            <br />
                            <form action="reset" class="form-horizontal" role="form">

                                <div class="form-group">
                                    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo form_label($login_label, $login['id']); ?></label>
                                    <div class="col-lg-10">
                                        <span class="form-control"><?php echo form_input($login); ?></span>
                                        <span style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></span>

                                    </div>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-info"> Submit </button>
                                        <h5>Click here for <a href='<?php echo base_url ()?>'>login</a></h5>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </form>

                            <div class="clearfix"></div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <div style="text-align: center;">
            Copyright 2013 &copy; - <a href="http://crontech.in" target="new_window">Crontech - Technology Beyond Excellence</a>
        </div>

    </div>
    </body>
    </html>
