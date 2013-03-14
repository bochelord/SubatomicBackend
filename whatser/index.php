<?PHP
require_once("../include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Whatser Project Index</title>
      <link rel="STYLESHEET" type="text/css" href="../style/fg_membersite.css">
      <link rel="stylesheet" type="text/css" href="style/facedef.css">
      <link rel="stylesheet" type="text/css" href="style/main.css">
      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>
<body>

<br>
<div class="container">

<div class="well">

<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
	    <a class="brand" href="http://www.subatomic-inc.com"><img src="../images/logo_inv.png" width="103" height="50"></a>
	    <ul class="nav">
	      <li class="divider-vertical"><a href=".">Home</a></li>
	      <li><a href="#">Link</a></li>
	      <li><a href="#">Link</a></li>
	    </ul>
	    <div class="pull-right">
	    	Logged in as <?= $fgmembersite->UserFullName(); ?>
	    </div>
	  </div>
	</div>


<div id='fg_membersite_content'>
<p>
Logged in as: <?= $fgmembersite->UserFullName() ?>
</p>
<br>
<h2>Whatser Project Index</h2>
Whatser Prototypes: 
	
	<p>
	<a href='whatser_campaign_management_4/'>Campaign Management v4.0 - Campaign View added (1-Mar-2013)</a>
	</p>
	<p>
	<a href='whatser_campaign_management_3/'>Campaign Management v3.0 - overview added (27-Feb-2013)</a>
	</p>
	<p>
	<a href='whatser_campaign_management_2/'>Campaign Management v2.0 - (12-Feb-2013)</a>
	</p>
	<p>
	<a href='whatser_campaign_management_1/'>Campaign Management v1.0 - (5-Feb-2013)</a>
	</p>
	<p>
	<a href='whatser_accounts_1.5/'>Account Management v1.5 - (31-Jan-2013)</a>
	</p>
	<p>
	<a href='whatser_Account_Creation_1.8/'>Account Creation v1.8 - (30-Jan-2013)</a>
	</p>
	<p>
	<a href='whatser_Account_Creation_1.5/'>Account Creation v1.5 - (28-Jan-2013)</a>
	</p>
	<p>
	<a href='whatser_Flows_1/'>User Flows - (25-Jan-2013)</a>
	</p>
	<p>
	<a href='whatser_accounts_1/'>Account Management v1.0 - (23-Jan-2013)</a>
	</p>
	<p>
	<a href='Whatser_LandingPages_2.5/'>Landing Pages v2.5 - (9-Jan-2013)</a>
	</p>
	<p>
	<a href='whatser_create_Campaign_4/'>Create Campaign v4.0 - (19-Dec-2012)</a>
	</p>
	<p>
	<a href='Whatser_LandingPages_2/'>Landing Pages v2.0 - (18-Dec-2012)</a>
	</p>
	<p>
	<a href='whatser_create_Campaign_ALT/'>Create Campaign Redesign - (10-Dec-2012)</a>
	</p>
	<p>
	<a href='Whatser_LandingPages/'>Landing Pages - (29-Nov-2012)</a>
	</p>
	<p>
	<a href='whatser_create_Campaign/'>Create Campaign/Steps - (28-Nov-2012)</a>
	</p>
	
</div>

</div>
</body>
</html>
