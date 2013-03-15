<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}

?>
<!DOCTYPE html>
<html>
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Log in - Nucleus | Subatomic Backend</title>

      <!-- Styles based on cleanbootstrap -->

      <link rel="stylesheet" type="text/css" href="clean_bootstrap/css/bootstrap.css" />
      <link rel="stylesheet" type="text/css" href="clean_bootstrap/css/theme.css" />

      <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

      <link rel="stylesheet" type="text/css" href="clean_bootstrap/css/lib/animate.css" media="screen, projection">
      <link rel="stylesheet" href="clean_bootstrap/css/sign-in.css" type="text/css" media="screen" />

      <!-- End Styles -->

      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body>

<div class="header">
  <img src="../wp-content/themes/sub/library/images/logo.png">
</div>


<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
<div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->


<!-- Log in from Clean Bootstrap-->
<!-- Sign In Option 1 -->
    <div id="sign_in1">
        <div class="container">
            <div class="row">
                <div class="span12 header">
                    <h4>Log in to your account</h4>
                    <p>
                        There are many variations of passages of Lorem alteration in some form  injected humour these randomised words .</p>

                    <div class="span4 social">
                        <a href="#" class="circle facebook">
                            <img src="img/face.png" alt="">
                        </a>
                         <a href="#" class="circle twitter">
                            <img src="img/twt.png" alt="">
                        </a>
                         <a href="#" class="circle gplus">
                            <img src="img/gplus.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="span3 division">
                    <div class="line l"></div>
                    <span>or</span>
                    <div class="line r"></div>
                </div>

                <div class="span12 footer">
                    <form>
                        <input type="text" placeholder="Email">
                        <input type="password" placeholder="Password">
                        <input type="submit" placeholder="Confirm Password" value="sign in">
                    </form>
                </div>

                <div class="span12 proof">
                    <div class="span5 remember">
                        <label class="checkbox">
                            <input type="checkbox"> Remember me
                        </label>
                        <a href="reset.html">Forgot password?</a>
                    </div>

                    <div class="span3 dosnt">
                        <span>Don’t have an account?</span>
                        <a href="sign-up.html">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Log in from Clean Bootstrap END-->

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>

</body>
</html>