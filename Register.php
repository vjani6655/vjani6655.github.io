<?php

$host = "localhost";
$username = "vjani_photo";
$password = "Jani@1994";
$database = "vjani_photography";
$table ="restraunt";


mysql_connect("$host", "$username", "$password") or die(mysql_error());
mysql_select_db("$database") or die(mysql_error());

$mysql ="INSERT INTO $table (Name, Email, Comment) VALUES ('$_POST[Name]','$_POST[Email]','$_POST[Comment]')";
$Name = $_POST ['Name'];
$Email = $_POST ['Email'];
$Comment = $_POST ['Comment'];

$to = 'varun@vjani.com';
$subject = ' Feedback from CUSTOMER';
$msg = " Your Name: $Name\n" .
"Your Email: $Email\n" .
"Your Message: $Comment";

mail ($to, $subject, $msg, 'From:' . $Email);

if(!mysql_query($mysql))
die(mysql_error());
mysql_close();

header( "refresh:2;url=http://www.vjani.com/restraunt/thanks.html" );

?>


<html lang="en">
<head>
    <meta charset="UTF-8">	
	<title>Listraunt</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="jquery.mobile.structure-1.0.1.css" />
	<link rel="apple-touch-icon" href="images/launch_icon_57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="images/launch_icon_72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/launch_icon_114.png" />
	<link rel="stylesheet" href="jquery.mobile-1.0.1.css" />
	<link rel="stylesheet" href="custom.css" />
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/jquery.mobile-1.0.1.min.js"></script>
</head> 

<body> 
<div data-role="page" id="home" data-theme="c">

	<div data-role="content">
	
	<div id="branding">
		<h1>Thanks For contacting Listraunt we will get back to  </h1>
	</div>
	
	<div class="choice_list"> 
	<h1> Please select your state </h1>
	
	<ul data-role="listview" data-inset="true" >
	<li><a href="choose_nsw.html" data-transition="slidedown">  <h3> New South Wales</h3></a></li>
	<li><a href="choose_vic.html"  data-transition="slidedown">  <h3> Victoria </h3></a></li>
	
	</ul>	
		
	<div id="contact_buttons">	
		<a href="contactus.html" data-role="button" > Contact Us </a> 	
			
	</div>		
	
	</div>
	
	</div>

</div><!-- /page -->
</body>
</html>