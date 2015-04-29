<?php
$pname = $this->uri->segment(3);

if ($pname == 'aboutus' or $pname == 'whyus' Or $pname == "ourexperts" Or $pname == "missionvalues") {

    $pname = 'aboutus';
    $titlename = 'ABOUT US';
    $description = 'Our business acumen and rich experience gives us an edge over our competitors. We analyze, we explore, we create and we deliver on time!';

}
if ($pname == 'portfolio') {

    $pname = 'portfolio';
    $titlename = 'PORTFOLIO';
    $description = 'We understand that in today’s competitive marketplace, we all need a competitive advantage!';
}
if ($pname == 'services') {

    $pname = 'services';
    $titlename = 'SERVICES';
    $description = 'Our business acumen and rich experience gives us an edge over our competitors. We analyze, we explore, we create and we deliver on time!';
}

if ($pname == 'list') {

    $pname = 'list';
    $titlename = 'CLIENTS';
    $description = 'Our business acumen and rich experience gives us an edge over our competitors. We analyze, we explore, we create and we deliver on time!';
}
if ($pname == 'address') {

    $pname = 'address';
    $titlename = 'CONTACT US';
    $description = 'Our business acumen and rich experience gives us an edge over our competitors. We analyze, we explore, we create and we deliver on time!';
}
$pname = "assets/images/" . $pname . ".jpg";
?>

<div class="container narrow row-fluid" align="Center"
     style=" margin-top:0px; background: url('<?php echo base_url() ?><?php echo $pname ?>') 100% 8%; padding-bottom:8px;
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


    <div style="padding-top:40px; "><span
            style="font-size:35px; color:#fff; line-height: 100px;"> <?php echo $titlename?>   |   </span>
        <span style="font-size:15px; color:#eaeaea; vertical-align: middle;"><?php echo $description ?></span>
    </div>
</div>

