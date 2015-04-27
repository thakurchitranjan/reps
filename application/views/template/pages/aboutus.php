<?php
$this->load->view('template/common/banner_top');
?>

<div align="center" style="margin:30px; color:#333333; min-height: 500px; font-size: 14px;">
    <p style="width:80%; text-align:justify; margin-bottom:20px;">

        <?php
        $this->load->view('template/common/about_left');
        ?>

    <div class="row-fluid">

        <div class="span9">
            <?php foreach ($rows as $r): ?>

                <div><?php echo $r->description; ?></div>
            <?php endforeach; ?>

        </div>
    </div>
    <!--/span-->
</div><!--/row-->

