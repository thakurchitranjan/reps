x<div class="section-content bottom-body animated"
     data-animtype="fadeInLeft"
     data-animrepeat="0"
     data-animspeed="1s"
     data-animdelay="0.2s" >
    <div class="container" >

        <div class="row-fluid">
            <div class="span12">
                <div class="message-box clearfix">


                    <div class="message-content">
                        <h2>We use<span class="colored"> Ayurveda </span> as our guiding principles for all our diet and holistic health management programs.
                        </h2>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<footer>
    <div class="footer">

        <div class="container">
            <div class="footer-wrapper">
                <div class="row-fluid">


                    <!-- Footer Col. -->
                    <div class="span9 footer-col">
                        <div class="footer-title">
                            About me
                        </div>
                        <div class="footer-content">
                            <div class="footer-content-logo">
                                <img src='<?php echo base_url() ?>assets/images/Logogreen.png' alt=""/>
                            </div>
                            <div class="footer-content-text" style="text-align: justify;">
                                Dr. Anjana Kalia is an expert in the area of weight loss and management.
                                She has been actively working in the area of Nutrition based on blood type
                                and Ayurvedic physical constitution (Vata, Pitta, and Kapha) since 2003.
                                </br></br>
                                She strongly believes that our ancient science has given us a lot in form
                                of Ayurveda which gives us a framework for healthy lifestyle. By following the simple principles
                                of Ayurveda we can, not only prevent many lifestyle related diseases but also can have great medical
                                improvement in diseases like diabetes, hypertension, PCOD, obesity, high cholesterol etc.
                            </div>
                        </div>
                    </div>
                    <!-- //Footer Col.// -->


                    <!-- Footer Col.
                    <div class="span3 footer-col">
                        <div class="footer-title">

                        </div>

                    </div>
                    <!-- //Footer Col.// -->


                    <!-- Footer Col. -
                    <div class="span3 footer-col">
                        <div class="footer-title">

                        </div>
                        <div class="footer-content">
                            <ul class="footer-category-list">

                            </ul>
                        </div>
                    </div>
                    <!-- //Footer Col.// -->


                    <!-- Footer Col. -->
                    <div class="span3 footer-col">
                        <div class="footer-title">
                            Get in touch
                        </div>
                        <div class="footer-content">
                            <div class="footer_getintouch footer-contact">
                                <form action="../email/send_mail.php" id="footer-contact-form" method="post">
                                    <div class="footer-getintouch-row">
                                        <input name="name" type="text" class="input" placeholder="Name" required/>
                                    </div>
                                    <div class="footer-getintouch-row">
                                        <input name="email" id="email" type="email" class="input" placeholder="E-mail"
                                               required/>
                                    </div>
                                    <div class="footer-getintouch-row">
                                        <textarea name="msg_body" class="input" placeholder="Message"
                                                  required></textarea>
                                    </div>
                                    <div class="footer-getintouch-row">
                                        <input type="submit" value="SEND"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //Footer Col.// -->

                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="copyright-text">&copy; DrAnjanaKalia.com | Designed by <a
                                href="http://www.crontech.in/" target="_blank"><span style="color: #fafafa;">Crontech</span></a></div>
                    </div>
                    <div class="span6">
                        <div class="social-icons">
                            <ul>
                                <li>
                                    <a href="http://www.linkedin.com/pub/dr-anjana-kalia/a/622/20" title="linkedin" target="_blank"
                                       class="social-media-icon linkedin-icon">Linkedin</a>
                                </li>
                                <li>
                                    <a href="http://www.youtube.com/channel/UCRM1PXdHyC3YFkQWnqF7qnw" title="youtube" target="_blank"
                                       class="social-media-icon youtube-icon">Youtube Channel</a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/Dr.Anjana.Kalia" title="facebook" target="_blank"
                                       class="social-media-icon facebook-icon">facebook</a>
                                </li>



                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- wrapper end -->

<!-- remprod -->
<script type="text/x-handlebars-template" id="css-skin">
    /*
    REMOVE THIS IF YOU DON'T WANT THE COLOR PICKER
    This is used for color picker style customisation, remove it if you don't want the color picker.
    * after you purchase the theme, there is two versions one come with colorpicker and the other come without
    colorpicker.
    */
    /*
    Main Body Background Color
    */
    #wrapper{
    background-color: {{body_bg_color}};
    }

    /* Header Colors */
    .header_wrapper, .top_wrapper{
    background: -webkit-radial-gradient(farthest-side circle at center, {{bottom_header_start_gd_color}} 0%,
    {{bottom_header_end_gd_color}} 100%);
    background: radial-gradient(farthest-side circle at center, {{bottom_header_start_gd_color}} 0%,
    {{bottom_header_end_gd_color}} 100%);
    }
    .top-header{
    background-color: {{top_header_bg_color}};
    }
    .searchbox{
    background-color: {{search_bg_color}};
    }
    .navigation > li > a, .navigation > li > a > i,.sticky-navigation .navigation a {
    color: {{menu_color}} ;
    }

    .navigation > li:hover > a,
    .navigation > li > a:hover,
    .navigation > li > .activelink,.navigation > li:hover > a > i{
    color: {{menu_hover_color}};
    }
    .navigation ul{
    background-color: {{sub_menu_bg_color}};
    border-color: {{sub_menu_border_color}};
    }
    .navigation ul li a{
    color: {{sub_menu_link_color}};
    background-color: {{sub_menu_bg_color}};
    }
    .navigation .icon-arrow-menu{
    color: {{sub_menu_border_color}};
    }
    .navigation ul li:hover > a {
    background-color: {{sub_menu_link_hover_bg_color}};
    color: {{sub_menu_link_hover_color}};
    }
    .navigation .icon-arrow-submenu, .navigation ul li:hover > a i{
    color: {{sub_menu_link_color}};
    }
    .sticky-navigation{
    background-color: {{sticky_menu_bg_color_ie}};
    background-color: {{sticky_menu_bg_color}};
    }
    .h1-page-title{
    color: {{header_page_title_color}};
    }
    .h2-page-desc{
    color: {{header_page_info_color}};
    }
    .breadcrumbs li:last-child {
    color: {{body_link_color}};
    }

    /* Page Content Colors */
    .body-wrapper a, .tab a:hover, accordion .title:hover {
    color: {{body_link_color}};
    }
    .body-wrapper a:hover {
    color: {{body_link_hover_color}};
    }
    .callout-box,.team-member .team-member-content, .feature .feature-content{
    border-color: {{ui_elem_border_color}};
    }
    .team-member-progress-bar{
    background: {{ui_elem_border_color}};
    }
    .tab a.active:after {
    background-color:{{ui_elem_border_color}};
    border-color: {{ui_elem_border_color}};
    }
    .content-box.content-style2 h4 i {
    color: {{body_icon_color}};
    }
    .accordion .title:hover {
    color:{{ui_elem_border_color}};
    }
    .button-main, .body-wrapper input[type="submit"], .body-wrapper input[type="button"], button.button-main{
    background-color: {{button_bg_color}};
    border-color: {{button_border_color}};
    color: {{button_text_color}} !important;
    text-shadow: 0 1px 0 {{button_text_shadow_color}};
    }
    .button-main:hover, .body-wrapper input[type="submit"]:hover, .body-wrapper input[type="button"]:hover,
    button.button-main:hover,
    .button-main:active, .body-wrapper input[type="submit"]:active, .body-wrapper input[type="button"]:active,
    button.button-main:active {
    background-color: {{button_hover_bg_color}};
    color: {{button_text_color}} !important;
    text-shadow: 0 1px 0 {{button_text_shadow_color}};
    }
    .carousel-container .carousel-arrows{
    background-color: {{body_bg_color}};
    }
    .carousel-container .carousel-icon:hover{
    background-color: {{body_main_skin_color}};
    }
    .blog-post-icon,.comments-list .children .comment:before,.portfolio-filter li a.portfolio-selected,
    .portfolio-filter li a:hover{
    background-color: {{body_main_skin_color}};
    }
    .comments-list .children .comment:after{
    border-color: transparent transparent transparent {{body_main_skin_color}};;
    }
    .side-navigation .menu-item.current-menu-item a, .side-navigation .menu-item:hover a:after,
    .side-navigation .menu-item:hover a{
    color: {{body_sidebar_nav_color}}
    }
    .icons-list.colored-list li:before{
    color: {{body_main_skin_color}};
    }
    .blog-post-date .day, .blog-post-date .month{
    color: {{body_main_skin_color}};
    }
    .pagination .prev, .pagination .next, .pagination a:hover, .pagination a.current{
    background-color: {{body_main_skin_color}};
    color: #fff;
    }
    div.pagination a{
    border-color: {{body_main_skin_color}};
    color: {{body_main_skin_color}};
    }
    .contact-map{
    border-color: {{body_main_skin_color}};
    }
    /* Footer Area Colors */
    .footer:after{
    background-color: {{footer_border1_color}}
    }
    .footer:before{
    background-color: {{footer_border2_color}}
    }
    .footer{
    background: -webkit-radial-gradient(farthest-side circle at center, {{top_footer_start_gd_bg_color}} 0%,
    {{top_footer_end_gd_bg_color}} 100%);
    background: radial-gradient(farthest-side circle at center, {{top_footer_start_gd_bg_color}} 0%,
    {{top_footer_end_gd_bg_color}} 100%);
    }
    .footer .copyright{
    background-color: {{bottom_footer_bg_color}};
    color: {{bottom_footer_text_color}};
    }
    .footer .copyright a{
    color: {{bottom_footer_link_color}};
    }
    .footer .copyright a:hover{
    color: {{bottom_footer_link_hover_color}};
    }
    .footer .footer-col .footer-content .input{
    background-color: {{footer_input_bg_color}};
    }
    .footer .footer-col .footer-content input[type=submit], .footer button{
    background-color: {{footer_button_bg_color}};
    }
    .footer .footer-col .footer-content input[type=submit]:hover, .footer button:hover, .footer button:active{
    background-color: {{footer_button_hover_bg_color}};
    }
    .footer .footer-col .footer-content,.footer .footer-col .footer-content .footer-content-text{
    color: {{footer_text_color}};
    }
    .footer .footer-col .footer-content,.footer .footer-col p{
    color: {{footer_text_color}};
    }

    .footer .footer-col .footer-title{
    border-color: {{footer_heading_border_color_ie}};
    border-color: {{footer_heading_border_color}};
    color: {{footer_heading_color}};
    }
    .footer .footer-col .footer-content a{
    color: {{footer_link_color}};
    }
    .footer .footer-col .footer-content a:hover{
    color: {{footer_link_hover_color}};
    }

</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-46128792-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<script type="text/javascript"> var $default_skin = "mixed-modern-colors";</script>

<script type="text/javascript" src='<?php echo base_url() ?>assets/js/_jq.js'></script>
<script type="text/javascript" src='<?php echo base_url() ?>assets/js/_jquery.placeholder.js'></script>
<script type="text/javascript" src='<?php echo base_url() ?>assets/js/bootstrap.min.js'></script>

<!-- remprod -->
<script type="text/javascript" src='<?php echo base_url() ?>assets/js/_colorpicker.js'></script>
<script type="text/javascript" src='<?php echo base_url() ?>assets/js/_handlebars.js'></script>
<script type="text/javascript" src='<?php echo base_url() ?>assets/js/_skins.js'></script>
<script type="text/javascript" src='<?php echo base_url() ?>assets/js/_skinchooser.js'></script>
<!-- end remprod -->

<script src='<?php echo base_url() ?>assets/js/activeaxon_menu.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/animationEnigne.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/arwa.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/bootstrap.min.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/ie-fixes.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jquery.base64.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jquery.carouFredSel-6.2.1-packed.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jquery.cycle.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jquery.cycle2.carousel.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jquery.easing.1.3.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jquery.easytabs.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jquery.eislideshow.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jquery.isotope.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jquery.prettyPhoto.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jquery.themepunch.plugins.min.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jquery.themepunch.revolution.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jquery.tipsy.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jquery.validate.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/jQuery.XDomainRequest.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/retina.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/timeago.js' type="text/javascript"></script>
<script src='<?php echo base_url() ?>assets/js/tweetable.jquery.js' type="text/javascript"></script>
</body>

<!-- Mirrored from activeaxon.com/arwa/ by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 10 Oct 2013 07:05:06 GMT -->
</html>
