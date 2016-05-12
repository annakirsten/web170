<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!--begin meta-->
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />

<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>

<!--styles-->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600|Bitter:400,400italic,700" rel="stylesheet" type="text/css"/>  <!--google font-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css"/>  <!--flexslider css-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all"/>

<!--scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>  <!--flexslider js-->
<script>
	$(document).ready(function() {
		$('.flexslider').flexslider();
		$("#toggle").click(function() {
			$("#navigation").toggle();
		});
	});
</script>

<!--start WP head-->
<?php wp_head(); ?>
<!--end WP head-->

</head>

<body <?php body_class($class); ?>>

<header>

<a href="<?php echo get_settings('home'); ?>"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>

<a href="<?php echo get_settings('home'); ?>"><img id="logo-mobile" src="<?php bloginfo('template_directory'); ?>/images/logo-mobile.png" alt="logo mobile"></a>

<div id="portal">
<a href="#">Patient Portal: Login</a>
</div>  <!--end portal-->

<!--start toggle -->
<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/toggle.png" alt="Toggle Menu">
<!--end toggle -->

</header>
<!--MAIN NAV-->

<?php wp_nav_menu(array('theme_location' =>'main-menu', 'container' => 'nav', 'container_id' => 'navigation',)); ?>

<!--<nav id="navigation">
    <ul id="main-menu">
    	<li class="mobile"><a href="#">Patient Portal: Login</a></li>
        <li class="sm nav"><a href="#">About Us</a>
        	<ul class="sub-menu">
        		<li><a href="#">Mission</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Physicians</a></li>
                <li><a href="#">Physician Assistants</a></li>
                <li><a href="#">Staff</a></li>
            </ul>  <!--end sub-menu-->
        <!--</li>-->
        <!--<li class="lg nav"><a href="main.html">Procedures &amp; Services</a>
        	<ul class="sub-menu">
        		<li><a href="#">Skin Exams &amp; Biopsies</a></li>
                <li><a href="#">Photodynamic Therapy (Blue Light)</a></li>
                <li><a href="#">Surgical Procedures</a></li>
            </ul>  <!--end sub-menu-->
        <!--</li>-->
        <!--<li class="med nav"><a href="#">Educational Info</a>
            <ul class="sub-menu">
        		<li><a href="#">ABCDEs of Skin Cancer</a></li>
                <li><a href="#">Glossary of Terms</a></li>
                <li><a href="#">Skin Cancer Myths</a></li>
                <li><a href="#">6 Skin Types</a></li>
                <li><a href="#">Self Examination</a></li>
                <li><a href="#">Sun Safety</a></li>
            </ul>  <!--end sub-menu-->
		<!--</li>-->
        <!--<li class="med nav"><a href="#">Patient Resources</a>
        	<ul class="sub-menu">
        		<li><a href="#">Patient Forms &amp; Notices</a></li>
                <li><a href="#">Insurance Information</a></li>
                <li><a href="#">Cancellation &amp; Missed Appointment Policy</a></li>
            </ul>  <!--end sub-menu-->
        <!--</li>-->
        <!--<li class="sm nav"><a href="#">Contact Us</a>
        	<ul class="sub-menu">
        		<li><a href="#">Seattle</a></li>
                <li><a href="#">Bellevue</a></li>
            </ul>  <!--end sub-menu-->
        <!--</li>-->
    <!--</ul>
</nav>-->