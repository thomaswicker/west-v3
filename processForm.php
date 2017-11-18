

<meta name="viewport" content="user-scalable=no; width=device-width; initial-scale=1; maximum-scale=1">

<style>

body {
  background-color: #000000;
  text-decoration: none !important;
  background-image: url(images/bg_topography_grn.jpg) !important;
  background-size: cover;
}

.alert {
  width: 85%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 70px; 
  border-radius: 0px !important;
}

.alert-danger {
  background-color: #FFFFFF !important;
  border-color: #ffffff !important;
  color: #ffffff;
   border-radius: 0px;
}

.alert-info {
  background-color: #FFFFFF !important;
  border-color: #72A430 !important;
  color: #000000;
  border-radius: 0px;
}

.success {
  float: left;
  clear: right;
  width: 95%;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  font-size: 2.1em;
  color: #000000;
  margin: 0px 0px -15px 0px;
  z-index: 10000000000000;
}

.successA {
  float: left;
  clear: right;
  width: 95%;
  font-family: 'Lato', sans-serif;
  font-weight: 300; 
  font-size: 2.1em;
  color: #000000;
  margin: 0px 0px -15px 0px;
  z-index: 10000000000000;
}

.successTag {
  float: left;
  clear: right;
  width: 95%;
  margin: 5px 0px 0px 0px;
  padding: 0px 0px 5px 0px;
  font-style: italic;
  font-size: 1.2em;
  color: #72A430;
  z-index: 10000000000000;
  border-bottom: 1px solid #72A430;
}

.failureTag {
  float: left;
  clear: right;
  width: 95%;
  margin: 5px 0px 0px 0px;
  padding: 0px 0px 5px 0px;
  font-style: italic;
  font-size: 1.2em;
  color: #72A430;
  z-index: 10000000000000;
  border-bottom: 1px solid #72A430;
}

.nameBlock {
  float: left;
  clear: right;
  margin: 0px 0px 20px 0px;
}

.nameBlock_Line1 {
  font-size: 1.4em;
  color: #000000;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
}

.nameBlock_Line1A {
  font-size: 1.4em;
  color: #000000;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
}

.nameBlock_Line2 {
  font-size: 1.1em;
  color: #000000;
  margin: -1px 0px 20px 0px;
}

.nameBlock_Line2 a {
  color: #777777 !important;
  font-weight: 300;
}

.contactMeSuccessCloseBTN {
  float: right;
  clear: left;
  width: 50px;
  height: 50px;
  right: 0;
  margin: -65px -40px 10px 0px; 
  z-index: 10000000000000000;
}

.contactMeSuccessCloseBTN2 {
  float: right;
  clear: left;
  width: 50px;
  height: 50px;
  right: 0;
  margin: -65px -40px 10px 0px; 
  z-index: 10000000000000000;
}

.closeBTN {
  display: block;
  margin: 30px 0px 0px 15px;    
}

.closeBTN_top {
  display: block;
  margin: 30px 0px 30px 15px;   
}

.btn-success {
   background-color: #72A430;
    border: none !important;
    text-transform: uppercase;
    border-radius: 0px !important;
    color: #FFFFFF !important;
    font-size: .85em;

    &:hover {
        background-color: darken(#72A430, 20%);  
    }
}

.btn-danger {
  border-radius: 0px !important; 
  text-transform: uppercase;
  margin: 30px 0px 40px 15px;
}

.btn-info {
  border-radius: 0px !important; 
  text-transform: uppercase;
  margin: 0px 0px 40px 15px;
}

.alert-danger {
  background-color: #FFFFFF !important;
  border-color: #72A430 !important;
  color: #000000;
  border-radius:  0px;
}

/*mobile & tablet styles*/
@media only screen and (min-width:768px) and (max-width:992px) {
.success {
  float: left;
  clear: right;
  font-family: 'Lato', sans-serif;
  font-weight: 300; 
  font-size: 1.7em;
  margin: 0px 0px 0px 0px;
}

.successTag {
  margin: 0px 0px 0px 0px;
  font-style: italic;
  font-size: 1.1em;
}

.contactMeSuccessCloseBTN {
  float: right;
  clear: left;
  width: 50px;
  height: 50px;
  right: 0;
  margin: -65px -40px 10px 0px; 
  z-index: 10000000000000000;
}

.contactMeSuccessCloseBTN2 {
  float: right;
  clear: left;
  width: 50px;
  height: 50px;
  right: 0;
  margin: -35px -40px 10px 0px; 
  z-index: 10000000000000000;
}
}

@media only screen and (min-width:0px) and (max-width:768px) {
.success {
  float: left;
  clear: right;
  font-family: 'Lato', sans-serif;
  font-weight: 300; 
  font-size: 1.6em;
  margin: 0px 0px 0px 0px;
}

.successA {
  float: left;
  clear: right;
  width: 95%;
  font-family: 'Lato', sans-serif;
  font-weight: 300; 
  font-size: 1.4em;
  margin: 0px 0px -15px 0px;
  z-index: 10000000000000;
}

.successTag {
  margin: 0px 0px 0px 0px;
  font-style: italic;
  font-size: .9em;
}

.nameBlock_Line1A {
  font-size: 1.4em;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
}

.contactMeSuccessCloseBTN {
  float: right;
  clear: left;
  position: relative;
  width: 50px;
  height: 50px;
  right: 0;
  margin: -60px -40px 10px 0px; 
  z-index: 10000000000000000;
}

.contactMeSuccessCloseBTN2 {
  float: right;
  clear: left;
  position: relative;
  width: 50px;
  height: 50px;
  right: 0;
  margin: -90px -40px 10px 0px; 
  z-index: 10000000000000000;
}

.alertLink {
  font-size: .8em;  
}

}

</style>

<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic' rel='stylesheet' type='text/css'>

<link href="http://www.west-inc.com/wp-content/themes/west_theme/css/bootstrap.min.css" rel="stylesheet">

<?php
    $error = false;
    $sent = false;

    if(isset($_POST['submit'])) {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['comments'])) {
            $error = true;
        } 
        else {

            $to = "marketing@west-inc.com";

            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
      $phone = trim($_POST['phone']);
            $comments = trim($_POST['comments']);

            $subject = "Contact Form";

            $message =  "Name: $name \r\n Email: $email \r\n Phone: $phone \r\n Comments: $comments";
            $headers = "From:" . $name;
            $mailsent = mail($to, $subject, $message, $headers);

            if($mailsent) {
                $sent = true;
            }
       }
  }
?>
<?php if($error == true){ ?>

<div class="sent alert alert-danger">

  <p class="successA col-lg-12 col-md-12 col-sm-12 col-xs-12">Error... please try again.</p>
    
  <p class="failureTag col-lg-12 col-md-12 col-sm-12 col-xs-12">There was an error sending the form, please fill out completely and try again.</p><br>
  <p class="nameBlock col-lg-12 col-md-12 col-sm-12 col-xs-12">
  </p><br>

<a href="http://www.west-inc.com/locations" role="button" class="closeBTN_top btn btn-success">Click here to close</a><br><br>

<?php } if($sent == true) { ?>

<div class="sent alert alert-info">

<p class="success col-lg-12 col-md-12 col-sm-12 col-xs-12">Message Sent...</p>

<p class="successTag col-lg-12 col-md-12 col-sm-12 col-xs-12">Thank you for contacting WEST. We will respond to your inquiry within 3 business days.</p><br>
<p class="nameBlock col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <h2 class="nameBlock_Line1 col-lg-12 col-md-12 col-sm-12 col-xs-12">Western Ecosystems Technology</h2>
    <p class="nameBlock_Line2 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 0px 0px 10px 0px;">415 W. 17th St, Suite 200</br>
Cheyenne, Wyoming 82001

</p>
<p class="nameBlock_Line2 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 0px 0px 10px 0px;">Phone: (307) 634-1756</br>

Fax: (307) 637-6981</p></br>

  <h3 class="nameBlock_Line2 col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="mailto:marketing@west-inc.com">marketing@west-inc.com</a></h3>
</p>


<a href="http://www.west-inc.com/locations" role="button" class="closeBTN btn btn-success">Click here to close</a>


<br><br>


</div>

<?php } ?>  
<script type="text/javascript" src="js/bootstrap.js"></script>
