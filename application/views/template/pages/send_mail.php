<?php

if(isset($_POST['email'])){

$mailbody=$_POST['msg_body'];
$cust_email_id=$_POST['email'];
$cust_name=$_POST['name'];
$email_body= $mailbody . ' CustomerName : ' . $cust_name . ' Customer Email ID: ' . $cust_email_id ;

$this->email->from('ask@dranjanakalia.com', 'Dr Anjana Kalia');
$this->email->to('dr_anjana_kalia@yahoo.co.in');
$this->email->subject('Website Query');
$this->email->message($email_body);
$this->email->send();

//email to customer'

$this->email->from('ask@dranjanakalia.com', 'Dr Anjana Kalia');
$this->email->to($cust_email_id);
$this->email->subject('Query: Dr Anjana Kalia');
$this->email->message('Thank you for contacting us we will surely get back to you soon.');
$this->email->send();

}

?>
<div class="container">
    <div class="row-fluid">
        <div class="span12 page-info">
            <h1 class="h1-page-title">Query</h1>

            <h2 class="h2-page-desc">

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
                <li>Query</li>
            </ul>
        </div>
    </div>
</div>
<!-- BreadCrumb -->
<div class="body-wrapper">
    <div class="container">
        <div class="row-fluid">

            <div class="span10">
                <h1 style="color: #49a80d"> Thank you for contacting us, we will be get back to you soon.</h1>
            </div>
        </div>
    </div>
</div>


