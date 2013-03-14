<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="style/facedef.css">
      <link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>


<div class="header">
	<br>
</div>

<div class="container">

	
	<div class="well">



<div class="navbar ">
	  <div class="navbar-inner">
	    <a class="brand" href="http://www.subatomic.nl"><img src="images/logo_alt.png" width="200"></a>
	    <ul class="nav-header-backend">
	      Subatomic Backend
	    </ul>
	    <ul class="pull-right">
	      version 0.3 17012013
	    </ul>
	  </div>
	</div>

<div id='fg_membersite_content'>
<h2>Backend root</h2>
Welcome back <?= $fgmembersite->UserFullName(); ?>!

<p><a href='change-pwd.php'>Change password</a></p>

<p>
<h1>Projects:</h1>
<a href='/backend/whatser/'>Whatser</a></p>
<p><a href='/backend/seatz/'>SeatZ Network</a></p>
<br><br><br>
<p><a href='logout.php'>Logout</a></p>
</div>

</div>
</div>

<div id="footer">
      <div class="container">
        <p class="muted credit">&copy;2013 Subatomic-inc</p>
      </div>
</div>
</body>
</html>
