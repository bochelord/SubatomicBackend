<?PHP
require_once("./include/membersite_config.php");

$fgmembersite->LogOut();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="style/fg_membersite.css">
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body>

<div class="header">
	<img src="../wp-content/themes/sub/library/images/logo.png">
</div>

<h2>You have logged out</h2>
<p>
<a href='login.php'>Login Again</a>
</p>

</body>
</html>