<!-- Footer starts -->
<footer>
    <div class="container">

        <div class="copy text-center">
            Copyright 2013 &copy; - <a href="http://crontech.in">Crontech-Technology Beyond Excellence</a>
        </div>

    </div>
</footer>
<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span>

<!-- Javascript files -->
<!-- jQuery -->
<script src='<?php echo base_url()?>assets/js/jquery.js'></script>
<!-- Bootstrap JS -->
<script src='<?php echo base_url()?>assets/js/bootstrap.min.js'></script>
<!-- jQuery UI -->
<script src='<?php echo base_url()?>assets/js/jquery-ui-1.10.2.custom.min.js'></script>
<!-- jQuery Peity -->
<script src='<?php echo base_url()?>assets/js/peity.js'></script>
<!-- Calendar -->
<script src='<?php echo base_url()?>assets/js/fullcalendar.min.js'></script>
<!-- jQuery Star rating -->
<script src='<?php echo base_url()?>assets/js/jquery.rateit.min.js'></script>
<!-- prettyPhoto -->
<script src='<?php echo base_url()?>assets/js/jquery.prettyPhoto.js'></script>

<!-- jQuery flot -->
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src='<?php echo base_url()?>assets/js/excanvas.min.js'></script><![endif]-->
<script src='<?php echo base_url()?>assets/js/jquery.flot.js'></script>
<script src='<?php echo base_url()?>assets/js/jquery.flot.pie.js'></script>
<script src='<?php echo base_url()?>assets/js/jquery.flot.stack.js'></script>
<script src='<?php echo base_url()?>assets/js/jquery.flot.resize.js'></script>



<!-- Gritter plugin -->
<script src='<?php echo base_url()?>assets/js/jquery.gritter.min.js'></script>
<!-- CLEditor -->
<script src='<?php echo base_url()?>assets/js/jquery.cleditor.min.js'></script>
<!-- Date and Time picker -->
<script src='<?php echo base_url()?>assets/js/bootstrap-datetimepicker.min.js'></script>
<!-- jQuery Toggable -->
<script src='<?php echo base_url()?>assets/js/bootstrap-switch.min.js'></script>
<!-- Respond JS for IE8 -->
<script src='<?php echo base_url()?>assets/js/respond.min.js'></script>
<!-- HTML5 Support for IE -->
<script src='<?php echo base_url()?>assets/js/html5shiv.js'></script>
<!-- Custom JS -->
<script src='<?php echo base_url()?>assets/js/custom.js'></script>

<!-- Javascript for graph -->

<script type="text/javascript">


    $(function () {

        /* Bar Chart starts */

        var d1 = [];
        for (var i = 0; i <= 35; i += 1)
            d1.push([i, parseInt(Math.random() * 30)]);

        var d2 = [];
        for (var i = 0; i <= 35; i += 1)
            d2.push([i, parseInt(Math.random() * 30)]);


        var stack = 0, bars = true, lines = false, steps = false;

        function plotWithOptions() {
            $.plot($("#home-chart"), [ d1, d2 ], {
                series: {
                    stack: stack,
                    lines: { show: lines, fill: true, steps: steps },
                    bars: { show: bars, barWidth: 0.8 }
                },
                grid: {
                    borderWidth: 0, hoverable: true, color: "#777"
                },
                colors: ["#16cbe6", "#0fa6bc"],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.8 } ] }
                }
            });
        }

        plotWithOptions();

        $(".stackControls input").click(function (e) {
            e.preventDefault();
            stack = $(this).val() == "With stacking" ? true : null;
            plotWithOptions();
        });
        $(".graphControls input").click(function (e) {
            e.preventDefault();
            bars = $(this).val().indexOf("Bars") != -1;
            lines = $(this).val().indexOf("Lines") != -1;
            steps = $(this).val().indexOf("steps") != -1;
            plotWithOptions();
        });

        /* Bar chart ends */

    });



</script>

</body>

</html>