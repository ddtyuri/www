<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Contact WinnerMac</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/headers/header1.css" />
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="assets/css/style_responsive.css" />
    <link rel="shortcut icon" href="favicon.ico" />        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css" type="text/css" media="screen" />          
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color" />
    <link rel="stylesheet" href="assets/css/themes/headers/default.css" id="style_color-header-1" />    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head> 

<body>
<?php include 'header.php';?>






<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
        <h1 class="color-green pull-left">Contact Us</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Contact</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->



<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid">
		<div class="span9">
            <div class="headline"><h3>Contacts</h3></div>
            <p>You can get the price list and a WinnerMac representative will contact you within one business day.</p><br />
			<form method="post" action="up.php"/>
                <label>Name</label>
                <input type="text" name ="name" class="span7 border-radius-none" />
                <label>Email <span class="color-red">*</span></label>
                <input type="text" name = "email" class="span7 border-radius-none" />
                <label>Message</label>
                <textarea name = "message" rows="8" class="span10"></textarea>
                <p><button type="submit" class="btn-u">Send Message</button></p>
            </form>
        </div><!--/span9-->
        
		<div class="span3">
        	<!-- Contacts -->
            <div class="headline"><h3>Contacts</h3></div>
            <ul class="unstyled who margin-bottom-20">
                <li><a href="#"><i class="icon-home"></i>No.6 of Cuizhu Boulevard,High-Tech and Developing District,Zhengzhou,China ,450000</a></li>
                <li><a href="#"><i class="icon-envelope-alt"></i>sales@winnermac.com</a></li>
                <li><a href="#"><i class="icon-phone-sign"></i>+86 157 38800866</a></li>
                <li><a href="#"><i class="icon-phone-sign"></i>+86 185 30979990</a></li>
            </ul>



        	<!-- Why we are? -->
            <div class="headline"><h3>Why Us?</h3></div>
            <p>Over last 6 years, WinnerMac already sold her products to USA, Canada, Germany, United Kingdom, Denmark, Sweden, Poland, Italy, Greece, Australia, New Zealand, Japan, Korean, India, South Africa, and so on. We are always on the way, never stop….</p>
            <ul class="unstyled">
            	<li><i class="icon-ok color-green"></i> Automation Production Capability </li>
            	<li><i class="icon-ok color-green"></i> Innovation capability </li>
            	<li><i class="icon-ok color-green"></i> Quality Control Capability</li>
            </ul>
        </div><!--/span3-->
    </div><!--/row-fluid-->        


	
	
	
	
	
	<?php include 'ourSolution.php';?>		
	
	
	
	
	
	
	
</div><!--/container-->		
<!--=== End Content Part ===-->

	<?php include 'footerForcontact.php';?>	

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>        
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/pages/contact.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();                
        Contact.initMap();        
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/js/respond.js"></script>
<![endif]-->

</body>
</html> 