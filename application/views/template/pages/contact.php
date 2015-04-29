<div class="container">
    <div class="row-fluid">
        <div class="span12 page-info">
            <h1 class="h1-page-title">Contact Us</h1>

            <h2 class="h2-page-desc">
                Get In Touch With Us
            </h2>
        </div>
    </div>
</div>
</div>
<!-- BreadCrumb -->
<div class="breadcrumb-container">
    <div class="container">
        <div class="row-fluid">
            <ul class="breadcrumbs">
                <li>
                    <a href='<?php echo base_url()?>'>Home</a>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- BreadCrumb -->
<!-- Contact Map -->

<div class="contact-map">

    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps/ms?msa=0&amp;msid=215735993485136423731.0004ec9e62ac17a1a4dbd&amp;gl=in&amp;ie=UTF8&amp;t=m&amp;iwloc=0004ec9e62b03a60cb89f&amp;ll=28.601323,77.031945&amp;spn=0,0&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.co.in/maps/ms?msa=0&amp;msid=215735993485136423731.0004ec9e62ac17a1a4dbd&amp;gl=in&amp;ie=UTF8&amp;t=m&amp;iwloc=0004ec9e62b03a60cb89f&amp;ll=28.601323,77.031945&amp;spn=0,0&amp;source=embed" style="color:#0000FF;text-align:left">My Saved Places</a> in a larger map</small>
</div>
<!-- Contact Map -->
<div class="body-wrapper">
    <div class="container">
        <div class="row-fluid">
            <div class="span8">
                <h3 class="h3-body-title">
                    Leave A Message
                </h3>

                <p class="body_paragraph contact-paragraph">

                </p>

                <form action="../email/send_mail.php" class="form-wrapper" id="contact-form" method="post" novalidate>

                    <div class="control-group">
                        <label class="control-label" for="name">Name *</label>

                        <div class="controls">
                            <input type="text" id="name" name="name" class="input-large" required/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="user-email"> E-mail *</label>

                        <div class="controls">
                            <!-- type email used by jquery validate -->
                            <input type="text" name="email" id="email" class="input-large" required/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="message"> Message *</label>

                        <div class="controls">
                            <!-- type email used by jquery validate -->
                            <textarea name="msg_body" id="msg_body" class="span8" required></textarea>
                        </div>
                    </div>


                    <div class="space-sep-10"></div>
                    <div class="control-group">
                        <label class="control-label"></label>

                        <div class="controls">
                            <input type="submit" value="Submit"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="span3 offset1 sidebar">

                <!-- column separator -->
                <div class="separator"></div>
                <!-- column separator -->

                <div class="sidebar-block">
                    <h3 class="h3-sidebar-title">
                        Contact Me
                    </h3>

                    <div class="sidebar-icon-item">
                        <i class="icon-phone"></i> +91-98182-24438
                    </div>
                    <div class="sidebar-icon-item">
                        <i class="icon-phone"></i> +91-91360-02676
                    </div>
                    <div class="sidebar-icon-item">
                        <i class="icon-envelope-alt"></i> ask@dranjanakalia.com
                    </div>
                    <div class="sidebar-icon-item">
                        <i class="icon-home"></i> <strong>Address: </strong>106,Pocket-B,</br> Sector-13 Dwarka </br>New Delhi-110078
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
         