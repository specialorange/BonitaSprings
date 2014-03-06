<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- #BeginTemplate "master.dwt" -->

<head>
<!-- #BeginEditable metas" -->

<title>Friends of Bonita Springs Public Library, Florida: book sales, events, luncheons and programs</title>

<meta name="keywords" content="friends group, library, bonita springs"/>

<meta name="description" content="The official web site of the Friends of Bonita Springs Public Library in southwest Florida."/>

<link rel="stylesheet" type="text/css" title="CSS" href="js/galleryview.css" media="screen" />

<script type="text/javascript" src="js/jquery-1.4.2.js"></script>

<script type="text/javascript" src="js/jquery.galleryview-2.1.1.js"></script>

<script type="text/javascript" src="js/jquery.timers-1.2.js"></script>

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!-- #EndEditable" -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" title="CSS" href="styles.css" media="screen" />
<style type="text/css">
.style1 {
	color: #7C8034;
}
.style2 {
	border-width: 0px;
	margin-left: 18px;
}
.auto-style1 {
	margin-right: 17px;
}
.auto-style2 {
	border-width: 0px;
}
</style>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
</head>
<body>

<?php include 'shared/top.php'; ?>

<div id="main">
<div id="wrap">
<!-- #BeginEditable "content" -->
	<div id="bird"></div>
	<div style="z-index:100;margin:0 auto;padding-left:40px;" >
	<script type="text/javascript">   
	  $(document).ready(function(){
	    $('#slideshow').galleryView();
	  });
	</script>

	<ul id="slideshow" >
	  <li><img src="images/home/membership1.jpg" alt="Memebrship" style="border:0px"/>
	  			<div class="panel-overlay"><h3><a href="membership.php">Paypal donations and 2014 memberships now available.  Get your membership today!</a></h3></div>
	  </li>
<!-- Event   -->
          <?php
            if (time() < strtotime("04/11/2014 12:01AM")) {
              echo "<li><img src=\"images/home/luncheon-410.jpg\" alt=\"Death and Dessert\" style=\"border:0px\"/>
              <div class=\"panel-overlay\"><h3><a href=\"events.php\">Death & Dessert - reservations required</a></h3></div>
              </li>";
            }
          ?>  
<!-- Event	 -->
          <?php
            if (time() < strtotime("06/01/2014 12:01AM")) {
              echo "<li><img src=\"images/home/ebooks.jpg\" alt=\"Did You Know? ebooks are for sale!\" style=\"border:0px\"/>
			  			<div class=\"panel-overlay\"><h3><a href=\"events.php\">Did You Know? ebooks are for sale!</a></h3></div>
						  </li>";
            }
          ?>  

	  <li><img src="images/home/book-nook.jpg" alt="Books Nook" style="border:0px"/>
	  			<div class="panel-overlay"><h3><a href="purchase.php">Book Nook Open Everyday! >>></a></h3></div>
	  </li>
	</ul>

	<div class="auto-style1">
		<p>The Friends of the Bonita Springs Public Library support the programming, infrastructure, educational opportunities and children's programs for your local library.  <a href="help.php" style="color:#FF5050"> Support Our Work &raquo;</a></p>

		<p>The Friends raise funds to provide programs, capital improvements, (i.e. we funded children's speakers for the summer programs, the tv behind the circulation desk, reading festival and the meeting room projection system.)</p>

		<p>We also sponsor author luncheons, book sales and other events for our members.</p>
	</div>
</div>

<!-- #EndEditable -->
<br />
</div>

<?php include 'shared/menu.php'; ?>

</div>

<?php include 'shared/footer.php'; ?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-16243304-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
<!-- #EndTemplate -->
</html>