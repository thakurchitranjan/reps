<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'style' => 'border:none; width: 100%;',

);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
    'style' => 'border:none; width: 100%;',

);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
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

    <?php echo form_open($this->uri->uri_string()); ?>



    <!-- Page content -->

    <div class="page-content blocky">
        <div class="container">



            <div class="row">
                <div class="col-md-12">
                    <div class="awidget login-reg">
                        <div class="awidget-head">

                        </div>
                        <div class="awidget-body">
                            <!-- Page title -->
                            <div class="page-title text-center">
                                <h2>Login</h2>
                                <hr />
                            </div>
                            <!-- Page title -->

                            <br />
                            <form action='submit' class="form-horizontal" role="form">

                                <div class="form-group">

                                    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo form_label($login_label, $login['id']); ?></label>
                                    <div class="col-lg-10">
                                        <span class="form-control"><?php echo form_input($login); ?></span>
                                        <span style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></span>
                                    </div>
                                </div>
<br/>
                                <div class="form-group">
                                    <label for="inputPassword1" class="col-lg-2 control-label"><?php echo form_label('Password', $password['id']); ?></label>
                                    <div class="col-lg-10">

                                        <span class="form-control"><?php echo form_password($password); ?></span>
                                        <span style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></span>
                                    </div>
                                </div>

                                <hr />
                                <br/>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-info">Sign in</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                        <?php if ($show_captcha) {
                                            if ($use_recaptcha) { ?>
                                                <tr>
                                                    <td colspan="2">
                                                        <div id="recaptcha_image"></div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
                                                        <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
                                                        <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="recaptcha_only_if_image">Enter the words above</div>
                                                        <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
                                                    </td>
                                                    <td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
                                                    <td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
                                                    <?php echo $recaptcha_html; ?>
                                                </tr>
                                            <?php } else { ?>
                                                <tr>
                                                    <td colspan="3">
                                                        <p>Enter the code exactly as it appears:</p>
                                                        <?php echo $captcha_html; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
                                                    <td><?php echo form_input($captcha); ?></td>
                                                    <td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
                                                </tr>
                                            <?php }
                                        } ?>
<br/>
                                        <tr>
                                            <br/>
                                            <td colspan="3">
                                                <?php echo form_checkbox($remember); ?>
                                                <?php echo form_label('Remember me', $remember['id']); ?>
                                                <span> - </span>
                                                <?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>
                                              <!--
                                                <?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register Now'); ?> -->
                                            </td>
                                        </tr>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <div class="clearfix"></div>

                    </div>
                    </div>

                </div>

            </div>

        </div>





            <div class="copy text-center">
                Copyright 2013 &copy; - <a href="http://crontech.in">Crontech - Technology Beyond Excellence</a>
            </div>

    <!-- Footer ends -->


</body>


</html>
