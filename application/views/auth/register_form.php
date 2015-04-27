    <?php
    if ($use_username) {
        $username = array(
            'name'	=> 'username',
            'id'	=> 'username',
            'value' => set_value('username'),
            'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
            'style' => 'height: 35px;',


        );
    }
    $email = array(
        'name'	=> 'email',
        'id'	=> 'email',
        'value'	=> set_value('email'),
        'style' => 'height: 35px;',
    );
    $maintenance_plan = array (
        'name'  => 'plan',
        'id'    => 'plan',
        'value' => set_value('plan')

    );
    $email = array(
        'name'	=> 'email',
        'id'	=> 'email',
        'value'	=> set_value('email'),
        'style' => 'height: 35px;',
    );
    $password = array(
        'name'	=> 'password',
        'id'	=> 'password',
        'value' => set_value('password'),
        'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
        'style' => 'height: 35px;',
    );
    $confirm_password = array(
        'name'	=> 'confirm_password',
        'id'	=> 'confirm_password',
        'value' => set_value('confirm_password'),
        'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
        'style' => 'height: 35px;',
    );
    $captcha = array(
        'name'	=> 'captcha',
        'id'	=> 'captcha',
        'maxlength'	=> 8,
    );
    ?>
    <?php echo form_open($this->uri->uri_string()); ?>

        <!doctype html>

        <head>


        <meta charset="utf-8">
        <title>Web Design Company India, Web development India, Gurgaon</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Web design company India - Crontech is one of the best Web Design and Software Development organisation based in New-Delhi, India. Established with a vision to grow and excel. We have extensive & in-depth knowledge be it Website Design; Application Development our experience in managing technology projects, right from selecting tools and platforms, to implementing information technology solutions has shown results.">
        <meta name="keywords" content="crontech,web design company,website development company India,,website designing india,android development,mobile development,website maintenance,web apps,seo company, affordable web design ">
        <meta name="author" content="">

        <link rel="stylesheet" href='<?php echo base_url ()?>assets/css/reg-css/css/style.css'/>
        <link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>
        <!--[if IE]>


        <!-- Le styles -->
        <link rel="stylesheet" type="text/css" href='<?php echo base_url()?>assets/Featuredwork/css/style.css'/>
        <link rel="stylesheet" type="text/css" href='<?php echo base_url()?>assets/Featuredwork/css/jquery.jscrollpane.css' media="all" />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Coustard:900' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href='<?php echo base_url()?>assets/css/style8.css'/>
        <link rel="stylesheet" type="text/css" href='<?php echo base_url()?>assets/css/style_common.css'/>
        <link rel="stylesheet" type="text/css" href='<?php echo base_url()?>assets/css/maintenance-plan.css'/>
        <!-- <link rel="stylesheet" type="text/css" href='<?php echo base_url()?>/assets/css/reset.css'/>-->
        <link href='<?php echo base_url()?>css/style.css' rel="stylesheet" type="text/css" />



        <link rel="stylesheet" type="text/css" href='<?php echo base_url()?>assets/css/whatwedo_style.css' media="all" />
        <link href='<?php echo base_url()?>assets/css/bootstrap.css' rel="stylesheet">



        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <script src='<?php echo base_url()?>assets/css/reg-css/js/jquery.uniform.min.js' type="text/javascript" charset="utf-8"></script>

        <script type="text/javascript" charset="utf-8">
            $(function(){
                $("input:checkbox, input:radio, input:file, select").uniform();
            });
        </script>

        <style type="text/css">
            body {
                /* padding-top: 80px;*/
                padding-bottom: 40px;

            }
            .sidebar-nav {
                padding: 9px 0;
            }

            @media (max-width: 980px) {
                /* Enable use of floated navbar text */
                .navbar-text.pull-right {
                    float: none;
                    padding-left: 5px;
                    padding-right: 5px;
                }
            }

                /* CUSTOMIZE THE CAROUSEL
                    -------------------------------------------------- */

                /* Carousel base class */
            .carousel {
                margin-bottom: 0px;
            }

            .carousel .container {
                position: relative;
                z-index: 9;
            }

            .carousel-control {
                height: 80px;
                margin-top: 0;
                font-size: 120px;
                text-shadow: 0 1px 1px rgba(0,0,0,.4);
                background-color: transparent;
                border: 0;
                z-index: 10;
            }

            .carousel .item {
                height: 500px;
            }
            .carousel img {
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                height: 500px;
            }

            .carousel-caption {
                background-color: transparent;
                position: static;
                max-width: 550px;
                padding: 0 20px;
                margin-top: 200px;
            }
            .carousel-caption h2{
                margin: 0;
                line-height: 1.25;
                color: #fff;
                text-shadow: 0 1px 1px rgba(0,0,0,.4);
            }
            .carousel-caption .lead {
                margin: 0;
                line-height: 1.25;
                color: #ffd012;
                /* text-shadow: 0 1px 1px rgba(0,0,0,.4);*/
            }

            .carousel-caption .btn {
                margin-top: 10px;
            }

        </style>



        <link href='<?php echo base_url()?>assets/css/bootstrap-responsive.css' rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src='<?php echo base_url()?>assets/js/html5shiv.js'></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href='<?php echo base_url()?>assets/ico/favicon.ico'>        <!-- CSS -->


    </head>

        <!-- Main HTML -->

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
           <div class="navbar-inner">

                <div class="container-fluid">
                    <a href='<?php echo base_url()?>index.php/home'><img class="brand" src="<?php echo base_url('assets/images/logo.png');?>" alt="Crontech.in"></a>

                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">


                            <li class="<?=($this->uri->segment(2)==='home')?'active':'"'?>"><a href='<?php echo base_url()?>home' title="Home">Home</a></li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href='<?php echo base_url()?>home/pages/whyus' >About<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="<?=($this->uri->segment(2)==='aboutus')?'active':''?>"><a href='<?php echo base_url()?>home/pages/aboutus' title="Aboutus">About Crontech</a></li>
                                    <li class="<?=($this->uri->segment(2)==='whyus')?'active':''?>"><a href='<?php echo base_url()?>home/pages/whyus' title="WhyUs">Why Us?</a></li>
                                    <li class="<?=($this->uri->segment(2)==='meetourteam')?'active':''?>"><a href='<?php echo base_url()?>home/pages/ourexperts' title="meetourteam">Meet Our Experts</a></li>
                                    <li class="<?=($this->uri->segment(2)==='meetourteam')?'active':''?>"><a href='<?php echo base_url()?>home/pages/missionvalues' title="missionvalues">Mission & Values</a></li>
                                </ul>
                            </li>

                            <li><a href='<?php echo base_url()?>#websitemaintenance' title="Pricing">Pricing</a></li>
                            <li><a href='<?php echo base_url()?>home/view/portfolio' title="Portfolio">Portfolio</a></li>
                            <li><a href='<?php echo base_url()?>home/services/services' title="Services">Services</a></li>
                            <!--   <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href='<?php echo base_url()?>home/services/services' title="Services">Services<b class="caret"></b></a>
                                                 <ul class="dropdown-menu">
                               <li><a href='<?php echo base_url()?>home/services/services' title="Services">Web Design</a></li>
                                <li><a href='<?php echo base_url()?>home/services/services' title="Services">Web Application Development</a></li>
                                <li><a href='<?php echo base_url()?>home/services/services' title="Services">Mobile App Design & Development</a></li>
                                <li><a href='<?php echo base_url()?>home/services/services' title="Services">SEo & Online Marketing</a></li>
                                <li><a href='<?php echo base_url()?>home/services/services' title="Services">e-commerce Development</a></li>
                                <li><a href='<?php echo base_url()?>home/services/services' title="Services">Social Media</a></li>
                                <li><a href='<?php echo base_url()?>home/services/services' title="Services">Strategy and Consulting </a></li>
                                <li class="divider"></li>
                                <li class="nav-header">Discover the potential of IT development services with us.</li>

                            </ul> -->
                            <li><a href='<?php echo base_url()?>home/clients/list' title="Client List">Clients</a></li>
                            <li><a href='<?php echo base_url()?>home/contactus/address' title="Contact us">Contact Us</a></li>
                            <li class="loginbutton"><a href='<?php echo base_url()?>admin' title="Contact us">Client Login</a></li>
                        </ul>

                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>


        <div class="row-fluid" align= "center" style="background-color:#fffcf0; text-align: center; width:100%;/* background: url('<?php echo base_url() ?>/assets/images/not_included.jpg') 100% 8%;*/
            -webkit-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
            -moz-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
            box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
            -webkit-transition: all 400ms linear;
            -moz-transition: all 400ms linear;
            -o-transition: all 400ms linear;
            -ms-transition: all 400ms linear;
            transition: all 400ms linear;
            ">
    <div style="text-align: center; padding:100px;
        background: #fff url('<?php echo base_url ()?>assets/images/reg/bg.jpg') repeat top left;">
        <article>
            <h1>Signup with Crontech</h1>
            <form>
                <ul>
                    <li>
                        <label for="name">Your Name:</label>
                        <input type="text" size="40" id="name" />
                    </li>
                    <li>
                        <label for="email">Your Email:</label>
                        <input type="email" size="40" id="email" />
                    </li>
                    <li>
                        <label for="car">What's my options:</label>
                        <select id="car">
                            <option>Volvo</option>
                            <option>Saab</option>
                            <option>Mercedes</option>
                            <option>Audi</option>
                            <option>Other&hellip;</option>
                        </select>
                    </li>
                    <li>
                        <label><input type="radio" name="radio" /> Pick one</label>
                        <label><input type="radio" name="radio" /> And stick with it</label>
                    </li>
                    <li>
                        <label><input type="checkbox" /> Can haz tickbox?</label>
                    </li>
                    <li>
                        <label>Upload a file:</label>
                        <input type="file" />
                    </li>
                    <li>
                        <label for="message">Message:</label>
                        <textarea cols="50" rows="5" id="message"></textarea>
                    </li>
                </ul>
                <p>
                    <button type="submit" class="action">Call to action</button>
                    <button type="reset" class="right">Reset</button>
                </p>
            </form>
        </article>
    </div>

</div>

        <div class="copy text-center">
            Copyright 2013 &copy; - <a href="http://crontech.in">Crontech - Technology Beyond Excellence</a>
        </div>


    </body>
    </html>





