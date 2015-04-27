</div>
<!-- top banner -->
<div class="container narrow row-fluid" align="Center"
     style=" margin-top:0px; background: url('<?php echo base_url()?>assets/images/portfolio.jpg') 100% 8%; padding-bottom:8px;
         padding-top:10px;

         -webkit-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
         -moz-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
         box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
         /* -webkit-border-radius: 12px;
          -moz-border-radius: 12px;
          border-radius: 12px;*/
         -webkit-transition: all 400ms linear;
         -moz-transition: all 400ms linear;
         -o-transition: all 400ms linear;
         -ms-transition: all 400ms linear;
         transition: all 400ms linear;

         ">


    <div style="padding-top:10px; padding-bottom:20px; "><span
            style="font-size:35px; color:#fff; line-height: 50px;"> Login</span>
        <span style="font-size:15px; color:#eaeaea; vertical-align: middle;"></span>
    </div>
</div>

<div class="container narrow row-fluid" align="Center" style=" margin-top:0px; background: url('<?php echo base_url()?>/assets/images/bg_image.png') 100% 8%; padding-bottom:8px;
    padding-top:40px;
    -webkit-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    -moz-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    /* -webkit-border-radius: 12px;
     -moz-border-radius: 12px;
     border-radius: 12px;*/
    -webkit-transition: all 400ms linear;
    -moz-transition: all 400ms linear;
    -o-transition: all 400ms linear;
    -ms-transition: all 400ms linear;
    transition: all 400ms linear;

    ">



<!-- login form code -->
<div class="form1">
<?php echo form_open(base_url().'login')?>
<div class="formtitle">Login to your account</div>
<?php echo validation_errors(); ?>
<span class="error"><b><?php echo $login_failed; ?></b></span>

			<div class="input nobottomborder">
				<div class="inputtext">Username: </div>
				<div class="inputcontent">
<input type="text" name="username" value="<?php echo set_value('username'); ?>"/>

				</div>
			</div>

			<div class="input nobottomborder">
				<div class="inputtext">Password: </div>
				<div class="inputcontent">

<input type="password" name="password" value="<?php echo set_value('password'); ?>" /><br/>
</div>
			</div>

			<div class="buttons">

<input class="orangebutton" type="submit" value="Submit" name="submit_login"/>

</div>
    <p style="text-align: right; padding-right: 5px;"><a href="">Need help<b>?</b></a></p>

<?php echo form_close()?>
</div>
    <p style="margin-top: 10px;">
        <a href='<?php echo base_url()?>register'>
           Create an account
        </a>
    </div>