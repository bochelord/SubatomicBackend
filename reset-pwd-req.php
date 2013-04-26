<?PHP
require_once("./include/membersite_config.php");

$emailsent = false;
if(isset($_POST['submitted']))
{
   if($fgmembersite->EmailResetPasswordLink())
   {
        $fgmembersite->RedirectToURL("reset-pwd-link-sent.html");
        exit;
   }
}

?>

<!DOCTYPE html>
<html>
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Reset Password Request - Nucleus | Subatomic Backend</title>

      <!-- Styles based on cleanbootstrap -->

      <link rel="stylesheet" type="text/css" href="clean_bootstrap/css/bootstrap.css" />
      <link rel="stylesheet" type="text/css" href="clean_bootstrap/css/theme.css" />
      <link href='http://fonts.googleapis.com/css?family=Cuprum:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

      <link rel="stylesheet" type="text/css" href="clean_bootstrap/css/reset.css">
      
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>

</head>
<body style="padding-top: 0px;">

<!-- Clean Header Start -->
<div class="navbar navbar-inverse navbar-static-top">
      <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.php">
                <img src="images/logo_w.png">
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <!-- <li><a href="index.php">HOME</a></li> -->
                    <li><a href="about.php">ABOUT NUCLEUS</a></li>                  
                    
                    <!-- <li><a class="btn-header active" href="login.php">Log in</a></li> -->
                </ul>
            </div>
        </div>
      </div>
</div>
<!-- Clean Header End-->

<!-- Form Code Start -->
<!-- <div id='fg_membersite'>
<form id='resetreq' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Reset Password</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >Your Email*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='resetreq_email_errorloc' class='error'></span>
</div>
<div class='short_explanation'>A link to reset your password will be sent to the email address</div>
<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form> -->
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->


<div id="reset_pwd" class="reset_page">
        <div class="container">
            <div class="row">
                <div class="span12 box_wrapper">
                <div class="span12 box">
                    <div>
                        <div class="head">
                            <h4>Enter your email address below to receive a link to reset your password.</h4>
                            <div class="line"></div>
                        </div>
                        <div class="form">
                            <form id='resetreq' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                                <input type='hidden' name='submitted' id='submitted' value='1'/>
                                <div><span class='error'><span class='label label-important'><?php echo $fgmembersite->GetErrorMessage(); ?></span><br></span></div>
                                <input type="text" placeholder="Email address" name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
                                <span id='resetreq_email_errorloc' class='error'><span class='label label-important'></span></span>
                                <input type="submit" name='Submit' class="btn" value="Reset password"/>
                            </form>
                        </div>
                    </div>
                </div>
                <p class="already">Wait, I do remember my password...<a href="login.php"> Log in</a></p>
            </div>
            </div>
        </div>
    </div>




<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("resetreq");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("email","req","Please provide the email address used when registered");
    frmvalidator.addValidation("email","email","Please provide the email address used when registered");

// ]]>
</script>

</div>
<!--
Form Code End
-->






<!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row credits">
                <div class="span12">
                    <div class="row social">
                        <div class="span12">
                            <a href="http://www.facebook.com/subatomicnl" class="facebook">
                                <span class="socialicons ico1"></span>
                                <span class="socialicons_h ico1h"></span>
                            </a>
                            <a href="http://www.twitter.com/subatomicnl" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                            <a href="http://gplus.to/subatomicnl" class="gplus">
                                <span class="socialicons ico3"></span>
                                <span class="socialicons_h ico3h"></span>
                            </a>
                            <a href="http://pinterest.com/subatomicnl" class="pinterest">
                                <span class="socialicons ico5"></span>
                                <span class="socialicons_h ico5h"></span>
                            </a>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="span12">
                            <img src="images/logo_mini.png"><br>nucleus v0.4<br>©2013 Subatomic<br><br>Made with ♥ in Amsterdam<br> Crafted by <a href="http://twitter.com/bochelord" target="_blank">@bochelord</a>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </footer>




    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>



</body>
</html>